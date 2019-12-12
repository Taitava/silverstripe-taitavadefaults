<?php

namespace Taitava\Defaults;

use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class SiteConfigExtension extends DataExtension
{
	public function updateCMSFields(FieldList $fields)
	{
		$fields->removeByName(array(
			'Theme',
		));
	}
}
