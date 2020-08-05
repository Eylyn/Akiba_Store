<?php
$this->title = 'Inscription';
$this->style = 'public/css/base'; ?>

<section class="enTete">
    <div class="container">
        <h1>Inscription</h1>
    </div>
</section>

<section id="content" class="container-fluid">

    <form action="index.php?route=register" method="post">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
        <label for="first-name">Prénom</label>
        <input type="text" name="first-name" id="first-name">
        <label for="pseudo">Votre pseudo</label><br>
        <input type="text" name="pseudo" id="pseudo"><br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
        <label for="password"> Votre Mot de passe (8 caractères, 1 majuscule, 1 minuscule, 1 chiffre et 1 symbole)</label><br>
        <input type="password" id="password" name="password"><br>
        <?= isset($errors['password']) ? $errors['password']:''; ?>
        <label for="email">Votre Email</label><br>
        <input type="email" id="email" name="email"><br>
        <?= isset($errors['email']) ? $errors['email']:''; ?>
        <label for="address1">Adresse 1</label>
        <input type="text" name="address1" id="address1">
        <label for="address2">Adresse 2</label>
        <input type="text" name="address2" id="address2">
        <label for="postcode">Code Postal</label>
        <input type="number" name="postcode" id="postcode">
        <label for="city">Ville</label>
        <input type="text" name="city" id="city">
        <label for="phone">Téléphone</label>
        <input type="tel" name="phone" id="phone">
        <label for="picture">Photo de profil</label>
        <input type="file" name="picture" id="picture">
        <input type="submit" value="S'inscrire" id="submit" name="submit">
    </form>
</section>