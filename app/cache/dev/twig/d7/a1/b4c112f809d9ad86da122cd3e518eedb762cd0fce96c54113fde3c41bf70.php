<?php

/* default/confirmorder.html.twig */
class __TwigTemplate_d7a1b4c112f809d9ad86da122cd3e518eedb762cd0fce96c54113fde3c41bf70 extends Twig_Template
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
        echo "\t\t<h1>Confirm Order</h1>
\t";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t\t

\t\t<br>Status zamówienia:";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")), "status", array()), "html", null, true);
        echo "
\t\t<br>Termin złożenia zamówienia:
\t\t<br>Forma płatności";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")), "form", array()), "html", null, true);
        echo "
\t\t<br>Warunki odbioru:";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")), "conditions", array()), "html", null, true);
        echo "
\t\t<br>Zamówienie na Film(idfilmu):";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")), "idFilm", array()), "html", null, true);
        echo "
\t\t
    
        
 
    \t
 

\t";
    }

    public function getTemplateName()
    {
        return "default/confirmorder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  61 => 15,  57 => 14,  52 => 12,  48 => 10,  45 => 9,  40 => 4,  37 => 3,  11 => 1,);
    }
}
