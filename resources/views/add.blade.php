@extends('layouts.app')
@section('content')

<div class="content">
	<div class="title m-b-md">
		<h1>Product Add</h1>
		<!-- <form method="post" action="{{route('add')}}" enctype="multipart/form-data"> -->
			{{ Form::open(array('route' => ['add'],'id'=>'PostFrm', 'files' => true)) }}
			<table>
				@csrf
				<tr>
					<td> {{Form::label('name', 'Name')}}</td>
						<td> {{ Form::text('name')}}</td>
					</tr>
					<tr>
						<td> {{Form::label('category', 'Category')}} </td>
						<td>{{ Form::text('category')}}</td>
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