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
<h3>Dostępne filmy:</h3>
   <ul>
                
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")));
        foreach ($context['_seq'] as $context["_key"] => $context["moviedisplay"]) {
            // line 17
            echo "

                <li><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"42\" width=\"42\"></a>
                        <br>Tytul:<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "title", array()), "html", null, true);
            echo " </a>
                        <br>Opis:";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "description", array()), "html", null, true);
            echo "
                        <br>Id_filmu:";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "id", array()), "html", null, true);
            echo "
                        <br>Cena:";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "price", array()), "html", null, true);
            echo "
                        
                        <br>Aktorzy:
                        ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) ? $context["actors"] : $this->getContext($context, "actors")));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 27
                echo "                        ";
                if (($this->getAttribute($context["actor"], "idfilm", array()) == $this->getAttribute($context["moviedisplay"], "id", array()))) {
                    // line 28
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "Name", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 30
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "

                        <br>Gatunek:
                        ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 35
                echo "                        ";
                if (($this->getAttribute($context["genre"], "idfilm", array()) == $this->getAttribute($context["moviedisplay"], "id", array()))) {
                    // line 36
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "genre", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 38
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "

                        ";
            // line 41
            $context["i"] = 0;
            // line 42
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 43
                echo "                            ";
                if (($this->getAttribute($context["review"], "idfilm", array()) == $this->getAttribute($context["moviedisplay"], "id", array()))) {
                    // line 44
                    echo "                                ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 45
                    echo "                            ";
                }
                // line 46
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviedisplay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            <br><br> 
                </li>       
             

<h3>Filmy wg. ilości recenzji</h3>                            
                ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["opinion"]);
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 55
            echo "            
            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"42\" width=\"42\"></a>
            
            <br><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "title", array()), "html", null, true);
            echo "</a>
            <br>Liczba recenzji:";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["opinion"], "c", array()), "html", null, true);
            echo "<br>
            
            
    
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "

                    
<br><br><h3>Filmy przyporządkowane do gatunków</h3>                            
         
                           
            ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["kind"]);
        foreach ($context['_seq'] as $context["_key"] => $context["kind"]) {
            // line 72
            echo "            
            <br>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["kind"], "genre", array()), "html", null, true);
            echo "<br>
            ";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["variety"]);
            foreach ($context['_seq'] as $context["_key"] => $context["variety"]) {
                // line 75
                echo "            ";
                if (($this->getAttribute($context["kind"], "genre", array()) == $this->getAttribute($context["variety"], "genre", array()))) {
                    // line 76
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["variety"], "id", array()))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["variety"], "image", array()), "html", null, true);
                    echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"42\" width=\"42\"></a>
            <a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["variety"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["variety"], "title", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 79
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variety'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "           
            
            
    
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "      
    
    
        
 
        
 

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
        return array (  263 => 85,  252 => 80,  246 => 79,  239 => 77,  231 => 76,  228 => 75,  224 => 74,  220 => 73,  217 => 72,  213 => 71,  205 => 65,  193 => 59,  187 => 58,  179 => 56,  176 => 55,  172 => 54,  165 => 49,  158 => 47,  152 => 46,  149 => 45,  146 => 44,  143 => 43,  138 => 42,  136 => 41,  132 => 39,  126 => 38,  120 => 36,  117 => 35,  113 => 34,  108 => 31,  102 => 30,  96 => 28,  93 => 27,  89 => 26,  83 => 23,  79 => 22,  75 => 21,  69 => 20,  62 => 19,  58 => 17,  54 => 16,  48 => 12,  45 => 11,  40 => 6,  37 => 5,  11 => 1,);
    }
}
