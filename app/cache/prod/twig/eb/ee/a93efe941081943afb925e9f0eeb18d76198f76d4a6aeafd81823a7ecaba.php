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
\t
\t\t\t";
        // line 20
        $this->displayBlock('menu', $context, $blocks);
        // line 22
        echo "\t\t

\t
\t\t\t";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "\t\t
\t
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

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        // line 21
        echo "\t\t\t";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
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
        return array (  94 => 26,  91 => 25,  87 => 21,  84 => 20,  80 => 16,  77 => 15,  73 => 4,  70 => 3,  60 => 27,  58 => 25,  53 => 22,  51 => 20,  46 => 17,  44 => 15,  32 => 6,  29 => 5,  27 => 3,  23 => 1,);
    }
}
