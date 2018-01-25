<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class View
{
    public function onLoadPage()
    {
        if (!empty($_GET['action']))
        {
            $action = $_GET['action'];

            if ($action == 'mouseButtonPressed')
            {
                $html = $this->updateUI('Updated Hello World!');
            }
            else
            {
                $html = $this->updateUI('Hello World!');
            }
        }
        else
        {
            $html = $this->updateUI('Hello World!');
        }

        return new Response($html);
    }

    public function updateUI($message)
    {
        $page =
            '<html>
                <body>
                    <a href="index.php?action=mouseButtonPressed">'
                     .$message.
                    '</a>
                </body>
            </html>';

        return $page;
    }
}

?>
