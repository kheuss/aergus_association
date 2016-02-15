$("document").ready(function(){

	var idDeleteBureau;
    $('.ajax_file').on('change', function(){
	    // On récupère les élément du DOM
	    var $this = $(this);
	    var $loadingBar = $this.siblings('.progress').children();
	    var $label = $this.siblings('label');
	    var $input = $this.siblings('input[type=hidden]');

	    // On récupère le fichier
	    var file = $this[0].files[0];
	    var nomFichier=file.name;
	    var array=nomFichier.split('.');
	    var extension=array[array.length -1];

	    if(extension=='pdf' || extension=='doc' || extension=='docx') {

		    // On supprime le bouton et on affiche la barre de progression
		    /*$label.remove();*/
		    $loadingBar.parent().removeClass('hidden');

		    // On crée un FormData, c'est ce qu'on va envoyer au serveur
		    var data = new FormData();
		    data.append('file', file);

		    $.ajax({
			    type: 'POST',
			    // On récupère l'url dans l'attribut data-target
			    url: $this.data('target'),
			    // On passe le FormData en paramètre
			    data: data,
			    // On ne précise pas le contentType pour l'upload de fichier
			    contentType: false,
			    // Comme on passe directement un FormData on désactive le processData
			    processData: false,
			    success: function(response){
			        // On affiche le nom du fichier dans la barre de chargement
			        $loadingBar
			            .css('width', '100%')
			            .removeClass('progress-bar-danger')
			            .addClass('progress-bar-success')
			            .text(file.name);
			        // On met l'id du File fraichement créé dans notre input
			        $input.val(response.id);
			        // On supprimer le <input type="file">
			        /*$this.remove();*/
			    },
			    error: function(response){
			        // On indique qu'il y a une erreur dans la barre de chargement
			        $loadingBar
			            .css('width', '100%')
			            .removeClass('progress-bar-success')
			            .addClass('progress-bar-danger')
			            .text('Erreur');
			        // On supprime le <input type="file">
			        /*$this.remove();*/
			    },

			    xhr: function()
			    {
			        var xhr = $.ajaxSettings.xhr();

			        xhr.upload.addEventListener("progress", function(e){
			            $loadingBar.css('width', e.loaded / e.total * 100 + '%');
			        }, false);

			        return xhr;
			     }
			});
	    }
	    else{
	    	alert('extension non permise');
	    }

	});		

	$('#bureau-ajouter').submit(function(){
		var nom=$('#bureau-ajouter #nom').val();
		if($('#id').val()==""){
			alert('ajouter le programme du bureau un fichier joint');
		}
		else{
			var idProgramme=$('#id').val();
			$('#id').val("");
			$('#loading').show();
	    	var DATA = 'id=' + idProgramme + '&nom='+nom;
	    	$.ajax({
				type: "POST",
				mimeType: "text/html",
				dataType: "html",
				data: DATA,
				url: $('#bureau-ajouter').attr('action'),
				success:function(data){
					$("#zone-bureaux").empty();
					$("#zone-bureaux").append(data);
					$('#ajouter-un-bureau').modal('hide');
					$('#loading').hide();
				}
			});
		}
		return false;
	});

	$('.supprimer-bureau').click(function(){
		idDeleteBureau=$(this).attr('name');
		$('#supprimer-un-bureau').modal('show');
	});

	$('.supprimer-le-bureau').click(function(){

		var DATA='id=' +idDeleteBureau;
		$.ajax({
			 type: "POST",
	        url: 'supprimer-bureau/' + idDeleteBureau,
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$('#supprimer-un-bureau').modal('hide');
				$("#zone-bureaux").empty();
				$("#zone-bureaux").append(data);
	            $('#loading').hide();
	        }
		})
	});

	$('.modifier-bureau').click(function(){
		var type='formulaire';
		idDeleteBureau=$(this).attr('name');
		var DATA='type=' + type + '&id=' + idDeleteBureau;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: $(this).attr('href'),
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$("#modifier-un-bureau").empty();
				$("#modifier-un-bureau").append(data);
	            $('#loading').hide();
				$('#modifier-un-bureau').modal('show');
	        }
	    });  
		return false;
	});

	$('#bureau-modifier').submit(function(){
		var verif='vrai';
		var type='modifier';
		var nom=$('#bureau-modifier #nom').val();
		if($('#id').val()==""){
			DATA='nom=' + nom + '&verif=' + verif + '&type=' + type;
		}
		else{
			var idProgramme=$('#id').val();
			$('#id').val("");
			verif='faux';
			DATA='nom=' + nom + '&verif=' +verif + '&type=' + type + '&idProgramme=' + idProgramme;
		}
		$.ajax({
	        type: "POST",
	        url: $('#bureau-modifier').attr('action'),
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$("#zone-bureaux").empty();
				$("#zone-bureaux").append(data);
	            $('#loading').hide();
				$('#modifier-un-bureau').modal('hide');
	        }
	    }); 
		return false;
	});

	$('#fonction-ajouter').submit(function(){
		var fonction=$('#fonction-ajouter #aergus_association_fonction_libelle').val();
		var DATA='fonction=' + fonction;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: $('#fonction-ajouter').attr('action'),
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$("#zone-fonctions").empty();
				$('#fonction-ajouter #aergus_association_fonction_libelle').val("");
				$("#zone-fonctions").append(data);
	            $('#loading').hide();
	        }
	    });  
		return false;
	});

	var idFonction;
	$('.supprimer-fonction').click(function(){
		idFonction=$(this).attr('name');
		$("#supprimer-une-fonction").modal("show");
	});

	$('.supprimer-la-function').click(function(){
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: 'supprimer-fonction/' + idFonction,
	        dataType: 'html',
	        success: function(data){
				$("#zone-fonctions").empty();
				$("#zone-fonctions").append(data);
				$("#supprimer-une-fonction").modal("hide");
	            $('#loading').hide();
	        }
	    });  
	});

	$('.modifier-fonction').click(function(){
		var type='formulaire';
		var DATA='type=' + type;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: $(this).attr('href'),
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$("#modifier-un-bureau").empty();
				$("#modifier-un-bureau").append(data);
	            $('#loading').hide();
				$('#modifier-un-bureau').modal('show');
	        }
	    });  
		return false;
	});

	$('#fonction-modifier').submit(function(){
		var type='modifier';
		var fonction=$('#fonction-modifier #aergus_association_fonction_libelle').val();
		var DATA='fonction=' + fonction +'&type=' + type;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: $('#fonction-modifier').attr('action'),
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$("#zone-fonctions").empty();
				$("#zone-fonctions").append(data);
	            $('#loading').hide();
				$('#modifier-un-bureau').modal('hide');
	        }
	    }); 
		return false;
	});


	$('#niveau-ajouter').submit(function(){
		var niveau=$('#niveau-ajouter #aergus_association_niveau_niveau').val();
		var DATA='niveau=' + niveau;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: $('#niveau-ajouter').attr('action'),
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$("#zone-niveaux").empty();
				$('#niveau-ajouter #aergus_association_niveau_niveau').val("");
				$("#zone-niveaux").append(data);
	            $('#loading').hide();
	        }
	    });  
		return false;
	});

	var idNiveau;
	$('.supprimer-niveau').click(function(){
		idNiveau=$(this).attr('name');
		$("#supprimer-un-niveau").modal("show");
	});

	$('.supprimer-le-niveau').click(function(){
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: 'supprimer-niveau/' + idNiveau,
	        dataType: 'html',
	        success: function(data){
				$("#zone-niveaux").empty();
				$("#zone-niveaux").append(data);
				$("#supprimer-un-niveau").modal("hide");
	            $('#loading').hide();
	        }
	    });  
	});

	$('.modifier-niveau').click(function(){
		var type='formulaire';
		var DATA='type=' + type;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: $(this).attr('href'),
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$("#modifier-un-bureau").empty();
				$("#modifier-un-bureau").append(data);
	            $('#loading').hide();
				$('#modifier-un-bureau').modal('show');
	        }
	    });  
		return false;
	});

	$('#niveau-modifier').submit(function(){
		var type='modifier';
		var niveau=$('#niveau-modifier #aergus_association_niveau_niveau').val();
		var DATA='niveau=' + niveau +'&type=' + type;
		$('#loading').show();
		$.ajax({
	        type: "POST",
	        url: $('#niveau-modifier').attr('action'),
	        data: DATA,
	        dataType: 'html',
	        success: function(data){
				$("#zone-niveaux").empty();
				$("#zone-niveaux").append(data);
	            $('#loading').hide();
				$('#modifier-un-bureau').modal('hide');
	        }
	    }); 
		return false;
	});

});