<?php
  include("hallinta.php");
  // Tähän tallennus
  $send1 = $_GET['send1'];
  $toimielimet = $_GET['toimielimet'];
  $viimeisinkokous = $_GET['viimeisinkokous'];
  $dokumenttityyppi = $_GET['dokumenttityyppi'];

  if($send1=='true') {

   $my=mysqli_connect("localhost","data15","jNTKdg3NTbRBuVEn","data15");

   if($my->mysql_errno) {
    die("MySQL, vithe yhteyden luonnissa: " .$my->connect_error);
   }

   $my->set_charset('utf8');
   $sql = 'INSERT INTO 605W_toimielimet (toimielimet, viimeisinkokous, dokumenttityyppi)
            VALUES ("'.$toimielimet.'","'.$viimeisinkokous.'","'.$dokumenttityyppi.'")';

   if($tulos = $my->query($sql)) {
    header("Location: index.php");
   } else {

     echo '<p>Tallennus epäonnistui!</p>';
   }
   
   $my->close();
  }  
?>


<?php   
  include("hallinta.php");
  // Tähän tallennus
  $send2 = $_GET['send2'];
  $osallistuja = $_GET['osallistuja'];
  $tehtava = $_GET['tehtava'];

  if($send2=='true') {

   $my=mysqli_connect("localhost","data15","jNTKdg3NTbRBuVEn","data15");

   if($my->mysql_errno) {
    die("MySQL, vithe yhteyden luonnissa: " .$my->connect_error);
   }

   $my->set_charset('utf8');
   $sql = 'INSERT INTO 6552_Osallistujat (osallistuja, tehtava)
            VALUES ("'.$osallistuja.'","'.$tehtava.'")';

   if($tulos = $my->query($sql)) {
    header("Location: index.php");
   } else {

     echo '<p>Tallennus epäonnistui!</p>';
   }

   $my->close();
  }     
?>


<?php   
  include("hallinta.php");
  // Tähän tallennus
  $send3 = $_GET['send3'];
  $asianro = $_GET['asianro'];
  $otsikko = $_GET['otsikko'];
  $linkki = $_GET['linkki'];

  if($send3=='true') {

   $my=mysqli_connect("localhost","data15","jNTKdg3NTbRBuVEn","data15");

   if($my->mysql_errno) {
    die("MySQL, vithe yhteyden luonnissa: " .$my->connect_error);
   }

   $my->set_charset('utf8');
   $sql = 'INSERT INTO 605W_pöytäkirja (asianro, otsikko, link)
            VALUES ("'.$asianro.'","'.$otsikko.'","'.$linkki.'")';   

   if($tulos = $my->query($sql)) {
    header("Location: index.php");
   } else {

     echo '<p>Tallennus epäonnistui!</p>';
   }

   $my->close();
  }
?>


<?php   
  include("hallinta.php");
  // Tähän tallennus

  $send4 = $_GET['send4'];
  $toimie = $_GET['toimie']; 
  $numero = $_GET['numero']; 
  $pva = $_GET['pva'];
  $title = $_GET['title'];  
  $text = $_GET['text'];     

  if($send4=='true') {

   $my=mysqli_connect("localhost","data15","jNTKdg3NTbRBuVEn","data15");

   if($my->mysql_errno) {
    die("MySQL, vithe yhteyden luonnissa: " .$my->connect_error);
   }

   $my->set_charset('utf8');   
   $sql = 'INSERT INTO 605W_poytakirja_asia (toimielin, asianro, pva, otsikko, text)
            VALUES ("'.$toimie.'","'.$numero.'","'.$pva.'","'.$title.'","'.$text.'")';   

   if($tulos = $my->query($sql)) {
    header("Location: index.php");
   } else {

     echo '<p>Tallennus epäonnistui!</p>';
   }

   $my->close();
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
            <title>Hallinta</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>

     <div class="container">
         <div class="row header">
             <div class="col-md-3">
                 <p>DYNASTY TIETOPALVELU</p>
             </div>
             <div class="col-md-5">
                 <a href="?kill=user"><strong>KIRJAUDU ULOS</strong></a>
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
            <h1>Tietokantojen hallinta</h1>
        </div>
    </div>

    <br>
      
       <div class="row">
       <div class="col-md-12 lomake">   
       <h2>Toimielimeen lisättävä tiedosto</h2>
       <br>
       <form>

           <label>Tiedoston nimi:</label>
           <input type="text" name="toimielimet" value="<?=$_GET['toimielimet']?>" required><br><br>

           <label>Päivämäärä:</label>
           <input type="text" name="viimeisinkokous" value="<?=$_GET['viimeisinkokous']?>" required><br><br>
           
           <label>Tyyppi (Pöytäkirja/Esityslista):</label>           
           <input type="text" name="dokumenttityyppi" value="<?=$_GET['dokumenttityyppi']?>" required><br><br>           
           
           <button class="button" type="submit" name="send1" value="true">Lähetä</button>
        </form>
        </div>
        </div>

        <br>

       <div class="row">
       <div class="col-md-12 lomake">   
       <h2>Osallistujalista</h2>
       <br>
       <form>

           <label>Nimi:</label>
           <input type="text" name="osallistuja" value="<?=$_GET['osallistuja']?>" required><br><br>

           <label>Tehtävä:</label>
           <input type="text" name="tehtava" value="<?=$_GET['tehtava']?>" required><br><br>

           <button class="button" type="submit" name="send2" value="true">Lähetä</button>
        </form>
        </div>
        </div>

        <br>

       <div class="row">
       <div class="col-md-12 lomake">   
       <h2>Pöytäkirja</h2>
       <br>
       <form>

           <label>Asianumero:</label>
           <input type="text" name="asianro" value="<?=$_GET['asianro']?>" required><br><br>

           <label>Otsikko:</label>
           <input type="text" name="otsikko" value="<?=$_GET['otsikko']?>" required><br><br>

           <label>Linkin nimi:</label>
           <input type="text" name="linkki" value="<?=$_GET['linkki']?>" required><br><br>
           
           <button class="button" type="submit" name="send3" value="true">Lähetä</button>
        </form>
        </div>
        </div>

        <br>

       <div class="row">   
       <div class="col-md-12 lomake">   
       <h2>Pöytäkirja-asia</h2> 
       <br>
       <form>

           <label>Toimielimen nimi:</label>
           <input type="text" name="toimie" value="<?=$_GET['toimie']?>" required><br><br>

           <label>Asia numero:</label>
           <input type="text" name="numero" value="<?=$_GET['numero']?>" required><br><br>

           <label>Päivämäärä:</label>
           <input type="text" name="pva" value="<?=$_GET['pva']?>" required><br><br>

           <label>Otsikko:</label>
           <input type="text" name="title" value="<?=$_GET['title']?>" required><br><br>


           <label>Teksti:</label>
           <textarea type="text" name="text" value="<?=$_GET['text']?>" required></textarea><br><br>

           <button class="button" type="submit" name="send4" value="true">Lähetä</button>
        </form>
        </div>
        </div>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
    </body>
</html>