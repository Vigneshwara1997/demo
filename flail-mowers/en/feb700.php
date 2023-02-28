<?php

	$lang = "en";
	$root = "../../";
   $pagetitle = "BaumaLight - Flail mowers";
	$include = 19;
	$prodnav_select = 0;
	include($root . "inc/bootstrap/header.inc.php");
    $part_number='FED700';
	
	  include($root . "geolocation/iplocation.php");
	$url=$_SERVER['QUERY_STRING'];
	 if(empty($url) or is_null($url)){
		
	 }else{
		 $curl=$url;
		 if($curl=="usa"){
			 $cur="USD";
			 $curl="usd";
		 }else{
			 $cur=strtoupper($curl);
			 $curl=$curl;
		 }
	 }
	  
?>
<!-- canonical tag -->
<link rel="canonical" href="https://baumalight.com/flail-mowers/en/feb700.php" />
</head>
<!-- css link -->
<link rel="stylesheet" href="../css/media.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<script>
    (function ($) {

        function iframeModalOpen() {

            // impostiamo gli attributi da aggiungere all'iframe es: data-src andrà ad impostare l'url dell'iframe
            $('.FMM148-Flail,.flail-mower,.spring-mowing,.summer-mowing').on('click', function (e) {
                var src = $(this).attr('data-src');
                var width = $(this).attr('data-width') || 640; // larghezza dell'iframe se non impostato usa 640
                var height = $(this).attr('data-height') || 360; // altezza dell'iframe se non impostato usa 360

                var allowfullscreen = $(this).attr('data-video-fullscreen'); // impostiamo sul bottone l'attributo allowfullscreen se è un video per permettere di passare alla modalità tutto schermo

                // stampiamo i nostri dati nell'iframe
                $("#videoModal iframe").attr({
                    'src': src,
                    'height': height,
                    'width': width,
                    'allowfullscreen': ''
                });
            });

            // se si chiude la modale resettiamo i dati dell'iframe per impedire ad un video di continuare a riprodursi anche quando la modale è chiusa
            $('#videoModal').on('hidden.bs.modal', function () {
                $(this).find('iframe').html("");
                $(this).find('iframe').attr("src", "");
            });
        }

        $(document).ready(function () {
            iframeModalOpen();
        });

    })(jQuery);
</script>
<script>
         $(function(){
         $('tr:odd').addClass('odd');
         });
</script>
       <style>
         tr {
         background-color:#336B9A; 
         }
         .odd{
        background-color:#00477F; 
         }
       </style>
<?php  
 $ids = get_discount('https://baumalight.com/factorydiscounts/en/brushfire/', '../img/Product-Logos/Stump-Blaster-Logo.png', 
                            'fm_lead_time');
 
 $special_discount= $ids[3];
 
 function get_discount($url, $logo, $table_name, $sort_criteria = 'sort_order') {
         $qs_url= 'https://baumalight.com/suddenshipping/admin/bauma/ss_qs.php?query_type=discount&table_name=' . $table_name . '&sort_criteria=' . $sort_criteria;
         
         $json= file_get_contents($qs_url);
         $model_no=ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME));
          $model_no = strtoupper($model_no);
        if (preg_match('/[^A-Za-z0-9]/', $model_no)) 
         {
           
        $model_com= explode("-", $model_no);
        $model_num= $model_com[0];
        $model_num = $model_num.$model_com[1];
        $model_no = strtoupper($model_num);
         }
	
        if ($json !== null && strlen($json) > 0) {
            $rows = json_decode($json);
            foreach ($rows as $row) {
                $row = (array) $row;
              if($row['model_number']==$model_no){
                  $id_did = array("0" => $row['id'], "1" => $row['did'],"2"=> $row['reason'],"3"=> $row['special_discount']);
              
             } 
              else{
                 if(strpos($row['model_number'],$model_no) !== false) {
                    
                     $id_did = array("0" => $row['id'], "1" => $row['did'],"2"=> $row['reason'],"3"=> $row['special_discount']);    
                                     
                 }
            }
         }
        return $id_did;
      }
 }
?>
       <style>
.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover 
{
    color: #fff !important;
    background-color: #000 !important;
}
.bold {
    font-weight: 800;
}
.ycolor {
    color: #ffd204;
}
.wcolor {
    color: #ffff;
}
a:hover {
      cursor:pointer;
    }
    table.spec-charts tr td {
    width: auto;
}
.fright {
    text-align: right !important;
    padding: 10px 10px !important;
}
table.spec-charts tr td:nth-child(1) {
   color:unset;
}
.table-responsive {
    border: 0;
}
table.spec-charts {   
    margin-top: 0;
}
.top-35 {
  margin-top: 35px;
}
             table.spec-charts thead th.left, table.spec-charts tbody td.left {
  text-align: left;
  padding-left: 10px;
}
.features h3 {
   font-size:2.0em !important;
}

table.spec-charts th {
    font-size: 1.125em;
    font-weight: 800;
    text-align: center;
    background: #212121;
    color: #ffd204;
    padding: 10px 0;
}

