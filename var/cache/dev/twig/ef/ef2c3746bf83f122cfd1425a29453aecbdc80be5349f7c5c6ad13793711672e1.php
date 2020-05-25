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

/* superAdmin/teamsDivisions.html.twig */
class __TwigTemplate_7d2d135475476064bf1a058382aebc33b6bf8bafef9e3eb18352214012d73fba extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "superAdmin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superAdmin/teamsDivisions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superAdmin/teamsDivisions.html.twig"));

        $this->parent = $this->loadTemplate("superAdmin/base.html.twig", "superAdmin/teamsDivisions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-12 row justify-content-center mx-auto max-resolution\">
        <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-center  row pb-3\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["divisions"]) || array_key_exists("divisions", $context) ? $context["divisions"] : (function () { throw new RuntimeError('Variable "divisions" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["division"]) {
            // line 6
            echo "                <div class=\"col-lg-4 col-sm-11 row m-0 \">
                    <div class=\"col-lg-12  col-sm-9 col-md-6 country-container text-center mt-3 mx-auto\">
                        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("superAdminTeams", ["id" => twig_get_attribute($this->env, $this->source, $context["division"], "id", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\" class=\"m-0 \">
                            <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["division"], "Image", [], "any", false, false, false, 9))), "html", null, true);
            echo "\" alt=\"\" class=\"country-img m-0 mt-4\">
                            <h1 class=\"country-text mt-1 ml-2 text-left mb-2 mt-3\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "Name", [], "any", false, false, false, 10), "html", null, true);
            echo "</h1>
                        </a>

                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['division'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "superAdmin/teamsDivisions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 17,  88 => 10,  84 => 9,  80 => 8,  76 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'superAdmin/base.html.twig' %}
{% block body %}
    <div class=\"col-12 row justify-content-center mx-auto max-resolution\">
        <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-center  row pb-3\">
            {% for division in divisions%}
                <div class=\"col-lg-4 col-sm-11 row m-0 \">
                    <div class=\"col-lg-12  col-sm-9 col-md-6 country-container text-center mt-3 mx-auto\">
                        <a href=\"{{ path(\"superAdminTeams\", {id: division.id}) }}\" class=\"m-0 \">
                            <img src=\"{{asset(\"images/\" ~ division.Image)}}\" alt=\"\" class=\"country-img m-0 mt-4\">
                            <h1 class=\"country-text mt-1 ml-2 text-left mb-2 mt-3\">{{ division.Name }}</h1>
                        </a>

                    </div>
                </div>

            {% endfor %}

        </div>
    </div>

{% endblock %}", "superAdmin/teamsDivisions.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\superAdmin\\teamsDivisions.html.twig");
    }
}
