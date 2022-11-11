<form action="" method="get">
    <div class="row">
        <div class="col-2">
            <select class="form-select" name = "filter">
                <option selected value = "">CHOOSE CATEGORY</option>
                <?php foreach($categories as $key => $category) {?>
                    <option value="<?= $category?>"><?= $category ?></option>
                <?php }?>
            </select>
        </div>
        <div class="col-3">
            <input type="text" class="form-control" name = "from" placeholder="PRICE FROM">
        </div>
        <div class="col-3">
            <input type="text" class="form-control" name = "to" placeholder="PRICE TO">
        </div>
        <div class="col-2">
            <select class="form-select" name = "sort">
                <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 0) ? "selected" : '':'';?> selected value="0">FILTER</option>
                <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 1) ? "selected" : '':'';?> value="1">price 0-9</option>
                <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 2) ? "selected" : '':'';?>value="2">price 9-0</option>
                <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 3) ? "selected" : '':'';?>value="3">title a-z</option>
                <option <?=(isset($_GET["sort"]))?($_GET["sort"] == 4) ? "selected" : '':'';?>value="4">title z-a</option>
            </select>
        </div>
        <div class="col-2">
        <button type="submit" class="btn btn-primary" name="filter">Filter</button>
        </div>
    </div>
</form>