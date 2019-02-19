<?php include __DIR__ . "/../head.php" ;?>


<div class="container">
    <h2>Jūs sėkmingai rezervavote apsilankymą kirpykloje</h2>
    <h5>Lauksime Jūsų paskirtu laiku.</h5>
    <?php
    if ($isActive){
        echo ('<div class="alert alert-warning" role="alert">
              <strong>Iki apsilankymo kirpykloje - rezervuotis galima tik VIENĄ kartą!</strong>
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
            <th scope="col">Atšaukti</th>
            <th scope="col">Liko iki -10%</th>
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

            <td><a href="<?php echo ROOT_URL . CUST_REMOVE_URL . $res[0] . '/' . $res[1] ?>"><button type="button" class="btn btn-sm btn-outline-danger">Atšaukti </button></a></td>
            <td><?php echo 5 - $custRes[0]['visits']%5; ?> apsilankymai</td>
        </tr>
        <?php $i++;} ?>
           </tbody>
    </table>
</div>
</body>
</html>