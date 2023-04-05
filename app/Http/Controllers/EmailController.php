<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\HelloMail;
use App\Mail\ProductMail;
use App\Product;

class EmailController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function dataEmail()
    {
        $product = Product::all();
        return view('data-email', ["products" => $product]);
        // return view('data-email', compact('products'));
    }

    public function send(Request $request)
    {
        mail::to($request->email)->send(new HelloMail($request->body));
        return back();

    }

    public function sendProductEmail($id)
    {
        $product = Product::findOrFail($id);
        mail::to($product->customer_email)->send(new ProductMail($product));
        return back();
    }
}
