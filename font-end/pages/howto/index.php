<div class="container cecontent">
    <div class="card-body shadow mb-5">

    </div>
    <div class="one-time ">
        <div><img src="image/abc.png" alt=""></div>
        <div>your content</div>
        <div>your content</div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.one-time').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    });
</script>