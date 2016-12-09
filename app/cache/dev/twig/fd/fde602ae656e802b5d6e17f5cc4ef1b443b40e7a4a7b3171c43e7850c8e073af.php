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
        $__internal_1b3ba958f0806b5fbf1b8de868d1036c9b8d43ccd9e3565ca01ac9d4246ed5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3ba958f0806b5fbf1b8de868d1036c9b8d43ccd9e3565ca01ac9d4246ed5db->enter($__internal_1b3ba958f0806b5fbf1b8de868d1036c9b8d43ccd9e3565ca01ac9d4246ed5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PlateForme/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b3ba958f0806b5fbf1b8de868d1036c9b8d43ccd9e3565ca01ac9d4246ed5db->leave($__internal_1b3ba958f0806b5fbf1b8de868d1036c9b8d43ccd9e3565ca01ac9d4246ed5db_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_f589bdd77272dcaa38cf8b2d846dc05516173db4ad4298141a62bd79fed9da88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f589bdd77272dcaa38cf8b2d846dc05516173db4ad4298141a62bd79fed9da88->enter($__internal_f589bdd77272dcaa38cf8b2d846dc05516173db4ad4298141a62bd79fed9da88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_f589bdd77272dcaa38cf8b2d846dc05516173db4ad4298141a62bd79fed9da88->leave($__internal_f589bdd77272dcaa38cf8b2d846dc05516173db4ad4298141a62bd79fed9da88_prof);

    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8e6d1e4b3fa5be81064da4a464bd255674497798d4f3bfdea9049781ff571c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6d1e4b3fa5be81064da4a464bd255674497798d4f3bfdea9049781ff571c50->enter($__internal_8e6d1e4b3fa5be81064da4a464bd255674497798d4f3bfdea9049781ff571c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 34
        echo "
    <p>ET MOI UN FOOTER</p>

";
        
        $__internal_8e6d1e4b3fa5be81064da4a464bd255674497798d4f3bfdea9049781ff571c50->leave($__internal_8e6d1e4b3fa5be81064da4a464bd255674497798d4f3bfdea9049781ff571c50_prof);

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
