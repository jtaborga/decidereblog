<!--Modal login-->
<div class="modal fade bs-example-modal-sm" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
 	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
    		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h1 class="title-modal-login">Log In to your Decidere account</h1>
			</div>
			<?php echo $this->Form->create('User', $options = array('url'=>array('controller'=>'Admin', 'action'=>'loginAjax'), 'id'=>'formLoginModal')); ?>
				<div class="row">
					<?php echo $this->Form->input('username', $options = array('class'=>'form-login form-control', 'placeholder'=>"Username", 'div'=>false, 'label'=>false, 'id'=>'username-login')); ?>
				</div>
				<div class="row">
					<?php echo $this->Form->input('password', $options = array('class'=>'form-login form-control', 'placeholder'=>"Password", 'div'=>false, 'label'=>false)); ?>
				</div>
				<div class="row">
					<p class="status-login animated shake"></p>
				</div>
				<div class="row">
					<input type="checkbox" value="1" class="form-check" name="remember" id="remember"><label class="text-check-form" for="remember">Remember me</label>
				</div>
				<div class="row">
					<button type="submit" class="submit-login">
						<?php echo $this->Html->image('btn-login-form.png', $options = array('class'=>'', 'alt'=>'Login')); ?>
					</button>
					<a href="" class="link-forgot-password text-right">
						Forgot Password
					</a>
				</div>	    
			<?php echo $this->Form->end(); ?>
    	</div>
  	</div>
</div>
<!--End modal login-->

<!--Modal login-->
<div class="modal fade bs-example-modal-sm" id="modal-contact"  tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
 	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
    		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h1 class="title-modal-login">Contact Us</h1>
			</div>
			<?php echo $this->Form->create('Contact'); ?>
				<div class="row">
					<?php echo $this->Form->input('first_name', $options = array('class'=>'form-login form-control', 'placeholder'=>"First name*", 'div'=>false, 'label'=>false, 'required'=>'required')); ?>
				</div>
				<div class="row">
					<?php echo $this->Form->input('last_name', $options = array('class'=>'form-login form-control', 'placeholder'=>"Last name*", 'div'=>false, 'label'=>false, 'required'=>'required')); ?>
				</div>
				<div class="row">
					<?php echo $this->Form->input('message', $options = array('class'=>'form-login form-control', 'placeholder'=>"Message*", 'div'=>false, 'label'=>false, 'required'=>'required', 'type'=>'textarea')); ?>
				</div>
				<div class="row text-right">
					<button type="submit" class="submit-contact">
						Send
						<!--<img src="img/btn-login-form.png" alt="">-->
					</button>
				</div>	    
			<?php echo $this->Form->end(); ?>
    	</div>
  	</div>
</div>
<!--End modal login-->

<!--Modal Financial-->
<div class="modal fade bs-example-modal-sm" id="financialModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
 	<div class="modal-dialog modal-sm">
    	<div class="modal-content white">
    		<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="white">Financial Products</h1>
    		</div>
			<div class="info">
	        	<div class="line-info-back-datasets"></div>
	        	<p>Building a comprehensive portfolio that meets your clients’ goals takes a lot of time and research.  Many financial advisors still rely on subjective analysis, basic filtering, or wholesaler recommendations to make investment product recommendations.  With Decidere, you can build your own customized scenarios for a variety of client goals and use them over and over with one click.  You will always find the best products for the current market environment without the hours of research.</p>
	    	</div>
    	</div>
  	</div>
</div>
<!--End modal Financial-->


<!--Modal Automobiles-->
<div class="modal fade bs-example-modal-sm" id="automobilesModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
 	<div class="modal-dialog modal-sm">
    	<div class="modal-content white">
    		<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="white">Automobiles</h1>
    		</div>
			<div class="info">
	        	<div class="line-info-back-datasets"></div>
	        	<p>Looking for your next vehicle?  Whether you are looking to upgrade to something sportier, the perfect transportation for your growing family or daily commute, you will have specific criteria that are important to you.  Automobile search sites today require that you already know what make or model you want before you search.  Decidere is different; you set the criteria that are most and least important to you such as fuel economy, seating, price and even the paint color; we find the car.</p>
	    	</div>
    	</div>
  	</div>
</div>
<!--End modal Automobiles-->

<!--Modal Real State-->
<div class="modal fade bs-example-modal-sm" id="realEstateModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
 	<div class="modal-dialog modal-sm">
    	<div class="modal-content white">
    		<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="white">Real Estate</h1>
    		</div>
			<div class="info">
	        	<div class="line-info-back-datasets"></div>
	        	<p>Looking for your next vehicle?  Whether you are looking to upgrade to something sportier, the perfect transportation for your growing family or daily commute, you will have specific criteria that are important to you.  Automobile search sites today require that you already know what make or model you want before you search.  Decidere is different; you set the criteria that are most and least important to you such as fuel economy, seating, price and even the paint color; we find the car.</p>
	    	</div>
    	</div>
  	</div>
</div>
<!--End modal Real State-->

<!--Modal Appliances-->
<div class="modal fade bs-example-modal-sm" id="appliancesModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
 	<div class="modal-dialog modal-sm">
    	<div class="modal-content white">
    		<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="white">Appliances</h1>
    		</div>
			<div class="info">
	        	<div class="line-info-back-datasets"></div>
	        	<p>With dozens of brands, hundreds of styles and literally thousands of feature options, finding the best appliances for your home or your lifestyle can be overwhelming.  We built a comprehensive database of appliances on the market today. Find the best one for you, leave it to the stores to provide the best price – at least you’ll know exactly what you want when you walk in.</p>
	    	</div>
    	</div>
  	</div>
</div>
<!--End modal Appliances-->

<!--Modal Insurance-->
<div class="modal fade bs-example-modal-sm" id="insuranceModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
 	<div class="modal-dialog modal-sm">
    	<div class="modal-content white">
    		<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="white">Insurance</h1>
    		</div>
			<div class="info">
	        	<div class="line-info-back-datasets"></div>
	        	<p>These days we are inundated with marketing from insurance companies claiming to have the lowest rates, the most reliable claims experience, and the best perks.  Many will offer to provide comparative quotes in order to win you over.  When you get down to it, finding the right insurance match for you is complicated.  You can compare all the criteria here, no strings attached.</p>
	    	</div>
    	</div>
  	</div>
</div>
<!--End modal Insurance-->


<!--Modal Recreational Vehicles-->
<div class="modal fade bs-example-modal-sm" id="recreationalVehiclesModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
 	<div class="modal-dialog modal-sm">
    	<div class="modal-content white">
    		<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="white">Recreational Vehicles</h1>
    		</div>
			<div class="info">
	        	<div class="line-info-back-datasets"></div>
	        	<p>When you are looking to buy something fun, the experience shouldn’t be stressful or exhausting. First time buyers and avid recreationalists alike can find the perfect toy for them by setting criteria that are important in the Decidere system and then submitting for results.  You get a ranked list of available options starting with the best fit for your needs.</p>
	    	</div>
    	</div>
  	</div>
</div>
<!--End modal Appliances-->