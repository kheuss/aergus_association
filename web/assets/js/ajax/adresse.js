$("document").ready(function(){

	var idvillageDelete;
	var nomvillageDelete;
	var idblockDelete;
	var nomblockDelete;

	$('#village-ajouter').submit(function(){
		var nom = $('#aergus_association_village_village').val();
		var DATA = 'nom=' + nom;
		$('#loading').show();
		$('#aergus_association_village_village').val("");
		$.ajax({
	        type: "POST",
	        url: $('#village-ajouter').attr('action'),
	        data: DATA,
	        success: function(data){
	        	$("#zone-village").empty();
	            $('#zone-village').html(data);
	            $('#loading').hide();
	        }
	    });  

		return false;
	});

	$('#block-ajouter').submit(function(){
		var nom = $('#aergus_association_block_block').val();
		var DATA = 'nom=' + nom;
		$('#loading').show();
		$('#aergus_association_block_block').val("");
		$.ajax({
	        type: "POST",
	        url: $('#block-ajouter').attr('action'),
	        data: DATA,
	        success: function(data){
	        	$("#zone-block").empty();
	            $('#zone-block').html(data);
	            $('#loading').hide();
	        }
	    });  

		return false;
	});

	$('.supprimer-village').click(function(){
		idvillageDelete=$(this).attr('name');
		nomvillageDelete=$(this).attr('id');
		$("#supprimer-un-village").modal("show");
	});

	$('.supprimer-le-village').click(function(){
		var DATA='nom=' + nomvillageDelete + '&id=' + idvillageDelete;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: "http://localhost/aergus/web/app_dev.php/aergus/admin/adresse/delete/village/" + idvillageDelete,
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$('#supprimer-un-village').modal('hide');
				$("#zone-village").empty();
				$("#zone-village").append(data);
	            $('#loading').hide();
	        }
	    });  
	});

	$('.supprimer-block').click(function(){
		idblockDelete=$(this).attr('name');
		nomblockDelete=$(this).attr('id');
		$("#supprimer-un-block").modal("show");
	});

	$('.supprimer-le-block').click(function(){
		var DATA='nom=' + nomblockDelete + '&id=' + idblockDelete;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: "http://localhost/aergus/web/app_dev.php/aergus/admin/adresse/delete/block/" + idblockDelete,
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$('#supprimer-un-block').modal('hide');
				$("#zone-block").empty();
				$("#zone-block").append(data);
	            $('#loading').hide();
	        }
	    });  
	});

	
});