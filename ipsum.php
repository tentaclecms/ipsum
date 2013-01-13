<?php
event::register('preview', 'ipsum::get', 1);
event::register('plugin_navigation', 'ipsum::settings_nav', 8);

class ipsum
{
	static function settings_nav() {
		$nav[] = array(
            'title'     => 'Ipsum',
            'rout'      => 'ipsum_settings',
            'uri'       => 'ipsum/view'
        );

    	return $nav;
    }

	static function get( $text='' )
    {
        return str_replace('[ipsum]', "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ea mala virtuti magnitudine obruebantur. Ita nemo beato beatior. Quae quo sunt excelsiores, eo dant clariora indicia naturae. De vacuitate doloris eadem sententia erit. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; In quibus doctissimi illi veteres inesse quiddam caeleste et divinum putaverunt. Duo Reges: constructio interrete.</p>", $text);
        //return str_replace('[ipsum]', file_get_contents('http://loripsum.net/api'), $text);
    }
}
