
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Climate Disasters</title>

<script type="text/javascript">
function changeContent(str)
{
if (str=="")
  {
  // if blank, we'll set our innerHTML to be blank.
  document.getElementById("content").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {    // code for IE7+, Firefox, Chrome, Opera, Safari
      // create a new XML http Request that will go to our generator webpage.
      xmlhttp=new XMLHttpRequest();
  }  // on state change
  xmlhttp.onreadystatechange=function()
  {
  // if we get a good response from the webpage, display the output
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
  {
      document.getElementById("content").innerHTML=xmlhttp.responseText;
    }
  }
 // use our XML HTTP Request object to send a get to our content php. 
xmlhttp.open("GET","filterstates.php?disastertype="+str, true);
xmlhttp.send();
}
</script>

</head>
<body>

	<br><br><br>Start of Page<br><br><br>
    <select name="incidentType" onChange="changeContent(this.value)">
    	<option value="Flood">FLOOD</option>
        <option value="Snow">SNOW</option>
        <option value="Tornado">TORNADO</option>
    </select>
    
    <div id="content">  
    
    </div>

</body>
</html>