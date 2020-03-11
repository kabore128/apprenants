<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" media="screen" type= "text/css" href="../style/style.css">
</head>
<body>
  <div class="container" id="cont">
    <form enctype="multipart/form-data">
      <fieldset>
      <legend>Apprenant</legend>
        <div class=" container d-flex row">
        <div class="photo col-md-2 form-group">
        <label for="inputphoto" class="lab"><img class="labelphoto" id="labelphoto" src="" style="border:2px solid gray;"></label>
        <input hidden type="file" name="photo" id=inputphoto placeholder="Photo"  required/>
        </div>
          <div class="row col-md-10">
            <input type="text" name="nom" placeholder="Nom" class="form-control" required/>
            <input type="text" name="prenom" placeholder="Prénom" class="form-control" required/>
            <input type="date" name="date" placeholder="Date de naissance" class="form-control"required/>
          </div>
        </div>
        <div class=" d-flex row">
            <input type="text" name="ville" placeholder="Ville" class="form-control col-md-5" required/>
            <input type="text" name="etablissement" placeholder="Etablissemnt" class="form-control col-md-5" required/>
        </div>
        <div class="d-flex">
            <input type="text" name="contact" placeholder="Contact" class="form-control" required/>
            </div>
      </fieldset>
      <fieldset>
        <legend>Tuteur</legend>
        <div class="d-flex row">
            <input type="text" name="nom" placeholder="Nom" class="form-control col-md-5" required/>
            <input type="text" name="Prenom" placeholder="Prenom"class="form-control col-md-5" required/>
        </div>
        <div class="d-flex row">
            <input type="text" name="contact" placeholder="Contact" class="form-control col-md-5" required/>
            <input type="text" name="domicile" placeholder="Domicile" class="form-control col-md-5" required/>
        </div>
      </fieldset> <br>
      <div>
      <input class="btn btn-primary" type="submit" id="sub" value="Enregistrer"/>
      <input class="btn btn-danger" type="reset" value="Effacer"/>
      </div>
</form>
      </div>
<script src="../js/script.js">
</script>
</body>
</html>