<section id="intro">
        <div class="container">
            <div class="row">

                

                <div class="intro-content">
                    <div class="content">
                        <span>Trending Episode</span>
                        <h1>Dreams of an unique ideas scattered through a</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    </div>

                    <div class="img">
                        <img src="assets/img/main-img.png" alt="">
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
                            <a href=""><?= $value['title'] ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <div class="news-items">
                    <div class="item">
                        <div class="img" style="background-image: url('https://www.gettyimages.com/gi-resources/images/500px/983794168.jpg')"></div>
                        <div class="content">
                            <h2>News 1</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="">View</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img" style="background-image: url('https://www.onceuponapicture.co.uk/wp-content/uploads/2019/02/46456227_2504829799542273_7554593422053474304_o-700x525.jpg')"></div>
                        <div class="content">
                            <h2>News 1</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="">View</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img" style="background-image: url('https://www.onceuponapicture.co.uk/wp-content/uploads/2019/01/Daniele-Bianchin-above-the-sky-700x394.png')"></div>
                        <div class="content">
                            <h2>News 1</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</main>