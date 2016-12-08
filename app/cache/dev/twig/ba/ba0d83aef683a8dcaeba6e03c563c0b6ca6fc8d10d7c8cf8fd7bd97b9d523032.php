<?php

/* base.html.twig */
class __TwigTemplate_5dcdba1e458824fa7dac2d39127df0a26659e351ae1b97204caff4debfdf041d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'materialize' => array($this, 'block_materialize'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0881412abe658e020b32d89605cdab0f0a8e2e41ce0110ee29a14d588c3c6b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0881412abe658e020b32d89605cdab0f0a8e2e41ce0110ee29a14d588c3c6b5b->enter($__internal_0881412abe658e020b32d89605cdab0f0a8e2e41ce0110ee29a14d588c3c6b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('materialize', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "

</head>
<body>
    ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "</body>
</html>";
        
        $__internal_0881412abe658e020b32d89605cdab0f0a8e2e41ce0110ee29a14d588c3c6b5b->leave($__internal_0881412abe658e020b32d89605cdab0f0a8e2e41ce0110ee29a14d588c3c6b5b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_116bc5eeb2d85eefc1a803301362c7ef25fe30aaa72d217dbf7edc2edaad7b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116bc5eeb2d85eefc1a803301362c7ef25fe30aaa72d217dbf7edc2edaad7b71->enter($__internal_116bc5eeb2d85eefc1a803301362c7ef25fe30aaa72d217dbf7edc2edaad7b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Haras de la métamorphose - administration";
        
        $__internal_116bc5eeb2d85eefc1a803301362c7ef25fe30aaa72d217dbf7edc2edaad7b71->leave($__internal_116bc5eeb2d85eefc1a803301362c7ef25fe30aaa72d217dbf7edc2edaad7b71_prof);

    }

    // line 6
    public function block_materialize($context, array $blocks = array())
    {
        $__internal_acccc25c316674bff127947505a7751619adeb439d79390743353545a45f79e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acccc25c316674bff127947505a7751619adeb439d79390743353545a45f79e8->enter($__internal_acccc25c316674bff127947505a7751619adeb439d79390743353545a45f79e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "materialize"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
    ";
        
        $__internal_acccc25c316674bff127947505a7751619adeb439d79390743353545a45f79e8->leave($__internal_acccc25c316674bff127947505a7751619adeb439d79390743353545a45f79e8_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43c0c3e98f8fd1082fe2f3a5cc21f1c77870d9631f689328ee847892b0843935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c0c3e98f8fd1082fe2f3a5cc21f1c77870d9631f689328ee847892b0843935->enter($__internal_43c0c3e98f8fd1082fe2f3a5cc21f1c77870d9631f689328ee847892b0843935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/styles/stylesheets/style.css"), "html", null, true);
        echo "\">
        <!-- Icons -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("licos.ico"), "html", null, true);
        echo "\" />
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css\" integrity=\"sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE\" crossorigin=\"anonymous\">
    ";
        
        $__internal_43c0c3e98f8fd1082fe2f3a5cc21f1c77870d9631f689328ee847892b0843935->leave($__internal_43c0c3e98f8fd1082fe2f3a5cc21f1c77870d9631f689328ee847892b0843935_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b1b8a56190881cabea4b9af0726c3efa95f3cd335d80e5c7945e2d0ddeb00e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1b8a56190881cabea4b9af0726c3efa95f3cd335d80e5c7945e2d0ddeb00e1->enter($__internal_5b1b8a56190881cabea4b9af0726c3efa95f3cd335d80e5c7945e2d0ddeb00e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b1b8a56190881cabea4b9af0726c3efa95f3cd335d80e5c7945e2d0ddeb00e1->leave($__internal_5b1b8a56190881cabea4b9af0726c3efa95f3cd335d80e5c7945e2d0ddeb00e1_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_00a50cfa7e14fbd8ebc340b921b805439706d419660513a8499b1bda533e4230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a50cfa7e14fbd8ebc340b921b805439706d419660513a8499b1bda533e4230->enter($__internal_00a50cfa7e14fbd8ebc340b921b805439706d419660513a8499b1bda533e4230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/jquery-3.1.1.js"), "html", null, true);
        echo "\"></script>
        <!-- Compiled and minified JavaScript -->
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/admin_script.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_00a50cfa7e14fbd8ebc340b921b805439706d419660513a8499b1bda533e4230->leave($__internal_00a50cfa7e14fbd8ebc340b921b805439706d419660513a8499b1bda533e4230_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 26,  127 => 22,  121 => 21,  110 => 20,  99 => 12,  93 => 10,  87 => 9,  79 => 7,  73 => 6,  61 => 5,  53 => 28,  50 => 21,  48 => 20,  42 => 16,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
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
    <title>{% block title %}Haras de la métamorphose - administration{% endblock %}</title>
    {% block materialize %}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
    {% endblock materialize %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/haras/styles/stylesheets/style.css') }}\">
        <!-- Icons -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('licos.ico') }}\" />
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css\" integrity=\"sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE\" crossorigin=\"anonymous\">
    {% endblock %}


</head>
<body>
    {% block body %}{% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('bundles/haras/scripts/jquery-3.1.1.js') }}\"></script>
        <!-- Compiled and minified JavaScript -->
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js\"></script>
        <script src=\"{{ asset('bundles/haras/scripts/admin_script.js') }}\"></script>
    {% endblock %}
</body>
</html>", "base.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/app/Resources/views/base.html.twig");
    }
}
