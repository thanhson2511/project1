<html>
<head>
    <title>Đăng ký</title>
    <meta charset="utf-8">
</head>
<body>
<?php require_once('views/include/notification.php') ?>
<form method="POST" action="/unit09/mvc/index.php?mod=auth&act=register">
    <fieldset>
        <legend>Đăng ký</legend>
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="name" size="30"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" size="30"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" size="30"></td>
            </tr>
            <tr>
                <td>Repassword</td>
                <td><input type="password" name="repassword" size="30"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng ký"></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>