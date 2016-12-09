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
        $__internal_6220bf8bab6b0f1f42b11ac2d50f85e83726b2163b5b4355c1ae5ceff738f5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6220bf8bab6b0f1f42b11ac2d50f85e83726b2163b5b4355c1ae5ceff738f5fe->enter($__internal_6220bf8bab6b0f1f42b11ac2d50f85e83726b2163b5b4355c1ae5ceff738f5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PlateForme/agenda/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6220bf8bab6b0f1f42b11ac2d50f85e83726b2163b5b4355c1ae5ceff738f5fe->leave($__internal_6220bf8bab6b0f1f42b11ac2d50f85e83726b2163b5b4355c1ae5ceff738f5fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b725f703a609891735c58e563c366982ca2b31c18e78b72f124ea38f2b7f703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b725f703a609891735c58e563c366982ca2b31c18e78b72f124ea38f2b7f703->enter($__internal_5b725f703a609891735c58e563c366982ca2b31c18e78b72f124ea38f2b7f703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "

";
        // line 8
        echo "    ";
        // line 9
        echo "
    <h1>Agenda edit</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12 m6 l6\"></div>
            <p class=\"\">Titre de l'évènement</p>
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "titre", array()), 'widget');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "titre", array()), 'errors');
        echo "
        </div>
        <div class=\"col s12 m6 l6\">
            <p class=\"\">Lieu</p>
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lieu", array()), 'widget');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lieu", array()), 'errors');
        echo "
        </div>

        <div class=\"row\">
            <p class=\"\">Description de l'évènement</p>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "texte", array()), 'widget');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "texte", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s12 m6 l6\">
                <p class=\"\">Date de début d'évènement</p>
                <div class=\"input-group\">
                    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "start", array()), 'widget');
        echo "
                    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "start", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col s12 m6 l6\">
                <p class=\"\">Date de fin d'évènement</p>
                <div class=\"input-group\">
                    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "end", array()), 'widget');
        echo "
                    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "end", array()), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s12 m6 l6\">
                <p class=\"\">Couleur</p>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
                    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "couleur", array()), 'widget', array("attr" => array("placeholder" => "Cliquez")));
        echo "
                    ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "couleur", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"col s12 m6 l6\">
                <div class=\"checkbox\">
                    <label>
                        ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "slider", array()), 'widget');
        echo " Afficher dans le slider \"Home page\"
                    </label>
                    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "slider", array()), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"center\">
            <input class=\"btn btn-default edit_admin\"  type=\"submit\" value=\"modifier\" />
            ";
        // line 73
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input class=\"btn btn-default edit_admin\" type=\"submit\" value=\"Delete\">
            ";
        // line 75
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
            <a class=\"btn btn-default edit_admin\"  href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agenda_index");
        echo "\">Retour au calendrier</a>
        </div>
    </div>

    ";
        // line 80
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    ";
        // line 83
        echo "        ";
        // line 84
        echo "        ";
        // line 85
        echo "    ";
        // line 86
        echo "
    <ul>
        <li>
            ";
        // line 89
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 91
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>

";
        // line 97
        echo "
";
        
        $__internal_5b725f703a609891735c58e563c366982ca2b31c18e78b72f124ea38f2b7f703->leave($__internal_5b725f703a609891735c58e563c366982ca2b31c18e78b72f124ea38f2b7f703_prof);

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
        return array (  202 => 97,  195 => 91,  190 => 89,  185 => 86,  183 => 85,  181 => 84,  179 => 83,  174 => 80,  167 => 76,  163 => 75,  158 => 73,  148 => 66,  143 => 64,  133 => 57,  129 => 56,  116 => 46,  112 => 45,  103 => 39,  99 => 38,  88 => 30,  84 => 29,  74 => 22,  70 => 21,  63 => 17,  59 => 16,  50 => 9,  48 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

    {{ form_start(edit_form) }}

{#<div id=\"modalEdit\" class=\"modal bottom-sheet\">#}
    {#<div class=\"modal-content\">#}

    <h1>Agenda edit</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12 m6 l6\"></div>
            <p class=\"\">Titre de l'évènement</p>
            {{ form_widget(edit_form.titre) }}
            {{ form_errors(edit_form.titre) }}
        </div>
        <div class=\"col s12 m6 l6\">
            <p class=\"\">Lieu</p>
            {{ form_widget(edit_form.lieu) }}
            {{ form_errors(edit_form.lieu) }}
        </div>

        <div class=\"row\">
            <p class=\"\">Description de l'évènement</p>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
                {{ form_widget(edit_form.texte) }}
                {{ form_errors(edit_form.texte) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s12 m6 l6\">
                <p class=\"\">Date de début d'évènement</p>
                <div class=\"input-group\">
                    {{ form_widget(edit_form.start) }}
                    {{ form_errors(edit_form.start) }}
                </div>
            </div>
            <div class=\"col s12 m6 l6\">
                <p class=\"\">Date de fin d'évènement</p>
                <div class=\"input-group\">
                    {{ form_widget(edit_form.end) }}
                    {{ form_errors(edit_form.end) }}
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s12 m6 l6\">
                <p class=\"\">Couleur</p>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
                    {{ form_widget(edit_form.couleur , {'attr': {'placeholder': 'Cliquez'}}) }}
                    {{ form_errors(edit_form.couleur) }}
                </div>
            </div>

            <div class=\"col s12 m6 l6\">
                <div class=\"checkbox\">
                    <label>
                        {{ form_widget(edit_form.slider) }} Afficher dans le slider \"Home page\"
                    </label>
                    {{ form_errors(edit_form.slider) }}
                </div>
            </div>
        </div>

        <div class=\"center\">
            <input class=\"btn btn-default edit_admin\"  type=\"submit\" value=\"modifier\" />
            {{ form_start(delete_form) }}
            <input class=\"btn btn-default edit_admin\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
            <a class=\"btn btn-default edit_admin\"  href=\"{{ path('agenda_index') }}\">Retour au calendrier</a>
        </div>
    </div>

    {{ form_end(edit_form) }}

    {#{{ form_start(edit_form) }}#}
        {#{{ form_widget(edit_form) }}#}
        {#<input type=\"submit\" value=\"Edit\" />#}
    {#{{ form_end(edit_form) }}#}

    <ul>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>

{#  </div>
</div>#}

{% endblock %}
", "@PlateForme/agenda/edit.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/PlateFormeBundle/Resources/views/agenda/edit.html.twig");
    }
}
