<?php

namespace Taitava\Defaults;

use SilverStripe\Core\Config\Configurable;

class Configuration
{
	use Configurable;
	
	/**
	 * @conf bool
	 */
	private static $adjustable_font_size = false;

	/**
	 * @return bool
	 */
	public static function getFontSizeConfig()
	{
		return (bool) self::config()->get('adjustable_font_size');
	}

}
