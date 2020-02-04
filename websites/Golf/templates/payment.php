
<main>

<?php

echo($_POST['order']['total']);


	$AMOUNT = $_POST['order']['total'];
	// $CURRENCY = $_POST['order']['curency'];
	// $LANGUAGE = $_POST['order']['language'];
	$ORDERID = uniqid();
	$PSPID = 'UoN2020Grp2';

	$SHAIN = '8aeb2827-5c65-4c5d-a6cb-237c585f0172';
	//address details should come from payment form
	// $CUST_NAME = $_POST['customer']['name'];
	// $EMAIL = $_POST['customer']['email'];
	// $OWNERADDRESS = $_POST['customer']['address'];
	// $OWNERCITY = $_POST['customer']['city'];
	// $OWNERTELNO = $_POST['customer']['telno'];
	// $OWNERZIP = $_POST['customer']['postcode'];
	$CURRENCY = 'GBP';
	$LANGUAGE = 'en_US';
	$CUST_NAME = 'KEasdasd kas';
	$EMAIL = 'soundwawe@yahoo.com';
	$OWNERADDRESS = '6 Elena';
	$OWNERTOWN = 'London';
	$OWNERTELNO = '07885946469';
	$OWNERZIP = 'LN455YT';

	$CARDBRAND='MASTERCARD';
	$CARDNO='4111111111111111';
	
	$ACTUALAMOUNT = (float)$AMOUNT * 100;

	$SHASIGNATURE =	
					'AMOUNT='. $ACTUALAMOUNT . $SHAIN.									
					'CN='. $CUST_NAME.$SHAIN.
					'CURRENCY='. $CURRENCY . $SHAIN.
					'EMAIL='.$EMAIL.$SHAIN.
					'LANGUAGE='. $LANGUAGE . $SHAIN.
					'ORDERID='. $ORDERID . $SHAIN.
					'OWNERADDRESS='	. $OWNERADDRESS . $SHAIN.
					'OWNERCTY='. $OWNERTOWN. $SHAIN.
					'OWNERTELNO='. $OWNERTELNO .$SHAIN.						
					'OWNERZIP='. $OWNERZIP .$SHAIN.						
					'PSPID='. $PSPID . $SHAIN;
	$SHASIGN = SHA1($SHASIGNATURE);
	//$SHASIGN = hash('sha256', $SHASIGNATURE);
	//$SHASIGN = hash('sha512', $SHASIGNATURE);
