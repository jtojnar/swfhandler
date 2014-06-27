## swfhandler

This extension renders Adobe Flash files.

## Installation

Make sure you have swftools and ImageMagick, clone into `$MEDIAWIKI/extensions`
and then add this to `LocalSettings.php`:

```php
require_once("$IP/extensions/swfhandler/swfhandler.php");
```

Make sure you can upload SWF files. See the [MediaWiki manual](https://www.mediawiki.org/wiki/Manual:Configuring_file_uploads#Configuring_file_types).

This has only been tested on MediaWiki 1.19 and 1.23.

## Thanks

* Mark Dayel: making the movhandler extensions this extension is based off of.
* Brian Wolff: for his help on IRC with the \*Handler API
