<?php

/* FilmyBundle:Default:actorsview.html.twig */
class __TwigTemplate_2aeb398387e33717987bbca9adced2a64635e7374c273718091bf2d179ce48f0 extends Twig_Template
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

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "        <h1>ActorsView</h1>
    ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "        
       <ul>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["actorsview"]);
        foreach ($context['_seq'] as $context["_key"] => $context["actorsview"]) {
            // line 15
            echo "                <li> Id:";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["actorsview"], "id", array())), "html", null, true);
            echo "  <br>Imie i nazwisko:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actorsview"], "name", array()), "html", null, true);
            echo " <br>Id_filmu:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actorsview"], "idfilm", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actorsview'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>
        
    
        
 
        
 

    ";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Default:actorsview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  56 => 15,  52 => 14,  48 => 12,  45 => 11,  40 => 6,  37 => 5,  11 => 1,);
    }
}
