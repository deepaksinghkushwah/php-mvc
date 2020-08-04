<h1>Page Manager</h1>
<?php
// pagination
$page = $this->args !== false ? $this->args[0] : 1;
$sql = "SELECT * FROM article order by id DESC";
$pagination = new Pagination($sql, SITE_URL.'pagemanager/index/', $page);

if (count($pagination->rows)) {
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="10%">#</th>
                <th width="20%">Title</th>
                <th width="60%">Description</th>
                <th width="10%">Action</th>
            </tr>
        </thead>
        <?php
        foreach ($pagination->rows as $row) {
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['title'] ?></td>
                <td><?= $row['description'] ?></td>
                <td>
                    <a href="<?= SITE_URL . 'pagemanager/update/' . $row['id'] ?>" class=""><i class="fas fa-fw fa-edit"></i></a>
                    <a href="javascript:void(0);" data-href="<?= SITE_URL . 'pagemanager/delete/' . $row['id'] ?>" class="deleteCommon"><i class="fas fa-fw fa-trash"></i></a>
                </td>
            </tr>
            <?php            
        }
        ?>
    </table>
    <?php
    $pagination->displayPageLinks();
    ?>
    
    <?php
}
?>