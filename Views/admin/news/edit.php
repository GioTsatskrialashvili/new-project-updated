<div class="container">
    <div class="row">
        <form class="form" 
        action="?type=admin&page=news&action=update"
        method="post"
        enctype="multipart/form-data">
            <h2>Add News</h2>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" value="<?= $data['news']['title']?>">
            </div>
            <div class="form-group">
                <label for="">Short Text</label>
                <textarea name="short_text" id="" cols="30" rows="10 "><?= $data['news']['short_text']?></textarea>
            </div>
            <div class="form-group">
                <label for="">Text</label>
                <textarea name="text" id="" cols="30" rows="10"><?= $data['news']['text']?></textarea>
            </div>
            
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="">
                    <?php foreach($data['categories'] as $value):?>
                    <option <?= $data['news']['category_id']==$value['id']? 'selected': ''?> value="<?=$value['id']?>"><?=$value['title']?></option>
                 
                    <?php endforeach?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" >
                <?php if($data['news']['image']): ?>
                <img  style="width: 150px;" src="<?= $data['news']['image']?>" alt="">
                <?php endif; ?>
            </div>
           <div class="form-group">
               <input type="hidden" name='id' value="<?= $data['news']['id']?>">
                <button >Update</button>
            </div>
        </form>
    </div>
</div>