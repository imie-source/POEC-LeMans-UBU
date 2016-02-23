/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var potar = document.getElementById('regleTemp');
var affichage = document.getElementById('affichTemp');

function affiche() {
    var valeur = potar.value;
    affichage.innerHTML = valeur;
};