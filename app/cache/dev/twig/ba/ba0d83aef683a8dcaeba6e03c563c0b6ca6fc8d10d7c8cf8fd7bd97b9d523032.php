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
        $__internal_61dde3b8f3c0b25b5ad41e2bf00f1eb8537617f3344694e212a14d6e42a72954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61dde3b8f3c0b25b5ad41e2bf00f1eb8537617f3344694e212a14d6e42a72954->enter($__internal_61dde3b8f3c0b25b5ad41e2bf00f1eb8537617f3344694e212a14d6e42a72954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_61dde3b8f3c0b25b5ad41e2bf00f1eb8537617f3344694e212a14d6e42a72954->leave($__internal_61dde3b8f3c0b25b5ad41e2bf00f1eb8537617f3344694e212a14d6e42a72954_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2e783f95d8fa4bc0f1ae94957a09253384a483bf6edcea27b3b24eddae466b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e783f95d8fa4bc0f1ae94957a09253384a483bf6edcea27b3b24eddae466b4->enter($__internal_e2e783f95d8fa4bc0f1ae94957a09253384a483bf6edcea27b3b24eddae466b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Haras de la métamorphose - administration";
        
        $__internal_e2e783f95d8fa4bc0f1ae94957a09253384a483bf6edcea27b3b24eddae466b4->leave($__internal_e2e783f95d8fa4bc0f1ae94957a09253384a483bf6edcea27b3b24eddae466b4_prof);

    }

    // line 6
    public function block_materialize($context, array $blocks = array())
    {
        $__internal_29d3decc938865c8cee0965b6fb857822b674a6846f76767e90b8fefc3c44e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d3decc938865c8cee0965b6fb857822b674a6846f76767e90b8fefc3c44e75->enter($__internal_29d3decc938865c8cee0965b6fb857822b674a6846f76767e90b8fefc3c44e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "materialize"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
    ";
        
        $__internal_29d3decc938865c8cee0965b6fb857822b674a6846f76767e90b8fefc3c44e75->leave($__internal_29d3decc938865c8cee0965b6fb857822b674a6846f76767e90b8fefc3c44e75_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c8be50201ebde398265b2e8a7a3a45fb1d69d5f572b2e2009fed0fe002e80da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8be50201ebde398265b2e8a7a3a45fb1d69d5f572b2e2009fed0fe002e80da->enter($__internal_0c8be50201ebde398265b2e8a7a3a45fb1d69d5f572b2e2009fed0fe002e80da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0c8be50201ebde398265b2e8a7a3a45fb1d69d5f572b2e2009fed0fe002e80da->leave($__internal_0c8be50201ebde398265b2e8a7a3a45fb1d69d5f572b2e2009fed0fe002e80da_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_b60ea58f34b84e52f7e054cdff390f91f956efba2bf21c08f99f4202fdadb0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60ea58f34b84e52f7e054cdff390f91f956efba2bf21c08f99f4202fdadb0a2->enter($__internal_b60ea58f34b84e52f7e054cdff390f91f956efba2bf21c08f99f4202fdadb0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b60ea58f34b84e52f7e054cdff390f91f956efba2bf21c08f99f4202fdadb0a2->leave($__internal_b60ea58f34b84e52f7e054cdff390f91f956efba2bf21c08f99f4202fdadb0a2_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40009be55a87e0fad71aa985afa5a3e2b9f594e3c3435a1ee929bab931f3d82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40009be55a87e0fad71aa985afa5a3e2b9f594e3c3435a1ee929bab931f3d82f->enter($__internal_40009be55a87e0fad71aa985afa5a3e2b9f594e3c3435a1ee929bab931f3d82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_40009be55a87e0fad71aa985afa5a3e2b9f594e3c3435a1ee929bab931f3d82f->leave($__internal_40009be55a87e0fad71aa985afa5a3e2b9f594e3c3435a1ee929bab931f3d82f_prof);

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
