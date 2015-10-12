@extends('layouts.master')

@section('title', 'Home')

@section('content')
	<div class="container">
		<div class="col-xs-12">
			<h1>Challenges.dev</h1>
		</div>
		<div class="col-xs-12 col-sm-6">
			<h2>Postwork</h2>
				<ol>
					@foreach($postwork as $page) 
						<li><a href="/{{{ $page }}}.php"><h4>{{{ $page }}}</h4></a></li>
					@endforeach
				</ol>
		</div>
		<div class="col-xs-12 col-sm-6">
			<h2>Project Euler</h2>
				<ol>
					@foreach($euler as $page => $name) 
						<li><a href="{{ action('EulerController@show' . $page) }}"><h4>{{{ $name }}}</h4></a></li>
					@endforeach
				</ol>
		</div>
	</div>
@stop