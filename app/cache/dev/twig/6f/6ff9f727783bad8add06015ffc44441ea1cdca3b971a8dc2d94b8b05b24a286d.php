<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_23a4af63becf970aff5ca39ddaeda23b9afcf9e7254ebae284bd248e7b4c1794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f46fb91b13256686933f2cf44fd7cc76e6211c70ce989162f8d80dbceed0ffda = $this->env->getExtension("native_profiler");
        $__internal_f46fb91b13256686933f2cf44fd7cc76e6211c70ce989162f8d80dbceed0ffda->enter($__internal_f46fb91b13256686933f2cf44fd7cc76e6211c70ce989162f8d80dbceed0ffda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46fb91b13256686933f2cf44fd7cc76e6211c70ce989162f8d80dbceed0ffda->leave($__internal_f46fb91b13256686933f2cf44fd7cc76e6211c70ce989162f8d80dbceed0ffda_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b126a9a748e4165767af858cee4679edbc29172dd646c6b50042365e3d79f94d = $this->env->getExtension("native_profiler");
        $__internal_b126a9a748e4165767af858cee4679edbc29172dd646c6b50042365e3d79f94d->enter($__internal_b126a9a748e4165767af858cee4679edbc29172dd646c6b50042365e3d79f94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b126a9a748e4165767af858cee4679edbc29172dd646c6b50042365e3d79f94d->leave($__internal_b126a9a748e4165767af858cee4679edbc29172dd646c6b50042365e3d79f94d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cdb8f06d8272f9041dfd7736822682ac70d59f8f7749793e6dec60b67013e9c = $this->env->getExtension("native_profiler");
        $__internal_5cdb8f06d8272f9041dfd7736822682ac70d59f8f7749793e6dec60b67013e9c->enter($__internal_5cdb8f06d8272f9041dfd7736822682ac70d59f8f7749793e6dec60b67013e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5cdb8f06d8272f9041dfd7736822682ac70d59f8f7749793e6dec60b67013e9c->leave($__internal_5cdb8f06d8272f9041dfd7736822682ac70d59f8f7749793e6dec60b67013e9c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f78857c068d7ebd46da1f4096bd0dc638c1b6c3a07f133ba548f220fdf819eb = $this->env->getExtension("native_profiler");
        $__internal_7f78857c068d7ebd46da1f4096bd0dc638c1b6c3a07f133ba548f220fdf819eb->enter($__internal_7f78857c068d7ebd46da1f4096bd0dc638c1b6c3a07f133ba548f220fdf819eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7f78857c068d7ebd46da1f4096bd0dc638c1b6c3a07f133ba548f220fdf819eb->leave($__internal_7f78857c068d7ebd46da1f4096bd0dc638c1b6c3a07f133ba548f220fdf819eb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
