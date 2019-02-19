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
        <th>Update</th>
        <th>Delete</th>
    </tr>
        <?php foreach ($customers as $customer){
            echo '<tr>';
            foreach ($customer as $data){
                echo ("<td> $data  </td> ");
            }
            echo "<td><a href='http://localhost/nfq/index.php/staff/update/" . $customer[0] . "' ><button>Keisti</button></a></td>";
            echo "<td><a href='http://localhost/nfq/index.php/staff/delete/" . $customer[0] . "' ><button>Šalinti</button></a></td>";
            echo '</tr>';
        } ?>
</table>

</body>
</html>