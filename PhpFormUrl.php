<!DOCTYPE html>
<html>
    <head>
        <title> Validate e-mail and url in php form</title>
    </head>
    <body>
        <?php

        $name = $email = $website = $comment = $gender = "";
        $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";

        function test_input($answer){
            $answer = trim($answer);
            $answer = stripcslashes($answer);
            $answer = htmlspecialchars($answer);
            return $answer;
        }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
            if(empty($_POST["name"])){
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);

             # Validate Name

            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                $nameErr = "Only letters and white space are allowed";
            }
            
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);

             # Validate E-mail

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr ="Invalid email format";
            }
            }
            if(empty($_POST["website"])){
                $websiteErr = "Websiteis required";
            } else {
                $website = test_input($_POST["website"]);

             # Validate URL

            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {   
                    $websiteErr = "Invalid URL";
                  }
            }
            if(empty($_POST["comment"])){
                $commentErr = "Comment is required";
            } else {
                $comment = test_input($_POST["comment"]);
            }
            if(empty($_POST["gender"])){
                $genderErr = "gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }
        
        ?>

        <Form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
        Name: <input type ="name" name ="name">
        <span class ="error">* <?php echo $nameErr;?></span>
        <br><br>

        Email: <input type ="email" name ="email">
        <span class ="error">* <?php echo $emailErr;?></span>
        <br><br>
        
        Website: <input type ="website" name ="website">
        <span class ="error">* <?php echo $websiteErr;?></span>
        <br><br>

        Comment: <textarea  rows ="8" cols ="60" name ="comment" ></textarea>
        <span class ="error">* <?php echo  $commentErr ;?></span>
        <br><br>

        Gender :
        <input type = "radio" name ="gender" value ="Female"> Female
        <input type = "radio" name ="gender" value ="Male"> Male
        <input type = "radio" name ="gender" value ="Other"> Other
        <span class ="error">* <?php echo $genderErr;?></span> 
        <br><br>

        <input type="submit" value ="submit" name = "submit">

        <br><br>

        <?php

        $type = array ($name,$email,$website,$comment,$gender);

        foreach ($type as $i)
        {
            echo $i . "<br>";
        }

    
        ?>


    </body>
</html>