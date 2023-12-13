<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kraken - Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="styles/aux.css" /> -->
  </head>
  <body>
    <!-- Navbar -->
    <?php include "../php/navbar.php" ?>

    <!-- section -->
    <div class="col-lg-8 mx-auto p-4 py-md-5">
      <main>
        <h1 class="text-body-emphasis">Bem-vindo(a) ao Kraken!</h1>
        <p class="fs-5 col-md-8">
          Aqui começa a sua jornada na programação competitiva com diversos problemas categorizados com diferentes dificuldades.
        </p>

        <div class="mb-5">
          <a href="https://noic.com.br/materiais-informatica/roteiro-de-estudos/" class="btn btn-primary btn-lg px-4"
            >Get Started</a
          >
        </div>

        <hr class="col-3 col-md-2 mb-5" />

        <!-- test cards -->
        <div class="container row mx-auto">

        <?php include "../php/category_cards.php" ?>
          <!-- <div class="col-xxl-4 mb-1">
            <div class="card" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">Data Structure</h5>
                <p class="card-text">
                Explore e aprimore suas habilidades em estruturas de dados por meio dos seguintes exercícios. 
                Esses desafios abordam conceitos fundamentais, incluindo árvores, 
                listas encadeadas e operações básicas de busca e ordenação. 
                </p>
                <a href="#" class="card-link">Data Structure</a>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 mb-1">
            <div class="card" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">Graphs</h5>
                <p class="card-text">
                Desenvolva sua proficiência em grafos através dos desafios propostos nesta seção. 
                Estes exercícios englobam conceitos essenciais, como representação de grafos, 
                busca em largura e busca em profundidade, entre outros.
                </p>
                <a href="#" class="card-link">Graphs</a>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 mb-1">
            <div class="card" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">Math</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="card-link">Math</a>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 mb-1">
            <div class="card" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">Algo Techniques</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="card-link">Algo Techniques</a>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 mb-1">
            <div class="card" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">Algo Techniques</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="card-link">Algo Techniques</a>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 mb-1">
            <div class="card" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">Algo Techniques</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="card-link">Algo Techniques</a>
              </div>
            </div>
          </div>
        </div>

-->

        <hr class="col-3 col-md-2 mb-5" />

        <div class="row g-5">
          <div class="col-md-6">
            <h2 class="text-body-emphasis">Juízes Online</h2>
            <p>
              Os juízes online são uma parte essencial das plataformas de programação competitiva. Eles atuam como uma espinha dorsal para as submissões de código, permitindo que os usuários compilam e executem seus códigos para verificar os casos de teste.
            </p>
            <ul class="list-unstyled ps-0">
              <li>
                <a
                  class="icon-link mb-1"
                  href="https://www.beecrowd.com.br/judge/en/login"
                  rel="noopener"
                  target="_blank"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Beecrowd
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="https://neps.academy/br"
                  rel="noopener"
                  target="_blank"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Neps Academy
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="https://br.spoj.com/"
                  rel="noopener"
                  target="_blank"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  SPOJ Brasil
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="https://codeforces.com/"
                  rel="noopener"
                  target="_blank"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Codeforces
                </a>
              </li>
            </ul>
          </div>

          <div class="col-md-6">
            <h2 class="text-body-emphasis">Guias</h2>
            <p>
              Conheça as principais competições de MG e do Brasil além dos melhores roteiros de estudo.
            </p>
            <ul class="list-unstyled ps-0">
              <li>
                <a
                  class="icon-link mb-1"
                  href="https://noic.com.br/materiais-informatica/roteiro-de-estudos/"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  NOIC - Roteiro de Estudos
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="Maratona SBC de Programação"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Maratona SBC de Programação
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="https://mineira.sbc.org.br/"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Maratona Mineira de Programação
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="https://codeforces.com/blog/entry/116762"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  A Guide to Solving Questions on Codeforces
                </a>
              </li>
            </ul>
          </div>
        </div>
      </main>
    </div>

    <!-- footer -->
    <?php include "../php/footer.php" ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
