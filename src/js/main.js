import "jquery";
import "../scss/main.scss";

$(document).ready(function(){

	$("form.process:not([id])").submit(function(e){
		e.preventDefault();
		var btn = $(this).find('.button[type="submit"]'); 
	    btn.toggleClass('is-loading');

	    var inputs = {};
		$.each($(this).serializeArray(), function() {
			if(this.name != "template")
		    	inputs[""+this.name] = this.value;
		});
		var file = $(this).find(
			'select[name="template"]').val();
		$.ajax({
			url: "./dist/functions.php",
			type: 'POST',
			dataType: 'json',
			data: {vars: JSON.stringify(inputs),template: file},
			success: function(data, textStatus, xhr){
				if(data.status)
				{
					var downloadUrl = "./dist/"+file+".docx";
					var downloadFrame = document.createElement("iframe"); 
					downloadFrame.setAttribute('src',downloadUrl);
					downloadFrame.setAttribute('class',"screenReaderText"); 
					document.body.appendChild(downloadFrame);

				}

			},
			error: function(xhr,status,error){
				console.log(xhr);
				console.log(status);
				console.log(error);

			},
			complete: function(){
				btn.toggleClass('is-loading');
			}
		});
	})
	$("form.process#estatutos").submit(function(e){
		e.preventDefault();
		var btn = $(this).find('.button[type="submit"]'); 
	    btn.toggleClass('is-loading');

	    var inputs = {};
		var accionistas_info = "";
		$.each($(this).serializeArray(), function() {
			//Vamos creando el "accionista1"
			if(this.name != "template")
		    	inputs[""+this.name] = this.value;
		});
		if(inputs["accionista1_name"]!="")
		{
			accionistas_info += inputs["accionista1_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
			inputs["accionista1_city"]+", "+inputs["accionista1_country"]+",  identificado con cédula de ciudadanía No "+
			inputs["accionista1_id"]

		}
		if(inputs["accionista2_name"]!="")
		{
			accionistas_info += ", "+inputs["accionista2_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
			inputs["accionista2_city"]+", "+inputs["accionista2_country"]+",  identificado con cédula de ciudadanía No "+
			inputs["accionista2_id"]

		}
		if(inputs["accionista3_name"]!="")
		{
			accionistas_info += ", "+inputs["accionista3_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
			inputs["accionista3_city"]+", "+inputs["accionista3_country"]+",  identificado con cédula de ciudadanía No "+
			inputs["accionista3_id"]

		}
		if(inputs["accionista4_name"]!="")
		{
			accionistas_info += ", "+inputs["accionista4_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
			inputs["accionista4_city"]+", "+inputs["accionista4_country"]+",  identificado con cédula de ciudadanía No "+
			inputs["accionista4_id"]

		}
		inputs["accionistas_info"] = accionistas_info;

		//Ahora hay que crear la variables accionistas
		var file = $(this).find(
			'select[name="template"]').val();
		$.ajax({
			url: "./dist/functions.php",
			type: 'POST',
			dataType: 'json',
			data: {vars: JSON.stringify(inputs),template: file},
			success: function(data, textStatus, xhr){
				if(data.status)
				{
					var downloadUrl = "./dist/"+file+".docx";
					var downloadFrame = document.createElement("iframe"); 
					downloadFrame.setAttribute('src',downloadUrl);
					downloadFrame.setAttribute('class',"screenReaderText"); 
					document.body.appendChild(downloadFrame);

				}

			},
			error: function(xhr,status,error){
				console.log(xhr);
				console.log(status);
				console.log(error);

			},
			complete: function(){
				btn.toggleClass('is-loading');
			}
		});
	})
})				
