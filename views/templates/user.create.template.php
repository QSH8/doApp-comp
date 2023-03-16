<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $pageData['title'] ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<body>
    <form method="post" id="create">
        <input style="display: block;" type="text" name="name" placeholder="Имя">
        <input style="display: block;" type="text" name="surname" placeholder="Фамилия">
        <input style="display: block;" type="text" name="age" placeholder="Возраст">
        <input style="display: block;" type="text" name="login" placeholder="Логин">
        <input style="display: block;" type="password" name="password" placeholder="Пароль">
        <input style="display: block;" type="submit" name="create"value="Создать">
    </form>
    <script src='views/script.js'></script>
</body>
</html>