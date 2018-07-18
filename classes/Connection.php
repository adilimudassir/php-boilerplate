<?php 
namespace Classes;

use PDO;

class Connection 
{
    private $hostname = "localhost";

    private $dbname = "php";

    private $username = "root";

    private $password = "";

    private $pdo;

    private static $instance = null;

    /**
     * Construct
     */

    public function __construct()
    {
        try{
            $this->pdo = new PDO("mysql:host=".$this->hostname.";dbname=".$this->dbname,$this->username, $this->password);
            // set the PDO error mode to exception
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    } 

    public static function instance()
    {
        if(!isset(self::$instance)){
			self::$instance = new Connection();
		}
        return self::$instance;
    }


}