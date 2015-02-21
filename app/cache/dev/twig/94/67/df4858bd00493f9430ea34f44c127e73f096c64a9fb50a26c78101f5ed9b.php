<?php

/* FilmyBundle:Default:ordersbuy.html.twig */
class __TwigTemplate_9467df4858bd00493f9430ea34f44c127e73f096c64a9fb50a26c78101f5ed9b extends Twig_Template
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container\">   
        <h1 style=\"text-align: center\">Lista zakupów</h1>
    </div>
\t";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t\t
\t
<div class=\"container\">           
    <div class=\"row\">\t\t\t
\t\t<input type=button onClick=\"alert('wyświetla się komunikat')\" value=\"Ogladaj\">    

            <div class=\"accordion\" id=\"accordion2\">
            ";
        // line 19
        $context["z"] = "Zapłacone";
        // line 20
        echo "            
\t\t\t";
        // line 21
        $context["i"] = 0;
        // line 22
        echo "    \t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["orders"]);
        foreach ($context['_seq'] as $context["_key"] => $context["orders"]) {
            if (($this->getAttribute($context["orders"], "status", array()) == (isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")))) {
                // line 23
                echo "

            <div class=\"accordion-group\">
        <div class=\"col-md-2\">\t\t
    \t\t";
                // line 27
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 28
                echo "                <div class=\"accordion-heading\">
            <a class=\"accordion-toggle\" data-toggle=\"collapse\" href=\"#collapse";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\">
    \t\t<br><button type=\"button\" class=\"btn btn-default\">Zamówienie ";
                // line 30
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</button></a>
                </div>


                    <div id=\"collapse";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" class=\"accordion-body collapse in\">
                        <div class=\"accordion-inner\">
    \t\t<br>Status zamówienia:";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "status", array()), "html", null, true);
                echo "
    \t\t<br>Forma zapłaty:";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "form", array()), "html", null, true);
                echo "
    \t\t<br>Warunki zamówienia:";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "conditions", array()), "html", null, true);
                echo "
    \t\t<br>Film wypożyczony:
    \t\t";
                // line 40
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["movies"]);
                foreach ($context['_seq'] as $context["_key"] => $context["movies"]) {
                    // line 41
                    echo "                        ";
                    if (($this->getAttribute($context["orders"], "idfilm", array()) == $this->getAttribute($context["movies"], "id", array()))) {
                        // line 42
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["movies"], "title", array()), "html", null, true);
                        echo "<br>
                            ";
                    }
                    // line 44
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movies'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "

                        </div>
                    </div>
                </div>





            </div>
        </div>                    
    \t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orders'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    




    </div>\t\t
</div>    \t\t
 
    
    

    
   
\t\t
\t\t\t

\t\t
\t\t
    
        
 
    \t
 

\t";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Default:ordersbuy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 58,  131 => 45,  125 => 44,  119 => 42,  116 => 41,  112 => 40,  107 => 38,  103 => 37,  99 => 36,  94 => 34,  87 => 30,  83 => 29,  80 => 28,  78 => 27,  72 => 23,  66 => 22,  64 => 21,  61 => 20,  59 => 19,  50 => 12,  47 => 11,  40 => 4,  37 => 3,  11 => 1,);
    }
}
