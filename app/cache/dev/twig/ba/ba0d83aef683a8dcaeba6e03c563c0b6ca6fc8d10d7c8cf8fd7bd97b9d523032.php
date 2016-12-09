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
        $__internal_7f7ce5f898644a581782c2713ec43b25b602585ebd8aa0b9c6350735bd16409f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7ce5f898644a581782c2713ec43b25b602585ebd8aa0b9c6350735bd16409f->enter($__internal_7f7ce5f898644a581782c2713ec43b25b602585ebd8aa0b9c6350735bd16409f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7f7ce5f898644a581782c2713ec43b25b602585ebd8aa0b9c6350735bd16409f->leave($__internal_7f7ce5f898644a581782c2713ec43b25b602585ebd8aa0b9c6350735bd16409f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f643155c4458ad49684d72da920c1db5dc44331f3375de07a90b95e6bbaaed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f643155c4458ad49684d72da920c1db5dc44331f3375de07a90b95e6bbaaed0->enter($__internal_9f643155c4458ad49684d72da920c1db5dc44331f3375de07a90b95e6bbaaed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Haras de la métamorphose - administration";
        
        $__internal_9f643155c4458ad49684d72da920c1db5dc44331f3375de07a90b95e6bbaaed0->leave($__internal_9f643155c4458ad49684d72da920c1db5dc44331f3375de07a90b95e6bbaaed0_prof);

    }

    // line 6
    public function block_materialize($context, array $blocks = array())
    {
        $__internal_a7cb5766325f72a0c04ca3922bbdf335b43efc81bd819e13f6aaf7befc5005fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cb5766325f72a0c04ca3922bbdf335b43efc81bd819e13f6aaf7befc5005fb->enter($__internal_a7cb5766325f72a0c04ca3922bbdf335b43efc81bd819e13f6aaf7befc5005fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "materialize"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
    ";
        
        $__internal_a7cb5766325f72a0c04ca3922bbdf335b43efc81bd819e13f6aaf7befc5005fb->leave($__internal_a7cb5766325f72a0c04ca3922bbdf335b43efc81bd819e13f6aaf7befc5005fb_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c51689542d55a356d469f72842c87ae9a5165485893f45143cccefd75964728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c51689542d55a356d469f72842c87ae9a5165485893f45143cccefd75964728->enter($__internal_0c51689542d55a356d469f72842c87ae9a5165485893f45143cccefd75964728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0c51689542d55a356d469f72842c87ae9a5165485893f45143cccefd75964728->leave($__internal_0c51689542d55a356d469f72842c87ae9a5165485893f45143cccefd75964728_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_1566d818f6554406f2317bd6d979d9e557624843910ec2c1a396ff320a1eb0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1566d818f6554406f2317bd6d979d9e557624843910ec2c1a396ff320a1eb0f7->enter($__internal_1566d818f6554406f2317bd6d979d9e557624843910ec2c1a396ff320a1eb0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1566d818f6554406f2317bd6d979d9e557624843910ec2c1a396ff320a1eb0f7->leave($__internal_1566d818f6554406f2317bd6d979d9e557624843910ec2c1a396ff320a1eb0f7_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5343dd2ca1f42e450a3360651a9b5ae35ba44cf02deb8a7cd2d48c2ee01b344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5343dd2ca1f42e450a3360651a9b5ae35ba44cf02deb8a7cd2d48c2ee01b344->enter($__internal_f5343dd2ca1f42e450a3360651a9b5ae35ba44cf02deb8a7cd2d48c2ee01b344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f5343dd2ca1f42e450a3360651a9b5ae35ba44cf02deb8a7cd2d48c2ee01b344->leave($__internal_f5343dd2ca1f42e450a3360651a9b5ae35ba44cf02deb8a7cd2d48c2ee01b344_prof);

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
