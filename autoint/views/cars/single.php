<?php use yii\helpers\Html; ?>
<div class="main">

	<!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	

	<section class="container sbl clearfix">

		<!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->		

		<section id="content" class="two-thirds column">
			
			<article class="item clearfix">
				
				<!-- <h2 class="title">Ferrari F12	 Berlinetta 2012</h2> -->
				<h2 class="title">
				xxx
					<?php
						// echo "<pre>";
						// print_r($carz);
						// echo "</pre>";
						 $carz['manufacturer']." ".$carz['model']." ".$carz['model_year']; 

					?>
							
				</h2>

				<div id="gallery" class="gallery">
				<?php 	 $carz['images'] ;
						$z1=rtrim($carz['images'],',');
						$z=explode(",", $z1);
						// print_r($z);

				?>
				<div class="row ab">
				<?php $n1=1;$n2=1; ?>
				<?php foreach ($z as $key => $value): ?>
					<div class="col-md-12">
				<img src="images/uploads/<?= $value;?>"  width="400px" class="imga" id='<?php echo "img".$n1."_" ?>'>
						
					</div>
				<?php $n1++; ?>
				<?php endforeach ?>
				</div>

					<hr>

					<div class="row">
				<?php foreach ($z as $key => $value): ?>

						<div class="col-md-4">
							<img src="images/uploads/<?= $value;?>" width="" class="imgd" id="<?php echo 'img'.$n2 ?>">
						</div>
				<?php $n2++; ?>
				<?php endforeach ?>
					</div>
					
 <script type="text/javascript">
       
   // document.getElementsByClassName("imga").style.display = 'none';
   // document.getElementsByClassName('imga')[0].style.display = 'none';
   var appBanners = document.getElementsByClassName('imga'), i;

