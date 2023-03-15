<?php






class Database
{
    private $users = array(
        [
            'name'     => 'Эран',
            'surname'  => 'Йегер',
            'age'      => '18',
            'login'    => 'fight',
            'password' => 'titan'
        ],  
        [
            'name'     => 'Микаса',
            'surname'  => 'Аккерман',
            'age'      => '19',
            'login'    => 'sosweet',
            'password' => 'unemotional'
        ],  
    );

    public function getUsers()
    {
        return $this->users;
    }
    public function createUsers($user)
    {
        array_push($this->users, $user);
    }   
}
