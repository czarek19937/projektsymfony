<?php

/* FilmyBundle:Default:orders.html.twig */
class __TwigTemplate_12e36d5c52dee809b085875ac8b98f0ef56112272fe532375d14ac6f85466f28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FilmyBundle::bars.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FilmyBundle::bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t\t
\t";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
\t<?php
    \$var = \$GET['movies.id'];
    echo \$movies.id
\t?>
\t";
        // line 16
        echo "\t";
        // line 17
        echo "\t";
        // line 18
        echo "
<div class=\"container\">           
    <div class=\"row\" style=\"text-align: center\">

\t\t<h2>Dodaj Zamówienie</h2>
\t\t
\t\t<form method=\"POST\">
\t\t";
        // line 26
        echo "
\t\t
\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t<button type=\"submit\">Dodaj Wpis</button>
\t\t</form>
\t\t
</div>
\t</div>    
        
 
    \t
 

\t";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Default:orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  68 => 26,  59 => 18,  57 => 17,  55 => 16,  48 => 10,  45 => 9,  40 => 4,  37 => 3,  11 => 1,);
    }
}
