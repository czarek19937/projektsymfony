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
        echo "\t\t<h1>orderssList</h1>
\t";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t\t
\t\t
\t\t\t
\t\t



\t\t\t";
        // line 17
        $context["i"] = 0;
        // line 18
        echo "    \t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["orders"]);
        foreach ($context['_seq'] as $context["_key"] => $context["orders"]) {
            // line 19
            echo "    \t\t
    \t\t";
            // line 20
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 21
            echo "    \t\t<br>Zamówienie ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "
    \t\t<br>Status zamówienia:";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "status", array()), "html", null, true);
            echo "
    \t\t<br>Forma zapłaty:";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "form", array()), "html", null, true);
            echo "
    \t\t<br>Warunki zamówienia:";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "conditions", array()), "html", null, true);
            echo "
    \t\t<br>Film wypożyczony:
    \t\t";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["movies"]);
            foreach ($context['_seq'] as $context["_key"] => $context["movies"]) {
                // line 27
                echo "                        ";
                if (($this->getAttribute($context["orders"], "idfilm", array()) == $this->getAttribute($context["movies"], "id", array()))) {
                    // line 28
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["movies"], "title", array()), "html", null, true);
                    echo "<br>
                            ";
                }
                // line 30
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movies'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orders'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    \t\t
    \t\t
 
    
    
   
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
        return array (  112 => 32,  106 => 31,  100 => 30,  94 => 28,  91 => 27,  87 => 26,  82 => 24,  78 => 23,  74 => 22,  69 => 21,  67 => 20,  64 => 19,  59 => 18,  57 => 17,  48 => 10,  45 => 9,  40 => 4,  37 => 3,  11 => 1,);
    }
}
