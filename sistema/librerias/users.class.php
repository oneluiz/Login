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

class Users extends Connection {

	public $day;
	public $country;
	public $year;
	protected $passkey;
	protected $activation;
	public $UsuariosEnLinea;

	public function __construct($day ='', $country  = '', $year  = '', $passkey='' ){
		$this->day		= $day;
		$this->country	= $country;
		$this->year		= $year;
		$this->passkey	= $passkey;
	}

	public function Countries($country, $get){
		
		$country	= $this->Connect()->query("SELECT * FROM countries WHERE id");
		$countries	= isset($_GET['country']) ? $_GET['country'] : null ;
		while($get	= mysqli_fetch_array($country))
		{
			if($get['isoAlpha3'] == $countries ){
				echo'<option value="'.$get["isoAlpha3"].'"selected="selected">'.$get["countryName"].'</option>';
			}else{
				echo'<option value="'.$get["isoAlpha3"].'">'.$get["countryName"].'</option>';
			}
		}

		return $country;
	}

	public function Day($day){
		for($day=1;$day<=31;$day++){
			echo'<option value="'.$day.'">'.$day.'</option>';
		}

		return $day;
	}

	public function Year($year){
		for($year=2015;$year>=1905;$year--){
			echo'<option value="'.$year.'">'.$year.'</option>';
		}

		return $year;
	}

	public function AccountLoginQuery(){
		
		global $profile;
		global $profileAuth;
		global $rankSQL;
		
		@$rankSQL	= $this->Connect()->query("SELECT * FROM account where email = '".$_SESSION['email']."'");
		$profile	= $rankSQL->fetch_assoc();
	}

	public function AccountLoginCheck(){
		
		global $profile;
		
		if(isset($_SESSION['email']) == ''){
			header("Location: ".URL_CUENTA."login");
			exit();
		}
		if($profile['roles_account'] < 2){
			die('<center>
					<h2>What are you doing here?</h2>
				</center>');
			header("Location: ".URL_CUENTA."login");
		}
	}
	
	public function AccountVerified($passkey, $activation){

		$passkey = filter_var($_GET['passkey'], FILTER_SANITIZE_STRING);

		if($activation = $this->Connect()->query("UPDATE account SET activation_code=NULL WHERE activation_code='".$passkey."'"))
		{
			echo '
			<div class="alert-page">
				<div class="alert-page-message success-page">
					<p class="text-green title">
						<strong>Your account is now active.<br/>You may now <a href="'.URL_CUENTA.'login">Log in</a></strong>
					</p>
				</div>
			</div>';
		}
		else
		{
			echo "Some error occuried.";
		}
	}

}
