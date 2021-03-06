<div class="row col-sm-6 col-sm-offset-3">

	<h3> Update <?= $user->fullNameWithUsername() ?>  skills</h3>


	<a href = "<?= URL::to('/admin/schedule/user-summary');?>">
		<button type="button" class="btn btn-primary btn-sm">User Summary</button>
	</a>

	<br>

	<br>

	<div class="right">
		<form method='POST' action='<?= URL::to('/admin/schedule/skill/remove-user-skill'); ?>'>

			<table class="table">
				<thead>
					<th>Remove</th>
					<th></th>
				</thead>

				<tbody>			
					
					<tr>
						<td>skill:</td>
						<td>				
							<select name="skill" class="form-control">
							<?php 
							
							foreach($userSkills as $skill){
						
							?>
						
							<option value="<?= $skill->id ?>" > <?= $skill->name ?> </option>

							<?php 

							}

							?>

							</select>
						</td>
					</tr>
				
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="user" value="<?= $user->id ?>">
							<input type="submit" value="Remove" class="btn btn-default">
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>

	<div class="left">
		<form method='POST' action='<?= URL::to('/admin/schedule/skill/set-user-skill'); ?>'>

			<table class="table">
				<thead>
					<th>Assign</th>
					<th></th>
				</thead>

				<tbody>			
					
					<tr>
						<td>skill:</td>
						<td>				
							<select name="skill" class="form-control">
							<?php 
							
							foreach($availSkills as $skill){
						
							?>
						
							<option value="<?= $skill->id ?>" > <?= $skill->name ?> </option>

							<?php 

							}

							?>

							</select>
						</td>
					</tr>
				
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="user" value="<?= $user->id ?>">
							<input type="submit" value="Add" class="btn btn-default">
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>

</div>
