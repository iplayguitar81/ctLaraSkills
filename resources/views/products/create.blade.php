@extends('layout.app')

<h1>Create Product</h1>

<form method="post" action="/product">

   @csrf

    <input type="text" name="name">
    <input type="number" name="quantity">
    <input type="number" name="price" min="0.00" max="10000.00" step="0.01">


    <button type="submit" class="btn btn-primary">Create Product</button>

</form>