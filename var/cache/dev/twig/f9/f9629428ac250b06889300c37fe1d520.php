<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/test.html.twig */
class __TwigTemplate_f9a87fa75cc430138b0ce0f4486e5a87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/test.html.twig"));

        $this->parent = $this->loadTemplate("admin/adminLayout.html.twig", "admin/test.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "        <div class=\"example-wrapper\">

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Records</h3>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body table-responsive p-0\">
                    <table class=\"table table-hover text-nowrap\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Text</th>
                            <th>Images</th>
                            <th>Color</th>
                            <th>Geometry</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 28
                echo "                            <tr>
                                <td>
                                    <a href=\"record/";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\">
                                        ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "
                                    </a>
                                </td>
                                <td>
                                    <a href=\"record/";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 35), "html", null, true);
                echo "\">
                                        ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "email", [], "any", false, false, false, 36), "html", null, true);
                echo "
                                    </a>
                                </td>
                                <td>
                                    <a href=\"record/";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
                                        ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "text", [], "any", false, false, false, 41), "html", null, true);
                echo "
                                    </a>
                                </td>
                                <td>
                                    <a href=\"record/";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\">
                                        ";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, false, 46), "html", null, true);
                echo "
                                    </a>
                                </td>
                                <td>
                                    <a href=\"record/";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 50), "html", null, true);
                echo "\">
                                        ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "color", [], "any", false, false, false, 51), "html", null, true);
                echo "
                                    </a>
                                </td>
                                <td>
                                    <a href=\"record/";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo "\">
                                        ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "geometry", [], "any", false, false, false, 56), "html", null, true);
                echo "
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    ";
        } else {
            // line 68
            echo "        <ul class=\"nav navbar-nav navbar-right\">
            <NonAmpContent>
                ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70) == null)) {
                // line 71
                echo "                    <li><a class=\"nav-link\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\">Login</a></li>
                ";
            }
            // line 73
            echo "                <li>
                    <a class=\"nav-link\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a>
                </li>
            </NonAmpContent>
        </ul>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 74,  212 => 73,  206 => 71,  204 => 70,  200 => 68,  191 => 61,  180 => 56,  176 => 55,  169 => 51,  165 => 50,  158 => 46,  154 => 45,  147 => 41,  143 => 40,  136 => 36,  132 => 35,  125 => 31,  121 => 30,  117 => 28,  113 => 27,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/adminLayout.html.twig' %}

{% block title %}Admin{% endblock %}

{% block body %}
    {% if app.user %}
        <div class=\"example-wrapper\">

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Records</h3>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body table-responsive p-0\">
                    <table class=\"table table-hover text-nowrap\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Text</th>
                            <th>Images</th>
                            <th>Color</th>
                            <th>Geometry</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for record in records %}
                            <tr>
                                <td>
                                    <a href=\"record/{{ record.id }}\">
                                        {{ record.id }}
                                    </a>
                                </td>
                                <td>
                                    <a href=\"record/{{ record.id }}\">
                                        {{ record.email }}
                                    </a>
                                </td>
                                <td>
                                    <a href=\"record/{{ record.id }}\">
                                        {{ record.text }}
                                    </a>
                                </td>
                                <td>
                                    <a href=\"record/{{ record.id }}\">
                                        {{ record.image }}
                                    </a>
                                </td>
                                <td>
                                    <a href=\"record/{{ record.id }}\">
                                        {{ record.color }}
                                    </a>
                                </td>
                                <td>
                                    <a href=\"record/{{ record.id }}\">
                                        {{ record.geometry }}
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    {% else %}
        <ul class=\"nav navbar-nav navbar-right\">
            <NonAmpContent>
                {% if app.user == null %}
                    <li><a class=\"nav-link\" href=\"{{ path('app_login') }}\">Login</a></li>
                {% endif %}
                <li>
                    <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Register</a>
                </li>
            </NonAmpContent>
        </ul>
    {% endif %}
{% endblock %}", "admin/test.html.twig", "/var/www/u0931270/data/www/planningpro.ru/templates/admin/test.html.twig");
    }
}
