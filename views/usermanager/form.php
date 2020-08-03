<form method="post" action="" name="userForm">
    <?= Form::addCsrfToken('userForm'); ?>
    <?php if (isset($this->formData)) { ?>
        <input type="hidden" name="id" value="<?= $this->formData['id'] ?>">
    <?php } ?>
    <table class="table table-bordered">
        <tr>
            <td width="20%">Username</td>
            <td width="80%"><input type="text" <?= isset($this->formData) ? 'value = "' . $this->formData['username'] . '"' : '' ?> required class="form-control" name="username" id="username"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" <?= isset($this->formData) ? 'value = "' . $this->formData['email'] . '"' : '' ?> required class="form-control" name="email" id="description"/></td>
        </tr>
        <?php if(!isset($this->formData)){?>
        <tr>
            <td>Password</td>
            <td><input type="Password" <?= isset($this->formData) ? 'value = "' . $this->formData['password'] . '"' : '' ?> required class="form-control" name="password" id="Password"/></td>
        </tr>
        <?php } ?>
        <tr>
            <td>Role</td>
            <td>
                <select class="form-control" name="role_id">
                    <?php
                    $model = new Role_Model();
                    $rows = $model->listAll();
                    if ($rows) {
                        foreach ($rows as $row) {
                            ?>
                            <option <?=isset($this->formData) ? ($this->formData['role_id'] == $row['id'] ? 'selected = "selected"' : '' ) : '';?> value="<?= $row['id'] ?>"><?= $row["title"] ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                
                <select class="form-control" name="status">
                    <option <?php echo isset($this->formData) ? ($this->formData['status'] == 0 ? 'selected="selected"':'') : ''?> value="0">Inactive</option>
                    <option <?php echo isset($this->formData) ? ($this->formData['status'] == 1 ? 'selected="selected"':'') : ''?> value="1">Active</option>
                    <option <?php echo isset($this->formData) ? ($this->formData['status'] == 2 ? 'selected="selected"':'') : ''?> value="2">Deleted</option>
                </select>
            </td>
        </tr>
        

        <tr>
            <td></td>
            <td>
                <button type="submit" name="saveUser" class="btn btn-primary">Save</button>
                <a href="<?= SITE_URL . 'usermanager/index' ?>" class="btn btn-danger">Cancel</a>
            </td>
        </tr>
    </table>
</form>
