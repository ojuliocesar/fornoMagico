<?php

namespace Src\Core;

class Controller {

    public function loadView($viewName, $viewData = []) {

        extract($viewData);
        
        include_once("../App/views/{$viewName}.php");

    }

    // Criado para renderizar um template, e também passando o nome da view e suas variáveis a ser
    // carregada antes ou após o template.
    public function loadTemplate($viewName, $viewData = []) {

        extract($viewData);

        include_once("../App/views/partials/{$viewName}.php");

    }

    // Usada no template para renderizar a view, pegando as váriaveis definidas na função acima
    public function loadViewInTemplate($viewName, $viewRequire, $viewData= []) {
        
        extract($viewData);

        include_once("../App/views/partials/{$viewName}.php");

    }

}