<?php

    session_start();
    include('config.php');

   if(! $connection)
   {
      die('Could not connect: ' . mysqli_error());
   }

    //<<------------- ADDING Sign Up DETAILS TO DATABASE --------------------->>
    if(isset($_POST['signup']))
    {
   
        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $uid = $_POST['uid'];
        $retval = mysqli_query($connection,"INSERT into user(uid, uname, email, pass) VALUES('$uid', '$uname', '$email', '$pass')");
        if($retval)
        {
            echo "Entered data successfully in User Table \n";
        }
    }


    //<<------------- CHECKING LOGIN DETAILS from DATABASE --------------------->>
    if(isset($_POST['login']))
    {
   
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];
        $check = mysqli_query($connection,"SELECT uid from user WHERE uname='$uname' AND pass='$pass' ");
        $row = mysqli_num_rows($check);
        if($row > 0)
        {
            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $uname;
            
            header("location: admin.php");
        }
        else
        {
            echo "User does not Exits";
        }
    }

    //<<------------- ADDING CATEGORY NEWS TO DATABASE --------------------->>
    if(isset($_POST['sub']))
    {
        $status = 'error';
        if(!empty($_FILES["image"]["name"]))
        {
            $fileName = basename($_FILES["image"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
        }

        $c=$_POST['c'];
        $c = strtolower($c);
        $t=$_POST['t'];
        $a=$_POST['a'];
        $e=$_POST['e'];
        $l=$_POST['l'];
        $co=$_POST['co'];

        $query = mysqli_query($connection,"Select MAX(no) from $c");
        $row = mysqli_fetch_array($query);
        $retval = mysqli_query($connection,"INSERT into $c(i, no, t, a, e, likes, comments) VALUES('$imgContent', $row[0]+1, '$t', '$a', '$e', '$l', '$co')");
        if($retval)
        {
            echo "Entered data successfully in $c \n";
        }
    }

    //<<------------- ADDING FEATURED NEWS TO DATABASE --------------------->>
    if(isset($_POST['featured-post']))
    {
        $pol = $_POST['politics'];
        $bus = $_POST['world'];
        $tec = $_POST['technology'];
        $hea = $_POST['health'];
        $tra = $_POST['travel'];
        $spo = $_POST['sports'];
        
        $query1 = mysqli_query($connection,"UPDATE featured SET title='$pol' where category='politics'");
        $query2 = mysqli_query($connection,"UPDATE featured SET title='$bus' where category='world'");
        $query3 = mysqli_query($connection,"UPDATE featured SET title='$tec' where category='technology'");
        $query4 = mysqli_query($connection,"UPDATE featured SET title='$hea' where category='health'");
        $query5 = mysqli_query($connection,"UPDATE featured SET title='$tra' where category='travel'");
        $query6 = mysqli_query($connection,"UPDATE featured SET title='$spo' where category='sports'");
        if($query1)
        {
            echo "Entered data successfully \n";
        }
    }

?>