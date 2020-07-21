<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Banco
 *
 * @author loyol
 */
class Banco {
    //put your code here
    
    var $pagina;
    
    function Banco() {
        $this->pagina = 'hello.php';
    }
    
    public function getPagina() {
        return $this->pagina;
    }

    function setPagina($pagina): void {
        $this->pagina = $pagina;
    }


}
