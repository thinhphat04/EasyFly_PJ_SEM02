<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FlightController extends Controller
{
    public function search(Request $request)
    {
        $departure = $request->input('depart');
        $currentTime = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $request->validate([
            'to' => 'different:from',
            'depart' => 'after_or_equal:' . $currentTime,
            'return' => ['after_or_equal:' . $departure],
            'passenger' => ['required', 'numeric', 'min:1']
        ], [
            'to.different' => 'Airports can not be the same',
            'return.after_or_equal' => 'The return day must be a date after or equal to departure day'
        ]);
        if ($request->class == "Economy") {
            $depart = $request->depart;
            $return=$request->return;
            $result = DB::table('flight as fli')
                ->join('airport as a', 'fli.FromPlace', '=', 'a.airport_code')
                ->join('airport as b', 'fli.ToPlace', '=', 'b.airport_code')
                ->join('plane as c', 'fli.planecode', '=', 'c.PlaneCode')
                ->join('seat_class as d', 'fli.flight_id', '=', 'd.Flight_id')
                ->select('a.city as fromcity', 'b.city as tocity', 'fli.*', 'c.PlaneName', 'd.price_class_PT as price', 'd.num_class_PT as seat')
                ->where('FromPlace', '=', $request->from)
                ->where('ToPlace', '=', $request->to)
                ->where('num_class_PT', '>=', $request->passenger)
                ->whereDate('departure', '=', $depart)
                ->get();
            $class = $request->class;
            $passenger = $request->passenger;
            return view('flight-list', ['results' => $result, 'class' => $class, 'passenger' => $passenger, 'return'=>$return]);
        } else {
            $depart = $request->depart;
            $return=$request->return;
            $result = DB::table('flight as fli')
                ->join('airport as a', 'fli.FromPlace', '=', 'a.airport_code')
                ->join('airport as b', 'fli.ToPlace', '=', 'b.airport_code')
                ->join('plane as c', 'fli.planecode', '=', 'c.PlaneCode')
                ->join('seat_class as d', 'fli.flight_id', '=', 'd.Flight_id')
                ->select('a.city as fromcity', 'b.city as tocity', 'fli.*', 'c.PlaneName', 'd.price_class_TG as price', 'd.num_class_TG as seat')
                ->where('FromPlace', '=', $request->from)
                ->where('ToPlace', '=', $request->to)
                ->where('num_class_TG', '>=', $request->passenger)
                ->whereDate('departure', '=', $depart)
                ->get();
            $class = $request->class;
            $passenger = $request->passenger;
            return view('flight-list', ['results' => $result, 'class' => $class, 'passenger' => $passenger,'return'=>$return]);
        }
    }

    public function booking(Request $request, $id)
    {
        $price1 = $request->input('price1');
        $price2 = $request->price2;
        $flightid1 = $request->flightid1;
        $flightid2 = $request->flightid2;
        $class = $request->class;
        $qty = $request->quantity;
        //  dd($qty);
        $depticket = DB::table('flight')
        ->where('flight_id', $flightid1)->first();
        $arrticket = DB::table('flight')
        ->where('flight_id', $flightid2)->first();
        return view('booking-details', ['depart' => $depticket, 'arri'=>$arrticket, 'price1' => $price1, 'price2' =>$price2, 'class' => $class, 'qty' => $qty]);
    }

    public function return(Request $request){
        $from = $request->from;
        $to = $request->to;
        $depart = $request->departure;
        $class= $request->class;
        $passenger = $request->qty;
        $flightid1 = $request->flightid1;
        // dd($id1);
        if ($class == "Economy") {
            $result = DB::table('flight as fli')
                ->join('airport as a', 'fli.FromPlace', '=', 'a.airport_code')
                ->join('airport as b', 'fli.ToPlace', '=', 'b.airport_code')
                ->join('plane as c', 'fli.planecode', '=', 'c.PlaneCode')
                ->join('seat_class as d', 'fli.flight_id', '=', 'd.Flight_id')
                ->select('a.city as fromcity', 'b.city as tocity', 'fli.*', 'c.PlaneName', 'd.price_class_PT as price', 'd.num_class_PT as seat')
                ->where('FromPlace', '=', $from)
                ->where('ToPlace', '=', $to)
                ->where('num_class_PT', '>=', $passenger)
                ->whereDate('departure', '=', $depart)
                ->get();
                //   dd($passenger);
            $price1=$request->price;
            
            return view('flight-list-return', ['results' => $result, 'class' => $class, 'passenger' => $passenger,'flightid1'=>$flightid1,'price1'=>$price1]);
        } else {
            $result = DB::table('flight as fli')
                ->join('airport as a', 'fli.FromPlace', '=', 'a.airport_code')
                ->join('airport as b', 'fli.ToPlace', '=', 'b.airport_code')
                ->join('plane as c', 'fli.planecode', '=', 'c.PlaneCode')
                ->join('seat_class as d', 'fli.flight_id', '=', 'd.Flight_id')
                ->select('a.city as fromcity', 'b.city as tocity', 'fli.*', 'c.PlaneName', 'd.price_class_TG as price', 'd.num_class_TG as seat')
                ->where('FromPlace', '=', $from)
                ->where('ToPlace', '=', $to)
                ->where('num_class_TG', '>=', $passenger)
                ->whereDate('departure', '=', $depart)
                ->get();
            $price1=$request->price; 
            
            return view('flight-list-return', ['results' => $result, 'class' => $class, 'passenger' => $passenger,'flightid1'=>$flightid1,'price1'=>$price1]);
        }
    }    


    public function processBooking(Request $request)
    {
        $totalprice = $request->totalprice;
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $gender = $request->input('gender');
        $quantity = $request->quantity;
        $totalquantity = $quantity*2;
        $price1=$request->price1;
        $price2=$request->price2;
        $class=$request->class;
        $flightid1 = $request->flightid1;
        $flightid2 = $request->flightid2;
        // dd($quantity,$price1,$price2,$class,$flightid1,$flightid2);
        if(Auth::check()){
            $customerId = DB::table('customer')->insertGetId([
                'AccountId' => Auth::id(),
                'firstname' => $firstname,
                'lastname' => $lastname,
                'phone' => $phone,
                'email' => $email,
                'gender' => $gender
            ]); 
            // dd($customerId);
            for ($i = 1; $i <= $quantity; $i++){
                $depticket = DB::table('ticket')->insert([
                    'flight_id'=> $flightid1,
                    'Customer_id'=>$customerId,
                    'type'=>$class,
                    'price'=>$price1,
                    'pass_firstname'=>$request->pass_firstname[$i],
                    'pass_lastname'=>$request->pass_lastname[$i],
                    'pass_gender'=>$request->pass_gender[$i],
                    'pass_dob'=>Carbon::parse($request->birthday[$i])->format('Y-m-d'),
                    'pass_cmnd'=>$request->passport[$i],
                ]);
                $arrticket = DB::table('ticket')->insert([
                    'flight_id'=> $flightid2,
                    'Customer_id'=>$customerId,
                    'type'=>$class,
                    'price'=>$price2,
                    'pass_firstname'=>$request->pass_firstname[$i],
                    'pass_lastname'=>$request->pass_lastname[$i],
                    'pass_gender'=>$request->pass_gender[$i],
                    'pass_dob'=>Carbon::parse($request->birthday[$i])->format('Y-m-d'),
                    'pass_cmnd'=>$request->passport[$i],
                ]);
            }
            //  dd($depticket);
            return view('confirmation',['quantity'=>$totalquantity, 'customer_id'=>$customerId, 'total_price'=>$totalprice]);
        } else{
            $customerId = DB::table('customer')->insertGetId([
                // 'AccountId' => Auth()->user()->id,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'phone' => $phone,
                'email' => $email,
                'gender' => $gender
            ]);
            for ($i = 1; $i <= $quantity; $i++){
                $depticket = DB::table('ticket')->insert([
                    'flight_id'=> $flightid1,
                    'Customer_id'=>$customerId,
                    'type'=>$class,
                    'price'=>$price1,
                    'pass_firstname'=>$request->pass_firstname[$i],
                    'pass_lastname'=>$request->pass_lastname[$i],
                    'pass_gender'=>$request->pass_gender[$i],
                    'pass_dob'=>Carbon::parse($request->birthday[$i])->format('Y-m-d'),
                    'pass_cmnd'=>$request->passport[$i],
                ]);
                $arrticket = DB::table('ticket')->insert([
                    'flight_id'=> $flightid2,
                    'Customer_id'=>$customerId,
                    'type'=>$class,
                    'price'=>$price2,
                    'pass_firstname'=>$request->pass_firstname[$i],
                    'pass_lastname'=>$request->pass_lastname[$i],
                    'pass_gender'=>$request->pass_gender[$i],
                    'pass_dob'=>Carbon::parse($request->birthday[$i])->format('Y-m-d'),
                    'pass_cmnd'=>$request->passport[$i],
                ]);
            }
            return view('confirmation',['quantity'=>$totalquantity, 'customer_id'=>$customerId, 'total_price'=>$totalprice]);
        }

        // $flight_id = $request->input('flight_id');
        // $class = $request->input('class');
        // $qty = $request->input('qty');
        // $price = $request->input('price');
        // $total = $qty * $price;

        // $bookingId = DB::table('booking')->insertGetId([
        //     'flight_id' => $flight_id,
        //     'customer_id' => $customerId,
        //     'class' => $class,
        //     'qty' => $qty,
        //     'total' => $total
        // ]);
        // return redirect()->route('confirmation', ['id' => $bookingId]);
    }
}
