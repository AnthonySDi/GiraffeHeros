<!-- Begin find-giraffe.php-->

<main id="find">
	<?php 
		if(isset($g_heroes)){
			foreach($g_heroes as $row){
	?>
	<section class="giraffe">
		<div class="ghero">
			<a href="view-giraffe/<?php echo $row->id; ?>">
				<?php echo $row->h_name; ?>
			</a>
		</div>

		<div class="intro">
		<?php echo $row->blurb; ?>
		</div>


	</section>
		<?php
		 
			} // end of foreach
		
		} // end of else
	echo '<div id="pagination">';
	echo $this->pagination->create_links();
	echo '</div>';
	?>


</main>

<aside>
<!--  searchGiraffe & testingQuery-->
	<form action="<?php echo base_url(); ?>MainForms/searchGiraffe" method="POST">
		<label>Name:</label>
			<select name="name" size="1" id="Name" >
				<option> Select </option>
					<?php 
						if(isset($names)){
							foreach($names as $row){

					?>

	<option value="<?php echo $row->h_name;?>"> <?php echo $row->h_name;?> </option>

					<?php
							} // end of foreach

						} // end of if
					?>
	</select>

	<label>Field(s) of Giraffe Work</label>
	<select name="FieldsOfWork" size="1" id="Name" >
		<option> Select </option>
		</option>
		<option value="animal protection" >animal protection</option>
		<option value="arts" >arts</option>
		<option value="business/workplace issues" >business/workplace issues</option>
		<option value="civil liberties" >civil liberties</option>
		<option value="community development" >community development</option>
		<option value="criminal justice" >criminal justice</option>
		<option value="education" >education</option>
		<option value="elder issues" >elder issues</option>
		<option value="environment" >environment</option>
		<option value="ethnicity/minorities" >ethnicity/minorities</option>
		<option value="gender issues" >gender issues</option>
		<option value="government" >government</option>
		<option value="health/public health/disabilities" >health/public health/disabilities</option>
		<option value="international aid" >international aid</option>
		<option value="international peace" >international peace</option>
		<option value="media issues" >media issues</option>
		<option value="poverty" >poverty</option>
		<option value="public safety" >public safety</option>
		<option value="substance abuse" >substance abuse</option>
		<option value="whistle blowers" >whistle blowers</option>
		<option value="womens issues" >womens issues</option>
		<option value="youth issues" >youth issues</option>
