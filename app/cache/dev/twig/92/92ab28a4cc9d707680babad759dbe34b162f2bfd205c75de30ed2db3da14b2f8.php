<?php

/* MobileDetectBundle:Collector:device.html.twig */
class __TwigTemplate_1ce7dd5c2c9a467e7a5137fcc73c13155caee70501a9b8e4bf875494976454bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "MobileDetectBundle:Collector:device.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69d43ff0f04dc5bb8106e5c4490e415e58069846b8fba95dc0a263abb9622751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d43ff0f04dc5bb8106e5c4490e415e58069846b8fba95dc0a263abb9622751->enter($__internal_69d43ff0f04dc5bb8106e5c4490e415e58069846b8fba95dc0a263abb9622751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileDetectBundle:Collector:device.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69d43ff0f04dc5bb8106e5c4490e415e58069846b8fba95dc0a263abb9622751->leave($__internal_69d43ff0f04dc5bb8106e5c4490e415e58069846b8fba95dc0a263abb9622751_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_81e7da10e9f675fe7caef62eaa363f697162b5bdebe0f28410bc49616d6c88e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e7da10e9f675fe7caef62eaa363f697162b5bdebe0f28410bc49616d6c88e1->enter($__internal_81e7da10e9f675fe7caef62eaa363f697162b5bdebe0f28410bc49616d6c88e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "
    ";
        // line 5
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 6
        echo "    ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) > 1)) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
                    <path fill=\"#AAAAAA\"
                          d=\"m33.975 95h32.05c5.565 0 10.08-4.279 10.08-9.569v-70.855c0-5.285-4.513-9.576-10.07-9.576h-32.05c-5.564 0-10.08 4.291-10.08 9.576v70.854c0 5.288 4.513 9.57 10.08 9.57m16.03-3.257c-2.493 0-4.506-2.02-4.506-4.498 0-2.489 2.01-4.502 4.506-4.502 2.487 0 4.494 2.01 4.494 4.502 0 2.481-2.01 4.498-4.494 4.498m-6.868-80.911h13.727c.556 0 1.01.383 1.01.852 0 .471-.452.854-1.01.854h-13.727c-.55 0-1.01-.383-1.01-.854-.0001-.469.454-.852 1.01-.852m-15.289 10.798c0-.794.675-1.438 1.508-1.438h41.29c.835 0 1.507.641 1.507 1.438v56.49c0 .791-.672 1.433-1.507 1.433h-41.29c-.833 0-1.508-.642-1.508-1.433v-56.49\"/>
                </svg>
            <span class=\"sf-toolbar-value\">View: ";
            // line 12
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "currentView", array())), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 14
            echo "        ";
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <span>Switch view:</span>
            </div>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "views", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["viewData"]) {
                // line 22
                echo "                ";
                $context["viewLink"] = (($this->getAttribute($context["viewData"], "isCurrent", array())) ? ("<span class=\"sf-toolbar-status sf-toolbar-status-green\">current</span>") : ((("<span><a href=\"" . $this->getAttribute($context["viewData"], "link", array())) . "\">Use this view</a></span>")));
                // line 23
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["viewData"], "label", array()), "html", null, true);
                echo "</b>
                    ";
                // line 25
                echo ($context["viewLink"] ?? $this->getContext($context, "viewLink"));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['viewData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "        ";
            // line 31
            echo "        ";
            ob_start();
            // line 32
            echo "            <span>
            <img width=\"14\" height=\"28\" alt=\"Device\"
                 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABbklEQVRYR+2XMUvDQBTH37ujS5Eu7QdwVNMuFhykDQEnB2NCJwcRHISCiyDiImRzcS9OuqpIW7+AMQ20g1tSdNVP4NYi7T1JcSo1NamQInfrvXf/3/1ueYeQ8MKE82H+AZY2zGzqk3YIIRfFFgL2CaDpO/WXsL5QA0E479MzMnwEpPcoACBgQTCxi4xXunbd/ak3FKBQNg4JcNVv1fcjhX8XK6q5h4J0321UYgHkVcMKGn2nYa3XPJsB2L8BGQItcsDrj5szICGsrvOgzQxQqnmWWy2MgKatUs0bBUoAaUAakAakAWlAGvhfBhIfSKYNIZP285qh/dlENClAKW+vIGIHGV/z7PvX8ZqZAQqqeUqCcr7bOJ4EUCxupftpfpAZpC7b7bveeI2i6jojrHqt5mbMmdBcFjC0EfgJMnqL8gwkRAaBnSPShffUvIoFEDQpmlnCAR0RE9koAIywBwxuw8KD8+b/axbl1nFqEzfwBYtWrTCbYUHuAAAAAElFTkSuQmCC\">
            View: ";
            // line 35
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "currentView", array())), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 38
            echo "        ";
            ob_start();
            // line 39
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-device-detector-switcher\">
                    <thead>
                    <tr>
                        <th>View</th>
                        <th>Switch to...</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "views", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["viewData"]) {
                // line 52
                echo "                        ";
                $context["viewLink"] = (($this->getAttribute($context["viewData"], "isCurrent", array())) ? ("<em>current</em>") : ((("<a href=\"" . $this->getAttribute($context["viewData"], "link", array())) . "\">Use this view</a>")));
                // line 53
                echo "                        <tr>
                            <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["viewData"], "label", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 55
                echo ($context["viewLink"] ?? $this->getContext($context, "viewLink"));
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['viewData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 62
            echo "        <style type=\"text/css\">
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher {
                width: 100%;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th,
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher td {
                border-bottom: 1px solid #ddd;
                padding: 0 4px;
                color: #2f2f2f;
                background-color: #fff;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th {
                background-color: #eee;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher a {
                color: #00f;
            }
        </style>
    ";
        }
        // line 84
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "MobileDetectBundle:Collector:device.html.twig", 84)->display(array_merge($context, array("link" => false)));
        
        $__internal_81e7da10e9f675fe7caef62eaa363f697162b5bdebe0f28410bc49616d6c88e1->leave($__internal_81e7da10e9f675fe7caef62eaa363f697162b5bdebe0f28410bc49616d6c88e1_prof);

    }

    public function getTemplateName()
    {
        return "MobileDetectBundle:Collector:device.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 84,  164 => 62,  158 => 58,  149 => 55,  145 => 54,  142 => 53,  139 => 52,  135 => 51,  121 => 39,  118 => 38,  112 => 35,  107 => 32,  104 => 31,  102 => 30,  99 => 29,  96 => 28,  87 => 25,  83 => 24,  80 => 23,  77 => 22,  73 => 21,  65 => 15,  62 => 14,  57 => 12,  51 => 8,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}

    {% set profiler_markup_version = profiler_markup_version|default(1) %}
    {% if profiler_markup_version > 1 %}
        {% set icon %}
            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
                    <path fill=\"#AAAAAA\"
                          d=\"m33.975 95h32.05c5.565 0 10.08-4.279 10.08-9.569v-70.855c0-5.285-4.513-9.576-10.07-9.576h-32.05c-5.564 0-10.08 4.291-10.08 9.576v70.854c0 5.288 4.513 9.57 10.08 9.57m16.03-3.257c-2.493 0-4.506-2.02-4.506-4.498 0-2.489 2.01-4.502 4.506-4.502 2.487 0 4.494 2.01 4.494 4.502 0 2.481-2.01 4.498-4.494 4.498m-6.868-80.911h13.727c.556 0 1.01.383 1.01.852 0 .471-.452.854-1.01.854h-13.727c-.55 0-1.01-.383-1.01-.854-.0001-.469.454-.852 1.01-.852m-15.289 10.798c0-.794.675-1.438 1.508-1.438h41.29c.835 0 1.507.641 1.507 1.438v56.49c0 .791-.672 1.433-1.507 1.433h-41.29c-.833 0-1.508-.642-1.508-1.433v-56.49\"/>
                </svg>
            <span class=\"sf-toolbar-value\">View: {{ collector.currentView | capitalize }}</span>
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <span>Switch view:</span>
            </div>
            {% for viewData in collector.views %}
                {% set viewLink = viewData.isCurrent ? '<span class=\"sf-toolbar-status sf-toolbar-status-green\">current</span>' : '<span><a href=\"' ~ viewData.link ~ '\">Use this view</a></span>' %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ viewData.label }}</b>
                    {{ viewLink | raw }}
                </div>
            {% endfor %}
        {% endset %}
    {% else %}
        {# Fallback version for symfony versions < 2.8 #}
        {% set icon %}
            <span>
            <img width=\"14\" height=\"28\" alt=\"Device\"
                 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABbklEQVRYR+2XMUvDQBTH37ujS5Eu7QdwVNMuFhykDQEnB2NCJwcRHISCiyDiImRzcS9OuqpIW7+AMQ20g1tSdNVP4NYi7T1JcSo1NamQInfrvXf/3/1ueYeQ8MKE82H+AZY2zGzqk3YIIRfFFgL2CaDpO/WXsL5QA0E479MzMnwEpPcoACBgQTCxi4xXunbd/ak3FKBQNg4JcNVv1fcjhX8XK6q5h4J0321UYgHkVcMKGn2nYa3XPJsB2L8BGQItcsDrj5szICGsrvOgzQxQqnmWWy2MgKatUs0bBUoAaUAakAakAWlAGvhfBhIfSKYNIZP285qh/dlENClAKW+vIGIHGV/z7PvX8ZqZAQqqeUqCcr7bOJ4EUCxupftpfpAZpC7b7bveeI2i6jojrHqt5mbMmdBcFjC0EfgJMnqL8gwkRAaBnSPShffUvIoFEDQpmlnCAR0RE9koAIywBwxuw8KD8+b/axbl1nFqEzfwBYtWrTCbYUHuAAAAAElFTkSuQmCC\">
            View: {{ collector.currentView | capitalize }}
            </span>
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-device-detector-switcher\">
                    <thead>
                    <tr>
                        <th>View</th>
                        <th>Switch to...</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for viewData in collector.views %}
                        {% set viewLink = viewData.isCurrent ? '<em>current</em>' : '<a href=\"' ~ viewData.link ~ '\">Use this view</a>' %}
                        <tr>
                            <td>{{ viewData.label }}</td>
                            <td>{{ viewLink | raw }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endset %}
        <style type=\"text/css\">
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher {
                width: 100%;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th,
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher td {
                border-bottom: 1px solid #ddd;
                padding: 0 4px;
                color: #2f2f2f;
                background-color: #fff;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th {
                background-color: #eee;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher a {
                color: #00f;
            }
        </style>
    {% endif %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "MobileDetectBundle:Collector:device.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle/Resources/views/Collector/device.html.twig");
    }
}
