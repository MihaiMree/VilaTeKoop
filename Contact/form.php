<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body style="padding:50px;">
 <h3 class="text-center">contact ons</h3>
<div class="container">
<form method="POST" action="process.php">

<div class="form-group">
<label for="naam">Naam</label>
<input type="text" name="naam" id="naam" class="form-control" required>
</div>

<div class="form-group">
<label for="adres">Adres</label>
<input type="text" name="adres" id="adres" class="form-control" required>
</div>

<div class="form-group">
<label for="telefoonnummer">Telefoonnummer</label>
<input type="text" name="telefoonnummer" id="telefoonnummer" class="form-control" required>
</div>

<div class="form-group">
<label for="email">E-mail</label>
<input type="email" name="email" id="email" class="form-control" required>
</div>

<div class="form-group">
<label for="vraag">Vraag</label>
<input type="text" name="vraag" id="vraag" class="form-control" required>
</div>

<div class="form-group">
<button type="submit" class="btn btn-success">Submit</button>
</div>

</form>

</div>

</body>
</html>