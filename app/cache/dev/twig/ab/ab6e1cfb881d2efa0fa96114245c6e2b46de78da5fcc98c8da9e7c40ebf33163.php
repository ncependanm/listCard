<?php

/* card/show.html.twig */
class __TwigTemplate_87b151d5119231ab3641d2b8874a9fb55e09d6d773a3f0073aebaf39dec3811a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "card/show.html.twig", 1);
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
        $__internal_b10959efa8da79610b8f5723471d812436e97e400fe4abe65d997ee546922f4c = $this->env->getExtension("native_profiler");
        $__internal_b10959efa8da79610b8f5723471d812436e97e400fe4abe65d997ee546922f4c->enter($__internal_b10959efa8da79610b8f5723471d812436e97e400fe4abe65d997ee546922f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "card/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b10959efa8da79610b8f5723471d812436e97e400fe4abe65d997ee546922f4c->leave($__internal_b10959efa8da79610b8f5723471d812436e97e400fe4abe65d997ee546922f4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8fdc0daeb5cbf1b1b140d672169bf56a062eccb5b783de3ace25fe061c2a629 = $this->env->getExtension("native_profiler");
        $__internal_e8fdc0daeb5cbf1b1b140d672169bf56a062eccb5b783de3ace25fe061c2a629->enter($__internal_e8fdc0daeb5cbf1b1b140d672169bf56a062eccb5b783de3ace25fe061c2a629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Card</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "nama", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomor</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "nomor", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("card_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("card_edit", array("id" => $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e8fdc0daeb5cbf1b1b140d672169bf56a062eccb5b783de3ace25fe061c2a629->leave($__internal_e8fdc0daeb5cbf1b1b140d672169bf56a062eccb5b783de3ace25fe061c2a629_prof);

    }

    public function getTemplateName()
    {
        return "card/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Card</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ card.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nama</th>*/
/*                 <td>{{ card.nama }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomor</th>*/
/*                 <td>{{ card.nomor }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('card_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('card_edit', { 'id': card.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
