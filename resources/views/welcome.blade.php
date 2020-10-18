<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Fuse IoT é uma StartUp especializada em soluções IoT, que fornece transformação digital para empresas e pessoas que querem melhorar seus indicativos, controlar seus ativos e obter melhores resultados com tecnologias baseadas em IoT e Inteligência Artificial.">
    <meta name="keywords" content="IoT,Internet of Things,Internet das Coisas,Inteligência artificial,Big Data,Analytics,Hardware,Conectividade,Segurança">
    <meta name="author" content="Monica Craveiro">
    <title>fuse | IoT Academy</title>
    <!-- Reset CSS -->
    <!-- <link href="{{ asset('css/reset.css') }}" rel="stylesheet"> -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/m-style.css') }}" rel="stylesheet">

    <!-- Styles -->
    <!-- <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style> -->
</head>
<body>
    <header id="header-academy">
        <nav data-scroll-header class="navbar navbar-expand-lg bg-white navbar-light">
            <div class="container">
                <a data-scroll class="navbar-brand" href="#header-academy"><img class="header-logo" src="{{ asset('img/Logo Fuse IoT Academy.png') }}" alt="Logo Fuse IoT Academy"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarAcademy" aria-controls="navbarAcademy" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarAcademy">
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn" href="/carrinho" role="button">
                                <img src="{{ asset('img/01 carrinho de compra.png') }}" class="carrinho" alt="Carrinho de Compras">
                            </a>
                        </li>
                        <?php if(!isset($_SESSION['usuario'])): ?>
                            <li class="nav-item">
                                <a data-scroll class="nav-link btn btn-academy" data-toggle="modal" data-target="#modalEmBreve">Entrar</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a data-scroll class="nav-link btn btn-academy" href="/perfil">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a data-scroll class="nav-link btn btn-academy" href="/logout">Sair</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="nav-bread" aria-label="breadcrumb">
            <ol class="breadcrumb container">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="https://fuseiot.io/">fuse | IoT</a></li>
            </ol>
        </nav>
    </header>
    <main>
        <section id="banner">
            <div class="text-banner">
                <h1 class="titulo-banner">Conheça a <span class="logofuse">fuse | <span class="logoiot">IoT</span></span> Academy</h1>
                <p class="sub-banner">INOVAÇÃO QUE GERA RESULTADOS.</p>
                <a data-scroll class="btn btn-banner" href="#tech">MÓDULO TECH</a>
                <a data-scroll class="btn btn-banner" href="#business">MÓDULO BUSINESS</a>
            </div> 
        </section>
        <section id="sobre">
            <div class="container">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('img/bloco 1 - resultados e aprimoramento.png') }}" class="icon-card" alt="Icone Card Roxo">
                            <!-- <h5 class="card-title">Atualizações gratuitas</h5> -->
                            <ul>
                                <li>Resultados com aprimoramento de processos, visando a melhoria contínua dos negócios.</li>
                                <!-- <li>Entrevistas com líderes da indústria.</li>
                                <li>Torne-se um profissional melhor.</li> -->
                            </ul>
                            <!-- <a data-scroll class="btn btn-card" href="#cursos">EXPLORAR CURSOS</a> -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('img/bloco 2 - inteligencia artificial.png') }}" class="icon-card" alt="Icone Card Roxo">
                            <!-- <h5 class="card-title">Atualizações gratuitas</h5> -->
                            <ul>
                                <li>Saiba tudo sobre Internet das Coisas, Inteligência Artificial e Tecnologia.</li>
                                <!-- <li>Entrevistas com líderes da indústria.</li>
                                <li>Torne-se um profissional melhor.</li> -->
                            </ul>
                            <!-- <a data-scroll class="btn btn-card" href="#cursos">EXPLORAR CURSOS</a>     -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('img/bloco 3 - iot.png') }}" class="icon-card" alt="Icone Card Roxo">
                            <!-- <h5 class="card-title">Atualizações gratuitas</h5> -->
                            <ul>
                                <li>Seja um especialista em IoT, prepare-se para o mercado.</li>
                                <!-- <li>Entrevistas com líderes da indústria.</li>
                                <li>Torne-se um profissional melhor.</li> -->
                            </ul>
                            <!-- <a data-scroll class="btn btn-card" href="#cursos">EXPLORAR CURSOS</a> -->
                        </div>
                    </div>
                </div>

                <div class="sobre">
                    <h3 class="titulo-sobre">QUEM SOMOS:</h3>
                    <p class="texto-sobre">A Fuse IoT/Academy tem como propósito, habilitar o aluno para atender toda a cadeia de IoT, fornecendo uma base sólida de conhecimento e especialização com qualidade e competividade, preparando-o para um dos mercados mais promissores do futuro.</p>
                    <div id="player"></div>
                </div>
            </div>
        </section>
        <section id="tema">
            <div class="container">
                <h2 class="titulo-tema">TRANSFORMAÇÃO E INOVAÇÃO</h2>
                <p class="texto-tema">Os objetos físicos se conectam e se comunicam através dos sensores e softwares que transmitem seus dados para a rede onde são analisados e transformados em informações. Isso é IoT.</p>
                <h4 class="mb-5">Os cursos de IoT estão baseados em 4 pilares:</h4>
                <div class="tematabs">
                    <ul>
                        <li onclick="showTab('ideacao')">
                            <img class="imgtabbtn" src="{{ asset('img/Definição de escopo.png') }}" alt="Imagen tab Botão">
                            <span class="text-center">P&D</span>
                            <!-- <span>Pesquisa  e Desenvolvimento</span> -->
                        </li>
                        <li onclick="showTab('escopo')">
                        <img class="imgtabbtn" src="{{ asset('img/ideação e arquitetura.png') }}" alt="Imagen tab Botão">
                        <span class="text-center">Arquitetura do Projeto</span>
                        <!-- <span>Como será a arquitetura do projeto</span> -->
                        </li>
                        <li onclick="showTab('prototipo')">
                            <img class="imgtabbtn" src="{{ asset('img/modelo de negócios.png') }}" alt="Imagen tab Botão">
                            <span class="text-center">Produção</span>
                            <!-- <span>MVP POC</span> -->
                        </li>
                        <li onclick="showTab('producao')">
                            <img class="imgtabbtn" src="{{ asset('img/producao - fabricação.png') }}" alt="Imagen tab Botão">
                            <span class="text-center">Modelo de Negócio e entrega</span>
                            <!-- <span>Modelo de Negocio</span> -->
                        </li>
                    </ul>
                
                    <div id="ideacao" class="temacontent">
                        <div class="borda">
                            <div class="seta top">
                                <div class="arrow down"></div>
                                <div class="arrow down-b"></div>
                            </div>
                            <div class="seta"></div>
                            <div class="seta"></div>
                            <div class="seta"></div>
                        </div>
                        <div class="content">
                            <div class="temaimg">
                                <img class="imgtab" src="{{ asset('img/wuxi_AI_WP_WXPRESS.png') }}" alt="Imagem Tabs">
                            </div>
                            <div class="tematexto">
                                <p class="titulotab">P&D – Pesquisa  e Desenvolvimento</p>
                                <p class="textotab">Neste item, os pontos abordados são: Aprendizagem de eletrônica,   Definir o escopo do projeto, Definir qual o hardware será usado, Que tipo de sensor será usado, Que tipo de conectividade será feita.</p>
                            </div>
                        </div>
                    </div>
                    <div id="escopo" class="temacontent">
                        <div class="borda">
                            <div class="seta"></div>
                            <div class="seta top">
                                <div class="arrow down"></div>
                                <div class="arrow down-b"></div>
                            </div>
                            <div class="seta"></div>
                            <div class="seta"></div>
                        </div>
                        <div class="content">
                            <div class="temaimg">
                                <img class="imgtab" src="{{ asset('img/3.jpg') }}" alt="Imagem Tabs">
                            </div>
                            <div class="tematexto">
                                <p class="titulotab">Arquitetura do Projeto – Como será a arquitetura do projeto</p>
                                <p class="textotab">Ecossistemas do produto a ser criado, definição de aplicação, se será em rede privada o rede pública, qual dispositivo será usado (celular).</p>
                            </div>
                        </div>
                    </div>
                    <div id="prototipo" class="temacontent">
                        <div class="borda">
                            <div class="seta"></div>
                            <div class="seta"></div>
                            <div class="seta top">
                                <div class="arrow down"></div>
                                <div class="arrow down-b"></div>
                            </div>
                            <div class="seta"></div>
                        </div>
                        <div class="content">
                            <div class="temaimg">
                                <img class="imgtab" src="{{ asset('img/quarenta.jpg') }}" alt="Imagem Tabs">
                            </div>
                            <div class="tematexto">
                                <p class="titulotab">Produção</p>
                                <p class="textotab">Execução da Prototipagem, fazer o MVP, testar o produto</p>
                            </div>
                        </div>
                    </div>
                    <div id="producao" class="temacontent">
                        <div class="borda">
                            <div class="seta"></div>
                            <div class="seta"></div>
                            <div class="seta"></div>
                            <div class="seta top">
                                <div class="arrow down"></div>
                                <div class="arrow down-b"></div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="temaimg">
                                <img class="imgtab" src="{{ asset('img/4.jpg') }}" alt="Imagem Tabs">
                            </div>
                            <div class="tematexto">
                                <p class="titulotab">Modelo de Negócio e entrega</p>
                                <p class="textotab">Como será entregue o produto testado e aprovado para  o cliente.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cursos">
            <div class="container">
                <h2 class="titulo-cursos">CURSOS</h2>
                <p class="texto-cursos">Todos os cursos estão disponíveis em uma plataforma EAD. Os temas são baseados em conceitos, metodologia e ferramentas de inovação, onde o aluno poderá interagir com o corpo docente, ter acesso ao plantão de dúvidas com especialistas, poderá participar de fórum com outros participantes. Além de ter toda estrutura de aprendizagem de forma prática para facilitar a sua aplicação imediata. Conheça a programação:</p>
            </div>
        </section>
        <section id="tech" class="mt-5">
            <div class="container text-center pb-4">
                <h2 class="p-3">MÓDULO TECH</h2>
                <h4 class="pb-3">Conceitos Básicos, Conceitos de Hardware, Conceitos de Software e Conectividade</h4>
                <div class="card-deck">
                    <div class="card">
                        <img src="{{ asset('img/conceitosbasicos.jpg') }}" class="card-img-top" alt="Curso Conceitos Básicos">
                        <div class="card-body">
                            <h6 class="card-title text-center text-primary text-uppercase">Conceitos Básicos</h6>
                            <ul>
                                <li>História do IoT</li>
                                <li>Casos de uso</li>
                                <li>Eletrônica básica - I</li>
                                <li>Telecom - Conectividade</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('img/conceitohw.jpg') }}" class="card-img-top" alt="Curso Conceitos de Hardware">
                        <div class="card-body">
                            <h6 class="card-title text-center text-primary text-uppercase">Conceitos de Hardware</h6>
                            <ul>
                                <li>Eletrônica básica – II</li>
                                <li>Processadores e Controladores</li>
                                <li>Tipos de transmissão sem fio</li>
                                <li>Kits de Desenvolvimento</li>
                                <li>Arquitetura</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('img/3.jpg') }}" class="card-img-top" alt="Curso Conceitos de Software">
                        <div class="card-body">
                            <h6 class="card-title text-center text-primary text-uppercase">Conceitos de Software</h6>
                            <ul>
                                <li>Noções de programação</li>
                                <li>Principais linguagens utilizadas</li>
                                <li>Software Embarcado</li>
                                <li>EdgeComputing</li>
                                <li>Cloud e Blockchain</li>
                                <li>Plataformas</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('img/conectividade.jpg') }}" class="card-img-top" alt="Curso Conectividade">
                        <div class="card-body">
                            <h6 class="card-title text-center text-primary text-uppercase">Conectividade</h6>
                            <ul>
                                <li>Conceitos de: LoRa, SigFox, NB-IoT, 2G, 3G, 4G e 5G, Zigbee, WiFi, BLE, NFC, RFiD, Satélite, UHF, Ultrasom</li>
                                <li>Protocolos</li>
                                <li>Codecs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="business">
            <div class="container text-center pb-4">
                <h2 class="p-3">MÓDULO BUSINESS</h2>
                <h4 class="pb-3">Segurança, Arquitetura, Legislação e Negócios</h4>
                <div class="card-deck">
                    <div class="card">
                        <img src="{{ asset('img/segurança.jpg') }}" class="card-img-top" alt="Curso Conceitos Básicos">
                        <div class="card-body">
                            <h6 class="card-title text-center text-primary text-uppercase">Segurança</h6>
                            <ul>
                                <li>LGPD</li>
                                <li>CiberSegurança</li>
                                <li>Criptografia</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('img/conceitosw.jpg') }}" class="card-img-top" alt="Curso Conceitos de Hardware">
                        <div class="card-body">
                            <h6 class="card-title text-center text-primary text-uppercase">Arquitetura - Cases</h6>
                            <ul>
                                <li>Avaliação de cenários</li>
                                <li>Criação de ecossistemas</li>
                                <li>Infraestrutura</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('img/legilação.jpg') }}" class="card-img-top" alt="Curso Conceitos de Software">
                        <div class="card-body">
                            <h6 class="card-title text-center text-primary text-uppercase">Legislação</h6>
                            <ul>
                                <li>Propriedade Intelectual</li>
                                <li>Homologação Anatel, Everynet, Inmetro, ONA, JCI, ANVISA e etc.</li>
                                <li>Frequências Licenciadas e Não-Licenciadas</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('img/banneracademy.jpg') }}" class="card-img-top" alt="Curso Conectividade">
                        <div class="card-body">
                            <h6 class="card-title text-center text-primary text-uppercase">Negócios</h6>
                            <ul>
                                <li>Modelo CAPEX e OPEX</li>
                                <li>Modelo SaaS e PaaS</li>
                                <li>CX e UX</li>
                                <li>ROI</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="modal">
            <div class="modal fade" id="modalEmBreve" tabindex="-1" role="dialog" aria-labelledby="modalEmBreveTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between">
                            <img src="{{ asset('img/LogoFusenav.svg') }}" class="logonav" alt="Logo Fuse IoT">
                            <h5 class="modal-title pt-2" id="modalEmBreveTitle">Em breve fuse | IoT Academy</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4 col-sm-12 d-sm-flex">
                    <img class="logo-footer" src="{{ asset('img/Logo Fuse IoT Academy_branco.png') }}" alt="Logo Fuse IoT Academy">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="tel:+551142008282">
                                <i class="fas fa-phone-volume mr-2 d-sm-none"></i>
                                +55 11 4200 - 8282
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:contato@fuseiot.io">
                                <i class="far fa-envelope mr-2 d-sm-none"></i>
                                contato@fuseiot.io
                            </a>
                        </li>
                    </ul>
                    <nav class="nav redes">
                        <a class="nav-link" href="https://www.linkedin.com/company/fuseiot/" target="_blank"><img class="social-logo" src="{{ asset('img/linkedin.svg') }}" alt="Logo LinkedIn"></img></a>
                        <a class="nav-link" href="https://www.youtube.com/c/fuseiotacademy" target="_blank"><img class="social-logo" src="{{ asset('img/youtube.svg') }}" alt="Logo YouTube"></img></a>
                        <a class="nav-link" href="https://www.instagram.com/fuseiotacademy/" target="_blank"><img class="social-logo" src="{{ asset('img/instagram.svg') }}" alt="Logo Instagram"></img></a>
                        <a class="nav-link" href="https://www.facebook.com/fuseiotacademy/" target="_blank"><img class="social-logo" src="{{ asset('img/facebook.svg') }}" alt="Logo Facebook"></img></a>
                        <a class="nav-link" href="https://www.tiktok.com/@fuseiotacademy" target="_blank"><img class="social-logo" src="{{ asset('img/tiktok.svg') }}" alt="Logo TikTok"></img></a>
                    </nav>
                </div>
                <div class="col">
                    <a class="titulo-footer" href="https://fuseiot.io/">COMPANHIA</a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#sobre">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Torne-se Professor</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <a class="titulo-footer" href="#">LIGAÇÕES</a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Perguntas Frequentes</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <a class="titulo-footer" href="#">APOIO, SUPORTE</a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Documentação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fóruns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pacotes de Idiomas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Status da Versão</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <a class="titulo-footer" href="#">RECOMENDAR</a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">WordPress</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">LearnPress</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">WooCommerce</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">bbPres</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Smooth Scroll -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/tab.js') }}"></script>
    <script src="{{ asset('js/youtubescriptLP.js') }}"></script>
</body>
</html>
