<?php

class TaitavaSiteConfigExtension extends DataExtension
{
	public function updateCMSFields(FieldList $fields)
	{
		$fields->removeByName(array(
			'Theme',
		));
	}
}