function CheckInfoNavegador()
{
	if(navigator.userAgent.toLowerCase().indexOf("opera") >= 0 || navigator.userAgent.toLowerCase().indexOf("presto") >= 0)
	{
		var opera = navigator.appVersion.substr(6,4);
		// opera = ;
		if(opera.substr(0,1) < 9)
		{
			alert("Esta Utilizando una version antigua de su navegador, por favor actualize a la ultima versiÃ³n para que su experiencia en la pagina sea mejor");
			// alerta("Esta Utilizando una version antigua de su navegador, por favor actualize a la ultima versiÃ³n para que su experiencia en la pagina sea mejor");
		}
	}
	//safari
	if((navigator.userAgent.toLowerCase().indexOf("safari") >= 0 && navigator.userAgent.toLowerCase().indexOf("chrome") < 0) && navigator.appVersion.substr(0,1) < 4)
	{
		alerta("Esta Utilizando una version antigua de su navegador, por favor actualize a la ultima versiÃ³n para que su experiencia en la pagina sea mejor");
	}

	//chrome
	if((navigator.userAgent.toLowerCase().indexOf("safari") >= 0 && navigator.userAgent.toLowerCase().indexOf("chrome") >= 0) && navigator.appVersion.substr(0,1) <= 3)
	{
		alerta("Esta Utilizando una version antigua de su navegador, por favor actualize a la ultima versiÃ³n para que su experiencia en la pagina sea mejor");
	}

	if(navigator.userAgent.toLowerCase().indexOf("firefox") >= 0 && navigator.appVersion.substr(0,1) < 3)
	{
		alerta("Esta Utilizando una version antigua de su navegador, por favor actualize a la ultima versiÃ³n para que su experiencia en la pagina sea mejor");
	}

	if(navigator.userAgent.toLowerCase().indexOf("msie") >= 0 || navigator.userAgent.toLowerCase().indexOf("edge") >= 0)
	{
		var edge = navigator.appVersion.split("Edge/");
		edge = edge[1].substr(0,2);
		if(edge < 14)
		{
			alerta("Esta Utilizando una version antigua de su navegador, por favor actualize a la ultima versiÃ³n para que su experiencia en la pagina sea mejor");
		}

	}
}


