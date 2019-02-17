<?php include __DIR__ . "/../head.php" ;?>

<body>
<div class="container">
    <h2>Jusu rezervacija kirpykloje</h2>
    <?php
    if ($isActive){
        echo ('<div class="alert alert-warning" role="alert">
              <strong>Iki apsilankymo kirpykloje laika rezervuoti galima tik VIENA karta!</strong>
              <p>Jeigu norite - galite pakeisti savo rezervacijos laika:</p>
            </div>');
    }
    ?>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Vardas</th>
            <th scope="col">Data</th>
            <th scope="col">Laikas</th>
            <th scope="col">Keisti</th>
            <th scope="col">Liko iki bonus</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        foreach($custRes[1] as $res){ ?>
        <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo $custRes[0]['firstName']; ?></td>
            <td><?php echo $months[$res['rezMonth'] -1] . ' ' . sprintf("%02d", $res['rezDay']); ?></td>
            <td><?php echo $res['rezHour'] . ' : ' . sprintf("%02d", $res['rezMin']); ?></td>
            <td><button>Keisti</button> <button>Salinti</button></td>
            <td><?php echo 5 - $custRes[0]['visits']%5; ?></td>
        </tr>
        <?php $i++;} ?>
           </tbody>
    </table>
</div>
</body>
</html>