import "jquery";
import "../scss/main.scss";
import bulmaAccordion from '../../node_modules/bulma-extensions/bulma-accordion/dist/bulma-accordion.min.js';


var typingTimer; 
function titulares_beneficiarios_info(inputs)
{
	var beneficiarios_names = ""
	var titulares_names = ""
	var titulares_stock = 0
	inputs["titular1_specialinfo"] = ""
	inputs["titular2_specialinfo"] = ""
	inputs["titular3_specialinfo"] = ""
	inputs["beneficiario1_info"] = ""
	inputs["beneficiario2_info"] = ""
	inputs["beneficiario3_info"] = ""
	inputs["beneficiario4_info"] = ""
	inputs["beneficiario1_info2"] = ""
	inputs["beneficiario2_info2"] = ""
	inputs["beneficiario3_info2"] = ""
	inputs["beneficiario4_info2"] = ""

	if(inputs["titular1_name"]!="")
	{
		titulares_names += inputs["titular1_name"]
		titulares_stock += parseInt(inputs["titular1_stock"])
		inputs["titular1_specialinfo"] = "a) "+inputs["titular1_stock"]+" acciones por parte de "+inputs["titular1_name"]+" a favor de "+inputs["beneficiario1_name"]

	}
	if(inputs["titular2_name"]!="")
	{
		titulares_names += ", "+inputs["titular2_name"]
		titulares_stock += parseInt(inputs["titular1_stock"])
		inputs["titular2_specialinfo"] = "b) "+inputs["titular2_stock"]+" acciones por parte de "+inputs["titular2_name"]+" a favor de "+inputs["beneficiario1_name"]


	}
	if(inputs["titular3_name"]!="")
	{
		titulares_names += ", "+inputs["titular3_name"]
		titulares_stock += parseInt(inputs["titular1_stock"])
		inputs["titular3_specialinfo"] = "c) "+inputs["titular3_stock"]+" acciones por parte de "+inputs["titular3_name"]+" a favor de "+inputs["beneficiario1_name"]
	}

	if(inputs["beneficiario1_name"]!="")
	{
		beneficiarios_names += inputs["beneficiario1_name"]
		inputs["beneficiario1_info"]= "a) "+inputs["beneficiario1_stock"]+" acciones a favor de "+inputs["beneficiario1_name"]
		if(inputs["titular2_name"]!="")
			inputs["beneficiario1_info2"] = "a) "+inputs["beneficiario1_stock"]+" acciones por parte del señor "+inputs[inputs["beneficiario1_stock_from"]+"_name"]+" a favor de "+inputs["beneficiario1_name"]
	}
	if(inputs["beneficiario2_name"]!="")
	{
		beneficiarios_names += ", "+inputs["beneficiario2_name"]
		inputs["beneficiario2_info"]= "b) "+inputs["beneficiario2_stock"]+" acciones a favor de "+inputs["beneficiario2_name"]
		if(inputs["titular2_name"]!="")
			inputs["beneficiario2_info2"] = "b) "+inputs["beneficiario2_stock"]+" acciones por parte del señor "+inputs[inputs["beneficiario2_stock_from"]+"_name"]+" a favor de "+inputs["beneficiario2_name"]
	}
	if(inputs["beneficiario3_name"]!="")
	{
		beneficiarios_names += ", "+inputs["beneficiario3_name"]
		inputs["beneficiario3_info"]= "c) "+inputs["beneficiario3_stock"]+" acciones a favor de "+inputs["beneficiario3_name"]
		if(inputs["titular2_name"]!="")
			inputs["beneficiario3_info2"] = "c) "+inputs["beneficiario3_stock"]+" acciones por parte del señor "+inputs[inputs["beneficiario3_stock_from"]+"_name"]+" a favor de "+inputs["beneficiario3_name"]
	}
	if(inputs["beneficiario4_name"]!="")
	{
		beneficiarios_names += ", "+inputs["beneficiario4_name"]
		inputs["beneficiario4_info"]= "d) "+inputs["beneficiario4_stock"]+" acciones a favor de "+inputs["beneficiario4_name"]
		if(inputs["titular2_name"]!="")
			inputs["beneficiario4_info2"] = "d) "+inputs["beneficiario4_stock"]+" acciones por parte del señor "+inputs[inputs["beneficiario4_stock_from"]+"_name"]+" a favor de "+inputs["beneficiario4_name"]
	}


	inputs["beneficiarios_names"] = beneficiarios_names;
	inputs["titulares_names"] = titulares_names;
	inputs["titulares_stock"] = titulares_stock;
	return inputs;
}
function sellers_buyers_info(inputs)
{
	var sellers_info = "";
	var buyers_info = "";
	var sellers_names = "";
	var buyers_names = "";
	var helper = 0;
	inputs["seller1_tosale_info1"] = ""
	inputs["seller1_tosale_info2"] = ""
	inputs["seller1_tosale_info3"] = ""

	inputs["buyer1_tobuy_info1"] = ""
	inputs["buyer1_tobuy_info2"] = ""
	inputs["buyer1_tobuy_info3"] = ""
	inputs["buyer1_tobuy_info4"] = ""
	inputs["buyer1_tobuy_info5"] = ""
	inputs["buyer1_tobuy_info6"] = ""

	inputs["seller2_tosale_info1"] = ""
	inputs["seller2_tosale_info2"] = ""
	inputs["seller2_tosale_info3"] = ""

	inputs["buyer2_tobuy_info1"] = ""
	inputs["buyer2_tobuy_info2"] = ""
	inputs["buyer2_tobuy_info3"] = ""
	inputs["buyer2_tobuy_info4"] = ""
	inputs["buyer2_tobuy_info5"] = ""
	inputs["buyer2_tobuy_info6"] = ""

	inputs["seller3_tosale_info1"] = ""
	inputs["seller3_tosale_info2"] = ""
	inputs["seller3_tosale_info3"] = ""

	inputs["buyer3_tobuy_info1"] = ""
	inputs["buyer3_tobuy_info2"] = ""
	inputs["buyer3_tobuy_info3"] = ""
	inputs["buyer3_tobuy_info4"] = ""
	inputs["buyer3_tobuy_info5"] = ""
	inputs["buyer3_tobuy_info6"] = ""

	inputs["seller4_tosale_info1"] = ""
	inputs["seller4_tosale_info2"] = ""
	inputs["seller4_tosale_info3"] = ""

	inputs["buyer4_tobuy_info1"] = ""
	inputs["buyer4_tobuy_info2"] = ""
	inputs["buyer4_tobuy_info3"] = ""
	inputs["buyer4_tobuy_info4"] = ""
	inputs["buyer4_tobuy_info5"] = ""
	inputs["buyer4_tobuy_info6"] = ""

	inputs["seller5_tosale_info1"] = ""
	inputs["seller5_tosale_info2"] = ""
	inputs["seller5_tosale_info3"] = ""

	inputs["buyer5_tobuy_info1"] = ""
	inputs["buyer5_tobuy_info2"] = ""
	inputs["buyer5_tobuy_info3"] = ""
	inputs["buyer5_tobuy_info4"] = ""
	inputs["buyer5_tobuy_info5"] = ""
	inputs["buyer5_tobuy_info6"] = ""

	if(inputs["seller1_name"]!="")
	{
		sellers_info += inputs["seller1_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
		inputs["seller1_city"]+", quien actúa en nombre propio, identificado con la cédula de ciudadanía No "+
		inputs["seller1_id"]+". "

		sellers_names += inputs["seller1_name"];

		inputs["seller1_tosale_info1"] = "a) "+inputs["seller1_stock_tosale"]+" acciones en cabeza del señor "+inputs["seller1_name"]
		helper = (inputs["seller1_stock_tosale"]*inputs["seller1_stock_%"])/inputs["seller1_stock"];
		inputs["seller1_tosale_info2"] = "a) El señor "+inputs["seller1_name"]+" la cantidad de "+inputs["seller1_stock_tosale"]+" acciones que representan el "+helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]
		inputs["seller1_tosale_info3"] = "a) El señor "+inputs["seller1_name"]+" la suma de $"+inputs["seller1_stock_total_price"]+" por "+inputs["seller1_stock_tosale"]+" acciones nominativas ordinarias";
	}
	if(inputs["seller2_name"]!="")
	{
		sellers_info += inputs["seller2_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
		inputs["seller2_city"]+", quien actúa en nombre propio, identificado con la cédula de ciudadanía No "+
		inputs["seller2_id"]+". "

		sellers_names += ", "+inputs["seller2_name"];
		inputs["seller2_tosale_info1"] = "b) "+inputs["seller2_stock_tosale"]+" acciones en cabeza del señor "+inputs["seller2_name"]
		helper = (inputs["seller2_stock_tosale"]*inputs["seller2_stock_%"])/inputs["seller2_stock"];
		inputs["seller2_tosale_info2"] = "a) El señor "+inputs["seller2_name"]+" la cantidad de "+inputs["seller2_stock_tosale"]+" acciones que representan el "+helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]
		inputs["seller2_tosale_info3"] = "a) El señor "+inputs["seller2_name"]+" la suma de $"+inputs["seller2_stock_total_price"]+" por "+inputs["seller2_stock_tosale"]+" acciones nominativas ordinarias";

	}
	if(inputs["seller3_name"]!="")
	{
		sellers_info += inputs["seller3_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
		inputs["seller3_city"]+", quien actúa en nombre propio, identificado con la cédula de ciudadanía No "+
		inputs["seller3_id"]+". "

		sellers_names += ", "+inputs["seller3_name"];
		inputs["seller3_tosale_info1"] = "c) "+inputs["seller3_stock_tosale"]+" acciones en cabeza del señor "+inputs["seller3_name"]
		helper = (inputs["seller3_stock_tosale"]*inputs["seller3_stock_%"])/inputs["seller3_stock"];
		inputs["seller3_tosale_info2"] = "a) El señor "+inputs["seller3_name"]+" la cantidad de "+inputs["seller3_stock_tosale"]+" acciones que representan el "+helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]
		inputs["seller3_tosale_info3"] = "a) El señor "+inputs["seller3_name"]+" la suma de $"+inputs["seller3_stock_total_price"]+" por "+inputs["seller3_stock_tosale"]+" acciones nominativas ordinarias";
	}
	if(inputs["seller4_name"]!="")
	{
		sellers_info += inputs["seller4_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
		inputs["seller4_city"]+", quien actúa en nombre propio, identificado con la cédula de ciudadanía No "+
		inputs["seller4_id"]+". "

		sellers_names += ", "+inputs["seller4_name"];
		inputs["seller4_tosale_info1"] = "d) "+inputs["seller4_stock_tosale"]+" acciones en cabeza del señor "+inputs["seller4_name"]
		helper = (inputs["seller4_stock_tosale"]*inputs["seller4_stock_%"])/inputs["seller4_stock"];
		inputs["seller4_tosale_info2"] = "a) El señor "+inputs["seller4_name"]+" la cantidad de "+inputs["seller4_stock_tosale"]+" acciones que representan el "+helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]
		inputs["seller4_tosale_info3"] = "a) El señor "+inputs["seller4_name"]+" la suma de $"+inputs["seller4_stock_total_price"]+" por "+inputs["seller4_stock_tosale"]+" acciones nominativas ordinarias";

	}
	if(inputs["seller5_name"]!="")
	{
		sellers_info += inputs["seller5_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
		inputs["seller5_city"]+", quien actúa en nombre propio, identificado con la cédula de ciudadanía No "+
		inputs["seller5_id"]+". "

		sellers_names += ", "+inputs["seller5_name"];
		inputs["seller5_tosale_info1"] = "e) "+inputs["seller5_stock_tosale"]+" acciones en cabeza del señor "+inputs["seller5_name"]
		helper = (inputs["seller5_stock_tosale"]*inputs["seller5_stock_%"])/inputs["seller5_stock"];
		inputs["seller5_tosale_info2"] = "a) El señor "+inputs["seller5_name"]+" la cantidad de "+inputs["seller5_stock_tosale"]+" acciones que representan el "+helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]
		inputs["seller5_tosale_info3"] = "a) El señor "+inputs["seller5_name"]+" la suma de $"+inputs["seller5_stock_total_price"]+" por "+inputs["seller5_stock_tosale"]+" acciones nominativas ordinarias";

	}

	if(inputs["buyer1_name"]!="")
	{
		buyers_info += inputs["buyer1_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
		inputs["buyer1_city"]+", quien actúa en nombre propio, identificado con la cédula de ciudadanía No "+
		inputs["buyer1_id"]+". "

		helper = (parseInt(inputs["buyer1_stock_tobuy"],10)*parseInt(inputs[inputs["buyer1_stock_from"]+"_stock_%"],10))/parseInt(inputs[inputs["buyer1_stock_from"]+"_stock"],10);

		buyers_names += inputs["buyer1_name"];
		inputs["buyer1_tobuy_info1"] = "a) "+inputs["buyer1_stock_tobuy"]+" acciones a favor del señor "+inputs["buyer1_name"]
		inputs["buyer1_tobuy_info2"] = "a) Al señor "+inputs["buyer1_name"]+" la cantidad de "+inputs["buyer1_stock_tobuy"]+" acciones que representan el "+helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]
		inputs["buyer1_tobuy_info3"] = "a) Del señor "+inputs["buyer1_name"]+" la suma de $"+inputs["buyer1_stock_toexpend"]+" por "+inputs["buyer1_stock_tobuy"]+" acciones nominativas ordinarias";
		inputs["buyer1_tobuy_info4"] = "a) "+inputs["buyer1_stock_tobuy"]+" acciones en cabeza del señor "+inputs[inputs["buyer1_stock_from"]+"_name"]+" a favor del señor "+inputs["buyer1_name"];
		inputs["buyer1_tobuy_info5"] = "a) El señor "+inputs[inputs["buyer1_stock_from"]+"_name"]+" la cantidad de "+inputs["buyer1_stock_tobuy"]+" acciones que representan el "+
		helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]+" a favor del señor "+inputs["buyer1_name"];

		inputs["buyer1_tobuy_info6"] = "a) El señor "+inputs[inputs["buyer1_stock_from"]+"_name"]+" la suma de $"+inputs["buyer1_stock_toexpend"]+" por "+inputs["buyer1_stock_tobuy"]+" acciones nominativas ordinarias por parte de señor "+inputs["buyer1_name"];

	}
	if(inputs["buyer2_name"]!="")
	{
		buyers_info += inputs["seller2_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
		inputs["buyer2_city"]+", quien actúa en nombre propio, identificado con la cédula de ciudadanía No "+
		inputs["buyer2_id"]+". "

		helper = (parseInt(inputs["buyer2_stock_tobuy"],10)*parseInt(inputs[inputs["buyer2_stock_from"]+"_stock_%"],10))/parseInt(inputs[inputs["buyer2_stock_from"]+"_stock"],10);
		buyers_names += ", "+inputs["buyer2_name"];

		inputs["buyer2_tobuy_info1"] = "b) "+inputs["buyer2_stock_tobuy"]+" acciones a favor del señor "+inputs["buyer2_name"]
		inputs["buyer2_tobuy_info2"] = "b) Al señor "+inputs["buyer2_name"]+" la cantidad de "+inputs["buyer2_stock_tobuy"]+" acciones que representan el "+helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]
		inputs["buyer2_tobuy_info3"] = "b) Del señor "+inputs["buyer2_name"]+" la suma de $"+inputs["buyer2_stock_toexpend"]+" por "+inputs["buyer2_stock_tobuy"]+" acciones nominativas ordinarias";
		inputs["buyer2_tobuy_info4"] = "b) "+inputs["buyer2_stock_tobuy"]+" acciones en cabeza del señor "+inputs[inputs["buyer2_stock_from"]+"_name"]+" a favor del señor "+inputs["buyer2_name"];
		inputs["buyer2_tobuy_info5"] = "b) El señor "+inputs[inputs["buyer2_stock_from"]+"_name"]+" la cantidad de "+inputs["buyer2_stock_tobuy"]+" acciones que representan el "+
		helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]+" a favor del señor "+inputs["buyer2_name"];
		inputs["buyer2_tobuy_info6"] = "b) El señor "+inputs[inputs["buyer2_stock_from"]+"_name"]+" la suma de $"+inputs["buyer2_stock_toexpend"]+" por "+inputs["buyer2_stock_tobuy"]+" acciones nominativas ordinarias por parte de señor "+inputs["buyer2_name"];
	
	}
	if(inputs["buyer3_name"]!="")
	{
		buyers_info += inputs["buyer3_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
		inputs["buyer3_city"]+", quien actúa en nombre propio, identificado con la cédula de ciudadanía No "+
		inputs["buyer3_id"]+". "

		helper = (parseInt(inputs["buyer3_stock_tobuy"],10)*parseInt(inputs[inputs["buyer3_stock_from"]+"_stock_%"],10))/parseInt(inputs[inputs["buyer3_stock_from"]+"_stock"],10);
		buyers_names += ", "+inputs["buyer3_name"];

		inputs["buyer3_tobuy_info1"] = "c) "+inputs["buyer3_stock_tobuy"]+" acciones a favor del señor "+inputs["buyer3_name"]
		inputs["buyer3_tobuy_info2"] = "c) Al señor "+inputs["buyer3_name"]+" la cantidad de "+inputs["buyer3_stock_tobuy"]+" acciones que representan el "+helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]
		inputs["buyer3_tobuy_info3"] = "c) Del señor "+inputs["buyer3_name"]+" la suma de $"+inputs["buyer3_stock_toexpend"]+" por "+inputs["buyer3_stock_tobuy"]+" acciones nominativas ordinarias";
		inputs["buyer3_tobuy_info4"] = "c) "+inputs["buyer3_stock_tobuy"]+" acciones en cabeza del señor "+inputs[inputs["buyer3_stock_from"]+"_name"]+" a favor del señor "+inputs["buyer3_name"];
		inputs["buyer3_tobuy_info5"] = "c) El señor "+inputs[inputs["buyer3_stock_from"]+"_name"]+" la cantidad de "+inputs["buyer3_stock_tobuy"]+" acciones que representan el "+
		helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]+" a favor del señor "+inputs["buyer3_name"];
		inputs["buyer3_tobuy_info6"] = "c) El señor "+inputs[inputs["buyer3_stock_from"]+"_name"]+" la suma de $"+inputs["buyer3_stock_toexpend"]+" por "+inputs["buyer3_stock_tobuy"]+" acciones nominativas ordinarias por parte de señor "+inputs["buyer3_name"];
	
	}
	if(inputs["buyer4_name"]!="")
	{
		buyers_info += inputs["buyer4_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
		inputs["buyer4_city"]+", quien actúa en nombre propio, identificado con la cédula de ciudadanía No "+
		inputs["buyer4_id"]+". "

		helper = (parseInt(inputs["buyer4_stock_tobuy"],10)*parseInt(inputs[inputs["buyer4_stock_from"]+"_stock_%"],10))/parseInt(inputs[inputs["buyer4_stock_from"]+"_stock"],10);
		buyers_names += ", "+inputs["buyer4_name"];

		inputs["buyer4_tobuy_info1"] = "d) "+inputs["buyer4_stock_tobuy"]+" acciones a favor del señor "+inputs["buyer4_name"]
		inputs["buyer4_tobuy_info2"] = "d) Al señor "+inputs["buyer4_name"]+" la cantidad de "+inputs["buyer4_stock_tobuy"]+" acciones que representan el "+helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]
		inputs["buyer4_tobuy_info3"] = "d) Del señor "+inputs["buyer4_name"]+" la suma de $"+inputs["buyer4_stock_toexpend"]+" por "+inputs["buyer4_stock_tobuy"]+" acciones nominativas ordinarias";
		inputs["buyer4_tobuy_info4"] = "d) "+inputs["buyer4_stock_tobuy"]+" acciones en cabeza del señor "+inputs[inputs["buyer4_stock_from"]+"_name"]+" a favor del señor "+inputs["buyer4_name"];
		inputs["buyer4_tobuy_info5"] = "d) El señor "+inputs[inputs["buyer4_stock_from"]+"_name"]+" la cantidad de "+inputs["buyer4_stock_tobuy"]+" acciones que representan el "+
		helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]+" a favor del señor "+inputs["buyer4_name"];
		inputs["buyer4_tobuy_info6"] = "d) El señor "+inputs[inputs["buyer4_stock_from"]+"_name"]+" la suma de $"+inputs["buyer4_stock_toexpend"]+" por "+inputs["buyer4_stock_tobuy"]+" acciones nominativas ordinarias por parte de señor "+inputs["buyer4_name"];
	
	}
	if(inputs["buyer5_name"]!="")
	{
		buyers_info += inputs["buyer5_name"]+", mayor de edad, domiciliado (a) en la ciudad de "+
		inputs["buyer5_city"]+", quien actúa en nombre propio, identificado con la cédula de ciudadanía No "+
		inputs["buyer5_id"]+". "

		helper = (parseInt(inputs["buyer5_stock_tobuy"],10)*parseInt(inputs[inputs["buyer5_stock_from"]+"_stock_%"],10))/parseInt(inputs[inputs["buyer5_stock_from"]+"_stock"],10);
		buyers_names += ", "+inputs["buyer5_name"];

		inputs["buyer5_tobuy_info1"] = "e) "+inputs["buyer5_stock_tobuy"]+" acciones a favor del señor "+inputs["buyer5_name"]
		inputs["buyer5_tobuy_info2"] = "e) Al señor "+inputs["buyer5_name"]+" la cantidad de "+inputs["buyer5_stock_tobuy"]+" acciones que representan el "+helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]
		inputs["buyer5_tobuy_info3"] = "e) Del señor "+inputs["buyer5_name"]+" la suma de $"+inputs["buyer5_stock_toexpend"]+" por "+inputs["buyer5_stock_tobuy"]+" acciones nominativas ordinarias";
		inputs["buyer5_tobuy_info4"] = "e) "+inputs["buyer5_stock_tobuy"]+" acciones en cabeza del señor "+inputs[inputs["buyer5_stock_from"]+"_name"]+" a favor del señor "+inputs["buyer5_name"];
		inputs["buyer5_tobuy_info5"] = "c) El señor "+inputs[inputs["buyer5_stock_from"]+"_name"]+" la cantidad de "+inputs["buyer5_stock_tobuy"]+" acciones que representan el "+
		helper+"% del total del capital suscrito de la sociedad "+inputs["company_name"]+" a favor del señor "+inputs["buyer5_name"];
		inputs["buyer5_tobuy_info6"] = "a) El señor "+inputs[inputs["buyer5_stock_from"]+"_name"]+" la suma de $"+inputs["buyer5_stock_toexpend"]+" por "+inputs["buyer5_stock_tobuy"]+" acciones nominativas ordinarias por parte de señor "+inputs["buyer5_name"];
	
	}

	inputs["sellers_info"] = sellers_info
	inputs["sellers_names"] = sellers_names
	inputs["buyers_info"] = buyers_info
	inputs["buyers_names"] = buyers_names

	return inputs;
}
$(document).ready(function(){

	$("form.process:not([id])").submit(function(e){
		e.preventDefault();
		var btn = $(this).find('.button[type="submit"]'); 
	    btn.toggleClass('is-loading');

	    var inputs = {};
	    inputs["accionista5_approved"] = ""
	    inputs["accionista4_approved"] = ""
	    inputs["accionista3_approved"] = ""
	    inputs["accionista2_approved"] = ""
	    inputs["accionista1_approved"] = ""

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
	$("form.process#acciones").submit(function(e){
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

		//Calcular seller_stock_total, seller_stock_total_price y seller_stock_unit_price
		inputs["seller_stock_total"] = parseInt(inputs["seller1_stock"],10) + parseInt(inputs["seller2_stock"],10)
		+ parseInt(inputs["seller3_stock"],10) + parseInt(inputs["seller4_stock"],10) + parseInt(inputs["seller5_stock"],10);

		inputs["seller_stock_tosale_total"] = parseInt(inputs["seller1_stock_tosale"],10) + parseInt(inputs["seller2_stock_tosale"],10)
		+ parseInt(inputs["seller3_stock_tosale"],10) + parseInt(inputs["seller4_stock_tosale"],10) + parseInt(inputs["seller5_stock_tosale"],10);

		inputs["seller_stock_total_price"] = parseInt(inputs["seller1_stock_total_price"],10) + parseInt(inputs["seller2_stock_total_price"],10)
		+ parseInt(inputs["seller3_stock_total_price"],10) + parseInt(inputs["seller4_stock_total_price"],10)
		+ parseInt(inputs["seller5_stock_total_price"],10);

		inputs["seller_stock_unit_price"] = inputs["seller_stock_total_price"] / inputs["seller_stock_tosale_total"];

		inputs = sellers_buyers_info(inputs);
		console.log("Total acciones: "+inputs["seller_stock_total"]+" - Total acciones a vender: "+inputs["seller_stock_tosale_total"]);
		console.log("Total precio: "+inputs["seller_stock_total_price"]+" - Precio unidad: "+inputs["seller_stock_unit_price"]);

		//Calcular lo tosale_% de cada seller
		inputs["seller1_stock_tosale_%"] = (parseInt(inputs["seller1_stock_tosale"],10)*parseInt(inputs["seller1_stock_%"],10))/parseInt(inputs["seller1_stock_"],10)
		console.log(inputs["seller1_stock_tosale_%"])
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
	$("form.process#cesion").submit(function(e){
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

		//Hay que crear accionista1_stock_new etc. Beneficiario1_info etc beneficiarios_names
		//Accionista1_quorum_stock etc
		var inquorum = [];
		if($('input[name=accionista1_inquorum]:checked').length > 0)
			inquorum.push([inputs["accionista1_name"],inputs["accionista1_stock"],inputs["accionista1_%"]])
		if($('input[name=accionista2_inquorum]:checked').length > 0)
			inquorum.push([inputs["accionista2_name"],inputs["accionista2_stock"],inputs["accionista2_%"]])
		if($('input[name=accionista3_inquorum]:checked').length > 0)
			inquorum.push([inputs["accionista3_name"],inputs["accionista3_stock"],inputs["accionista3_%"]])
		if($('input[name=accionista4_inquorum]:checked').length > 0)
			inquorum.push([inputs["accionista4_name"],inputs["accionista4_stock"],inputs["accionista4_%"]])
		if($('input[name=accionista5_inquorum]:checked').length > 0)
			inquorum.push([inputs["accionista5_name"],inputs["accionista5_stock"],inputs["accionista5_%"]])
		
		//Create quorum shareholders
		for(var i=0; i< inquorum.length; i++)
		{
			inputs["accionista"+(i+1)+"_quorum_name"] = inquorum[i][0]
			inputs["accionista"+(i+1)+"_quorum_stock"] = inquorum[i][1]
			inputs["accionista"+(i+1)+"_quorum_%"] = inquorum[i][2]
		}

		inputs = titulares_beneficiarios_info(inputs)
		inputs["acciones_suscritas"] = parseInt(inputs["accionista1_stock"],10)+parseInt(inputs["accionista2_stock"],10)+parseInt(inputs["accionista3_stock"],10)+
		parseInt(inputs["accionista4_stock"],10)+parseInt(inputs["accionista5_stock"],10)
	
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
		inputs["company_acciones_nominal"] = parseInt(inputs["company_capital_suscrito"],10) / parseInt(inputs["company_capital_suscrito_acciones_total"],10)
		console.log("Nominal: "+inputs["company_acciones_nominal"])
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
