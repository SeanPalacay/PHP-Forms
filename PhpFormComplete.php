<!DOCTYPE html>
<html>
    <head>
        <title> Complete Form in PHP</title>
    </head>
    <body>

        <?php
        $fullname = $age = $address = $email = $number = $comment = $gender = "";
        $fullnameErr = $ageErr = $addressErr = $emailErr = $numberErr = $genderErr = "";

        function testinput($input){
            $input = trim($input);
            $input = stripcslashes($input);
            $input = htmlspecialchars($input);
            return $input;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST["name"])){
                $fullnameErr = "Fullname is required";
            } else {
                $fullname = testinput($_POST["name"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$fullname)){
                    Echo "Invalid Name, only letters and white spaces are allowed";
            }
                 }
        
            if (empty($_POST["age"])){
                $ageErr = "Age is required";
            } else {
                $age = testinput($_POST["age"]);
            }


            if (empty($_POST["address"])){
                $addressErr = "Address is required";
            } else {
                $address = testinput($_POST["address"]);
            }


            if (empty($_POST["email"])){
                $emailErr = "Email is required";
            } else {
                $email = testinput($_POST["email"]);
            }


            if (empty($_POST["number"])){
                $numberErr = "Contact number is required";
            } else {
                $number = testinput($_POST["age"]);
            }

            if (empty($_POST["comment"])){
                $comment = "Thank You!";
            } else {
                $comment = testinput($_POST["age"]);
            }
            
            if (empty($_POST["gender"])){
                $genderErr = "Gender is required";
            } else {
                $gender = testinput($_POST["gender"]);
            }
            
            
    }



        ?>
        <table border ="1">
            <td >
             <h1 style="text-align: center">PHP FORM</h1>
        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
        <table>
            <tr>
                <td>
                    Fullname : <input type ="text" value ="<?php echo $fullname;?>" name ="name">
                    <span class = "error">* <?php echo $fullnameErr;?></span>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td>
                    Age : <input type ="number" value ="<?php echo $age;?>" name ="age">
                    <span class = "error">* <?php echo $fullnameErr;?></span>
                    <br><br>
                </td>
            </tr> <tr>
                <td>
                    Address : <input type ="text" value ="<?php echo $address;?>" name ="address">
                    <span class = "error">* <?php echo $fullnameErr;?></span>
                    <br><br>
                </td>
            </tr> <tr>
                <td>
                    Email : <input type ="email" value ="<?php echo $email;?>" name ="email">
                    <span class = "error">* <?php echo $fullnameErr;?></span>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td>
                    Number : <input type ="number" value ="<?php echo $number;?>" name ="number">
                    <span class = "error">* <?php echo $fullnameErr;?></span>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td>
                    Comment: <textarea name ="comment" rows ="8" cols ="60"><?php echo $comment;?></textarea>
                    <span class = "error">* <?php echo $fullnameErr;?></span>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td>
                    Gender :
                     <input type ="radio" <?php if (isset($gender) && $gender == "female") echo "checked";?> value =" female" name ="gender"> Female
                     <input type ="radio" <?php if(isset($gender) && $gender == "male") echo "checked";?> value = "male" name ="gender"> Male
                     <input type ="radio" <?php if (isset($gender) && $gender == "other") echo "checked";?> value = "other" name ="gender"> Other
                    <span class = "error">* <?php echo $fullnameErr;?></span>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td style="text-align: center">
                <br><br>
                <input  type ="submit" name = "submit" value ="submit">
                </td>
            </tr>
            </table>
       </form>
       </td>
        </table>

    </body>
</html>