<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Controller
{
    private $myModel;
    private $myView;

    public function __construct()
    {
        $this->myModel = new Model();
        $this->myView = new View();
    }

    public function onPageLoad()
    {
        $actionString = 'action';
        $actionNone = 'none';
        $actionOnClick = 'mouseButtonPressed';

        // Get demanded action from user
        if ( isset($_GET[$actionString]) && !empty($_GET[$actionString]) )
        {
            $getAction = $_GET[$actionString];
        }
        else
        {
            $getAction = $actionNone;
        }

        // Update value in Model with respect to the demanded action
        switch ($getAction)
        {
            case $actionOnClick:
                // set updated message in Model
                $this->myModel->setMessage('Updated Hello World!');
                break;

            default:
                // do nothing
                break;
        }

        // Get message from Model
        $message = $this->myModel->getMessage();

        // Ask View to render HTML including the message
        $html = $this->myView->renderHtml($message);

        // Return rendered HTML page
        return new Response($html);
    }
}