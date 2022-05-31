<html>
    <head>
    <title>BootStrap <?php echo $_GET['op']; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Grid -->
<div class="container">
  <div class="row">
  </div>
  <!-- Imagem e texto -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="index.html">
      <img src="_img/rck_logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
      <strong>Rockstar Games</strong>
    </a>
  </nav>

  <!-- Barra de navegação -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="Links.php">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            More...
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="index.php?op=2">A Rockstar Games</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php?op=3">Grand Theft Auto V</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php?op=4">Red Dead Redemption</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php?op=5">Bully</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
                    <?php if(!isset($_GET['op'])) { ?>
                        <!-- Carrosel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="height: 40rem;">
      <div class="carousel-item active">
        <img class="d-block w-100" src="_img/1.jpg" alt="Primeiro Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="_img/rdr2-capa.jpg" alt="Segundo Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="_img/BULLY.jpg" alt="Terceiro Slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>

  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col">
          &nbsp;
        </div>
        <!--Título-->
        <h3>
          <p style="text-align: center;">Avaliações</p>
        </h3>
        <!--- Figuras -->
        <div class="row">
          <div class="col">
            <div class="row">
              <div class="col">
                &nbsp;
              </div>
            </div>
            <figure class="figure">
              <img src="_img/gta-v-logo.jpeg" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption"><strong>"GTA 5 chega com enredo de qualidade, jogabilidade afiada e
                  divertida,
                  gráficos impressionantes e opções variadas de diversão, como armas, carros, aeronaves e esportes, o
                  game é praticamente incomparável nos quesitos conteúdo e qualidade." <i>Techtudo</i></strong>
              </figcaption>
            </figure>
          </div>

          <div class="col">
            <div class="row">
              <div class="col">
                &nbsp;
              </div>
            </div>
            <figure class="figure">
              <img src="_img/logo_dr.jpeg" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption"><strong>"Desde antes de seu lançamento, Red Dead Redemption 2 já era
                  considerado um dos grandes candidatos a melhor jogo do ano, e a confirmação dessa aposta é facilmente
                  percebida nas primeiras horas com o jogo. Quanto mais tempo passamos com o título da Rockstar,
                  entretanto, percebemos que ele também vai bem além disso." <i>Canaltecht</i></strong></figcaption>
            </figure>
          </div>

          <div class="col">
            <div class="row">
              <div class="col">
                &nbsp;
              </div>
            </div>
            <figure class="figure">
              <img src="_img/logo_bully.jpeg" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption"><strong>"Apesar das semelhanças, os gráficos de Bully são superiores
                  aos de GTA San Andreas, caracterizando-se como mais limpos e com texturas mais interessantes. Os
                  cenários são muito bem desenhados e possuem uma boa quantidade de objetos com os quais se pode
                  interagir. A parte artística do game é de se tirar o chapéu." <i>Voxel</i></strong></figcaption>
            </figure>
          </div>
        </div>
      </div>
                <?php }else{ ?>
                <?php if($_GET['op'] == 2) { ?>
                       <!--Quebra de linha-->
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <!--Imagem-->
            <div class="row">
                <div class="col-sm">
                    <img class="ad-block w-100" src="_img/Games_R.jpg">
                    <h2>
                        Rockstar Games
                    </h2>
                    <p>
                        Rockstar Games, Inc. é uma produtora e publicadora de jogos eletrônicos fundada em 1994.
                        Conhecida por ter criado grandes nomes dos jogos eletrônicos, a Rockstar é criadora das famosas
                        séries Grand Theft Auto, Red Dead, Midnigth Club, Bully, Max Payne e Manhunt.
                    </p>
                </div>
                <!--1° Acordeon-->
                <div class="col-sm">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>Filosofia da empresa</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Em outubro de 2011, o vice-presidente da Rockstar Dan Houser disse à Famitsu que a
                                    Rockstar evita intencionalmente o desenvolvimento de jogos de Tiro em Primeira
                                    Pessoa. "Estamos evitando deliberadamente isso agora", disse ele, de acordo com uma
                                    tradução da <a target="_blank" href="1UP.com">1UP.com</a> "Está no nosso DNA evitar
                                    fazer o que as outras empresas estão fazendo. Eu suponho que você poderia dizer que
                                    Max Payne 3 é algo perto de um FPS, mas há aspectos realmente únicos para a
                                    definição e jogabilidade ali também, e não apenas na história. Você precisa ter
                                    originalidade em seus jogos; você tem que ter algum tipo de mensagem interessante…
                                    Se nós fizermos o tipo os jogos que as pessoas querem jogar, então acreditamos que
                                    as pessoas vão comprá-los."
                                </div>
                            </div>
                        </div>
                        <!--2° Acordeon-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>Tecnologia</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>RAGE:</strong> A Rockstar Games desenvolveu seu próprio motor de jogo
                                    chamado Rockstar Advanced Game Engine (RAGE) para facilitar o desenvolvimento de
                                    jogos no PlayStation 3, Xbox 360, Windows, Mac e sistemas Wii.
                                    <br>
                                    <strong>Social Club:</strong> A Rockstar Games Social Club é um serviço de jogos
                                    online criado pela Rockstar para uso em seus jogos. <a target="_blank"
                                        href=https://socialclub.rockstargames.com>Rockstar Games Social Club</a>
                                    <br>
                                    <strong>Rockstar Games Launcher:</strong> A Rockstar Games lançou a sua própria
                                    plataforma de jogos para Microsoft Windows em 17 de Setembro de 2019. A plataforma
                                    integra-se com o uso da conta Social Club, permitindo ao utilizador, baixar e
                                    comprar jogos que já estejam registados na sua conta, ou até mesmo jogos da empresa
                                    noutras plataformas como a Steam.
                                </div>
                            </div>
                        </div>
                        <!--3° Acordeon-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Séries de jogos notáveis</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>• </strong>Grand Theft Auto
                                    <br>
                                    <strong>• </strong>Max Payne
                                    <br>
                                    <strong>• </strong>Red Dead Redemption
                                    <br>
                                    <strong>• </strong>Bully
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php } else if($_GET['op'] == 3) { ?>
                  <!--Quebra de linha-->
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <!--Imagem-->
            <div class="row">
                <div class="col-sm">
                    <img class="ad-block w-100" src="_img/gta-v.jpg">
                    <h2>
                        Grand Theft Auto V
                    </h2>
                    <p>
                        Los Santos sua vida como nos filmes,
                        venha viver como ela é. Incluindo... Carros Velozes, Economia próspera, Natureza Selvagem,
                        Glamour, Celebridades & Pontos turísticos, entre outas mil maravilhas...
                    </p>
                </div>
                <!--1° Acordeon-->
                <div class="col-sm">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>Enredo</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Os protagonistas de GTA V são Franklim, Michael e Trevor, três bandidos bem
                                    diferentes, unidos pela vida
                                    criminosa. Quando um malandro de rua, um ladrão de bancos aposentado e um psicopata
                                    aterrorizante se
                                    envolvem com alguns dos criminosos mais assustadores e loucos do submundo, o governo
                                    dos EUA e a indústria
                                    do entretenimento, eles devem realizar golpes ousados para sobreviver nessa cidade
                                    implacável onde não podem
                                    confiar em ninguém, nem mesmo um no outro.
                                </div>
                            </div>
                        </div>
                        <!--2° Acordeon-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>Melhorias das versões recentes:</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Grand Theft Auto V para PC, PS4 e Xbox One
                                    oferece aos jogadores a opção de explorar o gigantesco e premiado mundo de Los
                                    Santos e Blaine County em
                                    resoluções de até 4K e além, assim como a chance de experimentar o jogo rodando a 60
                                    FPS (quadros por
                                    segundo). A versão para PC, PS4 e Xbox One do Grand Theft Auto V e Grand Theft Auto
                                    Online apresenta o
                                    Modo em Primeira Pessoa, que dá aos jogadores a chance de explorar o mundo
                                    incrivelmente detalhado de
                                    Los Santos e Blaine County de uma maneira completamente nova. Grand Theft Auto V
                                    para PC também traz a
                                    estreia do Editor Rockstar, um poderoso conjunto de ferramentas criativas para
                                    capturar, editar e
                                    compartilhar, de maneira rápida e fácil, vídeos gravados dentro do Grand Theft Auto
                                    V e Grand Theft Auto
                                    Online. <a target="_blank" href="https://youtu.be/He5pZypleqE">Veja uma Gameplay das
                                        novas versões.</a>
                                </div>
                            </div>
                        </div>
                        <!--3° Acordeon-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>GTA Online:</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Grand Theft Auto V inclui o Grand Theft Auto Online, com
                                    suporte para até 30 jogadores e dois espectadores. Grand Theft Auto Online recebe
                                    várias
                                    atualizações de jogo e conteúdos criados pela Rockstar com regularidade, além de
                                    eventos e modos de
                                    jogo como os Golpes e Modos Adversários.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--quebra de linha-->
        <div class="row">
            <div class="col">&nbsp;</div>
        </div>
                <?php } else if($_GET['op'] == 4) { ?>
                     <!--Quebra de linha-->
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <!--Imagem-->
            <div class="row">
                <div class="col-sm">
                    <img class="ad-block w-100" src="_img/logo_dr.jpeg">
                    <h2>
                        Red Dead Redemption
                    </h2>
                    <p>
                        Red Dead Redemption 2 é um jogo eletrônico de ação-aventura desenvolvido e publicado
                            pela Rockstar Games.
                    </p>
                </div>
                <!--1° Acordeon-->
                <div class="col-sm">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>História</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A gangue Van der Linde, liderada por Dutch Van der Linde, é o centro da
                                    história principal do jogo. O protagonista do primeiro Red Dead Redemption está
                                    presente no segundo título,
                                    também como membro da gangue, mas 12 anos antes dos eventos do primeiro RDR. O jogo
                                    se passa em 1889, perto
                                    do
                                    fim do velho oeste e na era de ouro dos cassinos nos Estados Unidos - daí, a
                                    importância da presença dos
                                    jogos
                                    de mesa e caça-níqueis. Os membros da famosa gangue atuam como benfeitores dos mais
                                    pobres, uma espécie de
                                    gangue "Robin Hood". Como também no primeiro jogo, a divergência de pensamentos
                                    entre os membros gera
                                    conflitos
                                    que conferem a ação do jogo. Personagens como Javier Escuela, Bill Williamson e
                                    outros já conhecidos pelos
                                    jogadores também possuem aparições importantes no segundo jogo. <a target="_blank" href="https://www.youtube.com/watch?v=eaW0tYpxyp0">Veja o trailer do jogo aqui.</a>
                                </div>
                            </div>
                        </div>
                        <!--2° Acordeon-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>Realismo e Decisões</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Com menos cenas e mais controle ao jogador, é possível decidir o rumo que os embates
                                    tomarão, com diferentes formas de atirar, por exemplo. No entanto, o realismo também
                                    afeta outras áreas, como na exigência de que o personagem só carregue consigo o que
                                    de fato seria possível carregar. Além disso, as armas podem estragar quando, por
                                    exemplo, são molhadas num rio.
                                </div>
                            </div>
                        </div>
                        <!--3° Acordeon-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Minigames e Distrações</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Além de jogar pôquer com outros membros da gangue, o jogador
                                    pode fazer uma parada para ouvir música em vitrolas ou contar histórias. Portanto,
                                    Red Dead Redemption 2 de fato
                                    traz o conceito de RPG com ação para um novo patamar. É realmente como assumir todos
                                    os aspectos da vida do
                                    personagem, o que contribui muito para a experiência do jogador. Para de fato
                                    experimentar o que o jogo tem a
                                    oferecer, é recomendado estar pronto para embarcar em uma verdadeira aventura.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--quebra de linha-->
        <div class="row">
            <div class="col">&nbsp;</div>
        </div>
        <?php } else if($_GET['op'] == 5) { ?>
            <!--Quebra de linha-->
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <!--Imagem-->
            <div class="row">
                <div class="col-sm">
                    <img class="ad-block w-100" src="_img/logo_bully.jpeg">
                    <h2>
                        Bully
                    </h2>
                    <p>
                        Bully é um jogo eletrônico de ação-aventura desenvolvido pela Rockstar Vancouver e publicado pela Rockstar Games. Foi lançado em 17 de outubro de 2006 para PlayStation 2.</
                    </p>
                </div>
                <!--1° Acordeon-->
                <div class="col-sm">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>Enredo</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Bully, é um jogo de ação em terceira pessoa que integra a seleta lista de
                                    sucessos da Rockstar Games, a produtora do famigerado Grand Theft Auto (GTA). Nele
                                    você encarna Jimmy
                                    Hopkins, um aluno nada comportado da escola Bullworth Academy, que foi forçado a
                                    mudar de escola para que
                                    sua mãe possa ter uma lua-de-mel de 1 ano com seu quinto marido. Durante seu
                                    convívio escolar, Jimmy vai
                                    poder atormentar a vida dos outros alunos, dos funcionários do colégio e até mesmo
                                    dos demais cidadãos
                                    locais. <a target="_blank" href="https://www.youtube.com/watch?v=88KNf0MtU14">Veja o
                                        trailer do jogo
                                        aqui.</a>
                                </div>
                            </div>
                        </div>
                        <!--2° Acordeon-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>Características e jogabilidade</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Hopkins conta com estilingues, bolas de gude,
                                    bombas que exalam substâncias fétidas, bicicletas, e é claro, os próprios punhos.
                                    Brigas, chacotas, castigos e
                                    namoros (Jimmy pode beijar as amigas), fazem parte do cotidiano, assim como explorar
                                    a vizinhança, onde é
                                    possível cortar o cabelo, comprar roupas novas, participar de corridas de bicicleta
                                    etc. Mas nem tudo é festa em
                                    Bully, Jimmy deve assistir as aulas para poder ganhar novas habilidades e suportar
                                    os tormentos vindos de alunos
                                    mais fortes.
                                </div>
                            </div>
                        </div>
                        <!--3° Acordeon-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Jogo Proibido</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Houve, uma tentativa de banir o jogo no estado da Flórida, nos Estados
                                    Unidos, pelo advogado Jack Thompson. A ação durou 11 horas, mas foi negada pelo juiz
                                    Ronald Friedman, que
                                    decidiu permitir a continuação da comercialização do game. Para chegar à decisão, o
                                    juiz pediu uma cópia do
                                    título para que ele avaliasse por conta própria qual era o motivo de tanta
                                    reclamação. De fato, a repercussão
                                    das imprudências que Bully trazia ao mercado de jogos atravessou todo o continente
                                    americano e se fez presente
                                    aqui em nosso país. Em 2008, a venda do jogo foi proibida no Brasil por decisão do
                                    Ministério Público do Rio
                                    Grande do Sul. A justificativa é de que o game retrata “fundamentalmente, situações
                                    ditadas pela violência,
                                    provocação, corrupção, humilhação e professores inescrupulosos, nocivo à formação de
                                    crianças e adolescentes e
                                    ao público em geral”. A ação gerou grande revolta entre os fãs brasileiros da
                                    Rockstar e alguns chegaram a dizer
                                    que a medida aumentaria a pirataria. Considerando que, ao final de 2013, 82% dos
                                    jogos vendidos no país eram
                                    piratas, segundo o Fórum Nacional Contra a Pirataria e a Ilegalidade (FNCP), a
                                    lógica parece ser justa.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <?php } ?>  
            <?php } ?>  
            
    </body>
 </html>