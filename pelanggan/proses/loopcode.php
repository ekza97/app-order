<?php

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="test_mysql"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

// Count table rows 
$count=mysql_num_rows($result);
?>

<table width="500" border="0" cellspacing="1" cellpadding="0">
<form name="form1" method="post" action="">
<tr> 
<td>
<table width="500" border="0" cellspacing="1" cellpadding="0">

<tr>
<td align="center"><strong>Id</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Lastname</strong></td>
<td align="center"><strong>Email</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td align="center">
<? $id[]=$rows['id']; ?><? echo $rows['id']; ?>
</td>
<td align="center">
<input name="name[]" type="text" id="name" value="<? echo $rows['name']; ?>">
</td>
<td align="center">
<input name="lastname[]" type="text" id="lastname" value="<? echo $rows['lastname']; ?>">
</td>
<td align="center">
<input name="email[]" type="text" id="email" value="<? echo $rows['email']; ?>">
</td>
</tr>

<?php
}
?>

<tr>
<td colspan="4" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</td>
</tr>
</form>
</table>

<?php

// Check if button name "Submit" is active, do this 
if($Submit){
for($i=0;$i<$count;$i++){
$sql1="UPDATE $tbl_name SET name='$name[$i]', lastname='$lastname[$i]', email='$email[$i]' WHERE id='$id[$i]'";
$result1=mysql_query($sql1);
}
}

if($result1){
header("location:update_multiple.php");
}
mysql_close();
?>
UPDATE table_users
    SET cod_user = (case when user_role = 'student' then '622057'
                         when user_role = 'assistant' then '2913659'
                         when user_role = 'admin' then '6160230'
                    end),
        date = '12082014'
    WHERE user_role in ('student', 'assistant', 'admin') AND
          cod_office = '17389551';

Database
CREATE TABLE `test` (
`id` int(11) NOT NULL,
`name` varchar(20) NOT NULL,
`lastname` varchar(20) NOT NULL,
`email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
update.php
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="test"; // Table name
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
// Count table rows
$count=mysql_num_rows($result);
?>
<?php
// Check if button name "Submit" is active, do this
if(isset($_POST['Submit']))
{
$count=count($_POST["id"]);
for($i=0;$i<$count;$i++){
$sql1="UPDATE $tbl_name SET name='" . $_POST['name'][$i] . "', lastname='" . $_POST['lastname'][$i] . "', email='" . $_POST['email'][$i] . "' WHERE id='" . $_POST['id'][$i] . "'";
$result1=mysql_query($sql1);
}
}
echo $count;
mysql_close();
?>
<table width="500" border="0" cellspacing="1" cellpadding="0">
<form name="form1" method="post" action="">
<tr>
<td>
<table width="500" border="0" cellspacing="1" cellpadding="0">
<tr>
<td align="center"><strong>Id</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Lastname</strong></td>
<td align="center"><strong>Email</strong></td>
</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td align="center">
<input name="id[]" type="text" id="id" value="<?php echo $rows['id']; ?>">
</td>
<td align="center">
<input name="name[]" type="text" id="name" value="<?php echo $rows['name']; ?>">
</td>
<td align="center">
<input name="lastname[]" type="text" id="lastname" value="<?php echo $rows['lastname']; ?>">
</td>
<td align="center">
<input name="email[]" type="text" id="email" value="<?php echo $rows['email']; ?>">
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="4" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</td>
</tr>
</form>
</table>



//simpan code
<?php
mysql_connect("localhost","root","");
mysql_select_db("students") or die("Unable to select database");
 
$size = count($_POST['address']);
 
$i = 0;
while ($i < $size) {
	$address= $_POST['address'][$i];
	$id = $_POST['id'][$i];
 
	$query = "UPDATE students SET address = '$address' WHERE id = '$id' LIMIT 1";
	mysql_query($query) or die ("Error in query: $query");
	echo "$address<br /><br /><em>Updated!</em><br /><br />";
	++$i;
}
?>

//tampil code
<?php
mysql_connect("localhost","root","");
mysql_select_db("students") or die("Unable to select database");
 
$sql = "SELECT * FROM students ORDER BY id";
 
$result = mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
 
$i = 0;
 
echo '<table width="50%">';
echo '<tr>';
echo '<td>ID</td>';
echo '<td>Name</td>';
echo '<td>Address</td>';
echo '</tr>';
 
echo "<form name='form_update' method='post' action='update.php'>\n";
while ($students = mysql_fetch_array($result)) {
	echo '<tr>';
	echo "<td>{$students['id']}<input type='hidden' name='id[$i]' value='{$students['id']}' /></td>";
	echo "<td>{$students['name']}</td>";
	echo "<td><input type='text' size='40' name='address[$i]' value='{$students['address']}' /></td>";
	echo '</tr>';
	++$i;
}
echo '<tr>';
echo "<td><input type='submit' value='submit' /></td>";
echo '</tr>';
echo "</form>";
echo '</table>';
?>