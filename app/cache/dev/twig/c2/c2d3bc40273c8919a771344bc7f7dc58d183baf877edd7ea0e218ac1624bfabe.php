<?php

/* base.html.twig */
class __TwigTemplate_c683be8291ae88d1c901ae817184deb9efa0034ae132e25ea5076a85a30630ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a32ec561a5191293ec45818b02209633c3b7b37e648656a716fb4f7153f82914 = $this->env->getExtension("native_profiler");
        $__internal_a32ec561a5191293ec45818b02209633c3b7b37e648656a716fb4f7153f82914->enter($__internal_a32ec561a5191293ec45818b02209633c3b7b37e648656a716fb4f7153f82914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"sidebar\">
            ";
        // line 12
        $this->displayBlock('sidebar', $context, $blocks);
        // line 18
        echo "        </div>
        <div id=\"content\">
            ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        </div>
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>";
        
        $__internal_a32ec561a5191293ec45818b02209633c3b7b37e648656a716fb4f7153f82914->leave($__internal_a32ec561a5191293ec45818b02209633c3b7b37e648656a716fb4f7153f82914_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9745502cd4f6c4700182bb747db688dd07e1dc04204527dec48063930dca322 = $this->env->getExtension("native_profiler");
        $__internal_b9745502cd4f6c4700182bb747db688dd07e1dc04204527dec48063930dca322->enter($__internal_b9745502cd4f6c4700182bb747db688dd07e1dc04204527dec48063930dca322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b9745502cd4f6c4700182bb747db688dd07e1dc04204527dec48063930dca322->leave($__internal_b9745502cd4f6c4700182bb747db688dd07e1dc04204527dec48063930dca322_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ba02766edd89a3a4b876270015858b2c9eba76606c3b2207a1d53b006c4cab1 = $this->env->getExtension("native_profiler");
        $__internal_4ba02766edd89a3a4b876270015858b2c9eba76606c3b2207a1d53b006c4cab1->enter($__internal_4ba02766edd89a3a4b876270015858b2c9eba76606c3b2207a1d53b006c4cab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t";
        
        $__internal_4ba02766edd89a3a4b876270015858b2c9eba76606c3b2207a1d53b006c4cab1->leave($__internal_4ba02766edd89a3a4b876270015858b2c9eba76606c3b2207a1d53b006c4cab1_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b3d9ce93d9880ddeb5a51e35b172e5779f0fe7ad21deb1286e2cda9202530e2d = $this->env->getExtension("native_profiler");
        $__internal_b3d9ce93d9880ddeb5a51e35b172e5779f0fe7ad21deb1286e2cda9202530e2d->enter($__internal_b3d9ce93d9880ddeb5a51e35b172e5779f0fe7ad21deb1286e2cda9202530e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 13
        echo "                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/card\">Card</a></li>
                </ul>
            ";
        
        $__internal_b3d9ce93d9880ddeb5a51e35b172e5779f0fe7ad21deb1286e2cda9202530e2d->leave($__internal_b3d9ce93d9880ddeb5a51e35b172e5779f0fe7ad21deb1286e2cda9202530e2d_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d593d0a748452de3c67401d052cb4c6fc79baf7585316aefa6645db9e0568ef = $this->env->getExtension("native_profiler");
        $__internal_5d593d0a748452de3c67401d052cb4c6fc79baf7585316aefa6645db9e0568ef->enter($__internal_5d593d0a748452de3c67401d052cb4c6fc79baf7585316aefa6645db9e0568ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d593d0a748452de3c67401d052cb4c6fc79baf7585316aefa6645db9e0568ef->leave($__internal_5d593d0a748452de3c67401d052cb4c6fc79baf7585316aefa6645db9e0568ef_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e378e7479c030cdd0dc1d70dd674159bf52bd6784648eb5de452da979b33352b = $this->env->getExtension("native_profiler");
        $__internal_e378e7479c030cdd0dc1d70dd674159bf52bd6784648eb5de452da979b33352b->enter($__internal_e378e7479c030cdd0dc1d70dd674159bf52bd6784648eb5de452da979b33352b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e378e7479c030cdd0dc1d70dd674159bf52bd6784648eb5de452da979b33352b->leave($__internal_e378e7479c030cdd0dc1d70dd674159bf52bd6784648eb5de452da979b33352b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 22,  110 => 20,  99 => 13,  93 => 12,  86 => 7,  80 => 6,  68 => 5,  60 => 23,  58 => 22,  55 => 21,  53 => 20,  49 => 18,  47 => 12,  39 => 8,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* 		{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div id="sidebar">*/
/*             {% block sidebar %}*/
/*                 <ul>*/
/*                     <li><a href="/">Home</a></li>*/
/*                     <li><a href="/card">Card</a></li>*/
/*                 </ul>*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div id="content">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
