<h2>display complaints</h2>
<?php
// echo "hello complaints" ;
// echo count($data);
if(count($data) > 0)
{
    echo "<table><tr><th>name</th><th>mail</th><th>phone</th><th>complaint type</th><th>Workflow</th></tr>";
    foreach($data as $v)
    {
        echo "<tr>";
        echo "<td>" . $v['phone'] . "</td>";
        echo "<td>" . $v['mail'] . "</td>";
        echo "<td>" . $v['phone'] . "</td>";
        echo "<td>" . $v['complaint_type'] . "</td>";
        echo "<td>" . $v['workflow'] . "</td>"; 
        echo "</tr>";
    }
    echo "</table>";    
}
else
{
    echo "No records found";
} 