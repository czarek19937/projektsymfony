<?php

/* FilmyBundle:Default:query.html.twig */
class __TwigTemplate_dc599c01d74d151f809850812df096c773de0a46f5c3dea68daa98ca858c4309 extends Twig_Template
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
        echo "        <h1>QueryView</h1>
    ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "        
      
   <ul>
        ";
        // line 18
        echo "        ";
        // line 19
        echo "        
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["moviesdisplay"]);
        foreach ($context['_seq'] as $context["_key"] => $context["moviesdisplay"]) {
            // line 21
            echo "                <li><a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/Movies/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviesdisplay"], "image", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviesdisplay"], "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"42\" width=\"42\"></a>
                        <br>Tytul:<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/Movies/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviesdisplay"], "image", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviesdisplay"], "title", array()), "html", null, true);
            echo " </a>
                        <br>Opis:";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviesdisplay"], "description", array()), "html", null, true);
            echo "
                        <br>Id_filmu:";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviesdisplay"], "id", array()), "html", null, true);
            echo "
                        <br>Gatunek:";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviesdisplay"], "genre", array()), "html", null, true);
            echo "
                        <br>Cena:";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviesdisplay"], "price", array()), "html", null, true);
            echo "
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviesdisplay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        
    </ul>
    
        
 
        
 

    ";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Default:query.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  70 => 22,  62 => 21,  58 => 20,  55 => 19,  53 => 18,  48 => 12,  45 => 11,  40 => 6,  37 => 5,  11 => 1,);
    }
}
