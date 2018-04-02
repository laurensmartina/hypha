<?php

class Autoloader {
	public static function load($class) {
		$map = [
			'RequestTest' => 'test/RequestTest.php',
			'HyphaRequest' => 'system/core/HyphaRequest.php',
		];

		if (isset($map[$class])) {
			include_once $map[$class];
		}
	}
}

spl_autoload_register('Autoloader::load');
