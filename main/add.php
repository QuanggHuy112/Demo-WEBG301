<form action="" method="post" enctype="multipart/form-data">
	<table class="table table-hover">
		<thead>
			<tr>
				<th class="bg-dark text-center text-white" colspan="2">Add new product</td>
			</tr>
			<tr>
				<td width="20%" class=" text-center text-dark">Id: </td>
				<td width="80%" class="col2"><input type="text" id="id" value="" name="id">
				</td>
			</tr>
			<tr>
				<td class="text-center text-dark">Product name: </td>
				<td class="col2"><input type="text" name="name" id="fname" value=""></td>
			</tr>
			<tr>
				<td class=" text-center text-dark">Product image: </td>
				<td class="col2"><input type="file" name="image" id="image"></td>
			</tr>
			<tr>
				<td class=" text-center text-dark">Description: </td>
				<td class="col2"><textarea name="description" id="" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td class="text-center text-dark">Category:</td>
				<td class="col2">
					<select name="cat" id="cat">
						<?php
						$sql = "Select * From Category";
						$rows = query($sql);
						for ($i = 0; $i < count($rows); $i++) {
						?>
							<option value="<?= $rows[$i][0] ?>"><?= $rows[$i][1] ?></option>
						<?php
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td class=" text-center text-dark">Quantity: </td>
				<td class="col2"><input type="text" name="price" id="price" value=""></td>
			</tr>
			<tr>
				<td class="col1"></td>
				<td class="col2"><button type="submit" class="btn btn-info" name="add" data-toggle="submit" data-placement="top" value="Submit changes" title="Submit changes? Are you sure about that ???">
						Submit all changes?
					</button>
				</td>

			</tr>
		</thead>
		<script>
    function validateForm() {
        var productName = document.getElementById("fname").value;
        var quantity = document.getElementById("price").value;
        var status = document.getElementById("status");

        // Check if the product name is empty
        if (productName.trim() === '') {
            status.innerHTML = "Please enter a product name.";
            status.className = "status error";
            return false;
        }

        // Check if quantity is empty or not a number
        if (quantity.trim() === '' || isNaN(quantity)) {
            status.innerHTML = "Please enter a valid quantity.";
            status.className = "status error";
            return false;
        }

        return true; // If all validations pass
    }
</script>

	</table>
	
</form>

<form action="" method="post" enctype="multipart/form-data">
	<table class="table table-hover">
		<thead>
			<tr>
				<th class="bg-dark text-center text-white" colspan="2">Add new Category</td>
			</tr>
			<!-- <tr>
				<td width="20%" class=" text-center text-dark">Id: </td>
				<td width="80%" class="col2"><input type="text" id="CatId" value="" name="CatId">
				</td>
			</tr> -->
			<tr>
				<td class="text-center text-dark">Category name: </td>
				<td class="col2"><input type="text" name="CatName" id="fname" value=""></td>
			</tr>
			<!-- <tr>
				<td class="text-center text-dark">Description: </td>
				<td class="col2"><input type="text" name="Description" id="describe" value=""></td>
			</tr> -->
			<tr>
				<td class="col1"></td>
				<td class="col2"><button type="submit" class="btn btn-info" name="addC" data-toggle="submit" data-placement="top" value="Submit changes" title="Submit changes? Are you sure about that ???">
						Submit all changes?
					</button>
				</td>

			</tr>
		</thead>
	</table>
	
</form>

<form action="" method="post" enctype="multipart/form-data">
	<table class="table table-hover">
		<thead>
			<tr>
				<th class="bg-dark text-center text-white" colspan="2">Add new Accout</td>
			</tr>
			<!-- <tr>
				<td width="20%" class=" text-center text-dark">Id: </td>
				<td width="80%" class="col2"><input type="text" id="CatId" value="" name="CatId">
				</td>
			</tr> -->
			<tr>
				<td class="text-center text-dark">Username: </td>
				<td class="col2"><input type="text" name="username" id="fname" value=""></td>
			</tr>
			<tr>
				<td class="text-center text-dark">Password: </td>
				<td class="col2"><input type="text" name="password" id="fname" value=""></td>
			</tr>
			<!-- <tr>
				<td class="text-center text-dark">Description: </td>
				<td class="col2"><input type="text" name="Description" id="describe" value=""></td>
			</tr> -->
			<tr>
				<td class="col1"></td>
				<td class="col2"><button type="submit" class="btn btn-info" name="addA" data-toggle="submit" data-placement="top" value="Submit changes" title="Submit changes? Are you sure about that ???">
						Submit all changes?
					</button>
				</td>

			</tr>
		</thead>
	</table>
	
</form>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>