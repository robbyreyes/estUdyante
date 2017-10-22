<div class="container-fluid">
	<div class="col-md-12">
		<table class="table table-striped table-hover table-condensed table-responsive text-center">
			<thead>
				<tr>
					<th>BOOK ID</th>
					<th>BOOK NAME</th>
					<th>BOOK DESCRIPTION</th>
					<th>BOOK AUTHOR</th>
					<th>IMAGE</th>
					<th>USER ID</th>
				</tr>
			</thead>
			<tbody>
			<?php
			foreach($book as $s){
			echo '	<tr>
						<td>'.$s['book_ID'].'</td>	
						<td>'.$s['book_name'].'</td>
						<td>'.$s['book_desc'].'</td>
						<td>'.$s['book_author'].'</td>
						<td>'.$s['image'].'</td>
						<td>'.$s['user_id'].'</td>
					</tr>
					';
			}
			?>
			</tbody>
		</table>
	</div>