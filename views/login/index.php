<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("views/includes/head.php") ?>
</head>
<body>
    <div class="container">
        <div class="row mt-5 d-flex align-items-center d-flex justify-content-center">
            <div class="col-md-5 p-3" style="background:#fafafa; border-radius:5px; border: solid 1px #c9c9c9;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Login</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="index.php?c=login&a=verificar" autocomplete="off">
                            <div class="form-group">
                                <label for="email-input">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required name="email" />
                            </div>
                            <div class="form-group">
                                <label for="password-input">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" required name="password" />
                            </div>
                            <button id="guardar" name="guardar" type="submit" class="btn btn-primary btn-block">Iniciar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>