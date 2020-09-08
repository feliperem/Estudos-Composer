<?php

namespace Sts\Models;
use PDO;

class Conn {

	public static $Host = "localhost";
	public static $User = "root";
	public static $Pass = "";
	public static $Dbname = "felipe";

	private static $Connect = null;

	private static function Conectar(){
		try {
			if (self::$Connect == null) {
				self::$Connect = new PDO('mysql:host='.self::$Host.';dbname='.self::$Dbname, self::$User, self::$Pass);
			}
		} catch (Exception $menssage) {
			echo 'Mensagem: '.$menssage->getMessage();
			die;
		}

		return self::$Connect;
	}

	public function getConn(){
		return self::Conectar();
	}

}

?>