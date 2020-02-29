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

/* player/index.html.twig */
class __TwigTemplate_a64d81e0bcfbb892f1e89f70597fe18341c746f66a976ec9dc4d240fe7e448aa extends \Twig\Template
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
        // line 2
        return "player/playerBaseTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/index.html.twig"));

        $this->parent = $this->loadTemplate("player/playerBaseTemplate.html.twig", "player/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/player/playerStyle.css"), "html", null, true);
        echo "    \">
    <link rel=\"stylesheet\" href=\"  ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coachStyle.css"), "html", null, true);
        echo "    \">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/searchEngine.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/player/searchTeamBoxStartPageStyle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "

    ";
        // line 12
        if (((isset($context["hasTeam"]) || array_key_exists("hasTeam", $context) ? $context["hasTeam"] : (function () { throw new RuntimeError('Variable "hasTeam" does not exist.', 12, $this->source); })()) == false)) {
            // line 13
            echo "
        <div class=\"col-12 text-center container searchTeamBox\">
            <h4>До сега сте нямали отбор и за да продължите напреде вие треябва да си намерите отбор</h4>
            <div class=\"search-container full-sized-search-box mt-4\">
                <div class=\"search-box full-sized-search-box\">
                    <input type=\"text\" placeholder=\"Type to search\" class=\"search-text\" id=\"search\" >
                    <button  class=\"search-button\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>
            <div class=\"requestsFromTeam\"></div>
            <div class=\"teamSearchResult\">
            </div>
        </div>
    ";
        }
        // line 29
        echo "
    <div id=\"container\">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9  main-charts-container row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-1 information-charts-text\">Основни характеристики</h4>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container\">
                        <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"15\">
                            <span class=\"chart-text percent\"></span>
                        </span>
";
        // line 42
        echo "                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Подкожни мазнини</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12 col-md-12 mt-2 text-center chart-container\">
                    <div class=\"information-container\">
                        <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"20\">
                            <span class=\"chart-text overall\"></span>
                        </span>
                    </div>
                    <h3>
                        <span class=\"label green badge \">Обща оценка</span>
                    </h3>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center  chart-container\">
                    <div class=\"information-container\">
                        <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"102\">
                            <span class=\"chart-text speed\"></span>
                        </span>
