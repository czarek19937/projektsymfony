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
        echo "<div style=\"height:100%; width:100%; padding:9px; 
background-image:url('";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/incepcja.jpg"), "html", null, true);
        echo "')\">
<h3 style=\"text-align: center\">Dostępne filmy:</h3>
   
<div class=\"container\">           
<div class=\"row\">
                 
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["moviedisplay"]) {
            // line 17
            echo "  
  

<div class=\"col-md-1 col-md-offset-0\" style=\"height:200px\">

                <br><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "image", array()), "html", null, true);
            echo ".jpg\"
                 alt=\"Filmy\" class=\"img-circle\" height=\"70\" width=\"70\"></a>
                        ";
            // line 25
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["moviedisplay"], "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "title", array()), "html", null, true);
            echo " </a>
                        ";
            // line 53
            echo "</div>  

                        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviedisplay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "  </div>            
   </div>         
             
    <div class=\"col-md-4\" style=\"height:200px\">    
 <h3>Popularne fIlmy wg. ilości wypożyczeń:</h3>
     
            ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["lend"]);
        foreach ($context['_seq'] as $context["_key"] => $context["lend"]) {
            // line 64
            echo "           
                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["lend"], 0, array()), "id", array()))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lend"], 0, array()), "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\"
                         class=\"img-circle\" height=\"70\" width=\"70\"></a>
                    
                    <br><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["lend"], 0, array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lend"], 0, array()), "title", array()), "html", null, true);
            echo "</a>
                    <br>Liczba wypożyczeń:";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["lend"], "c", array()), "html", null, true);
            echo "<br>
         
            
    
   
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "               
    </div>
    <div class=\"col-md-4\" style=\"height:200px\"> 
<h3>Filmy wg. ilości recenzji</h3>
                                
            ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["opinion"]);
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 81
            echo "              
                    <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "id", array()))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\"
                         class=\"img-circle\" height=\"70\" width=\"70\"></a>
                    
                    <br><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["opinion"], 0, array()), "title", array()), "html", null, true);
            echo "</a>
                    <br>Liczba recenzji:";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["opinion"], "c", array()), "html", null, true);
            echo "<br>
         
            
    
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </div>
 <div class=\"col-md-4\" style=\"height:200px\">                
<h3>Filmy przyporządkowane do gatunków</h3>                            
        
                 
            ";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["kind"]);
        foreach ($context['_seq'] as $context["_key"] => $context["kind"]) {
            // line 99
            echo "            
            <br>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["kind"], "genre", array()), "html", null, true);
            echo "<br>
            ";
            // line 101
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["variety"]);
            foreach ($context['_seq'] as $context["_key"] => $context["variety"]) {
                // line 102
                echo "            ";
                if (($this->getAttribute($context["kind"], "genre", array()) == $this->getAttribute($context["variety"], "genre", array()))) {
                    // line 103
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["variety"], "id", array()))), "html", null, true);
                    echo "\">
                <img src=\"";
                    // line 104
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["variety"], "image", array()), "html", null, true);
                    echo ".jpg\" alt=\"Filmy\"
                 class=\"img-circle\" height=\"70\" width=\"70\"></a>
            <a href=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmy_moviesdisplay", array("id" => $this->getAttribute($context["variety"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["variety"], "title", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 108
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variety'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "           
            
            
    
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
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
        return array (  237 => 115,  226 => 109,  220 => 108,  213 => 106,  207 => 104,  202 => 103,  199 => 102,  195 => 101,  191 => 100,  188 => 99,  184 => 98,  177 => 93,  165 => 87,  159 => 86,  152 => 83,  148 => 82,  145 => 81,  141 => 80,  134 => 75,  122 => 70,  116 => 69,  109 => 66,  105 => 65,  102 => 64,  98 => 63,  90 => 57,  81 => 53,  77 => 26,  72 => 25,  66 => 23,  62 => 22,  55 => 17,  51 => 16,  42 => 10,  39 => 9,  36 => 8,  11 => 1,);
    }
}
