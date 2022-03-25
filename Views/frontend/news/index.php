<section class="news-page">
    <div class="container">
        <div class="row">
            <div class="filter">
               <form action="">
                   <input type="hidden" name="page" value="news">
                    <div class="filter-box">
                            <input type="text" name="keyword" placeholder="Search..." value=<?= $data['keyword'] ? $data['keyword']:''?>>
                        </div>
                        <div class="filter-box">
                            <?php foreach($data['categories'] as $value):?>
                            <div>
                                <input type="radio" 
                                 value="<?= $value['id']?>"
                                  name="category"
                                  <?= $data['categoryId']&& $data['categoryId']==$value['id']?'checked':''?>>
                                <label for=""><?= $value['title']?></label>
                            </div>
                            <?php endforeach;?>
                        
                        </div>
                        <div class="filter-box-button">
                            <button>Search</button>
                        </div>
               </form>
            </div>
            <div class="news-items">
                <div class="news-items-box">
                    <?php foreach($data['news'] as $value): ?>
                        <div class="item">
                            <div class="img" style="background-image: url('<?= $value['image'] ?>')"></div>
                            <div class="content">
                                <h2><?= $value['title'] ?></h2>
                                <p>
                                    <?= $value['short_text'] ?>
                                </p>
                                <a href="?page=news&action=view&id=<?= $value['id'] ?>">View</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            
               
            
                <?= $data['paging']?>
        </div>
    
    
</section>