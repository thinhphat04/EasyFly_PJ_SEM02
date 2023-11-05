<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\Uppercase;
use Carbon\Carbon;

class AdminController extends Controller

{
    public  function dashboard()
    {
        return view('admin.dashboard');
    }

    ////////////////////// AIRPORT //////////////////////////////
    public function sanbay()
    {
        $sanbay = DB::table('airport')->paginate(7);
        return view('admin.sanbay', ['sanbay' => $sanbay]);
    }

    public function searchairport(Request $request)
    {
        $sanbay = DB::table('airport')->where('airport_code', 'like', '%' . $request->get('searchQuest') . '%')
            ->orWhere('airport_name', 'like', '%' . $request->get('searchQuest') . '%')
            ->orWhere('city', 'like', '%' . $request->get('searchQuest') . '%')
            ->orWhere('country', 'like', '%' . $request->get('searchQuest') . '%')->get();

        return json_decode($sanbay);
    }

    public function sb_add()
    {
        return view('admin.sanbay_add');
    }

    public function sb_addprocess(Request $request)
    {
        $request->validate([
            'airport_code' =>  ['required', new Uppercase, 'unique:airport'],
            'airport_name' => 'required',
            'city' => 'required',
            'country' => 'required'
        ]);

        DB::table('airport')->updateOrInsert([
            'airport_code' => $request->input('airport_code'),
            'airport_name' => $request->input('airport_name'),
            'city' => $request->input('city'),
            'country' => $request->input('country')
        ]);
        return redirect()->route('sanbay')->with('message', 'Add New Airport Successful!');
    }


    public function sb_update($code)
    {
        $rs = DB::table('airport')
            ->where('airport_code', $code)->first();
        return view('admin.sanbay_update', ['rs' => $rs]);
    }

    public function sb_updateprocess(Request $request, $code)
    {
        $tensanbay =  $request->input('airport_name');
        $thanhpho = $request->input('city');
        $quocgia = $request->input('country');
        $rs = DB::table('airport')->where('airport_code', $code)
            ->update([
                'airport_name' => $tensanbay,
                'city' => $thanhpho,
                'country' => $quocgia
            ]);
        return redirect()->route('sanbay')->with('message', 'Update Airport Successful!');
    }

    public function sb_delete($code)
    {
        $rs = DB::table('airport')->where('airport_code', $code)->delete();
        return redirect()->route('sanbay')->with('message', 'Delete Airport Successful!');
    }

    //////////////////////////////// FLIGHT /////////////////////////////////////////////
    public function flight()
    {
        $flights = DB::table('flight')->orderByDesc('flight_id')->paginate(7);
        return view('admin.flight', ['flights' => $flights]);
    }

    public function searchflight(Request $request)
    {
        $output = '';
         $search = $request->input('search');
        $flights = DB::table('flight')->where('flight_id', 'like', '%' . $search . '%')
            ->orWhere('planecode', 'like', '%' . $search . '%')
            ->orWhere('FromPlace', 'like', '%' . $search . '%')
            ->orWhere('ToPlace', 'like', '%' . $search . '%')
            ->orWhere('departure', 'like', '%' . $search . '%')
            ->orWhere('arrival', 'like', '%' . $search . '%')
            ->orWhere('avail_seat', 'like', '%' . $search . '%')->get();

        foreach ($flights as $flight) {
            $output .=
                '<tr>
            <td>' . $flight->flight_id . '</td>
            <td>' . $flight->planecode . '</td>
            <td>' . $flight->FromPlace . '</td>
            <td>' . $flight->ToPlace . '</td>
            <td>' . date('d-m-Y  h : i A', strtotime($flight->departure)) . '</td>
            <td>' . date('d-m-Y  h : i A', strtotime($flight->arrival)) . '</td>
            <td>' . $flight->avail_seat . '</td>
            <td><a href="/admin/flight/update/' . $flight->flight_id . '"><button class="btn btn-primary">Update</button></a>|<a onclick="confirmation(event)" href="/admin/flight/delete/' . $flight->flight_id . '"><button class="btn btn-danger">Delete</button></a></td>
            </tr>';
        }
        return response($output);
        // $flights = DB::table('flight')->where('flight_id', 'like', '%' .  $request->get('searchQuest1') . '%')
        //     ->orWhere('planecode', 'like', '%' .  $request->get('searchQuest1') . '%')
        //     ->orWhere('FromPlace', 'like', '%' .  $request->get('searchQuest1') . '%')
        //     ->orWhere('ToPlace', 'like', '%' .  $request->get('searchQuest1') . '%')
        //     ->orWhere('departure', 'like', '%' .  $request->get('searchQuest1') . '%')
        //     ->orWhere('arrival', 'like', '%' .  $request->get('searchQuest1') . '%')
        //     ->orWhere('avail_seat', 'like', '%' .  $request->get('searchQuest1') . '%')->get();

        // return json_decode($flights);
    }

