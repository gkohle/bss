
<!DOCTYPE html>
<html>
<head>

<style>
body {position: relative;font-family: Verdana, sans-serif; font-size: 20px; text-align: center; width: 440px}


</style>
</head>

<body>

<div id="Image"></div>
BSS would like to thank<br> <img id="myImg" src="https://drive.google.com/uc?export=view&id=1GkVauVWaSNSyM9Pvtp3eaag4AkVi3N2g" height="220">
<br>for their support of Thunder Athletics<br>
<script>




if (typeof(Storage) !== undefined) {
    var Image = new Array();
    Image[0] = "https://drive.google.com/uc?export=view&id=1vXMUJG0a0PBpk5m2fXcIrQ-GZ-x9VKJq";//pfad
    Image[1] = "https://drive.google.com/uc?export=view&id=1k86UKPfCciCcn4n5RZH-g2j00IxXih0k";//baughn
    Image[2] = "https://drive.google.com/uc?export=view&id=1kFDAkdMVvD9RGvp8xQhMn4oTBqW6dgjV";//name
    Image[3] = "https://drive.google.com/uc?export=view&id=1ecarbURyovaL-Oy4M8KCDXitnm9zO7kK";//name

    if (!sessionStorage.imgIndex) {
     	  sessionStorage.imgIndex = 0;
    		} else {
     	  sessionStorage.imgIndex = (sessionStorage.imgIndex >= (Image.length-1)) ? 0: parseInt(sessionStorage.imgIndex)+1;
    		}
    document.getElementById('myImg').src = Image[sessionStorage.imgIndex];
	} else {
    //LocalStorage not supported with this browser
	}
</script>
 
</body>
</html>
