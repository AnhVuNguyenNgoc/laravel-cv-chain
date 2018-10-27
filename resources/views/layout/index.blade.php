
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Cv Chain</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
            <meta content="Coderthemes" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <base href="{{asset('')}}">

            <!-- App favicon -->
            <link rel="shortcut icon" href="assets/images/favicon.ico">

            <!-- App css -->
            <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/MyStyle.css" rel="stylesheet" type="text/css" />

            <!-- App javascript -->
            <script src="assets/js/modernizr.min.js"></script>

        </head>


        <body>

            <!-- Begin page -->
            <div id="wrapper">

                <!-- làm đỡ như vậy tg tác client để mai mốt chuyển MVC ln  -->
             
                <!-- Top Bar Start -->
                @include('layout.header')
                <!-- Top Bar End -->


                <!-- ========== Left Sidebar Start ========== -->
               @include('layout.menu')
                <!-- Left Sidebar End -->



                <!-- ============================================================== -->
                <!--                    Start right Content here                    -->
                <!-- ============================================================== -->
                <div class="content-page">
                    <!-- Content -->

                         @yield('content')

                    <!-- End Content-->
                    <footer class="footer text-right">
                        2018 SGU-CvChain
                    </footer>

                </div>

                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->


            </div>
            <!-- END wrapper -->



            <!-- jQuery  -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/metisMenu.min.js"></script>
            <script src="assets/js/waves.js"></script>
            <script src="assets/js/jquery.slimscroll.js"></script>

            <!-- App js -->
            <script src="assets/js/jquery.core.js"></script>
            <script src="assets/js/jquery.app.js"></script>

             <!-- Blockchain js -->
            <script src='./assets/js/qrcode.min.js'> </script>
            <script type="text/javascript">
                var qrcode = new QRCode(document.getElementById("qrcode"), {
                text: "https://www.google.com.vn/",
                width: 128,
                height: 128,
                colorDark : "#000000",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.H
            });
            </script>

            <script src='web3.js-1.0/dist/web3.min.js'> </script>
            <script src="https://github.com/ethereumjs/browser-builds/raw/2fb69a714afe092b06645286f14b94f41e5c062c/dist/ethereumjs-tx.js"></script>
            <script src="https://cdn.rawgit.com/ethereumjs/browser-builds/2fb69a714afe092b06645286f14b94f41e5c062c/dist/ethereumjs-tx.js"></script>            
            <!-- End blockchain js -->
            <!-- My JS -->
            <script>            
                
             </script>

             
             <script src="assets/js/appGUI.js"></script>
            

        </body>
    </html>

