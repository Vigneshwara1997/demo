<?php 

     include "./inc/config.php";
    session_start();
    $root = "../../";
    $e ='';
    $part_number = $_POST['partnumber'];
    $curl = strtolower($_POST['curl']);
    $cntry = strtolower($_POST['cntry']);  
	$cur = strtoupper($_POST['curl']);

    $sql = "SELECT * FROM `gp_report` WHERE `Part_Number` LIKE '$part_number%' AND status ='Active'";
    $result = $conn->query($sql);

    $row_count = $result->num_rows;

    $e .='<div class="container top-35">
            <div class="row" style="background-color:transparent;">
                <div class="col-md-8 ycolor bold" style="padding: 14px 0px 0px 31px;">PRODUCT PRICING</div>
                <div class="col-md-4  navbar-collapse" id="baumalight-nav-collapse" style="background-color:transparent;padding-left: 50px;">

                    <ul class="nav navbar-nav navbar-right common-dropdown">
                        <li class="dropdown">
                            <a style="background-color:transparent;color:white;" href="#" class="wcolor dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Currency</span>:&nbsp;<span class="ycolor"><u><sep id="cntrydy">'.$cur.'</sep></u></span></a>
                            <ul class="dropdown-menu menu" role="menu">
                                <li>
                                   <a onclick="change_price(\'cad\')" style="font-size: 14px;"><img src="'.$root.'img/CA.png" style="width:30px;">&nbsp CANADA</a>
                                </li>
                                <li>
                                   <a onclick="change_price(\'usd\')" style="font-size: 14px;"><img src="'.$root.'img/US.png" style="width:30px;">&nbsp UNITED STATES</a>
                                </li>
                                <li style="vertical-align: middle !important;">
                                   <a onclick="change_price(\'usd\')" style="font-size: 14px;"><img src="'.$root.'img/globe.png" style="width:27px;">&nbsp INTERNATIONAL</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-10 table-responsive">
                        <table cellspacing="0" class="spec-charts">
                            <thead>
                                <tr>
                                    <th class="left">Part #</th>
                                    
                                    <th class="fright">Price&nbsp;('.$cur.')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="alt">
                                    <td class="left">FEB700-C540</td>
                                    
                                    <td class="fright">';
                            $sql = "SELECT * FROM `gp_report` WHERE `Part_Number` LIKE 'FEB700-C540'";
                            $result = $conn->query($sql);
                            $rate = '-';
                            if ($result->num_rows > 0) 
                            {
                                    $row = $result->fetch_assoc();                                   
          
                                   if($curl == '' AND $cntry=="US")
                                    {
                                        if(!empty($row['U60_price_level_price']))
                                        {
                                            $rate = number_format($row['U60_price_level_price'],2);
                                        }
                                    } 
                                    else if($curl == '' AND $cntry !="US") 
                                    {
                                        if(!empty($row['C60_price_level_price']))
                                        {
                                            $rate = number_format($row['C60_price_level_price'],2);
                                        }
                                    }
                                    else if($curl == "usa" or $curl=="usd" or $curl=="USD") 
                                    { 
                                        if(!empty($row['U60_price_level_price']))
                                        {
                                            $rate = number_format($row['U60_price_level_price'],2);
                                        }
                                    }
                                    else if($curl == "cad") 
                                    { 
                                        if(!empty($row['C60_price_level_price']))
                                        {
                                            $rate = number_format($row['C60_price_level_price'],2);
                                        }
                                    }
                                    $rate = '$'.$rate;
                            }        
                            $e.=$rate;
                            $e .='</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>';
       
                   
                    $e .= '<p class="col-md-10" style="margin-top:-30px;">
                    <a class="ycolor" href="../../teeth-options/en/teeth-options.php#flail"><u>VIEW TEETH OPTIONS AND PRICING</u></a>
                </p>';
                   
       $e .= '<div style="background-color:transparent;">
       <div class="col-md-12 ycolor bold">FREE FREIGHT ON MOST WHOLE GOODS (Some Conditions Apply. <a href="../../shipping-policy/index.php" style="color: #fed104;">Click for Shipping Policy</a>)</div>
   </div>';
        
            $e .=' </div><br>';
    echo $e;
?>