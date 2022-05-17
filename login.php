<!DOCTYPE html>
<html lang="es">

<head>
    <title>login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="estilo.css">
</head>


<div class="container">
        <div class="row mt-5">
            <div class="col-md-4 offset-md-4">
                <div class="card-transparent">
                    <img src="imagenes/Avatar.png" width="190px" height="410px" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Login</h5>
                        <form class="text-center" action="validacion.php" method="post">
                            <div class="mb-3">
                                <label for="Email1" class="form-label"></label>
                                <input type="email" class="form-control" id="Email1" aria-describedby="email"
                                    placeholder="email" required="email">
                            </div>
                            <div class="mb-3">
                                <label for="imputPassword" class="form-label"></label>
                                <input type="password" class="form-control" id="ImputPassword" placeholder="password"
                                    required="ImputPassword">
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--aqui termina el formulario de login -->
    </html>