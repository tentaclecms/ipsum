<?php
class Ipsum extends Modules {

	public function __init() {
		$this->addAlias("markup_text", "ipsum");
		$this->addAlias("markup_post_text","ipsum");
		$this->addAlias("preview", "ipsum", 1);
		$this->addAlias("preview_post", "ipsum");
	}
	
	public function ipsum($text='') {
		return str_replace('[ipsum]', "module test", $text);
		//return str_replace('[ipsum]', file_get_contents('http://loripsum.net/api'), $text);
	}
}