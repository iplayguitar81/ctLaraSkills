@extends('layout.app')
<div class="container">

    <h1>Create Product</h1>

    <form method="post" action="/product">

        @csrf

        <label for="name">Product Name</label> <input type="text" name="name">
        <br/>
        <label for="name">Quantity</label> <input type="number" name="quantity">
        <br/>
        <label for="name">Price</label> <input type="number" name="price" min="0.00" max="10000.00" step="0.01">

    <br/>
        <button type="submit" class="btn btn-primary">Create Product</button>

    </form>


    <br/>
    <br/>
    <a href="/" class="btn btn-dark">View All Products</a>
</div>

