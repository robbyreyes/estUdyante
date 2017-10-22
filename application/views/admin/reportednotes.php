<div class="container-fluid">
	<div class="col-md-12">
		<table class="table table-striped table-hover table-condensed table-responsive text-center">
			<thead>
				<tr>
					<th>NOTE ID</th>
					<th>NOTE NAME</th>
					<th>NOTE DESCRIPTION</th>
					<th>FILE</th>
				</tr>
			</thead>
			<tbody>
			<?php
			foreach($note as $s){
			echo '	<tr>
						<td>'.$s['note_ID'].'</td>	
						<td>'.$s['note_name'].'</td>
						<td>'.$s['note_desc'].'</td>
						<td>'.$s['file'].'</td>
					</tr>
					';
			}
			?>
			</tbody>
		</table>
	</div>