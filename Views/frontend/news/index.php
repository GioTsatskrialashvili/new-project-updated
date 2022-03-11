<section class="news-page">
    <div class="container">
        <div class="row">
            <div class="filter">
                <div class="filter-box">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="filter-box">
                    <div>
                        <input type="checkbox">
                        <label for="">კატეგირია 1</label>
                    </div>
                    <div>
                        <input type="checkbox">
                        <label for="">კატეგირია 1</label>
                    </div>
                    <div>
                        <input type="checkbox">
                        <label for="">კატეგირია 1</label>
                    </div>
                </div>
                <div class="filter-box-button">
                    <button>Search</button>
                </div>
            </div>
            <div class="news-items">
                <?php foreach($data['news'] as $value): ?>
                    <div class="item">
                        <div class="img" style="background-image: url('<?= $value['image'] ?>')"></div>
                        <div class="content">
                            <h2><?= $value['title'] ?></h2>
                            <p>
                                <?= $value['short_text'] ?>
                            </p>
                            <a href="">View</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>