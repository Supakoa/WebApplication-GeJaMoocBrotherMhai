<div class="cez ">
    <h5 class="card-title">My course</h5>
    <div class="row ">
        <div class="col-lg cardce ">
            <a href="#" data-toggle="modal" data-target=".createcourse"> <img src="image/fjords.jpg" class="img-fluid rounded mx-auto d-block mb-5 shadow" alt="..."></a>
        </div>

    </div>
    <hr class="mt-3">
    <?php $i = 5  ?>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Total Course <?php echo $i * 3 ?></a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <?php for ($i = 1; $i <= 5; $i++) {
        ?>
        <div class="row wow bounceInRight mt-3">
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
    <?php  } ?>
</div>

<!-- Large modal -->
<!-- <button type="button" class="btn btn-primary" >Large modal</button> -->

<div class="modal fade createcourse" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">subject name&& detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <a  href="course/index.php" class="btn btn-info btn-md shadow" >Go to Mycourse</a>
            </div>
        </div>
    </div>
</div>


<script>
    $('.createcourse').modal({
            // keyboard: true,
            backdrop: 'static'
        })
</script>