<?php include_once 'php/common/header.php'; ?>

<h1 class="text-center"><u>Contact</u></h1>
<!--Vérification et envoie du formulaire de contact-->
<?php
$firstname = null;
$lastname = null;
$email = null;
$message = null;


// Vérifie l'envoi du formulaire en POST
if (!empty($_POST)) {

  // Récupère les données de $_POST
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $message = $_POST['message'];


  // Création du tableau d'erreur
  $error = [];

  // Contrôle du Nom
  if (strlen($firstname) < 2) {
		array_push($error, array(
			"field" => "firstname",
			"message" => "Votre nom doit contenir au moins 2 caractères"
		));
	}

	// Contrôle du prénom
  if (strlen($lastname) < 2) {
		array_push($error, array(
			"field" => "lastname",
			"message" => "Votre prénom doit contenir au moins 2 caractères"
		));
	}

  // Contrôle de l'adresse email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($error, array(
      "field" => "email",
      "message" => "Vous devez saisir une adresse email valide."
    ));
  }

  // Contrôle du Message
  if (strlen($message) < 80) {
		array_push($error, array(
			"field" => "message",
			"message" => "Votre message doit contenir au moins 80 caractères"
		));
	}
  // Enregistrement du message dans la base de données
  if (empty($error)) {
      setMessage($firstname, $lastname, $email, $message);
}
}
 ?>

<!-- formulaire de contact-->
<div class="message_send">
         <div class="container">
           <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-6 Formulaire">
               <p>Remplissez le formulaire pour soumettre un message a notre équipe, elle vous recontactera dans les 48h(tous les champs sont obligatoires)</p>
               <div class="row">
                 <form method="POST" action="?page=2">
                   <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group ">
                       <label for="firstname">Votre Nom:</label>
                       <div class="col-sm-16">
                         <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Nom...">
                         <!--si c'est faux on affiche un message d'erreur-->
                         <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "firstname")."</span>"."</br>"; ?>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group">
                       <label for="lastname">Votre Prénom :</label>
                       <div class="col-sm-16">
                         <input type="text" id="lastname" name="lastname" class="form-control input-md" placeholder="Prénom...">
                         <!--si c'est faux on affiche un message d'erreur-->
                         <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "lastname")."</span>"."</br>"; ?>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="form-group">
                       <label for="email">Votre Email :</label>
                       <div class="col-sm-16">
                         <input type="text" id="email" name="email" class="form-control input-md" placeholder="Email...">
                         <!--si c'est faux on affiche un message d'erreur-->
                         <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "email")."</span>"."</br>"; ?>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="form-group">
                       <label for="message">Votre Message :</label>
                       <div class="col-sm-16">
                         <textarea id="message" name="message" class="form-control input-md" placeholder="Message...(min 80 caractère)"></textarea>
                         <!--si c'est faux on affiche un message d'erreur-->
                         <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "message")."</span>"."</br>"; ?>
                       </div>
                     </div>
                   </div>
                   <p>Erat autem diritatis eius hoc quoque indicium nec obscurum nec latens, quod ludicris cruentis delectabatur et in circo sex vel septem aliquotiens vetitis certaminibus pugilum vicissim se concidentium perfusorumque sanguine specie ut lucratus ingentia laetabatur.</p>
                 </br>
                 <button type="submit" class="form-control btn btn-danger center-block">Envoyer</button>
                 </form>
               </div>
               </br>
             </div>

             <!--Horaire et Adresse-->
             <div class="col-lg-6 col-md-6 col-sm-6 Formulaire-droite">
               <h4 class="h4"><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>Horaires</h4>
               <ul class="list-unstyled">
                 <li class="h5">Visite auto</li>
                 <li class="petit">Lun au Ven:11h-11h30</li>
                 <li class="h5">Sevice après-vente</li>
                 <li class="petit">Tout les jours sauf le week-end et en semaine</li>
                 <li class="h4"><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>Adresse</li>
                 <li class="petit">105 Avuenue de la république - 59110 La Madeleine</li>
                 <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2529.95380967439!2d3.073253316114719!3d50.646548979502796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c32a7328783e49%3A0x456a8a96b2b14da5!2s105+Avenue+de+la+R%C3%A9publique%2C+59110+La+Madeleine!5e0!3m2!1sfr!2sfr!4v1486024743853" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></li>
                 <li class="h4"><i class="fa fa-phone" aria-hidden="true"></i>Contact</li>
                 <li class="petit">Email: <a href="#">www.voiture-bledo.com</a></li>
                 <li class="petit">Tél: 0673514831</li>
               </ul>

             </div>
             </div>
           </div>
         </div>
       </div>

<?php include_once 'php/common/footer.php'; ?>
