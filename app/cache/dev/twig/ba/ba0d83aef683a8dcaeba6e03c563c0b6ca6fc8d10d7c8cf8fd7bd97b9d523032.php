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
        $__internal_501a96dc8596c54fa7ebb86f0ed889e7727486b2102d5ebf1857c6dec5357cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501a96dc8596c54fa7ebb86f0ed889e7727486b2102d5ebf1857c6dec5357cb5->enter($__internal_501a96dc8596c54fa7ebb86f0ed889e7727486b2102d5ebf1857c6dec5357cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 12
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("licos.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "</body>
</html>";
        
        $__internal_501a96dc8596c54fa7ebb86f0ed889e7727486b2102d5ebf1857c6dec5357cb5->leave($__internal_501a96dc8596c54fa7ebb86f0ed889e7727486b2102d5ebf1857c6dec5357cb5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_98c2f4daa1455f9622506d818c44ee1491738c709f9851ba083633aa7cc68f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c2f4daa1455f9622506d818c44ee1491738c709f9851ba083633aa7cc68f7b->enter($__internal_98c2f4daa1455f9622506d818c44ee1491738c709f9851ba083633aa7cc68f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Haras de la métamorphose - administration";
        
        $__internal_98c2f4daa1455f9622506d818c44ee1491738c709f9851ba083633aa7cc68f7b->leave($__internal_98c2f4daa1455f9622506d818c44ee1491738c709f9851ba083633aa7cc68f7b_prof);

    }

    // line 6
    public function block_materialize($context, array $blocks = array())
    {
        $__internal_2503ebf9c3a66d09997cd8e7a7119553265a311f75f5c10683f51d4988358a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2503ebf9c3a66d09997cd8e7a7119553265a311f75f5c10683f51d4988358a79->enter($__internal_2503ebf9c3a66d09997cd8e7a7119553265a311f75f5c10683f51d4988358a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "materialize"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
    ";
        
        $__internal_2503ebf9c3a66d09997cd8e7a7119553265a311f75f5c10683f51d4988358a79->leave($__internal_2503ebf9c3a66d09997cd8e7a7119553265a311f75f5c10683f51d4988358a79_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_847fdf8c9ac14bf33ed8168dde6d63ed582fbaac21ff18b7c40135d378eaae7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847fdf8c9ac14bf33ed8168dde6d63ed582fbaac21ff18b7c40135d378eaae7e->enter($__internal_847fdf8c9ac14bf33ed8168dde6d63ed582fbaac21ff18b7c40135d378eaae7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/styles/stylesheets/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_847fdf8c9ac14bf33ed8168dde6d63ed582fbaac21ff18b7c40135d378eaae7e->leave($__internal_847fdf8c9ac14bf33ed8168dde6d63ed582fbaac21ff18b7c40135d378eaae7e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7b4e7f5c8aced3c4d52cc78130594ac723cf208a8d9dcde38114206926d6140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b4e7f5c8aced3c4d52cc78130594ac723cf208a8d9dcde38114206926d6140->enter($__internal_c7b4e7f5c8aced3c4d52cc78130594ac723cf208a8d9dcde38114206926d6140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7b4e7f5c8aced3c4d52cc78130594ac723cf208a8d9dcde38114206926d6140->leave($__internal_c7b4e7f5c8aced3c4d52cc78130594ac723cf208a8d9dcde38114206926d6140_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e499dce1fa8168c1ae8731c761b54871b5eb16e363faa0d76e9711e5b5c74be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e499dce1fa8168c1ae8731c761b54871b5eb16e363faa0d76e9711e5b5c74be3->enter($__internal_e499dce1fa8168c1ae8731c761b54871b5eb16e363faa0d76e9711e5b5c74be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/jquery-3.1.1.js"), "html", null, true);
        echo "\"></script>
        <!-- Compiled and minified JavaScript -->
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/admin_script.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_e499dce1fa8168c1ae8731c761b54871b5eb16e363faa0d76e9711e5b5c74be3->leave($__internal_e499dce1fa8168c1ae8731c761b54871b5eb16e363faa0d76e9711e5b5c74be3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 21,  121 => 17,  115 => 16,  104 => 15,  94 => 10,  88 => 9,  80 => 7,  74 => 6,  62 => 5,  54 => 23,  51 => 16,  49 => 15,  42 => 12,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
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
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('licos.ico') }}\" />
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
