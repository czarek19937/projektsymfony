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
            



                    <h1 style=\"text-align: center\"><small>Dostępne filmy:</small></h1>
       
    <div class=\"container\">           
        <div class=\"row\">
                     
            ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")));
        foreach ($context['_seq'] as $context["_key"] => $context["moviedisplay"]) {
            // line 20
            echo "      
      

            <div class=\"col-md-1\" style=\"height:200px\">

                    <br><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "image", array()), "html", null, true);
            echo ".jpg\"
                     alt=\"Filmy\" class=\"img-circle\" height=\"70\" width=\"70\">
                            ";
            // line 29
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "title", array()), "html", null, true);
            echo " </a>
                            ";
            // line 56
            echo "            </div>  
                               
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviedisplay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "         </div>
    </div>            


    <div class=\"container\">            
        <div class=\"row\">         
            <div class=\"col-md-3\" style=\"height:200px\">    
                    <h1><small>Popularne:</small></h1><br>
         
                ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["lend"]);
        foreach ($context['_seq'] as $context["_key"] => $context["lend"]) {
            // line 69
            echo "               
                        <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["lend"], 0, array()), "id", array()))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lend"], 0, array()), "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\"
                             class=\"img-circle\" height=\"70\" width=\"70\">
                                <br>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lend"], 0, array()), "title", array()), "html", null, true);
            echo "</a>
                        <br>Liczba wypożyczeń:";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["lend"], "c", array()), "html", null, true);
            echo "<br><br>
             
                
        
       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "               
            </div>


            <div class=\"col-md-3\" style=\"height:200px\"> 
                    <h1><small>Najczęściej recenzowane</small></h1><br>
                                    
                ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["opinion"]);
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 87
            echo "                  
                        <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "id", array()))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\"
                             class=\"img-circle\" height=\"70\" width=\"70\">                    
                                <br>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "title", array()), "html", null, true);
            echo "</a>
                        <br>Liczba recenzji:";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["opinion"], "c", array()), "html", null, true);
            echo "<br><br>
             
                
        
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            </div>




            <div class=\"col-md-6\" style=\"height:200px\">                
                    <h1><small>Według gatunków:</small></h1>                            
            
                     
                ";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["kind"]);
        foreach ($context['_seq'] as $context["_key"] => $context["kind"]) {
            // line 108
            echo "                
                    

                <br><p class=\"text-capitalize\"><strong>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["kind"], "genre", array()), "html", null, true);
            echo "</strong></p><br>
                ";
            // line 112
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["variety"]);
            foreach ($context['_seq'] as $context["_key"] => $context["variety"]) {
                // line 113
                echo "                ";
                if (($this->getAttribute($context["kind"], "genre", array()) == $this->getAttribute($context["variety"], "genre", array()))) {
                    // line 114
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["variety"], "id", array()))), "html", null, true);
                    echo "\">
                    <img src=\"";
                    // line 115
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["variety"], "image", array()), "html", null, true);
                    echo ".jpg\" alt=\"Filmy\"
                     class=\"img-circle\" height=\"70\" width=\"70\"></a>
                <a href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["variety"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["variety"], "title", array()), "html", null, true);
                    echo "</a>
                ";
                }
                // line 119
                echo "
                    

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variety'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "
            </div>

            ";
        // line 154
        echo "        </div>
    </div>



        

        

        
                
                
        
        
        

                
            
                
                
        
        
        




    ";
        // line 186
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
        return array (  269 => 186,  240 => 154,  235 => 124,  229 => 123,  220 => 119,  213 => 117,  207 => 115,  202 => 114,  199 => 113,  195 => 112,  191 => 111,  186 => 108,  182 => 107,  171 => 98,  159 => 92,  155 => 91,  149 => 89,  145 => 88,  142 => 87,  138 => 86,  129 => 79,  117 => 74,  113 => 73,  107 => 71,  103 => 70,  100 => 69,  96 => 68,  85 => 59,  77 => 56,  72 => 29,  66 => 26,  62 => 25,  55 => 20,  51 => 19,  39 => 9,  36 => 8,  11 => 1,);
    }
}
