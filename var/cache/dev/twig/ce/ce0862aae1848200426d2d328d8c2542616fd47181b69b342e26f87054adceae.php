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

/* coaches/matches/matches.html.twig */
class __TwigTemplate_24cc582b244bfe5405f241c04bcb70592f99315125a044c98b067d1565f419f0 extends \Twig\Template
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
        return "coaches/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/matches/matches.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/matches/matches.html.twig"));

        $this->parent = $this->loadTemplate("coaches/base.html.twig", "coaches/matches/matches.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/matchCard.css"), "html", null, true);
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
        echo "    <div class=\"col-12 col-lg-12 p-0 mt-4 row justify-content-center mx-auto max-resolution\">
        <div class=\"col-lg-11 col-md-7 p-0 col-sm-11 col-10 justify-content-around  row pb-3\">
            <div class=\"col-12 mt-2 mb-3\">
                <h2 class=\"col-12 text-center \">Минали мачове </h2>
            </div>

            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pastMatches"]) || array_key_exists("pastMatches", $context) ? $context["pastMatches"] : (function () { throw new RuntimeError('Variable "pastMatches" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 14
            echo "
                ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, $context["match"], "MatchStats", [], "any", false, false, false, 15) != null)) {
                // line 16
                echo "                    <div class=\"col-lg-4 col-sm-12 row m-0 p-0 match-card \">
                        <div class=\"col-lg-12  col-sm-9 col-md-6 text-center mt-3 mx-auto row \">
                            <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matchView", ["id" => twig_get_attribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\" class=\"m-0 row col-12 justify-content-center\">
                                <div class=\"col-7 justify-content-center row\">
                                    <img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "homeTeam", [], "any", false, false, false, 20), "Image", [], "any", false, false, false, 20))), "html", null, true);
                echo "\" alt=\"\">
                                    <h5 class=\"col-12 text-center\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "homeTeam", [], "any", false, false, false, 21), "Name", [], "any", false, false, false, 21), "html", null, true);
                echo "</h5>
                                    <h5 class=\"align-text-bottom p-0 m-0\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "MatchStats", [], "any", false, false, false, 22), "HomeTeamGoals", [], "any", false, false, false, 22), "html", null, true);
                echo "</h5>
                                </div>
                                <div class=\"col-7 justify-content-center row\">
                                    <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "awayTeam", [], "any", false, false, false, 25), "Image", [], "any", false, false, false, 25))), "html", null, true);
                echo "\" alt=\"\" class=\"\" >
                                    <h5 class=\"col-12\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "awayTeam", [], "any", false, false, false, 26), "Name", [], "any", false, false, false, 26), "html", null, true);
                echo "</h5>
                                    <h5 class=\"col-12 align-text-bottom p-0 m-0\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "MatchStats", [], "any", false, false, false, 27), "AwayTeamGoals", [], "any", false, false, false, 27), "html", null, true);
                echo "</h5>
                                </div>
                                <div class=\"col-12 justify-content-center mt-2 mb-1\">
                                    <h5 class=\"information\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "date", [], "any", false, false, false, 30), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "time", [], "any", false, false, false, 30), "html", null, true);
                echo "</h5>
                                </div>

                            </a>
                            ";
                // line 35
                echo "                        </div>
                    </div>
                    ";
            } else {
                // line 38
                echo "                        <div class=\"col-lg-4 col-sm-12 row m-0 p-0 match-card \">
                            <div class=\"col-lg-12  col-sm-9 col-md-6 text-center mt-3 mx-auto row \">
                                <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matchView", ["id" => twig_get_attribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"m-0 row col-12 justify-content-center\">
                                    <div class=\"col-7 justify-content-center row\">
                                        <img src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "homeTeam", [], "any", false, false, false, 42), "Image", [], "any", false, false, false, 42))), "html", null, true);
                echo "\" alt=\"\">
                                        <h5 class=\"col-12 text-center\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "homeTeam", [], "any", false, false, false, 43), "Name", [], "any", false, false, false, 43), "html", null, true);
                echo "</h5>
                                        <h5 class=\"align-text-bottom p-0 m-0\">Няма данни</h5>
                                    </div>
                                    <div class=\"col-7 justify-content-center row\">
                                        <img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "awayTeam", [], "any", false, false, false, 47), "Image", [], "any", false, false, false, 47))), "html", null, true);
                echo "\" alt=\"\" class=\"\" >
                                        <h5 class=\"col-12\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "awayTeam", [], "any", false, false, false, 48), "Name", [], "any", false, false, false, 48), "html", null, true);
                echo "</h5>
                                        <h5 class=\"col-12 align-text-bottom p-0 m-0\">Няма данни</h5>
                                    </div>
                                    <div class=\"col-12 justify-content-center mt-2 mb-1\">
                                        <h5 class=\"information\">";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "date", [], "any", false, false, false, 52), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "time", [], "any", false, false, false, 52), "html", null, true);
                echo "</h5>
                                    </div>

                                </a>
                                ";
                // line 57
                echo "                            </div>
                        </div>
                ";
            }
            // line 60
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "                <h4>Все още нямате преминали мачове</h4>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </div>
    </div>
    <hr class=\"col-9 mx-auto mt-3 mb-5\">
    <div class=\"col-12 col-lg-12 p-0 mt-4 row justify-content-center mx-auto max-resolution\">
        <div class=\"col-lg-11 col-md-7 p-0 col-sm-11 col-10 justify-content-around  row pb-3\">
            <div class=\"col-12 mt-2 mb-3\">
                <h2 class=\"col-12 text-center\">Предстоящи мачове </h2>
            </div>
            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["upcomingMatches"]) || array_key_exists("upcomingMatches", $context) ? $context["upcomingMatches"] : (function () { throw new RuntimeError('Variable "upcomingMatches" does not exist.', 71, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 72
            echo "                <div class=\"col-lg-4 col-sm-12 row m-0 p-0 match-card\">
                    <div class=\"col-lg-12  col-sm-9 col-md-6 text-center mt-3 mx-auto row\">
                        <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createMatchList", ["id" => twig_get_attribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\" class=\"m-0 row col-12\">
                            <div class=\"col-6\">
                                <img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "homeTeam", [], "any", false, false, false, 76), "Image", [], "any", false, false, false, 76))), "html", null, true);
            echo "\" alt=\"\">
                                <h5>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "homeTeam", [], "any", false, false, false, 77), "Name", [], "any", false, false, false, 77), "html", null, true);
            echo "</h5>
                            </div>
                            <div class=\"col-6\">
                                <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "awayTeam", [], "any", false, false, false, 80), "Image", [], "any", false, false, false, 80))), "html", null, true);
            echo "\" alt=\"\" class=\"\" >
                                <h5>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "awayTeam", [], "any", false, false, false, 81), "Name", [], "any", false, false, false, 81), "html", null, true);
            echo "</h5>
                            </div>
                            <div class=\"col-12 justify-content-center mt-2 mb-1\">
                                <h5 class=\"information\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "date", [], "any", false, false, false, 84), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "time", [], "any", false, false, false, 84), "html", null, true);
            echo "</h5>
                            </div>

                        </a>
                        ";
            // line 89
            echo "                    </div>
                </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            echo "                <h4 class=\"mt\">Все още нямате предстоящи мачове</h4>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coaches/matches/matches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 94,  282 => 92,  275 => 89,  266 => 84,  260 => 81,  256 => 80,  250 => 77,  246 => 76,  241 => 74,  237 => 72,  232 => 71,  222 => 63,  215 => 61,  210 => 60,  205 => 57,  196 => 52,  189 => 48,  185 => 47,  178 => 43,  174 => 42,  169 => 40,  165 => 38,  160 => 35,  151 => 30,  145 => 27,  141 => 26,  137 => 25,  131 => 22,  127 => 21,  123 => 20,  118 => 18,  114 => 16,  112 => 15,  109 => 14,  104 => 13,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'coaches/base.html.twig' %}
{% block style %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/particles/matchCard.css') }}\">
{% endblock %}
{% block body %}
    <div class=\"col-12 col-lg-12 p-0 mt-4 row justify-content-center mx-auto max-resolution\">
        <div class=\"col-lg-11 col-md-7 p-0 col-sm-11 col-10 justify-content-around  row pb-3\">
            <div class=\"col-12 mt-2 mb-3\">
                <h2 class=\"col-12 text-center \">Минали мачове </h2>
            </div>

            {% for match in pastMatches %}

                {% if match.MatchStats != null%}
                    <div class=\"col-lg-4 col-sm-12 row m-0 p-0 match-card \">
                        <div class=\"col-lg-12  col-sm-9 col-md-6 text-center mt-3 mx-auto row \">
                            <a href=\"{{ path(\"matchView\", {\"id\" : match.id}) }}\" class=\"m-0 row col-12 justify-content-center\">
                                <div class=\"col-7 justify-content-center row\">
                                    <img src=\"{{asset(\"images/\" ~ match.homeTeam.Image)  }}\" alt=\"\">
                                    <h5 class=\"col-12 text-center\">{{ match.homeTeam.Name }}</h5>
                                    <h5 class=\"align-text-bottom p-0 m-0\">{{ match.MatchStats.HomeTeamGoals}}</h5>
                                </div>
                                <div class=\"col-7 justify-content-center row\">
                                    <img src=\"{{asset(\"images/\" ~ match.awayTeam.Image)  }}\" alt=\"\" class=\"\" >
                                    <h5 class=\"col-12\">{{ match.awayTeam.Name }}</h5>
                                    <h5 class=\"col-12 align-text-bottom p-0 m-0\">{{ match.MatchStats.AwayTeamGoals}}</h5>
                                </div>
                                <div class=\"col-12 justify-content-center mt-2 mb-1\">
                                    <h5 class=\"information\">{{ match.date }} {{ match.time }}</h5>
                                </div>

                            </a>
                            {#                        <span><i class=\"fas fa-times country-fa-times\" id=\"{{ team.Id }}\"></i></span>#}
                        </div>
                    </div>
                    {% else  %}
                        <div class=\"col-lg-4 col-sm-12 row m-0 p-0 match-card \">
                            <div class=\"col-lg-12  col-sm-9 col-md-6 text-center mt-3 mx-auto row \">
                                <a href=\"{{ path(\"matchView\", {\"id\" : match.id}) }}\" class=\"m-0 row col-12 justify-content-center\">
                                    <div class=\"col-7 justify-content-center row\">
                                        <img src=\"{{asset(\"images/\" ~ match.homeTeam.Image)  }}\" alt=\"\">
                                        <h5 class=\"col-12 text-center\">{{ match.homeTeam.Name }}</h5>
                                        <h5 class=\"align-text-bottom p-0 m-0\">Няма данни</h5>
                                    </div>
                                    <div class=\"col-7 justify-content-center row\">
                                        <img src=\"{{asset(\"images/\" ~ match.awayTeam.Image)  }}\" alt=\"\" class=\"\" >
                                        <h5 class=\"col-12\">{{ match.awayTeam.Name }}</h5>
                                        <h5 class=\"col-12 align-text-bottom p-0 m-0\">Няма данни</h5>
                                    </div>
                                    <div class=\"col-12 justify-content-center mt-2 mb-1\">
                                        <h5 class=\"information\">{{ match.date }} {{ match.time }}</h5>
                                    </div>

                                </a>
                                {#                        <span><i class=\"fas fa-times country-fa-times\" id=\"{{ team.Id }}\"></i></span>#}
                            </div>
                        </div>
                {% endif %}
            {% else %}
                <h4>Все още нямате преминали мачове</h4>
            {% endfor %}
        </div>
    </div>
    <hr class=\"col-9 mx-auto mt-3 mb-5\">
    <div class=\"col-12 col-lg-12 p-0 mt-4 row justify-content-center mx-auto max-resolution\">
        <div class=\"col-lg-11 col-md-7 p-0 col-sm-11 col-10 justify-content-around  row pb-3\">
            <div class=\"col-12 mt-2 mb-3\">
                <h2 class=\"col-12 text-center\">Предстоящи мачове </h2>
            </div>
            {% for match in upcomingMatches %}
                <div class=\"col-lg-4 col-sm-12 row m-0 p-0 match-card\">
                    <div class=\"col-lg-12  col-sm-9 col-md-6 text-center mt-3 mx-auto row\">
                        <a href=\"{{ path(\"createMatchList\", {\"id\" : match.id}) }}\" class=\"m-0 row col-12\">
                            <div class=\"col-6\">
                                <img src=\"{{asset(\"images/\" ~ match.homeTeam.Image)  }}\" alt=\"\">
                                <h5>{{ match.homeTeam.Name }}</h5>
                            </div>
                            <div class=\"col-6\">
                                <img src=\"{{asset(\"images/\" ~ match.awayTeam.Image)  }}\" alt=\"\" class=\"\" >
                                <h5>{{ match.awayTeam.Name }}</h5>
                            </div>
                            <div class=\"col-12 justify-content-center mt-2 mb-1\">
                                <h5 class=\"information\">{{ match.date }} {{ match.time }}</h5>
                            </div>

                        </a>
                        {#                        <span><i class=\"fas fa-times country-fa-times\" id=\"{{ team.Id }}\"></i></span>#}
                    </div>
                </div>
                {% else %}
                <h4 class=\"mt\">Все още нямате предстоящи мачове</h4>
            {% endfor %}

        </div>
    </div>

{% endblock %}", "coaches/matches/matches.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\matches\\matches.html.twig");
    }
}
