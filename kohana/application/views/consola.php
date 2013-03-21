<!DOCTYPE html>
<html>
<head>
<link href="cssConsole.console.css" type="text/css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="cssConsole.min.js"></script>
<style>
body{
background: azure;
font-family: courier;
}

.container {
border:inset 6px #1f6a85;
border-radius: 18px; 
box-shadow: 10px 10px 8px #000000; 
outline:none;
margin: 50px auto;
height: 600px;
width: 950px;
position:relative;
}

#input {
width: 910px;
display:inline-block;
position:relative;
float:left;
}

.bottom {
position:absolute;
bottom:5px;
width: 100%;
}

.label {
width: 30px;
position: relative;
left: 15px;
top:5px;
color: #fefefe;
float:left;
}

.console {
position:absolute;
bottom:32px;
overflow:hidden;
}

.white{
color: black;
}

.blue{
color: #81bbd5;
}

.line {
margin-left: 15px;
margin-bottom:2px;
}

.margin {
margin-left: 40px;
margin-bottom:2px;
}

.Three-Dee{
        margin-left: 460px;
        font-family: 'Bookman Old Style', serif;
        line-height: 1em;
        color: #db1c1c;
        font-weight:bold;
        font-size: 50px;
        text-shadow:0px 0px 0 rgb(198,7,7),
        1px 1px 0 rgb(186,-5,-5),2px 2px 0 rgb(175,-16,-16),
        3px 3px 0 rgb(163,-28,-28),4px 4px 0 rgb(152,-39,-39),
        5px 5px 0 rgb(140,-51,-51),6px 6px 0 rgb(129,-62,-62),
        7px 7px 0 rgb(117,-74,-74),8px 8px 0 rgb(106,-85,-85),
        9px 9px 0 rgb(94,-97,-97),10px 10px 0 rgb(83,-108,-108), 
        11px 11px 0 rgb(72,-119,-119),12px 12px 11px rgba(0,0,0,0.5),
        12px 12px 1px rgba(0,0,0,0.5),0px 0px 11px rgba(0,0,0,.2);}


</style>
<meta charset=utf-8 />
<title>The Potato Autodiscovery Console</title>
</head>
<body>
	<img src="./logo.jpg" style = "position: absolute; top:20%; right:455px; opacity:0.5">
	<div class="Three-Dee"> The Potato Web Console  </div>
	<div class="container">
		<div class="console">
			<div class="line white">Welcome to the Potato Web Console! Type help for command list.</div>
		</div>
		<div class="bottom">
			<div class="label" style = "color:black">></div>
			<div id="input"></div>
		</div>
	</div>  
<script>
$(document).ready(function() {
    $('#input').find('input').focus();
});


$('#input').cssConsole({
	inputName:'console',
	charLimit: 60,
	onEnter: function(){
		addLine("> "+$('#input').find('input').val());
		execCommand($('#input').find('input').val());
		$('#input').cssConsole('reset');	
		$('#input').find('input').focus();
	}
});

var lineLimit = 28;

$('.container').on('click', function() {
	$('#input').find('input').focus();
});

function addLine(input, style, color) {
		if($('.console div').length==lineLimit) {
			$('.console div').eq(0).remove();
		}
		style = typeof style !== 'undefined' ? style : 'line';
		color = typeof color !== 'undefined' ? color : 'white';
		$('.console').append('<div class="'+style+' '+color+'">'+input+'</div>');
}

function execCommand(command){
    if ( commands[command] ) {
      return commands[command]();
    } else {
      addLine("Command '" + command + "' was not found.");
    }   
}

var commands = {
	help: function (){
		addLine("Available command list:");
		addLine("dir", 'margin');
		addLine("help", 'margin');
		addLine("ps", 'margin');
	},
	dir: function(){
		addLine(".");
		addLine("..");
		addLine("Applications", 'margin', 'blue');
		addLine("Documents", 'margin', 'blue');
		addLine("Downloads", 'margin', 'blue');
		addLine("Movies", 'margin', 'blue');
		addLine("Music", 'margin', 'blue');
		addLine("System", 'margin', 'blue');		
	},
	ps: function() {
		addLine("Running processes:");
		addLine("name: browser pid:8876", 'margin');
		addLine("name: movie player pid:3213", 'margin');
		addLine("name: system pid:0012", 'margin');
	}
}
</script>
</body>
</html>
