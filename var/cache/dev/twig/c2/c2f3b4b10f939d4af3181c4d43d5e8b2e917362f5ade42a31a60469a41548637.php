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

/* player/stats.html.twig */
class __TwigTemplate_6742ffab2712ec480c36319aebb8b3e8ea0ed5af887ef2411ee2509b36f3a81f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/stats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/stats.html.twig"));

        $this->parent = $this->loadTemplate("player/playerBaseTemplate.html.twig", "player/stats.html.twig", 1);
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
        echo "   ";
        $this->displayParentBlock("style", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/matchCard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/player/statsPageStyle.css"), "html", null, true);
        echo "\">
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
        echo "    <h2 class=\"text-center mt-3\">Статистика</h2>
    <hr class=\"col-8 mx-auto\">
    <h3 class=\"col-12 text-center\">Класиране до момента</h3>
    <div class=\"container col-12 container justify-content-around mt-5 mb-5 row m-0 p-0\">
        <div class=\"col-12 justify-content-around mb-2\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 13, $this->source); })()), "Team", [], "any", false, false, false, 13), "Division", [], "any", false, false, false, 13), "Image", [], "any", false, false, false, 13))), "html", null, true);
        echo "\" alt=\"\" class=\"justify-content-center col-4 text-center division-image\">
            <h3 class=\"mx-auto text-center\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 14, $this->source); })()), "Team", [], "any", false, false, false, 14), "Division", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"table-container col-lg-10 col-md-12 col-sm-12 col-12 ml-md-1 ml-sm-1 mx-0 p-0 mt-lg-0 mt-md-0 mt-sm-5 mt-5 row \">
            <div class=\"table col-12  mh-25\" id=\"teamLeadership-container \">
                ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 19, $this->source); })()), "Team", [], "any", false, false, false, 19) != null)) {
            // line 20
            echo "                    <table class=\"table-bordered col-12 \"  style=\"margin-bottom: 0; padding:0\">
                        <tr class=\"row col-12 p-0 m-0 bg-success\">
                            <th class=\"col-1\"></th>
                            <th class=\"col-4 color-white\">Име</th>
                            <th class=\"col-1 color-white\">ИМ</th>
                            <th class=\"col-1 color-white\">П</th>
                            <th class=\"col-1 color-white\">Р</th>
                            <th class=\"col-1 color-white\">З</th>
                            <th class=\"col-1 color-white\">ВГ</th>
                            <th class=\"col-1 color-white\">ДГ</th>
                            <th class=\"col-1 color-white\">Т</th>
                        </tr>
                        ";
            // line 32
            $context["rowNum"] = 1;
            // line 33
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 33, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 34
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 34, $this->source); })()), "Team", [], "any", false, false, false, 34), "Id", [], "any", false, false, false, 34) == twig_get_attribute($this->env, $this->source, $context["team"], "Id", [], "any", false, false, false, 34))) {
                    // line 35
                    echo "                                <tr class=\"teamTable row col-12 p-0 m-0 bg-gray\">
                                    <th  class=\"col-1 justify-content-end\"> ";
                    // line 36
                    echo twig_escape_filter($this->env, (isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 36, $this->source); })()), "html", null, true);
                    echo "</th>
                                    <th class=\"col-4\"> ";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 37), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\"> ";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "playedGames", [], "any", false, false, false, 38), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\"> ";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "wins", [], "any", false, false, false, 39), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\"> ";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "drawsGames", [], "any", false, false, false, 40), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\"> ";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "lostGames", [], "any", false, false, false, 41), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\"> ";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Goals", [], "any", false, false, false, 42), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\"> ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "GoalsInTheTeamDoor", [], "any", false, false, false, 43), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\">";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "points", [], "any", false, false, false, 44), "html", null, true);
                    echo "</th>
                                </tr>
                            ";
                } else {
                    // line 47
                    echo "                                <tr class=\"teamTable row col-12 p-0 m-0\">
                                    <th  class=\"col-1 justify-content-end\"> ";
                    // line 48
                    echo twig_escape_filter($this->env, (isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 48, $this->source); })()), "html", null, true);
                    echo "</th>
                                    <th class=\"col-4\"> ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 49), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\"> ";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "playedGames", [], "any", false, false, false, 50), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\"> ";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "wins", [], "any", false, false, false, 51), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\"> ";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "drawsGames", [], "any", false, false, false, 52), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\"> ";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "lostGames", [], "any", false, false, false, 53), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\"> ";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Goals", [], "any", false, false, false, 54), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\"> ";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "GoalsInTheTeamDoor", [], "any", false, false, false, 55), "html", null, true);
                    echo "</th>
                                    <th class=\"col-1\">";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "points", [], "any", false, false, false, 56), "html", null, true);
                    echo "</th>
                                </tr>
                            ";
                }
                // line 59
                echo "
                            ";
                // line 60
                $context["rowNum"] = ((isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 60, $this->source); })()) + 1);
                // line 61
                echo "                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 62
                echo "                            <li><em>Вие нямате отбор</em></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    </table>
                ";
        } else {
            // line 66
            echo "                    <h1>Вие нямате отбор</h1>
                ";
        }
        // line 68
        echo "            </div>
        </div>
    </div>
    <hr class=\"col-8 mx-auto\">
