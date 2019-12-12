<?php

namespace Taitava\Defaults;

use SilverStripe\Forms\HTMLEditor\HTMLEditorConfig;

if (Configuration::getFontSizeConfig())
{
	HtmlEditorConfig::get("cms")->addButtonsToLine(1, 'fontsizeselect');


	HtmlEditorConfig::get("cms")->setOptions(array(
		'theme_advanced_font_sizes' =>  "8px,10px,12px,13px,14px,16px,18px,20px,24px",
		'font_size_style_values' => "8px,10px,12px,13px,14px,16px,18px,20px,24px",
	));
}
