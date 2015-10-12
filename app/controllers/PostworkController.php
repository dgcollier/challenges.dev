<?php

class PostworkController extends \BaseController {
	public function showSumUp($input = 12345)
	{
		if(!is_numeric($input)) {
			$input = 12345;
		}

		$answer = 0;
		$inputToArray = str_split($input);

		foreach($inputToArray as $numberToAdd) {
			if($numberToAdd)
			$answer += $numberToAdd;
		}

		return View::make('postwork.sum_up', compact('input', 'answer'));
	}
}