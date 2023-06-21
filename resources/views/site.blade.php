<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dra. Mirian Kmita</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/site.css') }}" />
</head>
<body>

<!-- MENU FIXO -->
<nav class="navbar navbar-expand-lg fixed-top" id="navbar">
    <div class="container">
        <a href="#" class="navbar-brand"><span>LOGO</span></a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar-items"
            aria-controls="navbar-items"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbar-items">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Profissional">Profissional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Áreas de Atuação">Áreas de Atuação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Fale Comigo">Fale Comigo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- INICIO -->
<div class="container-fluid bg-light" id="inicio">
    <div class="container">
        <div class="row">
            <div class="col-8 border">
                <h1>Especialista em Licitações e Contratos, Agentes Públicos e Previdência (RPPS)</h1>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-4 text-center">
                <img src="{{ asset('img/logo.png') }}" width="250px" alt="">
            </div>
        </div>
    </div>
</div>

<!-- PROFISSIONAL -->
<div class="container-fluid bg-primary" id="profissional">
    <div class="container bg-primary">
        <h2>Profissional</h2>
        <div class="row">
            <div class="col">
                <img src="{{ asset('img/mirian.png') }}" width="300px" />
            </div>
            <div class="col">
                <ul>
                    <li>Graduado em Direito pelo Centro Universitário Vale do Iguaçu em 2015</li>
                    <li>Pós Graduado em Direito Processual Penal, pela Damásio Educacional</li>
                    <li>Especialista em Direito Processual Penal Constitucional</li>
                    <li>Membro do: Instituto Dalledone, Confraria Criminal e Mindjus Criminal</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- AREAS DE ATUACAO -->
<div class="container-fluid bg-grey1" id="areas">
    <div class="container">
        <div class="row">
            <div class="col">

                <h2>Áreas de Atuação</h2>

                <div class="row gap-5">
                    <div class="col d-flex flex-column p-4 bg-light shadow-sm rounded-2">
                        <h3>Licitações e Contratos</h3>
                        <div class="flex-grow-1 mb-4">
                            Lorem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                        <button type="button" class="btn1 py-2 rounded">Saiba mais</button>
                    </div>
                    <div class="col d-flex flex-column p-4 bg-light shadow-sm rounded-2">
                        <h3>Agentes Públicos</h3>
                        <div class="flex-grow-1 mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                        <button type="button" class="btn1 py-2 rounded">Saiba mais</button>
                    </div>
                    <div class="col d-flex flex-column p-4 bg-light shadow-sm rounded-2">
                        <h3>Previdência (RPPS)</h3>
                        <div class="flex-grow-1 mb-4">
                            Lot labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                        <button type="button" class="btn1 py-2 rounded">Saiba mais</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- DESTAQUES -->
<div class="container-fluid bg-light border" id="destaques">
    <div class="container border">
        <div class="row">
            <div class="col">

                <h2>Destaques</h2>
                <div class="row border">
                    <div class="col d-flex flex-column p-4">
                        <a href="#"><img src="{{ asset('img/news/destaque1.png') }}" width="250px" /></a>
                        <h3><a href="#">All you want to know about industrial laws</a></h3>
                        <div>10 de março de 2023</div>
                        <div class="flex-grow-1 mb-4">
                            <a href="#">
                                Lorem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </a>
                        </div>
                    </div>
                    <div class="col d-flex flex-column p-4">
                        <a href="#"><img src="{{ asset('img/news/destaque1.png') }}" width="250px" /></a>
                        <h3><a href="#">Legal issues regarding paternity</a></h3>
                        <div>09 de abril de 2023</div>
                        <div class="flex-grow-1 mb-4">
                            <a href="#">
                                Lorem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </a>
                        </div>
                    </div>
                    <div class="col d-flex flex-column p-4">
                        <a href="#"><img src="{{ asset('img/news/destaque1.png') }}" width="250px" /></a>
                        <h3><a href="#">Judgement, Unfair business</a></h3>
                        <div>16 de junho de 2023</div>
                        <div class="flex-grow-1 mb-4">
                            <a href="#">
                                Lorem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </a>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn1 py-2 rounded">Visite nosso blog</button>
            </div>
        </div>
    </div>
</div>

<!-- FALE COMIGO -->
<div class="container-fluid bg-grey1" id="contato">
    <div class="container">
        <div class="row">
            <div class="col">

                <h2>Fale Comigo</h2>

                <div class="row">
                    <div class="col border">
                        infos
                    </div>
                    <div class="col border">

                        <form class="form-floating">
                            <div class="mb-3">
                                <label for="inputName" class="form-label">Seu Nome</label>
                                <input type="email" class="form-control" id="inputName" />
                            </div>


                                <label for="inputEmail" class="form-label">Seu E-mail</label>
                                <input type="email" class="form-control" id="inputEmail" />


                            <div class="mb-3">
                            <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com">
                            <label for="floatingInputValue">Input with value</label>
                            </div>

                            <div class="mb-3">
                                <label for="inputPhone" class="form-label">Seu Telefone</label>
                                <input type="phone" class="form-control" id="inputPhone" />
                            </div>

                            <div class="mb-3">
                                <div id="helpEmail" class="form-text">Nós nunca compartilharemos seus dados com ninguém.</div>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Sua mensagem</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>
