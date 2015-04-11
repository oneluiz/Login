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

class Connection {

	protected $mysqli;
	protected $auth;
	protected $characters;
	protected $world;

	public function Connect(){

		$mysqli = new mysqli(HOST, USER, PASSWORD, DB, PORT);
		/**
		* Language support in the database
		*/
		$mysqli ->query("SET NAMES 'utf8'");

		if (mysqli_connect_error()) {
			die("Failed to connect to Database (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
		}

		return $mysqli;

	}

	public function Auth(){

		$auth = new mysqli(SERVERHOST, SERVERUSER, SERVERPASSWORD, AUTH, SERVERPORT);
		/**
		* Language support in the database
		*/
		$auth->query("SET NAMES 'utf8'");

		if (mysqli_connect_error()) {
			die("Failed to connect to Database (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
		}

		return $auth;

	}

	public function Characters(){

		$characters = new mysqli(SERVERHOST, SERVERUSER, SERVERPASSWORD, CHARACTERS, SERVERPORT);
		/**
		* Language support in the database
		*/
		$characters->query("SET NAMES 'utf8'");

		if (mysqli_connect_error()) {
			die("Failed to connect to Database (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
		}

		return $characters;

	}

	public function World(){

		$world = new mysqli(SERVERHOST, SERVERUSER, SERVERPASSWORD, WORLD, SERVERPORT);
		/**
		* Language support in the database
		*/
		$world->query("SET NAMES 'utf8'");

		if (mysqli_connect_error()) {
			die("Failed to connect to Database (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
		}

		return $world;

	}
}
