<?php

/* FilmyBundle::layout.html.twig */
class __TwigTemplate_ebeea93efe941081943afb925e9f0eeb18d76198f76d4a6aeafd81823a7ecaba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
\t";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/css/bootstrap.css"), "html", null, true);
        echo "\">
</head>


<body>
\t<header>
\t\t

\t\t
\t\t";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "
\t</header>
\t<div class=\"row\">
\t\t<div class=\"col-md-8\">
\t\t\t";
        // line 21
        $this->displayBlock('menu', $context, $blocks);
        // line 23
        echo "\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t\t";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "\t\t
\t</div>
\t


</body>
</html>";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        // line 16
        echo "\t\t";
    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        // line 22
        echo "\t\t\t";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "FilmyBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  93 => 27,  89 => 22,  86 => 21,  82 => 16,  79 => 15,  75 => 4,  72 => 3,  62 => 29,  60 => 27,  54 => 23,  52 => 21,  46 => 17,  44 => 15,  32 => 6,  29 => 5,  27 => 3,  23 => 1,);
    }
}
