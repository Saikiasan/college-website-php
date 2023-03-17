

<td class="text-center table-danger">
    <input type="hidden" class="delete_id_value" value="<?php echo $row['f_id'];?>">
    <a href='javascript:void(0)' class="delete_btn text-decoration-none btn border-dark rounded-pill shadow-sm">
        <span class="fa fa-eraser text-danger"></span>
    </a>
</td>


<script>
	$(document).ready(function(){
        $('.delete_btn').click(function(e){
            // prevent default click
            e.preventDefault();
		    var deleteid = $(this).closest("tr").find('.delete_id_value').val();

            // sweetalert2
            Swal.fire({
                title: "Do you want to delete this data?",
                showClass: {
                    popup: "animated zoomIn",
                    backdrop: 'swal2-backdrop-show',
                },
                hideClass: {
                    popup: "animated zoomOut",
                    backdrop: 'swal2-backdrop-hide',
                },
                showCancelButton: true,
                reverseButtons: true,
                timer: 5000,
                buttonsStyling: false,
                customClass: {
                    confirmButton: "btn btn-danger rounded-pill mx-2 ",
                    cancelButton: "btn btn-success rounded-pill mx-2",
                },
            }).then((isConfirmed)=>{
                // if user clicks yes
                if(isConfirmed.value === true){
                    // console.log(deleteid)
                    Swal.fire({
		                title: "Deleting...",
                        position: 'top',
                        toast: true,
                        showConfirmButton: false,
                        showClass: {
                            popup: 'animated fadeInDown'
                        },
                        hideClass: {
                            popup: 'animated fadeOutUp'
                        },
                        timer: 1000
		                })
		                .then((willDelete) => {
		                    if (willDelete) {
		                    	$.ajax({
		                    	type: "POST",
		                    	url: "service/delete_faculty_data.php",
		                    	data: {
		                    		"delete_btn_set": 1,
		                    		"delete_id": deleteid,
		                    	},
		                    	success: function(response){
		                    		Swal.fire({
		                    		icon: "success",
                                    title: "Deleted successfully!",
                                    showConfirmButton: false,
                                    timer: 1300,
                                    showClass: {
                                        popup: 'animated zoomIn'
                                    },
                                    hideClass: {
                                        popup: 'animated fadeOut'
                                    }
				                    }).then((result)=>{
                                        //set setInterval same as timer
                                        location.reload();
                                    })
			                    }
			                });
		                }
		            });
                } else {
                    // if user clicks no
                    Swal.fire({
                        title: "Delete cancelled",
                        icon: "info",
                        showConfirmButton: false,
                        timer: 1200,
                        position: "top",
                        toast:true,
                        showClass: {
                            popup: 'animated fadeInDown'
                        },
                        hideClass: {
                            popup: 'animated fadeOutUp'
                        }
                    })
                }
            })
        })
    });
</script>