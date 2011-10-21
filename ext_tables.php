<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

if (TYPO3_MODE=='BE')	{

	t3lib_extMgm::addLLrefForTCAdescr('pages', 'EXT:serppreview/Resources/Private/Language/locallang_csh_pages.xml');

	$TCA['pages']['columns'] += array(
		'tx_serppreview_preview' => array(
			'label' => 'LLL:EXT:serppreview/Resources/Private/Language/locallang_db.xml:pages.tx_serppreview_preview',
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