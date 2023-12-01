<?php
if(isset($_POST['submit']))
    {
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $message = $_POST['msg'];
        

        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "contact_us_form";

        $con = mysqli_connect($host, $username, $password, $dbname);

        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }

        $sql = "INSERT INTO contact_us (Name, email, Message) VALUES ('$name', '$email', '$message')";

        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo '<script>alert( "Message has been sent successfully!")</script>';
            echo "Message has been sent successfully!";

            header('Location: ./contact.php');
        }
      	else{
         	echo "Error, Message didn't send! Something's Wrong."; 
        }
        
        mysqli_close($con);
    }
?>