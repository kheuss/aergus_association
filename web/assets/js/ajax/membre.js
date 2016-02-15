$("document").ready(function(){

	var nomBureau;
	var membreBureau=false;
	$('.ressortissant-membre-check').click(function(){
		nomBureau=$('#bureau').val();
		var id=$(this).attr('id');
		var type='formulaire';
		var DATA='type=' + type+'&bureau=' + nomBureau + '&id='+ id;
		$("#ajouter-un-membre").modal("hide");
		$.ajax({
			type: "POST",
       		url: 'http://localhost/aergus/web/app_dev.php/aergus/admin/membre/Bureau%202014-2015/'+ id,
        	data: DATA,
        	dataType: 'html',
	        success: function(data){
				$('#ajouter-le-membre').modal('show');
				$("#ajouter-le-membre").empty();
				$("#ajouter-le-membre").append(data);
	            $('#loading').hide();
	        }
		});
	});

	$(".membrebureauverif").click(function(){
		if($(this).is(':checked')){
			membreBureau=true;
			$("#membre-ajouter #fonction").attr('disabled',false);
		}
		else{
			membreBureau=false;
			$("#membre-ajouter #fonction").attr('disabled',true);
		}

	});
	$('.membre-suivant').click(function(){
		var bureau=$('.info-base').val();
		var id=$('.info-base').attr('name');
		var type='inscrire';
		if($('#membre-ajouter #numeroDeChambre').val()==""){
			$('#membre-ajouter .error').empty();
			$('#membre-ajouter .error').append('Ce champ est vide');
		}
		else{
			var chambre=$('#membre-ajouter #numeroDeChambre').val();
			var block=$('#membre-ajouter #block').val();
			var village=$('#membre-ajouter #village').val();
			var niveau=$('#membre-ajouter #niveau').val();
			var section=$('#membre-ajouter #section').val();
			var fonction=$('#membre-ajouter #fonction').val();
			if(!/^\d+$/i.test(chambre)){
				$('#membre-ajouter .error').empty();
				$('#membre-ajouter .error').append('Il doit avoir des nombres');
			}
			else{
				$('#membre-ajouter .error').empty();
					var DATA='type='+type + '&id=' + id +'&chambre=' + chambre + '&block='+ block +'&village='+village+'&niveau='+niveau+'&section='+section+ '&membreBureau='+membreBureau+'&fonction='+fonction;
					$.ajax({
						type: "POST",
			       		url: 'http://localhost/aergus/web/app_dev.php/aergus/admin/membre/Bureau%202014-2015/'+ id,
			        	data: DATA,
			        	dataType: 'html',
				        success: function(data){
							$('#ajouter-le-membre').empty().modal('hide');
							$("#ajouter-un-membre").empty();
							$("#ajouter-un-membre").append(data);
							$("#ajouter-un-membre").modal('show');
				            $('#loading').hide();
				        }
					});
				
			}
		}
	});
});