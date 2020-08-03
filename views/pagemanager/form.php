
<form method="post" action="" name="artileForm">
    <?= Form::addCsrfToken('artileForm');?>
    <?php if (isset($this->formData)) { ?>
        <input type="hidden" name="id" value="<?= $this->formData['id'] ?>">
    <?php } ?>
    <table class="table table-bordered">
        <tr>
            <td width="20%">Title</td>
            <td width="80%"><input type="text" <?= isset($this->formData) ? 'value = "' . $this->formData['title'] . '"' : '' ?> required class="form-control" name="title" id="title"/></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" <?= isset($this->formData) ? 'value = "' . $this->formData['description'] . '"' : '' ?> required class="form-control" name="description" id="description"/></td>
        </tr>
        <tr>
            <td>Keywords</td>
            <td><input type="text" <?= isset($this->formData) ? 'value = "' . $this->formData['keywords'] . '"' : '' ?> required class="form-control" name="keywords" id="keywords"/></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea name="content" rows="7" required id="content" class="form-control"><?= isset($this->formData) ? $this->formData['content'] : '' ?></textarea></td>
        </tr>
        <tr>
            <td>Page URL/Alias</td>
            <td><input type="text" <?= isset($this->formData) ? 'value = "' . $this->formData['url'] . '"' : '' ?> class="form-control" name="url" id="url"/></td>
        </tr>
        
        <tr>
            <td></td>
            <td>
                <button type="submit" name="savePage" class="btn btn-primary">Save</button>
                <a href="<?=SITE_URL.'pagemanager/index'?>" class="btn btn-danger">Cancel</a>
            </td>
        </tr>
    </table>
</form>
