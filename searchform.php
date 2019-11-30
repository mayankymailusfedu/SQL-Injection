<html>
<body>
<?php
    $user = 'root';
    $pass = '';
    $db = 'hardware_store';

    $link = mysql_connect('localhost', $user, $pass);
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
    $dbstatus = mysql_select_db($db);


    
    $fname=$_GET['fname'];
    if ($fname == "")
    {$fname = '%';}
    
    $query="SELECT name, stock, price FROM items WHERE name LIKE '%$fname%'";
    //$query="SELECT name, stock, price FROM items WHERE name LIKE '%brake%' UNION (SELECT 1,2,3 FROM dual)";//%'";
    //$query="SELECT name, stock, price FROM items WHERE name LIKE '%brake%' UNION (SELECT TABLE_NAME,TABLE_SCHEMA,3 FROM information_schema.tables)";//%'";
    $result = mysql_query($query);
    
    print (" | ");
    print ("Name");
	print (" | ");
	print ("Stock");
    print (" | ");
	print ("Price");
    print (" | ");
	print("<p>");
    if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
    }
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("<p>| %s | %s | %s", $row[0], $row[1], $row[2]);  
    }

    mysql_free_result($result);
    


/*if ($row = mysql_fetch_array($result,MYSQL_NUM)) {
    print (" | ");
    print ("Name");
	print (" | ");
	print ("Stock");
    print (" | ");
	print ("Price");
    print (" | ");
	print("<p>");
do {
    //printf ("%s (%s)\n",$row["name"],$row["stock"]);
	print (" | ");
    print $row[0];
	print (" | ");
	print $row[1];
    print (" | ");
	print $row[2];
    print (" | ");
	print("<p>");
} while($row = mysql_fetch_array($result,MYSQL_NUM));
//} else {print "Sorry, no records were found!";
//}*/

?>

</body>
</html>