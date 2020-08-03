<h1>User Manager</h1>
<?php
if (count($this->rows)) {
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="10%">#</th>
                <th width="20%">Username</th>
                <th width="60%">Email</th>
                <th width="60%">Status</th>
                <th width="10%">Action</th>
            </tr>
        </thead>
        <?php
        foreach ($this->rows as $row) {
            ?>
            <tr <?= $row['status'] != 1 ? 'class="bg-warning"' : ''; ?>>
                <td><?= $row['id'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['email'] ?></td>
                <td>
                    <?php
                    if ($row['status'] == 1) {
                        echo "Active";
                    } else if ($row['status'] == 2) {
                        echo "Deleted";
                    } else {
                        echo "Inactive";
                    }
                    ?>
                </td>
                <td>
                    <a href="<?= SITE_URL . 'usermanager/update/' . $row['id'] ?>" class=""><i class="fas fa-fw fa-edit"></i></a>
                    <a href="javascript:void(0);" data-href="<?= SITE_URL . 'usermanager/delete/' . $row['id'] ?>" class="deleteCommon"><i class="fas fa-fw fa-trash"></i></a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}
?>