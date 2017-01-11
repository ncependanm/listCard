<?php

/* card/new.html.twig */
class __TwigTemplate_ac81da7aad033e2762c5a69a2ee21408334a78da5767a40baf1cca4394c7b9b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "card/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2cfeb53abf50e2196d10f3fac0a819c0f99576bdf7d1e9633be3faf26c7b89d = $this->env->getExtension("native_profiler");
        $__internal_d2cfeb53abf50e2196d10f3fac0a819c0f99576bdf7d1e9633be3faf26c7b89d->enter($__internal_d2cfeb53abf50e2196d10f3fac0a819c0f99576bdf7d1e9633be3faf26c7b89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "card/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2cfeb53abf50e2196d10f3fac0a819c0f99576bdf7d1e9633be3faf26c7b89d->leave($__internal_d2cfeb53abf50e2196d10f3fac0a819c0f99576bdf7d1e9633be3faf26c7b89d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39a601a5aa04a8fa8ac6d62edafdceab7a08acf40898bc08c050de8b6d5f931f = $this->env->getExtension("native_profiler");
        $__internal_39a601a5aa04a8fa8ac6d62edafdceab7a08acf40898bc08c050de8b6d5f931f->enter($__internal_39a601a5aa04a8fa8ac6d62edafdceab7a08acf40898bc08c050de8b6d5f931f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Card creation</h1>
\t";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["errMsg"]) ? $context["errMsg"] : $this->getContext($context, "errMsg")), "html", null, true);
        echo "
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("card_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_39a601a5aa04a8fa8ac6d62edafdceab7a08acf40898bc08c050de8b6d5f931f->leave($__internal_39a601a5aa04a8fa8ac6d62edafdceab7a08acf40898bc08c050de8b6d5f931f_prof);

    }

    public function getTemplateName()
    {
        return "card/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  56 => 9,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Card creation</h1>*/
/* 	{{ errMsg }}*/
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('card_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
