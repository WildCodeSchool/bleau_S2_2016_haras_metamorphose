<?php

/* @PlateForme/agenda/new.html.twig */
class __TwigTemplate_f572201060a09a2720776c7e6d088d5f04bc1255f581ee651e7df82d14987e4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@PlateForme/agenda/new.html.twig", 1);
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
        $__internal_b42bd2ac95399551341b8ffc4256ac78a46e451a21745697a046ec7d8a563f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42bd2ac95399551341b8ffc4256ac78a46e451a21745697a046ec7d8a563f01->enter($__internal_b42bd2ac95399551341b8ffc4256ac78a46e451a21745697a046ec7d8a563f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PlateForme/agenda/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b42bd2ac95399551341b8ffc4256ac78a46e451a21745697a046ec7d8a563f01->leave($__internal_b42bd2ac95399551341b8ffc4256ac78a46e451a21745697a046ec7d8a563f01_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4173f0cfec24d65cbe120d5a8380b5e646e0ff2d2ed9f07ccef0ed1524b87653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4173f0cfec24d65cbe120d5a8380b5e646e0ff2d2ed9f07ccef0ed1524b87653->enter($__internal_4173f0cfec24d65cbe120d5a8380b5e646e0ff2d2ed9f07ccef0ed1524b87653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Création d'un évènement</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col s12 m6 l6\"></div>
                    <p class=\"\">Titre de l'évènement</p>
                    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
                </div>
                <div class=\"col s12 m6 l6\">
                    <p class=\"\">Lieu</p>
                    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieu", array()), 'widget');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieu", array()), 'errors');
        echo "
                </div>

            <div class=\"row\">
                <p class=\"\">Description de l'évènement</p>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "texte", array()), 'widget');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "texte", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col s12 m6 l6\">
                    <p class=\"\">Date de début d'évènement</p>
                    <div class=\"input-group\">
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "start", array()), 'widget');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "start", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"col s12 m6 l6\">
                    <p class=\"\">Date de fin d'évènement</p>
                    <div class=\"input-group\">
                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "end", array()), 'widget');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "end", array()), 'errors');
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
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "couleur", array()), 'widget', array("attr" => array("placeholder" => "Cliquez")));
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "couleur", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"col s12 m6 l6\">
                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "slider", array()), 'widget');
        echo " Afficher dans le slider \"Home page\"
                        </label>
                        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "slider", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>

            <div class=\"center\">
                <input class=\"btn btn-default edit_admin\"  type=\"submit\" value=\"Créer\" />
                <a class=\"btn btn-default edit_admin\"  href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agenda_index");
        echo "\">Retour au calendrier</a>
            </div>
        </div>
        ";
        // line 72
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_4173f0cfec24d65cbe120d5a8380b5e646e0ff2d2ed9f07ccef0ed1524b87653->leave($__internal_4173f0cfec24d65cbe120d5a8380b5e646e0ff2d2ed9f07ccef0ed1524b87653_prof);

    }

    public function getTemplateName()
    {
        return "@PlateForme/agenda/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 72,  152 => 69,  142 => 62,  137 => 60,  127 => 53,  123 => 52,  110 => 42,  106 => 41,  97 => 35,  93 => 34,  82 => 26,  78 => 25,  68 => 18,  64 => 17,  57 => 13,  53 => 12,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Création d'un évènement</h1>

    {{ form_start(form) }}

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col s12 m6 l6\"></div>
                    <p class=\"\">Titre de l'évènement</p>
                    {{ form_widget(form.titre) }}
                    {{ form_errors(form.titre) }}
                </div>
                <div class=\"col s12 m6 l6\">
                    <p class=\"\">Lieu</p>
                    {{ form_widget(form.lieu) }}
                    {{ form_errors(form.lieu) }}
                </div>

            <div class=\"row\">
                <p class=\"\">Description de l'évènement</p>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
                    {{ form_widget(form.texte) }}
                    {{ form_errors(form.texte) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col s12 m6 l6\">
                    <p class=\"\">Date de début d'évènement</p>
                    <div class=\"input-group\">
                        {{ form_widget(form.start) }}
                        {{ form_errors(form.start) }}
                    </div>
                </div>
                <div class=\"col s12 m6 l6\">
                    <p class=\"\">Date de fin d'évènement</p>
                    <div class=\"input-group\">
                        {{ form_widget(form.end) }}
                        {{ form_errors(form.end) }}
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col s12 m6 l6\">
                <p class=\"\">Couleur</p>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
                        {{ form_widget(form.couleur , {'attr': {'placeholder': 'Cliquez'}}) }}
                        {{ form_errors(form.couleur) }}
                    </div>
                </div>

                <div class=\"col s12 m6 l6\">
                    <div class=\"checkbox\">
                        <label>
                            {{ form_widget(form.slider) }} Afficher dans le slider \"Home page\"
                        </label>
                        {{ form_errors(form.slider) }}
                    </div>
                </div>
            </div>

            <div class=\"center\">
                <input class=\"btn btn-default edit_admin\"  type=\"submit\" value=\"Créer\" />
                <a class=\"btn btn-default edit_admin\"  href=\"{{ path('agenda_index') }}\">Retour au calendrier</a>
            </div>
        </div>
        {{ form_end(form) }}

{% endblock %}

{#<div class=\"container\">
            <div class=\"row\">
                <div class=\"input-group\">
                    {{ form_widget(form.images, {'attr': {'class': 'help-block'}}) }}
                    {{ form_errors(form.images) }}
                </div>
            </div>
        </div>#}

", "@PlateForme/agenda/new.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/PlateFormeBundle/Resources/views/agenda/new.html.twig");
    }
}
