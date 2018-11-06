<?php
namespace model\Conection;

require_once('../config.php');
use \PDO;


class Conection 
{
	 // private static $connectionPDO = null;
	function __construct()
	{
		 return $this->getConection();
	}

	public function getConection()
	{
		try
		  {
		    // $connectionPDO = new \PDO('mysql:host='.constant(SERVER).';dbname='constant(DBNAME).'', constant(USER), constant(PASSWORD));
		    $connectionPDO = new PDO('mysql:host=localhost;dbname=ftp', "root", "");
		    // $pdo = new PDO('mysql:host=localhost;dbname=user', "", "");
		    $connectionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    return $connectionPDO;
		  }catch(PDOException $e){
		    echo 'error al conectar con base de datos: '.$e;
		  }
	}
}

?>
