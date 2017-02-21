<!DOCTYPE html>
  <html>
    <head>
      <title>Pöytäkirja</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
     <div class="container">
         <div class="row header">
             <div class="col-md-3 col-sm-6">
                 <p>DYNASTY TIETOPALVELU</p>
             </div>
             <div class="col-md-5 col-xs-12 col-sm-6">
                 <a
                 href="sessio/login.php"><strong>HALLINTA</strong></a>
             </div>
             <div class="col-md-2 col-xs-4 col-sm-4">
                 <p>KOKKOLA</p>
             </div>
             <div class="col-md-1 col-xs-8 col-sm-4 viiva">
                 <p>RSS</p>
             </div>
             <div class="col-md-1 col-xs-12 col-sm-4 haku viiva">
                 <p>Haku</p>
            </div>
         </div>
         <div class="row">
             <div class="col-xs-12 nimi">
                 <h1>TESTI</h1>
             </div>
         </div>
             <div class="row">
                 <div class="col-md-5 col-xs-6 otsikot">
                     <p>Asiannumero</p>
                 </div>
             <div class="col-md-7 col-xs-6 otsikot">
                 <p>otsikko</p>
             </div>
         </div>
         
         
           <?php
            include "settings.php";
            
           $otsikko = 'SELECT * FROM 605W_pöytäkirja';
           $nayta = $my -> query($otsikko);

           $nimet = 'SELECT * FROM 6552_Osallistujat';
           $nayta2 = $my -> query($nimet);
           
           while($t = $nayta -> fetch_object()){
             echo '<div class="row">';
             echo '<div class="col-md-5 col-xs-2 osall">'."<p>". $t -> asianro . "</p>" ."</div>";
             echo '<div class="col-md-7 col-xs-10 osall">'.'<a href="'. $t -> link .'.php">' .  $t -> otsikko."</a>"."</div>";
             echo "</div>";
           }

           ?>

           <div class="row">
            <div class="col-md-5 col-xs-6 otsikot">
             <p>Osallistuja</p> 
            </div>
            <div class="col-md-7 col-xs-6 otsikot">
             <p>Tehtävä</p>
            </div>
           </div>

           <?php

           while($r = $nayta2 -> fetch_object()){
             echo '<div class="row">';
             echo '<div class="col-md-5 col-xs-6 osall">'. "<p>". $r -> osallistuja ."</p>". "</div>";
             echo '<div class="col-md-7 col-xs-6 osall">'. "<p>". $r -> tehtava ."</p>"."</div>";
             echo '</div>';
           }          

          $my -> close(); 
           ?>
         
     </div>
 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>     
    </body>
  </html>