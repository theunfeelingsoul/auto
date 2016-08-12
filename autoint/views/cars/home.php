<?php use yii\helpers\Html; ?>
<!-- - - - - - - - - - - - Top Panel - - - - - - - - - - - - - - - - -->	
	
	<div class="top-panel clearfix">
		
		<!-- - - - - - - - - - - Slider - - - - - - - - - - - - - -->	

		<div id="slider" class="flexslider clearfix">

			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/uploads/-Mazui-_Angel_Beats_-_07_-A3DD1EB5-.mkv_000420669734391389.jpg" alt="" />
						<div class="carousel-caption">
						Slide one
						</div>
					</div>
					<div class="item">
						<img src="images/uploads/reserach-2157540016.png" alt="" />
						<div class="carousel-caption">
						Slide two
						</div>
					</div>
				
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
			</div>

		</div><!--/ #slider-->

		<!-- - - - - - - - - - - end Slider - - - - - - - - - - - - - -->
		
		<!-- - - - - - - - - - - Search Panel - - - - - - - - - - - - - -->
		
		<div class="widget_custom_search">
			
			<h3 class="widget-title">Quick Search</h3>
			
			<form action="/" id="boxpanel" class="form-panel" />
				
				<fieldset>
					<label>Manufacturer:</label>
					<select>
						<option value="0" />Any
						<option value="1" />Lorem
						<option value="2" />Ipsum
					</select>
				</fieldset>
				
				<fieldset>
					<label>Min Price:</label>
					<select>
						<option value="0" />No min
						<option value="1" />Lorem
						<option value="2" />Ipsum
					</select>
				</fieldset>
				
				<fieldset>
					<label>Max Price:</label>
					<select>
						<option value="0" />No max
						<option value="1" />Lorem
						<option value="2" />Ipsum
					</select>
				</fieldset>
				
				<fieldset>
					<label>Trans:</label>
					<select>
						<option value="0" />Any
						<option value="1" />Lorem
						<option value="2" />Ipsum
					</select>
				</fieldset>
				
				<fieldset>
					<label>Mileage:</label>
					<select>
						<option value="0" />Any
						<option value="1" />Lorem
						<option value="2" />Ipsum
					</select>
				</fieldset>
				
				<fieldset>
					<label>Body Type:</label>
					<select>
						<option value="0" />Any
						<option value="1" />Lorem
						<option value="2" />Ipsum
					</select>
				</fieldset>
				
				<div class="clear"></div>
				<button id="submitSearch" class="submit-search" type="submit">Search</button>
				
			</form><!--/ .form-panel-->
			
		</div><!--/ .main-search-panel-->
		
		<!-- - - - - - - - - - end Search Panel - - - - - - - - - - - - -->
		
	</div><!--/ .top-panel-->
	
	<!-- - - - - - - - - - - - - end Top Panel - - - - - - - - - - - - - - - -->	
	
	<div class="main">

		<!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	

		<section class="container sbr clearfix">

			<!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->		

			<section id="content" class="two-thirds column">
				
				<div class="item-grid">
								

					<h3 class="widget-title">Recent Automobiles</h3>

					<ul class="clearfix">
						<?php foreach ($cars_limited as $key => $c): ?>
							<li>
								<a href="#" class="single-image video picture">
								<?php 
									$pieces = explode(",", $c['images']);
								 ?>
									<img src="images/thumbs/<?php echo $pieces[0] ?>" alt="" />
								</a>

								<a href="#" class="list-meta">
									<h6 class="title-list-item">
										<?= $c['model'] ?>
									</h6>
								</a>

								<div class="detailed">
									<span class="cost">$8.966</span>
									<span><?php echo $c['model']." ".$c['manufacturer'] ?></span> <br />
									<b><?php echo $c['mileage']." Km" ?></b>	
								</div><!--/ .detailed-->

								<!-- <a href="#" class="button orange">Details</a> -->
								 <?php echo Html::a('Details', ['cars/view','id' => $c['id']], ['class' => 'button orange']) ?>
								<label class="compare"><input type="checkbox" />Compare</label>

							</li>
						<?php endforeach; ?>
					</ul>

					<a href="#" class="see">See all automobiles</a>
					
				</div><!--/ .recent-list-cars-->
				
			</section><!--/ #content-->

			<!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->	


			<!-- - - - - - - - - - - - - - - Sidebar - - - - - - - - - - - - - - - - -->	

			<aside id="sidebar" class="one-third column">
				
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
		
	</div><!--/ .main

	