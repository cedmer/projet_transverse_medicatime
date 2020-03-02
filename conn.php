<?php
$conn = mysqli_connect("localhost", "root", "", "medicatime");

if(mysqli_connect_errno())
{
    echo "failed to connect to MySQL:".mysqli_connect_error();
}