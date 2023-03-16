<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $pageData['title'] ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<body>
    <?php if (isset($_SESSION['logged_user'])): ?>
    <?php
        echo '<form method="post" id="logout">
                  <input type="submit" name="logout_submit" value="Выход">
              </form>';

        foreach ($pageData['info'] as $user) {
            echo 'Имя: '     . $user['name']    . '<br>';
            echo 'Фамилия: ' . $user['surname'] . '<br>';
            echo 'Возраст: ' . $user['age']     . '<br>';
            echo '<br>';
        }
        echo '<button><a href="user/create">Создать</a></button>';
    ?>
    <?php else: ?>
    <?php
        echo '<form method="post" id="login">
                  <input type="text" name="login" placeholder="Логин">
                  <input type="text" name="password" placeholder="Пароль">
                  <input type="submit" name="login_submit" value="Вход">
              </form>';
    ?>
    <?php endif ?>
</body>
</html>
