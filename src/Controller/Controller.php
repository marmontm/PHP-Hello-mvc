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
        $action1 = 'mouseButtonPressed';

        // Get demanded action
        if ( isset($_GET[$actionString]) && !empty($_GET[$actionString]) )
        {
            $getAction = $_GET[$actionString];
        }
        else
        {
            $getAction = $actionNone;
        }

        // Ask Model for string value (like message displayed)
        switch ($getAction)
        {
            case $action1:
                $message = $this->myModel->getOnClickMessage();
                break;

            default:
                $message = $this->myModel->getDefaultMessage();
                break;
        }

        // Ask View to render HTML including the message
        $html = $this->myView->renderHtml($message);

        // Return rendered HTML page
        return new Response($html);
    }
}