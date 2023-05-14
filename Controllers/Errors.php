<?php

class Errors extends Config
{
    public function Error401()
    {
        // This method is called when 401 Unauthorized error occured.
        $this->view->render('Error/401');
    }
    public function Error403()
    {
        // This method is called when 403 Forbidden error occured.
        $this->view->render('Error/403');
    }
    public function Error404()
    {
        // This method is called when 404 Not Found error occured.
        $this->view->render('Error/404');
    }
}