function InputValidator(oObject)
{

var Expresiones =
				{

					RegID :
							{
								Reg :/^([JGV])([\-][0-9]{4,10})$/,
								Mensaje : "Debe cumplir el formato requerido Ej.: J-000000000"
							},
					RegID2:
							{
								Reg :/^([JGV])([0-9]{0,12})$/,
								Mensaje : "Debe cumplir el formato requerido Ej.: J000000000"

							},
					RegCI:
							{
								Reg :/^([VE])([\-])([0-9]{4,12})$/,
								Mensaje : "Debe cumplir el formato requerido Ej.: V-000000000"

							},

					RegDescrip:
							{
								Reg: /^([ A-Za-z0-9\.\,\-\&\(\)]{0,120})$/i,
								Mensaje : "La razon social o el Nombre no es valida"
							},

					RegDireccion:
							{
								Reg : /^([ A-Za-z0-9\.\,\-\Â°]{0,180})$/i,
								Mensaje : "La direcciÃ³n no es valida"
							},

					RegNombre:
							{
								Reg : /^([ A-Za-z]{0,60})$/i,
								Mensaje: "Este campo no admite caracteres especiales"
							},

					RegApellido:
							{
								Reg:/^([ A-Za-z]{0,60})$/i,
								Mensaje: "Este campo no admite caracteres especiales"
							},

					RegUsuario:
							{
								Reg :/^([ A-Za-z0-9]{0,20})$/i,
								Mensaje: "El usuario no es valido"
							},

					RegAlias:
							{
								Reg : /^([ A-Za-z0-9]{0,20})$/i,
								Mensaje: "Este campo no admite caracteres especiales"
							},

					RegTelef:
							{
								Reg : /^([0-9]{1,3})([0-9]{15})([0-9])$/,
								Mensaje: "El telefono no es valido. Este campo no admite caracteres especiales"
							},

					RegCorreo:
							{
								Reg : /^([A-Za-z0-9])([A-Za-z0-9_\-\.])+@([a-z0-9\-])+\.(([a-z0-9]{2,20})\.)?([a-z0-9]{2,20})$/,
								Mensaje: "El correo no es valido"
							},

					RegClave:
							{
								Reg :/^([ A-Za-z0-9]{0,20})$/,
								Mensaje: "La clave no es valida. Este campo no admite caracteres especiales"
							},

					RegNum:
							{
								Reg : /([0-9\,])/,
								Mensaje : "el numero no es valido"
							},

					RegNumsimple:
								{
									Reg : /([0-9])/,
									Mensaje: "el numero no es valido"
								},

					RegSerial:
								{
									Reg : /^([0-9]{7})$/i,
									Mensaje: "el Serial no es valido"
								},

					RegComentario :
									{
										Reg : /^([ A-Za-z0-9\.\,\-\&\(\)]{0,180})$/i,
										Mensaje: "el comentario no es valido"
									},

					RegCodigo :
								{
									Reg : /^([ A-Za-z0-9]{0,30})$/,
									Mensaje: "el codigo no es valido"
								},

					RegLicencia :
								{
									Reg : /^([ A-Za-z0-9]{0,20})$/i,
									Mensaje: "La licencia no es valida"
								},

					RegNumTran :
								{
									Reg : /^([ A-Za-z0-9]{0,20})$/i,
									Mensaje: "El numero de transacciÃ³n no es valido"
								},

					RegZonaPostal :
									{
										Reg : /([0-9]){0,10}$/,
										Mensaje: "La zona postal no es valida"
									},

					RegClaseSaint :
									{
										Reg : /^([ A-Za-z0-9]{0,10})$/,
										Mensaje : "La clase no es valida"
									},

					RegUserFTP :
									{
										Reg : /([ A-Za-z0-9\.\_\-\@]{0,30})$/i,
										Mensaje : "nombre de usuario no es valido"
									},

					RegNombreDominio :
									{
										Reg : /^([ A-Za-z0-9\.\@\-]{0,50})$/i,
										Mensaje : "Nombre de dominio no es valido"
									},

					RegCtaBancaria :
									{
										Reg : /^([0-9]{20})$/i,
										Mensaje : "Numero de cuenta bancaria no es valido. debe poseer 20 digitos"

									}
				};
	var Class = $(oObject).attr("class").split(" ");
	$.each(Class, function(index, clase)
	{
		if(Expresiones.hasOwnProperty(clase))
		{
			if($(oObject).val().trim() != '')
			{
				if($(oObject).val().trim().match(Expresiones[clase].Reg))
				{
					$("span[for="+$(oObject).attr('id')+"]").addClass("required").html('');
					$(oObject).removeClass('borderRed');


				}
				else
				{
					$(oObject).addClass('borderRed');
					$("span[for="+$(oObject).attr('id')+"]").addClass("required").html(Expresiones[clase].Mensaje)
				}
			}
			else
			{
				$(oObject).removeClass('borderRed');
				$("span[for="+$(oObject).attr('id')+"]").addClass("required").html('');
			}

		}
	});

}

