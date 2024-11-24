<?php

namespace App\Core;

class View
{
    private $rootPath;
    private $basePartials = ['head', 'footer'];

    public function __construct(private String $view, private array $datas, private $layout)
    {
        $this->rootPath = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
    }

    public function render()
    {
        $content = $this->renderView();
        $this->datas['content'] = $content;
        $this->datas['absolut_path'] = $this->rootPath;
        $this->datas['partials'] = $this->renderPartials();

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

    public function renderPartials()
    {
        // Ici on itère sur le tableau basePartials qui est définis en haut avec les partials nécéssaire tel que footer et head ['head', 'footer']
        return array_map(function ($partial) { // array_map itère sur le tableau et et récupère les différent du tableau qui est contenu dans la variable $partial
            // $partial pourrait donc contenir à chaque éléments un élément du tableau par exemple au premier tour du tableau
            // il vaudra 'head' et ensuite 'footer'
            return $this->requireFile($this->rootPath . '/partials/' . $partial . '.php'); // il remplacera ensuite les différente valeur du tableau $this->basePartials
            // Pour dire à la fonction array_map de remplacer les élément par le contenu des partials il faut obligatoirement spécifié le return
        }, $this->basePartials);
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
