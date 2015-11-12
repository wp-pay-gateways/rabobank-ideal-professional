<?php

class Pronamic_WP_Pay_Gateways_Rabobank_IDealAdvanced_Integration {
	public function __construct() {
		$this->id         = 'rabobank-ideal-professional';
		$this->name       = 'Rabobank - iDEAL Professional';
		$this->provider   = 'rabobank';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_Gateway';
	}
}
