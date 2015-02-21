/**
 * @copyright (c) 2014 - 2015 lovepsone
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 **/
function getUrls() { var vars = {}; var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) { vars[key] = value; }); return vars; }
$(document).ready(function()
{
	$("#i1, #i2, #i3, #i4").click(function()
	{
		var id = $(this).attr('id'), type = id.replace(/\D/g, '');
		$.ajax(
		{
			url: 'handle4left.php',
			type: 'POST',
			data:{'data': type+':'+getUrls()['level']},
			success: function(data)
			{
				$("#HUpLvl").html(data);
			}
		});
	});
	$("#regame").click(function()
	{
		window.status = '';
		window.location = 'index.php';
	});
});
