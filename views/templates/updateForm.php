<?php include 'head.php'?>

<body>
<div class="container">
<h3>Iveskite savo rezervacijos duomenis</h3>

    <form action="<?php echo ROOT_URL ?>/reservation/confirm" method="post">
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
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Rodyti rezervacija</button>
    </div>


</form>

</div>






</body>
</html>