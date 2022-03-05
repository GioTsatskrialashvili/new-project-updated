<div class="container">
    <div class="row">
        <form class="form"action="?type=admin&page=about&action=update"method="post">
            <h2>Update About</h2>
            <div class="form-group">
                <label for="">Home Title</label>
                <input type="text" name="home_title" value="<?=$data['about']['home_title']?>">
            </div>
            <div class="form-group">
                <label for="">Inner Title</label>
                <input type="text" name="title"value="<?=$data['about']['title']?>">
            </div>
            <div class="form-group">
                <label for="">Short Text</label>
                <textarea name="short_text" id="" cols="30" rows="10"value="?>"><?=$data['about']['short_text']?></textarea>
            </div>
            <div class="form-group">
                <label for="">Text</label>
                <textarea name="text" id="" cols="30" rows="10"value=""><?=$data['about']['text']?></textarea>
            </div>
            <div class="form-group">
                <button>Update</button>
            </div>
        </form>
    </div>
</div>