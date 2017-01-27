<!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="page">
		<div id="header">
			<h1 id="header">
				Computer Science geneology tree
			</h1>
		</div>
		<!--main biody to change per page-->
		<div id="mainBody" ng-app="myapp">
			<form id="form" onsubmit="return false;">
				Search here : <br>
    		<input style="position:relative; top:80%; left:5%; width:60%;" type="text"  id="search_input" name ="search_input" /><br>
				<input style="position:relative; top:50%; left:15%; width:40%;" type="button" value="Submit" onclick="othername();" /><br>
				Advisors name : <br>
				<a href = "http://www.google.com"><input style="position:relative; top:80%; left:5%; width:60%;" type="text"  id="Advisor" name ="Advisor" /></a><br>
				Advisees name : <br>
				<input style="position:relative; top:80%; left:5%; width:60%;" type="text"  id="Advisee" name ="Advisee" /><br>
				First name : <br>
				<input style="position:relative; top:80%; left:5%; width:60%;" type="text"  id="First_na" name ="First_na" /><br>
				Last name : <br>
				<input style="position:relative; top:80%; left:5%; width:60%;" type="text"  id="Last_Na" name ="Last_Na" /><br>
				Country of origin : <br>
				<input style="position:relative; top:80%; left:5%; width:60%;" type="text"  id="Con" name ="Con" /><br>
				Institute : <br>
				<input style="position:relative; top:80%; left:5%; width:60%;" type="text"  id="Ins" name ="Ins" /><br>
				Thesis : <br>
				<input style="position:relative; top:80%; left:5%; width:60%;" type="text"  id="Thesi" name ="Thesi" /><br>
				Year : <br>
				<input style="position:relative; top:80%; left:5%; width:60%;" type="text"  id="Yea" name ="Yea" /><br>

				<p id="name"></p>
			</form>


		</div>
		<!--end of main body-->
		<div id="sidebar" class="sidenav">
			<ul>
				<h3>
					<p></p>
					<li id="home_button"><a href="home.php">Home</a></li>
					<p></p>
					<li id="about_button"><a href="about.html">About</a></li>
					<p></p>
					<li id="submit_button"><a href="submit.html">Submit</a></li>
					<p></p>
					</h3>
			</ul>
		</div>
		<div class="footer">
			<h3>
				<a href="home.php">Home</a>
				<a href="about.html">About</a>
				<a href="submit.html">Submit</a>
			</h3>
		</div>
	</div>

	<script>
	function othername()
	{
			var val = document.getElementById('search_input').value;

	         //parse the json file contents
		 	var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange=function() {
           	if (this.readyState == 4 && this.status == 200) {
          		var result = this.responseText;
							//alert(result);
			 				var res = result.split("**");
			 				//document.getElementById('con').value=res[1];
			 				document.getElementById('Advisor').value=res[0];
			 				document.getElementById('Advisee').value=res[1];
			 				document.getElementById('First_na').value=res[2];
			 				document.getElementById('Last_Na').value=res[3];
			 				document.getElementById('Con').value=res[4];
			 				document.getElementById('Ins').value=res[5];
			 				document.getElementById('Thesi').value=res[6];
			 				document.getElementById('Yea').value=res[7];
    				}
  		};
 			xhttp.open("GET", "get_file.php?name=" +val , true);
 			xhttp.send();
	}
	</script>
</body>
