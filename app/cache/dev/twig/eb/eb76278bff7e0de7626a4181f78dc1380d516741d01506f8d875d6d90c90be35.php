<?php

/* card/index.html.twig */
class __TwigTemplate_3157bac349f3efb7c8eec0bb05065082858a69abae7d1093e60359909b1dacd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "card/index.html.twig", 1);
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
        $__internal_2b724e559aa9fceb790ba2deaff0ad3ecd89f8d7b66440ff9bc0386d2e51e283 = $this->env->getExtension("native_profiler");
        $__internal_2b724e559aa9fceb790ba2deaff0ad3ecd89f8d7b66440ff9bc0386d2e51e283->enter($__internal_2b724e559aa9fceb790ba2deaff0ad3ecd89f8d7b66440ff9bc0386d2e51e283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "card/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b724e559aa9fceb790ba2deaff0ad3ecd89f8d7b66440ff9bc0386d2e51e283->leave($__internal_2b724e559aa9fceb790ba2deaff0ad3ecd89f8d7b66440ff9bc0386d2e51e283_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d02f732a50dfd1b09fe30ce8278c7034e5323cf2134c383eeb4a79f54fcfa88 = $this->env->getExtension("native_profiler");
        $__internal_1d02f732a50dfd1b09fe30ce8278c7034e5323cf2134c383eeb4a79f54fcfa88->enter($__internal_1d02f732a50dfd1b09fe30ce8278c7034e5323cf2134c383eeb4a79f54fcfa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Card list</h1>

    <ul>
        <li>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("card_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
\t
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cards"]) ? $context["cards"] : $this->getContext($context, "cards")));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("card_show", array("id" => $this->getAttribute($context["card"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "nama", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "nomor", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("card_show", array("id" => $this->getAttribute($context["card"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("card_edit", array("id" => $this->getAttribute($context["card"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

";
        
        $__internal_1d02f732a50dfd1b09fe30ce8278c7034e5323cf2134c383eeb4a79f54fcfa88->leave($__internal_1d02f732a50dfd1b09fe30ce8278c7034e5323cf2134c383eeb4a79f54fcfa88_prof);

    }

    public function getTemplateName()
    {
        return "card/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 39,  93 => 33,  87 => 30,  80 => 26,  76 => 25,  70 => 24,  67 => 23,  63 => 22,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Card list</h1>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('card_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* 	*/
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nama</th>*/
/*                 <th>Nomor</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for card in cards %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('card_show', { 'id': card.id }) }}">{{ card.id }}</a></td>*/
/*                 <td>{{ card.nama }}</td>*/
/*                 <td>{{ card.nomor }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('card_show', { 'id': card.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('card_edit', { 'id': card.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