    public function flight_add()
    {
        $airports = DB::table('airport')->get();
        $planes = DB::table('plane')->get();
        return view('admin.flight_add', ['airports' => $airports, 'planes' => $planes]);
    }

    public function flight_addprocess(Request $request)
    {
        $maxseat = DB::table('plane')->where('PlaneCode', $request->input('planecode'))->value('Seats');
        $departure = $request->input('departure');
        $currentTime = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y  h:i A');
        $date = Carbon::parse($departure)->format('d-m-Y  h:i A');
        $request->validate([
            'planecode' => ['required'],
            'FromPlace' => 'required',
            'ToPlace' => 'required|different:FromPlace',
            'departure' => 'required|after_or_equal:' . $currentTime,
            'arrival' => ['required', 'after:' . $date],
            // 'avail_seat' => ['required', 'numeric', 'min:1', 'max:' . $maxseat]
        ], [
            'ToPlace.different' => 'Airports can not be the same',
            'planecode.required' => 'Please choose a plane'
        ]);


        DB::table('flight')->insert([
            'planecode' => $request->input('planecode'),
            'FromPlace' => $request->input('FromPlace'),
            'ToPlace' => $request->input('ToPlace'),
            'departure' => $request->input('departure'),
            'arrival' => $request->input('arrival'),
            'avail_seat' => $maxseat
        ]);
        return redirect()->route('flight')->with('message', 'Add New Flight Successful!');
    }

    public function flight_update($code)
    {
        $airports = DB::table('airport')->get();
        $planes = DB::table('plane')->get();
        $flight = DB::table('flight')
            ->where('flight_id', $code)->first();
        return view('admin.flight_update', ['flight' => $flight, 'airports' => $airports, 'planes' => $planes]);
    }

    public function flight_updateprocess(Request $request, $code)
    {
        $maxseat = DB::table('plane')->where('PlaneCode', $request->input('planecode'))->value('Seats');
        $departure = $request->input('departure');
        $currentTime = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y  h:i A');
        $date = Carbon::parse($departure)->format('d-m-Y  h:i A');
        $request->validate([
            'ToPlace' => 'different:FromPlace',
            'arrival' => ['required', 'after:' . $date],
            'avail_seat' => ['numeric', 'max:' . $maxseat]
        ], [
            'ToPlace.different' => 'Airports can not be the same',
        ]);

        $rs = DB::table('flight')->where('flight_id', $code)
            ->update([
                'planecode' => $request->input('planecode'),
                'FromPlace' => $request->input('FromPlace'),
                'ToPlace' => $request->input('ToPlace'),
                'departure' => $request->input('departure'),
                'arrival' => $request->input('arrival'),
                'avail_seat' => $request->input('avail_seat')
            ]);
        return redirect()->route('flight')->with('message', 'Update Flight Successful!');
    }

