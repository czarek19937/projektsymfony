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
\t\t

\t\t
    \t\t";
        // line 14
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        echo "
    \t\t";
        // line 15
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["actors"]) ? $context["actors"] : $this->getContext($context, "actors")));
        echo "
    \t\t";
        // line 16
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
        echo "
    \t\t";
        // line 17
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        echo "
 
    
    
   
\t\t
\t\t\t

\t\t
\t\t
    
        
 
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
        return array (  66 => 17,  62 => 16,  58 => 15,  54 => 14,  48 => 10,  45 => 9,  40 => 4,  37 => 3,  11 => 1,);
    }
}
