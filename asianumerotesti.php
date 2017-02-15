<!DOCTYPE html>
  <html>
    <head>
      <title>Pöytäkirja</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
     <div class="container">
         <div class="row header">
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
             <div class="col-md-12 nimi">
                 <h1>TESKaupunginhallitus Esityslista 13.02.2017/Asianro 75TI</h1>
             </div>

           <?php
            include "settings.php";
            
           $otsikko = 'SELECT * FROM 605W_poytakirja_asia';
           $nayta = $my -> query($otsikko);
           
           while($t = $nayta -> fetch_object()){
               echo '<div class="row">';
                echo '<div class="col-md-5">';
                 echo '<p>'. $t -> toimielin . '</p>';
                echo '</div>';
                echo '<div class="col-md-2">';
                 echo '<p>'. $t -> asianro . '</p>';
                echo '</div>';
                echo '<div class="col-md-5">';
                 echo '<p>'. $t -> pva . '</p>';
                echo '</div>';
               echo '</div>';
               echo '<div class="row">';
                echo '<div class="col-md-12">';
                 echo '<pre>' . $t -> text . '</pre>';
                echo '</div>' ;
               echo '</div>';
           }   

          $my -> close(); 
           ?>
         
     </div>

 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>     
    </body>
  </html>