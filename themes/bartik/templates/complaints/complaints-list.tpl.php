<h2>display complaints</h2>
<?php
global $base_url;
global $user;

if (in_array('administrator', array_values($user->roles)) &&  in_array('moderator', array_values($user->roles))) {
    // is admin
} else {
    // is not admin
}

if (count($data) > 0) {
    if (in_array('Manager', array_values($user->roles))) {
        echo "<table><tr><th>name</th><th>mail</th><th>phone</th><th>complaint type</th><th>Workflow</th><th>Action</th></tr>";
    } else {
        echo "<table><tr><th>name</th><th>mail</th><th>phone</th><th>complaint type</th><th>Workflow</th></tr>";
    }

    foreach ($data as $v) {
        echo "<tr>";
        echo "<td>" . $v['name'] . "</td>";
        echo "<td>" . $v['mail'] . "</td>";
        echo "<td>" . $v['phone'] . "</td>";
        echo "<td>" . $v['complaint_type'] . "</td>";
        echo "<td>" . $v['workflow'] . "</td>";
        if (in_array('Manager', array_values($user->roles))) {
            echo "<td><a href='" . $base_url . "?q=node/" . $v['edit'] . "/edit' >Edit</a></td>";
        } else {
        }

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}
