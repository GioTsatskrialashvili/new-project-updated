<div class="container">
    <div class="row">
        <form class="form" 
        action="?type=admin&page=news&action=store"
        method="post"
        enctype="multipart/form-data">
            <h2>Add News</h2>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" >
            </div>
            <div class="form-group">
                <label for="">Short Text</label>
                <textarea name="short_text" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="">Text</label>
                <textarea name="text" id="" cols="30" rows="10"></textarea>
            </div>
            
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="">
                    <?php foreach($data['categories'] as $value):?>
                    <option value="<?=$value['id']?>"><?=$value['title']?></option>
                 
                    <?php endforeach?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" >
            </div>
           <div class="form-group">
                <button >Add</button>
            </div>
        </form>
    </div>
</div>