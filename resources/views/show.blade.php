@extends('layouts.app')
@section('content')


<div class="content">
    <div class="title m-b-md">
        <h1>Product Listing</h1>
        @if(Session::has('success')) 
            <div id="information" class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa fa-check-circle" aria-hidden="true"></i> <strong>Success : </strong><span>{{ Session::get('success') }}</span>
            </div>
        @endif
        <table border="1px" width="100%">
            <tr>
                <td>Product Name : {{$product->name}}</td> 
            </tr>
            <tr>                   
                <td>Category  : {{$product->category}}</td>                
                
            </tr>
            <tr>
                <td><a href="{{ route('list')}}">Back </a>></td>
            </tr>
        </div>


    </div>
    @endsection