";
        // line 65
        echo "                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"green badge fat-percent-badge  label\">Скорост</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"container\" class=\"mv-5 \">
        <div class=\"row mt-5 justify-content-center \">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9 p-0 m-0 row justify-content-between \">
                <div class=\"col-lg-3 col-12 d-lg-inline-block d-md-none d-sm-none water-container p-4   text-center justify-content-center \" >
                    <h5 > Дневен прием на вода</h5>
                    <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/glass-of-water.png"), "html", null, true);
        echo "\" alt=\"\" class=\"water-glass mt-5 col-12\">
                    <div class=\"col-12 row p-3 pb-lg-2 pb-md-2 pb-sm-2 pb-2 m-auto align-items-center\">
                        <button class=\"water-button  water-button-minus col-4 pr-1 text-right\"><i class=\"fa fa-minus\"> </i></button>
                        <h4 class=\"col-4 justify-content-center numOfWaterGlasses\">";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["waterGlasses"]) || array_key_exists("waterGlasses", $context) ? $context["waterGlasses"] : (function () { throw new RuntimeError('Variable "waterGlasses" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "</h4>
                        <button class=\"water-button water-button-plus col-4 pl-1 text-left\"> <i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>

                <div class=\"table-container col-lg-8 col-md-12 col-sm-12 col-12 ml-md-1 ml-sm-1 mx-0 p-0 mt-lg-0 mt-md-0 mt-sm-5 mt-5 row \">
                    <div class=\"table col-12  mh-25\" id=\"teamLeadership-container \">
                        ";
        // line 91
        if ((isset($context["hasTeam"]) || array_key_exists("hasTeam", $context) ? $context["hasTeam"] : (function () { throw new RuntimeError('Variable "hasTeam" does not exist.', 91, $this->source); })())) {
            // line 92
            echo "                            <table class=\"table-bordered col-12 \"  style=\"margin-bottom: 0; padding:0\">
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
            // line 104
            $context["rowNum"] = 1;
            // line 105
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 105, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 106
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["myTeam"]) || array_key_exists("myTeam", $context) ? $context["myTeam"] : (function () { throw new RuntimeError('Variable "myTeam" does not exist.', 106, $this->source); })()), "Id", [], "any", false, false, false, 106) == twig_get_attribute($this->env, $this->source, $context["team"], "Id", [], "any", false, false, false, 106))) {
                    // line 107
                    echo "                                        <tr class=\"teamTable row col-12 p-0 m-0 bg-gray\">
                                            <th  class=\"col-1 justify-content-end\"> ";
                    // line 108
                    echo twig_escape_filter($this->env, (isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 108, $this->source); })()), "html", null, true);
                    echo "</th>
                                            <th class=\"col-4\"> ";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 109), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "playedGames", [], "any", false, false, false, 110), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "wins", [], "any", false, false, false, 111), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "drawsGames", [], "any", false, false, false, 112), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "lostGames", [], "any", false, false, false, 113), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Goals", [], "any", false, false, false, 114), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "GoalsInTheTeamDoor", [], "any", false, false, false, 115), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\">";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "points", [], "any", false, false, false, 116), "html", null, true);
                    echo "</th>
                                        </tr>
                                    ";
                } else {
                    // line 119
                    echo "                                        <tr class=\"teamTable row col-12 p-0 m-0\">
                                            <th  class=\"col-1 justify-content-end\"> ";
                    // line 120
                    echo twig_escape_filter($this->env, (isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 120, $this->source); })()), "html", null, true);
                    echo "</th>
                                            <th class=\"col-4\"> ";
                    // line 121
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 121), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 122
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "playedGames", [], "any", false, false, false, 122), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "wins", [], "any", false, false, false, 123), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "drawsGames", [], "any", false, false, false, 124), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 125
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "lostGames", [], "any", false, false, false, 125), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 126
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Goals", [], "any", false, false, false, 126), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 127
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "GoalsInTheTeamDoor", [], "any", false, false, false, 127), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\">";
                    // line 128
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "points", [], "any", false, false, false, 128), "html", null, true);
                    echo "</th>
                                        </tr>
                                    ";
                }
                // line 131
                echo "
                                    ";
                // line 132
                $context["rowNum"] = ((isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 132, $this->source); })()) + 1);
                // line 133
                echo "                                 ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 134
                echo "                                     <li><em>Вие нямате отбор</em></li>
                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "                            </table>
                        ";
        } else {
            // line 138
            echo "                            <h1>Вие нямате отбор</h1>
                        ";
        }
        // line 140
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10  div-charts row pb-3\">
                <canvas id=\"lineChart\"></canvas>
            </div>
        </div>
    </div>
    <script  src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("easy-pie-chart-master/dist/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/playerScore.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waterGlassesActions.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/mdb.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/searchTeamEngine.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/requestFromTeamTable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/player/acceptTeamRequest.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/player/rejectTeamRequest.js"), "html", null, true);
        echo "\"></script>

    <script>
        var ctxL = document.getElementById(\"lineChart\").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: [ ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allWatersGlasese"]) || array_key_exists("allWatersGlasese", $context) ? $context["allWatersGlasese"] : (function () { throw new RuntimeError('Variable "allWatersGlasese" does not exist.', 167, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["water"]) {
            // line 168
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["water"], "date", [], "any", false, false, false, 168), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['water'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "],
                datasets: [{
                    label: \"Дневен прием на вода\",
                    data: [ ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allWatersGlasese"]) || array_key_exists("allWatersGlasese", $context) ? $context["allWatersGlasese"] : (function () { throw new RuntimeError('Variable "allWatersGlasese" does not exist.', 172, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["water"]) {
            // line 173
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["water"], "WaterGlasses", [], "any", false, false, false, 173), "html", null, true);
            echo ",
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['water'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "],
                    backgroundColor: [
                        'rgba(105, 0, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(200, 99, 132, .7)',
                    ],
                    borderWidth: 2
                }
                ]
            },
            options: {
                responsive: true
            }
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "player/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 174,  412 => 173,  408 => 172,  403 => 169,  394 => 168,  390 => 167,  380 => 160,  376 => 159,  372 => 158,  368 => 157,  364 => 156,  360 => 155,  356 => 154,  352 => 153,  348 => 152,  334 => 140,  330 => 138,  326 => 136,  319 => 134,  314 => 133,  312 => 132,  309 => 131,  303 => 128,  299 => 127,  295 => 126,  291 => 125,  287 => 124,  283 => 123,  279 => 122,  275 => 121,  271 => 120,  268 => 119,  262 => 116,  258 => 115,  254 => 114,  250 => 113,  246 => 112,  242 => 111,  238 => 110,  234 => 109,  230 => 108,  227 => 107,  224 => 106,  218 => 105,  216 => 104,  202 => 92,  200 => 91,  190 => 84,  184 => 81,  166 => 65,  142 => 42,  128 => 29,  110 => 13,  108 => 12,  104 => 10,  94 => 9,  82 => 7,  78 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'player/playerBaseTemplate.html.twig' %}
{% block style %}
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/player/playerStyle.css\") }}    \">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/coachStyle.css\") }}    \">
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/particles/searchEngine.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/player/searchTeamBoxStartPageStyle.css\") }}\">
{% endblock %}
{% block body %}


    {% if hasTeam == false %}

        <div class=\"col-12 text-center container searchTeamBox\">
            <h4>До сега сте нямали отбор и за да продължите напреде вие треябва да си намерите отбор</h4>
            <div class=\"search-container full-sized-search-box mt-4\">
                <div class=\"search-box full-sized-search-box\">
                    <input type=\"text\" placeholder=\"Type to search\" class=\"search-text\" id=\"search\" >
                    <button  class=\"search-button\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>
            <div class=\"requestsFromTeam\"></div>
            <div class=\"teamSearchResult\">
            </div>
        </div>
    {% endif %}

    <div id=\"container\">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9  main-charts-container row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-1 information-charts-text\">Основни характеристики</h4>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container\">
                        <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"15\">
                            <span class=\"chart-text percent\"></span>
                        </span>
{#                        <p>15{{ playerFat }} <i class=\"fa fa-percent \" aria-hidden=\"true\"></i></p>#}
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Подкожни мазнини</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12 col-md-12 mt-2 text-center chart-container\">
                    <div class=\"information-container\">
                        <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"20\">
                            <span class=\"chart-text overall\"></span>
                        </span>
                    </div>
                    <h3>
                        <span class=\"label green badge \">Обща оценка</span>
                    </h3>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center  chart-container\">
                    <div class=\"information-container\">
                        <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"102\">
                            <span class=\"chart-text speed\"></span>
                        </span>
{#                        <p> {{ pace }} km/h </p>#}
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"green badge fat-percent-badge  label\">Скорост</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"container\" class=\"mv-5 \">
        <div class=\"row mt-5 justify-content-center \">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9 p-0 m-0 row justify-content-between \">
                <div class=\"col-lg-3 col-12 d-lg-inline-block d-md-none d-sm-none water-container p-4   text-center justify-content-center \" >
                    <h5 > Дневен прием на вода</h5>
                    <img src=\"{{ asset(\"images/glass-of-water.png\") }}\" alt=\"\" class=\"water-glass mt-5 col-12\">
                    <div class=\"col-12 row p-3 pb-lg-2 pb-md-2 pb-sm-2 pb-2 m-auto align-items-center\">
                        <button class=\"water-button  water-button-minus col-4 pr-1 text-right\"><i class=\"fa fa-minus\"> </i></button>
                        <h4 class=\"col-4 justify-content-center numOfWaterGlasses\">{{ waterGlasses }}</h4>
                        <button class=\"water-button water-button-plus col-4 pl-1 text-left\"> <i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>

                <div class=\"table-container col-lg-8 col-md-12 col-sm-12 col-12 ml-md-1 ml-sm-1 mx-0 p-0 mt-lg-0 mt-md-0 mt-sm-5 mt-5 row \">
                    <div class=\"table col-12  mh-25\" id=\"teamLeadership-container \">
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
            </div>
        </div>
    </div>
    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10  div-charts row pb-3\">
                <canvas id=\"lineChart\"></canvas>
            </div>
        </div>
    </div>
    <script  src=\"{{  asset(\"mdb/js/jquery-3.3.1.min.js\")}}\"></script>
    <script type=\"text/javascript\" src=\"{{  asset(\"easy-pie-chart-master/dist/jquery.easypiechart.js\")}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"js/playerScore.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"js/waterGlassesActions.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/mdb.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/searchTeamEngine.js\") }}\"></script>
    <script src=\"{{ asset(\"js/requestFromTeamTable.js\") }}\"></script>
    <script src=\"{{ asset(\"js/player/acceptTeamRequest.js\") }}\"></script>
    <script src=\"{{ asset(\"js/player/rejectTeamRequest.js\") }}\"></script>

    <script>
        var ctxL = document.getElementById(\"lineChart\").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: [ {% for water in allWatersGlasese%}
                    \"{{ water.date  }}\",
                    {% endfor %}],
                datasets: [{
                    label: \"Дневен прием на вода\",
                    data: [ {% for water in allWatersGlasese%}
                        {{ water.WaterGlasses }},
                        {% endfor %}],
                    backgroundColor: [
                        'rgba(105, 0, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(200, 99, 132, .7)',
                    ],
                    borderWidth: 2
                }
                ]
            },
            options: {
                responsive: true
            }
        });

    </script>
{% endblock %}
", "player/index.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\index.html.twig");
    }
}
