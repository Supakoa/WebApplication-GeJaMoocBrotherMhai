<button class="btn btn-light" id="cebtn" title="Go to top"><i class="fas fa-angle-double-up"></i></button>
<div class="container cez">

    <div class="card-body shadow rounded mb-5" style="background-color:#e6b3ff">
        <h1 class="display-2 mb-3 text-center">Coming Soon !! </h1>
        <div class="row  wow bounceInUp" style="z-index:3">
            <div class="col-lg cardce ">
                <a href="#" onclick="call_content('course/subpage')"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow " alt="..."></a>
            </div>
            <!-- <div class="col-lg cardce">
                <a href="#" onclick="call_content('course/subpage')"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."></a>
            </div> -->
            <div class="col-lg cardce">
                <a href="#" onclick="call_content('course/subpage')"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."></a>
            </div>
        </div>
    </div>

    <div class="row wow bounceInDown">
        <div class="col-lg cardce ">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."></a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."></a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."></a>
        </div>
    </div>
    <div class="row wow bounceInRight">
        <div class="col-lg cardce ">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."></a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."></a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."></a>
        </div>
    </div>
    <div class="row wow bounceInLeft">
        <div class="col-lg cardce ">
            <a href="#">
                <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="...">
            </a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
    </div>
    <div class="row wow bounceInUp">
        <div class="col-lg cardce ">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
    </div>
    <div class="row wow bounceInDown">
        <div class="col-lg cardce ">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
    </div>
    <div class="row wow bounceInRight">
        <div class="col-lg cardce ">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
    </div>
    <div class="row wow bounceInLeft">
        <div class="col-lg cardce ">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
        <div class="col-lg cardce">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."></a>
        </div>
        <div class="col-lg cardce ">
            <a href="#"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."> </a>
        </div>
    </div>
</div>
<br>
<script>
    //up to top button

    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('#cebtn').fadeIn();
        } else {
            $('#cebtn').fadeOut();
        }
    });

    $("#cebtn").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
    });
</script>