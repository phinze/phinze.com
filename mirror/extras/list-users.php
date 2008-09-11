<?
include('adminheader.php');
echo "<h2>Users</h2>";

// CONNECT
$dbh=mysql_connect ("localhost", $db_user, $db_pass) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($db_name) or die( "Unable to select database");

$query = "SELECT * FROM " . $pre . "_users";
$result = mysql_query($query);
$totalnum = mysql_numrows($result);

echo "<table style=\"width: 200px\" border=1 cellspacing=1 cellpadding=1>
<tr><td colspan=2><b>Name</b></td></tr>";

$i=0; while ($i < $totalnum) {
echo "<tr>
<td>" . mysql_result($result,$i,"Name") . "</td>
<td><a href=\"delete-user.php?name=" . mysql_result($result,$i,"Name") . "\">Delete</a></td>
</tr>";
$i++;
}
echo "</table>

<br><form method=\"post\" action=\"add-user.php\">
<input type=\"submit\" value=\"    New User    \"></form>";

mysql_close;
include('adminfooter.php');
?>