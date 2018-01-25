<?php

namespace App\Controller;


class View
{
    private $htmlPart1;
    private $htmlPart2;

    public function __construct()
    {
        $this->htmlPart1 = '<html><body><a href="index.php?action=mouseButtonPressed">';
        $this->htmlPart2 = '</a></body></html>';
    }

    public function renderHtml($userMessage) :string
    {
        $htmlPage = $this->htmlPart1.$userMessage.$this->htmlPart2;
        return $htmlPage;
    }
}

?>
