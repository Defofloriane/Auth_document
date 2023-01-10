<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Bootstrap 4 Template with Sidebar Menu</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Sidebar -->
        <nav class="sidebar">

            <!-- close sidebar menu -->
            <div class="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="logo">
                <h3><a href="index.html">Bootstrap 4 Template with Sidebar Menu</a></h3>
            </div>

            <ul class="list-unstyled menu-elements">
                <li class="active">
                    <a class="scroll-link" href="#top-content"><i class="fas fa-home"></i> Home</a>
                </li>
                <li>
                    <a class="scroll-link" href="#section-1"><i class="fas fa-cog"></i> What we do</a>
                </li>
                <li>
                    <a class="scroll-link" href="#section-2"><i class="fas fa-user"></i> About us</a>
                </li>
                <li>
                    <a class="scroll-link" href="#section-5"><i class="fas fa-pencil-alt"></i> Portfolio</a>
                </li>
                <li>
                    <a class="scroll-link" href="#section-6"><i class="fas fa-envelope"></i> Contact us</a>
                </li>
                <li>
                    <a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
                        <i class="fas fa-sync"></i>Other sections
                    </a>
                    <ul class="collapse list-unstyled" id="otherSections">
                        <li>
                            <a class="scroll-link" href="#section-3">Our projects</a>
                        </li>
                        <li>
                            <a class="scroll-link" href="#section-4">We think that...</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="to-top">
                <a class="btn btn-primary btn-customized-3" href="#" role="button">
                    <i class="fas fa-arrow-up"></i> Top
                </a>
            </div>

            <div class="dark-light-buttons">
                <a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
                <a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
            </div>

        </nav>
        <!-- End sidebar -->

        <!-- Dark overlay -->
        <div class="overlay"></div>

        <!-- Content -->
        <div class="content">

            <!-- open sidebar menu -->
            <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                <i class="fas fa-align-left"></i> <span>Menu</span>
            </a>

            <!-- Top content -->
            <div class="top-content section-container" id="top-content">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                            <h1 class="wow fadeIn">Bootstrap 4 Template with <strong>Sidebar Menu</strong></h1>
                            <div class="description wow fadeInLeft">
                                <div name="reader" id="reader" width="600px" ></div>
                            </div>
                            <div class="buttons wow fadeInUp">
                                <a class="btn btn-primary btn-customized scroll-link" href="#section-1" role="button">
                                    <i class="fas fa-download"></i> Download
                                </a>
                                <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-3" role="button">
                                    <i class="fas fa-pencil-alt"></i> Our Projects
                                </a>
                            </div>
                            <input type="text" name="result" id="result">
                            <input type="hidden" name="result" id="result">
                        </div>

                    </div>
                </div>
            </div>



        </div>
        <!-- End content -->

    </div>
    <!-- End wrapper -->

    <!-- Javascript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
      <script>
        function onScanSuccess(decodedText, decodedResult) {
            // $('#result').val(decodedText);
            // let id = decodedText;
            html5QrcodeScanner.clear().then(_ => {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({

                    // url: "{{ route('validasi') }}",
                    // type: 'POST',
                    // data: {
                    //     _methode: "POST",
                    //     _token: CSRF_TOKEN,
                    //     qr_code: id
                    // },
                    // // success: function(response) {
                    // //     if (response.status == 200) {
                    // //         alert('berhasil');
                    // //     } else {
                    // //         alert('gagal');
                    // //     }

                    // // }
                });
            }).catch(error => {
                alert('something wrong');
            });

        }

        function onScanFailure(error) {
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            /* verbose= */
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>

</body>

</html>