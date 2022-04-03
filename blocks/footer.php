

<div class="footer-wrapper position-relative overflow-hidden">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="footer-menu">
					<ul class="pt-2">
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/index.php" target="_blank">Home</a></li>
						<li class="footer-menu-links"><a href="<?php echo $start_link; ?>">Get Started</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/contact-us.php" target="_blank">Contact</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/references.php" target="_blank">References</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/terms.php" target="_blank">Terms Of Use</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/disclaimer.php" target="_blank">Disclaimer</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/privacy.php" target="_blank">Privacy Policy</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/shipping.php" target="_blank">Shipping Policy</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/refunds.php" target="_blank">Refund Policy</a></li>
						<!-- <?php if($vendor_type!="BG"){?>
							<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/affiliates.php" target="_blank">Affiliates</a></li>
						<?php }?> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- <p class=" py-1"></p> -->
	<hr class="mt-0" size="2" style="border: 1px solid #9c9c9c; width: 100%;" />

	<div class="py-3"></div>

	<div class="disclaimer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-12 ">
				<img class="img-fluid d-md-block d-none mt-1 pl-4" src="<?php echo $base_url;?>/statics/img/footer-logo.png">
					<img class=" d-md-none d-block mx-auto pb-4" style="max-width: 93%;height: auto;"src="<?php echo $base_url;?>/statics/img/footer-logo.png">
					<div class="py-1 py-md-0"></div>			
				</div>	
				
				<div class="col-md-9 col-12 px-2">
					<?php include($root_folder."/blocks/pg/".$vendor_type."/footer_disclaimer.php")?>
				</div>	
			</div>
		</div>
	</div>
	<p><span id="disclaimer"></span></p>
	
	<div class="copyright mt-3 py-2">
		<div class="text-center">Copyright &copy; <?php echo date("Y"); ?> <b><a  href="<?php echo $domain; ?>" style="color:black;"><?php echo $product_name; ?></a></b> | All Rights Reserved</div>
	</div>
</div>
<?php include($root_folder."/blocks/pg/".$vendor_type."/footer.php")?>
