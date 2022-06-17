<?= $this->extend('templates/userTemplates') ?>

<?= $this->section('content') ?>

<section class="jumbotron__section">
    <div class="container">
        <div class="jumbotron__body">
            <div class="left__body">
                <h1>Manage your books with one click.</h1>
                <p class="title__desc">Bookment can help you organize your books to make it easy and fun to use.</p>
                <div class="btn__left">
                    <a href="/login" class="btn__get btn__orange">Get Started</a>
                </div>
            </div> <!-- end left body -->
            <div class="right__body">
                <img src="https://blush.design/api/download?shareUri=nwtlSU4ox&w=800&h=800&fm=png" class="right__img"
                    alt="image-jumbotron">
            </div> <!-- end right body -->
        </div> <!-- end jumbotron body -->
    </div> <!-- end container -->
</section> <!-- end jumbotron section -->

<?= $this->endSection();
