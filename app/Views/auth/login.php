<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
                    <h4>Iniciar Sessão</h4>
                </div>
                <hr>
                <form action="<?= base_url("auth/check"); ?>" method="post" autocomplete="off">

                    <?= csrf_field(); ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('fail'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="<?= set_value('email'); ?>" class="form-control" placeholder="Informe seu email">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="password">Senha</label>
                            <a href="<?= site_url("auth/forgot"); ?>">Esqueci a senha</a>
                        </div>
                        <input type="password" name="password" value="<?= set_value('password'); ?>" id="password" class="form-control" placeholder="Informe sua senha">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Entrar</button>
                    </div>
                    <br>
                    <a href="<?= site_url("auth/register"); ?>">Criar conta nova</a>
                </form>
            </div>

        </div>
    </div>

</body>

</html>