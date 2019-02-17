<?php include __DIR__ . "/../head.php" ;?>

<body>
<div class="container">
    <h2>Klientu rezervacijos kirpykloje</h2>


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
        <tr>
            <th>#</th>
            <th>Vardas</th>
            <th>Data</th>
            <th>Laikas</th>
            <th>Keisti</th>
            <th>Liko iki bonus</th>
        </tr>
        </tfoot>

    </table>
</div>

<!--================ Javascrpits ===================-->

<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#example tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        } );

        // DataTable
        var table = $('#example').DataTable();

        // Apply the search
        table.columns().every( function () {
            var that = this;

            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    } );
</script>

</body>
</html>