<?php

/* @PlateForme/Default/basePlateforme.html.twig */
class __TwigTemplate_d3461e5185313471f09ff33583c1ec6f6a767e3c01af303f17e721346768c6b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a0455ad0b8f23e41dda8c4c71c7b460fd6f6b0c46807d28590c6af042c95496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0455ad0b8f23e41dda8c4c71c7b460fd6f6b0c46807d28590c6af042c95496->enter($__internal_1a0455ad0b8f23e41dda8c4c71c7b460fd6f6b0c46807d28590c6af042c95496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PlateForme/Default/basePlateforme.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plateforme/images/icone-cheval.png"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/styles/stylesheets/calendar/fullcalendar.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/styles/stylesheets/style.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plateforme/images/icone-cheval.png"), "html", null, true);
        echo "\" />

        <!-- Icons -->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css\" integrity=\"sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE\" crossorigin=\"anonymous\">

       <style>
        ";
        // line 19
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "        </style>
    </head>
    <body>

        ";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('footer', $context, $blocks);
        // line 30
        echo "

        ";
        // line 33
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

        ";
        // line 37
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/jquery-3.1.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/materialize.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 41
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "
        ";
        // line 44
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/main.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>

";
        
        $__internal_1a0455ad0b8f23e41dda8c4c71c7b460fd6f6b0c46807d28590c6af042c95496->leave($__internal_1a0455ad0b8f23e41dda8c4c71c7b460fd6f6b0c46807d28590c6af042c95496_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_24fb50eaa26771fdb6dafeb2c4bf0be51afdf2cec3e42024468b11e53096d7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fb50eaa26771fdb6dafeb2c4bf0be51afdf2cec3e42024468b11e53096d7ea->enter($__internal_24fb50eaa26771fdb6dafeb2c4bf0be51afdf2cec3e42024468b11e53096d7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PLateforme du Haras de la métamorphose";
        
        $__internal_24fb50eaa26771fdb6dafeb2c4bf0be51afdf2cec3e42024468b11e53096d7ea->leave($__internal_24fb50eaa26771fdb6dafeb2c4bf0be51afdf2cec3e42024468b11e53096d7ea_prof);

    }

    // line 19
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e5df7abd08d0341813aea868cdbafe499baa3646911924e5f7fe4dc1f3865fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5df7abd08d0341813aea868cdbafe499baa3646911924e5f7fe4dc1f3865fe->enter($__internal_1e5df7abd08d0341813aea868cdbafe499baa3646911924e5f7fe4dc1f3865fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 20
        echo "        ";
        
        $__internal_1e5df7abd08d0341813aea868cdbafe499baa3646911924e5f7fe4dc1f3865fe->leave($__internal_1e5df7abd08d0341813aea868cdbafe499baa3646911924e5f7fe4dc1f3865fe_prof);

    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        $__internal_20c3064d3617e97677a0d2c746745d040a8b738144a7f8970ac1933bb63513e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c3064d3617e97677a0d2c746745d040a8b738144a7f8970ac1933bb63513e2->enter($__internal_20c3064d3617e97677a0d2c746745d040a8b738144a7f8970ac1933bb63513e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_20c3064d3617e97677a0d2c746745d040a8b738144a7f8970ac1933bb63513e2->leave($__internal_20c3064d3617e97677a0d2c746745d040a8b738144a7f8970ac1933bb63513e2_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cd6762908a3cf0a7d38d3dc56265e4115e7c18b3f89bad501898f91dd5306e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd6762908a3cf0a7d38d3dc56265e4115e7c18b3f89bad501898f91dd5306e1->enter($__internal_0cd6762908a3cf0a7d38d3dc56265e4115e7c18b3f89bad501898f91dd5306e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0cd6762908a3cf0a7d38d3dc56265e4115e7c18b3f89bad501898f91dd5306e1->leave($__internal_0cd6762908a3cf0a7d38d3dc56265e4115e7c18b3f89bad501898f91dd5306e1_prof);

    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f7aaa12122331445ffc5563c80c000fb1ab4c14442ce49bc3473a82ccf107582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7aaa12122331445ffc5563c80c000fb1ab4c14442ce49bc3473a82ccf107582->enter($__internal_f7aaa12122331445ffc5563c80c000fb1ab4c14442ce49bc3473a82ccf107582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_f7aaa12122331445ffc5563c80c000fb1ab4c14442ce49bc3473a82ccf107582->leave($__internal_f7aaa12122331445ffc5563c80c000fb1ab4c14442ce49bc3473a82ccf107582_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb055a13fabd95953e2d70f41c442c7d0076897b3c69893e57fb31679c19b4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb055a13fabd95953e2d70f41c442c7d0076897b3c69893e57fb31679c19b4ef->enter($__internal_eb055a13fabd95953e2d70f41c442c7d0076897b3c69893e57fb31679c19b4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eb055a13fabd95953e2d70f41c442c7d0076897b3c69893e57fb31679c19b4ef->leave($__internal_eb055a13fabd95953e2d70f41c442c7d0076897b3c69893e57fb31679c19b4ef_prof);

    }

    public function getTemplateName()
    {
        return "@PlateForme/Default/basePlateforme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 41,  174 => 29,  163 => 27,  152 => 25,  145 => 20,  139 => 19,  127 => 5,  113 => 44,  110 => 42,  107 => 41,  102 => 38,  97 => 37,  92 => 34,  87 => 33,  83 => 30,  81 => 29,  78 => 28,  76 => 27,  73 => 26,  71 => 25,  65 => 21,  63 => 19,  53 => 12,  47 => 9,  43 => 8,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}PLateforme du Haras de la métamorphose{% endblock %}</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('bundles/plateforme/images/icone-cheval.png') }}\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/haras/styles/stylesheets/calendar/fullcalendar.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/haras/styles/stylesheets/style.css') }}\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('bundles/plateforme/images/icone-cheval.png') }}\" />

        <!-- Icons -->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css\" integrity=\"sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE\" crossorigin=\"anonymous\">

       <style>
        {% block head %}
        {% endblock %}
        </style>
    </head>
    <body>

        {% block header %}{% endblock %}

        {% block body %}{% endblock %}

        {% block footer %}{% endblock %}


        {# FOS JS ROUTING SCRIPT #}
        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>

        {# APPEL DES SCRIPTS JS ORDRE Jquery/Materialize/Calendar/Main(en surcharge) #}
        <script src=\"{{ asset('bundles/haras/scripts/jquery-3.1.1.js') }}\"></script>
        <script src=\"{{ asset('bundles/haras/scripts/materialize.min.js') }}\"></script>

        {# APPEL DES JS DE FULLCALENDAR ET AUTRES PAGES #}
        {% block javascripts %}{% endblock %}

        {#SCRIPTS DE SURCHARGE#}
        <script src=\"{{ asset('bundles/haras/scripts/main.js') }}\"></script>

    </body>
</html>

", "@PlateForme/Default/basePlateforme.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/PlateFormeBundle/Resources/views/Default/basePlateforme.html.twig");
    }
}