@media only screen and (min-device-width: 770px)  
{
    .Mlarge {
        width: 65%!important;
        margin-top: 5%!important;
    }
}
</style>

<body id="pto">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPDCP4G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<!--Navbar-->
	<?php include($root . "inc/bootstrap/" . $lang . "/common_menu_nav_cnt.inc.php"); ?>
	<!--End Navbar-->
           <div class="modal fade" id="videoModal" tabindex="-1">
        <div class="modal-dialog Mlarge" style=" margin-top: 165px;">
            <div class="modal-content" style="border-radius:20px">
                <div class="modal-body" style="padding:15px 5px 15px 15px ; border:15px 15px 15px 15px; border-radius:15px;background-color:#ccc">
                    <div class="close-button">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" frameborder="0" allow="autoplay; encrypted-media"> </iframe>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
	<!--End Header Banner-->
       <?php include("inc/product_menu_nav.inc.php"); ?>
      
	<div class="container-fluid" id="afterMenuContainer">

		<div class="row">
			<div class="col-sm-6 col-xs-12">
            	<div class="panel">
        				<!--Product Carousel-->
        				<?php //include("../inc/fed700_carousel_images.inc.php"); ?>
        				<!--End Carousel-->
            	</div>
			</div>
		  <div class="col-sm-6 col-xs-12 pg-content" style="display: table-cell;margin-bottom: 5px;">
            <div class="row">
               <div class="col-xs-12">
	
			<h3>FEB700 Flail Mower for Skidsteer</h3>
			<p style="text-align:justify;">
			 Confidently tackle the mowing of long, heavy grass or short brush with the Baumalight FEB700 Skidsteer Flail Mower. The FEB700 comes with an impressive 42 flail style teeth and which swing back if you a stone or stump so there is less damage to the teeth. Make quick work of your field with an 88” mowing path and an 80” rotor. The FEB700 uses a standard skidsteer mounting plate and requires 18-35 GPM at 4000 PSI. To maintain a steady, even mow height, the flail mower has an adjustable roller bar.
			</p>	
			</div>
			<!-- <div class="col-sm-6 col-xs-12" style="margin-bottom: 18px;float:right">
                     <div class="flail-mower" style="margin-bottom: 10px;margin-top: 10px;"><img class="flail-mower" data-toggle="modal" data-src="https://www.youtube.com/embed/xHVDM1qE5nM?autoplay=1"  data-target="#videoModal" data-video-fullscreen="" src="../img/video/blank_product.png" style="opacity:0;cursor: pointer;"/></div>
					 </div>-->
			
			</div>
			</div>

		</div>
         <!-- end row -->

			<div class="row">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<div class="panel panel-default" id="features_default">

			    <div class="panel-heading" role="tab" id="headingOne1">
			      <h4 class="panel-title">
			        <div class="container">
			        	<div class="row">
			        		<div class="col-xs-12">
			        			<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1" title="Click to expand...">
			        			 <span class="glyphicon glyphicon-triangle-bottom d-arrow"></span>
			        			 Key Features
			        			</a>
			        		</div>
			        	</div>
			        </div>
			      </h4>
			    </div>

			<div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">                        
					 <div class="panel-body features">
                         <div class="container" id="feature_price">
                            <?php include("./inc/feb700-features.inc.php"); ?>
                         </div>
                     </div>

			</div>
                  <!--/collapseTwo-->
    </div>
				<!--/panel-->

			<!-- customer submitted media -->
				<div class="panel panel-default">
					<?php include("./inc/no-customer-media.inc.php"); ?>
				</div>        
			<!-- end customer submitted  media-->

				<!-- comparison chart -->
				<div class="panel panel-default" id="compare_default">

        			    <div class="panel-heading" role="tab" id="headingTwo1">
        			      <h4 class="panel-title">
        			        <div class="container">
        			        	<div class="row">
        			        		<div class="col-xs-12">
        			        			<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1" title="Click to expand...">
        			        			 <span class="glyphicon glyphicon-triangle-bottom d-arrow"></span>
        			        			  SPECIFICATIONS
        			        			</a>
        			        		</div>
        			        	</div>
        			        </div>
        			      </h4>
        			    </div>

					<div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo1">
                                             <?php include("inc/fmm148_specification.inc.php");?>
					</div><!--/collapseTwo-->
				</div>
			<!-- end comparison chart -->
        
			 <!-- price panel -->
            <div class="panel panel-default" id="compare_default1">
                    <div class="panel-heading" role="tab" id="headingThrees1">
                        <h4 class="panel-title">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#product_price_default" aria-expanded="false" aria-controls="product_price_default" title="Click to expand...">
                                        <span class="glyphicon glyphicon-triangle-bottom d-arrow"></span>
                                        Product Pricing
                                        </a>
                                    </div><!--/.col-xs-12-->
                                </div><!--/.row-->
                            </div><!--/.container-->
                        </h4>
                    </div>
                <!--/.panel-heading-->
                     <?php include("./inc/fed700_price_default.inc.php");?>
             </div>
                <!--/.panel--> 

                <!-- /price panel -->
    <div class="panel panel-default">
               <div class="panel-heading" role="tab" id="headingSix">
                  <h4 class="panel-title">
                     <div class="container">
                        <a class="collapsed" style="padding-top: 5px;" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix" title="Click to expand...">
                        <span class="glyphicon glyphicon-triangle-bottom d-arrow"></span>
                        Find your carrier flow specs
                        </a>
                     </div>
                  </h4>
               </div>

               <!--/panel-heading-->
                   <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                     <?php include("./inc/ss_carrier_flow_specs.inc.php"); ?>
                   </div>
               <!--/collapseOne-->
    </div>

