<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<li><a class='changeTheBody' href='#Products'>Products</a></li>
<li><a class='changeTheBody' href='#Users'>Users</a></li>

<div id='divBody'></div> 

<script>
$('.changeTheBody').click( function() {
	var href = $(this).attr('href').substr(1).toLowerCase();
	$.ajax({
		url:href+'.php',
		method: 'GET',
		contentType: "application/json; charset=utf-8",
		data: {id:123},
		success: function(data) {
			$('#divBody').append(data);
		}
	});
});
</script>