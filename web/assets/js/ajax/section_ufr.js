$("document").ready(function(){
	/*
		connaitre la hauteur des elements contenus dans le bloc qui 
		liste l'ensemble des ufr
	*/
	var hauteur=$('#content-ufr').height();
	$('#loading').hide();

	/*
		quand on veut supprimer un ufr
	*/
    $('.supprimer-ufr').click(function(){
    	var idDelete= $(this).attr('name');
    	var nameDelete= $(this).attr('id');
    	$('#loading').show();
		$("#delete").empty();
    	var DATA = 'id=' + idDelete;
    	$.ajax({
			type: "POST",
			mimeType: "text/html",
			dataType: "html",
			data: DATA,
			url: 'http://localhost/aergus/web/app_dev.php/aergus/admin/orientation/ufr/delete/' + nameDelete,
			success:function(data){
    			$('body').addClass('body-confirm');
				$("#delete").empty();
				//on affecte les resultats au div
				$("#delete").append(data);
				//on affiche les resultats avec la transition
				$('#loading').hide();
				/*$('#delete').show();*/
			}
		});
    	return false; 
    });

    /*
		quand on click sur le bouton "annuler" pour ne pas supprimer
    */
    $('.confirmed-no').click(function(){
    	$('body').removeClass('body-confirm');
    	$('#delete').hide();
    	
    });

    /*
		quand on clique sur l'icon pour afficher l'ensemble des sections qui
		se trouve dans une ufr
    */
	$('.ligne').click(function(){
		var id=$(this).attr('name');
		$('.ligne').parents('td').removeClass('click');
		$(this).parents('td').addClass('click');
		$('#sections').css('minHeight',hauteur);
		$('#loading').show();
		$('form').addClass('aergus_association_section_libelle');
		$.ajax({
			type: "get",
			mimeType: "text/html",
			dataType: "html",
			url: 'http://localhost/aergus/web/app_dev.php/aergus/admin/orientation/ufr/' + id,
			success:function(data){
				//on met à jour le div zone_de_rechargement avec les données reçus
				//on vide la div et on le cache
				$("#sections").empty().hide();
				$("#delete").empty().hide();
				//on affecte les resultats au div
				$("#sections").append(data);
				//on affiche les resultats avec la transition
				$('#sections').show();
				$('#loading').hide();
			}
		});
		return false;
	});

	/*
		quand on cique sur l'icon "+" pour ajouter un nouveau ufr 
	*/

	$('#ufr-ajouter').submit(function(){
		var libelle = $('#aergus_association_ufr_libelle').val();
		var nomComplet= $('#aergus_association_ufr_nomComplet').val();
		var DATA = 'libelle=' + libelle + '&nomComplet='+ nomComplet;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: "http://localhost/aergus/web/app_dev.php/aergus/admin/orientation/ufr/ajouter",
	        data: DATA,
	        success: function(data){
	        	if(data=='error'){
	        		$('.error').empty();
	        		$('.error').html('* Ces données existent deja');
	        	}
	        	else{
		            $('body').removeClass('body-overlay');
		        	$("#zone").empty();
		            $('#zone').html(data);
	        	}
	            $('#loading').hide();
	        }
	    });  		

		return false;
	});

	/*
		quand on veut ajouter une nouvelle section
	*/

	$('#section-ajout').submit(function(){
		var id=$("#section-ajout").attr('name');
		var libelle = $('#aergus_association_section_libelle').val();
		var DATA = 'libelle=' + libelle + '&id='+ id;
		$('#loading').show();
		$('#aergus_association_section_libelle').val("");
		$.ajax({
	        type: "POST",
	        url: "http://localhost/aergus/web/app_dev.php/aergus/admin/orientation/ufr/" + id + "/ajouter/section",
	        data: DATA,
	        success: function(data){
	        	$("#section-liste").empty().hide();
	            $('#section-liste').html(data);
	            $('#section-liste').show();
	            $('#loading').hide();
	        }
	    });  

		return false;
	});

	/*
		Annuler la suppression
	*/
	$('.confirmed-no').click(function(){
    	$('#delete').css('display','none');
    	$('body').removeClass('body-confirm');
    });

	/*
		Confirmation de la suppression d'un ufr
	*/
	
    $('.confirmed-yes').click(function(){
		var idDelete= $(this).attr('name');
		var nameDelete= $(this).attr('id');
		$('#loading').show();
		$("#delete").empty();
		$('#delete').css('display','none');
		$('body').removeClass('body-confirm');
		var DATA = 'id=' + idDelete;
		$.ajax({
			type: "POST",
			mimeType: "text/html",
			dataType: "html",
			data: DATA,
			url: 'http://localhost/aergus/web/app_dev.php/aergus/admin/orientation/ufr/delete/' + nameDelete +'/confirmed',
			success:function(data){
	        	$("#zone").empty();
	            $('#zone').html(data);
			}
		});
	    return false; 
    });

    /*
		modifier ufr
    */
    $('.modifier-ufr').click(function(){
    	var idModifier= $(this).attr('name');
    	var nameModifier= $(this).attr('id');
    	$('#loading').show();
    	var DATA = 'id=' + idModifier;
    	$.ajax({
			type: "POST",
			mimeType: "text/html",
			dataType: "html",
			data: DATA,
			url: 'http://localhost/aergus/web/app_dev.php/aergus/admin/orientation/ufr/modifier/' + nameModifier,
			success:function(data){
				$('#loading').hide();
    			$('body').addClass('body-confirm-mod');
				$("#modifier-form").empty();
				$("#modifier-form").append(data);
			}
		});

    	return false;
    });
    $('#ufr-modifier').submit(function(){

    	var libelle = $('.libelle-modifier').val();
    	var nomComplet = $('.nomComplet-modifier').val();
    	var id=$('#ufr-modifier').attr('name');
		var DATA = 'id=' + id +'&libelle=' + libelle + '&nomComplet='+ nomComplet;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: "http://localhost/aergus/web/app_dev.php/aergus/admin/orientation/ufr/modifier",
	        data: DATA,
	        success: function(data){
	            $('body').removeClass('body-confirm-mod');
	            $('body').removeClass('body-confirm');
	        	$("#zone").empty();
	            $('#zone').html(data);
	            $('#loading').hide();
	        }
	    });  	
    	return false;
    });

    /*
		Modifier une section
    */

    $('.modifier-section').click(function(){
    	var idModifier= $(this).attr('name');
    	var nameModifier= $(this).attr('id');
    	$('#loading').show();
    	var DATA = 'id=' + idModifier;
    	$.ajax({
			type: "POST",
			mimeType: "text/html",
			dataType: "html",
			data: DATA,
			url: 'http://localhost/aergus/web/app_dev.php/aergus/admin/orientation/ufr/section/modifier/' + nameModifier,
			success:function(data){
				$('#loading').hide();
    			$('body').addClass('body-confirm-mod');
				$("#modifier-form").empty();
				//on affecte les resultats au div
				$("#modifier-form").append(data);
				//on affiche les resultats avec la transition
				/*$('#modifier-form').show();*/
			}
		});

    	return false;
    });

    $('#section-modifier').submit(function(){

    	var libelle = $('.libelle-modifier-section').val();
    	var id=$('#section-modifier').attr('name');
		var DATA = 'id=' + id +'&libelle=' + libelle;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: "http://localhost/aergus/web/app_dev.php/aergus/admin/orientation/ufr/section/modifier",
	        data: DATA,
	        success: function(data){
	            $('body').removeClass('body-confirm-mod');
	            $('body').removeClass('body-confirm');
	        	$("#section-liste").empty();
	            $('#section-liste').html(data);
	            $('#loading').hide();
	        }
	    });  	
    	return false;
    });

    /*
		quand on veut supprimer une section
	*/
    $('.supprimer-section').click(function(){
    	var idDelete= $(this).attr('name');
    	var nameDelete= $(this).attr('id');
    	$('#loading').show();
		$("#delete").empty();
    	var DATA = 'id=' + idDelete;
    	$.ajax({
			type: "POST",
			mimeType: "text/html",
			dataType: "html",
			data: DATA,
			url: 'http://localhost/aergus/web/app_dev.php/aergus/admin/orientation/ufr/section/delete/' + nameDelete,
			success:function(data){
    			$('body').addClass('body-confirm');
				$("#delete").empty();
				//on affecte les resultats au div
				$("#delete").append(data);
				//on affiche les resultats avec la transition
				$('#loading').hide();
				/*$('#delete').show();*/
			}
		});
    	return false; 
    });

    /*
		Confirmation de la suppression d'une ssection
	*/
	
    $('.confirmed-section-yes').click(function(){
		var idDelete= $(this).attr('name');
		var nameDelete= $(this).attr('id');
		$('#loading').show();
		$("#delete").empty();
		$('#delete').css('display','none');
		$('body').removeClass('body-confirm');
		var DATA = 'id=' + idDelete;
		$.ajax({
			type: "POST",
			mimeType: "text/html",
			dataType: "html",
			data: DATA,
			url: 'http://localhost/aergus/web/app_dev.php/aergus/admin/orientation/ufr/section/delete/' + nameDelete +'/confirmed',
			success:function(data){
	        	$("#section-liste").empty();
	            $('#section-liste').html(data);
			}
		});
	    return false; 
    });

    $('.annuler').click(function(){
        $('body').removeClass('body-confirm');
        $('body').removeClass('body-confirm-mod');
    });


});