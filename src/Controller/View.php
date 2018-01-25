<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 25/01/2018
 * Time: 13:17
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class View
{
    // update UI
    public function updateUI()
    {
        return new Response(
            '<html><body>Hello world!</body></html>'
        );
    }
}

?>
