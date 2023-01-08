<!DOCTYPE html>
<html>
    <head>
        <title> Form Handling in PHP </title>
    </head>

    <Body>
       
    <!-- $_POST -->

        <h1>POST METHOD</h1>
        <form action="postget/welcome.php" method="post">
        username: <input type="text" name="user"><br>
        password: <input type="text" name="pass"><br>
        <input type="submit" name="button1" value="Button 1">
        </form>

        <br><br>;

        
        <h1>GET METHOD</h1>

        <form action="postget/goodbye.php" method="get">
        name: <input type="text" name="user"><br>
        ign: <input type="text" name="ign"><br>
        <input type="submit" name="button2" value="Button 2">
        </form>
    </Body>
</html>