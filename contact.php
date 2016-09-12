


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="lv" lang="lv">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <head>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
    

  </head>
  <body>
       <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="index.html">Stuff</a></li>
          <li><a href=".\couresel\galerija.html">more Stuff</a></li>
        </ul>
        <ul class="pull-right">
          <li><a href=".\jquerry\pasakumi.html">pasakumi</a></li>
           <li><a href="tuner\tuner.html">tuneris</a></li>
                        <li><a href="contact.html">contact</a></li>
           </ul>
      </div>
    </div>
      
      
      
      
      
 <div class="container-full">

      <div class="row">
       
        <div class="col-lg-12 text-center v-center">
          
          <h1>Subscribe</h1>
          <p class="lead">get a daily updates and news</p>
          
          <br>
          
         
          <form class="col-lg-12" method="post" action="contact.php ">
            <div class="input-group input-group-lg col-sm-offset-4 col-sm-4">
              <input name= "epasts" type="text" class="center-block form-control input-lg" title="Enter you email." placeholder="Enter your email address">
              <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="submit">OK</button></span>
            </div>
          </form>
            
         <?php require_once("db.php");  ///////////pieslegums db
             $epasts=$_POST['epasts'];
              
                $query = "INSERT INTO user_email (epasts) VALUES ('$epasts')";

                 if ( !filter_var($epasts, FILTER_VALIDATE_EMAIL)) {
                        echo "</br>"."E-pasta adrese <b>$epasts</b> nav ievadīta pareizi! "."\n"; 
                        }else{
                            
                            if($epasts) $testVar= $dblink->query($query); else echo "<br>ievadiet epastu! \n";
                            if(!$testVar)  echo "epasts <b>$epasts</b> reģistrēts jau iepriekš "."\n"; else 
                                 echo "</br>"."E-pasta adrese <b>$epasts</b> ievadīta datu bāze! "."\n"; 
            } 
              

                mysqli_close($dblink); // Closing Connection with Server
            
    
    
    
        ?>  
            
            
        </div>
        
      </div> <!-- /row -->
  
  	  
  
  	<br><br><br><br><br>



  </body>
</html>
    <style>
    @import url(http://fonts.googleapis.com/css?family=Antic+Slab);

html,body {
  height:100%;
}

h1 {
  font-family: 'Antic Slab', serif;
  font-size:80px;
  color:deepskyblue;
}

.lead {
	color:darkcyan;
}


/* Custom container */
.container-full {
  margin: 0 auto;
  width: 100%;
  min-height:100%;
  background-color:darkolivegreen;
  color:#eee;
  overflow:hidden;
}

.container-full a {
  color:#efefef;
  text-decoration:none;
}

.v-center {
  margin-top:7%;
}
    </style>>