var consoleText = document.getElementById("console");
var consoleInput = document.getElementById("consoleInput");
var symbol = "$: ";
var newDataArray = new Array();


function getDataArray(bruteObject){
	for(var objectProperty in bruteObject){
		if( objectProperty === "date_noi"){
			newDataArray.push(bruteObject[objectProperty]);
		}	
	}
}

function getDataTree(bruteObject, level){
	
	level++;
	var spaces = "";
	for(var i = 0; i < level; i++)
				spaces += "  ";
				
	for( var objectProperty in bruteObject){
			
		if((typeof bruteObject) === "object"){
			
			if( objectProperty != "autodiscovery_url")
				consoleText.innerHTML += (spaces + objectProperty + "\n");
			
			getDataTree(bruteObject[objectProperty], level);	
		}
	}
}


function getJsonObject(query){

	var bruteObject = JSON.parse(query);
	
	getDataTree(bruteObject, 0);
	consoleText.innerHTML += "\n";
}


function phpQuery(){
	var query = consoleInput.value; 
	consoleInput.value = "";
	consoleText.innerHTML += symbol + query + "\n\n";
	$.post("getResources", {query: ""+query+""}, 			
	
	function(data){

			if(data.length >0)
			{
				getJsonObject(data);
				
			}else
				consoleText.innerHTML += "Unkown command\n\n";
			
			consoleText.scrollTop = consoleText.scrollHeight;

		});
}


function sendQueryInput(){
	
	consoleInput.addEventListener('keyup', function (event) {

		if (event.keyCode == 13) {
            phpQuery();
        }
      
    }, false);
	
}

sendQueryInput();
