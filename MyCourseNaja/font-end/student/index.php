<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- iconWeb -->
    <!-- <link rel="icon" type="image/ico" href="image/GElogo.png" /> -->
    <title>My-course</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/wow.js/css/libs/animate.css">
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">

    <!-- CEFstyle -->
    <link rel="stylesheet" href="../node_modules/CEFstyle/CEFstyle.css">
    <!-- fontawesom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
    <div class="cebody">
        <nav class="navbar navbar-expand-lg navbar-light navbar-transparent ce" id="navce">
            <a class="navbar-brand " href="index.php" id="logo">GE MOOC</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarTogglerDemo01" style="">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class=" nav-link"><img src="../image/13.1.jpg" alt="..." class="rounded mx-auto d-block" width="25" height="25"></a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href=""><i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container ">
            <div class="card mb-5">
                <div class="card-header">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" onclick="call_content('index.php')"> Mycourse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="call_content('profile.php')">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="call_content('setting.php')">Setting</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body " data-spy="scroll">

                    <div id="content"></div>

                </div>
            </div>
        </div>
        <br><br>
        <footer>
            <dl class="row">
                <dd class="col-sm-4 offset-sm-4 ">Copyright © 2019, by CEFstyle ,All rights reserved.</dd>
            </dl>
        </footer>
    </div>
    


    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="../node_modules/wow.js/dist/wow.min.js"></script>
    <!-- CEFstyle -->
    <script src="../node_modules/CEFstyle/CEFstyle.js"></script>
    <script>
        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: true, // default
            live: true // default
        })
        wow.init();
        $('#myTab a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })
        $(document).ready(function(e) {
            $('#content').load("subpages/index.php");
        });

        function call_content(sub) {
            $('#content').load("subpages/" + sub);
        }
    </script>
</body>

</html>