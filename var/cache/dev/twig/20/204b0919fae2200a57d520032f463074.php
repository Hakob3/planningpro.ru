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

/* security/login.html.twig */
class __TwigTemplate_1eda7644120068e2ceb83c21b60efb39 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 ml-md-auto\">
                <div class=\"\">
                    <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px;\">
                        <div class=\"card-body\">
                            <form class=\"form-horizontal\" role=\"form\" method=\"post\">
                                ";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "                                <AmpContent>
                                    <div class=\"alert alert-danger\">
                                        ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            echo "
                                    </div>
                                    </NonAmpContent>
                                    ";
        }
        // line 18
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "                                    <AmpContent>
                                        <div class=\"mb-3\">
                                            You are logged in as ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo ",
                                            <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                        </div>
                                        </NonAmpContent>
                                        ";
        }
        // line 26
        echo "                                            <div class=\"card-header mb-3\">Please sign in</div>
                                            <div class=\"form-group\">
                                                <label for=\"email\" class=\"col-md-4 control-label\"
                                                >E-Mail Address</label
                                                >
                                                <div class=\"col-md-12\">
                                                    <input
                                                            id=\"inputEmail\"
                                                            type=\"email\"
                                                            class=\"form-control\"
                                                            name=\"email\"
                                                            value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\"
                                                            required
                                                            autofocus
                                                    />
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"password\" class=\"col-md-4 control-label\"
                                                >Password</label
                                                >
                                                <div class=\"col-md-12\">
                                                    <input
                                                            id=\"inputPassword\"
                                                            type=\"password\"
                                                            class=\"form-control\"
                                                            name=\"password\"
                                                            required
                                                    />
                                                </div>
                                            </div>
                                            <input
                                                    type=\"hidden\"
                                                    name=\"_csrf_token\"
                                                    value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                            />
                                            <div class=\"form-group\">
                                                <div class=\"col-md-12\">
                                                    <button type=\"submit\" class=\"btn btn-primary\">
                                                        <i class=\"fa fa-btn fa-sign-in\"></i> Login
                                                    </button>
                                                </div>
                                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 60,  141 => 37,  128 => 26,  121 => 22,  117 => 21,  113 => 19,  110 => 18,  103 => 14,  99 => 12,  97 => 11,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Log in!{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 ml-md-auto\">
                <div class=\"\">
                    <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px;\">
                        <div class=\"card-body\">
                            <form class=\"form-horizontal\" role=\"form\" method=\"post\">
                                {% if error %}
                                <AmpContent>
                                    <div class=\"alert alert-danger\">
                                        {{ error.messageKey|trans(error.messageData, 'security') }}
                                    </div>
                                    </NonAmpContent>
                                    {% endif %}
                                    {% if app.user %}
                                    <AmpContent>
                                        <div class=\"mb-3\">
                                            You are logged in as {{ app.user.name }},
                                            <a href=\"{{ path('app_logout') }}\">Logout</a>
                                        </div>
                                        </NonAmpContent>
                                        {% endif %}
                                            <div class=\"card-header mb-3\">Please sign in</div>
                                            <div class=\"form-group\">
                                                <label for=\"email\" class=\"col-md-4 control-label\"
                                                >E-Mail Address</label
                                                >
                                                <div class=\"col-md-12\">
                                                    <input
                                                            id=\"inputEmail\"
                                                            type=\"email\"
                                                            class=\"form-control\"
                                                            name=\"email\"
                                                            value=\"{{ last_username }}\"
                                                            required
                                                            autofocus
                                                    />
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"password\" class=\"col-md-4 control-label\"
                                                >Password</label
                                                >
                                                <div class=\"col-md-12\">
                                                    <input
                                                            id=\"inputPassword\"
                                                            type=\"password\"
                                                            class=\"form-control\"
                                                            name=\"password\"
                                                            required
                                                    />
                                                </div>
                                            </div>
                                            <input
                                                    type=\"hidden\"
                                                    name=\"_csrf_token\"
                                                    value=\"{{ csrf_token('authenticate') }}\"
                                            />
                                            <div class=\"form-group\">
                                                <div class=\"col-md-12\">
                                                    <button type=\"submit\" class=\"btn btn-primary\">
                                                        <i class=\"fa fa-btn fa-sign-in\"></i> Login
                                                    </button>
                                                </div>
                                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "security/login.html.twig", "/var/www/u0931270/data/www/planningpro.ru/templates/security/login.html.twig");
    }
}
