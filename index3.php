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
<style>
* { box-sizing: border-box; } body { margin: 5vh; font-family: Avenir, Roboto, Helvetica, san-serif; background: #999;} div
{ height: 90vh; } article { display: grid; grid-template-columns: 1fr minmax(0, 40ch) 1fr; grid-template-rows: 20% 2fr auto
auto 1fr; width: 100%; height: 100%; } h1 { grid-column: 2 / 4; grid-row: 3 / 4; align-self: end; background: black; color:
white; margin: 0; padding: 1.4rem; line-height: 1.2; font-weight: normal; } img { grid-column: 1 / 3; grid-row: 1 / 6; z-index:
-1; width: 100%; height: 100%; object-fit: cover; object-position: 50% 100%; } p { grid-column: 2 / 4; grid-row: 4 / 5; align-self:
start; background: white; padding: 1.4rem; margin: 0; 
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
	/* content:""; */
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
}}

</style>
            <?php 
            $elements = ['c','m','y','k'];
            ?>
<body>
    <div>
        <article>
            <h1>Lorem ipsum dolor</h1>
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

            <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit inceptos nunc et litora, cras class id morbi viverra. Leo
                in hac vel sed molestie fringilla fusce orci, dis nibh pharetra quisque inceptos interdum tortor, porta parturient
                varius magna curae feugiat vestibulum egestas, suscipit facilisi accumsan torquent aptent lobortis.</p>
        </article>
    </div>
			
			<?php
			}
		?> 
		</div>
		<?php
		}
	?>

</body>
</html>