<?php

/**
 * Title: Rabobank - iDEAL Professional - Config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Rabobank_IDealAdvanced_ConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_Rabobank_IDealAdvanced_Config();

		$expected = 'https://ideal.rabobank.nl/ideal/iDeal';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}

	public function test_certificates() {
		$config = new Pronamic_WP_Pay_Gateways_Rabobank_IDealAdvanced_Config();

		$certificates = $config->get_certificates();

		foreach ( $certificates as $certificate ) {
			$this->assertFileExists( $certificate );
		}
	}
}
