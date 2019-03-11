<?php


final class BD
{

    private static $server = 'data base host';
    private static $dataBase = 'data base name';
    private static $user = 'user';
    private static $password = 'pass';

    private static $connection = NULL;

    public function __construct()
    {
        die("The class " . get_class($this) . " can not be instantiated!");
    }

    public static function connect()
    {
        if(NULL == self::$connection)
        {
            self::$connection = new mysqli(self::$server, self::$user, self::$password, self::$dataBase);

            if (self::$connection -> connect_error)
            {
                die("Connection failed: " . self::$connection -> connect_error);
            } 
        }

        return self::$connection;
    }

    public static function disconnect()
    {
        self::$conexao = NULL;
    }

    //Disable db cloning
    public function __clone(){
      return false;
    }
}
