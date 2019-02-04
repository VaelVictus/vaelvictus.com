<?php
/**
 * This is core configuration file.
 *
 * Use it to configure core behavior of Cake.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

if ($_SERVER['SERVER_NAME'] == 'localhost' OR $_SERVER['SERVER_ADDR'] == "::1") {
    define('DEV_ENV', 'local');
} else {
    define('DEV_ENV', 'live');
}

function prer($array) {
    echo "<pre style='font-size: 1.2em; font-family: Verdana;'>";
    print_r($array);
    echo '</pre>';
}

function dire($array) {
	echo "<pre><div class='error-message'>error</div>";
	?> <script>
			window.error = true;
	   </script> <?
	return die(print_r($array));
}

function dive($object) {
	echo "<pre><div class='error-message'>error</div>";
	return die(var_dump($object));
}

function limit_words($string, $word_limit = 10) {
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

Configure::write('debug', 0);
Configure::write('Error', array(
	'handler' => 'ErrorHandler::handleError',
	'level' => E_ALL & ~E_DEPRECATED,
	'trace' => true
));

Configure::write('Exception', array(
	'handler' => 'ErrorHandler::handleException',
	'renderer' => 'ExceptionRenderer',
	'log' => true
));

Configure::write('App.encoding', 'UTF-8');

//Configure::write('App.baseUrl', env('SCRIPT_NAME'));

//Configure::write('Routing.prefixes', array('admin'));

Configure::write('Cache.disable', true);

//Configure::write('Cache.check', true);

//Configure::write('Cache.viewPrefix', 'prefix');

Configure::write('Session', array(
	'defaults' => 'php'
));

Configure::write('Security.salt', '55515151351151551351513513');

Configure::write('Security.cipherSeed', '76859309657453332496749683645');

//Configure::write('Asset.timestamp', true);

//Configure::write('Asset.filter.css', 'css.php');

//Configure::write('Asset.filter.js', 'custom_javascript_output_filter.php');

Configure::write('Acl.classname', 'DbAcl');
Configure::write('Acl.database', 'default');

//date_default_timezone_set('UTC');

$engine = 'File';

// In development mode, caches should expire quickly.
$duration = '+999 days';
if (Configure::read('debug') > 0) {
	$duration = '+10 seconds';
}

// Prefix each application on the same server with a different string, to avoid Memcache and APC conflicts.
$prefix = 'vaelapp_';

/**
 * Configure the cache used for general framework caching. Path information,
 * object listings, and translation cache files are stored with this configuration.
 */
Cache::config('_cake_core_', array(
	'engine' => $engine,
	'prefix' => $prefix . 'cake_core_',
	'path' => CACHE . 'persistent' . DS,
	'serialize' => ($engine === 'File'),
	'duration' => $duration
));

/**
 * Configure the cache for model and datasource caches. This cache configuration
 * is used to store schema descriptions, and table listings in connections.
 */
Cache::config('_cake_model_', array(
	'engine' => $engine,
	'prefix' => $prefix . 'cake_model_',
	'path' => CACHE . 'models' . DS,
	'serialize' => ($engine === 'File'),
	'duration' => $duration
));
