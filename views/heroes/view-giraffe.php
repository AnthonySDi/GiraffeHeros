<!-- Begin view-giraffe.php -->
<main id="single">
	<?php 
		if(isset($a_giraffe)){
			foreach($a_giraffe as $row){
	?>
	<section>
		<div class="name">
			<h2>
				<?php echo $row->h_name; ?>
			</h2>
		</div>
		<div class="name">
			<img src="<?php echo base_url(); ?>public/images/<?php echo $row->image; ?>" alt="Picture of Giraffe <?php echo $row->h_name; ?>">
		</div>

		<div class="story">
		<?php echo $row->story; ?>
		</div>


	</section>
		<?php
		 
			} // end of foreach
		
		} // end of else

	?>



</main>
<!-- End view-giraffe.php -->