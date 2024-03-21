<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>KarSU ACADEMY</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico'>

</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Apple NUKUS</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('kiriw') }}" class="needs-validation" novalidate="">
                  @csrf
                  <div class="form-group">
                    <label for="email">Login</label>
                    <input id="email" type="text" class="form-control" name="email" tabindex="1" required autofocus>

                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Parol</label>
                    </div>
                    <input id="password" type="password" minlength="4" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Parol keminde 4 manisten ibarat boliw kerek!
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Kiriw
                    </button>
                  </div>
                </form>
                <div class="text-center mt-4 mb-3">
                  <!-- <div class="text-job text-muted">Login With Social</div> -->
                </div>
                <!-- <div class="row sm-gutters"> -->
                <div class="btn-group" role="group" aria-label="Social Media Buttons">
                  <!-- Telegram Button -->
                  <a href="#" class="btn btn-white">
                    <i class="fab fa-telegram"></i> Telegram
                  </a>

                  <!-- Instagram Button -->
                  <a href="#" class="btn btn-white">
                    <i class="fab fa-instagram"></i> Instagram
                  </a>
                </div>



              </div>
            </div>
          </div>

        </div>
      </div>
  </div>
  </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
  <!--  -->

</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

</html>