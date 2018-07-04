<form id="add_article" class="add-article" method="post" action="../app/article_add.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Title</label>
        <input id="title" name="title" class="form-control" type="text" placeholder="Title goes here" />
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" placeholder="Where is the content bro"></textarea>
    </div>
    <div class="form-group">
        <input id="image" name="image" class="form-control-file" type="file" />
    </div>
    <div class="form-group btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
            Activate<input type="radio" name="is_active" id="option1" autocomplete="off" checked value="1" />
        </label>
        <label class="btn btn-secondary">
            Not Now<input type="radio" name="is_active" id="option2" autocomplete="off" value="0" />
        </label>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary mb" value="Add" />
    </div>
</form>