<div class=\"col-12 container row justify-content-around\">
    <h3 class=\"text-center col-12 mb-4\">Мачове, които сте в групата</h3>
        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 74, $this->source); })()), "MatchList", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["matchList"]) {
            // line 75
            echo "            <div class=\"col-lg-4 col-sm-12 row m-0 p-0 match-card\">
                <div class=\"col-lg-12  col-sm-9 col-md-6 text-center mt-3 mx-auto row\">
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createMatchList", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "match", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" class=\"m-0 row col-12\">
                        <div class=\"col-6\">
                            <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "match", [], "any", false, false, false, 79), "homeTeam", [], "any", false, false, false, 79), "Image", [], "any", false, false, false, 79))), "html", null, true);
            echo "\" alt=\"\">
                            <h5>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "match", [], "any", false, false, false, 80), "homeTeam", [], "any", false, false, false, 80), "Name", [], "any", false, false, false, 80), "html", null, true);
            echo "</h5>
                        </div>
                        <div class=\"col-6\">
                            <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "match", [], "any", false, false, false, 83), "awayTeam", [], "any", false, false, false, 83), "Image", [], "any", false, false, false, 83))), "html", null, true);
            echo "\" alt=\"\" class=\"\" >
                            <h5>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "match", [], "any", false, false, false, 84), "awayTeam", [], "any", false, false, false, 84), "Name", [], "any", false, false, false, 84), "html", null, true);
            echo "</h5>
                        </div>
                        <div class=\"col-12 justify-content-center mt-2 mb-1\">
                            <h5 class=\"information\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "match", [], "any", false, false, false, 87), "date", [], "any", false, false, false, 87), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "match", [], "any", false, false, false, 87), "time", [], "any", false, false, false, 87), "html", null, true);
            echo "</h5>
                        </div>

                    </a>
";
            // line 92
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matchList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</div>
    <hr class=\"col-8 mx-auto\">
<div class=\"col-12 container row justify-content-around mt-5\">
    <h3 class=\"text-center col-12 mb-4\">Предстоящи мачове на ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 98, $this->source); })()), "Team", [], "any", false, false, false, 98), "Name", [], "any", false, false, false, 98), "html", null, true);
        echo "</h3>
        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["upComingMatches"]) || array_key_exists("upComingMatches", $context) ? $context["upComingMatches"] : (function () { throw new RuntimeError('Variable "upComingMatches" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 100
            echo "            <div class=\"col-lg-4 col-sm-12 row m-0 p-0 match-card\">
                <div class=\"col-lg-12  col-sm-9 col-md-6 text-center mt-3 mx-auto row\">
                    <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createMatchList", ["id" => twig_get_attribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" class=\"m-0 row col-12\">
                        <div class=\"col-6\">
                            <img src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "homeTeam", [], "any", false, false, false, 104), "Image", [], "any", false, false, false, 104))), "html", null, true);
            echo "\" alt=\"\">
                            <h5>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "homeTeam", [], "any", false, false, false, 105), "Name", [], "any", false, false, false, 105), "html", null, true);
            echo "</h5>
                        </div>
                        <div class=\"col-6\">
                            <img src=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "awayTeam", [], "any", false, false, false, 108), "Image", [], "any", false, false, false, 108))), "html", null, true);
            echo "\" alt=\"\" class=\"\" >
                            <h5>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "awayTeam", [], "any", false, false, false, 109), "Name", [], "any", false, false, false, 109), "html", null, true);
            echo "</h5>
                        </div>
                        <div class=\"col-12 justify-content-center mt-2 mb-1\">
                            <h5 class=\"information\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "date", [], "any", false, false, false, 112), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "time", [], "any", false, false, false, 112), "html", null, true);
            echo "</h5>
                        </div>

                    </a>
