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
        echo "<h1>Filmy</h1>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<ol>
Lista gatunków z których spośród których można wybierać filmy
<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("filmy_commedy");
        echo "\">Komedia</a>
<li>
<li>
</ol>

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
        return array (  52 => 11,  48 => 9,  45 => 8,  40 => 4,  37 => 3,  11 => 1,);
    }
}
