<?php
class CalendarAdmin {
	
	private $version;
	
	public function __construct( $version ) {
		$this->version = $version;
	}
	
	public function addToMenu(){
		add_menu_page( 'Hartelgroep Calendar', 'Hartelgroep Calendar', 'manage_options', 'hartelgroepCalendar', array($this, 'displayView'));
	}

	public function displayView(){
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}

		//include view
		echo '<h1>Hello World</h1>';
	}
}