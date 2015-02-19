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
            <div class=\"row\">
                 
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
                 alt=\"Filmy\" class=\"img-circle\" height=\"70\" width=\"70\"></a>
                        ";
            // line 29
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "title", array()), "html", null, true);
            echo " </a>
                        ";
            // line 57
            echo "</div>  

                        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviedisplay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "  </div>            
   </div>         
             
    <div class=\"col-md-3\" style=\"height:200px\">    
 <h1><small>Popularne:</small></h1>
     
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
                         class=\"img-circle\" height=\"70\" width=\"70\"></a>
                    
                    <br><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["lend"], 0, array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lend"], 0, array()), "title", array()), "html", null, true);
            echo "</a>
                    <br>Liczba wypożyczeń:";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["lend"], "c", array()), "html", null, true);
            echo "<br>
         
            
    
   
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "               
    </div>
    <div class=\"col-md-3\" style=\"height:200px\"> 
<h1><small>Najczęściej recenzowane</small></h1>
                                
            ";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["opinion"]);
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 85
            echo "              
                    <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "id", array()))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\"
                         class=\"img-circle\" height=\"70\" width=\"70\"></a>
                    
                    <br><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "title", array()), "html", null, true);
            echo "</a>
                    <br>Liczba recenzji:";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["opinion"], "c", array()), "html", null, true);
            echo "<br>
         
            
    
            
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
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["kind"]);
        foreach ($context['_seq'] as $context["_key"] => $context["kind"]) {
            // line 103
            echo "            
            <br><p class=\"text-capitalize\"><strong>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["kind"], "genre", array()), "html", null, true);
            echo "</strong></p><br>
            ";
            // line 105
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["variety"]);
            foreach ($context['_seq'] as $context["_key"] => $context["variety"]) {
                // line 106
                echo "            ";
                if (($this->getAttribute($context["kind"], "genre", array()) == $this->getAttribute($context["variety"], "genre", array()))) {
                    // line 107
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["variety"], "id", array()))), "html", null, true);
                    echo "\">
                <img src=\"";
                    // line 108
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["variety"], "image", array()), "html", null, true);
                    echo ".jpg\" alt=\"Filmy\"
                 class=\"img-circle\" height=\"70\" width=\"70\"></a>
            <a href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["variety"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["variety"], "title", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 112
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variety'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "           
            
            
    
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "</div>
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
        return array (  236 => 119,  225 => 113,  219 => 112,  212 => 110,  206 => 108,  201 => 107,  198 => 106,  194 => 105,  190 => 104,  187 => 103,  183 => 102,  176 => 97,  164 => 91,  158 => 90,  151 => 87,  147 => 86,  144 => 85,  140 => 84,  133 => 79,  121 => 74,  115 => 73,  108 => 70,  104 => 69,  101 => 68,  97 => 67,  89 => 61,  80 => 57,  76 => 30,  71 => 29,  65 => 27,  61 => 26,  54 => 21,  50 => 20,  39 => 11,  36 => 8,  11 => 1,);
    }
}
