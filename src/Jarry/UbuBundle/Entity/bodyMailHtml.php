<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Jarry\UbuBundle\Entity;

/**
 * Description of bodyMailHtml
 *
 * @author david-paul
 */
class bodyMailHtml {
    private $purp100 = '#7B81AE';
    private $purp900 = '#080D39';
    private $dpur100 = '#8B77AC';
    private $dpur900 = '#180539';
    private $indi100 = '#6C8FA0';
    private $indi900 = '#032435';
    
    public function bodyHtml($titre, $contenu) {
        $body = '<html>';
        $body .= '<body style="background-color:'.$this->purp900.'; font-familly: arial;">';
        
        $body .= '<div style="background-color:'.$this->indi900.'; color:'.$this->indi100.'; margin: auto; width: 800px; padding: 10px; text-align: center; ">';
        $body .= '<h1>UBU Website</h1>';
        $body .= '</div>';
        
        $body .= '<div style="background-color:'.$this->purp100.'; color:'.$this->purp900.'; margin: auto; width: 800px; padding: 10px; font-familly: arial;">';
        $body .= '<h2 style="text-align: center;">'.$titre.'</h2>';
        $body .= '<p style="text-align: justify;">';
        $body .= 'Bonjour,<br/><br/>';
        $body .= $contenu;
        $body .= '</p>';
        $body .= '<p style="text-align: justify;">';
        
        $body .= 'UBU Services vous remercie';
        $body .= '</p>';
        
        $body .= '</div>';
       
        $body .= '</body>';
        $body .= '</html>';
        
        return $body;
    }
}
