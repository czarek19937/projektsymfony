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
        echo "        ";
        // line 20
        echo "        
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")));
        foreach ($context['_seq'] as $context["_key"] => $context["moviedisplay"]) {
            // line 22
            echo "

                <li><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"42\" width=\"42\"></a>
                        <br>Tytul:<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "title", array()), "html", null, true);
            echo " </a>
                        <br>Opis:";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "description", array()), "html", null, true);
            echo "
                        <br>Id_filmu:";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "id", array()), "html", null, true);
            echo "
                        <br>Gatunek:";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "genre", array()), "html", null, true);
            echo "
                        <br>Cena:";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "price", array()), "html", null, true);
            echo "
                        <br>Aktorzy:
                        ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) ? $context["actors"] : $this->getContext($context, "actors")));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 32
                echo "                        ";
                if (($this->getAttribute($context["actor"], "idfilm", array()) == $this->getAttribute($context["moviedisplay"], "id", array()))) {
                    // line 33
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "Name", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 35
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                            ";
            $context["i"] = 0;
            // line 37
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 38
                echo "                                ";
                if (($this->getAttribute($context["review"], "idfilm", array()) == $this->getAttribute($context["moviedisplay"], "id", array()))) {
                    // line 39
                    echo "                                ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 40
                    echo "                            ";
                }
                // line 41
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                            ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviedisplay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo " 
                </li>       
             

                            



                           <br><br> Recenzje:
                           
                                ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")));
        foreach ($context['_seq'] as $context["_key"] => $context["moviedisplay"]) {
            // line 54
            echo "

                <li><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"42\" width=\"42\"></a>
                        <br>Tytul:<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "title", array()), "html", null, true);
            echo " </a>
                        
                            ";
            // line 59
            $context["i"] = 0;
            // line 60
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 61
                echo "                                ";
                if (($this->getAttribute($context["review"], "idfilm", array()) == $this->getAttribute($context["moviedisplay"], "id", array()))) {
                    // line 62
                    echo "                                ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 63
                    echo "                            ";
                }
                // line 64
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                            Liczba recenzji:";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " 
                       


                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviedisplay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                            
        <br><br> Gatunki:
                           
                                ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")));
        foreach ($context['_seq'] as $context["_key"] => $context["moviedisplay"]) {
            // line 74
            echo "

                            ";
            // line 76
            if ((($this->getAttribute($context["moviedisplay"], "genre", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["moviedisplay"], "genre", array()))) : (""))) {
                // line 77
                echo "                        <br>Gatunek:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "genre", array()), "html", null, true);
                echo "
                            ";
            } else {
                // line 79
                echo "
                            ";
            }
            // line 81
            echo "                        
                                                    
                       


                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviedisplay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
        return array (  253 => 87,  242 => 81,  238 => 79,  232 => 77,  230 => 76,  226 => 74,  222 => 73,  217 => 70,  205 => 65,  199 => 64,  196 => 63,  193 => 62,  190 => 61,  185 => 60,  183 => 59,  176 => 57,  169 => 56,  165 => 54,  161 => 53,  149 => 43,  140 => 42,  134 => 41,  131 => 40,  128 => 39,  125 => 38,  120 => 37,  117 => 36,  111 => 35,  105 => 33,  102 => 32,  98 => 31,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  75 => 25,  68 => 24,  64 => 22,  60 => 21,  57 => 20,  55 => 19,  53 => 18,  48 => 12,  45 => 11,  40 => 6,  37 => 5,  11 => 1,);
    }
}
