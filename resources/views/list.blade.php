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
                <td>Product Name</td>                
                <td>Category</td>                
                <td>Action</td>
            </tr>
            @if($prod_cnt!=0)
            @foreach($product_list as $prod_list)
            <tr><td>{{$prod_list->name}}</td>               
                <td>{{$prod_list->category}}</td>               
                <td>
                    <a href="{{ route('show',$prod_list->id) }}">Show</a>
                    <a href="{{ route('edit',$prod_list->id) }}" title="edit">Edit</a> |                    
                    <form action="{{url('delete', [$prod_list->id])}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button onclick="return confirm('Are you sure you want delete ?');">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

            @else
            <tr><td colspan="3">No product found</td></tr> 
            @endif
        </div>


    </div>
    @endsection
