<html>
<?php
	$AMOUNT = $_POST['AMOUNT'];
	$CURRENCY = $_POST['CURRENCY'];
	$LANGUAGE = $_POST['LANGUAGE'];
	$ORDERID = $_POST['ORDERID'];
	$PSPID = $_POST['PSPID'];
	$SHAIN = $_POST['SHAIN'];
	
	$ACTUALAMOUNT = (float)$AMOUNT * 100;

	$SHASIGNATURE =	'AMOUNT='. $ACTUALAMOUNT . $SHAIN.
					'CURRENCY='. $CURRENCY . $SHAIN.
					'LANGUAGE='. $LANGUAGE . $SHAIN.
					'ORDERID='. $ORDERID . $SHAIN.
					'PSPID='. $PSPID . $SHAIN;
	$SHASIGN = SHA1($SHASIGNATURE);
	//$SHASIGN = hash('sha256', $SHASIGNATURE);
	//$SHASIGN = hash('sha512', $SHASIGNATURE);
?>	
	<head>
		
	</head>
	<body bgcolor="#80CC99">
		<font face="Tahoma" color="#000000">
			<h1 align="center">Payment Page</h1>
			<p></p>
			<p>Transaction Value = <?php print $ACTUALAMOUNT ?></p>
			<p>Transaction Currency = <?php print $CURRENCY ?></p>
			<p>Language = <?php print $LANGUAGE ?></p>
			<p>Order ID of transaction = <?php print $ORDERID ?></p>
			<p>PSPID = <?php print $PSPID ?></p>
			<p>SHA String = <?php print $SHASIGNATURE ?></p>
			<p>Encrypted SHA Signature = <?php print $SHASIGN ?></p>
			
			<form method="post" action="https://mdepayments.epdq.co.uk/ncol/test/orderstandard.asp" id=form1 name=form1>
				<input type="hidden" name="AMOUNT" value="<?php print $ACTUALAMOUNT?>">
				<input type="hidden" name="CURRENCY" value="<?php print $CURRENCY?>">
				<input type="hidden" name="LANGUAGE" value="<?php print $LANGUAGE?>">
				<input type="hidden" name="ORDERID" value="<?php print $ORDERID?>">
				<input type="hidden" name="PSPID" value="<?php print $PSPID?>">
				<input type="hidden" name="SHASIGN" value="<?php print $SHASIGN?>">
				<input type="submit" name="SUBMIT" value="Pay up!" style="background-color:#FFFFFF; height:30; width:150">
			</form>
		</font>
	</body>
</html>