<!DOCTYPE html>
  <html>
    <head>
      <title>Testi</title>
      <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
     <div class="container">
         <div class="row">
             <div class="col-md-8">
                 <p>DYNASTY TIETOPALVELU</p>
             </div>
             <div class="col-md-2">
                 <p>KOKKOLA</p>
             </div>
             <div class="col-md-1">
                 <p>RSS</p>
             </div>
             <div class="col-md-1">
                 <p>Haku</p>
            </div>
         </div>
         <div class="row">
             <div class="col-md-12">
                 <h1>Toimielimet</h1>
             </div>
         
             <div class="row">
                 <div class="col-md-8">
                     <p>Toimielimet</p>
                 </div>
             <div class="col-md-2">
                 <p>Viimeisin kokous</p>
             </div>
             <div class="col-md-2">
                 <p>Dokumenttityyppi</p>
             </div>
         </div>
         
         <div class="row">
           <?php
            include "settings.php";
            
           $otsikko = 'SELECT * FROM 6552_Vuosi';
           $nayta = $my -> query($otsikko);


           while($t = $nayta -> fetch_object()){
           $numero = 0;
           $numero = $numero + 1;
             echo '<div class="col-md-2">'."<p>". $t -> päivämäärä ."</p>"."</div>";
             echo '<div class="col-md-8">'.'<a href="'. $t -> tyyppi.$numero .'.php">' .  $t ->  tyyppi."</a>"."</div>";
          }

          $my -> close(); 
           ?>
         
         </div>
     </div>

 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>     
    </body>
  </html>