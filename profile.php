<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="profile.css" />
</head>

<body>

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
  
    <p id="welcome">Welcome!!!</p><br>
    <div class="profileContainer">
    <img src="./Images/user-icon.png" id="icon" alt="User" /><br>
    <p id="welcome">Please complete this section for application process</p><br>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            LastName: <input type="text" name="lname" class="profileClass" />
            <span class="error">* <?php echo $lnameErr; ?></span><br>
            FirstName: <input type="text" name="fname" class="profileClass" />
            <span class="error">* <?php echo $fnameErr; ?></span><br>
            Email: <input type="email" name="email" class="profileClass" />
            <span class="error">* <?php echo $emailErr; ?></span><br>
            Phone Number: <input type="number" name="phone" class="profileClass" />
            <span class="error">* <?php echo $phoneErr; ?></span><br>
            Address: <input type="address" name="address" class="profileClass" />
            <span class="error">* <?php echo $addErr; ?></span><br><br>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br>
            Write short essay on Career & Goals [300 max]: <br><textarea name="message" rows="10" cols="60"></textarea>
            <span class="error">* <?php echo $messageErr; ?></span><br><br><br>
            Write short essay on Award & Achievement [300 max]: <br><textarea name="message" rows="10" cols="60"></textarea>
            <span class="error">* <?php echo $messageErr; ?></span><br><br><br>
            Write short essay on how geeting this Scholarhsip will help you [300 max]: <br><textarea name="message" rows="10" cols="60"></textarea>
            <span class="error">* <?php echo $messageErr; ?></span><br><br><br>
            <input type="submit" name="submit" value="Submit" id="profileSubmit"> <br><br>
        </form>
    </div>
</body>

</html>