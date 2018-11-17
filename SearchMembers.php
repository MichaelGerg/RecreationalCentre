<form action="SearchMembersShow.php" method="post">
This Page returns searched Members.
</br>
</br>Columns in MemberInfo table are :
</br>
</br>
MID
</br>
Type
</br>
Address 
</br>
Age
</br>
Name 
</br>
DateCreated
</br>
</br>

 <label>Enter MID  </label>
 <input name="where_cols" type="text"
placeholder="Type Here">
 <br>
 <br>
 <input type="submit" value="Search">
</form>

<form action="SearchMembersType.php" method="post">

<br>

This Page returns searched Members of Membership type x.
<br>
<br>


<?php
include 'connect.php';
$conn = OpenCon();

$result = $conn->query("select * from MEMBERSHIPS");

echo "<select name = 'id' >";

while ($row = $result->fetch_assoc()) {

unset($Type);
 $Type = $row['Type'];

 echo
'<option value="'.$Type.'">'.$Type.'</option>';
}

echo "</select>";

?>

<br>
</br>

 <input type="submit" value="Search">
</form>
