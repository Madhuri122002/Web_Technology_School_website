<?php
    $con = mysqli_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' .mysqli_error());
    }

    mysqli_select_db($con,"admission");
    $sql="INSERT INTO admission_table (fullName, dob, gender, address, parentName, contact, email, selectedClass)
 VALUES ('$_POST[fullName]','$_POST[dob]','$_POST[gender]','$_POST[address]','$_POST[parentName]','$_POST[contact]','$_POST[email]','$_POST[class]')";

    if (!mysqli_query($con,$sql))
    {
        die('Error: '.mysqli_error($con));
    }

    echo "Success";
    mysqli_close($con);
?>
