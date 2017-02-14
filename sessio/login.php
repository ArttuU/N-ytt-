<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <title>Hallinta</title>
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
                 <h1>Kirjaudu</h1>
             </div>
         </div>
         
        <div class="row">
          <div class="col-md-12 lomake">
         
         <form action="index.php" method="post">
           <p>Tunnus:<br>
         <input type="login" name="login"></p>
           <p>Salasana:<br>
         <input type="password" name="passwd"></p>
         <button name="btn" value="1">Kirjaudu</button>
       </form>
       
       </div>
      </div>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
    </body>
</html>