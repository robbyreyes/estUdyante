<div class="container-fluid">
	<div class="col-md-12">
		<table class="table table-striped table-hover table-condensed table-responsive text-center">
			<thead>
				<tr>
					<th>ID</th>
					<th>PASSWORD</th>
					<th>FIRST NAME</th>
					<th>LAST NAME</th>
					<th>EMAIL</th>
					<th>AVATAR</th>
				</tr>
			</thead>
			<tbody>
			<?php
			foreach($user1 as $s){
			echo '	<tr>
						<td>'.$s['id'].'</td>	
						<td>'.$s['password'].'</td>
						<td>'.$s['firstname'].'</td>
						<td>'.$s['lastname'].'</td>
						<td>'.$s['email'].'</td>
						<td>'.$s['avatar'].'</td>
					</tr>
					';
			}
			?>
			</tbody>
		</table>
	</div>