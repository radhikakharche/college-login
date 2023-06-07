<?php
include 'connect.php';

$id=$_GET['id'];

$deletquery="delete from clearancedues where id=$id";

$query=mysqli_query($con,$deletquery);

if($query){
    ?>
    <script>
        alert('deleted successfully');
    </script>
    <?php

}else{
    ?>
    <script>
        alert('no deleted');
        </script>
        <?php
}
