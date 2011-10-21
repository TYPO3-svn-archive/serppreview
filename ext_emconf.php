<?php

########################################################################
# Extension Manager/Repository config file for ext "serppreview".
#
# Auto generated 19-10-2011 15:31
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'SERP Preview',
	'description' => 'Shows a preview of your page in a Google Result Page, to assist you with writing your meta description',
	'category' => 'be',
	'shy' => 0,
	'version' => '0.0.0',
	'dependencies' => 'pagepath',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Sebastian Michaelsen',
	'author_email' => 'michaelsen@t3seo.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'pagepath' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:4:{s:17:"ext_localconf.php";s:4:"e552";s:14:"ext_tables.php";s:4:"25e8";s:25:"Classes/User/PagesTCA.php";s:4:"be52";s:20:"Classes/User/php.ini";s:4:"e7a5";}',
	'suggests' => array(
	),
);

?>