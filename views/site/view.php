<div class="container mt-5">
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Employee Number</th>
				<th scope="col">Last Name</th>
				<th scope="col">First Name</th>
				<th scope="col">Email</th>
				<th scope="col">Job Title</th>
				<th scope="col" class="text-center">#</th>
				<!-- <th scope="col">Image</th> -->
			</tr>
		</thead>
		<tbody>
			<th><?=$data->employeeNumber; ?></th>
			<td><?=$data->lastName; ?></td>
			<td><?=$data->firstName; ?></td>
			<td><?=$data->email; ?></td>
			<td><?=$data->jobTitle; ?></td>
			<td class="text-center">
                    <a href="/class/site/form/<?=$data->employeeNumber?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
						<i class="fas fa-trash"></i>
					</button>
                </td>
			<!-- <td style="padding: 0;">
				<a href="uploads/<?=$data->image;?>">
					<img style="height: 50px" src="uploads/<?=$data->image;?>" alt="">
				</a>
			</td> -->
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
        Delete <?=$data->lastName .' '.  $data->firstName;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/class/site/delete/<?=$data->employeeNumber?>" class="btn btn-danger">Delete</i></a>
      </div>
    </div>
  </div>
</div>