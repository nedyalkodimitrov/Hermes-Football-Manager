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

/* player/requests.html.twig */
class __TwigTemplate_ac1a5bfa93a758f1f805d2b2b166ab76fb3571a08e6e62568971de331ef469c2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "player/playerBaseTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/requests.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/requests.html.twig"));

        $this->parent = $this->loadTemplate("player/playerBaseTemplate.html.twig", "player/requests.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("style", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/player/requestPageStyle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"table-container justify-content-center max-resolution col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-4 mt-md-4 mt-sm-5 mt-5 row \">
        <div class=\"table col-11  mh-25\" id=\"teamLeadership-container \">
            ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 9, $this->source); })())) != 0)) {
            // line 10
            echo "                <table class=\"table-bordered col-12 \"  style=\"margin-bottom: 0; padding:0\">
                    <tr class=\"row col-12 p-0 m-0 bg-success\">
                        <th class=\"col-4 color-white \">Отбор </th>
                        <th class=\"col-4 color-white \">Треньор </th>
                        <th class=\"col-2 color-white \">Дата</th>
                        <th class=\"col-2 color-white \">Действия</th>
                    </tr>
                    ";
            // line 17
            $context["rowNum"] = 1;
            // line 18
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 18, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                // line 19
                echo "                        <tr class=\"requestTable row col-12 p-0 m-0\">
                            <th  class=\"col-4 text-center  p-0 m-0 row  \">
                                <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "sender", [], "any", false, false, false, 21), "coach", [], "any", false, false, false, 21), "Team", [], "any", false, false, false, 21), "Image", [], "any", false, false, false, 21))), "html", null, true);
                echo "\" class=\"my-auto\" alt=\"\">
                                <p class=\"my-auto\"> ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "sender", [], "any", false, false, false, 22), "coach", [], "any", false, false, false, 22), "Team", [], "any", false, false, false, 22), "Name", [], "any", false, false, false, 22), "html", null, true);
                echo "</p>
                            </th>
                            <th  class=\"col-4 my-auto\"> <p class=\"my-auto\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "sender", [], "any", false, false, false, 24), "html", null, true);
                echo "</p></th>
                            <th class=\"col-2  my-auto\"><p class=\"my-auto\"> ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "date", [], "any", false, false, false, 25), "html", null, true);
                echo "</p></th>
                            <th class=\"col-2 my-auto \"><p class=\"my-auto\">
                                <button class=\"btn btn-success col-1 m-0\"><i class=\"fas fa-check\"></i></button>
                                <button class=\"btn btn-danger col-1 m-0\"><i class=\" fas fa-times-circle\"></i></button>

                            </th>

                        </tr>

                        ";
                // line 34
                $context["rowNum"] = ((isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 34, $this->source); })()) + 1);
                // line 35
                echo "                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 36
                echo "                        <li><em>Нямате покани от други отбори</em></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </table>
            ";
        } else {
            // line 40
            echo "                <h2 class=\"text-center\">Нямате покани от други отбори</h2>
            ";
        }
        // line 42
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "player/requests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 42,  166 => 40,  162 => 38,  155 => 36,  150 => 35,  148 => 34,  136 => 25,  132 => 24,  127 => 22,  123 => 21,  119 => 19,  113 => 18,  111 => 17,  102 => 10,  100 => 9,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'player/playerBaseTemplate.html.twig' %}
{%  block style %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/player/requestPageStyle.css\") }}\">
{% endblock %}
{% block body %}
    <div class=\"table-container justify-content-center max-resolution col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-4 mt-md-4 mt-sm-5 mt-5 row \">
        <div class=\"table col-11  mh-25\" id=\"teamLeadership-container \">
            {% if requests|length != 0 %}
                <table class=\"table-bordered col-12 \"  style=\"margin-bottom: 0; padding:0\">
                    <tr class=\"row col-12 p-0 m-0 bg-success\">
                        <th class=\"col-4 color-white \">Отбор </th>
                        <th class=\"col-4 color-white \">Треньор </th>
                        <th class=\"col-2 color-white \">Дата</th>
                        <th class=\"col-2 color-white \">Действия</th>
                    </tr>
                    {% set rowNum = 1 %}
                    {% for request in requests %}
                        <tr class=\"requestTable row col-12 p-0 m-0\">
                            <th  class=\"col-4 text-center  p-0 m-0 row  \">
                                <img src=\"{{asset( \"images/\"~ request.sender.coach.Team.Image)}}\" class=\"my-auto\" alt=\"\">
                                <p class=\"my-auto\"> {{ request.sender.coach.Team.Name}}</p>
                            </th>
                            <th  class=\"col-4 my-auto\"> <p class=\"my-auto\">{{ request.sender }}</p></th>
                            <th class=\"col-2  my-auto\"><p class=\"my-auto\"> {{ request.date }}</p></th>
                            <th class=\"col-2 my-auto \"><p class=\"my-auto\">
                                <button class=\"btn btn-success col-1 m-0\"><i class=\"fas fa-check\"></i></button>
                                <button class=\"btn btn-danger col-1 m-0\"><i class=\" fas fa-times-circle\"></i></button>

                            </th>

                        </tr>

                        {% set rowNum = rowNum + 1 %}
                    {% else %}
                        <li><em>Нямате покани от други отбори</em></li>
                    {%  endfor %}
                </table>
            {% else %}
                <h2 class=\"text-center\">Нямате покани от други отбори</h2>
            {% endif %}
        </div>
    </div>
{% endblock %}", "player/requests.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\requests.html.twig");
    }
}
