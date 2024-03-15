<?php 
if(isset($_GET['updateid'])){
	$id = $_GET['updateid'];
	$sql = "Select * From Product Where ProductId = '" . $id . "'";
	$rows = query($sql);
}else if(isset($_GET['updateidC'])){
	$idc = $_GET['updateidC'];

	$sql1 = "Select * From category Where CatId = " . $idc . "";
	$rows1 = query($sql1);
}
else if(isset($_GET['updateidA'])){
	$ida = $_GET['updateidA'];

	$sql2 = "Select * From account Where id = " . $ida . "";
	$rows2 = query($sql2);
}
?>
<form action="" method="post" enctype="multipart/form-data">
	<table border="1" cellspacing="0" width="100%" class="table">
		<tr>
			<th colspan="2">Add new product</td>
		</tr>
		<tr>
			<td width="20%" class="col1">Id: </td>
			<td width="80%" class="col2"><input type="text" id="idshow" value="<?=$rows[0][0]?>" disabled>
				<input type="hidden" id="id" value="<?=$rows[0][0]?>" name="id">
			</td>
		</tr>
		<tr>
			<td class="col1">Product name: </td>
			<td class="col2"><input type="text" name="name" id="fname" value="<?=$rows[0][1]?>"></td>
		</tr>
		<tr>
			<td class="col1">Product image: </td>
			<td class="col2">
				<input type="text" name="imageold" id="imageold" value="<?=$rows[0][2]?>">
				<input type="file" name="image" id="image">
			</td>
		</tr>
		<tr>
			<td class="col1">Category:</td>
			<td class="col2">
				<select name="cat" id="cat">				
						<?php 
						$sql = "Select * From Category";
						$rowcats = query($sql);
						for($i=0; $i<count($rowcats); $i++)
						{
							if($rows[0][4]==$rowcats[$i][0])
							{
								?>
					<option value="<?=$rowcats[$i][0]?>" selected><?=$rowcats[$i][1]?></option>
								<?php
							}
							else
							{
								?>

					<option value="<?=$rowcats[$i][0]?>"><?=$rowcats[$i][1]?></option>
								<?php
							}
						}
						?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="col1">Price: </td>
			<td class="col2"><input type="text" name="price" id="price" value="<?=$rows[0][3]?>"></td>
		</tr>
		<tr>
			<td class="col1">Price: </td>
			<td class="col2"><textarea name="description" id="description" cols="30" rows="10"><?=$rows[0][5]?></textarea></td>
		</tr>
		<tr>
			<td class="col1"></td>
			<td class="col2"><input type="submit" value="Update" name="update"></td>
		</tr>
	</table>
</form>

<form action="" method="post" enctype="multipart/form-data">
	<table border="1" cellspacing="0" width="100%" class="table">
		<tr>
			<th colspan="2">Add new Category</td>
		</tr>
		<tr>
			<td width="20%" class="col1">Id: </td>
			<td width="80%" class="col2"><input type="text" id="idshow" value="<?=$rows1[0][0]?>" disabled>
				<input type="hidden" id="id" value="<?=$rows1[0][0]?>" name="CatId">
			</td>
		</tr>
		<tr>
			<td class="col1">Product name: </td>
			<td class="col2"><input type="text" name="CatName" id="fname" value="<?=$rows1[0][1]?>"></td>
		</tr>
		
		<tr>
			<td class="col1"></td>
			<td class="col2"><input type="submit" value="Update" name="updateCat"></td>
		</tr>
	</table>
</form>

<form action="" method="post" enctype="multipart/form-data">
	<table border="1" cellspacing="0" width="100%" class="table">
		<tr>
			<th colspan="2">Add new User</td>
		</tr>
		<tr>
			<td width="20%" class="col1">Id: </td>
			<td width="80%" class="col2"><input type="text" id="idshow" value="<?=$rows2[0][0]?>" disabled>
				<input type="hidden" id="abc" value="<?=$rows2[0][0]?>" name="id">
			</td>
		</tr>
		<tr>
			<td class="col1"> name: </td>
			<td class="col2"><input type="text" name="username" id="fname" value="<?=$rows2[0][1]?>"></td>
		</tr>

		<tr>
			<td class="col1">Mật khẩu: </td>
			<td class="col2"><input type="text" name="password" id="fname" value="<?=$rows2[0][2]?>"></td>
		</tr>
		
		<tr>
			<td class="col1"></td>
			<td class="col2"><input type="submit" value="Update" name="updateAc"></td>
		</tr>
	</table>
</form>