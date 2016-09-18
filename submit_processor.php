<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","autoparts_bank");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO `auto_parts` (`Distributor`, `Address`, `City`, `State`, `Zip`, `Phone_No`, `SKU`, `Part`, `New_Used`, `Year`, `Make_Model`, `Price`) 
VALUES ('$_POST[Distributor]', '$_POST[Address]', '$_POST[City]', '$_POST[State]', '$_POST[Zip]', '$_POST[Phone_No]', '$_POST[SKU]', '$_POST[Part]', '$_POST[New_Used]', '$_POST[Year]', '$_POST[Make_Model]', '$_POST[Price]')");
?>

