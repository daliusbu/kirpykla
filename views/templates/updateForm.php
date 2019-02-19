<?php include 'head.php'?>

<body>
<div class="container">
<h3>Iveskite savo rezervacijos duomenis</h3>

    <?php if($msg != ''){ echo "<div class='alert alert-danger'>$msg</div>"; } ?>
    <form action="<?php echo ROOT_URL ?>/reservation/check" method="post">
    <div class="form-row" >
        <div class="form-group col-md-6">
            <label for="phone">Telefono Nr.</label>
            <input name="phone" type="tel" class="form-control" id="phone" placeholder="8 666 12345" pattern="^\+*[0-9]*\s*[0-9]*\s*[0-9]*\s*[0-9]*\s*$"  required>
        </div>
        <div class="form-group col-md-6">
            <label for="firstName">Vardas</label>
            <input name="firstName" type="text" class="form-control" id="firstName" placeholder="Vardas" required>
        </div>
    </div>
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Rodyti rezervacija</button>
    </div>
</form>

</div>

</body>
</html>