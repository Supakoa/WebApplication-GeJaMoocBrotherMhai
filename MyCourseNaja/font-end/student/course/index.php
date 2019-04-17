<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- iconWeb -->
    <!-- <link rel="icon" type="image/ico" href="image/GElogo.png" /> -->
    <title>My-course</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/wow.js/css/libs/animate.css">
    <link rel="stylesheet" href="../../node_modules/sweetalert2/dist/sweetalert2.min.css">

    <!-- plyr -->
    <link rel="stylesheet" href="../../node_modules/plyr/dist/plyr.css">

    <!-- CEFstyle -->
    <link rel="stylesheet" href="../../node_modules/CEFstyle/CEFstyle.css">
    <!-- fontawesom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
    <div class="cebody">
        <nav class="navbar navbar-expand-lg navbar-light navbar-transparent ce" id="navce">
            <a class="navbar-brand " href="index.php" id="logo">GE MOOC</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarTogglerDemo01" style="">
                <ul class="navbar-nav text-center float-right">
                    <li class="nav-item">
                        <a class=" nav-link" href="#"><img src="../../image/13.1.jpg" alt="..."
                                class="rounded mx-auto  rounded-circle" width="25" height="25"></a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="#"><i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container mb-3 text-center">
            <video poster="../../image/plus.png" id="player" playsinline controls data-plyr-config='' >
                <source src="../../image/VID_20190408_163256.mp4" type="video/mp4" />
            </video>
        </div>
        <dt class="offset-md-1 col-md-4"> Total lesson</dt>
        <div class="list-group container">
            <a href="#" class="list-group-item list-group-item-action list-group-item-primary">lesson 1</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">lesson 2</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success">lesson 3</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-danger">lesson 4</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">lesson 5</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-info">lesson 6</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-light">lesson 7</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">lesson 8</a>
            <p id = "eiei2"> asd a sd</p>

        </div>


        <br><br><br><br>
        <footer>
            <dl class="row">
                <dd class="col-sm-4 offset-sm-4 " >Copyright © 2019, by CEFstyle ,All rights reserved.</dd>
            </dl>
        </footer>
    </div>



    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="../../node_modules/wow.js/dist/wow.min.js"></script>
    <!-- CEFstyle -->
    <script src="../../node_modules/CEFstyle/CEFstyle.js"></script>
    <script src="../../node_modules/plyr/dist/plyr.js"></script>
    <script>
      const controls = `
<div class="plyr__controls">
    <button type="button" class="plyr__control" data-plyr="restart">
        <svg role="presentation"><use xlink:href="#plyr-restart"></use></svg>
        <span class="plyr__tooltip" role="tooltip">Restart</span>
    </button>
    <button type="button" class="plyr__control" data-plyr="rewind">
        <svg role="presentation"><use xlink:href="#plyr-rewind"></use></svg>
        <span class="plyr__tooltip" role="tooltip">Rewind {seektime} secs</span>
    </button>
    <button type="button" class="plyr__control" aria-label="Play, {title}" data-plyr="play">
        <svg class="icon--pressed" role="presentation"><use xlink:href="#plyr-pause"></use></svg>
        <svg class="icon--not-pressed" role="presentation"><use xlink:href="#plyr-play"></use></svg>
        <span class="label--pressed plyr__tooltip" role="tooltip">Pause</span>
        <span class="label--not-pressed plyr__tooltip" role="tooltip">Play</span>
    </button>
    <button type="button" class="plyr__control" data-plyr="fast-forward">
        <svg role="presentation"><use xlink:href="#plyr-fast-forward"></use></svg>
        <span class="plyr__tooltip" role="tooltip">Forward {seektime} secs</span>
    </button>
    <div class="plyr__progress">
        <input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" aria-label="Seek" id = "eiei">
        <progress class="plyr__progress__buffer" min="0" max="100" value="0">% buffered</progress>
        <span role="tooltip" class="plyr__tooltip">00:00</span>
    </div>
    <div class="plyr__time plyr__time--current" aria-label="Current time">00:00</div>
    <div class="plyr__time plyr__time--duration" aria-label="Duration">00:00</div>
    <button type="button" class="plyr__control" aria-label="Mute" data-plyr="mute">
        <svg class="icon--pressed" role="presentation"><use xlink:href="#plyr-muted"></use></svg>
        <svg class="icon--not-pressed" role="presentation"><use xlink:href="#plyr-volume"></use></svg>
        <span class="label--pressed plyr__tooltip" role="tooltip">Unmute</span>
        <span class="label--not-pressed plyr__tooltip" role="tooltip">Mute</span>
    </button>
    <div class="plyr__volume">
        <input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" aria-label="Volume">
    </div>
    <button type="button" class="plyr__control" data-plyr="captions">
        <svg class="icon--pressed" role="presentation"><use xlink:href="#plyr-captions-on"></use></svg>
        <svg class="icon--not-pressed" role="presentation"><use xlink:href="#plyr-captions-off"></use></svg>
        <span class="label--pressed plyr__tooltip" role="tooltip">Disable captions</span>
        <span class="label--not-pressed plyr__tooltip" role="tooltip">Enable captions</span>
    </button>
    <button type="button" class="plyr__control" data-plyr="fullscreen">
        <svg class="icon--pressed" role="presentation"><use xlink:href="#plyr-exit-fullscreen"></use></svg>
        <svg class="icon--not-pressed" role="presentation"><use xlink:href="#plyr-enter-fullscreen"></use></svg>
        <span class="label--pressed plyr__tooltip" role="tooltip">Exit fullscreen</span>
        <span class="label--not-pressed plyr__tooltip" role="tooltip">Enter fullscreen</span>
    </button>
</div>
`;
        $("#eiei").change(function (e) { 
            e.preventDefault();
            this.val
            $("#eiei2").text(this.val());
        });
        const player = new Plyr('#player', { controls });
        // window.player = player;
        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: true, // default
            live: true // default
        })
        wow.init();
    </script>
</body>

</html>