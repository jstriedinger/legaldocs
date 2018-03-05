import "jquery";
import "../scss/main.scss";

$(document).ready(function(){

	$("form.process").submit(function(e){
		e.preventDefault();
		var btn = $(this).find('.button[type="submit"]'); 
	    btn.toggleClass('is-loading');

	    var inputs = {};
		$.each($(this).serializeArray(), function() {
			if(this.name != "template")
		    	inputs[""+this.name] = this.value;
		});
		console.log(inputs);
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
