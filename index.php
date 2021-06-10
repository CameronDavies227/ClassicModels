<!DOCTYPE html>
<html>
    <head>
        <title>Database Connection and Displaying Records</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1 style="text-align:center;">LOGIN</h1>
        <form action="controller/checkCredentials.php" method="POST">
            <br>
            Username:<br>
            <input type="text" name="username" required pattern="[0-9a-zA-Z-!@#$%^&*()?]{3,}"><br><br>
            Password:<br>
            <input type="password" name="password" required pattern="[0-9a-zA-Z-!@#$%^&*()?]{3,}"><br><br>
            <input type="submit" value="Sign In"><br><br>
        </form><br>
        <?php
        if(isset($msg)){
            echo '<p>$msg</p>';
        }?>
    </body>
</html>