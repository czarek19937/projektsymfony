<?php

/* FilmyBundle:Default:query.html.twig */
class __TwigTemplate_dc599c01d74d151f809850812df096c773de0a46f5c3dea68daa98ca858c4309 extends Twig_Template
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
        echo "        <h1>QueryView</h1>
    ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "        
      
   <ul>
        ";
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        // line 20
        echo "        
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")));
        foreach ($context['_seq'] as $context["_key"] => $context["moviedisplay"]) {
            // line 22
            echo "                <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmy/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")), "image", array()), "html", null, true);
            echo ".jpg\" alt=\"Filmy\" class=\"img-thumbnail\" height=\"42\" width=\"42\">
                        <br>Tytul:";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "title", array()), "html", null, true);
            echo " </a>
                        <br>Opis:";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "description", array()), "html", null, true);
            echo "
                        <br>Id_filmu:";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "id", array()), "html", null, true);
            echo "
                        <br>Gatunek:";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "genre", array()), "html", null, true);
            echo "
                        <br>Cena:";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "price", array()), "html", null, true);
            echo "
                        <br>Aktor:";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviedisplay"], "genre", array()), "html", null, true);
            echo "
                        ";
            // line 30
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) ? $context["actors"] : $this->getContext($context, "actors")));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 31
                echo "                        ";
                if (($this->getAttribute($context["actor"], "Id_ilm", array()) == $this->getAttribute((isset($context["moviesdisplay"]) ? $context["moviesdisplay"] : $this->getContext($context, "moviesdisplay")), "id", array()))) {
                    // line 32
                    echo "                        <br>Aktor:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "Name", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 34
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviedisplay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        
    </ul>
    
        
 
        
 

    ";
    }

    public function getTemplateName()
    {
        return "FilmyBundle:Default:query.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  114 => 35,  108 => 34,  102 => 32,  99 => 31,  94 => 30,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  64 => 22,  60 => 21,  57 => 20,  55 => 19,  53 => 18,  48 => 12,  45 => 11,  40 => 6,  37 => 5,  11 => 1,);
    }
}
