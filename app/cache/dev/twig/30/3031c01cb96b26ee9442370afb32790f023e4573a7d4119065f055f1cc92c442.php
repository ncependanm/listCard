<?php

/* card/edit.html.twig */
class __TwigTemplate_a9c86cc1a03f8d5af629ee049341fe46793fa7ef2637791cbffd3a19d7894df2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "card/edit.html.twig", 1);
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
        $__internal_42f8423e441ccf9b013b8c2e5a1af4af7ed247a3c957f919e0d9b3408de3028e = $this->env->getExtension("native_profiler");
        $__internal_42f8423e441ccf9b013b8c2e5a1af4af7ed247a3c957f919e0d9b3408de3028e->enter($__internal_42f8423e441ccf9b013b8c2e5a1af4af7ed247a3c957f919e0d9b3408de3028e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "card/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f8423e441ccf9b013b8c2e5a1af4af7ed247a3c957f919e0d9b3408de3028e->leave($__internal_42f8423e441ccf9b013b8c2e5a1af4af7ed247a3c957f919e0d9b3408de3028e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bbd37d5ced1d7d97fd90d9f7a04abae667754504fef4a740d2245cca9347fc5 = $this->env->getExtension("native_profiler");
        $__internal_0bbd37d5ced1d7d97fd90d9f7a04abae667754504fef4a740d2245cca9347fc5->enter($__internal_0bbd37d5ced1d7d97fd90d9f7a04abae667754504fef4a740d2245cca9347fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Card edit</h1>
\t";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["errMsg"]) ? $context["errMsg"] : $this->getContext($context, "errMsg")), "html", null, true);
        echo "
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("card_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0bbd37d5ced1d7d97fd90d9f7a04abae667754504fef4a740d2245cca9347fc5->leave($__internal_0bbd37d5ced1d7d97fd90d9f7a04abae667754504fef4a740d2245cca9347fc5_prof);

    }

    public function getTemplateName()
    {
        return "card/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  69 => 16,  63 => 13,  56 => 9,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Card edit</h1>*/
/* 	{{ errMsg }}*/
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('card_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
