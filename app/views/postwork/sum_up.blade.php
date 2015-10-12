@extends('layouts.master')

@section('title', 'SumUpThoseDigits')

@section('content')
	<div class="container">
		<div class="col-xs-12">
			<h1>Sum Up Those Digits</h1>

			<h4>Create a function that will:</h4>
			<ol>
				<li>Accept any number as input.</li>
				<li>Validate that input and convert it to an integer as necessary.</li>
				<li>Return the sum of the individual digits of that integer.</li>
			</ol>
			<p>(You can change the input in the url, with <code>/7893</code>, etc.)</p>

			<h4>Input:</h4>
			<code>{{{ $input }}}</code>

			<h4>Answer</h4>
			<code>{{{ $answer }}}</code>

		</div>
	</div>
@stop