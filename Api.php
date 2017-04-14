<?php
namespace Dfe\Robokassa;
use Df\Xml\X;
class Api {
	/**
	 * 2017-04-12
	 * @return array(string => array(string => string))
	 */
	function options() {
		/** @var string $url */
		$url = 'https://auth.robokassa.ru/Merchant/WebService/Service.asmx/GetCurrencies';
		/** @var array(string => array(string => string)) $result */
		$result = [];
		foreach (df_xml_parse(df_cache_get_simple(null, 'df_http_get', $url, [
			// 2017-04-15
			// Using the «demo» account allows to receive the list of all Robokassa payment options.
			// I use it only for testing and demonstration.
			'Language' => 'ru', 'MerchantLogin' => df_my('demo', $this->ss()->merchantID())
		]))->{'Groups'}->{'Group'} as $xGroup) {
			/** @var X $xGroup */
			/** @var X[] $xA */
			$xA = $xGroup->attributes();
			/** @var array(array(string => string)) $items */
			$items = [];
			foreach ($xGroup->{'Items'}->{'Currency'} as $xI) {
				/** @var X $xI */
				/** @var X[] $xIA */
				$xIA = $xI->attributes();
				$items[]= [
					'Alias' => df_leaf_s($xIA['Alias'])
					,'Label' => df_leaf_s($xIA['Label'])
					,'MaxValue' => df_leaf_s($xIA['MaxValue'])
					,'MinValue' => df_leaf_s($xIA['MinValue'])
					,'Name' => df_leaf_s($xIA['Name'])
				];
			}
			$result[df_leaf_s($xA['Code'])] = [
				'title' => df_leaf_s($xA['Description'])
				,'items' => $items
			];
		}
		return $result;
	}

	/**
	 * 2017-04-12
	 * @return Settings
	 */
	private function ss() {return dfps($this);}

	/**
	 * 2017-04-12
	 * @return self
	 */
	public static function s() {static $r; return $r ? $r : $r = new self;}
}