<!DOCTYPE html>
<html>

<head>
    <title>Générateur de QR Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="container-fluid">
    <h1 class="text-center">Générateur de QR Code</h1>

    <!-- card -->
    <div class="card">
        <div class="card-body">
            <form action="generate.php" method="POST">

                <div class="row">
                    <div class="col-6">
                        <label for="url">URL :</label>
                        <input type="text" id="url" name="url" required class="form-control" placeholder="https://www.sterenova.fr">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="url">Label :</label>
                        <input type="text" id="label" name="label" required class="form-control" placeholder="Sterenova">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-2">
                        <label for="foreground">Couleur avant-plan (hex) :</label>
                        <input type="color" id="foreground" name="foreground" value="#000000" class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="background">Couleur arrière-plan (hex) :</label>
                        <input type="color" id="background" name="background" value="#ffffff" class="form-control">
                    </div>
                </div>


                <hr>


                <button type="submit" class="btn btn-success">Générer QR Code</button>
            </form>
        </div>
    </div>



    <div id="qrcode"></div>

</body>

</html>