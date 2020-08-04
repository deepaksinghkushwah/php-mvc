<?php

/**
 * Description of Pagination
 *
 * @author Deepak Singh Kushwah
 */
class Pagination {

    private $totalPages;
    private $totalRecords;
    private $start;
    private $page;
    public $rows;
    private $pageUrl;

    public function __construct($sql, $pageUrl, $page) {
        $model = new Model();
        $this->page = $page;
        $this->pageUrl = $pageUrl;

        $this->totalRecords = count($model->select($sql));
        $this->totalPages = ceil($this->totalRecords / ROW_PER_PAGE);
        $this->start = ($page - 1) * ROW_PER_PAGE;
        $limit = " limit " . $this->start . ", " . ROW_PER_PAGE;
        //echo $sql . $limit;
        $this->rows = $model->select($sql . $limit);
    }

    private function getQstr() {

        $str = "?";
        foreach ($_GET as $key => $val) {
            if ($key == "url")
                continue;
            $str .= $key . "=" . $val . "&";
        }
        return rtrim($str, "&");
    }

    public function displayPageLinks() {
        //echo $this->page + 4 .' = '.$this->totalPages."<br>";
        $k = (($this->page + 4 > $this->totalPages) ? $this->totalPages - 4 : (($this->page - 4 < 1) ? 5 : $this->page));
        ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">


                <?php if ($this->page >= 2) { ?>
                    <li class="page-item"><a class="page-link" href='<?= $this->pageUrl . '1' . $this->getQstr() ?>'> First </a></li>
                    <li class="page-item"><a class="page-link" href='<?= $this->pageUrl . ($this->page - 1) . $this->getQstr() ?>'> Previous </a></li>
                <?php } ?>

                <?php for ($p = -4; $p <= 4; $p++) {
                    if (($k + $p) <= 0)
                        continue;
                    ?>

                    <li class="page-item <?= $this->page == ($k + $p) ? 'active' : ''; ?>"><a class="page-link" href="<?= $this->pageUrl . ($k + $p) . $this->getQstr() ?>"><?= ($k + $p); ?></a></li>
        <?php } ?>



                    <?php if ($this->page < $this->totalPages) { ?>
                    <li class="page-item"><a class="page-link" href='<?= $this->pageUrl . ($this->page + 1) . $this->getQstr() ?>'> Next </a></li>
                    <li class="page-item"><a class="page-link" href='<?= $this->pageUrl . $this->totalPages . $this->getQstr() ?>'> Last </a></li>
        <?php } ?>
            </ul> 
        </nav>
        <?php
    }

}
