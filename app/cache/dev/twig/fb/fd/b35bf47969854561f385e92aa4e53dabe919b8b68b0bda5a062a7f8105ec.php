<?php

/* FilmyBundle:Movies:Gladiator.html.twig */
class __TwigTemplate_fbfdb35bf47969854561f385e92aa4e53dabe919b8b68b0bda5a062a7f8105ec extends Twig_Template
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
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<br>Opis:<br>Generał Maximus - prawa ręka cesarza, szczęśliwy mąż i ojciec - w jednej chwili traci wszystko. Jako niewolnik-gladiator musi walczyć na arenie o przeżycie.<br>
Okładka:<img src=\"http://1.fwcdn.pl/po/09/36/936/7472818.3.jpg\" />
<br>Lista aktorów:<br>
Russel Crowe<br>
Joaquin Phoenix<br>
Connie Nielsen<br>
Oliver Reed<br>
Cena wypożyczenia:<br>
miliard
<br>
<button type=\"button\" class=\"btn btn-success\">Wypożycz - to ma byc przycisk</button><br>
if zalogowany widze recenzje
";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Movies:Gladiator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
