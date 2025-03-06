<?php
include_once("./components/header.php");
include_once("./class/Recette.php");
if (isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['description']) && isset($_POST['difficulte']) && isset($_POST['calorie']) && isset($_POST['image'])) {
    
    $recette = new Recette(
        $_POST['titre'],
        $_POST['description'],
        $_POST['difficulte'],
        $_POST['calorie'],
        $_POST['image']
        
    );
echo"<ul>";
echo"<li> <b>";
echo $recette->getTitre();
echo"</b></li>";
echo"<li>";
echo $recette->getDescription();
echo"</li>";
echo"<li>";
echo $recette->getDifficultes();
echo"</li>";
echo"<li>";
echo $recette->getCalorie();
echo"</li>";
echo "<img src='". $recette->getImage() . "' alt='Image' style='max-width: 100px; height: 100px;'>";

echo"</ul>";
}
// var_dump($recette);

?>

<div class="form">
<form action="" method="post">
<div class="mb-3">
  <label for="titre" class="form-label">Titre de la recette</label>
  <input type="text" class="form-control" name="titre" id="titre" placeholder="titre de la recette" required>
</div>
<div class="mb-3">
  <label for="description" class="form-label">Description de la recette</label>
  <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
</div>
<select class="form-select" name="difficulte" aria-label="Default select example" required>
  <option selected>Difficulté</option>
  <option value="1">Facile</option>
  <option value="2">Moyen</option>
  <option value="3">Difficile</option>
</select>
<div >
    <label for="calorie" class="form-label">Calories</label>
    <input type="number" class="form-control" name="calorie" id="calorie" required>
  </div>
<div >
    <label for="image" class="form-label">image de la recette</label>
    <input type="texte" class="form-control" name="image" id="image" required >
  </div>
  <div>
    <button class="btn btn-primary mt-4" type="submit">Valider</button>
  </div>
  </form>
  </div>


<?php
include_once("./components/footer.php");

?>