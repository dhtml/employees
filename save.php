<?php
//first we retrieve all the data, note that the data will be in array format
$names=$_POST['name'];
$phones=$_POST['phone'];
$adrs=$_POST['adr'];


//we shall loop through each data one at a time and generate the sql queries
for($i=0;$i<count($names);$i++){
$name=$names[$i];
$phonenumber=$phones[$i];
$address=$adrs[$i];

//remember to use mysql_real_escape_string or addcslashes or addslashes

$sql="INSERT INTO `employees` SET name='$name', phonenumber='$phonenumber', address='$address'";
//mysql_query($sql) or die(mysql_error()); //you can insert each data like this
echo "<li>$sql;";
}
?>