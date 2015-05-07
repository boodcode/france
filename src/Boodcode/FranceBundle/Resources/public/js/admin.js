$(function(){
	console.log('admin');
	$.globals.work_id = 0;

	var compteur=0;
	$('.admin').on('click', 'input', function(e){
		if($(this).is(':checked')) {
			compteur++;
		} else {
			compteur--;
		}
		if(compteur==0){
			$('#delete_work')
				.removeClass('show')
				.addClass('hidden');
		}
		if(compteur>=1){
			$('#delete_work')
				.removeClass('hidden')
				.addClass('show');
		}
		
	});

	$('.outils').on('click', '#see_work',function(){
		var slug = $('input:checked').parent().parent().data('slug');
		document.location.href = $.globals.site_root + slug;
	})

	$('.outils').on('click', '#delete_work',function(){
		if(confirm('Êtes vous sûr de vouloir supprimer cette entrée')){
			//
		} else {
			//
		}
	})
});