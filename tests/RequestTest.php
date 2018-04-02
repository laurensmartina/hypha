<?php

include_once __DIR__ . '/../system/core/language.php';

use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase {
	/**
	 * @dataProvider getData
	 *
	 * @param string $query
	 * @param bool $system
	 * @param null|string $lang
	 * @param null|string $name
	 * @param array $args
	 * @param array $parts
	 * @param array $partsInclude
	 */
	public function test($query, $system, $lang, $name, $args, $parts, $partsInclude) {
		global $isoLangList;
		$request = new HyphaRequest($query, $isoLangList);
		$this->assertSame($request->getRequestQuery(false), $query, $query, 'query');
		$this->assertSame($request->isSystemPage(), $system, $query . ' isSystem');
		$this->assertSame($request->getLanguage(), $lang, $query . ' getLanguage');
		$this->assertSame($request->getPageName(), $name, $query . ' getPageName');
		$this->assertSame($request->getArgs(), $args, $query . ' getArgs');
		$this->assertSame($request->getRequestParts(), $parts, $query . ' getRequestParts');
		$this->assertSame($request->getRequestParts(false), $partsInclude, $query . ' getRequestParts(false)');
	}

	public function getData() {
		return [
			[
				'query' => '',
				'system' => false,
				'lang' => null,
				'name' => null,
				'args' => [],
				'parts' => [],
				'partsInclude' => [],
			],
			[
				'query' => 'nl/festival',
				'system' => false,
				'lang' => 'nl',
				'name' => 'festival',
				'args' => [],
				'parts' => ['festival'],
				'partsInclude' => ['nl', 'festival'],
			],
			[
				'query' => 'en/festival',
				'system' => false,
				'lang' => 'en',
				'name' => 'festival',
				'args' => [],
				'parts' => ['festival'],
				'partsInclude' => ['en', 'festival'],
			],
			[
				'query' => 'en/festival/edit',
				'system' => false,
				'lang' => 'en',
				'name' => 'festival',
				'args' => ['edit'],
				'parts' => ['festival', 'edit'],
				'partsInclude' => ['en', 'festival', 'edit'],
			],
			[
				'query' => 'festival/festival',
				'system' => false,
				'lang' => null,
				'name' => 'festival',
				'args' => [],
				'parts' => ['festival', 'festival'],
				'partsInclude' => ['festival', 'festival'],
			],
			[
				'query' => HyphaRequest::HYPHA_SYSTEM_PAGE_FILES,
				'system' => true,
				'lang' => null,
				'name' => null,
				'args' => [],
				'parts' => [HyphaRequest::HYPHA_SYSTEM_PAGE_FILES],
				'partsInclude' => [HyphaRequest::HYPHA_SYSTEM_PAGE_FILES],
			],
			[
				'query' => HyphaRequest::HYPHA_SYSTEM_PAGE_SETTINGS,
				'system' => true,
				'lang' => null,
				'name' => null,
				'args' => [],
				'parts' => [HyphaRequest::HYPHA_SYSTEM_PAGE_SETTINGS],
				'partsInclude' => [HyphaRequest::HYPHA_SYSTEM_PAGE_SETTINGS],
			],
			[
				'query' => 'mailing/' . HyphaRequest::HYPHA_SYSTEM_PAGE_SETTINGS,
				'system' => false,
				'lang' => null,
				'name' => 'settings',
				'args' => [],
				'parts' => ['mailing', HyphaRequest::HYPHA_SYSTEM_PAGE_SETTINGS],
				'partsInclude' => ['mailing', HyphaRequest::HYPHA_SYSTEM_PAGE_SETTINGS],
			],
			[
				'query' => HyphaRequest::HYPHA_SYSTEM_PAGE_FILES . '/' . HyphaRequest::HYPHA_SYSTEM_PAGE_FILES,
				'system' => true,
				'lang' => null,
				'name' => null,
				'args' => [HyphaRequest::HYPHA_SYSTEM_PAGE_FILES],
				'parts' => [HyphaRequest::HYPHA_SYSTEM_PAGE_FILES, HyphaRequest::HYPHA_SYSTEM_PAGE_FILES],
				'partsInclude' => [HyphaRequest::HYPHA_SYSTEM_PAGE_FILES, HyphaRequest::HYPHA_SYSTEM_PAGE_FILES],
			],
			[
				'query' => 'text/system',
				'system' => false,
				'lang' => null,
				'name' => 'system',
				'args' => [],
				'parts' => ['text', 'system'],
				'partsInclude' => ['text', 'system'],
			],
			[
				'query' => 'text/system/edit',
				'system' => false,
				'lang' => null,
				'name' => 'system',
				'args' => ['edit'],
				'parts' => ['text', 'system', 'edit'],
				'partsInclude' => ['text', 'system', 'edit'],
			],
			[
				'query' => 'en/index',
				'system' => false,
				'lang' => 'en',
				'name' => 'index',
				'args' => [],
				'parts' => ['index'],
				'partsInclude' => ['en', 'index'],
			],
		];
	}
}
