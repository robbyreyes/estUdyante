<div class="container-fluid">
	<div class="col-md-12">
		<table class="table table-striped table-hover table-condensed table-responsive text-center">
			<thead>
				<tr>
					<th>ID</th>
					<th>USER ID</th>
					<th>USER NAME</th>
					<th>BODY</th>
					<th>POST DATE</th>
					<th>TOTAL LIKES</th>
				</tr>
			</thead>
			<tbody>
			<?php
			foreach($posts as $s){
			echo '	<tr>
						<td>'.$s['id'].'</td>	
						<td>'.$s['user_id'].'</td>
						<td>'.$s['user_name'].'</td>
						<td>'.$s['body'].'</td>
						<td>'.$s['postdate'].'</td>
						<td>'.$s['total_likes'].'</td>
					</tr>
					';
			}
			?>
			</tbody>
		</table>
	</div>