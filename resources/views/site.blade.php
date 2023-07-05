<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dra. Mirian Kmita</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/site.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

<!-- MENU FIXO -->
<nav class="navbar navbar-expand-md sticky-top py-4" id="navbar">
    <div class="container">

        <a class="navbar-brand" href="#">MK</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0" id="navbar-nav">
                <li class="nav-item mx-2">
                    <a class="nav-link fs-5" href="#inicio">Início</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-5" href="#profissional">Profissional</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-5 " href="#areas">Áreas de Atuação</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-5" href="#destaques">Blog</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-5" href="#contato">Fale Comigo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- div scrollable -->
<div
    data-bs-spy="scroll"
    data-bs-target="#navbar"
    data-bs-root-margin="0px 0px -60%"
    data-bs-smooth-scroll="true"
    >

<!-- INICIO -->
<div class="container-fluid border border-2 border-end-0 border-start-0 border-top-0" id="inicio">
    <div class="container row mx-auto">
        <div class="col-12 p-5 col-lg-8 pb-lg-0">
            <h1 class="text-shadow fw-bolder mt-5">Especialista em Licitações e Contratos, Agentes Públicos e Previdência (RPPS)</h1>
            <p class="mt-4 fw-light fs-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. , quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        <div class="d-none col-4 d-lg-block">
            <img src="{{ asset('img/mirian-header-web.jpg') }}" class="img-fluid" alt="">
        </div>
    </div>
</div>

<!-- PROFISSIONAL -->
<div class="container-fluid pt-5" id="profissional">

    <div class="container row mx-auto">

        <div class="col-12 col-md-3 offset-md-1">
            <img src="{{ asset('img/mirian-profissional-1-bigg.png') }}" class="d-none d-md-block img-fluid" />
            <img src="{{ asset('img/mirian-profissional-1-big.png') }}" class="d-md-none img-fluid" />
        </div>

        <div class="col-12 py-5 col-md-7 px-md-5 pt-md-0 pt-lg-5">
            <h2 class="titulo mb-5 px-0 fs-1">
                Profissional
                <span class="sublinhado-titulo"></span>
            </h2>
            <p class="fs-5 fw-light">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sede do eiusmod tempor incididunt ut labore dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation.
                Euis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupida.
                Euis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupida.
            </p>
        </div>

    </div>
</div>

<!-- AREAS DE ATUACAO -->
<div class="container-fluid py-5 shadow" id="areas-fluid">

    <h2 class="container titulo my-5 pt-4 fs-1 ps-5" id="areas">
        Áreas de Atuação
        <span class="sublinhado-titulo"></span>
    </h2>

    <div class="container row mx-auto pb-5">
        <div class="col-12 d-flex flex-column gap-5 flex-lg-row gap-lg-2">

            <div class="area-card col d-flex flex-column px-4 py-5 mx-3 shadow rounded-2 bg-light">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('img/icone-1.png') }}" class="img-fluid" width="45px" />
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h3 class="my-0 fs-3">Licitações e Contratos</h3>
                    </div>
                </div>
                <div class="flex-grow-1 fw-light fs-6">
                    Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
                </div>
                <a href="#" class="btn btn-lg btn-primary mt-5">
                    Saiba mais
                    <i class="bi bi-zoom-in mx-1"></i>
                </a>
            </div>

            <div class="area-card col d-flex flex-column px-4 py-5 mx-3 shadow rounded-2 bg-light">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('img/icone-1.png') }}" class="img-fluid" width="45px" />
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h3 class="my-0 fs-3">Agentes Públicos</h3>
                    </div>
                </div>
                <div class="flex-grow-1 fw-light fs-6">
                    Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
                </div>
                <a href="#" class="btn btn-lg btn-primary mt-5">
                    Saiba mais
                    <i class="bi bi-zoom-in mx-1"></i>
                </a>
            </div>

            <div class="area-card col d-flex flex-column px-4 py-5 mx-3 shadow rounded-2 bg-light">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('img/icone-1.png') }}" class="img-fluid" width="45px" />
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h3 class="my-0 fs-3">Previdência (RPPS)</h3>
                    </div>
                </div>
                <div class="flex-grow-1 fw-light fs-6">
                    Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
                </div>
                <a href="#" class="btn btn-lg btn-primary mt-5">
                    Saiba mais
                    <i class="bi bi-zoom-in mx-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- DESTAQUES -->
