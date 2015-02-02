<?php

/* FilmyBundle:Default:index.html.twig */
class __TwigTemplate_28ff92187d44b5442e9afadd0b294a30a19b44a614928ad05493304ed6f5d8e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<body>
<ol>
Lista dostępnych filmów:
<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("filmy_gladiator");
        echo "\">Gladiator</a><a href=\"";
        echo $this->env->getExtension('routing')->getPath("filmy_gladiator");
        echo "\"><img src=\"http://1.fwcdn.pl/po/09/36/936/7472818.3.jpg\" /></a>
<li>
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
<ol>
Lista gatunków z których spośród których można wybierać filmy
<li>
<li>
<li>
</ol>
</body>
<html>";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
