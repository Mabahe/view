<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "view".
 *
 * Auto generated 17-03-2013 23:36
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'View: Extended Fluid Views',
	'description' => 'Extends the built-in Fluid Views with smart overlay capabilities',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.2.0',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Claus Due',
	'author_email' => 'claus@wildside.dk',
	'author_company' => 'Wildside A/S',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:16:"ext_autoload.php";s:4:"e0c9";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"1b28";s:9:"README.md";s:4:"384c";s:61:"Classes/Override/Parser/SyntaxTree/ExtendedViewHelperNode.php";s:4:"673c";s:46:"Classes/Override/View/ExtendedTemplateView.php";s:4:"c70f";}',
	'suggests' => array(
	),
);

?>