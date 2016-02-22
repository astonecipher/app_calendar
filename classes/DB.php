<?php


class DB extends PDO
{

    protected $pdo = null;
    
    public function __construct()
    {
      try {
        $this->pdo = new PDO('mysql:host=localhost; dbname=calendar', 'root');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch ( PDOException $ex ) {
       echo "PDO Error: " . $ex->getMessage();
      } catch ( Exception $e ) {
       echo "General Error: " . $e->getMessage();
      }
    }
    
    public function getConnection(){
          return $this->pdo;
    }
    
}
        