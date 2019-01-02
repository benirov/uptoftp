class Ftp
{

	getFtpAcount(option, ftp)
	{
		$.when(getQuery('../ajax/getFtpAccount.php', 'json', '', true, true)).done(function(sResp)
		{
			if(sResp.code == 200)
			{
				$('#ftp').empty();
				$("#ftp").append("<option value='0' selected>Seleccione una cuenta FTP</option>");
				$("#ftp").select2({ data: sResp.data});
				if(option == 2)
				{
					// console.log(Ftp.getDirectoryFTP(sResp.data))
					
					
					// Ftp.getDirectoryFTP(sResp.data)
				}
				// $("#ftp").append("<option value='0' selected>Seleccione una cuenta FTP</option>");
			}
			else
			{
				notify("actualmente no posee cuentas FTP registradas", "warning");
				$('#ftp').empty();
			}
		})
	}
	getDataUser(ftpId, ftp)
	{
		$.when(getQuery('../ajax/getInfoUser.php', 'json', 'ftp='+ftpId, true, true)).done(function(sResp)
		{
			if(sResp.code == 200)
			{
				// $("#idFtp").val(sResp.data.id);
				// $("#hostName").val(sResp.data.hostftp);
				// $("#Password").val(sResp.data.passwordftp);
				// $("#UserName").val(sResp.data.userftp);
				// $("#divForm").removeClass("hidden");
				ftp.getDirectoryFTP(sResp.data)
				
			}
			else
			{
				$("#divForm").addClass("hidden");
			}

		})
	}

	saveDataUser(data, ftp)
	{
		$.when(postQuery('../ajax/postInfoUserFtp.php', data, true)).done(function(sResp)
		{
			if(sResp.code == 200)
			{
				$("#formAddFTP input").val('');
				notify("datos guardados exitosamente", "success");
				ftp.getFtpAcount();
				$("#ModalAddFTP").modal("hide");
			}
			else
			{
				notify("Error al guardar datos", "error");	
			}
		})

	}

	updateDataUser(data, ftp)
	{
		$.when(postQuery('../ajax/postUdateInfoUserFtp.php', data, true)).done(function(sResp)
		{
			if(sResp.code == 200)
			{
				$("#formUser input").val('');
				$("#divForm").addClass("hidden");
				notify("datos guardados exitosamente", "success");
				ftp.getFtpAcount()
			}
			else
			{
				notify("Error actualizando datos", "error");	
			}

		})

	}

	testConection()
	{
		let dataForm = SerializeForm($("#formAddFTP"));
        let data = BuildForm(dataForm);
		$.when(postQuery('../ajax/postTestConectionFTP.php', data, true)).done(function(sResp)
		{
			if(sResp.code == 200)
			{
				notify("Conexion a cuenta FTP Exitosa", "success");

			}
			else
			{
				notify("No se pudo conectar a la cuenta FTP", "error");	
			}

		})
	}

	deletedAccount(data, ftp)
	{
		$.when(postQuery('../ajax/postDeletedFTP.php', data, true)).done(function(sResp)
		{
			if(sResp.code == 200)
			{
				notify("Datos de cuenta FTP eliminados", "success");
				$("#formUser input").val('');
				$("#divForm").addClass("hidden");
				ftp.getFtpAcount()
			}
			else
			{
				notify("Error al elimianar datos de cuentaFTP", "error");	
			}

		})
	}

	// Directorios FTP

	getDirectoryFTP(data)
	{
		console.log(data);
		console.log("Directorios")
		$.when(getQuery('../ajax/getDirectoryFTP.php', 'json', 'host='+data.hostftp+'&user='+data.userftp+'&userP='+data.passwordftp, true, true)).done(function(sResp)
		{
			console.log(sResp.data)
			$.each(sResp.data, function(i, val)
			{
				let type = "file";
				if(val.type != '1')
				{
					type = "folder";
				}
				// console.log(val);
				$("#tableFTP tbody").append(
					'<tr>'+
					'<td>'+i+'</td>'+
					'<td>'+val.date+'</td>'+
					'<td>'+val.name+'</td>'+
					'<td>'+val.size+'</td>'+
					'<td>'+type+'</td>'+
					'<td>'+
                          '<div>'+
                            '<a class="btn  actionsFTP" data-toggle="tooltip" data-placement="top" title="Eliminar">'+
                              '<i class="fas fa-trash-alt pointer"></i>'+
                            '</a>'+
                            '<a class="btn  actionsFTP" data-toggle="tooltip" data-placement="top" title="Descargar">'+
                              '<i class="fas fa-file-download pointer"></i>'+
                            '</a>'+
                          '</div>'+
                        '</td>'+
                        '</tr>');
			})

		})
	}
}