<?php
namespace App\RenderViews;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

trait Render{

    private $loader;
    protected $twig;

    public function __construct()
    {
        $this->loader= new FilesystemLoader(__DIR__.'/../../views');
        $this->twig = new Environment($this->loader);
    }


}

