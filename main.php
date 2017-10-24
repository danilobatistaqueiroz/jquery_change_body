<html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="https://www.w3schools.com/lib/w3.js"></script> 
<body>
<div id="divHeader"></div>
<div id="divBody"></div> 
<div id="divFooter"></div> 
</body>
</html>
<script>
	$.ajax({
		url:'header.php',
		method: 'GET',
		contentType: "application/json; charset=utf-8",
		success: function(data) {
			$('#divHeader').empty();
			$('#divHeader').append(data);
		}
	});
	$.ajax({
		url:'footer.php',
		method: 'GET',
		contentType: "application/json; charset=utf-8",
		success: function(data) {
			$('#divFooter').empty();
			$('#divFooter').append(data);
		}
	});
</script>