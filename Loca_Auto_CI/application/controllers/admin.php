<?php
class Admin extends CI_Controller
{
public function __construct()
{
// Obligatoire
parent::__construct();
//Partie 2 : Mise en place des cinq composants 22/102
// www.openclassrooms.com
if( ! isAdmin())
exit("Vous n'avez pas le droit de voir cette page.");
}
public function activer_maintenance()
{
/* ---- */
}
public function ajouter_rang()
{
/* ---- */
}
}
public function isAdmin()