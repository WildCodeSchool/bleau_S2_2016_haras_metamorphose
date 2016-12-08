<?php

/* @Haras/contact.html.twig */
class __TwigTemplate_f1152fed5ff8546ceb4f1ec51fb9ff2d4bd719840ad6f035bf46438f2887417d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Haras/base.html.twig", "@Haras/contact.html.twig", 1);
        $this->blocks = array(
            'materialize' => array($this, 'block_materialize'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Haras/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_materialize($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css\">
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div id=\"_contact\">
        <header id='_template_header'>
            ";
        // line 10
        $this->loadTemplate("HarasBundle::header.html.twig", "@Haras/contact.html.twig", 10)->display($context);
        // line 11
        echo "        </header>

        <h1 class=\"center\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "</h1>
        <div class=\"container page-content row\">
            <div class=\"contact_form col s6\">
                ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                <div>
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, ($context["contactName"] ?? null), "html", null, true);
        echo "</p>
                    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "subject", array()), 'errors');
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "subject", array()), 'widget');
        echo "
                </div>
                <div>
                    <p>";
        // line 23
        echo twig_escape_filter($this->env, ($context["contactMail"] ?? null), "html", null, true);
        echo "</p>
                    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "from", array()), 'errors');
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "from", array()), 'widget');
        echo "
                </div>
                <div class=\"text_area\">
                    <p>";
        // line 28
        echo twig_escape_filter($this->env, ($context["contactMessage"] ?? null), "html", null, true);
        echo "</p>
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "body", array()), 'errors');
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "body", array()), 'widget');
        echo "
                </div>
                <input class=\" button waves-effect waves-light btn col s6\" type=\"submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["sendButton"] ?? null), "html", null, true);
        echo "\"/>
                <div class=\"col s6 \">
                    ";
        // line 34
        if ((($context["send"] ?? null) == true)) {
            // line 35
            echo "                        <p>Le formulaire a bien été envoyé</p>
                    ";
        }
        // line 37
        echo "                </div>
            </div>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

            <div class=\"map-holder col s6\">
                <div id=\"map\"></div>
            </div>
        </div>
        <footer id=\"_template_footer\">
            ";
        // line 46
        $this->loadTemplate("HarasBundle::footer.html.twig", "@Haras/contact.html.twig", 46)->display($context);
        // line 47
        echo "        </footer>

        <script>
            function initMap() {
                var compiegne = {lat: 49.416672, lng: 2.83333};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: compiegne
                });

                var contentString =
                    '<div id=\"content\">' +
                        '<div id=\"siteNotice\">' +
                        '</div>' +
                        '<h4 id=\"firstHeading\" class=\"firstHeading\">";
        // line 61
        echo twig_escape_filter($this->env, ($context["contactName"] ?? null), "html", null, true);
        echo "</h4>' +
                        '<div id=\"bodyContent\">' +
                            '<p><b>";
        // line 63
        echo twig_escape_filter($this->env, ($context["contactAddress"] ?? null), "html", null, true);
        echo "</b></p>' +
                            '<p>";
        // line 64
        echo twig_escape_filter($this->env, ($context["contactAddressLocation"] ?? null), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, ($context["contactAddressPostalCode"] ?? null), "html", null, true);
        echo "</p>' +
                            '<p><b>Tel:</b><p>";
        // line 65
        echo twig_escape_filter($this->env, ($context["contactTel"] ?? null), "html", null, true);
        echo "</p></p>' +
                        '</div>' +
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var marker = new google.maps.Marker({
                    position: compiegne,
                    map: map,
                    title: 'compiegne'
                });
                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                });
            }
        </script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAr10cIoZKJLUnRzAcZQmd9rFNSjRmWLCk&callback=initMap\"
                async defer></script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Haras/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 65,  154 => 64,  150 => 63,  145 => 61,  129 => 47,  127 => 46,  117 => 39,  113 => 37,  109 => 35,  107 => 34,  102 => 32,  97 => 30,  93 => 29,  89 => 28,  83 => 25,  79 => 24,  75 => 23,  69 => 20,  65 => 19,  61 => 18,  56 => 16,  50 => 13,  46 => 11,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Haras/contact.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/HarasBundle/Resources/views/contact.html.twig");
    }
}
