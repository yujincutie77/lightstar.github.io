<?php
    require('database.php');
  /*    require('SumQuery.php');   */
    require('read.php');


    
    if(isset($_POST['clearAll'])){


        $queryClear="DELETE FROM items_tbl";
        $sqlClear=mysqli_query($connection,$queryClear);
        echo '<script>alert("Successfully clear!")</script>';
        echo '<meta http-equiv="refresh" content="0;URL=index.php">'; 
    }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/jng" href="images/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&family=Prata&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="CSS/JobOrderStyle.css">
        <link rel="stylesheet" href="CSS/JobStylePrint.css" media="print">
        <!------ Include the above in your HEAD tag ---------->

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <title>Light Star</title>
    


    </head>


                  



    <body class="home">
        <div class="container-fluid display-table">
            <div class="row display-table-row">

                    <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                        <div class="logo">
                            <a hef="home.html"><img src="images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                                <img src="images/logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                            </a>
                        </div>
                        <div class="navi">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                                <li><a href="LEDbox.php"><i class="fa fa-lightbulb-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Led Light Box List</span></a></li>
                                <li><a href="LightFrame.php"><i class="fa fa-bolt" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Lighted Frame List</span></a></li>
                                <li><a href="RawMat.php"><i class="fa fa-industry" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Raw Materials List</span></a></li>
                                <li  class="active"><a href="JobOrder.php"><i class="fa fa-list" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Job Order</span></a></li>
                                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Unknown</span></a></li>
                            </ul>
                        </div>
                    </div>

                <div class="col-md-10 col-sm-11 display-table-cell v-align">
                    <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                    <div class="row">
                        
                            <div class="col-md-7">
                                <nav class="navbar-default pull-left">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                </nav>
                               
                            </div>



                        <!--------LOGO AND ADDRESS START------------->
                            <div class="col-lg-12 col-md-12   layout1">
                                <div class="logo_address">
                                    <img src="images/logoadd.png" style="width:80%;height:120%;">
                                </div>
                            </div>
                        <!--------LOGO AND ADDRESS END------------->



                            <div class="col-lg-12 col-md-12  infolayout">
                                 <p class="jobtitle">Job Specification</p>

                                 <p class="jobClient">Client : </p>
                                <input type="text" class="form-control" id="clienttxtbx">

                                 <p class="jobDate">Date :</p>
                                 <input type="date" class="form-control" id="datetxtbx">

                                 <p class="jobAddress">Address :</p>
                                 <input type="text" class="form-control" id="addresstxtbx">

                                 <p class="jobContact">Contact Person :</p>
                                 <input type="text" class="form-control" id="contacttxtbx">

                                 <p class="jobContactNum">Contact Number :</p>
                                 <input type="text" class="form-control" id="contactnumtxtbx">
                            </div>

                            <div class="col-lg-12 col-md-12  categorylayout">
                                <div class="catlayout1">
                                    <input type="checkbox"  id="chckstatic">
                                    <p class="stattxt">STATIC</p>

                                    <input type="checkbox"  id="chckdyna">
                                    <p class="dynatxt">DYNAMIC</p>

                                    <input type="checkbox"  id="chcksnap">
                                    <p class="snaptxt">SNAP SLIM BOX</p>

                                    
                                    <input type="checkbox"  id="chcksraw">
                                    <p class="rawtxt">RAW MATERIALS</p>
                                </div>
                            </div>

                            <!-- STATIC START -->
                            <div class="col-lg-12 col-md-12  staticlayout">
                                <div class="statlayout2">
                                     <p id="stattxtcat" style="background-color:#1d3958;width:100%;">STATIC</p>
                                
                                     <p class="dimentxt">DIMENSION :</p>
                                     <input type="text" class="form-control" id="dimentxtbx">

                                     <p class="qtytxt">QTY :</p>
                                     <input type="text" class="form-control" id="qtytxtbx">
                                  
                                     <!-- FRAME START -->
                                    
                                     
                                     <p class="frmetxt">FRAME</p>
                                 
                                     <input type="checkbox"  id="chckfrme">
                                     <p class="fiftymmtxt">50MM</p>
                                    <input type="checkbox"  id="chck80sffrme">
                                     <p class="eightymmtxt">80MM SF</p> 
                                     <input type="checkbox"  id="chck80dffrme">
                                    <p class="eightymmdftxt">80MM DF</p> 
                                    <input type="checkbox"  id="chck120sffrme">
                                    <p class="onetwozerommsftxt">120MM SF</p> 
                                    <input type="checkbox"  id="chck120dffrme">
                                    <p class="onetwozerommdftxt">120MM DF</p> 
                                    <input type="checkbox"  id="chckothers">         
                                    <p class="otherstxt">OTHERS :</p> 
                                    <input type="text" class="form-control" id="txtbxothers">
                                    
                                    <!-- FRAME END -->
                                    

                     
                                    <!-- LED START -->
                                 
                                     <p class="ledtxt">LED</p>         
                                    <input type="checkbox" id="chckstrip">
                                    <p class="striptxt">STRIP</p>
                                    <input type="checkbox"  id="chckfish">
                                    <p class="fishtxt">FISH EYE STRIP</p>
                                    <input type="checkbox"  id="chckopt">
                                    <p class="opttxt">OPTICAL</p>
                                    <input type="checkbox"  id="chcklgp">
                                    <p class="lgptxt">LGP</p>
                              
                                    <!-- LED END -->
                      



                       
                                    <!-- COLOR START -->
                                    
                                     <p class="colortxt">COLOR TEMP</p>
                                     <input type="checkbox"  id="chck7k">
                                     <p class="sevenktxt">7K</p>
                                     <input type="checkbox"  id="chck10k">
                                
                                     <p class="tenktxt">10K</p>

                                    

                                    <input type="checkbox" id="chck12k">
                                 
                                    <p class="onetwotxt">12K</p> 
                                    <div class="color">  
                                    </div>
                                    <!-- COLOR END -->
                         


                       
                                    <!-- BBOARD START -->
                                 
                                     <p class="bboardtxt">BACK BOARD</p>
                                     <input type="checkbox"  id="chcksintra">
                                     <p class="sintratxt">SINTRA</p>
                                     <input type="checkbox"  id="chckacp">
                                     <p class="acptxt">ACP</p>
                                     <input type="checkbox" id="chckothersboard">
                                     <p class="othersboardtxt">OTHERS : </p> 
                                     <input type="text" class="form-control" id="txtbxothersboard">
                                 
                                    <!-- BBOARD END -->
                         

                          
                                      <!-- APPLICATION START -->
                                   
                                     <p class="apptxt">APPLICATION</p>
                                    
                                     <input type="checkbox"  id="chckwall">
                                     <p class="walltxt">WALL MOUNT</p>
                                     <input type="checkbox" id="chckstand">
                                     <p class="standtxt">STANDEE</p> 
                                     <input type="checkbox"  id="chcksuspend">
                                     <p class="suspendtxt">SUSPENDED</p>
                                     <input type="checkbox"  id="chckhanged">
                                     <p class="hangtxt">HANGED</p>
                                    
                                    <!-- APPLICATION END -->
                           

                            
                                        <!-- VOLTAGE START -->
                                        
                                        <p class="voltxt">VOLTAGE</p>
                                        <input type="checkbox"  id="chck24v">
                                        <p class="twofourvtxt">24V</p>
                                        <input type="checkbox"  id="chck12v">
                                        <p class="twoonevtxt">12V</p>
                                        <input type="checkbox" id="chck5v">
                                        <p class="fivevtxt">5V</p>  
                                      
                                        <!-- VOLTAGE END -->
                               

                                 </div>
                            </div>
                              <!-- STATIC END -->
                      

                            <!-- DYNAMIC START -->
                            <div class="col-lg-12 col-md-12  dynamiclayout">
                                <div class="dynamiclayout2">
                                     <p id="dynatxtcat" style="background-color:#1d3958;width:100%;">DYNAMIC</p>
                                
                                    <div class="contentdynamic">
                                     <p class="dimendynatxt">DIMENSION :</p>
                                     <input type="text" class="form-control" id="dimendynatxtbx">

                                     <p class="qtydynatxt">QTY :</p>
                                     <input type="text" class="form-control" id="qtydynatxtbx">


                                     <!-- FRAME DYNA  START -->
                                      <p class="frmedynatxt">FRAME</p>
                                      <input type="checkbox"  id="chckdynafrme">
                                     <p class="fiftymmdynatxt">50MM</p>
                                      <input type="checkbox"  id="chckdyna80sffrme">
                                      <p class="eightymmdynatxt">80MM SF</p> 
                                      <input type="checkbox"  id="chckdyna80dffrme">
                                     <p class="eightymmdfdynatxt">80MM DF</p> 
                                     <input type="checkbox"  id="chckdyna120sffrme">
                                     <p class="onetwozerommsfdynatxt">120MM SF</p> 
                                     <input type="checkbox"  id="chckdyna120dffrme">
                                      <p class="onetwozerommdfdynatxt">120MM DF</p> 
                                     <input type="checkbox"  id="chckdynaothers">
                                     <p class="othersdynatxt">OTHERS :</p> 
                                   <input type="text" id="txtbxothersdyna"> 
                                    <!-- FRAME DYNA END -->

                                    <!-- LED  DYNAMIC START -->
                                 <p class="ledtxtdyna">LED</p>
                                 <input type="checkbox" id="chckdynaboard">
                                    <p class="boardynatxt">BOARD</p>
                                     <input type="checkbox"  id="chckdynastrip">
                                   <p class="stripdynatxt">STRIP</p>
                              
                                    <!-- LED DYNAMIC END -->


                                    <!-- PIXEL START -->
                                 <p class="pixeltxt">PIXEL PITCH</p>
                                 <input type="checkbox" id="chckdynapixel">
                                 <p class="p20dynatxt">P20</p>
                                 <input type="checkbox"  id="chckdynap10">
                                 <p class="p10dynatxt">P10</p>
                                 <input type="checkbox"  id="chckdynap38">
                                 <p class="p38dynatxt">P38</p>
                                    <!-- PIXEL END -->


                                    <!-- VOLTAGE DYNA START -->
                                    <p class="voldynatxt">VOLTAGE</p>
                                      <input type="checkbox"  id="chck24vdyna">
                                     <p class="twofourvdynatxt">24V</p>
                                     <input type="checkbox"  id="chck12vdyna">
                                   <p class="twoonevdynatxt">12V</p>
                                   </div>
                                </div>

                            </div>
                           <!-- DYNAMIC END -->

                        <!-- MEDIA START -->
                           <div class="col-lg-12 col-md-12  medialayout">
                                <div class="medialayout2">
                                     <p id="mediatxtcat" style="background-color:#1d3958;width:100%;">MEDIA</p>
                               
                                     <div class="contentmedia">
                                      <input type="checkbox"  id="chckfabric">
                                     <p class="fabrictxt">CONSTANT FABRIC</p>

                                     <input type="checkbox"  id="chckpearl">
                                   <p class="pearltxt">CONSTANT PEARL</p>
                                

                                   <input type="checkbox"  id="chckpvctext">
                                   <p class="pvctexttxt">PVC TEXTTILE</p>
                                

                                   <input type="checkbox"  id="chckpvcsofttext">
                                   <p class="pvcsofttxt">PVC SOFT FILM</p>

                                   <input type="checkbox"  id="chckback">
                                     <p class="backtxt">BACKLIT</p>

                                     <input type="checkbox"  id="chckbackflex">
                                     <p class="backbflextxt">BACKLIT FLEX</p>
                                     </div>
                                </div>

                            </div>

                        <!-- MEDIA END -->

                            <!-- BACKING START -->
                            <div class="col-lg-12 col-md-12  backinglayout">
                                <div class="backinglayout2">
                                     <p id="mediatxtcat" style="background-color:#1d3958;width:100%;">BACKING</p>
                               
                                     <div class="contentback">

                                  
                                      <input type="checkbox"  id="chcksintraback">
                                     <p class="sintrabacktxt">SINTRA</p>

                                     <input type="checkbox"  id="chckacpback">
                                   <p class="acpbacktxt">ACP</p>
                                

                                   <input type="checkbox"  id="chckplywood">
                                   <p class="plywoodtxt">PLYWOOD</p>
                                

                              
                                   <input type="checkbox"  id="chckgishoot">
                                     <p class="gishoottxt">GI SHOOT</p>

                                     <input type="checkbox"  id="chckacrylicback">
                                     <p class="backacrylictxt">ACRYLIC</p>

                                     </div>
                                </div>

                            </div>

                        <!-- BACKING END -->

                        <!-- RAW START -->
                        <div class="col-lg-12 col-md-12  rawmatlayout">
                                <div class="rawmatlayout2">
                                     <p id="mediatxtcat" style="background-color:#1d3958;width:100%;">SPECIAL INSTRUCTION / RAW MATERIALS </p>
                               
                         
                                </div>

                            </div>

                        <!-- RAW END -->

                        <!-- DETAILS START -->
                            <div class="col-lg-12 col-md-12  detailslayout">
                                 <p class="comdate">COMPLETION DATE :</p>
                                 <input type="date"  class="form-control" id="datedetails">

                                 <p class="appby">APPROVED BY : </p>
                                 <input type="textbox"  class="form-control" id="appbytxtbx">

                                 <p class="salesp">SALES PERSON : </p>
                                 <input type="textbox"  class="form-control" id="salesptxtbx">
                            </div>

                        <!-- DETAILS END -->


                    </div>
                </div>



              
    

            </div>

        </div>

           
            

    </body>



</html>