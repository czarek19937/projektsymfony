<?php

/* FilmyBundle:Movies:movie.html.twig */
class __TwigTemplate_a0a04e85939f2e91aa32a2e2d064de00bdba4637d82b4065d3852171339bd10b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "title", array()), "html", null, true);
        echo "</h1>

    ";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "        
      
   <ul>
      
        
        


                <li><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "image", array()), "html", null, true);
        echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"42\" width=\"42\">
                        <br>Tytul:";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "title", array()), "html", null, true);
        echo " </a>
                        <br>Opis:";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "description", array()), "html", null, true);
        echo "
                        <br>Id_filmu:";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "id", array()), "html", null, true);
        echo "
                        <br>Gatunek:";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "genre", array()), "html", null, true);
        echo "
                        <br>Cena:";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "price", array()), "html", null, true);
        echo "
                        <br>Aktorzy:
                        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["actors"]);
        foreach ($context['_seq'] as $context["_key"] => $context["actors"]) {
            // line 29
            echo "                        ";
            if (($this->getAttribute($context["actors"], "idfilm", array()) == $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "id", array()))) {
                // line 30
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actors"], "Name", array()), "html", null, true);
                echo "
                            ";
            }
            // line 32
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actors'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        
                            
                </li>
                            
        
    </ul>
    
        
 
        
 

    ";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Movies:movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 33,  100 => 32,  94 => 30,  91 => 29,  87 => 28,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  61 => 21,  51 => 13,  48 => 12,  40 => 6,  37 => 5,  11 => 1,);
    }
}
