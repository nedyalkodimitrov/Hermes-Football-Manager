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

/* superAdmin/divisionFunctions.html.twig */
class __TwigTemplate_cb826a3d17c0212c9da6a64f4ee4b74fb5b9266cb5ba6c99277522b6e3ae0c8c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superAdmin/divisionFunctions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superAdmin/divisionFunctions.html.twig"));

        $this->parent = $this->loadTemplate("superAdmin/base.html.twig", "superAdmin/divisionFunctions.html.twig", 1);
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
        echo "


    <div class=\"col-lg-8 col-md-12 col-sm-12 col-12 ml-md-1 ml-sm-1  mx-0 p-0 mt-lg-0 mt-md-0 mt-sm-5 mt-5 row \">
        <div class=\"table col-12  mh-25\" id=\"teamLeadership-container \">
            <table class=\"table table-striped table-bordered col-12 \"  style=\"margin-bottom: 0; padding:0\">
                <tr class=\"row col-12 p-0 m-0 bg-success\">
                    <th class=\"col-1\"></th>
                    <th class=\"col-4\">Име</th>
                    <th class=\"col-1\">ИМ</th>
                    <th class=\"col-1\">П</th>
                    <th class=\"col-1\">Р</th>
                    <th class=\"col-1\">З</th>
                    <th class=\"col-1\">ВГ</th>
                    <th class=\"col-1\">ДГ</th>
                    <th class=\"col-1\">Т</th>
                </tr>
                ";
        // line 20
        $context["rowNum"] = 1;
        // line 21
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 21, $this->source); })()), "Teams", [], "any", false, false, false, 21));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 22
            echo "                        <tr class=\"teamTable row col-12 p-0 m-0 \">
                            <th  class=\"col-1 justify-content-end\"> ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "</th>
                            <th class=\"col-4\"> ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</th>
                            <th class=\"col-1\"> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "playedGames", [], "any", false, false, false, 25), "html", null, true);
            echo "</th>
                            <th class=\"col-1\"> ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "wins", [], "any", false, false, false, 26), "html", null, true);
            echo "</th>
                            <th class=\"col-1\"> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "drawsGames", [], "any", false, false, false, 27), "html", null, true);
            echo "</th>
                            <th class=\"col-1\"> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "lostGames", [], "any", false, false, false, 28), "html", null, true);
            echo "</th>
                            <th class=\"col-1\"> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Goals", [], "any", false, false, false, 29), "html", null, true);
            echo "</th>
                            <th class=\"col-1\"> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "GoalsInTheTeamDoor", [], "any", false, false, false, 30), "html", null, true);
            echo "</th>
                            <th class=\"col-1\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "points", [], "any", false, false, false, 31), "html", null, true);
            echo "</th>
                        </tr>
                    ";
            // line 33
            $context["rowNum"] = ((isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 33, $this->source); })()) + 1);
            // line 34
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                    <li><em>Това първенство няма отбори</em></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "superAdmin/divisionFunctions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 37,  142 => 35,  137 => 34,  135 => 33,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  95 => 22,  89 => 21,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'superAdmin/base.html.twig' %}
{% block body %}



    <div class=\"col-lg-8 col-md-12 col-sm-12 col-12 ml-md-1 ml-sm-1  mx-0 p-0 mt-lg-0 mt-md-0 mt-sm-5 mt-5 row \">
        <div class=\"table col-12  mh-25\" id=\"teamLeadership-container \">
            <table class=\"table table-striped table-bordered col-12 \"  style=\"margin-bottom: 0; padding:0\">
                <tr class=\"row col-12 p-0 m-0 bg-success\">
                    <th class=\"col-1\"></th>
                    <th class=\"col-4\">Име</th>
                    <th class=\"col-1\">ИМ</th>
                    <th class=\"col-1\">П</th>
                    <th class=\"col-1\">Р</th>
                    <th class=\"col-1\">З</th>
                    <th class=\"col-1\">ВГ</th>
                    <th class=\"col-1\">ДГ</th>
                    <th class=\"col-1\">Т</th>
                </tr>
                {% set rowNum = 1 %}
                {% for team in division.Teams %}
                        <tr class=\"teamTable row col-12 p-0 m-0 \">
                            <th  class=\"col-1 justify-content-end\"> {{ rowNum }}</th>
                            <th class=\"col-4\"> {{ team.name }}</th>
                            <th class=\"col-1\"> {{ team.playedGames }}</th>
                            <th class=\"col-1\"> {{ team.wins }}</th>
                            <th class=\"col-1\"> {{ team.drawsGames}}</th>
                            <th class=\"col-1\"> {{ team.lostGames}}</th>
                            <th class=\"col-1\"> {{ team.Goals}}</th>
                            <th class=\"col-1\"> {{ team.GoalsInTheTeamDoor}}</th>
                            <th class=\"col-1\">{{ team.points }}</th>
                        </tr>
                    {% set rowNum = rowNum + 1 %}
                {% else %}
                    <li><em>Това първенство няма отбори</em></li>
                {%  endfor %}
            </table>
        </div>
    </div>
{% endblock%}", "superAdmin/divisionFunctions.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\superAdmin\\divisionFunctions.html.twig");
    }
}
