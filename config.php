
<?php
//DATABASE CONNECTION 

$connection = mysqli_connect('localhost','root','','admin');
if(!$connection){
//     echo "Success";
// }
// else{
    echo "Failed to connect" . mysqli_connect_error();
}
?>