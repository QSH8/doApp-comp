<?php
class Model
{
    protected $data = null;

    public function __construct()
    {
        $this->data = Database::connection();
    }
}
?>