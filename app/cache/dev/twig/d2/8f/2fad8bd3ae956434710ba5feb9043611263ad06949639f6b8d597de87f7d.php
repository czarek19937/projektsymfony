<?php

/* FilmyBundle:Default:helloworld.html.twig */
class __TwigTemplate_d28f2fad8bd3ae956434710ba5feb9043611263ad06949639f6b8d597de87f7d extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Default:helloworld.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
