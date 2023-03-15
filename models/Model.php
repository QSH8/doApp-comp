<?php
class Model
{
    protected $database = null;

    public function __construct()
    {
        $this->database = new Database; //  Типа подключились.
    }
}
