<?php include __DIR__ . "/../head.php" ;?>

<body>
<div class="container">
    <h2 class="mt-4 mx-auto">Klientu rezervacijos kirpykloje</h2>

    <div class="mt-4 mx-auto">
        <p>Paieska rezultatuose</p>

        <form name="filterRes" method="post">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="lpp">Rodyti irasu</label>
                    <select name="lpp" class="form-control" id="lpp">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="lpp">Vardas</label>
                    <input name='firstName' type="text" class="form-control" id="firstName" placeholder="Vardas">
                </div>

                <div class="form-group col-md-3 ">
                    <label for="startMonth">Pradzios data</label>
                    <div class="form-row">
                        <select name="startMonth" id="startMonth" class="form-control col-md-5">
                            <?php for ($i = 0; $i<13; $i++){
                                echo "<option value='$i'>$months[$i]</option>";
                            } ?>
                        </select>
                        <select name="startDay" id="startMonth" class="form-control col-md-3">
                            <?php for ($i = 1; $i<32; $i++){
                                echo "<option value='$i'>$i</option>";
                            } ?>
                        </select>
                    </div>

                </div>




                <div class="form-group col-md-3 ">
                    <label for="endMonth">Pabaigos data</label>
                    <div class="form-row">
                        <select name="endMonth" id="endMonth" class="form-control col-md-5">
                            <?php for ($i = 0; $i<13; $i++){
                                echo "<option value='$i'>$months[$i]</option>";
                            } ?>
                        </select>
                        <select name="endDay" id="endMonth" class="form-control col-md-3">
                            <?php for ($i = 1; $i<32; $i++){
                                echo "<option value='$i'>$i</option>";
                            } ?>
                        </select>
                    </div>

                </div>






            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Filtruoti</button>
            </div>
        </form>

    </div>
    <?php
        if (isset($_POST['lpp'])){
            echo('The form was submitted');
        }
    ?>

    <table id="example" class="table display"  style="width:100%">
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
        foreach($resCust as $row){ ?>
            <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $row['firstName']; ?></td>
                <td><?php echo $months[$row['rezMonth'] -1] . ' ' . sprintf("%02d", $row['rezDay']); ?></td>
                <td><?php echo $row['rezHour'] . ' : ' . sprintf("%02d", $row['rezMin']); ?></td>
                <td><button>Keisti</button> <button>Salinti</button></td>
                <td><?php echo 5 - $row[0]['visits']%5; ?></td>
            </tr>
            <?php $i++;} ?>
        </tbody>
        <tfoot>

        </tfoot>

    </table>
</div>

<!--================ Javascrpits ===================-->

<script type="text/javascript">
    document.getElementById('lpp').value = "<?php echo $_POST['lpp'];?>";
    document.getElementById('firstName').value = "<?php echo $_POST['firstName'];?>";
    //document.getElementById('lpp').value = "<?php //echo $_POST['lpp'];?>//";
</script>

<script>

</script>

</body>
</html>