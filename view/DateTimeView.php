<?php

class DateTimeView {


	public function show() {
		
		$timeString = date('l').', the '.date('d').'th of '.date('F Y').', The time is ' .date('h:i:s', time());
		 //= 'TODO, Write servertime here...';

		return '<p>' . $timeString . '</p>';
	}
}