    public function flight_delete(Request $request, $code)
    {
        $rs = DB::table('flight')->where('flight_id', $code)->delete();
        return redirect()->route('flight')->with('message', 'Delete Successful!');;
    }

    ////////////////////// FEEDBACK //////////////////////////////
    public function feedback()
    {
        $feedbacks = DB::table('feedback')->paginate(7);
        return view('admin.feedback', ['feedbacks' => $feedbacks]);
    }

    public function searchfeedback(Request $request)
    {
        $output = '';
        $search = $request->input('search');
        $feedbacks = DB::table('feedback')->where('FeedbackId', 'like', '%' . $search . '%')
            ->orWhere('customer_id', 'like', '%' . $search . '%')
            ->orWhere('Comment', 'like', '%' . $search . '%')
            ->orWhere('FeedbackDate', 'like', '%' . $search . '%')->get();

        foreach ($feedbacks as $feedback) {
            $output .=
                '<tr>
                <td>' . $feedback->FeedbackId . '</td>
                <td>' . $feedback->customer_id . '</td>
                <td>' . $feedback->Comment . '</td>
                <td>' . date('d-m-Y ', strtotime($feedback->FeedbackDate)) . '</td>
                <td><a href="/admin/feedback/update/' . $feedback->FeedbackId . '"><button class="btn btn-primary">Update</button></a>|<a onclick="confirmation(event)" href="/admin/feedback/delete/' . $feedback->FeedbackId . '"><button class="btn btn-danger">Delete</button></a></td>
                </tr>';
        }
        return response($output);
    }


    public function feedback_add()
    {
        return view('admin.feedback_add');
    }

    public function feedback_addprocess(Request $request)
    {
        $max = DB::table('customer')->latest('customer_id')->first();
        $valid = $max->customer_id;
        $request->validate([
            'customer_id' =>  ['required', 'numeric', 'min:1', 'max:' . $valid],
            'Comment' => 'required',
            'FeedbackDate' => 'required',
        ]);

        DB::table('feedback')->updateOrInsert([
            'customer_id' => $request->input('customer_id'),
            'Comment' => $request->input('Comment'),
            'FeedbackDate' => $request->input('FeedbackDate'),
        ]);
        return redirect()->route('feedback')->with('message', 'Add New Feedback Successful!');
    }


    public function feedback_update($code)
    {
        $rs = DB::table('feedback')
            ->where('FeedbackId', $code)->first();
        return view('admin.feedback_update', ['rs' => $rs]);
    }

    public function feedback_updateprocess(Request $request, $code)
    {
        $max = DB::table('customer')->latest('customer_id')->first();
        $valid = $max->customer_id;
        $request->validate([
            'customer_id' =>  ['required', 'numeric', 'min:1', 'max:' . $valid]
        ]);
        $customer_id =  $request->input('customer_id');
        $Comment = $request->input('Comment');
        $FeedbackDate = $request->input('FeedbackDate');
        $rs = DB::table('feedback')->where('FeedbackId', $code)
            ->update([
                'customer_id' => $customer_id,
                'Comment' => $Comment,
                'FeedbackDate' => $FeedbackDate
            ]);
        return redirect()->route('feedback')->with('message', 'Update Feedback Successful!');
    }

    public function feedback_delete($code)
    {
        $rs = DB::table('feedback')->where('FeedbackId', $code)->delete();
        return redirect()->route('feedback')->with('message', 'Delete feedback Successful!');;
    }
    //////////////////////////////// SeatClass /////////////////////////////////////////////
    public function seatclass()
    {
        $seatclasses = DB::table('seat_class')->paginate(7);
        return view('admin.seatclass', ['seatclasses' => $seatclasses]);
    }

