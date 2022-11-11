<div class="container">  </div>


<table class="table border-top">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>About</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) { ?>
                <tr>
                        <td> <?=$item->id?> </td>
                        <td> <?=$item->name?> </td>
                        <td> <?=$item->category?> </td>

                        <td> <?=$item->price?> </td>
                        <td> <?=$item->about?> </td>

                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value=" <?=$item->id?>">
                                <button type="submit" name="edit" class="btn btn-success">edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value=" <?=$item->id?>">
                                <button type="submit" name="destroy" class="btn btn-danger">delete</button>
                            </form>
                        </td>

                </tr>
                <?php  } ?>
            </tbody>
        </table>
  