<?php
$total=(int) $_GET['total'];
?>

<div id='font'>Enter information of <?=  $total?> employees here</div>
<br/>
<br/>

<!--
We want to print out a form to accomodate all the employees

-->

<form method="post" target="_blank" action="save.php">

<table width='500'><tr>
<td width="10"></td>
<th align='left' width='33%'>NAME</th>
<th align='center' width='33%'>Phone</th>
<th align='right' width='33%'>Address</th>
</tr>
<?php
for($i=1;$i<=$total;$i++){

print<<<end
<tr>
 <td>{$i}.</td>
 <td>
 <input type="text" name="name[]" placeholder="Enter full name" required/>
 </td>
 <td>
 <input type="text" name="phone[]" placeholder="Enter phone number" required/>
 </td>
 <td>
 <input type="text" name="adr[]" placeholder="Enter address" required/>
 </td>

</tr>
end;
}
?>
<tr><td colspan="4" align="center"><input type='submit' id='button' name='save' value='SAVE Changes!'/></td></tr>

</table>
