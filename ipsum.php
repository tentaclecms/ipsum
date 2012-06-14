<?php
class Ipsum extends Modules {

	public function __init() {
		$this->addAlias("preview", "ipsum", 1);
	}
	
	public function ipsum($text='') {
		//return str_replace('[ipsum]', "module test", $text);
		return str_replace('[ipsum]', file_get_contents('http://loripsum.net/api'), $text);
	}
}