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
                <a class="nav-link" aria-current="page" href="index.html"
                  >Index</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="o-meni.html">O Meni</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="kontakt.html">Kontakt</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div class="container p-5">
        <form>
          <!-- ime, email, telefon -->
          <div class="row mb-3">
            <div class="col-12 col-md-4">
              <label for="inputIme" class="form-label">
                Ime in priimek <span class="text-danger">*</span>
              </label>
              <input
                type="text"
                class="form-control"
                id="inputIme"
                name="ime"
                required
              />
            </div>

            <div class="col-12 col-md-4">
              <label for="inputEmail" class="form-label">
                Email naslov <span class="text-danger">*</span>
              </label>
              <input
                type="email"
                class="form-control"
                id="inputEmail"
                name="email"
                aria-describedby="emailHelp"
                required
              />
            </div>

            <div class="col-12 col-md-4">
              <label for="inputTelefon" class="form-label"> Telefon </label>
              <input
                type="tel"
                class="form-control"
                id="inputTelefon"
                name="telefon"
              />
            </div>
          </div>

          <!-- sporočilo textarea -->
          <div class="row mb-3">
            <div class="col-12">
              <label for="inputSporocilo" class="form-label">
                Sporočilo <span class="text-danger">*</span></label
              >
              <textarea
                class="form-control"
                id="inputSporocilo"
                name="sporocilo"
                rows="6"
                required
              ></textarea>
            </div>
          </div>

          <!-- submit button-->
          <div class="row">
            <div class="col text-end">
              <button type="submit" class="btn btn-primary">Pošljite</button>
            </div>
          </div>
        </form>
      </div>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
