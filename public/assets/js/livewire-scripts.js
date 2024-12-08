Livewire.on('reinitialize_library', () => {
    jQuery(document).ready(function() {
        $('.select').select2(); 
        $('.datanew').DataTable({
			"bFilter": true,
			"sDom": 'fBtlpi',  
			'pagingType': 'numbers', 
			"ordering": true,
			"language": {
				search: ' ',
				sLengthMenu: '_MENU_',
				searchPlaceholder: "Search...",
				info: "_START_ - _END_ of _TOTAL_ items",
			 },
			initComplete: (settings, json)=>{
				$('.dataTables_filter').appendTo('#tableSearch');
				$('.dataTables_filter').appendTo('.search-input');
			},	
		});
    })
});

// Livewire.on('confirm-delete', (event) => {
//     if (confirm("Are you sure you want to delete this product?")) {
//         Livewire.dispatch('delete_product', event);
//     }
// });
Livewire.on('confirm-delete', (event) => {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Livewire.dispatch('delete_product', event);
            Swal.fire(
                'Deleted!',
                'Your item has been deleted.',
                'success'
            );
        }
    });
});