


<form action="" method="post" class="col-6 border  mt-5">
        <div class="form-outline mb-4">
        <label for="f1">Product name</label>

            <input type="text" name="name" id="f1" class="form-control" value="<?= ($edit)? $item->name : "" ?>">
        </div>
        <div class="form-outline mb-4">
            <label for="f2">Category</label>
            <input type="text" name="category" id="f2" class="form-control"  value="<?= ($edit)? $item->category : "" ?>">
        </div>
        <div class="form-outline mb-4">
            <label for="f3">Price</label>
            <input type="number"  step=".01" name="price" id="f3" class="form-control"  value="<?= ($edit)? $item->price : "" ?>">
        </div>
        <div class="form-outline mb-4">
            <label for="f4">Product description</label>
            <textarea name="about" cols="40" rows="3" id="f4" class="form-control" > <?= ($edit)? $item->about : "" ?> </textarea>
        </div>

        <?php if($edit){ ?>
            <input type="hidden" name="id" value="<?=$item->id?>">
            <button type="submit" name="update" class="btn btn-success mt-3 mb-3">Update</button>
            <?php } else { ?>
            <button type="submit" name="save" class="btn btn-primary mt-3 mb-3">Save</button>
        <?php } ?>

        
        </div>


      
</form>


               