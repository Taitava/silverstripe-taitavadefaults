<?php

class TaitavaSiteTreeExtension extends DataExtension
{
	public function updateCMSFields(FieldList $fields)
	{
		$fields->removeByName(array(
			'Metadata',
		));
	}
}