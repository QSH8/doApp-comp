<?php
class UserModel extends Model
{
    public function check($login, $password)
    {
        $result = null;
        $message = null;

        foreach ($this->database->getUsers() as $user) {
            if ($user['login'] === $login) {

                if ($user['password'] === $password) {
                    $message = "Вы вошли!";
                    $result = true;

                    return [$result, $message];
                } else {
                    $message = "Пароль неверный!";
                }
            } else {
                $message = "Пользователя не существует";
            }
        }

        return [$result, $message];
    }

    public function getUsers()
    {
        return $this->database->getUsers();
    }

    public function createUsers($userData)
    {
        $this->database->createUsers($userData);
    }
}