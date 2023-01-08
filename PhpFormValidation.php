<!DOCTYPE html>
<html>
    <head>
        <title>Form Validation in PHP</title>
    </head>
    <body>

    <?php


$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr  = "";
$name = $email  = $website = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $websiteErr = "website is required";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $commentErr = "comment is required";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($answer) {
  $answer = trim($answer);
  $answer = stripslashes($answer);
  $answer = htmlspecialchars($answer);
  return $answer;
}
?>

        <Form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <caption><h1>Form Validation</h1></caption>
            <tr>
                <td><br>Name: <input type="name" name ="name"> 
                <span class="error">* <?php echo $nameErr;?></span></td>
            </tr>
            <tr>
                <td><br>Email: <input type="email" name ="email"> 
                <span class="error">* <?php echo $emailErr;?></span></td></td>
            </tr>
            <tr>
                <td><br>Website: <input type="website" name ="website">
                <span class="error">* <?php echo $websiteErr;?></span></td> </td>
            </tr>
            <tr>
                <td><br>Comment: <textarea name ="comment" rows = "5" cols ="40"></textarea>
                <span class="error">* <?php echo $commentErr;?></span></td></td>
            </tr>
            <tr>
                <td><br>Gender : 
                    <input type = "radio" name ="gender" value = "Female"> Female
                    <input type = "radio" name ="gender" value = "male"> Male
                    <input type = "radio" name ="gender" value = "other"> Other
                    <span class ="error">* <?php echo $genderErr; ?></span>
                </td>
            </tr>
            <tr>
                <td><br><input type="submit" name="submit" value="Submit"> </td>
            </tr>
        </table>
        </form>

        <?php

        $answer = array ($name,$email,$website,$comment,$gender);

        echo "<h1> Mga Sagot : </h1>";
        
        foreach($answer as $value)
        {
            echo $value . "<br>";   
        }
        ?>

    </body>
</html>