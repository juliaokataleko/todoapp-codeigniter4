<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/css/all.css'); ?>">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 ">
        <div class="container">

            <a class="navbar-brand" href="/dashboard">Wottels</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorias</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> -->
                </ul>


                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form> -->

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('profile'); ?>">Perfil</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('auth/logout'); ?>">Sair</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2><?= $title; ?></h2>
            </div>
            <div class="card-body">
                <p>Seja bem-vindo</p>

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

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Activo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= ucfirst($userInfo['name']); ?></td>
                                <td><?= $userInfo['email']; ?></td>
                                <td><?= $userInfo['phone']; ?></td>
                                <td><?= $userInfo['active']; ?></td>
                                <td><?= $userInfo['created_at']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>