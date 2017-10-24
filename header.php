<li><a class='changeTheBody' href='#Products'>Products</a></li>
<li><a class='changeTheBody' href='#Users'>Users</a></li>
<script>
function changeBody(href) {
	$.ajax({
		url:href+'.php',
		method: 'GET',
		contentType: "application/json; charset=utf-8",
		data: {id:123},
		success: function(data) {
			$('#divBody').empty();
			$('#divBody').append(data);
		}
	});
}
$('.changeTheBody').click( function(){
	var href = $(this).attr('href').substr(1).toLowerCase();
	changeBody(href) ;
});
</script>