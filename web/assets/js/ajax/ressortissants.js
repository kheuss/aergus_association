$("document").ready(function(){

	var idRessortissantDelete;
	var nomRessortissantDelete;
	var tableauId=new Array();
	$(".cocher-suppimer-multiple").hide();
	$(".bouton-supprimer-tous").hide();
	$(".bouton-supprimer-annuler").hide();

	$('#ressortissant-ajouter input').parent('div').prepend('<div class="error"></div>');
	$('#aergus_association_ressortissant_dateDeNaissance').prevAll('.error').hide();
	$("#ressortissant-ajouter").submit(function(){

		var nom=$('#aergus_association_ressortissant_nom').val();
		var prenom=$('#aergus_association_ressortissant_prenom').val();
		var numero=$('#aergus_association_ressortissant_numeroDeTelephone').val();
		var naissance=$('#aergus_association_ressortissant_dateDeNaissance').val();
		var section=$('#aergus_association_ressortissant_section').val();
		var annee=$('#aergus_association_ressortissant_anneeVenu').val();

		var verif=true;

		if(!/^[a-z]{2,}$/i.test(nom)){
			$('#aergus_association_ressortissant_nom').prevAll('.error').empty();
			$('#aergus_association_ressortissant_nom').prevAll('.error').append('Le nom doit comporter que des lettres et en avoir au moins deux');
			verif=false;
		}
		else{
			$('#aergus_association_ressortissant_nom').prevAll('.error').empty();
		}

		if(!/^7(7|6|8) ?\d{3} ?\d{2} ?\d{2}$/i.test(numero)){
			$('#aergus_association_ressortissant_numeroDeTelephone').prevAll('.error').empty();
			$('#aergus_association_ressortissant_numeroDeTelephone').prevAll('.error').append('Format 7(7,6,8) XXX XX XX ou 7(7,6,8)XXXXXXX');
			verif=false;
		}
		else{
			$('#aergus_association_ressortissant_numeroDeTelephone').prevAll('.error').empty();
		}

		if(!/^[ a-z]{2,}$/i.test(prenom)){
			$('#aergus_association_ressortissant_prenom').prevAll('.error').empty();
			$('#aergus_association_ressortissant_prenom').prevAll('.error').append('Le prenom doit comporter que des lettres et en avoir au moins deux');
			verif=false;
		}
		else{
			$('#aergus_association_ressortissant_prenom').prevAll('.error').empty();
		}

		if(!/^\d{4}$/i.test(annee)){
			$('#aergus_association_ressortissant_anneeVenu').prevAll('.error').empty();
			$('#aergus_association_ressortissant_anneeVenu').prevAll('.error').append('Une annee doit avoir que 4 chiffres');
			verif=false;
		}
		else{
			$('#aergus_association_ressortissant_anneeVenu').prevAll('.error').empty();
		}

		if(verif==true){
			var DATA='nom=' + nom + '&prenom='+prenom + '&numero='+numero+ '&naisssance='+naissance + '&section='+section + '&annee=' +annee;
			$('#loading').show();
			$.ajax({
		        type: "POST",
		        url: "http://localhost/aergus/web/app_dev.php/aergus/admin/ressortissant/ajouter",
		        data: DATA,
		        dataType: 'html',
		        success: function(data){
					$("#zone-ressorissats").empty();
					$("#zone-ressorissats").append(data);
					$('#ajouter-un-ressortissant').modal('hide');
		            $('#loading').hide();
		        }
		    });  
		}

		return false;
	});
	
	$('.supprimer-ressortissant').click(function(){
		idRessortissantDelete=$(this).attr('name');
		nomRessortissantDelete=$(this).attr('id');
		$("#supprimer-un-ressortissant").modal("show");
	});

	$('.supprimer-le-ressortissant').click(function(){
		var DATA='nom=' + nomRessortissantDelete + '&id=' + idRessortissantDelete;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: "http://localhost/aergus/web/app_dev.php/aergus/admin/ressortissant/delete/" + nomRessortissantDelete,
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$('#supprimer-un-ressortissant').modal('hide');
				$("#zone-ressorissats").empty();
				$("#zone-ressorissats").append(data);
	            $('#loading').hide();
	        }
	    });  
	});

	$('.modifier-ressortissant').click(function(){
		id=$(this).attr('name');
		nom=$(this).attr('id');
		var DATA='nom=' + nom + '&id=' + id;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: $(this).attr('href'),
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$("#modifier-un-ressortissant").empty();
				$("#modifier-un-ressortissant").append(data);
	            $('#loading').hide();
				$('#modifier-un-ressortissant').modal('show');
	        }
	    });  
		return false;
	});

	$('#ressortissant-modifier').submit(function(){
		var lien=$('#ressortissant-modifier').attr('action');
		var id=$('#ressortissant-modifier').attr('name');
		var nom=$('#ressortissant-modifier #aergus_association_ressortissant_nom').val();
		var prenom=$('#ressortissant-modifier #aergus_association_ressortissant_prenom').val();
		var numero=$('#ressortissant-modifier #aergus_association_ressortissant_numeroDeTelephone').val();
		var naissance=$('#ressortissant-modifier #aergus_association_ressortissant_dateDeNaissance').val();
		var section=$('#ressortissant-modifier #aergus_association_ressortissant_section').val();
		var annee=$('#ressortissant-modifier #aergus_association_ressortissant_anneeVenu').val();
		alert(lien);

		var verif=true;

		if(!/^[a-z]{2,}$/i.test(nom)){
			$('#ressortissant-modifier #aergus_association_ressortissant_nom').prevAll('.error').empty();
			$('#ressortissant-modifier #aergus_association_ressortissant_nom').prevAll('.error').append('Le nom doit comporter que des lettres et en avoir au moins deux');
			verif=false;
		}
		else{
			$('#ressortissant-modifier #aergus_association_ressortissant_nom').prevAll('.error').empty();
		}

		if(!/^7(7|6|8) ?\d{3} ?\d{2} ?\d{2}$/i.test(numero)){
			$('#ressortissant-modifier #aergus_association_ressortissant_numeroDeTelephone').prevAll('.error').empty();
			$('#ressortissant-modifier #aergus_association_ressortissant_numeroDeTelephone').prevAll('.error').append('Format 7(7,6,8) XXX XX XX ou 7(7,6,8)XXXXXXX');
			verif=false;
		}
		else{
			$('#ressortissant-modifier #aergus_association_ressortissant_numeroDeTelephone').prevAll('.error').empty();
		}

		if(!/^[ a-z]{2,}$/i.test(prenom)){
			$('#ressortissant-modifier #aergus_association_ressortissant_prenom').prevAll('.error').empty();
			$('#ressortissant-modifier #aergus_association_ressortissant_prenom').prevAll('.error').append('Le prenom doit comporter que des lettres et en avoir au moins deux');
			verif=false;
		}
		else{
			$('#ressortissant-modifier #aergus_association_ressortissant_prenom').prevAll('.error').empty();
		}

		if(!/^\d{4}$/i.test(annee)){
			$('#ressortissant-modifier #aergus_association_ressortissant_anneeVenu').prevAll('.error').empty();
			$('#ressortissant-modifier #aergus_association_ressortissant_anneeVenu').prevAll('.error').append('Une annee doit avoir que 4 chiffres');
			verif=false;
		}
		else{
			$('#ressortissant-modifier #aergus_association_ressortissant_anneeVenu').prevAll('.error').empty();
		}

		if(verif==true){
			var DATA='id=' + id + '&nom=' + nom + '&prenom='+prenom + '&numero='+numero+ '&naisssance='+naissance + '&section='+section + '&annee=' +annee;
			$('#loading').show();
			$.ajax({
		        type: "POST",
		        url: $('#ressortissant-modifier').attr('action'),
		        data: DATA,
		        dataType: 'html',
		        success: function(data){
					$("#zone-ressorissats").empty();
					$("#zone-ressorissats").append(data);
					$('#modifier-un-ressortissant').modal('hide');
					$('#modifier-un-ressortissant').hide();
		            $('#loading').hide();
		        }
		    });  
		}
		return false;
	});

	$('.afficher-ressortissant').click(function(){
		id=$(this).attr('name');
		nom=$(this).attr('id');
		var DATA='nom=' + nom + '&id=' + id;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: $(this).attr('href'),
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$("#modifier-un-ressortissant").empty();
				$("#modifier-un-ressortissant").append(data);
	            $('#loading').hide();
				$('#modifier-un-ressortissant').modal('show');
	        }
	    });  
		return false;
	});

	$('.restaurer-ressortissant').click(function(){
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url:"http://localhost/aergus/web/app_dev.php/aergus/admin/ressortissant/cocher-restaurer",
	        dataType: 'html',
	        success: function(data){
				$("#modifier-un-ressortissant").empty();
				$("#modifier-un-ressortissant").append(data);
	            $('#loading').hide();
				$('#modifier-un-ressortissant').modal('show');
	        }
	    });  
		return false;
	});

	$('.restaurer-les-ressortissants').click(function(){
		var tableauId=new Array();
		var i=0;
		$(".cocher-restaurer:checked").each(function(){
			tableauId[i]=$(this).attr('name');
			i++;
		})
		var DATA = 'tableauId=' + JSON.stringify(tableauId);
		$.ajax({
			type: "POST",
	        url:"http://localhost/aergus/web/app_dev.php/aergus/admin/ressortissant/restaurer",
	        dataType: 'html',
	        data: DATA,
	        success: function(data){
				$("#zone-ressorissats").empty();
				$("#zone-ressorissats").append(data);
				$('#modifier-un-ressortissant').modal('hide');
				$('#modifier-un-ressortissant').hide();
	            $('#loading').hide();
		    }
		})
	});

	$('.bouton-supprimer-multible').click(function(){
		$(".cocher-suppimer-multiple").show();
		$(".bouton-supprimer-tous").show();
		$(".bouton-supprimer-annuler").show();
	});

	$('.bouton-supprimer-annuler').click(function(){
		$(".cocher-suppimer-multiple").hide();
		$(".bouton-supprimer-tous").hide();
		$(".bouton-supprimer-annuler").hide();
	});

	$('.bouton-supprimer-tous').click(function(){
		var tableauIds=new Array();
		var i=0;
		$(".supprimer-multiple-check:checked").each(function(){
			tableauIds[i]=$(this).attr('name');
			i++;
		})
		var DATA = 'tableauId=' + JSON.stringify(tableauIds);
		$.ajax({
			type: "POST",
	        url:"http://localhost/aergus/web/app_dev.php/aergus/admin/ressortissant/supprimer-tous",
	        dataType: 'html',
	        data: DATA,
	        success: function(data){
				$("#zone-ressorissats").empty();
				$("#zone-ressorissats").append(data);
				$(".cocher-suppimer-multiple").hide();
				$(".bouton-supprimer-tous").hide();
				$(".bouton-supprimer-annuler").hide();
	            $('#loading').hide();
		    }
		})
	});

	$('.imprimer-ressortissant').click(function(){
		window.print();
	});
});