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
        echo "\t\t<h1>ordersbuy</h1>
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


            ";
        // line 16
        $context["z"] = "Zapłacone";
        // line 17
        echo "            ";
        echo twig_escape_filter($this->env, (isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")), "html", null, true);
        echo "
\t\t\t";
        // line 18
        $context["i"] = 0;
        // line 19
        echo "    \t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["orders"]);
        foreach ($context['_seq'] as $context["_key"] => $context["orders"]) {
            if (($this->getAttribute($context["orders"], "status", array()) == (isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")))) {
                // line 20
                echo "    \t\t
    \t\t";
                // line 21
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 22
                echo "    \t\t<br>Zamówienie ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "
    \t\t<br>Status zamówienia:";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "status", array()), "html", null, true);
                echo "
    \t\t<br>Forma zapłaty:";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "form", array()), "html", null, true);
                echo "
    \t\t<br>Warunki zamówienia:";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "conditions", array()), "html", null, true);
                echo "
    \t\t<br>Film wypożyczony:
    \t\t";
                // line 27
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["movies"]);
                foreach ($context['_seq'] as $context["_key"] => $context["movies"]) {
                    // line 28
                    echo "                        ";
                    if (($this->getAttribute($context["orders"], "idfilm", array()) == $this->getAttribute($context["movies"], "id", array()))) {
                        // line 29
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["movies"], "title", array()), "html", null, true);
                        echo "<br>
                            ";
                    }
                    // line 31
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movies'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "    \t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orders'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    \t\t
    \t\t
 
    
    <input type=button onClick=\"alert('wyświetla się komunikat')\" value=\"Ogladaj\">

    
   
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
        return array (  120 => 33,  113 => 32,  107 => 31,  101 => 29,  98 => 28,  94 => 27,  89 => 25,  85 => 24,  81 => 23,  76 => 22,  74 => 21,  71 => 20,  65 => 19,  63 => 18,  58 => 17,  56 => 16,  48 => 10,  45 => 9,  40 => 4,  37 => 3,  11 => 1,);
    }
}
