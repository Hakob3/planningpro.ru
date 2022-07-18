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

/* admin/adminLayout.html.twig */
class __TwigTemplate_fe2356d287cf5ceb0f96cbb19a00de95 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminLayout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"/plugins/fontawesome-free/css/all.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel=\"stylesheet\" href=\"/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"/plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"/plugins/jqvmap/jqvmap.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"/dist/css/adminlte.min.css\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"/plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"/plugins/daterangepicker/daterangepicker.css\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"/plugins/summernote/summernote-bs4.min.css\">


    ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">

    <!-- Preloader -->
    <div class=\"preloader flex-column justify-content-center align-items-center\">
        <img class=\"animation__shake\" src=\"/dist/img/AdminLTELogo.png\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
    </div>



    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"#\" class=\"brand-link\">
            <img src=\"/dist/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class=\"nav-item menu-open\">
                        <a href=\"#\" class=\"nav-link active\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>

                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/admin\" class=\"nav-link active\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Список</p>
                                </a>
                            </li>=
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0\">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100)) {
            // line 101
            echo "                                <AmpContent>
                                    <li><a class=\"nav-link\" href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a></li>
                                </AmpContent>
                            ";
        }
        // line 105
        echo "                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">


                ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2014-2022</strong>
        All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"/plugins/jquery/jquery.min.js\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"/plugins/jquery-ui/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- ChartJS -->
<script src=\"/plugins/chart.js/Chart.min.js\"></script>
<!-- Sparkline -->
<script src=\"/plugins/sparklines/sparkline.js\"></script>
<!-- JQVMap -->
<script src=\"/plugins/jqvmap/jquery.vmap.min.js\"></script>
<script src=\"/plugins/jqvmap/maps/jquery.vmap.usa.js\"></script>
<!-- jQuery Knob Chart -->
<script src=\"/plugins/jquery-knob/jquery.knob.min.js\"></script>
<!-- daterangepicker -->
<script src=\"/plugins/moment/moment.min.js\"></script>
<script src=\"/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
<!-- Summernote -->
<script src=\"/plugins/summernote/summernote-bs4.min.js\"></script>
<!-- overlayScrollbars -->
<script src=\"/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"/dist/js/adminlte.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"/dist/js/demo.js\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"/dist/js/pages/dashboard.js\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Admin!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 117,  296 => 35,  286 => 34,  273 => 32,  263 => 31,  244 => 7,  179 => 118,  177 => 117,  163 => 105,  157 => 102,  154 => 101,  152 => 100,  87 => 37,  84 => 34,  82 => 31,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}Admin!{% endblock %}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"/plugins/fontawesome-free/css/all.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel=\"stylesheet\" href=\"/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"/plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"/plugins/jqvmap/jqvmap.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"/dist/css/adminlte.min.css\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"/plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"/plugins/daterangepicker/daterangepicker.css\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"/plugins/summernote/summernote-bs4.min.css\">


    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}

</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">

    <!-- Preloader -->
    <div class=\"preloader flex-column justify-content-center align-items-center\">
        <img class=\"animation__shake\" src=\"/dist/img/AdminLTELogo.png\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
    </div>



    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"#\" class=\"brand-link\">
            <img src=\"/dist/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class=\"nav-item menu-open\">
                        <a href=\"#\" class=\"nav-link active\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>

                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/admin\" class=\"nav-link active\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Список</p>
                                </a>
                            </li>=
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0\">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            {% if app.user %}
                                <AmpContent>
                                    <li><a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Logout</a></li>
                                </AmpContent>
                            {% endif %}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">


                {% block body %}{% endblock %}
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2014-2022</strong>
        All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"/plugins/jquery/jquery.min.js\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"/plugins/jquery-ui/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- ChartJS -->
<script src=\"/plugins/chart.js/Chart.min.js\"></script>
<!-- Sparkline -->
<script src=\"/plugins/sparklines/sparkline.js\"></script>
<!-- JQVMap -->
<script src=\"/plugins/jqvmap/jquery.vmap.min.js\"></script>
<script src=\"/plugins/jqvmap/maps/jquery.vmap.usa.js\"></script>
<!-- jQuery Knob Chart -->
<script src=\"/plugins/jquery-knob/jquery.knob.min.js\"></script>
<!-- daterangepicker -->
<script src=\"/plugins/moment/moment.min.js\"></script>
<script src=\"/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
<!-- Summernote -->
<script src=\"/plugins/summernote/summernote-bs4.min.js\"></script>
<!-- overlayScrollbars -->
<script src=\"/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"/dist/js/adminlte.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"/dist/js/demo.js\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"/dist/js/pages/dashboard.js\"></script>
</body>
</html>
", "admin/adminLayout.html.twig", "/var/www/u0931270/data/www/planningpro.ru/templates/admin/adminLayout.html.twig");
    }
}
