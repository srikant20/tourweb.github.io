<?php

$conn = mysqli_connect("localhost", "root", "", "book_db");
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $place = $_POST['place'];
    $member = $_POST['member'];
    $a_date = $_POST['a_date'];
    $l_date = $_POST['l_date'];

    $result = "INSERT INTO book_form(name, email, phone, address, location, guest, arriavls, leaving) VALUES('$name','$email','$number','$address','$place','$member','$a_date','$l_date') ";
    mysqli_query($conn, $result);
    header("Location: index.php");
} else {
    echo "Something went to wrop try again";
}
?>