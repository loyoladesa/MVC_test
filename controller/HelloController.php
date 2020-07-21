<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HelloController
 *
 * @author loyol
 */

require_once ROOT_PATH . "/controller/model/Banco.php";


class HelloController {
    //put your code here
    
    var $model;
    var $view;
    
    
    function HelloController() {
        $this->model = new Banco();
        $this->view = $this->model->getPagina();
    }
    
    function getModel() {
        return $this->model;
    }

    public function getView() {
        $v = ROOT_PATH . "/controller/view/".$this->view;
        return $v;
    }

    function setModel($model): void {
        $this->model = $model;
    }

    function setView($view): void {
        $this->view = $view;
    }


    
    
    
}
