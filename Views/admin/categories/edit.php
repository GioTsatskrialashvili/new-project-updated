<div class="container">
    <div class="row">
        <form class="form" action="?type=admin&page=categories&action=update"method="post">
            <h2>Edit Category</h2>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" value="<?=$data['category']['title']?>">
            </div>
            <div class="form-group">
                <label for="">Show on home page</label>
                <select name="home" id="">
                    <option value="1"<?=$data['category']['home']==1?'selected':''?>>yes</option>
                    <option value="0"<?=$data['category']['home']==0?'selected':''?>>no</option>
                </select>
            </div>
           <div class="form-group">
                <input type="hidden" value="<?=$data['category']['id']?>"name='id'>
                <button >Edit</button>
            </div>
        </form>
    </div>
</div>