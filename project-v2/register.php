<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="css/styling.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="register">
    <h1>Register</h1>
    <form action="register.php" method="post" autocomplete="off">
        <input type="text" name="username" placeholder="Username" id="username" required>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="email" name="email" placeholder="Email" id="email" required>
        <input type="submit" value="Register">
    </form>
</div>
</body>
</html>