    public function searchseatclass(Request $request)
    {
        $output = '';
        $search = $request->input('search');
        $seatclasses = DB::table('seat_class')->where('Flight_id', 'like', '%' . $search . '%')
            ->orWhere('price_class_TG', 'like', '%' . $search . '%')
            ->orWhere('num_class_PT', 'like', '%' . $search . '%')
            ->orWhere('num_class_TG', 'like', '%' . $search . '%')
            ->orWhere('price_class_PT', 'like', '%' . $search . '%')->get();

        foreach ($seatclasses as $seatclass) {
            $output .=
                '<tr>
                <td>' . $seatclass->Flight_id . '</td>
                <td>' . $seatclass->price_class_TG . '</td>
                <td>' . $seatclass->num_class_PT . '</td>
                <td>' . $seatclass->num_class_TG . '</td>
                <td>' . $seatclass->price_class_PT . '</td>
                <td><a href="/admin/seatclass/update/' . $seatclass->Flight_id . '"><button class="btn btn-primary">Update</button></a>|<a onclick="confirmation(event)" href="/admin/seatclass/delete/' . $seatclass->Flight_id . '"><button class="btn btn-danger">Delete</button></a></td>
                </tr>';
        }
        return response($output);
    }
    // add
    public function seatclass_add()
    {
        $flights = DB::table('seat_class')->get();
        return view('admin.seatclass_add', ['flights' => $flights]);
    }
    public function seatclass_addprocess(Request $request)
    {
        $max = DB::table('flight')->latest('flight_id')->first();
        $valid = $max->flight_id;
        $request->validate([
            // Flith_id số max lấy cuối cùng trong bảng flight
            'Flight_id' =>  ['required', 'numeric', 'min:1', 'max:' . $valid],
            'price_class_TG' => 'required',
            'num_class_PT' => 'required',
            'num_class_TG' => 'required',
            'price_class_PT' => 'required',
        ]);

        DB::table('seat_class')->updateOrInsert([
            'Flight_id' => $request->input('Flight_id'),
            'price_class_TG' => $request->input('price_class_TG'),
            'num_class_PT' => $request->input('num_class_PT'),
            'num_class_TG' => $request->input('num_class_TG'),
            'price_class_PT' => $request->input('price_class_PT'),
        ]);
        return redirect()->route('seatclass')->with('message', 'Add New SeatClass Successful!');
    }
    // update
    public function seatclass_update($code)
    {
        $rs = DB::table('seat_class')
            ->where('Flight_id', $code)->first();
        return view('admin.seatclass_update', ['rs' => $rs]);
    }
    public function seatclass_updateprocess(Request $request, $code)
    {
        $max = DB::table('flight')->latest('flight_id')->first();
        $valid = $max->flight_id;
        $request->validate([
            'Flight_id' =>  ['required', 'numeric', 'min:1', 'max:' . $valid]
        ]);
        $Flight_id =  $request->input('Flight_id');
        $price_class_TG = $request->input('price_class_TG');
        $num_class_PT = $request->input('num_class_PT');
        $num_class_TG = $request->input('num_class_TG');
        $price_class_PT = $request->input('price_class_PT');
        $rs = DB::table('seat_class')->where('Flight_id', $code)
            ->update([
                'Flight_id' => $Flight_id,
                'price_class_TG' => $price_class_TG,
                'num_class_PT' => $num_class_PT,
                'num_class_TG' => $num_class_TG,
                'price_class_PT' => $price_class_PT
            ]);
        return redirect()->route('seatclass')->with('message', 'Update Seat Class Successful!');
    }
    // delete
    public function seatclass_delete($code)
    {
        $rs = DB::table('seat_class')->where('Flight_id', $code)->delete();
        return redirect()->route('seatclass');
    }
    ////////////////////////////////customer///////////////////////////////////////////// 
    public function customer()
    {
        $customers = DB::table('customer')->paginate(7);
        return view('admin.customer', ['customers' => $customers]);
    }

