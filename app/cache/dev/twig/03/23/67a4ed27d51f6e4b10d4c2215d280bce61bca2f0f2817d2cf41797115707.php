<?php

/* FilmyBundle:Default:moviesview.html.twig */
class __TwigTemplate_032367a4ed27d51f6e4b10d4c2215d280bce61bca2f0f2817d2cf41797115707 extends Twig_Template
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
        echo "        <h1>MoviesView</h1>
    ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "        
       <ul>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["moviesview"]);
        foreach ($context['_seq'] as $context["_key"] => $context["moviesview"]) {
            // line 15
            echo "                <li> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviesview"], "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Pan Tadeusz\" class=\"img-thumbnail\"><br>Tytuł:";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["moviesview"], "title", array())), "html", null, true);
            echo "  <br>Opis:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviesview"], "description", array()), "html", null, true);
            echo " <br>Gatunek:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviesview"], "genre", array()), "html", null, true);
            echo " <br>Cena:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviesview"], "price", array()), "html", null, true);
            echo " </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviesview'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>
        
    
        
 
        
 

    ";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Default:moviesview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  56 => 15,  52 => 14,  48 => 12,  45 => 11,  40 => 6,  37 => 5,  11 => 1,);
    }
}
