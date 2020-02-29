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

/* admin/coacheAction.html.twig */
class __TwigTemplate_b8f83f286b2b0f5928d278776ff880d6a0023ec7bc82d3eea54f5aa1b9f2e0c0 extends \Twig\Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coacheAction.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coacheAction.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/coacheAction.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-12 justify-content-center text-center\">
                ";
        // line 7
        if (((twig_get_attribute($this->env, $this->source, (isset($context["coache"]) || array_key_exists("coache", $context) ? $context["coache"] : (function () { throw new RuntimeError('Variable "coache" does not exist.', 7, $this->source); })()), "Image", [], "any", false, false, false, 7) == null) || (twig_get_attribute($this->env, $this->source, (isset($context["coache"]) || array_key_exists("coache", $context) ? $context["coache"] : (function () { throw new RuntimeError('Variable "coache" does not exist.', 7, $this->source); })()), "Image", [], "any", false, false, false, 7) == " "))) {
            // line 8
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1-white2.png"), "html", null, true);
            echo "\" alt=\"\" class=\"coache_image_profile\">
                ";
        } else {
            // line 10
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["coache"]) || array_key_exists("coache", $context) ? $context["coache"] : (function () { throw new RuntimeError('Variable "coache" does not exist.', 10, $this->source); })()), "Image", [], "any", false, false, false, 10))), "html", null, true);
            echo "\" alt=\"\" class=\"\">
                ";
        }
        // line 12
        echo "            </div>

            <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["coache"]) || array_key_exists("coache", $context) ? $context["coache"] : (function () { throw new RuntimeError('Variable "coache" does not exist.', 14, $this->source); })()), "UserId", [], "any", false, false, false, 14), "Name", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["coache"]) || array_key_exists("coache", $context) ? $context["coache"] : (function () { throw new RuntimeError('Variable "coache" does not exist.', 14, $this->source); })()), "UserId", [], "any", false, false, false, 14), "fName", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/coacheAction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 14,  87 => 12,  81 => 10,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{%  block body %}
    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-12 justify-content-center text-center\">
                {% if coache.Image == null or coache.Image == ' ' %}
                    <img src=\"{{asset('images/user1-white2.png')}}\" alt=\"\" class=\"coache_image_profile\">
                {% else %}
                    <img src=\"{{asset('images/'~ coache.Image )}}\" alt=\"\" class=\"\">
                {% endif %}
            </div>

            <p>{{ coache.UserId.Name }} {{ coache.UserId.fName }}</p>
        </div>
    </div>
{% endblock %}", "admin/coacheAction.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\admin\\coacheAction.html.twig");
    }
}
