<h2>Create a Custom Module in Drupal 7 (Part1)</h2>
<?php
echo "hello articles" ;
// echo count($data);
if(count($data) > 0)
{
    echo "<table><tr><th>Id</th><th>Name</th></tr>";
    foreach($data as $v)
    {
        echo "<tr>";
        echo "<td>" . $v['id'] . "</td>";
        echo "<td>" . $v['name'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";    
}
else
{
    echo "No records found";
} 