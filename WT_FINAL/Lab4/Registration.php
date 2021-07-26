<html>
	<head></head>
	<body>
		<form>
			<input id="uname" onkeyup="writeOp(this)" type="text" placeholder="Username"><br>
			<span id="op"></span><br>
			<input type="password" placeholder="Password"><br>
		</form>
		<button id="btn_g" onclick="viewGFrom()">Login with Google</button>
		<form id="g_form" style="display:none;">
			<input type="text" placeholder="Gmail"><br>
			<input type="password" placeholder="Gmail Password"><br>		
		</form>
		<button onclick="turnOn()">Turn On</button>
		<img id="bulb" src="pic_bulboff.gif">
		<button onclick="turnOn()">Turn Off</button>
		<br>
		<span onmouseover="showdetails()" onmouseout="hideDetails()">AIUB</span>
		<p id="info" style="display:none">American International University Bangladesh</p>
		<script src="Myjs.js"></script>
	</body>
</html>