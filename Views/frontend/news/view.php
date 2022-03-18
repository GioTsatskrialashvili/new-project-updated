<section class="news-inner-page">
    <div class="container">
        <div class="row">
            <h1><?= $data['news']['title'] ?></h1>
            <p>
                <?= $data['news']['text'] ?>
            </p>
            <div class="category">
                Category: <?= $data['news']['category_title'] ?>
            </div>
            <img src="<?= $data['news']['image'] ?>" alt="">
        
        </div>
    </div>
</section>