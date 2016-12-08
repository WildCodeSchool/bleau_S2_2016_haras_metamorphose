<?php

/* @PlateForme/agenda/show.html.twig */
class __TwigTemplate_bd049431ac41e2218fece8086e45868109e6d1f9d9d5e9a5e9316cc7a601d4d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@PlateForme/agenda/show.html.twig", 1);
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
        $__internal_497e5217ec6a53bf7d7f06ba4d3a800197a1ecd68b56357114403b992e1284d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497e5217ec6a53bf7d7f06ba4d3a800197a1ecd68b56357114403b992e1284d5->enter($__internal_497e5217ec6a53bf7d7f06ba4d3a800197a1ecd68b56357114403b992e1284d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PlateForme/agenda/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_497e5217ec6a53bf7d7f06ba4d3a800197a1ecd68b56357114403b992e1284d5->leave($__internal_497e5217ec6a53bf7d7f06ba4d3a800197a1ecd68b56357114403b992e1284d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11211a0132f3c9a7e7a9774daec80384b1f82c445cf7014175a06fc475e3f223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11211a0132f3c9a7e7a9774daec80384b1f82c445cf7014175a06fc475e3f223->enter($__internal_11211a0132f3c9a7e7a9774daec80384b1f82c445cf7014175a06fc475e3f223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Agenda</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agenda"] ?? $this->getContext($context, "agenda")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Start</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["agenda"] ?? $this->getContext($context, "agenda")), "start", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["agenda"] ?? $this->getContext($context, "agenda")), "start", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>End</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["agenda"] ?? $this->getContext($context, "agenda")), "end", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["agenda"] ?? $this->getContext($context, "agenda")), "end", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agenda"] ?? $this->getContext($context, "agenda")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Texte</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agenda"] ?? $this->getContext($context, "agenda")), "texte", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agenda"] ?? $this->getContext($context, "agenda")), "lieu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Couleur</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agenda"] ?? $this->getContext($context, "agenda")), "couleur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Slider</th>
                <td>";
        // line 38
        if ($this->getAttribute(($context["agenda"] ?? $this->getContext($context, "agenda")), "slider", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agenda_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agenda_edit", array("id" => $this->getAttribute(($context["agenda"] ?? $this->getContext($context, "agenda")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_11211a0132f3c9a7e7a9774daec80384b1f82c445cf7014175a06fc475e3f223->leave($__internal_11211a0132f3c9a7e7a9774daec80384b1f82c445cf7014175a06fc475e3f223_prof);

    }

    public function getTemplateName()
    {
        return "@PlateForme/agenda/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 53,  127 => 51,  121 => 48,  115 => 45,  101 => 38,  94 => 34,  87 => 30,  80 => 26,  73 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Agenda</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ agenda.id }}</td>
            </tr>
            <tr>
                <th>Start</th>
                <td>{% if agenda.start %}{{ agenda.start|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>End</th>
                <td>{% if agenda.end %}{{ agenda.end|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ agenda.titre }}</td>
            </tr>
            <tr>
                <th>Texte</th>
                <td>{{ agenda.texte }}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ agenda.lieu }}</td>
            </tr>
            <tr>
                <th>Couleur</th>
                <td>{{ agenda.couleur }}</td>
            </tr>
            <tr>
                <th>Slider</th>
                <td>{% if agenda.slider %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('agenda_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('agenda_edit', { 'id': agenda.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@PlateForme/agenda/show.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/PlateFormeBundle/Resources/views/agenda/show.html.twig");
    }
}
