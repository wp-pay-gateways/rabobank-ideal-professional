<?php

class Pronamic_WP_Pay_Gateways_Rabobank_IDealAdvanced_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvanced_AbstractIntegration {
	public function __construct() {
		$this->id         = 'rabobank-ideal-professional';
		$this->name       = 'Rabobank - iDEAL Professional';
		$this->provider   = 'rabobank';
		$this->deprecated = true;
	}
}
