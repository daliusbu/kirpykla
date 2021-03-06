<?php include __DIR__ . "/../head.php" ;?>

<body>
<div class="container">
    <h2 class="mt-4 mx-auto">Klientų rezervacijos kirpykloje</h2>

    <div class="mt-4 mx-auto mb-5">

        <?php if($msg && gettype($msg) == 'string'){
            echo ('<div class="alert alert-danger" role="alert">' . $msg . '</div>');
        } ?>

        <form name="filterRes" method="get">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="lpp">Rodyti eilučių</label>
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
                    <label for="startMonth">Pradžios data</label>
                    <div class="form-row">
                        <select name="startMonth" id="startMonth" class="form-control col-md-5">
                            <?php for ($i = 0; $i<13; $i++){
                                echo "<option value='$i'>$months[$i]</option>";
                            } ?>
                        </select>
                        <select name="startDay" id="startDay" class="form-control col-md-3">
<!--                            <option value="--><?php //echo date('d') ?><!--"  selected = "selected" >--><?php //echo date('d') ?><!--</option>-->
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
                        <select name="endDay" id="endDay" class="form-control col-md-3">
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

    <table id="example" class="table display"  style="width:100%">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Vardas</th>
            <th scope="col">Data</th>
            <th scope="col">Laikas</th>
            <th scope="col">Šalinti</th>
            <th scope="col">Apsilankymai</th>
            <th scope="col">Nuolaida</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;

        foreach($resCust[0] as $row){ ?>
            <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $row['firstName']; ?></td>
                <td><?php echo $months[$row['rezMonth'] -1] . ' ' . sprintf("%02d", $row['rezDay']); ?></td>
                <td><?php echo $row['rezHour'] . ' : ' . sprintf("%02d", $row['rezMin']); ?></td>
                <td><a href="/nfq/index.php/staff/removeres/<?php echo $row[0] ?>/<?php echo $row[1] ?>"><button type="button" class="btn btn-sm btn-outline-danger">Atšaukti</button></a></td>
                <td><?php echo $row['visits']; ?></td>
                <td><?php if($row['visits']%5 == 0){echo '<button type="button" class="btn btn-sm btn-success">NUOLAIDA!</button>';}?></td>
            </tr>
            <?php $i++;} ?>
        </tbody>
        <tfoot>

        </tfoot>

    </table>


    <!--    PAGINATION    -->

    <div class="h-100 row d-flex justify-content-center mb-5" >
        <nav>
            <ul class="pagination">
                <?php
                $range = 3;
                if ($currentpage > 1) {
                    // show << link to go back to page 1
                    echo " <li class=\"page-item\"><a class=\"page-link\" href='{$_SERVER['PHP_SELF']}?{$_SERVER['QUERY_STRING']}&currentpage=1'> << </a> </li>";
                    // get previous page num
                    $prevpage = $currentpage - 1;
                    // show < link to go back to 1 page
                    echo " <li class=\"page-item\"><a class=\"page-link\" class=\"page-link\"href='{$_SERVER['PHP_SELF']}?{$_SERVER['QUERY_STRING']}&currentpage=$prevpage'> < </a></li>";
                } // end if

                // loop to show links to range of pages around current page
                for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
                    // if it's a valid page number...
                    if (($x > 0) && ($x <= $totalpages)) {
                        // if we're on current page...
                        if ($x == $currentpage) {
                            // 'highlight' it but don't make a link
                            echo " <a class=\"page-item\"><a class=\"page-link\" href='#'><b>$x</b></a></li> ";
                            // if not current page...
                        } else {
                            // make it a link
                            echo " <li class=\"page-item\"><a class=\"page-link\" href='{$_SERVER['PHP_SELF']}?{$_SERVER['QUERY_STRING']}&currentpage=$x'>$x</a></li> ";
                        } // end else
                    } // end if
                } // end for

                // if not on last page, show forward and last page links
                if ($currentpage != $totalpages) {
                    // get next page
                    $nextpage = $currentpage + 1;
                    // echo forward link for next page
                    echo " <li class=\"page-item\"><a class=\"page-link\" href='{$_SERVER['PHP_SELF']}?{$_SERVER['QUERY_STRING']}&currentpage=$nextpage'> > </a></li> ";
                    // echo forward link for lastpage
                    echo " <li class=\"page-item\"><a class=\"page-link\" href='{$_SERVER['PHP_SELF']}?{$_SERVER['QUERY_STRING']}&currentpage=$totalpages'> >> </a></li> ";
                } // end if
                ?>
            </ul>
        </nav>
    </div>
</div>


<!--================ Javascrpits ===================-->

<script type="text/javascript">
    <?php if($_GET['lpp'] == 25 || $_GET['lpp'] == 50){ ?>
        document.getElementById('lpp').value = "<?php echo $_GET['lpp'];?>";
   <?php } ?>
    <?php if($_GET['firstName'] !== ''){ ?>
        document.getElementById('firstName').value = "<?php echo $_GET['firstName'];?>";
    <?php } ?>
    <?php if($_GET['startMonth'] != null ){ ?>
        document.getElementById('startMonth').value = "<?php echo $_GET['startMonth'];?>";
    <?php } else { ?>
        document.getElementById('startMonth').value = "<?php echo date('n');?>";
    <?php } ?>
    <?php if($_GET['startDay'] != null ){ ?>
        document.getElementById('startDay').value = "<?php echo $_GET['startDay'];?>";
        <?php } else { ?>
        document.getElementById('startDay').value = "<?php echo date('j');?>";
    <?php } ?>
    <?php if($_GET['endMonth'] != null ){ ?>
        document.getElementById('endMonth').value = "<?php echo $_GET['endMonth'];?>";
        <?php } else { ?>
        document.getElementById('endMonth').value = "<?php echo date('n', strtotime("+2 week"));?>";
    <?php } ?>
    <?php if($_GET['startDay'] != null ){ ?>
        document.getElementById('endDay').value = "<?php echo $_GET['endDay'];?>";
        <?php } else { ?>
        document.getElementById('endDay').value = "<?php echo date('j', strtotime("+2 week"));?>";
    <?php } ?>
</script>

</body>
</html>

