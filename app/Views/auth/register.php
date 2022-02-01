<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>

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
                    <h4>Criar conta nova</h4>
                </div>
                <hr>
                <form action="<?= base_url("auth/save"); ?>" method="post" autocomplete="off">
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
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" value="<?= set_value('name'); ?>" class="form-control" placeholder="Informe seu nome">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?= set_value('email'); ?>" class="form-control" placeholder="Informe seu email">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" value="<?= set_value('password'); ?>" class="form-control" placeholder="Informe sua senha">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirmar Senha</label>
                        <input type="password" name="cpassword" id="cpassword" value="<?= set_value('cpassword'); ?>" class="form-control" placeholder="Confirme sua senha">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Fazer Registo</button>
                    </div>
                    <br>
                    <a href="<?= site_url("auth"); ?>">Já tenho uma conta! Entrar</a>
                </form>
            </div>

        </div>
    </div>

</body>

</html>