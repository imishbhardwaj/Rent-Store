<?php
include 'data.php';
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $sql="insert into registration(name,password,gender,date,email,phone,address,state,city,pincode) values('$name','$password','$gender','$date','$email','$phone','$address','$state','$city','$pincode')";
    if (mysqli_query($con,$sql)) {
        echo "<<script>alert('new record inserted')</script>";
    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
}
?>