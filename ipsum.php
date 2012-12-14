<?php
class Ipsum extends Plugins {

	public function __init() {
		$this->add_alias("preview", "ipsum", 1);
	}
	
	public function ipsum($text='') {
		//return str_replace('[ipsum]', "module test", $text);
		return str_replace('[ipsum]', file_get_contents('http://loripsum.net/api'), $text);
	}
}