</select>
	</select>
	<label>Location</label>
	<select name="location">
	<option> Select </option>
	<option value="AFRICA" >AFRICA</option>
	<option value="-Burundi" >-Burundi</option>
	<option value="-Dem Republic of Congo" >-Dem Republic of Congo</option>
	<option value="-Ethiopia" >-Ethiopia</option>
	<option value="-Ghana" >-Ghana</option>
	<option value="-Kenya" >-Kenya</option>
	<option value="-Liberia" >-Liberia</option>
	<option value="-Malawi" >-Malawi</option>
	<option value="-Mali" >-Mali</option>
	<option value="-Mozambique" >-Mozambique</option>
	<option value="-Niger" >-Niger</option>
	<option value="-Nigeria" >-Nigeria</option>
	<option value="-Rwanda" >-Rwanda</option>
	<option value="-Sierra Leone" >-Sierra Leone</option>
	<option value="-Somalia" >-Somalia</option>
	<option value="-South Africa" >-South Africa</option>
	<option value="-Sudan" >-Sudan</option>
	<option value="-Swaziland" >-Swaziland</option>
	<option value="-Tanzania" >-Tanzania</option>
	<option value="-Uganda" >-Uganda</option>
	<option value="-Zimbabwe" >-Zimbabwe</option>
	<option value="ASIA" >ASIA</option>
	<option value="-Afghanistan" >-Afghanistan</option>
	<option value="-Bangladesh" >-Bangladesh</option>
	<option value="-Cambodia" >-Cambodia</option>
	<option value="-China" >-China</option>
	<option value="-Hong Kong" >-Hong Kong</option>
	<option value="-India" >-India</option>
	<option value="-Indonesia" >-Indonesia</option>
	<option value="-Iraq" >-Iraq</option>
	<option value="-Israel" >-Israel</option>
	<option value="-Lebanon" >-Lebanon</option>
	<option value="-Malaysia" >-Malaysia</option>
	<option value="-Nepal" >-Nepal</option>
	<option value="-Pakistan" >-Pakistan</option>
	<option value="-Philippines" >-Philippines</option>
	<option value="-Russia" >-Russia</option>
	<option value="-Singapore" >-Singapore</option>
	<option value="-South Korea" >-South Korea</option>
	<option value="-Sri Lanka" >-Sri Lanka</option>
	<option value="-Syria" >-Syria</option>
	<option value="-Thailand" >-Thailand</option>
	<option value="-Turkey" >-Turkey</option>
	<option value="-Vietnam" >-Vietnam</option>
	<option value="CENTRAL AMERICA" >CENTRAL AMERICA</option>
	<option value="-Borneo" >-Borneo</option>
	<option value="-Dominican Republic" >-Dominican Republic</option>
	<option value="-El Salvador" >-El Salvador</option>
	<option value="-Guatemala" >-Guatemala</option>
	<option value="-Honduras" >-Honduras</option>
	<option value="-Mexico" >-Mexico</option>
	<option value="-Nicaragua" >-Nicaragua</option>
	<option value="Cuba" >Cuba</option>
	<option value="EUROPE" >EUROPE</option>
	<option value="-Belgium" >-Belgium</option>
	<option value="-Bosnia" >-Bosnia</option>
	<option value="-Croatia" >-Croatia</option>
	<option value="-Czech Republic" >-Czech Republic</option>
	<option value="-England" >-England</option>
	<option value="-France" >-France</option>
	<option value="-Germany" >-Germany</option>
	<option value="-Hungary" >-Hungary</option>
	<option value="-Ireland" >-Ireland</option>
	<option value="-Italy" >-Italy</option>
	<option value="-Lithuania" >-Lithuania</option>
	<option value="-Norway" >-Norway</option>
	<option value="-Poland" >-Poland</option>
	<option value="-Romania" >-Romania</option>
	<option value="-Serbia" >-Serbia</option>
	<option value="-Slovakia" >-Slovakia</option>
	<option value="-Switzerland" >-Switzerland</option>
	<option value="-Ukraine" >-Ukraine</option>
	<option value="NORTH AMERICA" >NORTH AMERICA</option>
	<option value="Canada" >Canada</option>
	<option value="Haiti" >Haiti</option>
	<option value="Jamaica" >Jamaica</option>
	<option value="United States" >United States</option>
	<option value="-Alabama" >-Alabama</option>
	<option value="-Alaska" >-Alaska</option>
	<option value="-Arizona" >-Arizona</option>
	<option value="-Arkansas" >-Arkansas</option>
	<option value="-California" >-California</option>
	<option value="-Colorado" >-Colorado</option>
	<option value="-Connecticut" >-Connecticut</option>
	<option value="-Florida" >-Florida</option>
	<option value="-Georgia" >-Georgia</option>
	<option value="-Hawaii" >-Hawaii</option>
	<option value="-Idaho" >-Idaho</option>
	<option value="-Illinois" >-Illinois</option>
	<option value="-Indiana" >-Indiana</option>
	<option value="-Iowa" >-Iowa</option>
	<option value="-Kansas" >-Kansas</option>
	<option value="-Kentucky" >-Kentucky</option>
	<option value="-Louisiana" >-Louisiana</option>
	<option value="-Maine" >-Maine</option>
	<option value="-Maryland" >-Maryland</option>
	<option value="-Massachusetts" >-Massachusetts</option>
	<option value="-Michigan" >-Michigan</option>
	<option value="-Minnesota" >-Minnesota</option>
	<option value="-Mississippi" >-Mississippi</option>
	<option value="-Missouri" >-Missouri</option>
	<option value="-Montana" >-Montana</option>
	<option value="-Nebraska" >-Nebraska</option>
	<option value="-Nevada" >-Nevada</option>
	<option value="-New England" >-New England</option>
	<option value="-New Hampshire" >-New Hampshire</option>
	<option value="-New Jersey" >-New Jersey</option>
	<option value="-New Mexico" >-New Mexico</option>
	<option value="-New York" >-New York</option>
	<option value="-North Carolina" >-North Carolina</option>
	<option value="-North Dakota" >-North Dakota</option>
	<option value="-Ohio" >-Ohio</option>
	<option value="-Oklahoma" >-Oklahoma</option>
	<option value="-Oregon" >-Oregon</option>
	<option value="-Pennsylvania" >-Pennsylvania</option>
	<option value="-Rhode Island" >-Rhode Island</option>
	<option value="-South Carolina" >-South Carolina</option>
	<option value="-South Dakota" >-South Dakota</option>
	<option value="-Tennessee" >-Tennessee</option>
	<option value="-Texas" >-Texas</option>
	<option value="-Utah" >-Utah</option>
	<option value="-Vermont" >-Vermont</option>
	<option value="-Virginia" >-Virginia</option>
	<option value="-Washington" >-Washington</option>
	<option value="-Washington DC" >-Washington DC</option>
	<option value="-West Virginia" >-West Virginia</option>
	<option value="-Wisconsin" >-Wisconsin</option>
	<option value="-Wyoming" >-Wyoming</option>
	<option value="OCEANIA" >OCEANIA</option>
	<option value="-Australia" >-Australia</option>
	<option value="-Marshall Islands" >-Marshall Islands</option>
	<option value="-New Zealand" >-New Zealand</option>
	<option value="SOUTH AMERICA" >SOUTH AMERICA</option>
	<option value="-Argentina" >-Argentina</option>
	<option value="-Bolivia" >-Bolivia</option>
	<option value="-Brazil" >-Brazil</option>
	<option value="-Chile" >-Chile</option>
	<option value="-Columbia" >-Columbia</option>
	<option value="-Ecuador" >-Ecuador</option>
	<option value="MIDDLE EAST" >MIDDLE EAST</option>
	<option value="International" >International</option>
	<option value="National" >National</option>
	<option value="GLOBAL" >GLOBAL</option>