";
            // line 117
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "</div>

    <hr class=\"col-8 mx-auto\">
    <h3 class=\"col-12  mt-5 text-center\">Статиситики от треньора</h3>
    <div class=\"col-12 mt-3 pt-3\">
        <div class=\"col-12 justify-content-around summarizing-results\">
              <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 126, $this->source); })()), "stats", [], "any", false, false, false, 126), "statusFromCoaches", [], "any", false, false, false, 126), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
              </span>
            <h4 class=\"text-center mt-2\">Обобщен резултат</h4>
        </div>
    </div>
    <div class=\"container col-12 p-0 m-0 row mt-5\">
        <div class=\"col-12 m-0 p-0 row justify-content-around\">
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 135
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 135, $this->source); })()), "stats", [], "any", false, false, false, 135), "pace", [], "any", false, false, false, 135) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Скорост</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 141
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 141, $this->source); })()), "stats", [], "any", false, false, false, 141), "technique", [], "any", false, false, false, 141) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Техника</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 147
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 147, $this->source); })()), "stats", [], "any", false, false, false, 147), "shot", [], "any", false, false, false, 147) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Удар</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 153
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 153, $this->source); })()), "stats", [], "any", false, false, false, 153), "dribble", [], "any", false, false, false, 153) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Дрибъл</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 159
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 159, $this->source); })()), "stats", [], "any", false, false, false, 159), "tacticks", [], "any", false, false, false, 159) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Тактика</h5>
            </div>
        </div>
    </div>
    <div class=\"container col-12 p-0 m-0 row mt-5\">

        <div class=\"col-12 m-0 p-0 row justify-content-around\">
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 170, $this->source); })()), "stats", [], "any", false, false, false, 170), "pass", [], "any", false, false, false, 170), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Пас</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 176
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 176, $this->source); })()), "stats", [], "any", false, false, false, 176), "longPass", [], "any", false, false, false, 176) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Дълъг пас</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 182
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 182, $this->source); })()), "stats", [], "any", false, false, false, 182), "relax", [], "any", false, false, false, 182) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Спокойствие на терена</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 188
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 188, $this->source); })()), "stats", [], "any", false, false, false, 188), "willpower", [], "any", false, false, false, 188) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Воля</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 194
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 194, $this->source); })()), "stats", [], "any", false, false, false, 194), "perspective", [], "any", false, false, false, 194) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Перспектива</h5>
            </div>

        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "player/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 194,  467 => 188,  458 => 182,  449 => 176,  440 => 170,  426 => 159,  417 => 153,  408 => 147,  399 => 141,  390 => 135,  378 => 126,  370 => 120,  362 => 117,  353 => 112,  347 => 109,  343 => 108,  337 => 105,  333 => 104,  328 => 102,  324 => 100,  320 => 99,  316 => 98,  311 => 95,  303 => 92,  294 => 87,  288 => 84,  284 => 83,  278 => 80,  274 => 79,  269 => 77,  265 => 75,  261 => 74,  253 => 68,  249 => 66,  245 => 64,  238 => 62,  233 => 61,  231 => 60,  228 => 59,  222 => 56,  218 => 55,  214 => 54,  210 => 53,  206 => 52,  202 => 51,  198 => 50,  194 => 49,  190 => 48,  187 => 47,  181 => 44,  177 => 43,  173 => 42,  169 => 41,  165 => 40,  161 => 39,  157 => 38,  153 => 37,  149 => 36,  146 => 35,  143 => 34,  137 => 33,  135 => 32,  121 => 20,  119 => 19,  111 => 14,  107 => 13,  100 => 8,  90 => 7,  78 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'player/playerBaseTemplate.html.twig' %}
{% block style %}
   {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/particles/matchCard.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/player/statsPageStyle.css') }}\">
{% endblock %}
{% block body%}
    <h2 class=\"text-center mt-3\">Статистика</h2>
    <hr class=\"col-8 mx-auto\">
    <h3 class=\"col-12 text-center\">Класиране до момента</h3>
    <div class=\"container col-12 container justify-content-around mt-5 mb-5 row m-0 p-0\">
        <div class=\"col-12 justify-content-around mb-2\">
            <img src=\"{{ asset(\"images/\"~player.Team.Division.Image) }}\" alt=\"\" class=\"justify-content-center col-4 text-center division-image\">
            <h3 class=\"mx-auto text-center\">{{ player.Team.Division.name}}</h3>
        </div>

        <div class=\"table-container col-lg-10 col-md-12 col-sm-12 col-12 ml-md-1 ml-sm-1 mx-0 p-0 mt-lg-0 mt-md-0 mt-sm-5 mt-5 row \">
            <div class=\"table col-12  mh-25\" id=\"teamLeadership-container \">
                {% if player.Team != null %}
                    <table class=\"table-bordered col-12 \"  style=\"margin-bottom: 0; padding:0\">
                        <tr class=\"row col-12 p-0 m-0 bg-success\">
                            <th class=\"col-1\"></th>
                            <th class=\"col-4 color-white\">Име</th>
                            <th class=\"col-1 color-white\">ИМ</th>
                            <th class=\"col-1 color-white\">П</th>
                            <th class=\"col-1 color-white\">Р</th>
                            <th class=\"col-1 color-white\">З</th>
                            <th class=\"col-1 color-white\">ВГ</th>
                            <th class=\"col-1 color-white\">ДГ</th>
                            <th class=\"col-1 color-white\">Т</th>
                        </tr>
                        {% set rowNum = 1 %}
                        {% for team in teams %}
                            {% if player.Team.Id == team.Id %}
                                <tr class=\"teamTable row col-12 p-0 m-0 bg-gray\">
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
                            {% else %}
                                <tr class=\"teamTable row col-12 p-0 m-0\">
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
                            {% endif %}

                            {% set rowNum = rowNum + 1 %}
                        {% else %}
                            <li><em>Вие нямате отбор</em></li>
                        {%  endfor %}
                    </table>
                {% else %}
                    <h1>Вие нямате отбор</h1>
                {% endif %}
            </div>
        </div>
    </div>
    <hr class=\"col-8 mx-auto\">
<div class=\"col-12 container row justify-content-around\">
    <h3 class=\"text-center col-12 mb-4\">Мачове, които сте в групата</h3>
        {% for matchList in player.MatchList %}
            <div class=\"col-lg-4 col-sm-12 row m-0 p-0 match-card\">
                <div class=\"col-lg-12  col-sm-9 col-md-6 text-center mt-3 mx-auto row\">
                    <a href=\"{{ path(\"createMatchList\", {\"id\" : matchList.match.id}) }}\" class=\"m-0 row col-12\">
                        <div class=\"col-6\">
                            <img src=\"{{asset(\"images/\" ~ matchList.match.homeTeam.Image)  }}\" alt=\"\">
                            <h5>{{ matchList.match.homeTeam.Name }}</h5>
                        </div>
                        <div class=\"col-6\">
                            <img src=\"{{asset(\"images/\" ~ matchList.match.awayTeam.Image)  }}\" alt=\"\" class=\"\" >
                            <h5>{{ matchList.match.awayTeam.Name }}</h5>
                        </div>
                        <div class=\"col-12 justify-content-center mt-2 mb-1\">
                            <h5 class=\"information\">{{ matchList.match.date }} {{ matchList.match.time }}</h5>
                        </div>

                    </a>
{#                                            <span><i class=\"fas fa-times country-fa-times\" id=\"{{ team.Id }}\"></i></span>#}
                </div>
            </div>
        {% endfor %}
</div>
    <hr class=\"col-8 mx-auto\">
<div class=\"col-12 container row justify-content-around mt-5\">
    <h3 class=\"text-center col-12 mb-4\">Предстоящи мачове на {{ player.Team.Name }}</h3>
        {% for match in upComingMatches %}
            <div class=\"col-lg-4 col-sm-12 row m-0 p-0 match-card\">
                <div class=\"col-lg-12  col-sm-9 col-md-6 text-center mt-3 mx-auto row\">
                    <a href=\"{{ path(\"createMatchList\", {\"id\" :match.id}) }}\" class=\"m-0 row col-12\">
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
{#                                            <span><i class=\"fas fa-times country-fa-times\" id=\"{{ team.Id }}\"></i></span>#}
                </div>
            </div>
        {% endfor %}
</div>

    <hr class=\"col-8 mx-auto\">
    <h3 class=\"col-12  mt-5 text-center\">Статиситики от треньора</h3>
    <div class=\"col-12 mt-3 pt-3\">
        <div class=\"col-12 justify-content-around summarizing-results\">
              <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.statusFromCoaches  }}\">
                        <span class=\"chart-text percent\"></span>
              </span>
            <h4 class=\"text-center mt-2\">Обобщен резултат</h4>
        </div>
    </div>
    <div class=\"container col-12 p-0 m-0 row mt-5\">
        <div class=\"col-12 m-0 p-0 row justify-content-around\">
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.pace *10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Скорост</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.technique * 10 }}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Техника</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.shot * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Удар</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.dribble * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Дрибъл</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.tacticks * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Тактика</h5>
            </div>
        </div>
    </div>
    <div class=\"container col-12 p-0 m-0 row mt-5\">

        <div class=\"col-12 m-0 p-0 row justify-content-around\">
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.pass }}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Пас</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.longPass * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Дълъг пас</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.relax * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Спокойствие на терена</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.willpower * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Воля</h5>
            </div>
            <div class=\"col-2\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.perspective * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                <h5 class=\"text-center mt-2\">Перспектива</h5>
            </div>

        </div>
    </div>


{% endblock %}", "player/stats.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\stats.html.twig");
    }
}
