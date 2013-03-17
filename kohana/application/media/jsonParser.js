var consoleText = document.getElementById("console");
var consoleInput = document.getElementById("consoleInput");
var symbol = "$: ";

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
	console.log(query);
	var bruteObject = JSON.parse(query);
	
	getDataTree(bruteObject, 0);
	consoleText.innerHTML += "\n";
}


function phpQuery(){
	var query = consoleInput.value; 
	consoleInput.value = "";
	consoleText.innerHTML += symbol + query + "\n\n";
	console.log(query);
	$.post("http://localhost/kohana/getResources", {query: ""+query+""}, 			
	
	function(data){
			console.log(data);
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

function DumpObjectIndented(obj, indent)
{
  var result = "";
  if (indent == null) indent = "";

  for (var property in obj)
  {
    var value = obj[property];
    if (typeof value == 'string')
      value = "'" + value + "'";
    else if (typeof value == 'object')
    {
      if (value instanceof Array)
      {
        value = "[ " + value + " ]";
      }
      else
      {
       
        var od = DumpObjectIndented(value, indent + "  ");
        value = "\n" + indent + "{\n" + od + "\n" + indent + "}";
      }
    }
    result += indent + "'" + property + "' : " + value + ",\n";
  }
  return result.replace(/,\n$/, "");
}
