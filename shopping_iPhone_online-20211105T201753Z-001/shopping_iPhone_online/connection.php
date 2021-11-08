<?php
    $conn = pg_connect("postgres://xuzruwownzryjz:f1c492684613370bac39077b8425919f0e2cedd3f93327a82f969ff05cee10df@ec2-34-203-182-172.compute-1.amazonaws.com:5432/d15q3li9dmqf3s");

    if(!$conn){
        die("Can not connect database");
    } 
?>