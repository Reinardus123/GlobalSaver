<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Event;
class BookController extends Controller
{
    public function index(Event $event){
        return view('book',[
            'title' => 'Book Event',
            'active' => 'book',
            'events' => $event
        ]);
    }

    public function checkout(Request $request){
        $request->request->add(['status' => 'unpaid']);
        $book = Book::create($request->all());


        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $book->id,
                'gross_amount' => $request->gross_amount,
            ),
            'customer_details' => array(
                'first_name' => $book->first_name,
                'last_name' =>  $book->last_name,
                'email' => $book->email,
                'phone' => $book->phone,
            ),
        );


        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $title = "Title";
        $active = 'active';
        return view("confirmation", compact("book", "snapToken", "title","active"));
    }

    public function callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512",$request->book_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $book = Book::find($request->book_id);
                $book->update(['status' => 'Paid']);
            }
        }
    }

    public function invoice($id){
        $book = Book::find($id);
        return view('invoice',compact('book'));
    }

}