?>	
	<!-- <body bgcolor="#80CC99"> -->
		<font face="Tahoma" color="#000000">
			<h1 align="center">Payment Page</h1>
			
			<p>Transaction Value = <?php print $ACTUALAMOUNT ?></p>
			<p>Transaction Currency = <?php print $CURRENCY ?></p>
			<p>Language = <?php print $LANGUAGE ?></p>
			<p>Order ID of transaction = <?php print $ORDERID ?></p>
			<p>PSPID = <?php print $PSPID ?></p>
			<p>SHA String = <?php print $SHASIGNATURE ?></p>
			<p>Encrypted SHA Signature = <?php print $SHASIGN ?></p>
			

			<div class="container align-center">

			<form method="post" action="https://mdepayments.epdq.co.uk/ncol/test/orderstandard.asp" id=form1 name=form1>
				<div class="form-group">		

				<input type="hidden" name="AMOUNT" value="<?php print $ACTUALAMOUNT?>">
								
				<input type="hidden"  name="CN" value="<?php print $CUST_NAME?>">
				<input type="hidden"  name="CURRENCY" value="<?php print $CURRENCY?>">
				<input type="hidden"  name="EMAIL" value="<?php print $EMAIL?>">
				<input type="hidden"  name="LANGUAGE" value="<?php print $LANGUAGE?>">				
				<input type="hidden"  name="ORDERID" value="<?php print $ORDERID?>">
				<input type="hidden" name="OWNERADDRESS" value="<?php print $OWNERADDRESS?>">
				<input type="hidden" name="OWNERCTY" value="<?php print $OWNERTOWN?>">
				<input type="hidden" name="OWNERTELNO" value="<?php print $OWNERTELNO?>">
				<input type="hidden" name="OWNERZIP" value="<?php print $OWNERZIP?>">

				<input type="hidden" name="PSPID" value="<?php print $PSPID?>">
				<input type="hidden" name="SHASIGN" value="<?php print $SHASIGN?>">

				<h3>Total: <?=$AMOUNT?></h3>

				<input class="btn btn-secondary" type="submit" value="Procceed to payment">
				</div>
			</form>
			</div> 

			
		</font>













		<FORM METHOD="post" ACTION="https://mdepayments.epdq.co.uk/ncol/test/orderstandard.asp" id=form1 name=form1>

		<div class="form-group">	
			


				<?php 
				
				$LAST = $ACTUALAMOUNT -($AMOUNT *40)-($AMOUNT *30)-($AMOUNT *20);
				$SHASIGNATURE =	
				'AMOUNT='. $ACTUALAMOUNT . $SHAIN.									
				'AMOUNT1='. ($AMOUNT *40). $SHAIN.									
				'AMOUNT2='. ($AMOUNT*30) . $SHAIN.									
				'AMOUNT3='. ($AMOUNT*20) . $SHAIN.									
				'AMOUNT4='. $LAST . $SHAIN.									
				'CN='. $CUST_NAME.$SHAIN.
				'CURRENCY='. $CURRENCY . $SHAIN.
				'EMAIL='.$EMAIL.$SHAIN.
				'EXECUTIONDATE2=04/03/2020' .$SHAIN.
				'EXECUTIONDATE3=04/04/2020' .$SHAIN.
				'EXECUTIONDATE4=04/05/2020' .$SHAIN.
				'LANGUAGE='. $LANGUAGE . $SHAIN.
				'ORDERID='. $ORDERID . $SHAIN.
				'OWNERADDRESS='	. $OWNERADDRESS . $SHAIN.
				'OWNERCTY='. $OWNERTOWN. $SHAIN.
				'OWNERTELNO='. $OWNERTELNO .$SHAIN.						
				'OWNERZIP='. $OWNERZIP .$SHAIN.						
				'PSPID='. $PSPID . $SHAIN;
				$SHASIGN = SHA1($SHASIGNATURE);
				?>
				<input type="hidden" name="AMOUNT" value="<?php print $ACTUALAMOUNT?>">
				<input type="hidden" name="AMOUNT1" value="<?php print ($AMOUNT*40)?>">
				<input type="hidden" name="AMOUNT2" value="<?php print ($AMOUNT*30)?>">				
				<input type="hidden" name="AMOUNT3" value="<?php print ($AMOUNT*20)?>">				
				<input type="hidden" name="AMOUNT4" value="<?php print $LAST?>">				
				<input type="hidden"  name="CN" value="<?php print $CUST_NAME?>">
				<input type="hidden"  name="CURRENCY" value="<?php print $CURRENCY?>">
				<input type="hidden"  name="EMAIL" value="<?php print $EMAIL?>">
				<input type="hidden" name="EXECUTIONDATE2" value="04/03/2020">
				<input type="hidden" name="EXECUTIONDATE3" value="04/04/2020">
				<input type="hidden" name="EXECUTIONDATE4" value="04/05/2020">
				<input type="hidden"  name="LANGUAGE" value="<?php print $LANGUAGE?>">				
				<input type="hidden"  name="ORDERID" value="<?php print $ORDERID?>">
				<input type="hidden" name="OWNERADDRESS" value="<?php print $OWNERADDRESS?>">
				<input type="hidden" name="OWNERCTY" value="<?php print $OWNERTOWN?>">
				<input type="hidden" name="OWNERTELNO" value="<?php print $OWNERTELNO?>">
				<input type="hidden" name="OWNERZIP" value="<?php print $OWNERZIP?>">

				<input type="hidden" name="PSPID" value="<?php print $PSPID?>">
				<input type="hidden" name="SHASIGN" value="<?php print $SHASIGN?>">

				<h3>Total: <?=$AMOUNT?></h3>

	<input type="submit" value="Your button lib" id=submit2 name=submit2>
	</div>
	</form>
	
</main>
