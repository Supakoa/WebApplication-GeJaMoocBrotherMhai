<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GE-Mycourse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" type="image/ico" href="image/GElogo.png" /> -->

    <link rel="stylesheet" href="../node_modules/CEFstyle/CEFstyle.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- login.css -->
    <link rel="stylesheet" href="dist/login.css">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="container" id="slide">
        <div class="d-flex justify-content-center h-100">

            <div id="form" class="mb-3 mt-3 " style="background-color: rgba(0, 0, 0, 0.5) !important;color:white">
                <!-- Default form register -->
                <form class="text-center p-5">
                    <a href="#" class="float-left regis-btn" style="color:white"><i class="fas fa-arrow-left"></i></a>
                    <p class="h4 mb-4">Sign up</p>

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" id="defaultRegisterFormFirstName" class="form-control"
                                placeholder="First name">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" id="defaultRegisterFormLastName" class="form-control"
                                placeholder="Last name">
                        </div>
                    </div>

                    <!-- E-mail -->
                    <input type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Username">

                    <!-- Password -->
                    <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4"
                        placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">


                    <!-- Phone number -->
                    <input type="text" id="defaultRegisterPhonePassword" class="form-control mb-4"
                        placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">


                    <!-- Sign up button -->
                    <input type="submit" value="Login" class="btn login_btn mb-4">

                    <!-- Social register -->
                    <p>or sign up with:</p>
                    <a href="#" class="light-blue-text mx-2">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="#" class="light-blue-text mx-2">
                        <i class="fab fa-google-plus-square"></i>
                    </a>
                    <a href="#" class="light-blue-text mx-2 ">
                        <i class="fab fa-twitter-square"></i>
                    </a>

                </form>
                <!-- Default form register -->
            </div>

            <div class="card" id="form1">
                <div class="card-header">
                    <h3>Sign In</h3>

                </div>
                <div class="card-body">
                    <form>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="#" id="sign" class="regis-btn">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- sign in -->

    </div>

    <!-- <div class="container h-100" ></div> -->

    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        $("#form").hide();

        $(".regis-btn").click(function () {
            if ($("#form1").is(":visible")) {
                $("#form1").fadeToggle("slow", function () {
                    $("#form").fadeToggle("slow");
                });
            } else {
                $("#form").fadeToggle("slow", function () {
                    $("#form1").fadeToggle("slow");
                });
            }
        });
    </script>
</body>

</html>