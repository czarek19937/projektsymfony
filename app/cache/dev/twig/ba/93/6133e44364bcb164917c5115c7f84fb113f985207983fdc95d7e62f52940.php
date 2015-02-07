<?php

/* FilmyBundle:Movies:ojciecchrzestny.html.twig */
class __TwigTemplate_ba936133e44364bcb164917c5115c7f84fb113f985207983fdc95d7e62f52940 extends Twig_Template
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

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "        <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")), 0), "title", array()), "html", null, true);
        echo "</h1>
    ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "        
      
   <ul>        
                <li><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")), 0), "image", array()), "html", null, true);
        echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"42\" width=\"42\">
                        <br>Tytul:";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")), 0), "title", array()), "html", null, true);
        echo "
                        <br>Opis:";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")), 0), "description", array()), "html", null, true);
        echo "
                        <br>Id_filmu:";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")), 0), "id", array()), "html", null, true);
        echo "
                        <br>Gatunek:";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")), 0), "genre", array()), "html", null, true);
        echo "
                        <br>Cena:";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")), 0), "price", array()), "html", null, true);
        echo "
                </li>
        
        
    </ul>
    
        
 
        
 

    ";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Movies:ojciecchrzestny.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  55 => 15,  50 => 12,  47 => 11,  40 => 6,  37 => 5,  11 => 1,);
    }
}
