$('.out').on('click', function(e){
	e.preventDefault();

	Swal.fire({
  		title: 'Are you sure?',
  		text: "You won't be able to revert this!",
  		type: 'warning',
  		showCancelButton: true,
  		confirmButtonColor: '#3085d6',
  		cancelButtonColor: '#d33',
  		confirmButtonText: 'Yes, delete it!'
	}).then ((result) => {
			if(result.value){
        document.location.href = base_url().'index.php/login/logout';
      }
    }
  )
})