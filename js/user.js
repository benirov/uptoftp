class User
{
	getDataUser()
	{
		$.when(getQuery('../ajax/getInfoUser.php', 'json', '', true, true)).done(function(sResp)
		{
			console.log(sResp.code)
			if(sResp.code == 200)
			{
				$("#idUser").val(sResp.data.idUser);
				$("#hostName").val(sResp.data.hostftp);
				$("#Password").val(sResp.data.passwordftp);
				$("#UserName").val(sResp.data.userftp);
			}
			console.log(sResp)

		})
	}

	saveDataUser(data, user)
	{
		$.when(postQuery('../ajax/postInfoUserFtp.php', data, true)).done(function(sResp)
		{
			if(sResp.code == 200)
			{
				notify("datos guardados exitosamente", "success");
				user.getDataUser()
			}
			else
			{
				notify("datos guardados exitosamente", "error");	
			}
			console.log(sResp)

		})

	}
}