<div id="cwp_container" style="display:none">


 
	  

	<form id="cwp_form" method="post" action="#" enctype="multipart/form-data">
	<?php settings_fields( cwp_config("menu_slug")); ?>
 
		<div id="header">
		
			<div class="logo ">
				<h2><?php echo cwp_config('admin_page_header'); ?></h2>
			</div>
			<a target="_blank" href="http://www.readythemes.com/ready-review-tutorials/?r=wporg" class="adminLink" >Online Documentation</a>
			<a target="_blank" href="http://www.readythemes.com/affiliate-review-plus/?r=wporg" class="adminLink cwpred">Buy PRO Version</a>
			<a target="_blank" href="http://www.readythemes.com/category/blog/?r=wporg" class="adminLink" >WordPress Tips&Tricks</a>
			<div class="clear"></div>
		
    	</div>

		<div id="info_bar">
		 
		 <span class="spinner" ></span>
						
			<button  type="button" class="button-primary cwp_save">
				<?php _e('Save All Changes','cwp'); ?>			</button>
			
		 <span class="spinner spinner-reset" ></span>
			<button   type="button" class="button submit-button reset-button cwp_reset"><?php _e('Options Reset','cwp'); ?></button>
		</div><!--.info_bar--> 	
		
		<div id="main">
		
			<div id="cwp_nav">
				<ul>
					<?php foreach ($tabs as $tab) { ?>
					
					
						<li  ><a  href="#tab-<?php echo $tab['id']; ?>"><?php echo $tab['name']; ?></a></li> 	
					
					<?php  } ?></ul>
			</div>

			<div id="content"> 	

					<?php foreach ($tabs as $tab) { ?>
						<div id="tab-<?php echo $tab['id']; ?>" class="tab-section">
							<h2><?php echo $tab['name']; ?></h2>
							
							<?php foreach($tab['elements'] as $element){ ?>
								<?php echo  $element['html']; ?>
							<?php } ?>
						
						</div> 
  
					
					<?php } ?></div>         
      
			<div class="clear"></div>
			
		</div>
		
		<div class="save_bar"> 
		 <span class="spinner " ></span>
			<button  type="button" class="button-primary cwp_save">
				<?php _e('Save All Changes','cwp'); ?>			</button>
			
		 <span class="spinner  spinner-reset" ></span>
			<button   type="button" class="button submit-button reset-button  cwp_reset"><?php _e('Options Reset','cwp'); ?></button>
	 
			
		</div> 
 
	</form>
	
	<div style="clear:both;"></div>
</div>
