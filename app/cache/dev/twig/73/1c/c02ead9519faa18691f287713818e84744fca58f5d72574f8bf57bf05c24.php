<?php

/* FilmyBundle:Default:orderslist.html.twig */
class __TwigTemplate_731cc02ead9519faa18691f287713818e84744fca58f5d72574f8bf57bf05c24 extends Twig_Template
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
        echo "\t<div class=\"container\">\t
        <h1 style=\"text-align: center\">Lista zamówień</h1>
    </div>
\t";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t\t
\t\t
\t\t\t
\t\t
<div class=\"container\">           
    <div class=\"row\">
            
            <div class=\"accordion\" id=\"accordion2\">
            \t\t\t";
        // line 20
        $context["i"] = 0;
        // line 21
        echo "                \t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["orders"]);
        foreach ($context['_seq'] as $context["_key"] => $context["orders"]) {
            // line 22
            echo "    \t<div class=\"col-md-2\">\t

                \t\t";
            // line 24
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 25
            echo "                <div class=\"accordion-group\">\t\t
                    <br>
                    <div class=\"accordion-heading\">
                    <a class=\"accordion-toggle\" data-toggle=\"collapse\" href=\"#collapse";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                    <button type=\"button\" class=\"btn btn-default\">Zamówienie ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</button>
                    </a>
                    <br>
                    </div>
                    

                        <div id=\"collapse";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" class=\"accordion-body collapse in\">
                            <div class=\"accordion-inner\">
                \t\t<br>Status zamówienia:<br>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "status", array()), "html", null, true);
            echo "
                \t\t<br>Forma zapłaty:<br>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "form", array()), "html", null, true);
            echo "
                \t\t<br>Warunki zamówienia:<br>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "conditions", array()), "html", null, true);
            echo "
                \t\t<br>Film wypożyczony:<br>
                \t\t";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["movies"]);
            foreach ($context['_seq'] as $context["_key"] => $context["movies"]) {
                // line 42
                echo "                                    ";
                if (($this->getAttribute($context["orders"], "idfilm", array()) == $this->getAttribute($context["movies"], "id", array()))) {
                    // line 43
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["movies"], "title", array()), "html", null, true);
                    echo "<br>
                                        ";
                }
                // line 45
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movies'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
                            </div>
                        </div>
                </div>
        </div>    
                \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orders'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    \t\t</div>
    \t\t
    </div>
</div>
    
   
\t\t
\t\t\t

\t\t
\t\t
    
        
 
    \t
 

\t";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Default:orderslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 52,  128 => 46,  122 => 45,  116 => 43,  113 => 42,  109 => 41,  104 => 39,  100 => 38,  96 => 37,  91 => 35,  82 => 29,  78 => 28,  73 => 25,  71 => 24,  67 => 22,  62 => 21,  60 => 20,  50 => 12,  47 => 11,  40 => 4,  37 => 3,  11 => 1,);
    }
}
