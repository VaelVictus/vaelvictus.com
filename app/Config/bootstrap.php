<?php
/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
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
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

// Setup a 'default' cache configuration for use in the application.
Cache::config('default', array('engine' => 'File'));

function GetAge($birthdate)
{
        // explode the date into meaningful variables
        list($birthyear, $birthmonth, $birthday) = explode("-", $birthdate);
		
        // find the difference between current value for the date, and input date
        $yeardiff = date("Y") - $birthyear;
        $monthdiff = date("n") - $birthmonth;
        $daydiff = date("j") - $birthday;
		
        // it will be negative if the date has not occured this year
        if ($monthdiff < 0)
        $yeardiff--;
		
		// while the kids are age 5 or younger, display 1/2
		$half = '';
		if ($yeardiff <= 5) {
			$mos = months($birthdate);
			if (($mos - ($yeardiff * 12)) > 6) {
				$half = '&#189;';
			}
		}
		
	return "<span style='cursor: default;' title='$birthdate'>$yeardiff$half</span>";
}
function months($date)
{
	$tmp = explode('-', $date);
	return (date('Y') - $tmp[0]) * 12 + (( 12 - $tmp[1]) - (12 - date( 'n' )));
}


// Cake Config

Configure::write('Dispatcher.filters', array(
	'AssetDispatcher',
	'CacheDispatcher'
));

/**
 * Configures default file logging options
 */
App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
	'engine' => 'FileLog',
	'types' => array('notice', 'info', 'debug'),
	'file' => 'debug',
));
CakeLog::config('error', array(
	'engine' => 'FileLog',
	'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
	'file' => 'error',
));
