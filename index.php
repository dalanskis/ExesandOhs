<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
<style>
body{
	margin: 0;
	height: 100vh;
	overflow: hidden;
	/* display: flex; */
}
.main-container{
	left: 40%;
    top: 200px;
    display: block;
    position: relative;
}
.c,.m,.y,.k{
	display:inline-block;
	position:absolute;
	top:0;
	left:0;
	transform-origin:center center;
}
.c{
	color:deepskyblue;
	transform:rotate(-15deg);
	z-index:2;
}
.c .x:before, .c .x:after{
	background-color:deepskyblue;
}
.m{
	color:mediumvioletred;
	transform:rotate(15deg);
	z-index:3;
}
.m .x:before, .m .x:after{
	background-color:mediumvioletred;
}
.y{
	color:gold;
	transform:rotate(90deg);
	z-index:4;
}
.y .x:before, .y .x:after{
	background-color:gold;
}
.k{
	color:black;
	transform:rotate(45deg);
	z-index:1;
}
.k .x:before, .k .x:after{
	background-color:black;
}
.x-container{
	position:relative;
	display:inline-block;
	width:19px;
	height:22px;
	margin:0.5em;
}
.x{
	display:block;
	position:absolute;
	left:50%;
}
.x:before, .x:after{
	content:"";
	display:block;
	position:absolute;
	width:2px;
	height:25px;
}
.x:before{
	transform:rotate(45deg);
}
.x:after{
	transform:rotate(-45deg);
}
.x-container:first-of-type: .xbefore, .x-container:first-of-type: .xafter{
	width:1px;
}
.x-container:nth-of-type(2) .x:before, .x-container:nth-of-type(2) .x:after{
	width:1.5px;
}
.x-container:nth-of-type(3) .x:before, .x-container:nth-of-type(3) .x:after{
	width:2px;
}
.x-container:nth-of-type(4) .x:before, .x-container:nth-of-type(4) .x:after{
	width:2.5px;
}
.x-container:nth-of-type(5) .x:before, .x-container:nth-of-type(5) .x:after{
	width:3px;
}
.x-container:nth-of-type(6) .x:before, .x-container:nth-of-type(6) .x:after{
	width:3.5px;
}
.x-container:nth-of-type(7) .x:before, .x-container:nth-of-type(7) .x:after{
	width:4px;
}
.x-container:nth-of-type(8) .x:before, .x-container:nth-of-type(8) .x:after{
	width:4.5px;
}
.x-container:nth-of-type(9) .x:before, .x-container:nth-of-type(9) .x:after{
	width:5px;
}
.x-container:last-of-type .x:before, .x-container:last-of-type .x:after{
	width:5.5px;
}

.blue-bubble {
	height: 30px;
	width: 30px;
	position: absolute;
	bottom: 110px;
	background-color: lightblue;
	opacity: 0.9;
	border-radius: 50%;
	}

.pink-bubble {
	height: 80px;
	width: 80px;
	position: absolute;
	left: -10px;
	background-color: pink;
	opacity: 0.5;
	border-radius: 50%;
	}

.red-bubble {
	height: 280px;
	width: 280px;
	position: absolute;
	right: 810px;
	background-color: red;
	opacity: 0.5;
	border-radius: 50%;
	}
}
</style>

<?php
$elements = ['c','m','y','k'];
?>
    <div class="main-container">
	<div class="blue-bubble"></div>
	<div class="pink-bubble"></div>
	

	<div class="red-bubble"></div>
		<?php 
		foreach($elements as $element){
		?>
		<div class="<?php echo $element; ?>">
		<?php
			for ($i=0; $i < 10; $i++) {
		?>
			<div class="row">
				<?php
					for ($n=0; $n < 10; $n++) { 
				?>
					<span class="x-container">
						<span class="x"></span>
					</span>

					<?php
					}
				?> 
			</div>
			<?php
			}
			?>
		</div>
		<?php
		}
		?>
    </div>
</body>
</html>