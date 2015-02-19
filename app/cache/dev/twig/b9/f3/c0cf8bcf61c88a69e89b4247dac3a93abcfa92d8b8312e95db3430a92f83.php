<?php

/* FilmyBundle::bars.html.twig */
class __TwigTemplate_b9f3c0cf8bcf61c88a69e89b4247dac3a93abcfa92d8b8312e95db3430a92f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FilmyBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FilmyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"page-header\">
\t<div class=\"row\">

\t\t<div class=\"col-md-2\">
\t\t\t<h3><small>Dołącz do nas!</small></h3><br>
\t\t\t\t\t
\t\t\t\t\t<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
        echo "facebook.png\" class=\"icon facebook\"></a>
\t\t\t\t\t<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
        echo "twitter.png\" class=\"icon twitter\"></a>
\t\t\t\t\t<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
        echo "youtube.png\" class=\"icon youtube\"></a>
\t\t\t\t\t<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
        echo "linkedin.png\" class=\"icon linkedin\"></a>
\t\t\t\t\t
\t\t</div>


\t\t<div class=\"col-md-8\">
            <div class=\"jumbotron\">
                <h1 style=\"text-align: center\">Wypożyczalnia Pożycz se</h1>
            </div>
        </div>

\t\t<div class=\"col-md-2\">
";
        // line 26
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 27
            echo "
\t <div>
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><p>Zalogowano jako <a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/profile\"><strong><em>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</em></strong></p></a></li>
        <li><a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/OrdersList\">Lista zamówień</a></li>    
        <li><a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/OrdersBuy\">Lista zakupionych filmów</a></li>
        <li><a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/logout\">Wyloguj się</a></li>
      </ul>
    </div>
    
    
    
    

";
        } else {
            // line 42
            echo "
\t<div>
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><p>Niezalogowany użytkownik<br></p></li>
        <li><a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/login\">Zaloguj się</a></li>    
        <li><a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/register\">Zarejestruj się</a></li>
      </ul>
    </div>


\t
\t
\t
";
        }
        // line 56
        echo "\t\t</div>

\t\t
\t</div>
</div>


\t\t\t\t\t
";
    }

    // line 66
    public function block_menu($context, array $blocks = array())
    {
        // line 67
        echo "
";
    }

    public function getTemplateName()
    {
        return "FilmyBundle::bars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 67,  125 => 66,  113 => 56,  97 => 42,  82 => 30,  77 => 27,  75 => 26,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  40 => 5,  37 => 4,  11 => 1,);
    }
}
