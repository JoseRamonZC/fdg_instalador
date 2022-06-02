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

/* base.html.twig */
class __TwigTemplate_f2d2dfe0f6ecc09a762eedad1385bcf9a2e0ded0eab51533ebd04de5917cc676 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
    </head>
    <body>
      ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "        <footer>
        Página de práctica I.E.S. Leopoldo Queipo
      </footer>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Guitarrón";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrapC2.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylesheet.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        <nav class=\"navbar navbar-expand-lg navbar-light\">
          <div class=\"container-fluid\">
            <a class=\"navbar-brand mr-4\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">Guitarrón</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item ml-3\">
                ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26) == "RegistrarPost")) {
                // line 27
                echo "                  <a class=\"nav-link nv active\" aria-current=\"page\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("RegistrarPost");
                echo "\">Crear Post</a>
                  ";
            } else {
                // line 29
                echo "                  <a class=\"nav-link nv\" aria-current=\"page\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("RegistrarPost");
                echo "\">Crear Post</a>
                  ";
            }
            // line 31
            echo "                </li>
                <li class=\"nav-item\">
                ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 33), "get", [0 => "_route"], "method", false, false, false, 33) == "misPosts")) {
                // line 34
                echo "                  <a class=\"nav-link nv ml-3 mr-5 active\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("misPosts");
                echo "\">Mis Posts</a>
                  ";
            } else {
                // line 36
                echo "                  <a class=\"nav-link nv ml-3 mr-3\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("misPosts");
                echo "\">Mis Posts</a>
                  ";
            }
            // line 38
            echo "                </li>

                ";
            // line 41
            echo "
                  
                    <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><button class=\"boton-nav nv\">Logout</button></a>
                  ";
        } else {
            // line 45
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><button class=\"boton-nav nv mr-3\">Login</button></a>
                    <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registro");
            echo "\"><button class=\"boton-nav nv mr-3\">Registrate</button></a>
                  ";
        }
        // line 48
        echo "
                ";
        // line 50
        echo "                
                ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "                  <div class=\"btn-group\" role=\"group\">
                        <button type=\"button\" class=\"btn-primary ml-3\" onclick=\"window.location.href='";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_posts_crud_index");
            echo "'\">Posts</button>
                        <button type=\"button\" class=\"btn-primary\" onclick=\"window.location.href='";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_crud_index");
            echo "'\">🙍Usuarios</button>
                  </div>
                ";
        }
        // line 57
        echo "            </div>
          </div>
        </nav> 
          <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 61,  194 => 60,  189 => 57,  183 => 54,  179 => 53,  176 => 52,  174 => 51,  171 => 50,  168 => 48,  163 => 46,  158 => 45,  153 => 43,  149 => 41,  145 => 38,  139 => 36,  133 => 34,  131 => 33,  127 => 31,  121 => 29,  115 => 27,  112 => 26,  110 => 25,  100 => 18,  96 => 16,  92 => 15,  86 => 10,  81 => 9,  77 => 8,  70 => 5,  61 => 64,  59 => 15,  54 => 12,  51 => 8,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/html/fdg_instalador/proyecto/templates/base.html.twig");
    }
}
