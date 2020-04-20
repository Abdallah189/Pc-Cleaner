<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/DevAcademy/blue-dark/extras-coming-soon.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:50:38 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="image/logo.png">

        <title>Dev Academy</title>

        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

    </head>
    <body>

        <!-- HOME -->
        <section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="home-wrapper">
                            <h1 class="home-text"><span class="rotate">We Are DevAcademy,We Are Modern,We are Creative</span></h1>
                            <p class="m-t-30 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat
                                arcu ut orci porta, eget porttitor felis suscipit.<br> Sed a nisl ullamcorper, tempus augue at,
                                rutrum lacus. Duis et turpis eros.</p>

                            <!-- COUNTDOWN -->
                            <div class="row m-t-40">
                                <div class="col-sm-12 app-countdown">
                                    <div class="row">
                                        <div>
                                            <div>
                                                <span>0</span><span>days</span></div>
                                            <div><span>0</span><span>hours</span></div>
                                        </div>
                                        <div class="app-countdown-ms">
                                            <div><span>0</span><span>minutes</span></div>
                                            <div><span>0</span><span>seconds</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /COUNTDOWN -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- Countdown -->
        <script src="../plugins/countdown/dest/jquery.countdown.min.js"></script>
        <script src="../plugins/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>


        <script type="text/javascript">
            $(document).ready(function () {

                // Countdown
                // To change date, simply edit: var endDate = "January 17, 2017 20:39:00";
                $(function () {
                    var endDate = "January 17, 2019 20:39:00";
                    $('.app-countdown .row').countdown({
                        date: endDate,
                        render: function (data) {
                            $(this.el).php('<div><div><span class="text-primary">' + (parseInt(this.leadingZeros(data.years, 2) * 365) + parseInt(this.leadingZeros(data.days, 2))) + '</span><span><b>Days</b></span></div><div><span class="text-primary">' + this.leadingZeros(data.hours, 2) + '</span><span><b>Hours</b></span></div></div><div class=""><div><span class="text-primary">' + this.leadingZeros(data.min, 2) + '</span><span><b>Minutes</b></span></div><div><span class="text-primary">' + this.leadingZeros(data.sec, 2) + '</span><span><b>Seconds</b></span></div></div>');
                        }
                    });
                });

                // Text rotate
                $(".home-text .rotate").textrotator({
                    animation: "fade",
                    speed: 3000
                });
            });

        </script>

    </body>

<!-- Mirrored from coderthemes.com/DevAcademy/blue-dark/extras-coming-soon.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:50:41 GMT -->
</html>