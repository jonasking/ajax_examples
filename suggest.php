<?php
$val= $_GET['val'];     
$query = 'select val from words where val like $val%';

@$con = mysql_connect(':/Applications/MAMP/tmp/mysql/mysql.sock', 'root', 'root');
if (!$con)
{
    die('Could not connect: ');
}else{
    mysql_select_db("18jan");
    $result = mysql_query($query);
    echo "<table border=1 style=\"background-color:#000000\">";
$count=0;
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['val'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
mysql_close($con);

?>
