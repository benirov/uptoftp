class User
{
	getDataUser(ftp)
	{
		$.when(getQuery('../ajax/getDataUser.php', 'json', '', true, true)).done(function(sResp)
		{
			if(sResp.code == 200)
			{
				$("#emailUser").val(sResp.data.user);
				$("#Password").val(sResp.data.password);
				
			}
			else
			{
				notify("Error obteniendo informacion de usuario", "error");
			}

		})
	}

	updateDataUser(data, ftp)
	{
		$.when(postQuery('../ajax/postUdateInfoUser.php', data, true)).done(function(sResp)
		{
			if(sResp.code == 200)
			{
				$("#formUser input").val('');
				notify("datos actualizados exitosamente", "success");
				ftp.getDataUser()
			}
			else
			{
				notify("Error actualizando datos", "error");	
			}

		})

	}

	deletedAccount(data, ftp)
	{
		$.when(postQuery('../ajax/postDeletedFTP.php', data, true)).done(function(sResp)
		{
			if(sResp.code == 200)
			{
				notify("Datos de cuenta eliminados", "success");
				$("#formUser input").val('');
				$("#divForm").addClass("hidden");
				ftp.getFtpAcount()
			}
			else
			{
				notify("Error al elimianar datos de cuenta", "error");	
			}

		})
	}
}