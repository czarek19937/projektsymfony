<?php

/* FilmyBundle::bars.html.twig */
class __TwigTemplate_b9f3c0cf8bcf61c88a69e89b4247dac3a93abcfa92d8b8312e95db3430a92f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FilmyBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FilmyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "<ol>
Lista dostępnych filmów:
<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("filmy_gladiator");
        echo "\">Gladiator</a><a href=\"";
        echo $this->env->getExtension('routing')->getPath("filmy_gladiator");
        echo "\"><img src=\"http://1.fwcdn.pl/po/09/36/936/7472818.3.jpg\" height=\"400\" width=\"300\" /></a>
<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("filmy_matrix");
        echo "\">Matrix               </a><a href=\"";
        echo $this->env->getExtension('routing')->getPath("filmy_matrix");
        echo "\"><img src=\"http://1.fwcdn.pl/po/06/28/628/7495038.3.jpg\" height=\"400\" width=\"300\" /></a>
<li>
</ol>
<ol>
Lista popularnych filmów(najczęściej wypożyczanych)
<li>
<li>
<li>
</ol>
<ol>
Lista najczęściej recenzowanych filmów
<li>
<li>
<li>
</ol>
";
    }

    public function getTemplateName()
    {
        return "FilmyBundle::bars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  43 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
