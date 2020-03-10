<div class="container mt-5">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $item) { ?>
            <tr>
                <th scope="row"><?=$item->employeeNumber?></th>
                <td><?=$item->lastName?></td>
                <td><?=$item->firstName?></td>
                <td><?=$item->email?></td>
                <td class="text-center">
                    <a href="/class/site/view/<?=$item->employeeNumber?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="/class/site/form/<?=$item->employeeNumber?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
        <? } ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Delete <?=$item->lastName .' '.  $item->firstName;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/class/site/delete/<?=$item->employeeNumber?>" class="btn btn-danger">Delete</i></a>
      </div>
    </div>
  </div>
</div>