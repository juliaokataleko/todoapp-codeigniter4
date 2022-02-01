<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/all.css'); ?>">
</head>

<body>

    <div class="container">
        <div class="row" style="padding-top: 45px">

            <div class="col-md-4 offset-4">
                <div class="text-center">
                    <a href="/">
                        <h1>Wottels</h1>
                    </a>
                    <h4>Informe seu email para recuperar sua senha!</h4>
                </div>
                <hr>
                <form action="#" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Informe seu email">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Recuperar conta</button>
                    </div>
                    <br>
                    <a href="<?= site_url("auth"); ?>">Voltar no login</a>
                </form>
            </div>

        </div>
    </div>

</body>

</html>