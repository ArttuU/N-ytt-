<!DOCTYPE html>
  <html>
    <head>
      <title>Toimielimet</title>
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
                 <a href="sessio/login.php">HALLINTA</a>
             </div>
             <div class="col-md-2 col-xs-8 col-sm-4">
                 <p>KOKKOLA</p>
             </div>
             <div class="col-md-1 col-xs-4 viiva col-sm-4">
                 <p>RSS</p>
             </div>
             <div class="col-md-1 col-xs-12 viiva haku col-sm-4">
                 <p>Haku</p>
            </div>
         </div>
         <div class="row">
             <div class="col-xs-12 nimi">
                 <h1>Toimielimet</h1>
             </div>
        </div>
         
         <div class="row">
                 <div class="col-md-8 col-xs-12 col-sm-4 otsikot">
                     <p>Toimielimet</p>
                 </div>
             <div class="col-md-2 col-xs-1 col-sm-4 otsikot">
                 <p>Viimeisin kokous</p>
             </div>
             <div class="col-md-2 col-xs-12 col-sm-4 otsikot">
                 <p>Dokumenttityyppi</p>
             </div>
         </div>
         
         
           <?php
            include "settings.php";
            
           $otsikko = 'SELECT * FROM 605W_toimielimet';
           $nayta = $my -> query($otsikko);


           while($t = $nayta -> fetch_object()){
             echo '<div class="row">';
             echo '<div class="col-md-8 col-xs-12 col-sm-4 stuff">'.'<a href="'. $t -> toimielimet .'.php">' .  $t -> toimielimet."</a>"."</div>";
             echo '<div class="col-md-2 col-xs-12 col-sm-4 stuff">'."<p>". $t -> viimeisinkokous ."</p>"."</div>";
             
          }

        $tyyppi = 'SELECT * FROM 6552_Vuosi';
        $nayta2 = $my -> query($tyyppi);

        while($r = $nayta2 -> fetch_object()){
            $numero = $numero + 1;
            echo '<div class="col-md-2 col-xs-12 col-sm-4 stuff">'.'<a href="'. $r -> tyyppi.$numero. '.php">'. $r -> tyyppi. "</a>"."</div>"; 
            echo '</div>';
        }

          $my -> close();
           ?>
         

     </div>

 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>     
    </body>
  </html>