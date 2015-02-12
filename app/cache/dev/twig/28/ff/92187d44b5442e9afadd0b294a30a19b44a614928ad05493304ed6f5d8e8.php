<?php

/* FilmyBundle:Default:index.html.twig */
class __TwigTemplate_28ff92187d44b5442e9afadd0b294a30a19b44a614928ad05493304ed6f5d8e8 extends Twig_Template
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

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
<h3>Dostępne filmy:</h3>
   <ul>
                
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")));
        foreach ($context['_seq'] as $context["_key"] => $context["moviedisplay"]) {
            // line 14
            echo "

                <li><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"42\" width=\"42\"></a>
                        <br>Tytul:<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "title", array()), "html", null, true);
            echo " </a>
                        <br>Opis:";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "description", array()), "html", null, true);
            echo "
                        <br>Id_filmu:";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "id", array()), "html", null, true);
            echo "
                        <br>Cena:";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "price", array()), "html", null, true);
            echo "
                        
                        <br>Aktorzy:
                        ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) ? $context["actors"] : $this->getContext($context, "actors")));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 24
                echo "                        ";
                if (($this->getAttribute($context["actor"], "idfilm", array()) == $this->getAttribute($context["moviedisplay"], "id", array()))) {
                    // line 25
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "Name", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 27
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "

                        <br>Gatunek:
                        ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 32
                echo "                        ";
                if (($this->getAttribute($context["genre"], "idfilm", array()) == $this->getAttribute($context["moviedisplay"], "id", array()))) {
                    // line 33
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "genre", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 35
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "

                        ";
            // line 38
            $context["i"] = 0;
            // line 39
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 40
                echo "                            ";
                if (($this->getAttribute($context["review"], "idfilm", array()) == $this->getAttribute($context["moviedisplay"], "id", array()))) {
                    // line 41
                    echo "                                ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 42
                    echo "                            ";
                }
                // line 43
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviedisplay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            <br><br> 
                </li>       
 <h3>Popularne fIlmy:</h3>               

<h3>Filmy wg. ilości recenzji</h3>                            
                ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["opinion"]);
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 52
            echo "            
            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"42\" width=\"42\"></a>
            
            <br><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "title", array()), "html", null, true);
            echo "</a>
            <br>Liczba recenzji:";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["opinion"], "c", array()), "html", null, true);
            echo "<br>
            
            
    
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "

                    
<br><br><h3>Filmy przyporządkowane do gatunków</h3>                            
         
                           
            ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["kind"]);
        foreach ($context['_seq'] as $context["_key"] => $context["kind"]) {
            // line 69
            echo "            
            <br>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["kind"], "genre", array()), "html", null, true);
            echo "<br>
            ";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["variety"]);
            foreach ($context['_seq'] as $context["_key"] => $context["variety"]) {
                // line 72
                echo "            ";
                if (($this->getAttribute($context["kind"], "genre", array()) == $this->getAttribute($context["variety"], "genre", array()))) {
                    // line 73
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["variety"], "id", array()))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["variety"], "image", array()), "html", null, true);
                    echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"42\" width=\"42\"></a>
            <a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["variety"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["variety"], "title", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 76
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variety'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "           
            
            
    
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "      

";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 82,  243 => 77,  237 => 76,  230 => 74,  222 => 73,  219 => 72,  215 => 71,  211 => 70,  208 => 69,  204 => 68,  196 => 62,  184 => 56,  178 => 55,  170 => 53,  167 => 52,  163 => 51,  156 => 46,  149 => 44,  143 => 43,  140 => 42,  137 => 41,  134 => 40,  129 => 39,  127 => 38,  123 => 36,  117 => 35,  111 => 33,  108 => 32,  104 => 31,  99 => 28,  93 => 27,  87 => 25,  84 => 24,  80 => 23,  74 => 20,  70 => 19,  66 => 18,  60 => 17,  53 => 16,  49 => 14,  45 => 13,  39 => 9,  36 => 8,  11 => 1,);
    }
}
