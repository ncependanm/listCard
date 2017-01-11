<?php

/* CardBundle:Default:index.html.twig */
class __TwigTemplate_f7f73ea7664f3a4786fcf58446c34dafb3b6285e37190c72e09f057e107e7a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2720a8c42ae140a72aba934b2858044edb4ecd1982a6f142461167dae751a6e8 = $this->env->getExtension("native_profiler");
        $__internal_2720a8c42ae140a72aba934b2858044edb4ecd1982a6f142461167dae751a6e8->enter($__internal_2720a8c42ae140a72aba934b2858044edb4ecd1982a6f142461167dae751a6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CardBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <div id=\"sidebar\">
            ";
        // line 9
        $this->displayBlock('sidebar', $context, $blocks);
        // line 15
        echo "        </div>

        <div id=\"content\">
            ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        </div>
    </body>
</html>";
        
        $__internal_2720a8c42ae140a72aba934b2858044edb4ecd1982a6f142461167dae751a6e8->leave($__internal_2720a8c42ae140a72aba934b2858044edb4ecd1982a6f142461167dae751a6e8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd6ec08861f44f03ccba53e6bce5a647961de8da849654b41ae3d44e6f62d964 = $this->env->getExtension("native_profiler");
        $__internal_bd6ec08861f44f03ccba53e6bce5a647961de8da849654b41ae3d44e6f62d964->enter($__internal_bd6ec08861f44f03ccba53e6bce5a647961de8da849654b41ae3d44e6f62d964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Test Application";
        
        $__internal_bd6ec08861f44f03ccba53e6bce5a647961de8da849654b41ae3d44e6f62d964->leave($__internal_bd6ec08861f44f03ccba53e6bce5a647961de8da849654b41ae3d44e6f62d964_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_66da70df9701199fc5809d9c00ffd55feaa40762bd6bdcd6c7dd2da62b4daf1d = $this->env->getExtension("native_profiler");
        $__internal_66da70df9701199fc5809d9c00ffd55feaa40762bd6bdcd6c7dd2da62b4daf1d->enter($__internal_66da70df9701199fc5809d9c00ffd55feaa40762bd6bdcd6c7dd2da62b4daf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/card\">Card</a></li>
                </ul>
            ";
        
        $__internal_66da70df9701199fc5809d9c00ffd55feaa40762bd6bdcd6c7dd2da62b4daf1d->leave($__internal_66da70df9701199fc5809d9c00ffd55feaa40762bd6bdcd6c7dd2da62b4daf1d_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_863fe3fd6ee991b6aeb929a7d18d24d4eca3aaef029246c315e42034eda76906 = $this->env->getExtension("native_profiler");
        $__internal_863fe3fd6ee991b6aeb929a7d18d24d4eca3aaef029246c315e42034eda76906->enter($__internal_863fe3fd6ee991b6aeb929a7d18d24d4eca3aaef029246c315e42034eda76906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_863fe3fd6ee991b6aeb929a7d18d24d4eca3aaef029246c315e42034eda76906->leave($__internal_863fe3fd6ee991b6aeb929a7d18d24d4eca3aaef029246c315e42034eda76906_prof);

    }

    public function getTemplateName()
    {
        return "CardBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  74 => 10,  68 => 9,  56 => 5,  47 => 19,  45 => 18,  40 => 15,  38 => 9,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>{% block title %}Test Application{% endblock %}</title>*/
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
/* */
/*         <div id="content">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
