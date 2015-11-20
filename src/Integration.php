<?php

/**
 * Title: Rabobank - iDEAL Professional integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Rabobank_IDealAdvanced_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvanced_AbstractIntegration {
	public function __construct() {
		$this->id         = 'rabobank-ideal-professional';
		$this->name       = 'Rabobank - iDEAL Professional';
		$this->provider   = 'rabobank';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Rabobank_IDealAdvanced_ConfigFactory';
	}
}
