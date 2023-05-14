<?php

class View
{
    public function render($viewPath, $layout = NULL) {
        if ($layout === NULL)
        {
            // If no layout is specified, render the view file directly.
            $this->view = $viewPath;
            require('views/Layout.php');
        }
        elseif ($layout === FALSE) {
            // If the layout is set to FALSE, render the view file without a layout.
            require('views/' . $viewPath . '.php');
        }
        else {
            // If a layout is specified, render the view file with the layout.
            $this->view = $viewPath;
            require('views/$Layout.php');
        }
    }
}