<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ge MOOC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap 4 -->
    <link rel="stylesheet" type="text/css" media="screen" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- CEFstyle -->
    <link rel="stylesheet" href="node_modules/CEFstyle/CEFstyle.css">

    <!-- wow.js/animate.css -->
    <link rel="stylesheet" type="text/css" media="screen" href="node_modules/wow.js/css/libs/animate.css">
    <!-- jquery -->
    <link rel="stylesheet" type="text/css" media="screen" href="node_modules/datatables.net-responsive-dt/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="node_modules/datatables.net-dt/css/jquery.dataTables.min.css">

    <!-- sweetalert2 -->
    <link rel="stylesheet" type="text/css" media="screen" href="node_modules/sweetalert2/dist/sweetalert2.min.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent" id="navce">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container collapse navbar-collapse navce-right" id="navbarNav">
            <a class="navbar-brand" href="index.php" id="logo">GE MOOC</a>

            <ul class="navbar-nav">
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

    <div class="container" id="content" ></div>


    
    <!-- jquery -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="node_modules/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="node_modules/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>

    <!-- bootstrap 4 -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- CEFstyle -->
    <script src="node_modules/CEFstyle/CEFstyle.js"></script>

    <!-- popper.js -->
    <script src="node_modules/popper.js/dist/popper.min.js"></script>

    <!-- tooltip.js -->
    <script src="node_modules/tooltip.js/dist/tooltip.min.js"></script>

    <!-- sweetalert2 -->
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <!-- wow.js -->
    <script src="node_modules/wow.js/dist/wow.min.js"></script>

    <script>
        $(document).ready(function(e) {
            $('#content').load("pages/main/index.php");
        });

        function call_content(folder) {
            $('#content').load("pages/" + folder + "/index.php");
        }
    </script>

</body>

</html>