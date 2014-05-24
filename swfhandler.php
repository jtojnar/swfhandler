<?php

// Based on Mark Dayel's movhandler extension. License is under what he chooses to license it under as a dervivative work.

$dir = dirname(__FILE__) . '/';
$wgAutoloadClasses['swfhandler'] = $dir . 'swfhandler_body.php';
$wgExtensionMessagesFiles['swfhandler'] = $dir . 'swfhandler.i18n.php';

$wgExtensionCredits['media'][] = array(
	'path' => __FILE__,
	'name' => 'swfhandler',
	'author' => 'Calvin Buckley', 
	'url' => 'http://imaginarycode.com/~calvin/', 
	'description' => 'create thumbnails for Adobe SWF files',
	'descriptionmsg' => 'swfhandler-desc',
);

/*
 *  Requires swftools to be installed
 */

$wgMediaHandlers['application/vnd.adobe.flash-movie'] = 'swfhandler';
