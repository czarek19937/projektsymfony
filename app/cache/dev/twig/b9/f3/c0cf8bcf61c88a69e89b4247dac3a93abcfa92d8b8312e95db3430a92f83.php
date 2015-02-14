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
        echo "
";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 7
            echo "    <p>Zalogowano jako ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
    <a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/OrdersList\">Lista zamówień</a>
    <br><a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/OrdersBuy\">Lista zakupionych filmów</a>
    <br><a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/logout\">Wyloguj się</a>

";
        } else {
            // line 13
            echo "\t<p>Niezalogowany użytkownik<br></p>
\t<a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/login\">Zaloguj się</a>
\t<br><a href=\"http://v-ie.uek.krakow.pl/~s173152/app_dev.php/register\">Zarejestruj się</a>
";
        }
        // line 17
        echo "

";
    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        // line 22
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
        return array (  70 => 22,  67 => 21,  61 => 17,  55 => 13,  45 => 7,  43 => 6,  40 => 5,  37 => 4,  11 => 1,);
    }
}
