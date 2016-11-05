<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Gmaps</title>
</head>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnN6TZNu6uY514_BiRbAJ3O9SzUYliqgA&sensor=false"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="gmaps.js"></script>
<script type="text/javascript">
	var map;
	$(document).ready(function(){
		map = new GMaps({
			div: '#map',
			lat: 35.689161,
			lng: 139.691781,
			zoom:16
		});
	});
</script>
 
<style>
#map {
	width: 95%;
	height:500px;
}
</style>
<body>
 
<div id="map"></div>
 
</body>
</html>
