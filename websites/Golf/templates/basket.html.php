<main class="admin">

	<section class="left">
		<ul>
		<li><h3 style="color:white;">Info:-</h3></li>
		</ul>
	</section>

	<section class="right">

		<h1>Your Basket</h1>

	<ul class="furniture">


	<?php
	$total = 0;
	$ptotal = 0;
	foreach ($basket as $item) {
	 ?>
		<li>
		<div class="details">
        <img src="/images/equipment/<?=$item->product_id?>.jpg"/>
		<h2><?=$item->getProduct()->name?> </h2>
		<h3>Category: <?=$item->getProduct()->getCategory()->title?></h3>
		<h4>Price: £ <?=$item->getProduct()->price?></h4>
        <h4>Quantity: <?=$item->quantity?></h4>
		<p>Description: <?=$item->getProduct()->desc?> </p>

		</div>
        <form action="/basket" method="post" enctype="multipart/form-data"> 
		<input type="hidden" name="basket[basket_id]" value=<?=$item->basket_id?>>
		<input type="submit" name="remove" value="Remove from Basket">
		</form>
		</li>
	<?php $ptotal = $total + ($item->getProduct()->price * $item->quantity); $total = $ptotal; }?>

		<?php if(isset($_SESSION['user'])){?>
		<li>
		<div class="details">
        <img src="/images/member.jfif"/>
		<h2>Membership</h2>
		<h4>Price: £ 20.00 (p/m)</h4>
        <h4>Quantity: 1</h4>
		<p>Description:  The payments will be made on every month on the day booked e.g if booked on the sixth of May payments will occur on the 6th of June. </p>
		<p> Your Booking Date: <?=$_SESSION['user']['date']?></p>
		</div>
		<form action="/membership" method="post" enctype="multipart/form-data"> 
		<input type="submit" name="logout" value="Remove from Basket">
		</form>
		</li>
		<?php $total = $total + 20; } ?>

	<?php foreach ($buggy as $bug) {
	 ?>
		<li>
		<div class="details">
        <img src="/images/buggy.jfif"/>
		<h2>Buggy Hire</h2>
		<h4>Price: £ 15</h4>
		<p>Date: <?=$bug->date?> </p>
		<p>From: <?=$bug->fromdate?> </p>
		<p>To: <?=$bug->todate?></p>
		</div>
        <form action="/basket" method="post" enctype="multipart/form-data"> 
		<input type="hidden" name="basket[buggy_id]" value=<?=$bug->buggy_id?>>
		<input type="submit" name="removeB" value="Remove from Basket">
		</form>
		</li>
	<?php $total = $total + 15; }?>



        <li>
            <h3>Sub Total | £<?=$total?></h3>
            <?php if($ptotal>0){ $total = $total + 5;?>
		
            <p> Shipping cost: £5 </p>
            <?php } ?>
            <h2>Total | £<?=$total?> </h2>

            <form action="/checkout" method='Post' enctype="multipart/form-data">

			<input type="hidden" name="order[total]" value =<?=$total?>>
			<input type="hidden" name="order[curency]" value ="GBP">
			<input type="hidden" name="order[language]" value ="en_US">
            <input type="submit" name="checkout" value="Checkout">
            </form>
        </li>

</ul>

</section>
	</main>