<?php

namespace App\Core;

class View
{
    private $rootPath;
    public function __construct(private String $view, private array $datas, private $layout)
    {
        $this->rootPath = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
    }

    public function render()
    {
        $content = $this->renderView();
        $this->datas['content'] = $content;
        $this->datas['absolut_path'] = $this->rootPath;
        if ($this->layout) {
            echo $this->renderLayout();
        }
    }
    public function renderView()
    {
        var_dump($this->rootPath . '/' . $this->layout);
        return $this->requireFile($this->rootPath . '/' . $this->view . '.view.php');
    }
    public function renderLayout()
    {
        var_dump($this->rootPath . '/' . $this->layout . '.php');
        return $this->requireFile($this->rootPath . '/' . $this->layout . '.php');
    }
    public function requireFile($pathFile)
    {
        if (file_exists($pathFile)) {
            extract($this->datas);
            ob_start();
            require $pathFile;
            return ob_get_clean();
        } else {
            die('FILE NOT FOUND');
        }
    }
}
