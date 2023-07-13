<?php
    $con = mysqli_connect('localhost','root');

    if($con) {
        echo "Connection Successful";
    }
    else{
        echo "Connection Failed";
    }

    mysqli_select_db($con, 'anumakeupartist');

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $event = $_POST['event'];
    $dateofevent = $_POST['dateofevent'];
    $place = $_POST['place'];

    $query = "INSERT INTO clients (name, mobile, event, dateofevent, place) VALUES ('$name', '$mobile', '$event', '$dateofevent', '$place')";

    mysqli_query($con, $query);
    header('location:index.html');
?>