<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <title>Hallintaan kirjautuminen</title>
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
                 <a
                 href="http://cosmo.kpedu.fi/~arttuuuskartano/php2017/n%C3%A4ytt%C3%B63/N-ytt-/toimielimet.php">ETUSIVU</a>
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
                 <h1>Kirjaudu</h1>
             </div>
         </div>
         
        <div class="row">
          <div class="col-md-12 lomake">
         
         <form action="index.php" method="post">
           <label>Tunnus:</label>
         <input type="text" name="login"><br><br>
           <label>Salasana:</label>
         <input type="password" name="passwd"><br><br>
         <button class="button" name="btn" value="1">Kirjaudu</button>
       </form>
       
       </div>
      </div>
     </div>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
    </body>
</html>