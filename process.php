<?php 

    require_once('config.php');

    if(isset($_POST['btn']))
    {
        $UserName = $_POST['UName'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $CPassword = $_POST['CPassword'];

        if(empty($UserName) || empty($Email) || empty($Password) || empty($CPassword))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            if($Password!=$CPassword)
            {
                echo ' Password Not Matched ';
            }
            else
            {
                $pass=md5($Password);
                $query = "insert into users (UName,Email,Password) values ('$UserName','$Email','$pass')";
                $result = mysqli_query($con,$query);

                if($result)
                {
                    echo ' Your Record Has Been Saved in the Database ';
                }
                else
                {
                    echo ' Please Check Your Query ';
                }
            }
        }
    }


?>