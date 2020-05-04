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

/* player/playerBaseTemplate.html.twig */
class __TwigTemplate_fae9cfe2a968e3cc2d9ffe9f759f3c1820434445d660147f90cba20edbf6b199 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/playerBaseTemplate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/playerBaseTemplate.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "player/playerBaseTemplate.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/player/playerStyle.css"), "html", null, true);
        echo "    \">
    <link rel=\"stylesheet\" href=\"  ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coachStyle.css"), "html", null, true);
        echo "    \">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_navLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navLinks"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navLinks"));

        // line 7
        echo "    <a class=\"current-item ml-2 navbar-link\" href=\"#\">Начална страница </a>
    <a class=\"ml-2 na navbar-link\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerTraining");
        echo "\">Тренировки</a>
    <a class=\"ml-2 na navbar-link\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerTraining");
        echo "\">Статистики</a>
    <a class=\"ml-2 na navbar-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerTraining");
        echo "\">Заявки</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_navContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navContent"));

        // line 13
        echo "    <div class=\" mt-md-2 mt-sm-2 row text-sm-left text-md-left col-sm-6 col-md-6 justify-content-sm-left justify-content-md-left\">
        <p class=\"nav-username \">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["playerName"]) || array_key_exists("playerName", $context) ? $context["playerName"] : (function () { throw new RuntimeError('Variable "playerName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " </p>
        <div class=\"\">
            ";
        // line 16
        if ((((isset($context["profile_img"]) || array_key_exists("profile_img", $context) ? $context["profile_img"] : (function () { throw new RuntimeError('Variable "profile_img" does not exist.', 16, $this->source); })()) == "") || ((isset($context["profile_img"]) || array_key_exists("profile_img", $context) ? $context["profile_img"] : (function () { throw new RuntimeError('Variable "profile_img" does not exist.', 16, $this->source); })()) == null))) {
            // line 17
            echo "                <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_settings");
            echo "\" class=\"profile_pic_a \"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"user-nav-profile-img\"></a>
            ";
        } else {
            // line 19
            echo "                <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_settings");
            echo "\" class=\"profile_pic_a \"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["profile_img"]) || array_key_exists("profile_img", $context) ? $context["profile_img"] : (function () { throw new RuntimeError('Variable "profile_img" does not exist.', 19, $this->source); })()))), "html", null, true);
            echo "\" alt=\"\" class=\"user-nav-profile-img\"></a>
            ";
        }
        // line 21
        echo "        </div>
        <p class=\"user_name2 pl-lg-2 pl-sm-2 \">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["playerName"]) || array_key_exists("playerName", $context) ? $context["playerName"] : (function () { throw new RuntimeError('Variable "playerName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "player/playerBaseTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 25,  160 => 22,  157 => 21,  149 => 19,  141 => 17,  139 => 16,  134 => 14,  131 => 13,  121 => 12,  109 => 10,  105 => 9,  101 => 8,  98 => 7,  88 => 6,  76 => 4,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block style %}
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/player/playerStyle.css\") }}    \">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/coachStyle.css\") }}    \">
{% endblock %}
{% block navLinks %}
    <a class=\"current-item ml-2 navbar-link\" href=\"#\">Начална страница </a>
    <a class=\"ml-2 na navbar-link\" href=\"{{ path(\"playerTraining\") }}\">Тренировки</a>
    <a class=\"ml-2 na navbar-link\" href=\"{{ path(\"playerTraining\") }}\">Статистики</a>
    <a class=\"ml-2 na navbar-link\" href=\"{{ path(\"playerTraining\") }}\">Заявки</a>
{% endblock %}
{% block navContent %}
    <div class=\" mt-md-2 mt-sm-2 row text-sm-left text-md-left col-sm-6 col-md-6 justify-content-sm-left justify-content-md-left\">
        <p class=\"nav-username \">{{ playerName }} </p>
        <div class=\"\">
            {% if profile_img == ''  or profile_img == null %}
                <a href=\" {{ path(\"player_settings\") }}\" class=\"profile_pic_a \"><img src=\"{{asset(\"images/user1.png\")}}\" alt=\"\" class=\"user-nav-profile-img\"></a>
            {% else %}
                <a href=\" {{ path(\"player_settings\") }}\" class=\"profile_pic_a \"><img src=\"{{asset(\"images/\" ~ profile_img)}}\" alt=\"\" class=\"user-nav-profile-img\"></a>
            {% endif %}
        </div>
        <p class=\"user_name2 pl-lg-2 pl-sm-2 \">{{ playerName }} </p>
    </div>
{% endblock %}
{% block body %}
{% endblock %}", "player/playerBaseTemplate.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\playerBaseTemplate.html.twig");
    }
}