    public function searchcustomer(Request $request)
    {
        $output = '';
        $search = $request->input('search');
        $customers = DB::table('customer')->where('customer_id', 'like', '%' . $search . '%')
            ->orWhere('customer_name', 'like', '%' . $search . '%')
            ->orWhere('customer_email', 'like', '%' . $search . '%')
            ->orWhere('customer_phone', 'like', '%' . $search . '%')
            ->orWhere('customer_address', 'like', '%' . $search . '%')->get();

        foreach ($customers as $customer) {
            $output .=
                '<tr>
                <td>' . $customer->customer_id . '</td>
                <td>' . $customer->customer_name . '</td>
                <td>' . $customer->customer_email . '</td>
                <td>' . $customer->customer_phone . '</td>
                <td>' . $customer->customer_address . '</td>
                <td><a href="/admin/customer/update/' . $customer->customer_id . '"><button class="btn btn-primary">Update</button></a>|<a onclick="confirmation(event)" href="/admin/customer/delete/' . $customer->customer_id . '"><button class="btn btn-danger">Delete</button></a></td>
                </tr>';
        }
        return response($output);
    }
    // add
    public function customer_add()
    {
        return view('admin.customer_add');
    }
    public function customer_addprocess(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_phone' => 'required',
            'customer_address' => 'required',
        ]);

        DB::table('customer')->updateOrInsert([
            'customer_id' => $request->input('customer_id'),
            'customer_name' => $request->input('customer_name'),
            'customer_email' => $request->input('customer_email'),
            'customer_phone' => $request->input('customer_phone'),
            'customer_address' => $request->input('customer_address'),
        ]);
        return redirect()->route('customer')->with('message', 'Add New Customer Successful!');
    }
    // update
    public function customer_update($code)
    {
        $rs = DB::table('customer')
            ->where('customer_id', $code)->first();
        return view('admin.customer_update', ['rs' => $rs]);
    }
    public function customer_updateprocess(Request $request, $code)
    {
        $request->validate([
            'customer_id' => 'required',
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_phone' => 'required',
            'customer_address' => 'required',
        ]);
        $customer_id =  $request->input('customer_id');
        $customer_name = $request->input('customer_name');
        $customer_email = $request->input('customer_email');
        $customer_phone = $request->input('customer_phone');
        $customer_address = $request->input('customer_address');
        $rs = DB::table('customer')->where('customer_id', $code)
            ->update([
                'customer_id' => $customer_id,
                'customer_name' => $customer_name,
                'customer_email' => $customer_email,
                'customer_phone' => $customer_phone,
                'customer_address' => $customer_address
            ]);
        return redirect()->route('customer')->with('message', 'Update Customer Successful!');
    }
    // delete
    public function customer_delete($code)
    {
        $rs = DB::table('customer')->where('customer_id', $code)->delete();
        return redirect()->route('customer');
    }


    ////////////////////////////////Order/////////////////////////////////////////////
    public function order()
    {
        $orders = DB::table('order')->paginate(7);
        return view('admin.order', ['orders' => $orders]);
    }

    public function searchOrder(Request $request)
    {
        $output = '';
        $search = $request->input('search');
        $orders = DB::table('order')->where('order_id', 'like', '%' . $search . '%')
            ->orWhere('customer_id', 'like', '%' . $search . '%')
            ->orWhere('flight_id', 'like', '%' . $search . '%')
            ->orWhere('seat_class', 'like', '%' . $search . '%')
            ->orWhere('order_date', 'like', '%' . $search . '%')
            ->orWhere('order_total', 'like', '%' . $search . '%')->get();

        foreach ($orders as $order) {
            $output .=
                '<tr>
                <td>' . $order->order_id . '</td>
                <td>' . $order->customer_id . '</td>
                <td>' . $order->flight_id . '</td>
                <td>' . $order->seat_class . '</td>
                <td>' . $order->order_date . '</td>
                <td>' . $order->order_total . '</td>
                <td><a href="/admin/order/update/' . $order->order_id . '"><button class="btn btn-primary">Update</button></a>|<a onclick="confirmation(event)" href="/admin/order/delete/' . $order->order_id . '"><button class="btn btn-danger">Delete</button></a></td>
                </tr>';
        }
        return response($output);
    }
    // add
    public function order_add()
    {
        return view('admin.order_add');
    }

    public function order_addprocess(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'customer_id' => 'required',
            'flight_id' => 'required',
            'seat_class' => 'required',
            'order_date' => 'required',
            'order_total' => 'required',
        ]);

        DB::table('order')->updateOrInsert([
            'order_id' => $request->input('order_id'),
            'customer_id' => $request->input('customer_id'),
            'flight_id' => $request->input('flight_id'),
            'seat_class' => $request->input('seat_class'),
            'order_date' => $request->input('order_date'),
            'order_total' => $request->input('order_total'),
        ]);
        return redirect()->route('order')->with('message', 'Add New Order Successful!');
    }
    // update
    public function order_update($code)
    {
        $rs = DB::table('order')
            ->where('order_id', $code)->first();
        return view('admin.order_update', ['rs' => $rs]);
    }
    public function order_updateprocess(Request $request, $code)
    {
        $request->validate([
            'order_id' => 'required',
            'customer_id' => 'required',
            'flight_id' => 'required',
            'seat_class' => 'required',
            'order_date' => 'required',
            'order_total' => 'required',
        ]);
        $order_id =  $request->input('order_id');
        $customer_id = $request->input('customer_id');
        $flight_id = $request->input('flight_id');
        $seat_class = $request->input('seat_class');
        $order_date = $request->input('order_date');
        $order_total = $request->input('order_total');
        $rs = DB::table('order')->where('order_id', $code)
            ->update([
                'order_id' => $order_id,
                'customer_id' => $customer_id,
                'flight_id' => $flight_id,
                'seat_class' => $seat_class,
                'order_date' => $order_date,
                'order_total' => $order_total
            ]);
        return redirect()->route('order')->with('message', 'Update Order Successful!');
    }
    // delete
    public function order_delete($code)
    {
        $rs = DB::table('order')->where('order_id', $code)->delete();
        return redirect()->route('order');
    }
    ////////////////////////////////Ticket/////////////////////////////////////////////
    public function ticket()
    {
        $tickets = DB::table('ticket')->paginate(7);
        return view('admin.ticket', ['tickets' => $tickets]);
    }

    public function searchTicket(Request $request)
    {
        $output = '';
        $search = $request->input('search');
        $tickets = DB::table('ticket')->where('ticket_id', 'like', '%' . $search . '%')
            ->orWhere('order_id', 'like', '%' . $search . '%')
            ->orWhere('customer_id', 'like', '%' . $search . '%')
            ->orWhere('flight_id', 'like', '%' . $search . '%')
            ->orWhere('seat_class', 'like', '%' . $search . '%')
            ->orWhere('ticket_price', 'like', '%' . $search . '%')
            ->orWhere('ticket_status', 'like', '%' . $search . '%')->get();

        foreach ($tickets as $ticket) {
            $output .=
                '<tr>
                <td>' . $ticket->ticket_id . '</td>
                <td>' . $ticket->order_id . '</td>
                <td>' . $ticket->customer_id . '</td>
                <td>' . $ticket->flight_id . '</td>
                <td>' . $ticket->seat_class . '</td>
                <td>' . $ticket->ticket_price . '</td>
                <td>' . $ticket->ticket_status . '</td>
                <td><a href="/admin/ticket/update/' . $ticket->ticket_id . '"><button class="btn btn-primary">Update</button></a>|<a onclick="confirmation(event)" href="/admin/ticket/delete/' . $ticket->ticket_id . '"><button class="btn btn-danger">Delete</button></a></td>
                </tr>';
        }
        return response($output);
    }
}
