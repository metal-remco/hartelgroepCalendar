<?php

class CalendarController {

	protected $loader;

	protected $plugin_slug;

	protected $version;

	public function __construct() {

		$this->plugin_slug = 'hartelgroepCalendar';
		$this->version = '0.0.1';

		$this->loadDependencies();
		$this->defineAdminHooks();

	}

	private function loadDependencies() {

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/CalendarAdmin.php';

		require_once plugin_dir_path( __FILE__ ) . 'CalendarLoader.php';
		$this->loader = new CalendarLoader();

	}

	private function defineAdminHooks() {

		$admin = new CalendarAdmin( $this->getVersion() );
		$this->loader->addAction('admin_menu', $admin, 'addToMenu');

	}

	public function run() {
		$this->loader->run();
	}

	public function getVersion() {
		return $this->version;
	}

}