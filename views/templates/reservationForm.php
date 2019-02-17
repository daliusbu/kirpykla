<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Javascripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Reservation form</title>

</head>
<body>
<div class="container">
<h3>Rezervuokite apsilankymo laika</h3>

<!--    <form action="http://localhost/nfq/index.php/reservation/confirm" method="post">-->

        <form action="https://glacial-coast-30595.herokuapp.com/reservation/confirm" method="post">
    <div class="form-row" >
        <div class="form-group col-md-6">
            <label for="phone">Telefono Nr.</label>
            <input name="phone" type="tel" class="form-control" id="phone" placeholder="8 666 12345">
        </div>
        <div class="form-group col-md-6">
            <label for="firstName">Vardas</label>
            <input name="firstName" type="text" class="form-control" id="firstName" placeholder="Vardas">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="month">Menuo</label>
            <select name="month" class="form-control" id="month">
                <?php for ($i = 1; $i<13; $i++){
                    echo "<option>$i</option>";
                } ?>
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="day">Diena</label>
            <select name="day" class="form-control" id="day" >
                <option value="" disabled selected>Pirma pasirinkite menesi</option>
                <?php for ($i = 1; $i<32; $i++){
                    echo "<option>$i</option>";
                } ?>
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="time">Laikas</label>
            <select name="time" class="form-control" id="time">
                <option value="" disabled selected>Pirma pasirinkite diena</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="submit">Rezervuoti</button>
    
</form>

</div>


<!--============================= JAVASCRIPTS ====================================-->

<!--===== Get occupied times ======-->
<script>
    $(document).ready(function(){
        $("#day").change(function(){
            var day = $(this).val();
            var month = $('#month').val();
            $.ajax({
                type : "POST",
                url : "http://localhost/nfq/index.php/reservation/getBusyTimes",
                data : { 'month':month, 'day':day },
                success : function(data) {
                    alert("it works " + data);
                    let minutes = '';
                    var opts = $.parseJSON(data);
                    $.each(opts, function(i, d) {
                        // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
                        minutes = d[1] == 0? '00':d[1];
                        $('#time').append('<option value="' + d[0] + '|' + d[1] +'">' + d[0] + ' : ' + minutes + '</option>');
                    });



                }
            });
        });
    });
</script>



</body>
</html>