$.ajax({
		type: "GET",
		url: 'lennertsmets.com/Loc_Read.php',
		data: {
		"text":postData,
		"xcor":xcor,
		"ycor":ycor
		},
		dataType: 'json',
		success: function (data) {
			
		}
	});