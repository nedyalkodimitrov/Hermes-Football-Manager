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

/* admin/coaches.html.twig */
class __TwigTemplate_095754e5b7104c4db8036e9fa6f4f62f93f60574583e4fb445364ae1dd1b65e3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coaches.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coaches.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/coaches.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "     <a class=\"nav-item nav-link  ml-2\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminHomeAction");
        echo "\">Начална страница </a>
     <a class=\"nav-item nav-link ml-2 \" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\">Юнушестки отбори</a>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-between div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Основен Отбор</h2>
                </div>
                ";
        // line 14
        $context["foo"] = 1;
        // line 15
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 15, $this->source); })()), "Coaches", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["coache"]) {
            // line 16
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 17, $this->source); })()), "html", null, true);
            echo " \">
                            ";
            // line 18
            if (((twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 18) == null) || (twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 18) == " "))) {
                // line 19
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
                echo "\" alt=\"\" class=\"player_img\">
                            ";
            } else {
                // line 21
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 21))), "html", null, true);
                echo "\" alt=\"\" class=\"player_img\">
                            ";
            }
            // line 23
            echo "                            <p class=\"player_name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["coache"], "UserId", [], "any", false, false, false, 23), "Name", [], "any", false, false, false, 23), "html", null, true);
            echo " </p>
";
            // line 25
            echo "                        </div>
                    </div>
                    ";
            // line 27
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 27, $this->source); })()) + 1);
            // line 28
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-player justify-content-center text-center\" id=\"player-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " \">

                        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
        echo "\" alt=\"\" class=\"add-player-img\">

                    </div>
                </div>
            </div>
        </div>
    </div>


    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["youthTeams"]) || array_key_exists("youthTeams", $context) ? $context["youthTeams"] : (function () { throw new RuntimeError('Variable "youthTeams" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["youthTeam"]) {
            // line 42
            echo "        <div id=\"container \">
            <div class=\"row mt-5  justify-content-center\">
                <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-between div-charts row pb-3\">
                    <div class=\"col-12 text-center\">
                        <h2 >";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Name", [], "any", false, false, false, 46), "html", null, true);
            echo "</h2>
                    </div>
                    ";
            // line 48
            $context["foo"] = 1;
            // line 49
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Coaches", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["coache"]) {
                // line 50
                echo "                        <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row  \" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coache"], "Id", [], "any", false, false, false, 50), "html", null, true);
                echo "\">
                            <div class=\"col-12 player-container \" id=\"player-";
                // line 51
                echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 51, $this->source); })()), "html", null, true);
                echo " \">
                                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coacheAction", ["id" => twig_get_attribute($this->env, $this->source, $context["coache"], "Id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">";
                if (((twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 52) == null) || (twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 52) == " "))) {
                    // line 53
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
                    echo "\" alt=\"\" class=\"player_img\">
                                    ";
                } else {
                    // line 55
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 55))), "html", null, true);
                    echo "\" alt=\"\" class=\"player_img\">
                                    ";
                }
                // line 57
                echo "                                    <p class=\"player_name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["coache"], "UserId", [], "any", false, false, false, 57), "Name", [], "any", false, false, false, 57), "html", null, true);
                echo " </p>
                                    ";
                // line 58
                echo "</a>
                            </div>
                        </div>

                        ";
                // line 62
                $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 62, $this->source); })()) + 1);
                // line 63
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coache'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "

                        <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio-2 row \">
                            <div class=\"col-12 player-container add-player justify-content-center text-center\" id=\"player-";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 67, $this->source); })()), "html", null, true);
            echo " \">

                                <img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
            echo "\" alt=\"\" class=\"add-player-img\">

                            </div>
                        </div>
                </div>
            </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['youthTeam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/coaches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 78,  246 => 69,  241 => 67,  236 => 64,  230 => 63,  228 => 62,  222 => 58,  217 => 57,  211 => 55,  205 => 53,  201 => 52,  197 => 51,  192 => 50,  187 => 49,  185 => 48,  180 => 46,  174 => 42,  170 => 41,  158 => 32,  153 => 30,  150 => 29,  144 => 28,  142 => 27,  138 => 25,  133 => 23,  127 => 21,  121 => 19,  119 => 18,  115 => 17,  112 => 16,  107 => 15,  105 => 14,  97 => 8,  87 => 7,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
 {% block nav %}
     <a class=\"nav-item nav-link  ml-2\" href=\"{{ path(\"adminHomeAction\") }}\">Начална страница </a>
     <a class=\"nav-item nav-link ml-2 \" href=\"{{ path(\"youthTeams\") }}\">Юнушестки отбори</a>

 {% endblock  %}
{%  block body %}
    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-between div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Основен Отбор</h2>
                </div>
                {% set foo = 1 %}
                {% for coache in team.Coaches%}
                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">
                            {% if coache.Image == null or coache.Image == ' ' %}
                                <img src=\"{{asset('images/user1.png')}}\" alt=\"\" class=\"player_img\">
                            {% else %}
                                <img src=\"{{asset('images/'~ coache.Image )}}\" alt=\"\" class=\"player_img\">
                            {% endif %}
                            <p class=\"player_name\">{{ coache.UserId.Name }} </p>
{#                            <p class=\"\">{{ coache.teamPosition.position }}</p>#}
                        </div>
                    </div>
                    {% set foo = foo + 1 %}
                {% endfor %}
                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-player justify-content-center text-center\" id=\"player-{{  foo }} \">

                        <img src=\"{{ asset('images/plus .png') }}\" alt=\"\" class=\"add-player-img\">

                    </div>
                </div>
            </div>
        </div>
    </div>


    {% for youthTeam in youthTeams %}
        <div id=\"container \">
            <div class=\"row mt-5  justify-content-center\">
                <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-between div-charts row pb-3\">
                    <div class=\"col-12 text-center\">
                        <h2 >{{ youthTeam.Name }}</h2>
                    </div>
                    {% set foo = 1 %}
                    {% for coache in youthTeam.Coaches%}
                        <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row  \" id=\"{{ coache.Id }}\">
                            <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">
                                <a href=\"{{ path('coacheAction',{id : coache.Id}) }}\">{% if coache.Image == null or coache.Image == ' ' %}
                                        <img src=\"{{asset('images/user1.png')}}\" alt=\"\" class=\"player_img\">
                                    {% else %}
                                        <img src=\"{{asset('images/'~ coache.Image )}}\" alt=\"\" class=\"player_img\">
                                    {% endif %}
                                    <p class=\"player_name\">{{ coache.UserId.Name }} </p>
                                    {#                            <p class=\"\">{{ coache.teamPosition.position }}</p>#}</a>
                            </div>
                        </div>

                        {% set foo = foo + 1 %}
                    {% endfor %}


                        <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio-2 row \">
                            <div class=\"col-12 player-container add-player justify-content-center text-center\" id=\"player-{{  foo }} \">

                                <img src=\"{{ asset('images/plus .png') }}\" alt=\"\" class=\"add-player-img\">

                            </div>
                        </div>
                </div>
            </div>
        </div>

    {% endfor %}

{% endblock %}", "admin/coaches.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\admin\\coaches.html.twig");
    }
}
