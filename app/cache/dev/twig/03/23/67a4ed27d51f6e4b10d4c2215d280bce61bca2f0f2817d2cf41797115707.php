<?php

/* FilmyBundle:Default:moviesview.html.twig */
class __TwigTemplate_032367a4ed27d51f6e4b10d4c2215d280bce61bca2f0f2817d2cf41797115707 extends Twig_Template
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
        echo "\t\t<h1>MoviesView</h1>
\t";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t\t
\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 12
            echo "\t\t<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "title", array()), "html", null, true);
            echo "
\t\t<br>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "name", array()), "html", null, true);
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t
    
        
 
    \t
 

\t";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Default:moviesview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  60 => 13,  55 => 12,  51 => 11,  48 => 10,  45 => 9,  40 => 4,  37 => 3,  11 => 1,);
    }
}
