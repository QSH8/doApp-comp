<?php






class Database
{
    protected static $users = array(
        [
            'Имя'     => 'Эран',
            'Фамилия' => 'Йегер',
            'Возраст' => '18',
            'Логин'   => 'fight',
            'Пароль'  => 'titan'
        ],  
    );

    public static function connection()
    {
        return self::$users;
    }

//     private $name;
//     private $surname;
//     private $age;
//     private $login;
//     private $password;

//     private $users;

//     public static function getUsers()
//     {
//         if (self::$users) self::$users;
//     }
//     public static function registerUser($name, $surname, $age, $login, $password)
//     {   
//         $user = array(
//             'Имя'     => $name,
//             'Фамилия' => $surname,
//             'Возраст' => $age,
//             'Логин'   => $login,
//             'Пароль'  => $password
//         );
//         array_push(self::$users, $user);
        
//         return $user;
//     }
//     public static function authUser($login, $password)
//     {
//         foreach (self::$users as $user) {
//             if (!$user[$login]) {
//                 return "Пользователя не существует";
//             }

//             if (!$user[$password]) {
//                 return "Неверный пароль";
//             }
//             return "Вы вошли";
//         }
//     }

}
?>