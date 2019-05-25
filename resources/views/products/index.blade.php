@extends('layout.app')

<h1>Show products</h1>

<table class="table">
    <thead>
    <tr>

        <th scope="col">Product Name</th>
        <th scope="col">Quantity in Stock</th>
        <th scope="col">Price</th>
        <th scope="col">Date Time Submitted</th>

    </tr>
    </thead>
    <tbody>

        @foreach($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->created_at}}</td>


    </tr>

        @endforeach


    </tbody>
</table>