<?php

/* @PlateForme/agenda/edit.html.twig */
class __TwigTemplate_6d325469830ce03093e8ade9294182be12e35e224d3c1bd9b1783cdc69a9bb95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@PlateForme/agenda/edit.html.twig", 1);
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
        $__internal_31b69e362246b1ccdb5ff2a4d94abc33e2a2585ac74bf2924b439595652a9935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b69e362246b1ccdb5ff2a4d94abc33e2a2585ac74bf2924b439595652a9935->enter($__internal_31b69e362246b1ccdb5ff2a4d94abc33e2a2585ac74bf2924b439595652a9935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PlateForme/agenda/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31b69e362246b1ccdb5ff2a4d94abc33e2a2585ac74bf2924b439595652a9935->leave($__internal_31b69e362246b1ccdb5ff2a4d94abc33e2a2585ac74bf2924b439595652a9935_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1edfd9841a2d532c001fc31c00a7b0a92861cdb2217291e24236011c85f79392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edfd9841a2d532c001fc31c00a7b0a92861cdb2217291e24236011c85f79392->enter($__internal_1edfd9841a2d532c001fc31c00a7b0a92861cdb2217291e24236011c85f79392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div id=\"modalEdit\" class=\"modal bottom-sheet\">
    <div class=\"modal-content\">

    <h1>Agenda edit</h1>

    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agenda_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>

        <div class=\"modal-footer\">
            <a href=\"#!\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">Agree</a>
        </div>
    </div>
</div>

";
        
        $__internal_1edfd9841a2d532c001fc31c00a7b0a92861cdb2217291e24236011c85f79392->leave($__internal_1edfd9841a2d532c001fc31c00a7b0a92861cdb2217291e24236011c85f79392_prof);

    }

    public function getTemplateName()
    {
        return "@PlateForme/agenda/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  70 => 20,  64 => 17,  57 => 13,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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

<div id=\"modalEdit\" class=\"modal bottom-sheet\">
    <div class=\"modal-content\">

    <h1>Agenda edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('agenda_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>

        <div class=\"modal-footer\">
            <a href=\"#!\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">Agree</a>
        </div>
    </div>
</div>

{% endblock %}
", "@PlateForme/agenda/edit.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/PlateFormeBundle/Resources/views/agenda/edit.html.twig");
    }
}
