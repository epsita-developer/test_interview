@extends('layouts.app')
@section('content')

<div class="content">
	<div class="title m-b-md">
		<h1>Product Edit</h1>
		
			{{ Form::open(array('route' => ['update',$product->id],'id'=>'PostFrm','method'=>'PATCH')) }}
			<table>
				@csrf
				<tr>
					<td> {{Form::label('name', 'Name')}}</td>
						<td> {!! Form::input('text','name', $product->name, [ 'id' => 'name','required'])!!}</td>
					</tr>
					<tr>
						<td> {{Form::label('category', 'Category')}} </td>
						<td>{!! Form::input('text','category', $product->category, [ 'id' => 'category','required'])!!} </td>
					</tr>
					
					
					<tr>
						<td>{{ Form::submit('Submit')}}</td>
					</tr>
				</table>
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
					</ul>
				</div>
				@endif
			{{ Form::close() }}


		</div>


	</div>

	@endsection