<!doctype html>
<html>
<head>
<title>Climate Disasters</title>

<script type="text/javascript">
	var legendText = "<b>Legend</b><br><font size=\"1\">Low </font><img src=\"images/legend.png\" height=\"8\" width=\"100\"/><font size=\"1\"> High</font>";
	
	function changeContent(str, str2){
		document.getElementById("loading_div").style.height='20px';
	
		if (window.XMLHttpRequest){    
			// code for IE7+, Firefox, Chrome, Opera, Safari
      		// create a new XML http Request that will go to our generator webpage.
      		xmlhttp=new XMLHttpRequest();
  		}
	  
	  	// on state change
  		xmlhttp.onreadystatechange=function(){
  			// request done, display the output
  			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				//update map with new Gson data from rest web service
	 		 	map.getSource('drone').setData(JSON.parse(xmlhttp.responseText));
			 	
				//remove loading notification
				document.getElementById("loading_div").style.height='0px';			
			}
		}
		xmlhttp.open("GET","filterStates.php?disastertype="+str+"&disasteryear="+str2, true);
		xmlhttp.send();
	}

</script>

<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
<script src='https://api.mapbox.com/mapbox-gl-js/v0.44.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.44.1/mapbox-gl.css' rel='stylesheet' />

<style>
  body { margin:0; padding:0; }
  #map { position:absolute; width:100%; height:100%; }
  
    .mapboxgl-popup {
        max-width: 400px;
        font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
    }
	
	/**
* Set rules for how the map overlays
* (info box and legend) will be displayed
* on the page. */
.map-overlay {
  position: absolute;
  bottom: 0;
  right: 0;
  background: rgba(255, 255, 255, 0.8);
  margin-right: 20px;
  font-family: Arial, sans-serif;
  overflow: auto;
  border-radius: 3px;
}

#features {
  top: 0;
  height: 120px;
  margin-top: 10px;
  width: 300px;
  padding-left:12px;
}

#legend {
  padding: 10px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  line-height: 18px;
  height: 100px;
  margin-bottom: 30px;
  width: 150px;
}

</style>
</head>
<body>
	<div id="loading_div" style="z-index:1000; background-color:rgba(255,0,4,1.00); height:0px;"><center>Loading...</center></div>
	<div id='map'></div>
	<div class='map-overlay' id='features'>
		<h4>US Climate Disasters</h4>
    	<table>
    		<tr>
        		<td><font size="1">Select Disaster Type:</font></td>
            	<td><select id="disaster_type" name="incidentType" onChange="changeContent(this.value, document.getElementById('disaster_year').value)">
    					<option value="All" selected>All Disasters</option>
    					<option value="Chemical">Chemical</option>
    					<option value="Coastal Storm">Coastal Storm</option>
    					<option value="Dam/Levee Break">Dam/Levee Break</option>
    					<option value="Drought">Drought</option>
				    	<option value="Earthquake" selected="true">Earthquake</option>
				        <option value="Fire">Fire</option>
 				        <option value="Fishing Loses">Fishing Losses</option>
    				    <option value="Flood">Flood</option>
        				<option value="Freezing">Freezing</option>
       				    <option value="Human Cause">Human Cause</option>
       				    <option value="Hurricane">Hurricane</option>
       				    <option value="Mud/Landslide">Mud/Landslide</option>
				        <option value="Other">Other</option>
        				<option value="Severe Ice Storm">Severe Ice Storm</option>
        				<option value="Severe Storm(s)">Severe Storm(s)</option>
        				<option value="Snow">Snow</option>
        				<option value="Terrorist">Terrorist</option>
        				<option value="Tornado">Tornado</option>
        				<option value="Toxic Substances">Toxic Substances</option>
        				<option value="Tsunami">Tsunami</option>
        				<option value="Typhoon">Typhoon</option>
        				<option value="Volcano">Volcano</option>
    				</select></td>
        </tr>
        <tr>
        	<td><font size="1">Select Year:</font></td>
            <td>
            <select id="disaster_year" name="incidentType" onChange="changeContent(document.getElementById('disaster_type').value ,this.value)">
    				<option value="All"  selected>All Years</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>

    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    </select>
            </td>
        </tr>
    </table>
</div>

<div class='map-overlay' id='legend'></div>
    
    <script src="./us-states.js"></script>

	<script>
		//Load Map
  		mapboxgl.accessToken = 'pk.eyJ1IjoiY2Fwcmlwb3QiLCJhIjoiY2pjMDJqcDhsMDQ2MzJ4bW85MTR0YXBzYiJ9.Ag9mIZTDONNN9JdN2kW76g';
 		var map = new mapboxgl.Map({
    		container: 'map',
    		maxZoom: 5.5,
    		minZoom: 1.8,
    		style: 'mapbox://styles/mapbox/light-v9',
    		center: [-115.36957574368233, 50.732480262447524],
    		zoom: 2.850019725398168
  		});

		//code exec after map finished loading
  		map.on('load', function () {

    	var layers = map.getStyle().layers;

    	// Find the index of the first symbol layer in the map style
    	var firstSymbolId;
    	for (var i = 0; i < layers.length; i++) {
        	if (layers[i].type === 'symbol') {
            	firstSymbolId = layers[i].id;
            	break;
        	}
    	}
	
	
    	map.addSource('drone', { type: 'geojson', data: statesData });

    	var statesLayer = map.addLayer({
      		'id': 'us-states',
      		'type': 'fill',
      		'source': 'drone',
      		'paint': {
        	'fill-color': {
          		property: 'density',
          		stops: [
		  	  		[0, '#9f9f9f'],
              		[0.1, '#17ad25'],
              		[10, '#31b31f'],
              		[20, '#5ebd1a'],
              		[30, '#aec21f'],
              		[40, '#b4c21f'],
              		[50, '#d1bf21'],
              		[60, '#d89328'],
              		[70, '#db802b'],
			  		[80, '#db6034'],
			  		[90, '#db473a'],
          		]
        	},
			'fill-outline-color':'#fff',
        	'fill-opacity': 0.75,
      	}
    }, firstSymbolId);

	document.getElementById("disaster_type").value = "All";
	document.getElementById("disaster_year").value = "All";	
	
	changeContent("All", "All");
	map.fitBounds([[-108.2421875, 16.972741], [-87.63671875, 52.696361]]);
	document.getElementById('legend').innerHTML = '<p>Hover over a state!</p>'+legendText;
  });

  map.on('click', 'us-states', function(e) {
    var coordinates = almostFlatten(e.features[0].geometry.coordinates);
    var bounds = new mapboxgl.LngLatBounds(coordinates[0], coordinates[0]);
    coordinates.forEach(function(coord) {
      bounds.extend(coord);
    })

    map.fitBounds(bounds, { padding: 100 });
  });


//function to  update state info in info box
  map.on('mousemove', function(e) {
  var states = map.queryRenderedFeatures(e.point, {
    layers: ['us-states']
  });

  if (states.length > 0) {
    document.getElementById('legend').innerHTML = '<strong>' + states[0].properties.name + '</strong><br><b>' + states[0].properties.incidents + '</b> disasters<br><br>'+legendText;
  } else {
    document.getElementById('legend').innerHTML = '<p>Hover over a state!</p>'+legendText;
  }
});

  function almostFlatten(arr) {
    return arr.reduce(function (flat, toFlatten) {
      return flat.concat(Array.isArray(toFlatten[0]) ? almostFlatten(toFlatten) : [toFlatten]);
    }, []);
  }
</script>

</body>
</html>