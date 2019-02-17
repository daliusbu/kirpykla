<?php include __DIR__ . "/../head.php" ;?>

<body>
<h2>Jusu rezervacija kirpykloje</h2>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Vardas</th>
        <th scope="col">Data</th>
        <th scope="col">Laikas</th>
        <th scope="col">Keisti</th>
        <th scope="col">Min</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 1;
    foreach($cust as $res){ ?>
    <tr>
        <th scope="row"><?php echo $i; ?></th>
        <td><?php echo $res['customerId']; ?></td>
        <td><?php echo $res['rezMonth']; ?></td>
        <td><?php echo $res['rezDay']; ?></td>
        <td><?php echo $res['rezHour']; ?></td>
        <td><?php echo $res['rezMin']; ?></td>
    </tr>
    <?php $i++;} ?>
       </tbody>
</table>

</body>
</html>