<?php include 'head.php'?>

<body>
<div class="container">
<h3>Rezervuokite apsilankymo laika</h3>

<!--TODO Change on Heroku-->

<!--    <form action="http://localhost/nfq/index.php/reservation/confirm" method="post">-->
        <form action="https://glacial-coast-30595.herokuapp.com/index.php/reservation/confirm" method="post">

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

<!--===== Get free times for given date and populate select options in the Form ======-->
<script>
    $(document).ready(function(){
        $("#day").change(function(){
            var day = $(this).val();
            var month = $('#month').val();
            $.ajax({
                type : "POST",
// TODO Change on Heroku
//                 url : "http://localhost/nfq/index.php/reservation/getFreeTimes",
                url : "https://glacial-coast-30595.herokuapp.com/index.php/reservation/getFreeTimes",

                data : { 'month':month, 'day':day },
                success : function(data) {
                    alert("it works " + data);
                    let minutes = '';
                    var opts = $.parseJSON(data);
                    $.each(opts, function(i, d) {
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