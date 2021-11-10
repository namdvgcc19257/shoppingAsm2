<?php
    $conn = pg_connect("postgres://zlqgkvwwljmbqv:45ce6e6df159c01766c9ef1d239965b223b44de574be97d9aae19add549d8b31@ec2-54-167-201-170.compute-1.amazonaws.com:5432/d5lqnlt6fkcltd");

    if(!$conn){
        die("Can not connect database");
    } 
?>