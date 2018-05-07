<?php
/**
 * Author:  abon duttaroy<abon@sbcreationgroup.com>
 * Created: 5 May, 2018
 */
class Core {
	
	public function run() {
		ob_start();
		require_once(Url::getPage());
		ob_get_flush();
	}

}