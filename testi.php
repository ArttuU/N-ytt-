<!DOCTYPE html>
  <html>
    <head>
      <title>Testi</title>
      <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
              <div class="col-md-2 col-xs-8 col-sm-4">
                 <p>KOKKOLA</p>
             </div>
             <div class="col-md-1 col-xs-4 viiva col-sm-4">
                 <p>RSS</p>
             </div>
             <div class="col-md-1 col-xs-12 haku viiva col-sm-4">
                 <p>Haku</p>
            </div>
         </div>
         <div class="row">
             <div class="col-xs-12 nimi">
                 <h1>Testi</h1>
             </div>
         
             <div class="row">
                 <div class="col-xs-12 otsikot center">
                     <p>Vuosi 2017 </p>
                 </div>
         </div>
         
         
           <?php
            include "settings.php";
            
           $otsikko = 'SELECT * FROM 6552_Vuosi';
           $nayta = $my -> query($otsikko);


           while($t = $nayta -> fetch_object()){
           $numero = 0;
           $numero = $numero + 1;
             echo '<div class="row">';
             echo '<div class="col-md-4 col-xs-12 col-sm-4 stuff">'."<p>". $t -> päivämäärä ."</p>"."</div>";
             echo '<div class="col-md-8 col-xs-12 col-sm-8 stuff">'.'<a href="'. $t -> tyyppi.$numero .'.php">' .  $t ->  tyyppi."</a>"."</div>";
             echo '</div>';
          }

          $my -> close(); 
           ?>
         
         </div>
     </div>
    </div>
 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>     
    </body>
  </html>