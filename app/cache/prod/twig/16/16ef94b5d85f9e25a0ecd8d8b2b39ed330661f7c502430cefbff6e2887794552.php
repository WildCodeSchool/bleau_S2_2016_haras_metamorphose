<?php

/* media/edit.html.twig */
class __TwigTemplate_48b87b85acb99a3486baf22751cca5f4d9edab27c14a7ce7cdba37c818e94062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "media/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"_admin\" class=\"container\">
        ";
        // line 5
        $this->loadTemplate("HarasBundle::nav_admin.html.twig", "media/edit.html.twig", 5)->display($context);
        // line 6
        echo "        <div class=\"cadre\">
            ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
                <div class=\"row\">
                    <h1 class=\"admin_title\">Media edit</h1>
                    <div class=\"col m12\">
                        <p>Current media: </p>
                        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["medium"] ?? null), "path", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["medium"] ?? null), "alt", array()), "html", null, true);
        echo "\" height=100px>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col s12\">
                        Change current media:
                        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "file", array()), 'errors');
        echo "
                        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "file", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col s12\">
                        Alternative text:
                        <div class=\"input-field inline\">
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "alt", array()), 'errors');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "alt", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"admin_button col m6\">
                        <div class=\"waves-effect waves-light btn\">
                            <input type=\"submit\" value=\"Edit\"/>
                        </div>
                    </div>
                </div>
            ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
            <a class=\"admin_button col m12 waves-effect waves-light btn\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("name" => $this->getAttribute(($context["page"] ?? null), "name", array()))), "html", null, true);
        echo "\">Back to the list</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "media/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 39,  90 => 38,  76 => 27,  72 => 26,  62 => 19,  58 => 18,  47 => 12,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "media/edit.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/app/Resources/views/media/edit.html.twig");
    }
}
