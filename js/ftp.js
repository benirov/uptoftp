class Ftp
{

	getFtpAcount()
	{
		$.when(getQuery('../ajax/getFtpAccount.php', 'json', '', true, true)).done(function(sResp)
		{
			if(sResp.code == 200)
			{
				$('#ftp').empty();
				$("#ftp").append("<option value='0' selected>Seleccione una cuenta FTP</option>");
				$("#ftp").select2({ data: sResp.data});
				// $("#ftp").append("<option value='0' selected>Seleccione una cuenta FTP</option>");
			}
		})
	}
	getDataUser(ftp)
	{
		$.when(getQuery('../ajax/getInfoUser.php', 'json', 'ftp='+ftp, true, true)).done(function(sResp)
		{
			if(sResp.code == 200)
			{
				$("#idUser").val(sResp.data.idUser);
				$("#hostName").val(sResp.data.hostftp);
				$("#Password").val(sResp.data.passwordftp);
				$("#UserName").val(sResp.data.userftp);
				$("#divForm").removeClass("hidden");
				
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
}