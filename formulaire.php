<!doctype html>
<html>
<head>
     <title>Adresse Client</title>
     <meta charset="utf-8"/>
</head>

<body>

<h1 style="text-align:center">Veuillez renseigner ces informations</h1>
<form method="post" action="traitement.php" style="margin-left:300px;margin-right:300px;">
<fieldset>
<legend><h2>Vos Informations</h2></legend>

<p><label for="nom"> Nom : </label><input type="text" name="nom" id="nom" style="margin-left:61px" /><p>
<p><label for="prenom"> Prenom : </label><input type="text" name="prenom" id="prenom" style="margin-left:44px" /><p>
<p><label for="Adresse"> Adresse : </label><input type="text" name="adresse" id="adresse" style="margin-left:43px" /><p>
<p><label for="Code"> Code Postale : </label><input type="text" name="code" id="code" style="margin-left:12px" /><p>
</fieldset>

   <p style="text-align:center"><input type="submit" value="Enregistrer" id="save"></p>
<form>

</body>
</html>