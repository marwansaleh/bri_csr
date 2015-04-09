<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


define('ARTICLE_PUBLISHED', 1);
define('ARTICLE_PUBLISHED_NOT', 0);

define('IMAGE_TYPE_SINGLE','single');
define('IMAGE_TYPE_MULTI','multi');

define('IMAGE_THUMB_ORI', 'ori');
define('IMAGE_THUMB_LARGE', 'large');
define('IMAGE_THUMB_MEDIUM', 'medium');
define('IMAGE_THUMB_SMALL', 'small');
define('IMAGE_THUMB_SQUARE', 'square');
define('IMAGE_THUMB_SMALLER', 'smaller');
define('IMAGE_THUMB_TINY', 'tiny');

define('USERTYPE_INTERNAL', 0);
define('USERTYPE_EXTERNAL', 1);

define('ARTICLE_TYPE_SLIDER','slider-news');
define('ARTICLE_TYPE_HIGHLIGHT','highlight');

define('WIDGET_SOCMED_COUNTERS', 'socmed_counter');
define('WIDGET_FACEBOOK','facebook');
define('WIDGET_STOCKS','stock');
define('WIDGET_NEWSGROUP','group_news');
define('WIDGET_NEWSPHOTO','photo_news');
define('WIDGET_VIDEO','feature_video');
define('WIDGET_NEWSLATEST','latest_news');

define('TOKEN_RESET_UNUSED',0);
define('TOKEN_RESET_USED',1);

/* End of file constants.php */
/* Location: ./application/config/constants.php */