@extends('layouts.master')

@section('title', 'LargestPalindromeProduct')

@section('content')
	<div class="container">
		<div class="col-xs-12">
			<h1>Largest Palindrome Product</h1>

			<h4>Question:</h4>
			<p>A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.</p>
			<p>Find the largest palindrome made from the product of two 3-digit numbers.</p>

			<h4>Answer:</h4>
			<code>{{{ $answer }}}</code>

			<h5>Thanks to <a href="https://projecteuler.net/problem=4">Project Euler</a></h5>
			@include('layouts.partials.index-btn')
		</div>
	</div>
@stop