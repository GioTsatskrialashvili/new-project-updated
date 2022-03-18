<main class="categories-page">
    <div class="container">
        <div class="row">
            <div class="content">
                <?php foreach($data['categories'] as $value): ?>
                    <div class="item">
                        <a href="?page=news&category=<?= $value['id'] ?>"><?= $value['title'] ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>