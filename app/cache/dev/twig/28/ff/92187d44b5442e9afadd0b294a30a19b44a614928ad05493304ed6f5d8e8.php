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
        // line 11
        echo "        



                <h1 style=\"text-align: center\"><small>Dostępne filmy:</small></h1>
   
<div class=\"container\">           
    
                 
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")));
        foreach ($context['_seq'] as $context["_key"] => $context["moviedisplay"]) {
            // line 21
            echo "  
  

        <div class=\"col-md-1 col-md-offset-0\" style=\"height:200px\">

                <br><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "image", array()), "html", null, true);
            echo ".jpg\"
                 alt=\"Filmy\" class=\"img-circle\" height=\"70\" width=\"70\">
                        ";
            // line 30
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "title", array()), "html", null, true);
            echo " </a>
                        ";
            // line 57
            echo "        </div>  

                        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviedisplay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                
         
             
        <div class=\"col-md-3\" style=\"height:200px\">    
                <h1><small>Popularne:</small></h1><br>
     
            ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["lend"]);
        foreach ($context['_seq'] as $context["_key"] => $context["lend"]) {
            // line 68
            echo "           
                    <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["lend"], 0, array()), "id", array()))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lend"], 0, array()), "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\"
                         class=\"img-circle\" height=\"70\" width=\"70\">
                            <br>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lend"], 0, array()), "title", array()), "html", null, true);
            echo "</a>
                    <br>Liczba wypożyczeń:";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["lend"], "c", array()), "html", null, true);
            echo "<br><br>
         
            
    
   
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "               
        </div>


        <div class=\"col-md-3\" style=\"height:200px\"> 
                <h1><small>Najczęściej recenzowane</small></h1><br>
                                
            ";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["opinion"]);
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 86
            echo "              
                    <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "id", array()))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\"
                         class=\"img-circle\" height=\"70\" width=\"70\">                    
                            <br>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "title", array()), "html", null, true);
            echo "</a>
                    <br>Liczba recenzji:";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["opinion"], "c", array()), "html", null, true);
            echo "<br><br>
         
            
    
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        </div>




        <div class=\"col-md-6\" style=\"height:200px\">                
                <h1><small>Według gatunków:</small></h1>                            
        
                 
            ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["kind"]);
        foreach ($context['_seq'] as $context["_key"] => $context["kind"]) {
            // line 107
            echo "            
                

            <br><p class=\"text-capitalize\"><strong>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["kind"], "genre", array()), "html", null, true);
            echo "</strong></p><br>
            ";
            // line 111
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["variety"]);
            foreach ($context['_seq'] as $context["_key"] => $context["variety"]) {
                // line 112
                echo "            ";
                if (($this->getAttribute($context["kind"], "genre", array()) == $this->getAttribute($context["variety"], "genre", array()))) {
                    // line 113
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["variety"], "id", array()))), "html", null, true);
                    echo "\">
                <img src=\"";
                    // line 114
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["variety"], "image", array()), "html", null, true);
                    echo ".jpg\" alt=\"Filmy\"
                 class=\"img-circle\" height=\"70\" width=\"70\"></a>
            <a href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["variety"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["variety"], "title", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 118
                echo "
                

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variety'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "


           
            
            
    
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "
    <br><br>
    <div class=\"col-md-6\" style=\"height:200px\">                
                                        
        
                 
            ";
        // line 137
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["kind"]);
        foreach ($context['_seq'] as $context["_key"] => $context["kind"]) {
            // line 138
            echo "            
                

            <br><p class=\"text-capitalize\"><strong>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["kind"], "genre", array()), "html", null, true);
            echo "</strong></p><br>
            <table>
            ";
            // line 143
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["variety"]) ? $context["variety"] : $this->getContext($context, "variety")), 3));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 144
                echo "                 <tr>
                ";
                // line 145
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 146
                    echo "                    ";
                    if (($this->getAttribute($context["kind"], "genre", array()) == $this->getAttribute($context["column"], "genre", array()))) {
                        // line 147
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true);
                        echo "
                    ";
                    }
                    // line 149
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "                </tr>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "            </table>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "        

           
            
            
    
    
    

            
        
            
            
    
    
    




";
        // line 180
        echo "




</div>


</div>


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
        return array (  325 => 180,  303 => 155,  296 => 153,  288 => 150,  282 => 149,  276 => 147,  273 => 146,  269 => 145,  266 => 144,  262 => 143,  257 => 141,  252 => 138,  248 => 137,  240 => 131,  226 => 122,  217 => 118,  210 => 116,  204 => 114,  199 => 113,  196 => 112,  192 => 111,  188 => 110,  183 => 107,  179 => 106,  168 => 97,  156 => 91,  152 => 90,  146 => 88,  142 => 87,  139 => 86,  135 => 85,  126 => 78,  114 => 73,  110 => 72,  104 => 70,  100 => 69,  97 => 68,  93 => 67,  85 => 61,  76 => 57,  71 => 30,  65 => 27,  61 => 26,  54 => 21,  50 => 20,  39 => 11,  36 => 8,  11 => 1,);
    }
}