function Telinput() {
    $('input[type="tel"]').intlTelInput({
        // allowDropdown: false,
        // autoHideDialCode: false,
        //autoPlaceholder: true,
        // dropdownContainer: "body",
        //excludeCountries: ["us"],
        geoIpLookup: function (callback) {
            $.get("http://ipinfo.io", function () {}, "jsonp").always(function (resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        initialCountry: "auto",
        preventInvalidNumbers: true,
        // nationalMode: false,
        // numberType: "MOBILE",
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        preferredCountries: ['ve, pa'],
        separateDialCode: true,
        utilsScript: "http://totallib.totalaplicaciones.com/dist/plugins/intl-tel/js/utils.js"
    });

    var reset = function () {};

    // on blur: validate
    var telInput = $('input[type="tel"]');

    telInput.blur(function () {
        reset();
        if ($.trim($(this).val())) {
            if ($(this).intlTelInput("isValidNumber")) {
                reset();
            } else {
                $(this).val("");
            }
        }
    });

    telInput.keypress(function (e) {
        //Si el caracter no es numerico muestra un error y lo elimina
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    });
}

function EvalRegV2(formulario ,callback)
{
	// console.log(formulario);
	$("label").removeClass("required");
	$("*").removeClass('borderRed');
	$("span").removeClass("required");
	var respuesta = true;
	var requerido = 0;
	var Texts = [];
	var Radio = [];
	var checkboxs = [];
	var selects = [];
	var TextArea = [];
	var elements = [];
	var g =0;

var RexClass = new Array()
RexClass  = {
				RegID:"RegID",
				RegID2:"RegID2",
				RegCI:"RegCI",
				RegDescrip:"RegDescrip",
				RegDireccion:"RegDireccion",
				RegNombre:"RegNombre",
				RegApellido:"RegApellido",
				RegUsuario:"RegUsuario",
				RegAlias:"RegAlias",
				RegTlf:"RegTlf",
				RegCorreo:"RegCorreo",
				RegClave:"RegClave",
				RegNum:"RegNum",
				RegNumsimple:"RegNumsimple",
				RegSerial:"RegSerial",
				RegComentario:"RegComentario",
				RegCodigo:"RegCodigo",
				RegLicencia:"RegLicencia",
				RegNumTran:"RegNumTran",
				RegZonaPostal:"RegZonaPostal",
				RegClaseSaint: "RegClaseSaint",
				RegUserFTP: "RegUserFTP",
				RegNombreDominio: "RegNombreDominio",
				RegCtaBancaria: "RegCtaBancaria"
			};


var Mensajes = new Array();
Mensajes =
			{
				RegID: "El RIF es invalido, en caso de Rif J-000000000",
				RegID2:"El RIF es invalido, en caso de Rif J000000000",
				RegCI: "Formato de CI invalido, formato debe ser: V-000000000",
				RegDescrip: "La razon social o el Nombre no es valida",
				RegDireccion: "La direcciÃ³n no es valida",
				RegNombre: "El nombre no es valido",
				RegApellido: "El apellido no es valido",
				RegUsuario: "El usuario no es valido",
				RegAlias: "El alias no es valido",
				RegTelef: "El telefono no es valido",
				RegCorreo: "El correo no es valido",
				RegClave: "La clave no es valida",
				RegNum: "el numero no es valido",
				RegNumsimple: "el numero no es valido",
				RegSerial: "el Serial no es valido",
				RegComentario: "el comentario no es valido",
				RegCodigo: "el codigo no es valido",
				RegLicencia: "La licencia no es valida",
				RegNumTran: "El numero de transacciÃ³n no es valido",
				RegZonaPostal: "La zona postal no es valida",
				RegClaseSaint : "La clase no es valida",
				RegUserFTP : "nombre de usuario no es valido",
				RegNombreDominio : "Nombre de dominio no es valido",
				RegCtaBancaria : "Numero de cuenta bancaria no es valido"
			};

var Expresiones = new Array();
Expresiones =
			{
				RegID: /^([JGV])([\-])([0-9]{4,12})$/,
				RegID2: /^([JGV])([0-9]{4,12})$/,
				RegCI: /^([VE])([\-])([0-9]{4,12})$/,
				RegDescrip: /^([ A-Za-z0-9\.\,\-\&\(\)]{4,120})$/i,
				RegDireccion: /^([ A-Za-z0-9\.\,\-\Â°\n\#\/]{10,180})$/i,
				RegNombre: /^([ A-Za-z]{3,60})$/i,
				RegApellido: /^([ A-Za-z]{3,60})$/i,
				RegUsuario: /^([ A-Za-z0-9]{3,20})$/i,
				RegAlias: /^([ A-Za-z0-9]{3,20})$/i,
				RegTelef: /^\+([0-9]{1,3})([0-9]{15})([0-9])$/,
				RegCorreo: /^([A-Za-z0-9])([A-Za-z0-9_\-\.])+@([a-z0-9\-])+\.(([a-z0-9]{2,20})\.)?([a-z0-9]{2,20})$/,
				RegClave: /^([ A-Za-z0-9]{6,20})$/,
				RegNum: /([0-9\,])/,
				RegNumsimple: /([0-9])/,
				RegSerial : /^([0-9]{7})$/i,
				RegComentario : /^([ A-Za-z0-9\.\,\-\&\(\)]{20,180})$/i,
				RegCodigo : /^([ A-Za-z0-9]{3,30})$/,
				RegLicencia : /^([ A-Za-z0-9]{19,20})$/i,
				RegNumTran : /^([ A-Za-z0-9]{6,20})$/i,
				RegZonaPostal : /([0-9]){4,10}$/,
				RegClaseSaint : /^([ A-Za-z0-9]{1,10})$/,
				RegUserFTP : /([ A-Za-z0-9\.\_\-\@]{6,30})$/i,
				RegNombreDominio : /^([ A-Za-z0-9\.\@\-]{6,50})$/i,
				RegCtaBancaria : /^([0-9]{20})$/i
			};

	Texts = formulario.find(':input[type="text"], input[type="password"], input[type="tel"], input[type="number"], input[type="email"], input[type="time"]');
	Selects = formulario.find('select');
	Radio = $("#"+formulario.attr('id')+ " .RadiosDiv");/*formulario.find(':input[type="radio"]');*/
	// console.log("text: "+Texts);
	Checkboxs = $(".CheckboxDiv");/*formulario.find(':input[type="checkbox"]');*/
	TextArea = formulario.find('textarea');

	var b = [];
	$.each(Radio, function (i, val)
	{
		a = $(val).find(':input');
		b.push($(a).attr('name'));

	});

	$.each(b, function (i, val)
	{
		if($('input:radio[name='+val+']').hasClass('Requerido') == true && $('input:radio[name='+val+']').is(':checked') == false)
		{
			respuesta = false;
			$("label[for="+$('input:radio[name='+val+']').attr('id')+"]").addClass("required");
			requerido++;
		}
	});

	// console.log(Selects);
	$.each(Selects, function (i, val)
	{
		// console.log(Selects[i]);
		if($(Selects[i]).hasClass('Requerido') == true && ($(Selects[i]).val() == null || $(Selects[i]).val() == '' || typeof($(Selects[i]).val())=="undefined" || $(Selects[i]).val() == "-1"))
		{
			// console.log($(Selects[i]).val());
			 respuesta = false;
			$("label[for="+$(Selects[i]).attr('id')+"]").addClass("required");
			requerido++;
			// return false;
		}
	});

	$.each(TextArea, function (i, val)
	{
		// console.log(Selects[i]);
		if($(TextArea[i]).hasClass('Requerido') == true &&  $(TextArea[i]).val() == '')
		{
			// console.log("Selects");
			 respuesta = false;
			$("label[for="+$(TextArea[i]).attr('id')+"]").addClass("required");
			requerido++;
			// return false;
		}
	});

	var c;
	var d = [];

	$.each(Checkboxs, function (i, val)
	{
		c = $(val).find(':input');
		d.push(c.attr('name'));

	});


	$.each(d, function (i, val)
	{
		// console.log("i: "+i);
		// console.log("val: "+val);
		if($('input:checkbox[name='+val+']').hasClass('Requerido') == true && $('input:checkbox[name='+val+']').is(':checked') == false)
		{
			console.log("falso");
			respuesta = false;
			$("label[for="+$('input:checkbox[name='+val+']').attr('id')+"]").addClass("required");
			requerido++;
		}
	});

	/*$.each(Checkboxs, function (i, val)
	{
		if($(Checkboxs).hasClass('Requerido') == true && $(Checkboxs).is(':checked') == false)
		{
			// console.log("Checkboxs");
			 respuesta = false;
			$("label[for="+$(Checkboxs).attr('id')+"]").addClass("required");
			requerido++;
			// return false;
		}
	});*/

	$.each(Texts, function (i, val)
	{
		if($(Texts[i]).hasClass('Requerido') == true && $(Texts[i]).val() == "")
		{
			// console.log("Texts");
			 respuesta = false;
			$("label[for="+$(Texts[i]).attr('id')+"]").addClass("required");
			requerido++;
			// return false;
		}
	});

	// elements = formulario.find(':input[type="text"], input[type="password"], input[type="tel"], input[type="number"]');
	Texts.each(function(i, object)
	{
		$.each(RexClass, function(index, clase)
		{
			if($(Texts[i]).hasClass(clase) == true && $(Texts[i]).val().trim() != '')
			{
				if($(Texts[i]).hasClass('RegCorreo') == true)
				{
					$(Texts[i]).val($(Texts[i]).val().toLowerCase());
				}
				// console.log($(Texts[i]).val() + 'id '+ $(Texts[i]).attr('id'));
				if ($(Texts[i]).val().trim().match(Expresiones[clase]))
				{
					$("span[for="+$(Texts[i]).attr('id')+"]").removeClass("required").html('');
				}
				else
				{
					$("span[for="+$(Texts[i]).attr('id')+"]").addClass("required").html(Mensajes[clase].bold()).fadeIn(500).delay(10000).fadeOut(500);
					$(Texts[i])/*.css({"border": "red 1px solid"});*/.addClass('borderRed');
					respuesta = false;
					return false;
				}
			}
			else
			{
			}
		});
	});

	TextArea.each(function(i, object)
	{
		$.each(RexClass, function(index, clase)
		{
			if($(TextArea[i]).hasClass(clase) == true && $(TextArea[i]).val().trim() != '')
			{
				if($(TextArea[i]).hasClass('RegCorreo') == true)
				{
					$(TextArea[i]).val($(TextArea[i]).val().toLowerCase());
				}

				console.log($(Texts[i]).val() + 'id '+ $(Texts[i]).attr('id'));
				if ($(TextArea[i]).val().trim().match(Expresiones[clase]))
				{
					$("span[for="+$(TextArea[i]).attr('id')+"]").removeClass("required").html('');
				}
				else
				{
					$("span[for="+$(TextArea[i]).attr('id')+"]").addClass("required").html(Mensajes[clase]).fadeIn(500).delay(10000).fadeOut(500);
					$(TextArea[i])/*.css({"border": "red 1px solid"});*/.addClass('borderRed');
					respuesta = false;
					return false;
				}
			}
			else
			{
			}
		});
	});
	console.log("4:" + respuesta);
	// console.log("requerido:" + requerido);
	if( requerido > 0)
	{
		notify("Campos marcados en rojo son requeridos","warning");
	}
	callback(respuesta);
}

function notify(mensaje, tipo, modo, url)
{
	console.log(mensaje)
	modo = modo || 0;
	url = url || '';
	//modificada
    switch (modo)
	{
        case 0:
            //case 0 es notificacion normal
            $.notify({
                // options
                message: mensaje
            }, {
                // settings
                type: tipo,
                allow_dismiss: true,
                offset: 20,
                spacing: 10,
                z_index: 9999,
                delay: 2500,
                timer: 1000,
                mouse_over: "pause",
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
            });
            break;
        case 1:
            //case 1 es notificacion estatica con url
            $.notify({
                // options
                message: mensaje,
                url: url,
                target: '_blank'
            }, {
                // settings
                type: tipo,
                allow_dismiss: true,
                offset: 20,
                spacing: 10,
                z_index: 9999,
                delay: 0,
                timer: 1000,
                mouse_over: "pause",
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
            });
            break;
    }
}

function SerializeForm(oObject) {
    var myform = oObject;
    var disabled = myform.find(':input:disabled').removeAttr('disabled');
    var serialized = myform.serializeArray();
    disabled.attr('disabled', 'disabled');
    return serialized;
}

function BuildForm(sSerialized)
{
    var fd = new FormData();
    $.each(sSerialized, function (key, input) {
        fd.append(input.name, input.value);
    });

    return fd;
}

// Ajax functions(GET And Post)

function getQuery(sUrl, sType, sData, bAsync, LoadModal) 
{
    sData = sData || '';
    bAsync = bAsync || true;
    
    LoadModal = LoadModal || 0;
    
     return $.ajax({
        type: "GET",
        url: sUrl,
        timeout: 60000,
        dataType: sType,
        data: sData,
        async: bAsync,
        beforeSend: function ()
        {
            if(LoadModal == 1)
            {
                $('.container-modal').show();
            }
        },
        success: function (sResp)
        {
            
        },
        error: function(xmlhttprequest, textstatus, message)
        {
            if(LoadModal == 1)
            {
                $('.container-modal').hide();
            }
            if(textstatus==="timeout")
            {
                
                Dialog("Se ha excedido el tiempo de respuesta", true, "fa fa-exclamation-circle");
            }
            else
            {
                
            }
        },
        complete: function (sResp) 
        {
            if(LoadModal == 1)
            {
                $('.container-modal').hide();
            }
        }
    });
}

function postQuery(sUrl, oFd, LoadModal) 
{
    LoadModal = LoadModal || 0;
    return $.ajax({
        type: "POST",
        url: sUrl,
        dataType: "json",
        data: oFd,
        timeout: 60000,
        contentType: false,
        processData: false,
        beforeSend: function () 
        {
            if(LoadModal == 1)
            {
                $('.container-modal').show();
            }
        },
        success: function (sResp)
        {
            
        },
        error: function(xmlhttprequest, textstatus, message)
        {
            if(LoadModal == 1)
            {
                $('.container-modal').hide();
            }
            console.log(message);
            console.log(xmlhttprequest);
            
            if(textstatus==="timeout")
            {
                
                Dialog("Se ha excedido el tiempo de respuesta", true, "fa fa-exclamation-circle");
            }
            else
            {
                
            }
        },
        complete: function () 
        {
           if(LoadModal == 1)
            {
                $('.container-modal').hide();
            }
        },
        error: function (error) 
        {
            if(LoadModal == 1)
            {
                $('.container-modal').hide();
            }
            console.log(error);
            
            if(error.status == 422)
            {
                $.each(error.responseJSON.error, function(index, name)
                {
                    notify(name,   "info", "exclamation-triangle");
                });
            }
            else
            {
                notify("Ocurrio un error, vuelve a intentarlo",   "warning", "exclamation-triangle");
            }
            // console.log(error);
           // if(LoadModal == 1)
           //  {
           //      $('#modal-loader').modal('hide');
           //  }
        }
    });
}
