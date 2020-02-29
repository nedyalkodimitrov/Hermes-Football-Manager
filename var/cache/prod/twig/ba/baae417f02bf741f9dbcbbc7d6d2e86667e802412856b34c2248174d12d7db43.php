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

/* coaches/playerStat.html.twig */
class __TwigTemplate_9d725571f35396ab6043113ca38fce84c27d20a41b71d48e4a809ce173664776 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'nav' => [$this, 'block_nav'],
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
        $this->parent = $this->loadTemplate("coaches/base.html.twig", "coaches/playerStat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        $this->displayParentBlock("style", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/playerVisitCard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coach/playerStatPageStyle.css"), "html", null, true);
        echo "\">

";
    }

    // line 8
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <a class=\"nav-item nav-link  ml-2\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coacheViewAction");
        echo "\">Начална страница</a>
    <a class=\"nav-item nav-link current-item ml-2\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingView");
        echo "\">Тренировки</a>
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    <div class=\" justify-content-center row mt-4 mb-5\">
        <div class=\"col-12 justify-content-center text-center row \">
            <div class=\"text-center information-div row\">
                <div class=\"col-12 row player-visit-container\">
                    <div class=\"col-lg-4 col-sm-12 col-12 p-1 \">
                        ";
        // line 19
        if (((($context["image"] ?? null) == "0") || (($context["image"] ?? null) == null))) {
            // line 20
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer  m-2\">
                        ";
        } else {
            // line 22
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . ($context["image"] ?? null))), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer m-2\">
                        ";
        }
        // line 24
        echo "                        <h4> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "User", [], "any", false, false, false, 24), "Name", [], "any", false, false, false, 24), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "User", [], "any", false, false, false, 24), "FName", [], "any", false, false, false, 24), "html", null, true);
        echo "</h4>
                        <h6>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Position", [], "any", false, false, false, 25), "Name", [], "any", false, false, false, 25), "html", null, true);
        echo "</h6>
                    </div>
                    <div class=\" col-lg-8 col-sm-12 col-12 mx-auto text-center  justify-content-center\">
                        <div class=\"visiting-player-card-text-holder col-12\">
                            <h3 class=\" justify-content-center row\">Визитна карта </h3>
                        </div>
                        <div class=\"col-12 justify-content-center text-center row 0\">
                            <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                    ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Team", [], "any", false, false, false, 34) == null)) {
            // line 35
            echo "                                        <h5>Отбор: Няма</h5>
                                    ";
        } else {
            // line 37
            echo "                                        <h5>Отбор: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Team", [], "any", false, false, false, 37), "Name", [], "any", false, false, false, 37), "html", null, true);
            echo "</h5>
                                    ";
        }
        // line 39
        echo "                                </div>
                                <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                    <h5>Отбелязани голове: 0</h5>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                    ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "team", [], "any", false, false, false, 46), "Division", [], "any", false, false, false, 46) == null)) {
            // line 47
            echo "                                        <h5>Първенство: Няма</h5>
                                    ";
        } else {
            // line 49
            echo "                                        <h5>Първенство: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "team", [], "any", false, false, false, 49), "Division", [], "any", false, false, false, 49), "Name", [], "any", false, false, false, 49), "html", null, true);
            echo "</h5>
                                    ";
        }
        // line 51
        echo "                                </div>
                                <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                    <h5>Асистенции: 0</h5>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                    ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "User", [], "any", false, false, false, 58), "City", [], "any", false, false, false, 58) == null)) {
            // line 59
            echo "                                        <h5>Националност: Не е зададен</h5>
                                    ";
        } else {
            // line 61
            echo "                                        <h5>Националност: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "User", [], "any", false, false, false, 61), "City", [], "any", false, false, false, 61), "Country", [], "any", false, false, false, 61), "Name", [], "any", false, false, false, 61), "html", null, true);
            echo "</h5>
                                    ";
        }
        // line 63
        echo "                                </div>
                                <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                    <h5>Изиграни мачове: 0</h5>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                    ";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "BirthDay", [], "any", false, false, false, 70) == null)) {
            // line 71
            echo "                                        <h5>Ден на раждане: Не е зададен</h5>
                                    ";
        } else {
            // line 73
            echo "                                        <h5>Ден на раждане: ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "BirthDay", [], "any", false, false, false, 73), "d.m.Y")), "html", null, true);
            echo "</h5>
                                    ";
        }
        // line 75
        echo "
                                </div>
                                <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                    <h5>Отбелязани голове: 0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 player-visit-container mt-3\">
                    <div class=\"col-12 justify-content-center text-center row   \">
                        <h4 class=\"col-12 text-center\">Статистически данни</h4>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Weight", [], "any", false, false, false, 88) == null)) {
            // line 89
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/weight-machine.png"), "html", null, true);
            echo "\" alt=\"\" class=\"player-stats-image\">
                                <h5>Килограми: 0кг</h5>
                            ";
        } else {
            // line 92
            echo "                                <h5>Килограми: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Weight", [], "any", false, false, false, 92), "html", null, true);
            echo "кг</h5>
                            ";
        }
        // line 94
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Height", [], "any", false, false, false, 96) == null)) {
            // line 97
            echo "                                <h5>Височина: 0см</h5>
                            ";
        } else {
            // line 99
            echo "                                <h5>Височина: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Height", [], "any", false, false, false, 99), "html", null, true);
            echo "см</h5>
                            ";
        }
        // line 101
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0  mt-4  myBorderPlayerStat-left text-center\">
                            ";
        // line 105
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Pace", [], "any", false, false, false, 105) == null)) {
            // line 106
            echo "                                <h5>Скорост: 0 km/h</h5>
                            ";
        } else {
            // line 108
            echo "                                <h5>Скорост: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Pace", [], "any", false, false, false, 108), "html", null, true);
            echo " km/h</h5>
                            ";
        }
        // line 110
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "LongPass", [], "any", false, false, false, 112) == null)) {
            // line 113
            echo "                                <h5>Дълъг пас: 0</h5>
                            ";
        } else {
            // line 115
            echo "                                <h5>Дълъг пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "LongPass", [], "any", false, false, false, 115), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 117
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 121
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Relax", [], "any", false, false, false, 121) == null)) {
            // line 122
            echo "                                <h5>Спокойствие на терена: 0</h5>
                            ";
        } else {
            // line 124
            echo "                                <h5>Спокойствие на терена: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Relax", [], "any", false, false, false, 124), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 126
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            ";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Fat", [], "any", false, false, false, 128) == null)) {
            // line 129
            echo "                                <h5>Подкожни мазнини: 0%</h5>
                            ";
        } else {
            // line 131
            echo "                                <h5>Подкожни мазнини: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Fat", [], "any", false, false, false, 131), "html", null, true);
            echo "%</h5>
                            ";
        }
        // line 133
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Work", [], "any", false, false, false, 137) == null)) {
            // line 138
            echo "                                <h5>Усърдна работа: 0</h5>
                            ";
        } else {
            // line 140
            echo "                                <h5>Усърдна работа: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Work", [], "any", false, false, false, 140), "html", null, true);
            echo "</h5>

                            ";
        }
        // line 143
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 145
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Tacticks", [], "any", false, false, false, 145) == null)) {
            // line 146
            echo "                                <h5>Тактика: 0</h5>
                            ";
        } else {
            // line 148
            echo "                                <h5>Тактика: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Tacticks", [], "any", false, false, false, 148), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 150
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 154
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "WillPower", [], "any", false, false, false, 154) == null)) {
            // line 155
            echo "                                <h5>Воля: 0</h5>
                            ";
        } else {
            // line 157
            echo "                                <h5>Воля:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "WillPower", [], "any", false, false, false, 157), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 159
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 161
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Dribble", [], "any", false, false, false, 161) == null)) {
            // line 162
            echo "                                <h5>Дрибъл: 0</h5>
                            ";
        } else {
            // line 164
            echo "                                <h5>Дрибъл:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Dribble", [], "any", false, false, false, 164), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 166
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 170
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Shot", [], "any", false, false, false, 170) == null)) {
            // line 171
            echo "                                <h5>Удар: 0</h5>
                            ";
        } else {
            // line 173
            echo "                                <h5>Удар:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Shot", [], "any", false, false, false, 173), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 175
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 177
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Technique", [], "any", false, false, false, 177) == null)) {
            // line 178
            echo "                                <h5>Техника: 0</h5>
                            ";
        } else {
            // line 180
            echo "                                <h5>Техника:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Technique", [], "any", false, false, false, 180), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 182
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 186
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Pass", [], "any", false, false, false, 186) == null)) {
            // line 187
            echo "                                <h5>Пас: 0</h5>
                            ";
        } else {
            // line 189
            echo "                                <h5>Пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Pass", [], "any", false, false, false, 189), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 191
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 193
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Perspective", [], "any", false, false, false, 193) == null)) {
            // line 194
            echo "                                <h5>Перспектива: 0</h5>
                            ";
        } else {
            // line 196
            echo "                                <h5>Перспектива:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Perspective", [], "any", false, false, false, 196), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 198
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"container col-12 \">
        <div class=\"row   justify-content-center  \">
            <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                <h2 class=\"d-inline-block\">Дълъг пас: <span id=\"stat-1\"></span> </h2>
                <div class=\"slidecontainer \">
                  <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "longPass", [], "any", false, false, false, 209), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-1\">
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                <h2 class=\"d-inline-block\">Спокойствие на терена <span id=\"stat-2\"></span> </h2>
                <div class=\"slidecontainer \">
                  <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Relax", [], "any", false, false, false, 215), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-2\">
                </div>
            </div>
        </div>
    </div>
        <div id=\"container col-12\">
            <div class=\"row   justify-content-center\">
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5  text-center\">
                    <h2 class=\"d-inline-block\">Усърдна работа: <span id=\"stat-3\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Work", [], "any", false, false, false, 225), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-3\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Тактика: <span id=\"stat-4\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Tacticks", [], "any", false, false, false, 231), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-4\">
                    </div>
                </div>
            </div>
        </div>
        <div id=\"container col-12\">
            <div class=\"row  justify-content-center\">
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Воля: <span id=\"stat-5\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 241
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "willPower", [], "any", false, false, false, 241), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-5\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Дрибъл: <span id=\"stat-6\"></span> </h2>
                    <div class=\"slidecontainer \">
                        <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "dribble", [], "any", false, false, false, 248), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-6\">
                    </div>
                </div>

            </div>
        </div>
    <div id=\"container col-12\">
            <div class=\"row   justify-content-center\">
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Удар: <span id=\"stat-7\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 259
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "shot", [], "any", false, false, false, 259), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-7\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Техника: <span id=\"stat-8\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 265
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Technique", [], "any", false, false, false, 265), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-8\">
                    </div>
                </div>
            </div>
        </div>
        <div id=\"container col-12\">
            <div class=\"row   justify-content-center\">
                    <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                        <h2 class=\"d-inline-block\">Перспектива: <span id=\"stat-9\"></span> </h2>
                        <div class=\"slidecontainer \">
                          <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "perspective", [], "any", false, false, false, 275), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-9\">
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                        <h2 class=\"d-inline-block\">Пас: <span id=\"stat-10\"></span> </h2>
                        <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 281
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "pass", [], "any", false, false, false, 281), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-10\">
                    </div>
                </div>
            </div>

    <div class=\"col-12 mt-5 text-center justify-content-center row\">
        <button class=\"btn btn-green col-2\"><i class=\"fas fa-check\"></i></button>
    </div>

    <script>
        var slider = document.getElementById(\"myRange-1\");
        var output = document.getElementById(\"stat-1\");
        var slider2 = document.getElementById(\"myRange-2\");
        var output2 = document.getElementById(\"stat-2\");
        var slider3 = document.getElementById(\"myRange-3\");
        var output3 = document.getElementById(\"stat-3\");
        var slider4 = document.getElementById(\"myRange-4\");
        var output4 = document.getElementById(\"stat-4\");
        var slider5 = document.getElementById(\"myRange-5\");
        var output5 = document.getElementById(\"stat-5\");
        var slider6 = document.getElementById(\"myRange-6\");
        var output6 = document.getElementById(\"stat-6\");
        var slider7 = document.getElementById(\"myRange-7\");
        var output7 = document.getElementById(\"stat-7\");
        var slider8 = document.getElementById(\"myRange-8\");
        var output8 = document.getElementById(\"stat-8\");
        var slider9 = document.getElementById(\"myRange-9\");
        var output9 = document.getElementById(\"stat-9\");
        var slider10 = document.getElementById(\"myRange-10\");
        var output10 = document.getElementById(\"stat-10\");

        output.innerHTML = slider.value;
        output2.innerHTML = slider2.value;
        output3.innerHTML = slider3.value;
        output4.innerHTML = slider4.value;
        output5.innerHTML = slider5.value;
        output6.innerHTML = slider6.value;
        output7.innerHTML = slider7.value;
        output8.innerHTML = slider8.value;
        output9.innerHTML = slider9.value;
        output10.innerHTML = slider10.value;

        slider.oninput = function() {
            output.innerHTML = this.value;
        }
        slider2.oninput = function() {
            output2.innerHTML = this.value;
        }
        slider3.oninput = function() {
            output3.innerHTML = this.value;
        }
        slider4.oninput = function() {
            output4.innerHTML = this.value;
        }
        slider5.oninput = function() {
            output5.innerHTML = this.value;
        }

        slider6.oninput = function() {
            output6.innerHTML = this.value;
        }
        slider7.oninput = function() {
            output7.innerHTML = this.value;
        }
        slider8.oninput = function() {
            output8.innerHTML = this.value;
        }
        slider9.oninput = function() {
            output9.innerHTML = this.value;
        }
        slider10.oninput = function() {
            output10.innerHTML = this.value;
        }

        var all = parseInt(slider.value) + parseInt(slider2.value) +parseInt(slider3.value) + parseInt(slider4.value)
            + parseInt(slider5.value) + parseInt(slider6.value) + parseInt(slider7.value) + parseInt(slider8.value)
            +parseInt(slider9.value) + parseInt(slider10.value);

        \$('.btn-green').on(\"click\", function () {
            if (\$(\"#fat\").val() > 40 || \$(\"#pace\").val() > 47 || \$(\"#weight\").val() > 120 || 0 || \$(\"#height\").val()){

                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Подкожните мазнини трябва да са под 40%, скороста под 47 km/h, килограмите под 120кг, а височината под 210см\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 8000,
                });

            }else
            {
                \$.ajax({

                    method: \"POST\",
                    data: {
                        \"longPass\": slider.value, \"relax\": slider2.value,
                        \"workHard\": slider3.value, \"tacktick\": slider4.value,
                        \"willPower\": slider5.value, \"dribble\": slider6.value,
                        \"shot\": slider7.value, \"technique\": slider8.value, \"pass\": slider9.value,
                        \"perspective\": slider10.value, \"all\": all * 10,
                        \"fat\": \$(\"#fat\").val(), \"pace\": \$(\"#pace\").val(),
                        \"weight\": \$(\"#weight\").val(), \"height\": \$(\"#height\").val(),

                    },
                    url: \"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerStats", ["id" => twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Id", [], "any", false, false, false, 386)]), "html", null, true);
        echo "\",
                })
                    .done(function (msg) {
                        window.location.href = \"/coache/training/\";
                        console.log(msg);
                        console.log(slider.value);

                    });
            }
        });



    </script>

";
    }

    public function getTemplateName()
    {
        return "coaches/playerStat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 386,  566 => 281,  557 => 275,  544 => 265,  535 => 259,  521 => 248,  511 => 241,  498 => 231,  489 => 225,  476 => 215,  467 => 209,  454 => 198,  448 => 196,  444 => 194,  442 => 193,  438 => 191,  432 => 189,  428 => 187,  426 => 186,  420 => 182,  414 => 180,  410 => 178,  408 => 177,  404 => 175,  398 => 173,  394 => 171,  392 => 170,  386 => 166,  380 => 164,  376 => 162,  374 => 161,  370 => 159,  364 => 157,  360 => 155,  358 => 154,  352 => 150,  346 => 148,  342 => 146,  340 => 145,  336 => 143,  329 => 140,  325 => 138,  323 => 137,  317 => 133,  311 => 131,  307 => 129,  305 => 128,  301 => 126,  295 => 124,  291 => 122,  289 => 121,  283 => 117,  277 => 115,  273 => 113,  271 => 112,  267 => 110,  261 => 108,  257 => 106,  255 => 105,  249 => 101,  243 => 99,  239 => 97,  237 => 96,  233 => 94,  227 => 92,  220 => 89,  218 => 88,  203 => 75,  197 => 73,  193 => 71,  191 => 70,  182 => 63,  176 => 61,  172 => 59,  170 => 58,  161 => 51,  155 => 49,  151 => 47,  149 => 46,  140 => 39,  134 => 37,  130 => 35,  128 => 34,  116 => 25,  109 => 24,  103 => 22,  97 => 20,  95 => 19,  87 => 13,  83 => 12,  77 => 10,  72 => 9,  68 => 8,  61 => 5,  57 => 4,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coaches/playerStat.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\playerStat.html.twig");
    }
}
