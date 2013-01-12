<?php
class Ipsum extends Plugins {

	public function __init() {
		$this->add_alias("preview", "ipsum", 1);
        $this->add_alias("preview", "ipsum", 1);
	}
	
	public function ipsum($text='') {
        return str_replace('[ipsum]', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ea mala virtuti magnitudine obruebantur. Ita nemo beato beatior. Quae quo sunt excelsiores, eo dant clariora indicia naturae. De vacuitate doloris eadem sententia erit. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; In quibus doctissimi illi veteres inesse quiddam caeleste et divinum putaverunt. Duo Reges: constructio interrete.", $text);
		//return str_replace('[ipsum]', file_get_contents('http://loripsum.net/api'), $text);
	}
}