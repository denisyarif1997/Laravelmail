@extends('template.container')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Product Name</th>
                <th>Cust. Email</th>
                <th>Action</th>
            </thead>
            <tbody>      
                    @foreach ($products as $product)
                    <tr>
                         <td>{{$loop->iteration}}</td>   
                         <td>{{$product->product_name}}</td> 
                         <td>{{$product->customer_email}}</td> 
                         <td>
                            <a href="/send-product-mail/{{$product->id}}" class="btn btn-warning">Send Mail</a>
                         </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection