@extends('layout.app')

<div class="container">
    @if(Session::has('message'))
        <div class="alert alert-success">
            <h5>{{Session::get('message')}}</h5>
        </div>
    @endif

        <h1>Show products</h1>

        <table class="table">
            <thead>
            <tr>

                <th scope="col">Product Name</th>
                <th scope="col">Quantity in Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Date Time Submitted</th>
                <th scope="col">Total Value</th>


            </tr>
            </thead>
            <tbody>

            @php ($sum_total_val = 0)



            @foreach($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>{{($product->price * $product->quantity) }}</td>
                </tr>

                @php($sum_total_val += ($product->price * $product->quantity) )

            @endforeach

<tr><td>Total Value:</td><td>{{$sum_total_val}}</td></tr>
            </tbody>
        </table>


    <a href="/product/create" class="btn btn-primary">Create Product</a>


</div>

