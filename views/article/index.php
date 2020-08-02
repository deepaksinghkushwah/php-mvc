<h1>Articles</h1>
<table class="table table-bordered">
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