<!-- support -->
			<div class="panel panel-default">
                       <div class="panel-heading" role="tab" id="headingFour">
                          <h4 class="panel-title">
                             <div class="container">
                                <a class="collapsed" style="padding-top: 5px;" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" title="Click to expand...">
                                <span class="glyphicon glyphicon-triangle-bottom d-arrow"></span>
                                Support
                                </a>
                             </div>
                          </h4>
                       </div>

                <!--/panel-heading-->
                       <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                          <div class="panel-body features">
                             <div class="container">
                               <?php include("./inc/support.inc.php"); ?>
                             </div>
                          </div>
                       </div>
            </div>
		<!-- end of support -->

<!-- Factory Discount -->
  
   <?php
			 if ($special_discount != '') {                   
              echo"<div class='panel panel-default' id='data'>
    <div class='panel-heading' role='tab' id='headingSeven'>
      <h4 class='panel-title'>
        <div class='container'>
        	<div class='row'>
        		<div class='col-xs-12'>
        			<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseSeven' aria-expanded='false' aria-controls='collapseSeven' title='Click to expand...'>
        			 <span class='glyphicon glyphicon-triangle-bottom d-arrow'></span>
        			 Factory Discount
        			</a>
        		</div><!--/.col-xs-12-->
        	</div><!--/.row-->
        </div><!--/.container-->
      </h4>
    </div><!--/.panel-heading-->
    <div id='collapseSeven' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSeven'>
                <div class='panel-body'>
                     <div class='container'>";
					 include("inc/factory_discount.inc.php");
                     echo"</div>
                  </div>
               </div>
  </div>";
 }

 ?>
  <!--/.panel-->

  <!-- Factory Discount -->
<div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingEight">
                          <h4 class="panel-title">
                            <div class="container">
                            	<div class="row">
                            		<div class="col-xs-12">
                            			<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight" title="Click to expand...">
                            			 <span class="glyphicon glyphicon-triangle-bottom d-arrow"></span>
                            			Product Lead Time
                            			</a>
                            		</div>
                            	</div>
                            </div>
                          </h4>
                        </div>
      
        <div id='collapseEight' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingEight'>
                <div class='panel-body'>
                     <div class='container'>                         
                          <?php include("suddenshipping.inc.php");?>
                     </div>
                  </div>
        </div>
   
</div>



			</div>
            <!--/panel-group-->
		
		</div>
        <!--/row-->

       

	</div> <!-- end container-fluid -->

	<!--Footer Navigation-->
	<?php include($root . "inc/bootstrap/en/footer_nav.inc.php"); ?>

	<!-- BAUMALIGHT FOOTER -->
	<?php include($root . "inc/bootstrap/footer.inc.php"); ?>
	<!-- end BAUMALIGHT FOOTER -->

</body>


<script src="../js/custom01.js"></script>

<script type="text/javascript">
$(function() {
       
        $('.panel-collapse').on('shown.bs.collapse', function (e) {
    var $panel = $(this).closest('.panel');
    $('html,body').animate({
        scrollTop: $panel.offset().top
    }, 0); 
});
 });

</script>
<script type="text/javascript">
$(document).ready(function() {
    var partnumber = "<?php echo $part_number; ?>";
    var curl = "<?php echo $curl; ?>";
    var cntry = "<?php echo $cntry; ?>";
    var lim = 9;
    var off = 0;
    var inc = 0;
    $.ajax({
      type: "POST",
      url: 'fed700_allproduct.php',
      data: {lim,off,partnumber,curl,cntry},
      cache: false,
      success:function(response) {       
        $('#allproduct').html(response);
      }
    });    
});
function change_price(a) {
        var partnumber = "<?php echo $part_number; ?>";
        var curl = a;
        var c = curl;
        c = c.toUpperCase();
        var cntry = "<?php echo $cntry; ?>";  
        $.ajax({
                type:'POST',
                url: 'fed700_allproduct.php',
                data: {partnumber,curl,cntry},
                success : function(data) {                    
                    $('#allproduct').html(data);
                }
        });     
   }
</script>

<script type="text/javascript">
   function change_price_key(a) 
   {
        var curl = a;
        var c = curl;
        c = c.toUpperCase();
        var cntry = "<?php echo $cntry; ?>";  
        $.ajax({
                type:'POST',
                url: 'change_price_fmm148.php',
                data: {curl,cntry},
                success : function(data)
                {
                    $('#cntprice').text(c);
                    $('#change_price_jq').html(data);
                    
                }
              });
   }
</script>
</html>
