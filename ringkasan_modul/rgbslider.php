<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>RGB Slider</title>
	<meta charset="utf-8">
	<style media="screen">
	body{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	display: grid;
	place-items: center;
	height: 100vh;
	}

	.main{
		height: 400px;
		width: 250px;
		background: #3333;
		border-radius: 10px;
		display: grid;
		place-items: center;
		color: #333;
		font-family: verdana;
	}

	#box{
		height: 40px;
		width: 80%;
		border: none;
		outline: none;
		border-radius: 59px;
		text-align: center;
	}

	input[type="range"]{
		-webkit-appearance:none;
		height: 10px;
		width: 150px;
		border-radius: 50px;
		outline: none;
	}

	input[type="range"]::-webkit-slider-thumb{
		-webkit-appearance:none;
		height: 25px;
		width: 25px;
		background: #ffff;
		border-radius: 50%;
		cursor: pointer;
	}

	.main #red{
		background: linear-gradient(90deg, #000, red);
	}

	.main #blue{
		background: linear-gradient(90deg, #000, blue);
	}
	.main #green{
		background: linear-gradient(90deg, #000, green);
	}

	</style>
</head>
<body>
<div class="main">
	<b>Result :</b><input type="text" id="box" value="rgb(255,255,255)">
	Red : <input type="range" id="red" value="255" min="0" max="255">
	Green : <input type="range" id="green" value="255" min="0" max="255">
	Blue : <input type="range" id="blue" value="255" min="0" max="255">
</div>
<script type="text/javascript">
	function myColor(){
		var red = document.getElementById('red').value;
		var green = document.getElementById('green').value;
		var blue = document.getElementById('blue').value;
		var color = 'rgb('+ red +','+ green +','+ blue')';
		document.body.style.backgroundColor = color;
		document.getElementById('box').value = color;
	}
	document.getElementById('red').addEventListener('input',myColor);
	document.getElementById('green').addEventListener('input',myColor);
	document.getElementById('blue').addEventListener('input',myColor);
</script>
</body>
</html>