window.onload = pageLoad;

function pageLoad(){
	alert("Hello")
	document.getElementById('showData').onclick = getData;
}

function getData(){
	var xhr = new XMLHttpRequest(); 
	xhr.open("GET", "js/showDB.php"); 
	xhr.onload = function() { 
		jdata = JSON.parse(this.responseText);
		showTable(jdata);
	}; 
	xhr.onerror = function() { alert("ERROR!"); }; 
	xhr.send();  
}

function showTable(data){
	var keys = Object.keys(data);
	var keys2 = Object.keys(data[keys[0]]);
	var tablearea = document.getElementById("table")
	var table = document.createElement("table");
	var tr = document.createElement("tr");
	for (var i = 0; i <keys2.length; i++) {
		var th = document.createElement("th");
		th.innerHTML = keys2[i];
		tr.appendChild(th);
	}
	table.appendChild(tr);
	for (var i=0;i<keys.length;i++){
		var tr = document.createElement("tr");
		for (var j=0;j<keys2.length;j++){
			var td = document.createElement("td");
			var temp = data[keys[i]];
			td.innerHTML = temp[keys2[j]];
			tr.appendChild(td);
		}
		table.appendChild(tr);
	}
	tablearea.innerHTML = "";
	tablearea.appendChild(table);
}