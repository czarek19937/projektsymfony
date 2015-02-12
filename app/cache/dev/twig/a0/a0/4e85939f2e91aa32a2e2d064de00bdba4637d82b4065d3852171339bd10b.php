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
                        <br>Cena:";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "price", array()), "html", null, true);
        echo "
                        <br>Aktorzy:
                        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["actors"]);
        foreach ($context['_seq'] as $context["_key"] => $context["actors"]) {
            // line 28
            echo "                            ";
            if (($this->getAttribute($context["actors"], "idfilm", array()) == $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "id", array()))) {
                // line 29
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actors"], "Name", array()), "html", null, true);
                echo "
                            ";
            }
            // line 31
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actors'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        <br>Gatunek:
                        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 34
            echo "                        ";
            if (($this->getAttribute($context["genre"], "idfilm", array()) == $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "id", array()))) {
                // line 35
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "genre", array()), "html", null, true);
                echo "
                            ";
            }
            // line 37
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        
                            
                </li>
                            

    </ul>
<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/\">Wróc do strony poprzedniej</a><br>
";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 46
            echo "<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/\"><button type=\"button\" class=\"btn btn-primary\">
";
        } else {
            // line 48
            echo "<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/login\"><button type=\"button\" class=\"btn btn-primary\">
";
        }
        // line 50
        echo "Wypożycz - przycisk</button></a><br>
";
        // line 51
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 52
            echo "<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/Review\"><button type=\"button\" class=\"btn btn-primary\">Dodaj recenzje - przycisk</button></a>
";
        }
        // line 54
        echo "        
 
        
 

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
        return array (  152 => 54,  148 => 52,  146 => 51,  143 => 50,  139 => 48,  135 => 46,  133 => 45,  124 => 38,  118 => 37,  112 => 35,  109 => 34,  105 => 33,  102 => 32,  96 => 31,  90 => 29,  87 => 28,  83 => 27,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  61 => 21,  51 => 13,  48 => 12,  40 => 6,  37 => 5,  11 => 1,);
    }
}
