<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

if (TYPO3_MODE=='BE')	{

	$TCA['pages']['columns'] += array(
		'tx_serppreview_preview' => array(
			'label' => 'SERP Preview',
			'exclude' => 0,
			'config' => array (
				'type' => 'user',
				'userFunc' => 'EXT:serppreview/Classes/User/PagesTCA.php:Tx_Serppreview_User_PagesTCA->previewField',
			),
		),
	);

	t3lib_extMgm::addToAllTCAtypes('pages', 'tx_serppreview_preview', '', 'after:description');

}
?>