<div class="container-fluid py-5">

    <h2 class="container titulo my-5 pt-4 fs-1 ps-4" id="destaques">
        Destaques
        <span class="sublinhado-titulo"></span>
    </h2>

    <div class="container row mx-auto pb-5">

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <a href="#"><img src="{{ asset('img/news/destaque1.png') }}" class="img-fluid" /></a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#">Notícia do blog 01</a>
                    </h5>
                    <p>27 de fevereiro de 2023</p>
                    <p class="card-text">
                        <a href="#">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="d-none col-6 d-md-block col-lg-4">
            <div class="card">
                <a href="#"><img src="{{ asset('img/news/destaque1.png') }}" class="img-fluid" /></a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#">Notícia do blog 02</a>
                    </h5>
                    <p>11 de novembro de 2023</p>
                    <p class="card-text">
                        <a href="#">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="d-none col-4 d-lg-block">
            <div class="card">
                <a href="#"><img src="{{ asset('img/news/destaque1.png') }}" class="img-fluid" /></a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#">Notícia do blog 03</a>
                    </h5>
                    <p>05 de julho de 2023</p>
                    <p class="card-text">
                        <a href="#">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="d-grid col-12 col-md-6 col-lg-4 mt-4 mx-auto">
            <a href="#" class="btn btn-primary btn-lg" role="button">
                Acesse nosso blog
                <i class="bi bi-book mx-1"></i>
            </a>
        </div>

    </div>
</div>

<!-- FALE COMIGO -->
<div class="container-fluid bg-light py-5" id="contato">
    <div class="container row mx-auto">
        <div class="d-none my-5 d-lg-block col-lg-4 offset-lg-1">
            <img src="{{ asset('img/mirian-contato-2-big.jpg') }}" class="img-fluid border border-2" alt="">
        </div>
        <div class="col-12 my-5 col-lg-6 pt-2">
            <div class="row">
                <h2 class="col-7 titulo fs-1">
                    Fale Comigo
                    <span class="sublinhado-titulo"></span>
                </h2>
                <div class="contato-info col-5 fs-6">
                    <p>
                        <i class="bi bi-envelope"></i>
                        <span class="mx-1">mirian@kmita.com.br</span>
                    </p>
                    <p>
                        <i class="bi bi-instagram"></i>
                        <a href="#" class="mx-1">@miriankmita</a>
                    </p>
                    <p>
                        <i class="bi bi-telephone"></i>
                        <span class="fw-light mx-1">(42) 99917-1429</span>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-5">
                    <h3>Se preferir, envie sua mensagem abaixo:</h3>
                    <form class="row g-3" action="" method="post">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="fName" id="fName" placeholder="Digite aqui seu nome" />
                            <label for="fName" class="px-3">Seu nome:</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" type="email" name="fEmail" id="fEmail" placeholder="seu@email.com.br" />
                            <label for="fEmail" class="px-3">Seu email:</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" type="text" name="fPhone" id="fPhone" placeholder="(99) 99999-9999" />
                            <label for="fPhone" class="px-3">Seu telefone:</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" name="fMessage" id="fMessage" placeholder="Digite aqui sua mensagem"></textarea>
                            <label for="fMessage" class="px-3">Sua mensagem:</label>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary w-100 btn-lg" name="fSend">
                                Enviar mensagem
                                <i class="bi bi-envelope mx-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- RODAPE -->
<footer class="container-fluid py-5 py-5 border">
    <p class="text-center fs-7 py-3"><i class="bi bi-c-circle"></i> 2023 - Dra. Mirian Kmita</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</div>
</body>
</html>
