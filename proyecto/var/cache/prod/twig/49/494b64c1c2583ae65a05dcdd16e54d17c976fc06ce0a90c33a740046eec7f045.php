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

/* dashboard/index.html.twig */
class __TwigTemplate_ba0d3f50f95b2fb88ebd0d58042312e60eeac3a88f8bef9274e1d1f15b1f1627 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Dashboard
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 cursor\">
             ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            echo "                <div class=\"bg-white rounded p-3 my-3\"  onclick=\"window.location.href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verPost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "'\">
                    <div class=\"d-flex bd-highlight\">
                        <div class=\"p-2 flex-grow-1 bd-highlight\">
                            <h3>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titulo", [], "any", false, false, false, 15), "html", null, true);
            echo "</h3>
                            <div class=\"my-3 bg-yellow\"> <i class=\"fa fa-user\"></i><strong> Creado por ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "nombre", [], "any", false, false, false, 16), "html", null, true);
            echo "</strong></div>
                            <div class=\"bg-green\"><i class=\"far fa-clock\"></i> <strong>Fecha de publicación: ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "fecha_publicacion", [], "any", false, false, false, 17)), "html", null, true);
            echo "</strong></div>
                        </div>
                        <div class=\"p-2 bd-highlight\">
                            <div class=\"align-self-center\">
                                <img alt=\"foto de usuario\" class=\"rounded\" src=\"uploads/fotos/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "foto", [], "any", false, false, false, 21), "html", null, true);
            echo "\" width=\"150px\">
                            </div>
                        </div>
                    </div>
                </div>
                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
            </div>
        </div>
    </div>
    <div class=\"d-flex justify-content-center\">
        <div class=\"navigation\">
            ";
        // line 34
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  106 => 28,  93 => 21,  86 => 17,  82 => 16,  78 => 15,  71 => 12,  67 => 11,  60 => 7,  56 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/index.html.twig", "/var/www/html/fdg_instalador/proyecto/templates/dashboard/index.html.twig");
    }
}
