<?php 
// var_dump($data);
// die;


 ?>


<div class="container">
	<form action="/class/site/edit/<?=$data->employeeNumber?>" method="post" enctype="multipart/form-data">
		<div class="form-group row">
    <label for="static" class="col-sm-2 col-form-label">Employee Number</label>
    <div class="col-sm-10">
      <input type="text" name="employeeNumber" readonly class="form-control-plaintext font-weight-bold" id="static" value="<?=$data->employeeNumber?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" name="lastName" class="form-control" id="lastName" value="<?=$data->lastName;?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" name="firstName" class="form-control" id="firstName" value="<?=$data->firstName;?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="extension" class="col-sm-2 col-form-label">Extension</label>
    <div class="col-sm-10">
      <input type="text" name="extension" class="form-control" id="extension" value="<?=$data->extension;?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" value="<?=$data->email;?>">
    </div>
  </div>
	<div class="form-group row">
		<label for="officeCode" class="col-sm-2 col-form-label">officeCode</label>
		<div class="col-sm-10">
			<!-- <input type="number" name="email" class="form-control" id="email" value="<?=$result['email'];?>"> -->
			<select name="officeCode" id="officeCode" class="form-control">
				<option <?=($data->officeCode == 1) ? 'selected' : '';?> value="1">1</option>
				<option <?=($data->officeCode == 2) ? 'selected' : '';?> value="2">2</option>
				<option <?=($data->officeCode == 3) ? 'selected' : '';?> value="3">3</option>
				<option <?=($data->officeCode == 4) ? 'selected' : '';?> value="4">4</option>
				<option <?=($data->officeCode == 5) ? 'selected' : '';?> value="5">5</option>
				<option <?=($data->officeCode == 6) ? 'selected' : '';?> value="6">6</option>
				<option <?=($data->officeCode == 7) ? 'selected' : '';?> value="7">7</option>
			</select>
		</div>
	</div>
  <div class="form-group row">
    <label for="jobTitle" class="col-sm-2 col-form-label">Job Title</label>
    <div class="col-sm-10">
      <input type="text" name="jobTitle" class="form-control" id="jobTitle" value="<?=$data->jobTitle;?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control-file" name="image" id="image">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
</div>