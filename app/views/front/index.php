<?php include 'header.php'; ?>

<!-- Header -->
<header class="header header-inverse" style="background-color: #9ac29d">
    <div class="container text-center">

        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">

                <h1>IeCourses</h1>
                <p class="fs-20 opacity-70">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt nisi ab dolores inventore, repellat illo, reprehenderit fugiat, exercitationem deleniti ratione possimus a iure molestiae quibusdam voluptatem nobis sunt! Provident, assumenda.
                </p>

            </div>
        </div>

    </div>
</header>
<!-- END Header -->

<!-- Main container -->
<main class="main-content">


    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Basic cards
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <section class="section bg-gray">
        <div class="container">


            <?php foreach ($content as $data):?>
            <div class="card mb-30">
                <div class="row">
                    <div class="col-12 col-md-4 align-self-center">
                        <a href="<?= PUBLIC_PATH; ?>user/single/?id=<?=$data['id']; ?>"><img src="<?= PUBLIC_PATH; ?>upload/<?=$data['cover']; ?>" alt="..."></a>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="card-block">
                            <h4 class="card-title"><?=$data['name']; ?></h4>
                            <p class="card-text"><?=$data['main_content']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>


            <nav class="flexbox mt-30">
                <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Newer</a>
                <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-4"></i></a>
            </nav>


        </div>
    </section>






</main>
<!-- END Main container -->


<?php include 'footer.php'; ?>
