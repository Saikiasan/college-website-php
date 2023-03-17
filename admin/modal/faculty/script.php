<script>
	$(document).ready(function(){

        $('.edit_btn').click(function(e){
            e.preventDefault();
		    var editid = $(this).closest("tr").find('.edit_id_value').val();
            // console.log(editid)
            $.ajax({
                type: 'POST',
                url: 'service/edit/edit_faculty.php',
                data: {
                    'edit_btn_set': true,
                    'editid': editid,
                },
                success: function(response){
                    console.log(response);
                    $.each(response, function (key, value){
                        // console.log("../assets/faculty_img/"+value['faculty_image'])
                        $('#f_id').val(value['f_id']);
                        $('#f_name').val(value['faculty_name']);
                        $('#f_mail').val(value['faculty_email']);
                        $('#f_phone').val(value['faculty_phone']);
                        $('#f_dep').val(value['faculty_department']);
                        $('#f_qual').val(value['faculty_qualification']);
                        $('#f_img').attr('src','../assets/faculty_img/'+value['faculty_image']);
                        // assets/faculty_img/16404ca3a5f124.jpg
                    })
                    $('#edit_faculty_modal').modal('show');
                }
            })
        });
    });
</script>

<!-- delete script -->
<script>
  $(document).ready(function () {
    $('.delete_btn').click(function (e) {
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
      }).then((isConfirmed) => {
        // if user clicks yes
        if (isConfirmed.value === true) {
          console.log(deleteid)
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
                  url: "service/delete/delete_faculty_data.php",
                  data: {
                    "delete_btn_set": true,
                    "delete_id": deleteid,
                  },
                  success: function (response) {
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
                    }).then((result) => {
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
            toast: true,
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