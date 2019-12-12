<?php

if (!class_exists('SS_Object')) class_alias(Object::class, 'SS_Object'); // Backwards compatibility for SilverStripe < 3.7

class TaitavaDefaults extends SS_Object
{
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
