<h1>Articles</h1>
<hr>
<?php
$page = $this->args !== false ? $this->args[0] : 1;

$sql = "SELECT * FROM article";
$q = isset($_GET['q']) ? trim($_GET['q']) : '';
if (!empty($q)) {
    $sql .= " WHERE `title` like '%{$q}%' ";
}
$sql .= " ORDER BY id DESC ";

$pagination = new Pagination($sql, SITE_URL . 'article/index/', $page);
?>

    <form method="get" action="<?=SITE_URL . 'article/index'?>">
        <div class="row">
            <div class="col-3"><input type="text" name="q" class="form-control"></div>
            <div class="col-3"><input type="submit" value="Search" class="btn btn-primary btn-sm"></div>
        </div>

    </form>

<hr>
<table class="table table-striped table-light">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($pagination->rows as $row) {
            ?>
            <tr>
                <td><a href="<?= SITE_URL . 'article/detail/' . $row['url']; ?>"><?= $row['title'] ?></a></td>
                <td><?= $row['description'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<?php
$pagination->displayPageLinks();
?>
