<?php

/**
Base template used by new-project to know what modules to install where & where to get them from
Structure is likely to change at some point
*/

$template = array(
	'sapphire' => new Github(array(
		'user' => 'silverstripe', 
		'project' => 'sapphire', 
		'branch' => SAPPHIRE_CURRENT_BRANCH
	)),
	'cms' => new Github(array(
		'user' => 'silverstripe', 
		'project' => 'silverstripe-cms',
		'branch' => SAPPHIRE_CURRENT_BRANCH
	)),
	'dataobjectmanager' => new Github(array(
		'user' => 'unclecheese', 
		'project' => 'DataObjectManager',
		'branch' => SAPPHIRE_CURRENT_BRANCH
	)),
	'uploadify' => new Github(array(
		'user' => 'unclecheese', 
		'project' => 'Uploadify',
		'branch' => SAPPHIRE_CURRENT_BRANCH
	))
	'themes/html5' => new Github(array(
		'user' => 'jmwohl', 
		'project' => 'SilverStripe-HTML5Boilerplate-Theme',
		'branch' => SAPPHIRE_CURRENT_BRANCH
	))
);

