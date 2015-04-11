<?php
/**
* Copyright (C) 2015 Luis Cortes <YET TO BE DETERMINED>
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
**/
/*
|--------------------------------------------------------------------------|
| Info: Session for Accounts.
| Special: DO NOT TOUCH!
|--------------------------------------------------------------------------|
| Creates Sessions that are saved so that accounts can stay connected.
|--------------------------------------------------------------------------|
*/
if (!isset($_SESSION))
    session_start();
/*
|--------------------------------------------------------------------------|
| Info: Session for Accounts. END.
|--------------------------------------------------------------------------|
*/

/*
|--------------------------------------------------------------------------|
| Info: CMS Language System.
|--------------------------------------------------------------------------|
| Specifies the Language that your CMS will show.
| Under Heavy Work. Please do not touch.
|--------------------------------------------------------------------------|
*/
define('LANGUAGE',	'es');

/*
|--------------------------------------------------------------------------|
| Info: CMS Language System END.
|--------------------------------------------------------------------------|
*/
/*
|--------------------------------------------------------------------------|
| Info: CMS Community System.
|--------------------------------------------------------------------------|
| Important Links to Social sites & the title of the CMS.
| Under Heavy Work. Please do not touch.
|--------------------------------------------------------------------------|
*/
define('TITULO',	'QAPP High School');
define('FACEBOOK', 	'https://www.facebook.com/');
define('TWITTER',  	'https://twitter.com/');
define('YOUTUBE',  	'https://www.youtube.com/');
define('REDDIT',   	'https://www.reddit.com/');

/*
|--------------------------------------------------------------------------|
| Info: CMS Community System END.
|--------------------------------------------------------------------------|
*/
/*
|--------------------------------------------------------------------------|
| Info: CMS Connection Variables.
|--------------------------------------------------------------------------|
| Please set these to your MySQL Connection. 
| If you don\'t know what you are doing, please contact with one of FlameCMS
| Developers to help you.
|--------------------------------------------------------------------------|
*/
define('HOST',		'127.0.0.1');
define('USER',		'root');
define('PASSWORD',	'');
define('PORT',		'3306');
define('DB',		'prueba');

/*
|--------------------------------------------------------------------------|
| Info: DO NOT TOUCH THESE UNLESS YOU KNOW WHAT YOU ARE DOING.
|--------------------------------------------------------------------------|
*/
define('URL_BASE',			'http://localhost/');
define('URL_CUENTA',		'http://localhost/cuenta/');
define('URL_CUENTA_IMAGEN',	'http://localhost/cuenta/images/');

/*
|--------------------------------------------------------------------------|
| Info: CMS Connection Variables END.
|--------------------------------------------------------------------------|
*/

/*
|--------------------------------------------------------------------------|
| MAINTENANCE
| DEVELOPMENT_ENVIRONMENT
| DIRECTORY_SEPARATOR
| Dirname __ROOT__
| Special: DO NOT TOUCH!
|--------------------------------------------------------------------------|
| Creates Sessions that are saved so that accounts can stay connected.
|--------------------------------------------------------------------------|
*/
define('MAINTENANCE', false);
define('DEVELOPMENT_ENVIRONMENT', false);
define('DS', DIRECTORY_SEPARATOR);
define('__ROOT__', dirname(dirname(__FILE__)));
define('__MODULOCUENTA__', __ROOT__.DS.'cuenta'.DS.'modulos'.DS.'');
date_default_timezone_set('America/Costa_Rica');

/*
|--------------------------------------------------------------------------|
| System Core CMS FlameNet.
|--------------------------------------------------------------------------|
*/
require(__ROOT__.DS.'sistema'.DS.'QAPP.php');
