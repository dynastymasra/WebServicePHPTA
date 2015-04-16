<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section id="content">TES Lihat Data</section>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script>
		$(document).on("ready",function(){
			loadData();
		});

		var loadData = function(){
			$.ajax({
				type:"POST",
				url:"json.php"
			}).done(function(data)){
				console.log(data);
				var location = JSON.parse(data);
				for (var i in location) {
					$("#content").append(location[i].locations+""+location[i].nombers+"<br>")
				};
			}
		}
	</script>
</body>
</html>