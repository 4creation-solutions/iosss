  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> IOSSS </title>
      <link rel="stylesheet" href="ios.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="styles.js"></script>
      <!-- Bootstrap core CSS -->
      <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <style>
          .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              user-select: none;
          }

          @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                  font-size: 3.5rem;
              }
          }
      </style>
  </head>

  <body class="d-flex h-100 text-center bg-light">

      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
          <header class="mb-auto">
              <div>
                  <h3 class="float-md-start mb-0">IOSSS</h3>
                  <nav class="nav nav-masthead justify-content-center float-md-end">
                      <a class="nav-link active" href="selection.php">Selection</a>
                      <a class="nav-link" href="logout.php">Logout</a>
                      <a class="nav-link" href="support.php">Support</a>
                  </nav>
              </div>
          </header>
          <main class="fx-3">

              <form class="form-group container" action="" method="POST">
                  <br>
                  <h4> Select your preferred School choices </h4>
                  <hr>

                  <div class="col choice">
                      <h5> Available Schools </h5>
                      <ul>
                          <li> Nairobi School </li>
                          <li> Lenana School </li>
                          <li> Mang'u School </li>
                          <li> Dedan Kimathi School</li>
                      </ul>
                  </div>
                  <div class="col">
                      <h6> First Choice </h6>
                      <label class="form-label">
                          <input class="form-control" name="" />
                      </label>
                      <h6> Second Choice </h6>
                      <label class="form-label">
                          <input class="form-control" />
                      </label>

                      <h6> Third Choice </h6>
                      <label class="form-label">
                          <input class="form-control" />
                      </label>


                      <h6> Fourth Choice </h6>
                      <label class="form-label">
                          <input class="form-control" />
                      </label>
                  </div>
      </div>
      <div class="mb-0">
          <h6 class="text-info"> <strong> INFO : </strong>Please Note that you will only recieve one selection from choices! </h6>
      </div>
      <br>
      <hr>
      <div>
          <button class="btn btn-primary" type="submit">
              SELECT
          </button>
      </div>
      <br>
      </form>
  </body>

  </html>