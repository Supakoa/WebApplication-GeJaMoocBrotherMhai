<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ge MOOC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- iconWeb -->
    <link rel="icon" type="image/ico" href="image/GElogo.png" />

    <!-- carousel -->
    <link rel="stylesheet" type="text/css" href="node_modules/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="node_modules/slick-carousel/slick/slick-theme.css" />

    <!-- bootstrap 4 -->
    <link rel="stylesheet" type="text/css" media="screen" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- CEFstyle -->
    <link rel="stylesheet" href="node_modules/CEFstyle/CEFstyle.css">
    <!-- animate -->
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">

    <!-- wow.js/animate.css -->
    <link rel="stylesheet" type="text/css" media="screen" href="node_modules/wow.js/css/libs/animate.css">

    <!-- jquery -->
    <link rel="stylesheet" type="text/css" media="screen" href="node_modules/datatables.net-responsive-dt/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="node_modules/datatables.net-dt/css/jquery.dataTables.min.css">

    <!-- sweetalert2 -->
    <link rel="stylesheet" type="text/css" media="screen" href="node_modules/sweetalert2/dist/sweetalert2.min.css">

    <!-- fontawesom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="cebody">
        <nav class="navbar navbar-expand-lg navbar-light navbar-transparent ce" id="navce">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" style="margin-left:180px;" href="index.php" id="logo">GE MOOC</a>
            <div class="collapse navbar-collapse justify-content-end " id="navbarTogglerDemo01" style="">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="call_content('course')">Course </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="call_content('howto')">How To </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="call_content('FAQ')">FAQ</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div id="content"></div>

        <footer>
            <dl class="row" style="height:100%">
                <dd class="col-sm-4 offset-sm-4 ">Copyright © 2019, by CEFstyle ,All rights reserved.</dd>
            </dl>
        </footer>
    </div>


    <!-- jquery -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="node_modules/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="node_modules/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <!-- CEFstyle -->
    <script src="node_modules/CEFstyle/CEFstyle.js"></script>

    <!-- bootstrap 4 -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!--slick carousel -->
    <script type="text/javascript" src="node_modules/slick-carousel/slick/slick.js"></script>


    <!-- popper.js -->
    <script src="node_modules/popper.js/dist/popper.min.js"></script>

    <!-- tooltip.js -->
    <script src="node_modules/tooltip.js/dist/tooltip.min.js"></script>

    <!-- sweetalert2 -->
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <!-- wow.js -->
    <script src="node_modules/wow.js/dist/wow.min.js"></script>

    <script>

        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: true, // default
            live: true // default
        })
        wow.init();
        $(document).ready(function(e) {
            $('#content').load("pages/main/index.php");
        });

        function call_content(folder) {
            $('#content').load("pages/" + folder + "/index.php");
        }
    </script>

</body>

</html>