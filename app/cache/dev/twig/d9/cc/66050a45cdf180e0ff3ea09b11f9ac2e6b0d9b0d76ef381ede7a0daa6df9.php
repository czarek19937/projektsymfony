<?php

/* FilmyBundle:Types:Commedy.html.twig */
class __TwigTemplate_d9cc66050a45cdf180e0ff3ea09b11f9ac2e6b0d9b0d76ef381ede7a0daa6df9 extends Twig_Template
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
Komedie:
<li>
<li>
<li>
</ol>
</body>
<html>";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Types:Commedy.html.twig";
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
