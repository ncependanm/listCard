<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5666682031eb9c9faa441fbbb42eedb5cbf121f8794ba41eb5a06c9d1cd251ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c98e3400801ed2500fd63c76057127a6fa70c8a52d60bd098c18e8d4224dd85e = $this->env->getExtension("native_profiler");
        $__internal_c98e3400801ed2500fd63c76057127a6fa70c8a52d60bd098c18e8d4224dd85e->enter($__internal_c98e3400801ed2500fd63c76057127a6fa70c8a52d60bd098c18e8d4224dd85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c98e3400801ed2500fd63c76057127a6fa70c8a52d60bd098c18e8d4224dd85e->leave($__internal_c98e3400801ed2500fd63c76057127a6fa70c8a52d60bd098c18e8d4224dd85e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e93b6216be836048071c0e7594a7e88568c2907d6d982470f34b98f05c40130f = $this->env->getExtension("native_profiler");
        $__internal_e93b6216be836048071c0e7594a7e88568c2907d6d982470f34b98f05c40130f->enter($__internal_e93b6216be836048071c0e7594a7e88568c2907d6d982470f34b98f05c40130f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e93b6216be836048071c0e7594a7e88568c2907d6d982470f34b98f05c40130f->leave($__internal_e93b6216be836048071c0e7594a7e88568c2907d6d982470f34b98f05c40130f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f5aa61ed2bc4bad8da6974fe482213a5bf4667fab5b688e05b51aab00148ecb = $this->env->getExtension("native_profiler");
        $__internal_8f5aa61ed2bc4bad8da6974fe482213a5bf4667fab5b688e05b51aab00148ecb->enter($__internal_8f5aa61ed2bc4bad8da6974fe482213a5bf4667fab5b688e05b51aab00148ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f5aa61ed2bc4bad8da6974fe482213a5bf4667fab5b688e05b51aab00148ecb->leave($__internal_8f5aa61ed2bc4bad8da6974fe482213a5bf4667fab5b688e05b51aab00148ecb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aabb22c485c1ae26b9035244c77c79e76894e3a3aa0f514934ccbfe06192556d = $this->env->getExtension("native_profiler");
        $__internal_aabb22c485c1ae26b9035244c77c79e76894e3a3aa0f514934ccbfe06192556d->enter($__internal_aabb22c485c1ae26b9035244c77c79e76894e3a3aa0f514934ccbfe06192556d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aabb22c485c1ae26b9035244c77c79e76894e3a3aa0f514934ccbfe06192556d->leave($__internal_aabb22c485c1ae26b9035244c77c79e76894e3a3aa0f514934ccbfe06192556d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
