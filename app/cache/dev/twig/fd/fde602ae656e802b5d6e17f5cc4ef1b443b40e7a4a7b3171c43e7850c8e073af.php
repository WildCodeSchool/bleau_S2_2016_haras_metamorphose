<?php

/* @PlateForme/layout.html.twig */
class __TwigTemplate_196fcef981784405e126b6e4d304d1385fbcf87f244f3ab6d588355c3ef99bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@PlateForme/Default/basePlateforme.html.twig", "@PlateForme/layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PlateForme/Default/basePlateforme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db2608b942dae485fe82262eb0613b0869c35b27e320a4bc79ad17a74455d358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2608b942dae485fe82262eb0613b0869c35b27e320a4bc79ad17a74455d358->enter($__internal_db2608b942dae485fe82262eb0613b0869c35b27e320a4bc79ad17a74455d358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PlateForme/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db2608b942dae485fe82262eb0613b0869c35b27e320a4bc79ad17a74455d358->leave($__internal_db2608b942dae485fe82262eb0613b0869c35b27e320a4bc79ad17a74455d358_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_92a4421aac1bfb158b46b0baf9a03f4fc10a9ab8bf4f64bd5c2bc93d17d70d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a4421aac1bfb158b46b0baf9a03f4fc10a9ab8bf4f64bd5c2bc93d17d70d38->enter($__internal_92a4421aac1bfb158b46b0baf9a03f4fc10a9ab8bf4f64bd5c2bc93d17d70d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "
   <header>

       <!-- Dropdown Structure -->
       <ul id=\"dropdown1\" class=\"dropdown-content\">
           <li><a href=\"#!\">one</a></li>
           <li><a href=\"#!\">two</a></li>
           <li class=\"divider\"></li>
           <li><a href=\"#!\">three</a></li>
       </ul>
       <nav>
           <div class=\"nav-wrapper\">
               <a href=\"#!\" class=\"brand-logo\">Logo</a>
               <ul class=\"right hide-on-med-and-down\">
                   <li><a href=\"sass.html\">Sass</a></li>
                   <li><a href=\"badges.html\">Components</a></li>
                   <!-- Dropdown Trigger -->
                   <li><a class=\"dropdown-button\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" data-activates=\"dropdown1\">Dropdown<i class=\"fa fa-user fa-2x\"></i></a></li>
               </ul>
           </div>
       </nav>




   </header>

";
        
        $__internal_92a4421aac1bfb158b46b0baf9a03f4fc10a9ab8bf4f64bd5c2bc93d17d70d38->leave($__internal_92a4421aac1bfb158b46b0baf9a03f4fc10a9ab8bf4f64bd5c2bc93d17d70d38_prof);

    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3f0966c2cf44dbff6f44bfe249cd9ab7e99c4702b4c88774e0860c06e3adbe14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0966c2cf44dbff6f44bfe249cd9ab7e99c4702b4c88774e0860c06e3adbe14->enter($__internal_3f0966c2cf44dbff6f44bfe249cd9ab7e99c4702b4c88774e0860c06e3adbe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 34
        echo "
    <p>ET MOI UN FOOTER</p>

";
        
        $__internal_3f0966c2cf44dbff6f44bfe249cd9ab7e99c4702b4c88774e0860c06e3adbe14->leave($__internal_3f0966c2cf44dbff6f44bfe249cd9ab7e99c4702b4c88774e0860c06e3adbe14_prof);

    }

    public function getTemplateName()
    {
        return "@PlateForme/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  78 => 33,  60 => 21,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@PlateForme/Default/basePlateforme.html.twig' %}

{% block header %}

   <header>

       <!-- Dropdown Structure -->
       <ul id=\"dropdown1\" class=\"dropdown-content\">
           <li><a href=\"#!\">one</a></li>
           <li><a href=\"#!\">two</a></li>
           <li class=\"divider\"></li>
           <li><a href=\"#!\">three</a></li>
       </ul>
       <nav>
           <div class=\"nav-wrapper\">
               <a href=\"#!\" class=\"brand-logo\">Logo</a>
               <ul class=\"right hide-on-med-and-down\">
                   <li><a href=\"sass.html\">Sass</a></li>
                   <li><a href=\"badges.html\">Components</a></li>
                   <!-- Dropdown Trigger -->
                   <li><a class=\"dropdown-button\" href=\"{{ path('fos_user_profile_show') }}\" data-activates=\"dropdown1\">Dropdown<i class=\"fa fa-user fa-2x\"></i></a></li>
               </ul>
           </div>
       </nav>




   </header>

{% endblock %}

{% block footer %}

    <p>ET MOI UN FOOTER</p>

{% endblock %}", "@PlateForme/layout.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/PlateFormeBundle/Resources/views/layout.html.twig");
    }
}
