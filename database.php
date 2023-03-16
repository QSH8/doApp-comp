<?php
class Database
{
    private $users;
    
    public function __construct()
    {
        $dbData = json_decode(file_get_contents("db.json"));
        $json   = json_encode($dbData);
        $dbData = json_decode($json, true);

        $this->users = $dbData;
    }
    
    public function getUsers()
    {   
        return $this->users;
    }
    
    public function createUsers($user)
    {
        $filename    = 'db.json';
        $newUser     = json_encode($user, JSON_UNESCAPED_UNICODE);
        $payload     = file_exists($filename) ? ",{$newUser}]" : "[{$newUser}]"; 
        $fileHandler = fopen($filename, "c");
        fseek($fileHandler, -1, SEEK_END);
        fwrite($fileHandler, $payload);
        fclose($fileHandler);
    }   
}
