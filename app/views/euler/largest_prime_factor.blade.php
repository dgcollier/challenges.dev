@extends('layouts.master')

@section('title', 'Largest Prime')

@section('content')
	<div class="container">
		<h1>Largest Prime Factor</h1>
		<h4>Question:</h4>
		<h4><em>What is the largest prime factor of the number 600851475143 ?</em></h4>

		<h4>Answer:</h4>
		<h4><strong>{{{ $answer }}}</strong></h4>

		<h5>Thanks to <a href="https://projecteuler.net/problem=3">Project Euler</a></h5>
		@include('layouts.partials.index-btn')
	</div>
@stop