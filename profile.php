
<?php
include "connection.php";
session_start();

  if (!isset($_SESSION['user'])){



    header("location: index.php");
}

if (isset($_POST['submit'])){

    $sql="UPDATE  students SET Fname='".$_POST['fname']."',Lname='".$_POST['lname']."',Email='".$_POST['Email']."',Number='".$_POST['phone']."',
    Street='".$_POST['address']."',msg1='".$_POST['message1']."',
    msg2='".$_POST['message2']."',msg3='".$_POST['message3']."' where Email='".$_SESSION['user']."'";
 
    if (mysqli_query(open_Con(), $sql)) {
       
} else {
ECHO  "Error: " . $sql . "<br>" . mysqli_error(open_Con());
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/profile.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/1ca0d34845.js" crossorigin="anonymous"></script>
    <script src="faizan.js" defer></script>
    <script src="//code.jquery.com/jquery.min.js"></script>
</head>

<body>
<div id="nav-placeholder">

</div>
<script>
    $.get("nav.php", function(data){
        $("#nav-placeholder").replaceWith(data);
    });
    </script>
    <?php
    //form validation
    // define variables and set to empty values
    $lnameErr = $fnameErr = $genderErr = $emailErr = $phoneErr = $messageErr = $addErr= "";
    $lname = $fname = $gender = $email = $phone = $address = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["lname"])) {
            $lnameErr = "Last name is required";
        } else {
            $lname = test_input($_POST["lname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
                $lnameErr = "Only letters and white space allowed";
            }
        }
        if (empty($_POST["fname"])) {
            $fnameErr = "First name is required";
        } else {
            $fname = test_input($_POST["fname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
                $fnameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "Contact number is required";
        } else {
            $phone = test_input($_POST["phone"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[0-9]*$/", $phone)) {
                $phoneErr = "Only numbers are allowed";
            }
        }

        if (empty($_POST["address"])) {
            $addErr = "address is required";
        } else {
            $address = test_input($_POST["address"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' 1-9]*$/", $address)) {
                $addErr = "Only letters and white space & numbers are allowed";
            }
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["message"])) {
            $messageErr = "This field is required";
        } else {
            $message = test_input($_POST["message"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' 1-9]*$/", $message)) {
                $messageErr = "Only letters and white space & numbers are allowed";
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
  
    <div class="container profileContainer">
    <img src="./Images/user-icon.png" id="icon" alt="User" /><br>
    <p id="welcome">Please complete this section for application process</p><br>

    <?php 
    	$sql = "select * from scholio.students where Email='".$_SESSION['user']."'";
        $result = mysqli_query(open_Con(), $sql);
 while($std=mysqli_fetch_assoc($result)){
    ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="inputWrap">
        LastName: <input type="text" name="lname" value="<?php echo $std['Lname']; ?>" class="profileClass" />
            <span class="error">* <?php echo $lnameErr; ?></span><br>
            FirstName: <input type="text" name="fname" value="<?php echo $std['Fname']; ?>" class="profileClass" />
            <span class="error">* <?php echo $fnameErr; ?></span><br>
            Email: <input type="email" value="<?php echo $std['Email']; ?>" name="Email" class="profileClass" />
            <span class="error">* <?php echo $emailErr; ?></span><br>
            Phone Number: <input type="number" value="<?php echo $std['Number']; ?>" name="phone" class="profileClass" />
            <span class="error">* <?php echo $phoneErr; ?></span><br>
            Address: <input type="address" name="address" value="<?php echo $std['Street']; ?>" class="profileClass" />
            <span class="error">* <?php echo $addErr; ?></span><br><br>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br>
              
            Write short essay on Career & Goals [300 max]: <br><textarea name="message1" value="<?php echo $std['msg1']; ?>" rows="10" cols="60" class="textbox"></textarea>
            <span class="error">* <?php echo $messageErr; ?></span><br><br><br>
            Write short essay on Award & Achievement [300 max]: <br><textarea name="message2" value="<?php echo $std['msg2']; ?>" rows="10" cols="60"  class="textbox"></textarea>
            <span class="error">* <?php echo $messageErr; ?></span><br><br><br>
            Write short essay on how geeting this Scholarhsip will help you [300 max]: <br><textarea name="message3"  value="<?php echo $std['msg3']; ?>" rows="10" cols="60"  class="textbox"></textarea>
            <span class="error">* <?php echo $messageErr; ?></span><br><br><br>
            <input type="submit" name="submit" value="Submit" id="profileSubmit" class="btn"> <br><br>
        </div> 
        </form><?php 
    }
        ?>
    </div>
   
</body>
<div id="foot-placeholder">

</div>
<script>
    $.get("foot.html", function(data){
        $("#foot-placeholder").replaceWith(data);
    });
    </script>
</html>