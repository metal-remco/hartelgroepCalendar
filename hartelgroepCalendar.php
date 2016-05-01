<?php
/*
* Plugin Name: Hartelgroep 
* Plugin URI: http://www.remcovanwilgen.nl/
* Version: 0.1
* Author: Remco van Wilgen
* Description: Adds a calendar to the website of Scouting Hartelgroep Spijkenisse
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/CalendarController.php';

function startCalendar() {
	$spmm = new CalendarController();
	$spmm->run();
}

startCalendar();

?>