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
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/css/global.css"), "html", null, true);
        echo "\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>\t<!-- skrypty do rozwijanej listy w orderslist -->
</head>


<body>
\t<header>
\t\t

\t\t
\t\t";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 20
        echo "
\t</header>
\t
\t\t\t";
        // line 23
        $this->displayBlock('menu', $context, $blocks);
        // line 25
        echo "\t\t

\t
\t\t\t";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 30
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

    // line 18
    public function block_header($context, array $blocks = array())
    {
        // line 19
        echo "\t\t";
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        // line 24
        echo "\t\t\t";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
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
        return array (  100 => 29,  97 => 28,  93 => 24,  90 => 23,  86 => 19,  83 => 18,  79 => 4,  76 => 3,  66 => 30,  64 => 28,  59 => 25,  57 => 23,  52 => 20,  50 => 18,  36 => 7,  32 => 6,  29 => 5,  27 => 3,  23 => 1,);
    }
}
