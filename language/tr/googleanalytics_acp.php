<?php
/**
*
* Google Analytics extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_GOOGLEANALYTICS'				=> 'Google Analytics',
	'ACP_GOOGLEANALYTICS_ID'			=> 'Google Analytics ID',
	'ACP_GOOGLEANALYTICS_ID_EXPLAIN'	=> 'Google Analytics ID kodunuzu girin, ör: <samp>UA-0000000-00</samp>.<br /><br />Google Analytics, kayıtlı kullanıcılarınızı birden çok cihazda ve oturumda izleyebilir; böylece, raporlarınızdaki daha doğru bir kullanıcı sayısı elde edersiniz. Bu gelişmiş işlevselliği etkinleştirmek için Kullanıcı kimliği izleme, Google Analytics hesabınızda yapılandırılmalıdır. <a href="https://support.google.com/analytics/answer/3123666">Daha fazla bilgi için tıklayınız</a>.',
	'ACP_GOOGLEANALYTICS_ID_INVALID'	=> '“%s” geçerli bir Google Analytics ID kodu değil.<br />Kod şuna benzer şekilde olmalı “UA-0000000-00”.',
));
