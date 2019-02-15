<!DOCTYPE html>
<html>
<head>
    <title>Reservations</title>
</head>
<body>
<h2>Reservations</h2>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Status</th>
        <th>Reserved</th>
    </tr>
        <?php foreach ($arr as $row){
            echo '<tr>';
            foreach ($row as $item){
                echo ("<td> $item  </td> ");
            }
            echo '</tr>';
        } ?>
</table>

</body>
</html>