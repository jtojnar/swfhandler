<?php

// Based on Mark Dayel's movhandler extension. License is under what he chooses to license it under as a dervivative work.
// Thanks to Brian Wolff for all his help on IRC with all the nasty poorly documented bits.

define('SWF_RENDERER_SWFRENDER', 'swfrender');
define('SWF_RENDERER_GNASH', 'gnash');

$wgSwfhandlerRenderer = SWF_RENDERER_SWFRENDER;

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

$wgMediaHandlers['application/x-shockwave-flash'] = 'swfhandler';
$wgMediaHandlers['application/vnd.adobe.flash-movie'] = 'swfhandler';
