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
    <?php include "../apps/controller/navbar.php" ?>

    <!-- section -->
    <div class="col-lg-8 mx-auto p-4 py-md-5">
      <main>
        <h1 class="text-body-emphasis">Get started with Kraken</h1>
        <p class="fs-5 col-md-8">
          Quickly and easily get started with Kraken's exercises with a
          collection of algorithm programming practice problems.
        </p>

        <div class="mb-5">
          <a href="/docs/5.3/examples/" class="btn btn-primary btn-lg px-4"
            >Get start</a
          >
        </div>

        <hr class="col-3 col-md-2 mb-5" />

        <!-- test cards -->
        <div class="container row mx-auto">

        <?php include "../apps/controller/category_cards.php" ?>
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
            <h2 class="text-body-emphasis">Starter projects</h2>
            <p>
              Ready to go beyond the starter template? Check out these open
              source projects that you can quickly duplicate to a new GitHub
              repository.
            </p>
            <ul class="list-unstyled ps-0">
              <li>
                <a
                  class="icon-link mb-1"
                  href="https://github.com/twbs/examples/tree/main/icons-font"
                  rel="noopener"
                  target="_blank"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Bootstrap npm starter
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="https://github.com/twbs/examples/tree/main/parcel"
                  rel="noopener"
                  target="_blank"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Bootstrap Parcel starter
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="https://github.com/twbs/examples/tree/main/vite"
                  rel="noopener"
                  target="_blank"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Bootstrap Vite starter
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="https://github.com/twbs/examples/tree/main/webpack"
                  rel="noopener"
                  target="_blank"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Bootstrap Webpack starter
                </a>
              </li>
            </ul>
          </div>

          <div class="col-md-6">
            <h2 class="text-body-emphasis">Guides</h2>
            <p>
              Read more detailed instructions and documentation on using or
              contributing to Bootstrap.
            </p>
            <ul class="list-unstyled ps-0">
              <li>
                <a
                  class="icon-link mb-1"
                  href="/docs/5.3/getting-started/introduction/"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Bootstrap quick start guide
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="/docs/5.3/getting-started/webpack/"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Bootstrap Webpack guide
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="/docs/5.3/getting-started/parcel/"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Bootstrap Parcel guide
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="/docs/5.3/getting-started/vite/"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Bootstrap Vite guide
                </a>
              </li>
              <li>
                <a
                  class="icon-link mb-1"
                  href="/docs/5.3/getting-started/contribute/"
                >
                  <svg class="bi" width="16" height="16">
                    <use xlink:href="#arrow-right-circle"></use>
                  </svg>
                  Contributing to Bootstrap
                </a>
              </li>
            </ul>
          </div>
        </div>
      </main>
    </div>

    <!-- footer -->
    <?php include "../apps/controller/footer.php" ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
