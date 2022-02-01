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

                </ul>


                <ul class="navbar-nav ml-auto">
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