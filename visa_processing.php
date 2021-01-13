<?php 
include "site_session.php";
$_SESSION['vp']="c-active";
include "header.php";
?>
<!-- BEGIN: PAGE CONTAINER -->
<div style="padding-bottom: 100px; bg-dark;" class="c-border-right-dark"></div>
<div class="c-layout-page">
<div class="c-content-box c-size-md c-no-padding c-bg-dark">
		<div class="c-content-feature-4">
			<div class="c-bg-parallax c-feature-bg c-content-left c-arrow c-border-right-dark" style="background-image: url(assets/base/img/content/client-logos/bkvisa.jpg)">
			</div>
			
			<div class="container">
				<div class="c-feature-content c-right">
					<div class="c-content-v-center">
						<div class="c-wrapper">
							<div class="c-body">
                            <div class="col-md-12 " style="background:rgba(255, 255, 255, 0); z-index: 1000;   ">
								<div class="c-content-title-1">
                                    <h3 class="c-font-uppercase c-font-bold c-left; " style="text-align: left !important; color: white;">Visa Processing</h3>
									
									<div class="c-line-left" >
									</div>
									
								</div></div>
								<div class="c-content">
                                    <p class="c-margin-b-30 c-left" style="font-size:15px;  text-align: justify; color: white ;">
                                         Our department for documentation, orientation and mobilization works for candidates for foreign employment. Most overseas organizations are not interested in developing an agency to process and mobilize candidates on their behalf. Al-Kurdee traders, however, feel very important that organizations recognize the importance of expanding their representation in an agency. Some reasons are:</p>
                                    <button id="opener" class="btn btn-lg c-btn-green c-btn-border-2x c-btn-square c-btn-bold" data-toggle="modal" data-target="#MF" style=" align-right;" >Read More</button>
                                    <div class="modal fade" id="MF" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                         <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></span></button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:left !important;">Visa Processing & Recruitment Division</h4>
                                         </div>
                                        <div class="modal-body" style="text-align: justify;">
                                        <img src="assets/base/img/content/client-logos/visa.jpg" class="img-thumbnail img-responsive" style="margin-bottom:15px;" />
                                        <p style="text-align: justify;">
										For most organizations, conversion time is often very important for mobilization. Premier agencies that have a clean record with embassies and government agencies and are used to treat hundreds of companies each year can process candidates on time.
										</br>
										Premier agencies usually have a big team and are able to keep their knowledge base constantly. Often we face unusual circumstances and should handle them. With a large and highly experienced team in our overseas documentation department, Al-Kurdee dealers can identify a solution to these barriers.
										</br>
										Maintaining the candidate's status as a candidate or nominated candidate is an important part of the mobilization process, but extremely difficult and time consuming. Al-Kurdee dealers do not charge our customers and acquire all the latest information for them and keep them updated on a progress report every week.
										</br>
										For companies wishing to recruit a large number of candidates, leading agencies can offer guiding programs that allow one of the team members to get information about their organization and provide guidance to all candidates to be mobilized. That way, the candidates from your organization will go with full information about your organization and policies.
										</br>
										Considering its own license (license number 1536 / KAR) in Pakistan and leading partner agencies throughout the region, Al-Kurdee dealers offer customers complete documentation, orientation and mobilization, foreign documentation and relief at the meeting, from several agencies. We are a one-stop solution that meets all your recruitment, documentation, visa and mobilization activities from our office and we have contact with all sub-offices and partner offices, compile all information and present the easy-to-understand format. Best of all, we extend this service at very low cost and save you a lot of effort, time and money.
										</p>
                                        
        
        
                                        </div>
                                        <div class="modal-footer">
                                         
                                      	<button type="button" class="btn btn-sm c-btn-green c-btn-border-2x c-btn-square c-btn-bold" data-dismiss="modal">Close</button>
                                         </div>
                                    </div>
                                  </div>
                                    </div>
									
                                    
                               
                                 
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-2 -->
<a name="footer"></a>
<?php
include "footer.php";
?>
<!-- END: LAYOUT/FOOTERS/FOOTER-2 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
<script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="assets/base/js/components.js" type="text/javascript"></script>
<script src="assets/base/js/app.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {    
		App.init(); // init core    

		// init main slider
		var slider = $('.c-layout-revo-slider .tp-banner');
	    var cont = $('.c-layout-revo-slider .tp-banner-container');
	    var api = slider.show().revolution({
	        delay: 15000,    
	        startwidth:1170,
	        startheight: 620,
	        navigationType: "hide",
	        navigationArrows: "solo",
	        touchenabled: "on",
	        onHoverStop: "on",
	        keyboardNavigation: "off",
	        navigationStyle: "circle",
	        navigationHAlign: "center",
	        navigationVAlign: "bottom",
	        spinner: "spinner2",
	        fullScreen: "on",   
	        fullScreenAlignForce:"on",
	        fullScreenOffsetContainer: (App.getViewPort().width < App.getBreakpoint('md') ? '.c-layout-header' : ''),
	        shadow: 0,
	        fullWidth: "off",
	        forceFullWidth: "off",
	        hideTimerBar:"on",
	        hideThumbsOnMobile: "on",
	        hideNavDelayOnMobile: 1500,
	        hideBulletsOnMobile: "on",
	        hideArrowsOnMobile: "on",
	        hideThumbsUnderResolution: 0
	    });
	    api.bind("revolution.slide.onchange",function (e,data) {
	        $('.c-layout-header').removeClass('hide');   
	        setTimeout(function(){
	            $('.c-singup-form').fadeIn(); 
	        }, 1500);
	    });
	});
	</script>
<!-- END: THEME SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>