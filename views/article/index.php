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
                <td><?= $row['title'] ?></td>
                <td><?= $row['description'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

