<?php

/* Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
 L’e-commerce vende prodotti per gli animali.
 I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
 L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
 Il pagamento avviene con la carta di credito, che non deve essere scaduta.
 BONUS:
 Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
*/

require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/UserVerified.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/CreditCard.php';


//genero il profilo di due persone, uno registrato e uno non
$FirstUser = new user('Paolo', 'Bianchi');
$SecondUser = new UserVerified('Mario', 'Rossi', 'MarioRossi01', 'MyPass');

//genero tre prodotti

$Cuccia = new prodotti('kennels', '50', date('m'));
$RoyalCanin = new prodotti('PetFood', '20', date('m'));
$Pallina = new prodotti('Plays', '7', date('m'));

//genero la carta con relativa data di scadenza
$CreditCard1 = new CreditCard(23, 05, 2024);

//stampo a video gli elementi
var_dump($FirstUser);
var_dump($SecondUser);

var_dump($Cuccia);
var_dump($RoyalCanin);

var_dump($CreditCard);





?>