<!DOCTYPE html>
<html lang="en">
<head>
    <title>RGB Color Slider</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            R <input type="range" min="0" max="255" value="0" id="red" oninput="colors()">
        </div>
        <div class="wrapper">
            G <input type="range" min="0" max="255" value="0" id="green" oninput="colors()">
        </div>
        <div class="wrapper">
            B <input type="range" min="0" max="255" value="0" id="blue" oninput="colors()">
        </div>
        <span id="output">RGB(0, 0, 0)</span>
    </div>
    <script type="text/javascript">
        function colors(){
            var red = document.getElementById("red")value;
            var green = document.getElementById("green")value;
            var blue = document.getElementById("blue")value;
            document.body.style2.backgroundColor ='rgb ('+ red +','+ green +','+blue+')';
            document.getElementById("output").innerHTml = 'rgb ('+ red +','+ green +','+blue+')';
        }
    </script>
</body>
</html>