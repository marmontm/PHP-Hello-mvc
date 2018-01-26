<?php

namespace App\Controller;


class View
{
    private $htmlPart1;
    private $htmlPart2;
    private $myModel;

    public function __construct(Model $model)
    {
        $this->myModel = $model;
        $this->htmlPart1 = '<html><head><title>HelloWorld MVC Demo</title></head><body><a href="index.php?action=mouseButtonPressed">';
        $this->htmlPart2 = '</a></body></html>';
    }

    public function renderHtml() :string
    {
        // Get value from Model
        $message = $this->myModel->getMessage();

        // Render HTML
        $htmlPage = $this->htmlPart1.$message.$this->htmlPart2;
        return $htmlPage;
    }
}

?>
