<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Reservation form</title>
</head>
<body>
<div class="container">
<h3>Rezervuokite laika</h3>

    <form action="" method="post">

    <div class="form-row" >
        <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Telefono Nr.</label>
            <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="8 666 12345">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Vardas</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Vardas">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="month">Menuo</label>
            <select class="form-control" id="month">
                <?php for ($i = 1; $i<13; $i++){
                    echo "<option>$i</option>";
                } ?>
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="day">Diena</label>
            <select class="form-control" id="day">
                <?php for ($i = 1; $i<32; $i++){
                    echo "<option>$i</option>";
                } ?>
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="time">Laikas</label>
            <select class="form-control" id="time">
                <?php for ($i = 10; $i<20; $i++){
                    for ($j= 0; $j<60; $j+=15){
                        if (!in_array([$i, $j], $timesOcupied)){
                            $min = sprintf("%02d", $j);
                            echo ("<option value='$i,$j'>$i : $min</option>");
                        }
                    }
                } ?>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" value="submit">Rezervuoti</button>
    
</form>

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>