for (var i = 0; i < appBanners.length; i ++) {
    appBanners[i].style.display = 'none';
}

  document.getElementById('img1_').style.display = 'block';
    </script>
				</div><!--/ #gallery-->

				<div class="extra">
					
					<b class="heading">Price:</b>
					
					<span class="cost">$8,896.99</span>
					
					<ul class="list type-1">
						<li><b>Reg Number: </b><span><?= $carz['reg_number'] ?></span></li>
						<li><b>Mileage: </b><span><?= $carz['mileage'] ?></span></li>
						<li><b>Body Type: </b><span><?= $carz['body_type'] ?></span></li>
						<li><b>Model Year: </b><span><?= $carz['model_year'] ?></span></li>
						<li><b>Engine Size: </b><span><?= $carz['engine_size'] ?></span></li>
						<li><b>Trans: </b><span><?= $carz['trans'] ?></span></li>
						<li><b>Fuel Type: </b><span><?= $carz['fuel_type'] ?></span></li>
						
					</ul>
					
				<!-- 	<ul class="addthis-toolbox clearfix">
						<li><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a></li>
						<li><a class="addthis_button_tweet"></a></li>
						<li><a class="addthis_button_google_plusone" g:plusone:size="medium"></a></li>
						<li><a class="addthis_counter addthis_pill_style"></a></li>
					</ul> -->

					
				</div><!--/ .extra-->					
				
				<div class="entry-item">
					
					<!-- <div class="video-box">
						
						<b class="heading">Video:</b>

						<a href="http://www.youtube.com/embed/CNP8DMCDjgw?feature=player_detailpage" class="video-image video-icon">
							<img src="images/temp/list-thumb-1.jpg" alt="" />
						</a>							
						
					</div> -->
					<!--/ .video-box-->
					
					<h3 class="section-title">Information</h3>
					
					<p>
						Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
						nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
						mollit anim. Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
					</p>
					
					<p>
						Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
						esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
						in culpa qui officia deserunt mollit anim. Consectetur adipisicing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
					</p>
					
					<div>

						<div>

						  <!-- Nav tabs -->
						  <ul class="nav nav-tabs" role="tablist">
						    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
						    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
						    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
						    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
						  </ul>

						  <!-- Tab panes -->
						  <div class="tab-content">
						    <div role="tabpanel" class="tab-pane active" id="home">..sxsx.</div>
						    <div role="tabpanel" class="tab-pane" id="profile">...</div>
						    <div role="tabpanel" class="tab-pane" id="messages">...</div>
						    <div role="tabpanel" class="tab-pane" id="settings">...</div>
						  </div>

						</div>

					</div>

					<br>
					
					
					
				</div><!--/ .entry-item-->
				
			</article><!--/ .item-->
			
		</section><!--/ #content-->

		<!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->	


		<!-- - - - - - - - - - - - - - - Sidebar - - - - - - - - - - - - - - - - -->	

		<aside id="sidebar" class="one-third column">
			
			<div class="widget-container widget_custom_search">
				
				<div class="search-heading">
						
					<h3 class="widget-title">Quick Search</h3>
					
				</div><!--/ .search-heading-->
				
				<div class="search-entry clearfix">

					<form action="/" class="form-panel" />

						<fieldset>
							<label>Make:</label>
							<select>
								<option value="0" />Any
								<option value="1" />Lorem
								<option value="2" />Ipsum
							</select>
						</fieldset>

						<fieldset class="not-active">
							<label>Model:</label>
							<select>
								<option value="0" />Any
								<option value="1" />Lorem
								<option value="2" />Ipsum
							</select>
						</fieldset>

						<fieldset>
							<label>Price <span>min</span>:</label>
							<select>
								<option value="0" />No max
								<option value="1" />Lorem
								<option value="2" />Ipsum
							</select>
						</fieldset>

						<fieldset>
							<label>Price <span>max</span>:</label>
							<select>
								<option value="0" />Any
								<option value="1" />Lorem
								<option value="2" />Ipsum
							</select>
						</fieldset>

						<fieldset>
							<label>Year <span>from</span>:</label>
							<select>
								<option value="0" />Any
								<option value="1" />Lorem
								<option value="2" />Ipsum
							</select>
						</fieldset>

						<fieldset>
							<label>Year <span>to</span>:</label>
							<select>
								<option value="0" />Any
								<option value="1" />Lorem
								<option value="2" />Ipsum
							</select>
						</fieldset>
						
						<fieldset>
							<label>Body type</label>
							<select>
								<option value="0" />Any
								<option value="1" />Lorem
								<option value="2" />Ipsum
							</select>
						</fieldset>

						<div class="clear"></div>
						
						<button id="submitSearch" class="submit-search" type="submit">Search</button>
						
						<a href="#" class="advanced">Advanced Search</a>

					</form><!--/ .form-panel-->						

				</div><!--/ .search-entry-->

			</div><!--/ .widget-container-->
			
			<div class="widget-container widget_loan_calculator">
				
				<div class="widget-head">
					
					<h3 class="widget-title">Loan Calculator</h3>
					
				</div>
				
				<div class="entry-loan">
					
					<form action="" method="POST" name="myform" id="loan" />

						<table>
							<tr>
								<td><label for="LoanAmount">Car Loan Amount</label></td>
								<td><input name="LoanAmount" id="LoanAmount" type="text" value="3000" /></td>
								<td>$</td>
							</tr>
							<tr>
								<td><label for="InterestRate">Annual Interest Rate</label></td>
								<td><input name="InterestRate" id="InterestRate" type="text" value="7.0" /></td>
								<td>%</td>
							</tr>
							<tr>
								<td><label for="NumberOfYears">Term of Car Loan</label></td>
								<td><input name="NumberOfYears" id="NumberOfYears" type="text" value="4" /></td>
								<td>Years</td>
							</tr>
							<tr>
								<td>
									<button name="cal" class="button orange">Calculate</button>
								</td>
							</tr>
							<tr>
								<td><label for="NumberOfPayments">Number of Car Payments</label></td>
								<td><input readonly="readonly" type="text" id="NumberOfPayments" name="NumberOfPayments" /></td>
								<td></td>
							</tr>
							<tr>
								<td><label for="MonthlyPayment">Monthly Payment</label></td>
								<td><input readonly="readonly" type="text" id="MonthlyPayment" name="MonthlyPayment" /></td>
								<td>$</td>
							</tr>
						</table>					
						
					</form>
					
				</div><!--/ .entry-loan-->
				
			</div><!--/ .widget-container-->
			
			<div class="widget-container widget_latest">
				
				<h3 class="widget-title">Latest Cars</h3>
				
				<ul>
					<li>
						<a class="thumb single-image picture video" href="#"><img src="images/temp/latest-thumb-1.jpg" alt="" /></a>
						<div class="latest-entry">
							<a href="#" class="block"><b>Aston Martin DB9</b></a>
							<span class="block add-margin">2009 y.r., 160,000 km.</span>
							<a href="#" class="bold text-orange">$8.966</a>	
						</div><!--/ .latest-entry-->
					</li>
					<li>
						<a class="thumb single-image picture" href="#"><img src="images/temp/latest-thumb-2.jpg" alt="" /></a>
						<div class="latest-entry">
							<a href="#" class="block"><b>Aston Martin DB9</b></a>
							<span class="block add-margin">2009 y.r., 160,000 km.</span>
							<a href="#" class="bold text-orange">$8.966</a>	
						</div><!--/ .latest-entry-->
					</li>
					<li>
						<a class="thumb single-image picture video" href="#"><img src="images/temp/latest-thumb-3.jpg" alt="" /></a>
						<div class="latest-entry">
							<a href="#" class="block"><b>Aston Martin DB9</b></a>
							<span class="block add-margin">2009 y.r., 160,000 km.</span>
							<a href="#" class="bold text-orange">$8.966</a>	
						</div><!--/ .latest-entry-->
					</li>
				</ul>
				
				<a href="#" class="see">See all news</a>
				
			</div><!--/ .widget-container-->
			
			<div class="widget-container widget_recent_entries">
				
				<h3 class="widget-title">Recent News</h3>
				
				<ul>
					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></li>
					<li><a href="#">Ipsum dolor sit amet, consectetur adipisicing</a></li>
					<li><a href="#">Set magna ipsum dolor sit amet, consectetur adipisicing</a></li>
				</ul>
				
				<a href="#" class="see">See all news</a>
				
			</div><!--/ .widget-container-->
			
		</aside><!--/ #sidebar-->

		<!-- - - - - - - - - - - - - end Sidebar - - - - - - - - - - - - - - - - -->

	</section><!--/.container -->

	<!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->			
	
</div><!--/ .main-->


