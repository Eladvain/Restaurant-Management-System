<?php require '../config/config.php'; ?>


<?php 


  class App
  {
    public $host = "localhost";
    public $dbname = "demo";
    public $user = "root";
    public $password = "El23Va23in";

    public $link;

    public function __construct()
    {
      $this->connect();
    }

    public function connect()
    {
      $this->link = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname."", $this->user, $this->pass);

      if($this->link){
        echo "db connecting is working"
      }
    }
  }

  $obj = new App;

 