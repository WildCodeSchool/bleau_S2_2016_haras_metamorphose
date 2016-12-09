<?php

/* @Haras/Security/login_content.html.twig */
class __TwigTemplate_9c46aae919a3a284c7dfbe2f012b8f7e11f29ddf87a8677b7675acfbbdf42150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'materialize' => array($this, 'block_materialize'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('materialize', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
    }

    // line 7
    public function block_materialize($context, array $blocks = array())
    {
        // line 8
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<body id=\"_admin\">
<div class=\"container\">
    <div class=\"cadre\">
        <div class=\"row\">
            <h1 class=\"admin_title\">Login</h1>
                <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    ";
        // line 18
        if (($context["csrf_token"] ?? null)) {
            // line 19
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
                    ";
        }
        // line 21
        echo "
                    <label for=\"username\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" />

                    <label for=\"password\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                    <div class=\"row\">
                        <div class=\"admin_button col m12\">
                            <input class=\"waves-effect waves-light btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo " \"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js\"></script>
    <script>
        \$(document).ready(function () {
            Materialize.updateTextFields();
            \$('select').material_select();
        });
    </script>
</body>
";
    }

    public function getTemplateName()
    {
        return "@Haras/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  93 => 29,  86 => 25,  81 => 23,  77 => 22,  74 => 21,  68 => 19,  66 => 18,  62 => 17,  55 => 12,  52 => 11,  47 => 8,  44 => 7,  40 => 11,  37 => 10,  35 => 7,  32 => 6,  26 => 4,  24 => 3,  21 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Haras/Security/login_content.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/HarasBundle/Resources/views/Security/login_content.html.twig");
    }
}
