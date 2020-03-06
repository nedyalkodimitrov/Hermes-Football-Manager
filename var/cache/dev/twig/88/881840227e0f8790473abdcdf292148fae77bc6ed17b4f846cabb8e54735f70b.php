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

/* coaches/base.html.twig */
class __TwigTemplate_1ba0e038e7ecc29308e986c60fe024388ca22f780d0316894580b267a2eaf627 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'navLinks' => [$this, 'block_navLinks'],
            'navContent' => [$this, 'block_navContent'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/base.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coaches/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "
    <link rel=\"stylesheet\" href=\"  ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin/topPlayerCard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coachStyle.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_navLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navLinks"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navLinks"));

        // line 9
        echo "    <a class=\"ml-2 na navbar-link current-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingView");
        echo "\">Начална страница</a>
    <a class=\"ml-2 na navbar-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingView");
        echo "\">Отбор</a>
    <a class=\"ml-2 na navbar-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingCalendarActionView");
        echo "\">Тренировъчен план</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_navContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navContent"));

        // line 14
        echo "        <div class=\"row justify-content-end\">
        <i class=\"far fa-envelope\"></i>
    </div>
    <div class=\"mt-md-2 mt-sm-2 row  col-sm-6 col-md-6  justify-content-end\">
        <p class=\"nav-username \">Иван Драганов</p>
        <div class=\" \">
            ";
        // line 20
        if ((((isset($context["profile_img"]) || array_key_exists("profile_img", $context) ? $context["profile_img"] : (function () { throw new RuntimeError('Variable "profile_img" does not exist.', 20, $this->source); })()) == "") || ((isset($context["profile_img"]) || array_key_exists("profile_img", $context) ? $context["profile_img"] : (function () { throw new RuntimeError('Variable "profile_img" does not exist.', 20, $this->source); })()) == null))) {
            // line 21
            echo "                <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coache_settings");
            echo "\" class=\"profile_pic_a \"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"user-nav-profile-img\"></a>
            ";
        } else {
            // line 23
            echo "                <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coache_settings");
            echo "\" class=\"profile_pic_a \"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["profile_img"]) || array_key_exists("profile_img", $context) ? $context["profile_img"] : (function () { throw new RuntimeError('Variable "profile_img" does not exist.', 23, $this->source); })()))), "html", null, true);
            echo "\" alt=\"\" class=\"user-nav-profile-img\"></a>
            ";
        }
        // line 25
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coaches/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 25,  149 => 23,  141 => 21,  139 => 20,  131 => 14,  121 => 13,  109 => 11,  105 => 10,  100 => 9,  90 => 8,  77 => 5,  73 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block style %}

    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/admin/topPlayerCard.css\") }}\">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/coachStyle.css\") }}\">

{% endblock %}
{% block navLinks %}
    <a class=\"ml-2 na navbar-link current-item\" href=\"{{ path(\"trainingView\") }}\">Начална страница</a>
    <a class=\"ml-2 na navbar-link\" href=\"{{ path(\"trainingView\") }}\">Отбор</a>
    <a class=\"ml-2 na navbar-link\" href=\"{{ path(\"trainingCalendarActionView\") }}\">Тренировъчен план</a>
{% endblock %}
{% block navContent %}
        <div class=\"row justify-content-end\">
        <i class=\"far fa-envelope\"></i>
    </div>
    <div class=\"mt-md-2 mt-sm-2 row  col-sm-6 col-md-6  justify-content-end\">
        <p class=\"nav-username \">Иван Драганов</p>
        <div class=\" \">
            {% if profile_img == ''  or profile_img == null %}
                <a href=\" {{ path(\"coache_settings\") }}\" class=\"profile_pic_a \"><img src=\"{{asset(\"images/user1.png\")}}\" alt=\"\" class=\"user-nav-profile-img\"></a>
            {% else %}
                <a href=\" {{ path(\"coache_settings\") }}\" class=\"profile_pic_a \"><img src=\"{{asset(\"images/\" ~ profile_img)}}\" alt=\"\" class=\"user-nav-profile-img\"></a>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "coaches/base.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\base.html.twig");
    }
}
