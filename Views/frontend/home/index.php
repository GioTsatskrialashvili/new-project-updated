<section id="intro">
        <div class="container">
            <div class="row">

                

                <div class="intro-content">
                    <div class="content">
                        <span><?= $data['main']['title']?></span>
                        <h1><?= $data['main']['header']?></h1>
                        <p><?= $data['main']['text']?></p>
                    </div>

                    <div class="img">
                        <img src="<?= $data['main']['image']?>" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    

<main id="main">
    <section class="about">
        <div class="container">
            <div class="row">
                <h1><?= $data['about']['home_title'] ?></h1>
                <p> <?= $data['about']['short_text'] ?>
                <a href="?page=about">more</a>
            </p>  
                
            </div>
        </div>
    </section>

    <section class="categories">
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
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <div class="header">
                    <h2>Latest News</h2>
                    <a href="?page=news">View All</a>
                </div>
                <div class="news-items">
                    <?php foreach($data['news'] as $value):?>
                    <div class="item">
                        <div class="img" style="background-image: url('<?=$value['image']?>')"></div>
                        <div class="content">
                            <h2><?=$value['title']?></h2>
                            <p>
                            <?=$value['short_text']?>
                            </p>
                            <a href="?page=news&action=view&id=<?=$value['id']?>">View</a>
                        </div>
                    
                    
                    
                    </div>
                    <?php endforeach;?>
                   
                </div>
            </div>
        </div>
    </section>

    
</main>