</select>
</select>
	<label>Gender</label>
	<select name="gender">
	<option>Select</option>
	<option value="F (female)">Female</option>
	<option value="M (male)">Male</option>
	<option value="C (couple)">Couple</option>
	<option value="G (group)">Group</option>
	<option value="O (other)">Other</option>
	</select>
	<label>Age When Commended</label>
	<select name="age">
	<option>Select</option>
	<option value="youth (12 or less)" >youth (12 or less)</option>
	<option value="teen (13-19)" >teen (13-19)</option>
	<option value="adult (20-64)" >adult (20-64)</option>
	<option value="senior (over 65)" >senior (over 65)</option>
	</select>
	<label>Occupation</label>
	<select name="occupation">
	<option>Select</option>
	<option value="Artist" >Artist</option>
	<option value="Athlete" >Athlete</option>
	<option value="Attorney" >Attorney</option>
	<option value="Business person" >Business person</option>
	<option value="Carpenter" >Carpenter</option>
	<option value="Civil Servant" >Civil Servant</option>
	<option value="Clergy" >Clergy</option>
	<option value="Community Organizer" >Community Organizer</option>
	<option value="Educator" >Educator</option>
	<option value="Engineer" >Engineer</option>
	<option value="Entertainer" >Entertainer</option>
	<option value="Entrepreneur" >Entrepreneur</option>
	<option value="Environmentalist" >Environmentalist</option>
	<option value="Farmer" >Farmer</option>
	<option value="Government Employee" >Government Employee</option>
	<option value="Homemaker" >Homemaker</option>
	<option value="Journalist" >Journalist</option>
	<option value="Librarian" >Librarian</option>
	<option value="Medical Professional" >Medical Professional</option>
	<option value="Military personnel" >Military personnel</option>
	<option value="Pilot" >Pilot</option>
	<option value="Police Officer" >Police Officer</option>
	<option value="Psychologist" >Psychologist</option>
	<option value="Public Official" >Public Official</option>
	<option value="Reporter" >Reporter</option>
	<option value="Scientist" >Scientist</option>
	<option value="Social Worker" >Social Worker</option>
	<option value="Student" >Student</option>
	<option value="Trucker" >Trucker</option>
	<option value="Volunteer" >Volunteer</option>
	<option value="Other" >Other</option>
	<option value="Nonprofit" >Nonprofit</option>
	</select>
	<div id="submitButton">
	<input type="submit" name="submit" "value="Search">
	</div>



	</form>


</aside>




<p>find-giraffe.php</p>
<!-- End find-giraffe.php-->