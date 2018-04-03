<!-- Begin admin add-Giraffe page -->
<?php echo validation_errors(); ?>
<main id="addgiraffe">
	<form action="<?php echo base_url() ;?>AdminForms/addGiraffes" method="post">
	<section class="topgroup">
		<section class="formfield">
			<label class="control-label">Name</label>             
			<input type="text" class="form-control" id="Name" name="GiraffeName" placeholder="Smith, John" required="">
		</section>
		<section class="formfield">
			<label class="control-label">Activism Types</label>  
			<select name="type_of_activism1" size="1" class="inputbox field_workfield" >
				<option value="0">---- select ----</option>
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
			<select name="type_of_activism2" size="1" class="inputbox field_workfield" >
				<option value="0">---- select ----</option>
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
			<select name="type_of_activism3" size="1" class="inputbox field_workfield" >
				<option value="0">---- select ----</option>
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
		</section>
		<section class="formfield">     

			<label class="control-label">Global Area</label> 
			<select name="global_area_1" size="1" class="inputbox field_workfield" >
				<option value="0" >---- select ----</option>
				<option value="AFRICA" >AFRICA</option>
				<option value="ASIA" >ASIA</option>
				<option value="CENTRAL AMERICA" >CENTRAL AMERICA</option>
				<option value="EUROPE" >EUROPE</option>
				<option value="NORTH AMERICA" >NORTH AMERICA</option>
				<option value="OCEANIA" >OCEANIA</option>
				<option value="SOUTH AMERICA" >SOUTH AMERICA</option>
				<option value="MIDDLE EAST" >MIDDLE EAST</option>
				<option value="International" >International</option>
				<option value="National" >National</option>
				<option value="GLOBAL" >GLOBAL</option>
			</select>
			<select name="global_area_2" size="1" class="inputbox field_workfield" >
				<option value="0" >---- select ----</option>
				<option value="AFRICA" >AFRICA</option>
				<option value="ASIA" >ASIA</option>
				<option value="CENTRAL AMERICA" >CENTRAL AMERICA</option>
				<option value="EUROPE" >EUROPE</option>
				<option value="NORTH AMERICA" >NORTH AMERICA</option>
				<option value="OCEANIA" >OCEANIA</option>
				<option value="SOUTH AMERICA" >SOUTH AMERICA</option>
				<option value="MIDDLE EAST" >MIDDLE EAST</option>
				<option value="International" >International</option>
				<option value="National" >National</option>
				<option value="GLOBAL" >GLOBAL</option>
			</select>
		</section>
		<section class="formfield">
			<label class="control-label">Country</label> 
			<select name="country_1" size="1" class="inputbox field_workfield" >
				<option value="0" >---- select ----</option>
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
				<option value="-Borneo" >-Borneo</option>
				<option value="-Dominican Republic" >-Dominican Republic</option>
				<option value="-El Salvador" >-El Salvador</option>
				<option value="-Guatemala" >-Guatemala</option>
				<option value="-Honduras" >-Honduras</option>
				<option value="-Mexico" >-Mexico</option>
				<option value="-Nicaragua" >-Nicaragua</option>
				<option value="Cuba" >Cuba</option>
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
				<option value="Canada" >Canada</option>
				<option value="United States" >United States</option>
				<option value="-Australia" >-Australia</option>
				<option value="-Marshall Islands" >-Marshall Islands</option>
				<option value="-New Zealand" >-New Zealand</option>
				<option value="-Argentina" >-Argentina</option>
				<option value="-Bolivia" >-Bolivia</option>
				<option value="-Brazil" >-Brazil</option>
				<option value="-Chile" >-Chile</option>
				<option value="-Columbia" >-Columbia</option>
				<option value="-Ecuador" >-Ecuador</option>
			</select>
			<select name="country_2" size="1" class="inputbox field_workfield" >
				<option value="0" >---- select ----</option>
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
				<option value="-Borneo" >-Borneo</option>
				<option value="-Dominican Republic" >-Dominican Republic</option>
				<option value="-El Salvador" >-El Salvador</option>
				<option value="-Guatemala" >-Guatemala</option>
				<option value="-Honduras" >-Honduras</option>
				<option value="-Mexico" >-Mexico</option>
				<option value="-Nicaragua" >-Nicaragua</option>
				<option value="Cuba" >Cuba</option>
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
				<option value="Canada" >Canada</option>
				<option value="United States" >United States</option>
				<option value="-Australia" >-Australia</option>
				<option value="-Marshall Islands" >-Marshall Islands</option>
				<option value="-New Zealand" >-New Zealand</option>
				<option value="-Argentina" >-Argentina</option>
				<option value="-Bolivia" >-Bolivia</option>
				<option value="-Brazil" >-Brazil</option>
				<option value="-Chile" >-Chile</option>
				<option value="-Columbia" >-Columbia</option>
				<option value="-Ecuador" >-Ecuador</option>
			</select>
		</section>
		<section class="formfield">
			<label class="control-label">State</label> 
			<select name="state_1" size="1" class="inputbox field_workfield" >
				<option value="0" >---- select ----</option>
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
			</select>
			<select name="state_2" size="1" class="inputbox field_workfield" >
				<option value="0" >---- select ----</option>
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
			</select>
		</section>
		<section class="formfield">
			<label class="control-label">Age</label>
			<select name="age">
			<option>Select</option>
				<option value="youth (12 or less)" >youth (12 or less)</option>
				<option value="teen (13-19)" >teen (13-19)</option>
				<option value="adult (20-64)" >adult (20-64)</option>
				<option value="senior (over 65)" >senior (over 65)</option>
			</select>
		</section>
		<section class="formfield">
			<label class="control-label">Gender</label> 
			<select name="gender">
				<option>Select</option>
				<option value="F (Female)">Female</option>
				<option value="M (Male)">Male</option>
				<option value="C (Couple)">Couple</option>
				<option value="G (Group)">Group</option>
				<option value="O (Other)">Other</option>
			</select>
		</section>
	</section>
	<section class="botgroup">
		<section class="botgrouptop">
				<section class="formfield">
				<label class="control-label Commended">Home When Commended</label> 
				<input type="text" class="form-control" id="type_of_activism1" name="home_when_commended">
			</section>
			<section class="formfield">
				<label class="control-label">Home Now</label> 
				<input type="text" class="form-control" id="type_of_activism1" name="home_now">
			</section>
			<section class="formfield">
				<label class="control-label">URL</label> 
				<input type="text" class="form-control" id="type_of_activism1" name="url">
			</section>
			<section class="formfield">
				<label class="control-label">Deceased</label>
				<input type="text" class="form-control" id="type_of_activism1" name="deceased">
			</section>
			<section class="formfield">
				<label class="control-label">Year Commended</label>
				<input type="number" class="form-control" id="type_of_activism1" name="year_commended">
			</section>

		</section>

		<section class="botgroupbot">
			<section class="formfield">
				<label class="control-label">Work location</label> 
				<input type="text" class="form-control" id="type_of_activism1" placeholder="example: Global region, country, state (if any)"name="work_location">
			</section>
			<section class="formfield">
				<label class="control-label">image file name</label>
				<input type="text" class="form-control" id="type_of_activism1" name="image" placeholder="Example: smithjohn.jpg">
			</section>

		</section>
	</section>
	<section class="textentry">
		<section class="textform">
			<label class="control-label">Introduction for the List view</label>
			<textarea rows="10" cols="100" name="blurb">
			</textarea>
		</section>
		<section class="textform">
			<label class="control-label">Giraffe's Story for Giraffe View</label>
			<textarea rows="100" cols="100" name="story">
			</textarea>
		</section>
	</section>

		<div class="addgiraffebutton">
			<button type="submit" class="btn btn-success">Add Giraffe!</button>
		</div>
	</form>
</main>


<!-- End admin add-Giraffe page -->