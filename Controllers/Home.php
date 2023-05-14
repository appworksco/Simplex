<?php

class Home extends Config
{
    public function index()
    {
        // Render the index view.
        $this->view->render('index');
    }
}