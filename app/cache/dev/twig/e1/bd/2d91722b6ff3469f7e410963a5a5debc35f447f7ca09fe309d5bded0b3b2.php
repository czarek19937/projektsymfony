<?php

/* FilmyBundle:Reviews:reviewsdisplay.html.twig */
class __TwigTemplate_e1bd2d91722b6ff3469f7e410963a5a5debc35f447f7ca09fe309d5bded0b3b2 extends Twig_Template
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
        echo "        <h1>ReviewDisplayView</h1>
    ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "        
      
   
   
   
       
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")), 0), "idfilm", array()), "html", null, true);
        echo "
        ";
        // line 19
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews"))), "html", null, true);
        echo "

        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["reviews"]);
        foreach ($context['_seq'] as $context["_key"] => $context["reviews"]) {
            // line 22
            echo "                 id filmu:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reviews"], "idfilm", array()), "html", null, true);
            echo "
                 ";
            // line 23
            $context["foo"] = "1";
            // line 24
            echo "        

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reviews'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews"))), "html", null, true);
        echo "


        ";
        // line 40
        echo "    
        
 
        
 

    ";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Reviews:reviewsdisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 40,  84 => 27,  76 => 24,  74 => 23,  69 => 22,  65 => 21,  60 => 19,  56 => 18,  48 => 12,  45 => 11,  40 => 6,  37 => 5,  11 => 1,);
    }
}
