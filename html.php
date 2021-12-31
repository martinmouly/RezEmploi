<!doctype html>
<html lang="en">

	<head>
		<?php
    include("side.php");
    $side = new Side();
    $side->ethPourPierroHead();
    ?>	</head>

	<body>

		
				<button onclick="userLoginOut()" id="buttonText" style="width:100px;height:26px;">Log in</button>
				<button class='enableEthereumButton btn'>First click here ser</button>
                <button class='sendEthButton btn'>then here</button>

		<script src="js/main.js?v=009"></script>
		<script src="js/web3-modal.js?v=001"></script>

	</body>

</html>