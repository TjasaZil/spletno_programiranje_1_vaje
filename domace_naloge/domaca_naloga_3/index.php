<!DOCTYPE html>
<html>
  <head>
    <title>Domača naloga 2</title>
    <meta charset="utf-8" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-warning">
    <!-- navigacija -->
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary bg-warning-subtle">
        <div class="container ps-5">
          <a class="navbar-brand" href="#">Domača naloga 2</a>
          <button
            class="navbar-toggler me-4"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-brand">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html"
                  >Index</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="o-meni.html">O Meni</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontakt.html">Kontakt</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <!-- carousel -->

      <div class="container p-5">
        <h2 class="text-secondary">Carousel</h2>
        <div
          id="carouselExampleInterval"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="./img/pic1.jpg" class="d-block w-100" alt="image 1" />
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="./img/pic2.jpg" class="d-block w-100" alt="image2" />
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="./img/pic3.jpg" class="d-block w-100" alt="image3" />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleInterval"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!-- tabele -->
      <div class="container">
        <!-- tabela 1 -->

        <div class="container p-5">
          <h2 class="text-secondary">Tabela živali</h2>
          <table class="table table-hover p-5">
            <thead>
              <tr>
                <th scope="col" class="text-primary">ID</th>
                <th scope="col" class="text-primary">Žival</th>
                <th scope="col" class="text-primary">Razred</th>
                <th scope="col" class="text-primary">Habitat</th>
                <th scope="col" class="text-primary">Prehrana</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-secondary">1</th>
                <td class="text-secondary">Slon</td>
                <td class="text-secondary">Sesalec</td>
                <td class="text-secondary">Savanna</td>
                <td class="text-secondary">Rastlinojed</td>
              </tr>
              <tr>
                <th scope="row" class="text-success">2</th>
                <td class="text-success">Lev</td>
                <td class="text-success">Sesalec</td>
                <td class="text-success">Savanna</td>
                <td class="text-success">Mesojed</td>
              </tr>
              <tr>
                <th scope="row" class="text-danger">3</th>
                <td class="text-danger">Delfin</td>
                <td class="text-danger">Sesalec</td>
                <td class="text-danger">Ocean</td>
                <td class="text-danger">Mesojed</td>
              </tr>
              <tr>
                <th scope="row" class="text-warning">4</th>
                <td class="text-warning">Orel</td>
                <td class="text-warning">Ptič</td>
                <td class="text-warning">Gore</td>
                <td class="text-warning">Mesojed</td>
              </tr>
              <tr>
                <th scope="row" class="text-info">5</th>
                <td class="text-info">Pingvin</td>
                <td class="text-info">Ptič</td>
                <td class="text-info">Antarktika</td>
                <td class="text-info">Karnivorec</td>
              </tr>
              <tr>
                <th scope="row" class="text-secondary">6</th>
                <td class="text-secondary">Kenguru</td>
                <td class="text-secondary">Sesalec</td>
                <td class="text-secondary">Tropski gozd</td>
                <td class="text-secondary">Vsejed</td>
              </tr>
              <tr>
                <th scope="row" class="text-success">7</th>
                <td class="text-success">Panda</td>
                <td class="text-success">Sesalec</td>
                <td class="text-success">Gozd</td>
                <td class="text-success">Rastlinojed</td>
              </tr>
              <tr>
                <th scope="row" class="text-danger">8</th>
                <td class="text-danger">Gorila</td>
                <td class="text-danger">Sesalec</td>
                <td class="text-danger">Drevnati gozd</td>
                <td class="text-danger">Vsejed</td>
              </tr>
              <tr>
                <th scope="row" class="text-warning">9</th>
                <td class="text-warning">Tiger</td>
                <td class="text-warning">Sesalec</td>
                <td class="text-warning">Gozd</td>
                <td class="text-warning">Plenilec</td>
              </tr>
              <tr>
                <th scope="row" class="text-info">10</th>
                <td class="text-info">Modri kit</td>
                <td class="text-info">Sesalec</td>
                <td class="text-info">Ocean</td>
                <td class="text-info">Kril</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- tabela 2 -->
        <div class="container p-5">
          <h2 class="text-secondary">Tabela ljudi</h2>
          <table class="table table-striped table-hover table-dark">
            <thead>
              <tr>
                <th scope="col" class="text-primary">#</th>
                <th scope="col" class="text-primary">First</th>
                <th scope="col" class="text-primary">Last</th>
                <th scope="col" class="text-primary">Twitter</th>
                <th scope="col" class="text-primary">GitHub</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-secondary">1</th>
                <td class="text-secondary">Ana</td>
                <td class="text-secondary">Kovač</td>
                <td class="text-secondary">@ana_kovac</td>
                <td class="text-secondary">@anakovac</td>
              </tr>
              <tr>
                <th scope="row" class="text-success">2</th>
                <td class="text-success">Miha</td>
                <td class="text-success">Zajc</td>
                <td class="text-success">@miha_zajc</td>
                <td class="text-success">@mzajc</td>
              </tr>
              <tr>
                <th scope="row" class="text-danger">3</th>
                <td class="text-danger">Eva</td>
                <td class="text-danger">Novak</td>
                <td class="text-danger">@eva_novak</td>
                <td class="text-danger">@enovak</td>
              </tr>
              <tr>
                <th scope="row" class="text-warning">4</th>
                <td class="text-warning">Marko</td>
                <td class="text-warning">Horvat</td>
                <td class="text-warning">@marko_horvat</td>
                <td class="text-warning">@mhorvat</td>
              </tr>
              <tr>
                <th scope="row" class="text-info">5</th>
                <td class="text-info">Nina</td>
                <td class="text-info">Kranjc</td>
                <td class="text-info">@nina_kranjc</td>
                <td class="text-info">@nkranjc</td>
              </tr>
              <tr>
                <th scope="row" class="text-secondary">6</th>
                <td class="text-secondary">Peter</td>
                <td class="text-secondary">Vidmar</td>
                <td class="text-secondary">@peter_vidmar</td>
                <td class="text-secondary">@pvidmar</td>
              </tr>
              <tr>
                <th scope="row" class="text-success">7</th>
                <td class="text-success">Katja</td>
                <td class="text-success">Zupan</td>
                <td class="text-success">@katja_zupan</td>
                <td class="text-success">@kzupan</td>
              </tr>
              <tr>
                <th scope="row" class="text-danger">8</th>
                <td class="text-danger">Žiga</td>
                <td class="text-danger">Novič</td>
                <td class="text-danger">@ziga_novic</td>
                <td class="text-danger">@znovic</td>
              </tr>
              <tr>
                <th scope="row" class="text-warning">9</th>
                <td class="text-warning">Jana</td>
                <td class="text-warning">Potočnik</td>
                <td class="text-warning">@jana_potocnik</td>
                <td class="text-warning">@jpotocnik</td>
              </tr>
              <tr>
                <th scope="row" class="text-info">10</th>
                <td class="text-info">Urban</td>
                <td class="text-info">Petrič</td>
                <td class="text-info">@urban_petric</td>
                <td class="text-info">@upetric</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"
    ></script>
  </body>
</html>