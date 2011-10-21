<?php

require_once(t3lib_extMgm::extPath('pagepath', 'class.tx_pagepath_api.php'));
 
class Tx_Serppreview_User_PagesTCA {

	protected $lengthLimit = 155;

	public function previewField($PA, $fObj) {
		$page = $PA['row'];
		$pagepath = tx_pagepath_api::getPagePath($page['uid'], '');
		$page['description'] = str_replace('<', '&lt;', $page['description']);
		if(strlen($page['description']) > $this->lengthLimit) {
			$croppedDescription = substr($page['description'], 0, $this->lengthLimit);
			$truncatePosition = strrpos($croppedDescription, ' ');
			$croppedDescription = substr($page['description'], 0, $truncatePosition) . ' ...';
		} elseif(strlen(trim($page['description'])) == 0) {
			$croppedDescription = '<i>No Meta Description set. Google will generate an excerpt from your content. Fill in a Meta Description to activate the preview.</i>';
		}else {
			$croppedDescription = $page['description'];
		}
		$content = '<div style="line-height:1.2;width:512px;font-size:13px;font-family: arial, sans-serif;background-color: #fff;padding:10px;border: 1px solid #ccc;">
			<div style="cursor:pointer;font-size:16px;text-decoration:underline;color: #1122CC">' . $page['title'] . '</div>
			<div style="color:#093">' . $pagepath . '</div>
			<p style="margin:0;color:#222">' . $croppedDescription . '</p>
		</div>
		<p>Length of your Meta Description: ' . strlen($page['description']) . '</p>
		<p><b>Attention:</b> The exact position where your description is cropped may vary.</p>';
		return $content;
	}

}

?>