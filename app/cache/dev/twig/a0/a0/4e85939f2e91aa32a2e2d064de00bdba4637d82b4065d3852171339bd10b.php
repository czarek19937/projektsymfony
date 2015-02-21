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
        echo "    <div class=\"container\"> 
        <h1 style=\"text-align: center\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "title", array()), "html", null, true);
        echo "</h1>
    </div>
    ";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "        
<div class=\"container\">           
    <div class=\"row\" style=\"text-align: center\">      
   
      
        
        


                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "image", array()), "html", null, true);
        echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"50%\" width=\"50%\">
                        ";
        // line 25
        echo "                        <h4><br>Opis:<br>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "description", array()), "html", null, true);
        echo "<br>
                        <br>Id_filmu:<br>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "id", array()), "html", null, true);
        echo "<br>
                        <br>Cena:<br>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "price", array()), "html", null, true);
        echo "<br>
                        <br>Aktorzy:<br>
                        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["actors"]);
        foreach ($context['_seq'] as $context["_key"] => $context["actors"]) {
            // line 30
            echo "                            ";
            if (($this->getAttribute($context["actors"], "idfilm", array()) == $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "id", array()))) {
                // line 31
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actors"], "Name", array()), "html", null, true);
                echo "
                            ";
            }
            // line 33
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actors'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<br>
                        <br>Gatunek:
                        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 36
            echo "                        ";
            if (($this->getAttribute($context["genre"], "idfilm", array()) == $this->getAttribute((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")), "id", array()))) {
                // line 37
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "genre", array()), "html", null, true);
                echo "<br>
                            ";
            }
            // line 39
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </h4>
                            
                
                            

    

";
        // line 47
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 48
            echo "<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/Orders\"><button type=\"button\" class=\"btn btn-primary\">Wypożycz - przycisk</button></a><br>
";
        } else {
            // line 50
            echo "<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/login\"><button type=\"button\" class=\"btn btn-primary\">Zaloguj się</button></a><br>
";
        }
        // line 52
        echo "
";
        // line 53
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 54
            echo "<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/Review\"><button type=\"button\" class=\"btn btn-primary\">Dodaj recenzje - przycisk</button></a>
";
        }
        // line 56
        echo "<br><a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/\">Wróc do strony poprzedniej</a><br>        
 
        
 
</div>
    </div>

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
        return array (  152 => 56,  148 => 54,  146 => 53,  143 => 52,  139 => 50,  135 => 48,  133 => 47,  124 => 40,  118 => 39,  112 => 37,  109 => 36,  105 => 35,  96 => 33,  90 => 31,  87 => 30,  83 => 29,  78 => 27,  74 => 26,  69 => 25,  64 => 23,  53 => 14,  50 => 13,  43 => 7,  40 => 6,  37 => 5,  11 => 1,);
    }
}
