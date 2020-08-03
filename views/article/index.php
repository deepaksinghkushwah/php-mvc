<h1>Articles</h1>
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
        foreach ($this->rows as $row) {
            ?>
            <tr>
                <td><a href="<?=SITE_URL.'article/detail/'.$row['url'];?>"><?= $row['title'] ?></a></td>
                <td><?= $row['description'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

