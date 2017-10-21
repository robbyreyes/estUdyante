$(document).ready(function(){
	$("#schoolField").hide();
	$("#bdayField").hide();
	$("#contactField").hide();
	$("#addressField").hide();
	$("#space").hide();
	$("#save").hide();
	$("#btn").click(function(){
		$("#schoolField").show();
		$("#bdayField").show();
		$("#contactField").show();
		$("#addressField").show();
		$("#space").show();
		$("#save").show();
	});

	$(".edit").click(function(){
		swal("Saving Profile Details", "Saved successfully!");
	});

	$("#deletePost").click(function(){
		swal({
			  title: "Are you sure?",
			  text: "Once deleted, you will not be able to recover this post!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
			    swal("Your post has been deleted!", {
			      icon: "success",
			    });
			    $.ajax({
				    url: 'profile.php',
				    type: 'DELETE',
				    success: function(result) {
				    }
				});
			  } else {
			    $.ajax({
				    url: 'profile.php',
				    type: 'DELETE',
				    success: function(result) {
				    }
				});
			  }
			});
	});
});