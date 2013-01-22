<?php
/**
name: Ipsum
url: http://chyrp.net/
version: 1.0
description: Generates Lorem Ipsum content.
author:
  name: the Chyrp Team
  url: http://chyrp.net/
*/
event::on('preview', 'ipsum::get', 1);

class ipsum
{
	static function get( $text='' )
    {
       return str_replace('[ipsum]', file_get_contents('http://loripsum.net/api'), $text);
    }
}
