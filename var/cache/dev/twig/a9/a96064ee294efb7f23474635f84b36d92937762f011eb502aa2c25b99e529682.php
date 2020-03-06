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

/* coaches/index.html.twig */
class __TwigTemplate_901303697e1b8fff6fd10068e36cd61608f5116fea294f14492baca830667cdc extends \Twig\Template
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
        // line 2
        return "coaches/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/index.html.twig"));

        $this->parent = $this->loadTemplate("coaches/base.html.twig", "coaches/index.html.twig", 2);
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
        echo "    <div id=\"container\">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9  main-charts-container row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-4  mb-5 information-charts-text\">Основни характеристики</h4>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container \">
                          <p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["playersCount"]) || array_key_exists("playersCount", $context) ? $context["playersCount"] : (function () { throw new RuntimeError('Variable "playersCount" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Играча в отбора</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12 col-md-12 mt-2 text-center chart-container\">
                    <div class=\"information-container\">
                      <p>1</p>
                    </div>
                    <h3>
                        <span class=\"label green badge \">Временно класиране</span>
                    </h3>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center  chart-container\">
                    <div class=\"information-container\">
                       <p>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"green badge fat-percent-badge  label\">Първенство</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-around div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Топ трима играча от мъжкия отбор   </h2>
                </div>
                ";
        // line 48
        $context["foo"] = 1;
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topPlayers"]) || array_key_exists("topPlayers", $context) ? $context["topPlayers"] : (function () { throw new RuntimeError('Variable "topPlayers" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 50
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container top-player-card-container\" id=\"player-";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 51, $this->source); })()), "html", null, true);
            echo " \">
                            ";
            // line 53
            echo "                            ";
            // line 54
            echo "                            ";
            // line 55
            echo "                            ";
            // line 56
            echo "                            ";
            // line 57
            echo "                            <div class=\"top-player-image-container\">
                                ";
            // line 58
            if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 58) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 58) == " "))) {
                // line 59
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                echo "\" alt=\"\" class=\"top-player-card-img\">
                                ";
            } else {
                // line 61
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 61))), "html", null, true);
                echo "\" alt=\"\" class=\"top-player-card-img\">
                                ";
            }
            // line 63
            echo "                            </div>
                            <p class=\"top-player-card-name\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 64), "Name", [], "any", false, false, false, 64), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 64), "FName", [], "any", false, false, false, 64), "html", null, true);
            echo "</p>
                            ";
            // line 66
            echo "                        </div>
                    </div>
                    ";
            // line 68
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 68, $this->source); })()) + 1);
            // line 69
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
            </div>
        </div>
    </div>


    <div class=\"table-container justify-content-center col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-4 mt-md-4 mt-sm-5 mt-5 row \">
        <div class=\"table col-11  mh-25\" id=\"teamLeadership-container \">
            ";
        // line 78
        if ((isset($context["hasTeam"]) || array_key_exists("hasTeam", $context) ? $context["hasTeam"] : (function () { throw new RuntimeError('Variable "hasTeam" does not exist.', 78, $this->source); })())) {
            // line 79
            echo "                <table class=\"table-bordered col-12 \"  style=\"margin-bottom: 0; padding:0\">
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
            // line 91
            $context["rowNum"] = 1;
            // line 92
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 92, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 93
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["myTeam"]) || array_key_exists("myTeam", $context) ? $context["myTeam"] : (function () { throw new RuntimeError('Variable "myTeam" does not exist.', 93, $this->source); })()), "Id", [], "any", false, false, false, 93) == twig_get_attribute($this->env, $this->source, $context["team"], "Id", [], "any", false, false, false, 93))) {
                    // line 94
                    echo "                            <tr class=\"teamTable row col-12 p-0 m-0 bg-gray\">
                                <th  class=\"col-1 justify-content-end\"> ";
                    // line 95
                    echo twig_escape_filter($this->env, (isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 95, $this->source); })()), "html", null, true);
                    echo "</th>
                                <th class=\"col-4\"> ";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 96), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\"> ";
                    // line 97
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "playedGames", [], "any", false, false, false, 97), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\"> ";
                    // line 98
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "wins", [], "any", false, false, false, 98), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\"> ";
                    // line 99
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "drawsGames", [], "any", false, false, false, 99), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\"> ";
                    // line 100
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "lostGames", [], "any", false, false, false, 100), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\"> ";
                    // line 101
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Goals", [], "any", false, false, false, 101), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\"> ";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "GoalsInTheTeamDoor", [], "any", false, false, false, 102), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\">";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "points", [], "any", false, false, false, 103), "html", null, true);
                    echo "</th>
                            </tr>
                        ";
                } else {
                    // line 106
                    echo "                            <tr class=\"teamTable row col-12 p-0 m-0\">
                                <th  class=\"col-1 justify-content-end\"> ";
                    // line 107
                    echo twig_escape_filter($this->env, (isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 107, $this->source); })()), "html", null, true);
                    echo "</th>
                                <th class=\"col-4\"> ";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 108), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\"> ";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "playedGames", [], "any", false, false, false, 109), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\"> ";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "wins", [], "any", false, false, false, 110), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\"> ";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "drawsGames", [], "any", false, false, false, 111), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\"> ";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "lostGames", [], "any", false, false, false, 112), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\"> ";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Goals", [], "any", false, false, false, 113), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\"> ";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "GoalsInTheTeamDoor", [], "any", false, false, false, 114), "html", null, true);
                    echo "</th>
                                <th class=\"col-1\">";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "points", [], "any", false, false, false, 115), "html", null, true);
                    echo "</th>
                            </tr>
                        ";
                }
                // line 118
                echo "
                        ";
                // line 119
                $context["rowNum"] = ((isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 119, $this->source); })()) + 1);
                // line 120
                echo "                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 121
                echo "                        <li><em>Вие нямате отбор</em></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                </table>
            ";
        } else {
            // line 125
            echo "                <h1>Вие нямате отбор</h1>
            ";
        }
        // line 127
        echo "        </div>
    </div>



    <script>
        \$('.player_portfolio').on('click', function () {

            var player = \$(this).children().attr('id');
            \$('.player-status-container').css('visibility', 'visible');
            \$('#status-'+player).css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('#status-'+player).css('visibility', 'hidden');
            });

            \$('.player-status-container').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('#status-'+player).css('visibility', 'hidden');
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coaches/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 127,  320 => 125,  316 => 123,  309 => 121,  304 => 120,  302 => 119,  299 => 118,  293 => 115,  289 => 114,  285 => 113,  281 => 112,  277 => 111,  273 => 110,  269 => 109,  265 => 108,  261 => 107,  258 => 106,  252 => 103,  248 => 102,  244 => 101,  240 => 100,  236 => 99,  232 => 98,  228 => 97,  224 => 96,  220 => 95,  217 => 94,  214 => 93,  208 => 92,  206 => 91,  192 => 79,  190 => 78,  180 => 70,  174 => 69,  172 => 68,  168 => 66,  162 => 64,  159 => 63,  153 => 61,  147 => 59,  145 => 58,  142 => 57,  140 => 56,  138 => 55,  136 => 54,  134 => 53,  130 => 51,  127 => 50,  122 => 49,  120 => 48,  99 => 30,  78 => 12,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'coaches/base.html.twig' %}
{% block body %}
    <div id=\"container\">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9  main-charts-container row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-4  mb-5 information-charts-text\">Основни характеристики</h4>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container \">
                          <p>{{ playersCount }}</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Играча в отбора</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12 col-md-12 mt-2 text-center chart-container\">
                    <div class=\"information-container\">
                      <p>1</p>
                    </div>
                    <h3>
                        <span class=\"label green badge \">Временно класиране</span>
                    </h3>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center  chart-container\">
                    <div class=\"information-container\">
                       <p>{{ division }}</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"green badge fat-percent-badge  label\">Първенство</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-around div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Топ трима играча от мъжкия отбор   </h2>
                </div>
                {% set foo = 1 %}
                {% for player in topPlayers %}
                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container top-player-card-container\" id=\"player-{{  foo }} \">
                            {#                            {%   if  player.Status == 0 %}#}
                            {#                                <div class=\"status-green\"></div>#}
                            {#                                {% else %}#}
                            {#                                <div class=\"status-red\"></div>#}
                            {#                            {%  endif %}#}
                            <div class=\"top-player-image-container\">
                                {% if player.Image == null or player.Image == ' ' %}
                                    <img src=\"{{asset('images/user-image.png')}}\" alt=\"\" class=\"top-player-card-img\">
                                {% else %}
                                    <img src=\"{{asset('images/'~ player.Image )}}\" alt=\"\" class=\"top-player-card-img\">
                                {% endif %}
                            </div>
                            <p class=\"top-player-card-name\">{{ player.User.Name }} {{ player.User.FName }}</p>
                            {#                            <span><i class=\"fas fa-times country-fa-times players\" id=\"{{ player.Id }}\"></i></span>#}
                        </div>
                    </div>
                    {% set foo = foo + 1 %}
                {% endfor %}

            </div>
        </div>
    </div>


    <div class=\"table-container justify-content-center col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-4 mt-md-4 mt-sm-5 mt-5 row \">
        <div class=\"table col-11  mh-25\" id=\"teamLeadership-container \">
            {% if hasTeam %}
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
                        {% if myTeam.Id == team.Id %}
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



    <script>
        \$('.player_portfolio').on('click', function () {

            var player = \$(this).children().attr('id');
            \$('.player-status-container').css('visibility', 'visible');
            \$('#status-'+player).css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('#status-'+player).css('visibility', 'hidden');
            });

            \$('.player-status-container').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('#status-'+player).css('visibility', 'hidden');
            });
        });
    </script>
{% endblock %}", "coaches/index.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\index.html.twig");
    }
}
