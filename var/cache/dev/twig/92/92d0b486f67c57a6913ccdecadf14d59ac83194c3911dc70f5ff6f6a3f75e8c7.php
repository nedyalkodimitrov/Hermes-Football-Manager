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
class __TwigTemplate_1345ec0cad09e66f8dd0fefc0f2fca1086126e66b87dc1b9c0c73f2a844351f3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/playerStat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/playerStat.html.twig"));

        $this->parent = $this->loadTemplate("coaches/base.html.twig", "coaches/playerStat.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/playerVisitCard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coach/playerStatPageStyle.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 9
        echo "    <a class=\"nav-item nav-link  ml-2\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coacheViewAction");
        echo "\">Начална страница</a>
    <a class=\"nav-item nav-link current-item ml-2\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingView");
        echo "\">Тренировки</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    <div class=\" justify-content-center row mt-4 mb-5\">
        <div class=\"col-12 justify-content-center text-center row \">
            <div class=\"text-center information-div row\">
                <div class=\"col-12 row player-visit-container\">
                    <div class=\"col-lg-4 col-sm-12 col-12 p-1 \">
                        ";
        // line 19
        if ((((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 19, $this->source); })()) == "0") || ((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 19, $this->source); })()) == null))) {
            // line 20
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer  m-2\">
                        ";
        } else {
            // line 22
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 22, $this->source); })()))), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer m-2\">
                        ";
        }
        // line 24
        echo "                        <h4> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 24, $this->source); })()), "User", [], "any", false, false, false, 24), "Name", [], "any", false, false, false, 24), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 24, $this->source); })()), "User", [], "any", false, false, false, 24), "FName", [], "any", false, false, false, 24), "html", null, true);
        echo "</h4>
                        <h6>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 25, $this->source); })()), "Position", [], "any", false, false, false, 25), "Name", [], "any", false, false, false, 25), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 34, $this->source); })()), "Team", [], "any", false, false, false, 34) == null)) {
            // line 35
            echo "                                        <h5>Отбор: Няма</h5>
                                    ";
        } else {
            // line 37
            echo "                                        <h5>Отбор: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 37, $this->source); })()), "Team", [], "any", false, false, false, 37), "Name", [], "any", false, false, false, 37), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 46, $this->source); })()), "team", [], "any", false, false, false, 46), "Division", [], "any", false, false, false, 46) == null)) {
            // line 47
            echo "                                        <h5>Първенство: Няма</h5>
                                    ";
        } else {
            // line 49
            echo "                                        <h5>Първенство: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 49, $this->source); })()), "team", [], "any", false, false, false, 49), "Division", [], "any", false, false, false, 49), "Name", [], "any", false, false, false, 49), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 58, $this->source); })()), "User", [], "any", false, false, false, 58), "City", [], "any", false, false, false, 58) == null)) {
            // line 59
            echo "                                        <h5>Националност: Не е зададен</h5>
                                    ";
        } else {
            // line 61
            echo "                                        <h5>Националност: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 61, $this->source); })()), "User", [], "any", false, false, false, 61), "City", [], "any", false, false, false, 61), "Country", [], "any", false, false, false, 61), "Name", [], "any", false, false, false, 61), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 70, $this->source); })()), "BirthDay", [], "any", false, false, false, 70) == null)) {
            // line 71
            echo "                                        <h5>Ден на раждане: Не е зададен</h5>
                                    ";
        } else {
            // line 73
            echo "                                        <h5>Ден на раждане: ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 73, $this->source); })()), "BirthDay", [], "any", false, false, false, 73), "d.m.Y")), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 88, $this->source); })()), "Weight", [], "any", false, false, false, 88) == null)) {
            // line 89
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/weight-machine.png"), "html", null, true);
            echo "\" alt=\"\" class=\"player-stats-image\">
                                <h5>Килограми: 0кг</h5>
                            ";
        } else {
            // line 92
            echo "                                <h5>Килограми: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 92, $this->source); })()), "Weight", [], "any", false, false, false, 92), "html", null, true);
            echo "кг</h5>
                            ";
        }
        // line 94
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 96, $this->source); })()), "Height", [], "any", false, false, false, 96) == null)) {
            // line 97
            echo "                                <h5>Височина: 0см</h5>
                            ";
        } else {
            // line 99
            echo "                                <h5>Височина: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 99, $this->source); })()), "Height", [], "any", false, false, false, 99), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 105, $this->source); })()), "Pace", [], "any", false, false, false, 105) == null)) {
            // line 106
            echo "                                <h5>Скорост: 0 km/h</h5>
                            ";
        } else {
            // line 108
            echo "                                <h5>Скорост: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 108, $this->source); })()), "Pace", [], "any", false, false, false, 108), "html", null, true);
            echo " km/h</h5>
                            ";
        }
        // line 110
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 112, $this->source); })()), "LongPass", [], "any", false, false, false, 112) == null)) {
            // line 113
            echo "                                <h5>Дълъг пас: 0</h5>
                            ";
        } else {
            // line 115
            echo "                                <h5>Дълъг пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 115, $this->source); })()), "LongPass", [], "any", false, false, false, 115), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 121, $this->source); })()), "Relax", [], "any", false, false, false, 121) == null)) {
            // line 122
            echo "                                <h5>Спокойствие на терена: 0</h5>
                            ";
        } else {
            // line 124
            echo "                                <h5>Спокойствие на терена: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 124, $this->source); })()), "Relax", [], "any", false, false, false, 124), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 126
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            ";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 128, $this->source); })()), "Fat", [], "any", false, false, false, 128) == null)) {
            // line 129
            echo "                                <h5>Подкожни мазнини: 0%</h5>
                            ";
        } else {
            // line 131
            echo "                                <h5>Подкожни мазнини: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 131, $this->source); })()), "Fat", [], "any", false, false, false, 131), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 137, $this->source); })()), "Work", [], "any", false, false, false, 137) == null)) {
            // line 138
            echo "                                <h5>Усърдна работа: 0</h5>
                            ";
        } else {
            // line 140
            echo "                                <h5>Усърдна работа: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 140, $this->source); })()), "Work", [], "any", false, false, false, 140), "html", null, true);
            echo "</h5>

                            ";
        }
        // line 143
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 145
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 145, $this->source); })()), "Tacticks", [], "any", false, false, false, 145) == null)) {
            // line 146
            echo "                                <h5>Тактика: 0</h5>
                            ";
        } else {
            // line 148
            echo "                                <h5>Тактика: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 148, $this->source); })()), "Tacticks", [], "any", false, false, false, 148), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 154, $this->source); })()), "WillPower", [], "any", false, false, false, 154) == null)) {
            // line 155
            echo "                                <h5>Воля: 0</h5>
                            ";
        } else {
            // line 157
            echo "                                <h5>Воля:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 157, $this->source); })()), "WillPower", [], "any", false, false, false, 157), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 159
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 161
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 161, $this->source); })()), "Dribble", [], "any", false, false, false, 161) == null)) {
            // line 162
            echo "                                <h5>Дрибъл: 0</h5>
                            ";
        } else {
            // line 164
            echo "                                <h5>Дрибъл:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 164, $this->source); })()), "Dribble", [], "any", false, false, false, 164), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 170, $this->source); })()), "Shot", [], "any", false, false, false, 170) == null)) {
            // line 171
            echo "                                <h5>Удар: 0</h5>
                            ";
        } else {
            // line 173
            echo "                                <h5>Удар:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 173, $this->source); })()), "Shot", [], "any", false, false, false, 173), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 175
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 177
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 177, $this->source); })()), "Technique", [], "any", false, false, false, 177) == null)) {
            // line 178
            echo "                                <h5>Техника: 0</h5>
                            ";
        } else {
            // line 180
            echo "                                <h5>Техника:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 180, $this->source); })()), "Technique", [], "any", false, false, false, 180), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 186, $this->source); })()), "Pass", [], "any", false, false, false, 186) == null)) {
            // line 187
            echo "                                <h5>Пас: 0</h5>
                            ";
        } else {
            // line 189
            echo "                                <h5>Пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 189, $this->source); })()), "Pass", [], "any", false, false, false, 189), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 191
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 193
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 193, $this->source); })()), "Perspective", [], "any", false, false, false, 193) == null)) {
            // line 194
            echo "                                <h5>Перспектива: 0</h5>
                            ";
        } else {
            // line 196
            echo "                                <h5>Перспектива:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 196, $this->source); })()), "Perspective", [], "any", false, false, false, 196), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 209, $this->source); })()), "longPass", [], "any", false, false, false, 209), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-1\">
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                <h2 class=\"d-inline-block\">Спокойствие на терена <span id=\"stat-2\"></span> </h2>
                <div class=\"slidecontainer \">
                  <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 215, $this->source); })()), "Relax", [], "any", false, false, false, 215), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 225, $this->source); })()), "Work", [], "any", false, false, false, 225), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-3\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Тактика: <span id=\"stat-4\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 231, $this->source); })()), "Tacticks", [], "any", false, false, false, 231), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 241, $this->source); })()), "willPower", [], "any", false, false, false, 241), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-5\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Дрибъл: <span id=\"stat-6\"></span> </h2>
                    <div class=\"slidecontainer \">
                        <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 248, $this->source); })()), "dribble", [], "any", false, false, false, 248), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 259, $this->source); })()), "shot", [], "any", false, false, false, 259), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-7\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Техника: <span id=\"stat-8\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 265
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 265, $this->source); })()), "Technique", [], "any", false, false, false, 265), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 275, $this->source); })()), "perspective", [], "any", false, false, false, 275), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-9\">
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                        <h2 class=\"d-inline-block\">Пас: <span id=\"stat-10\"></span> </h2>
                        <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 281
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 281, $this->source); })()), "pass", [], "any", false, false, false, 281), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerStats", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 386, $this->source); })()), "Id", [], "any", false, false, false, 386)]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  716 => 386,  608 => 281,  599 => 275,  586 => 265,  577 => 259,  563 => 248,  553 => 241,  540 => 231,  531 => 225,  518 => 215,  509 => 209,  496 => 198,  490 => 196,  486 => 194,  484 => 193,  480 => 191,  474 => 189,  470 => 187,  468 => 186,  462 => 182,  456 => 180,  452 => 178,  450 => 177,  446 => 175,  440 => 173,  436 => 171,  434 => 170,  428 => 166,  422 => 164,  418 => 162,  416 => 161,  412 => 159,  406 => 157,  402 => 155,  400 => 154,  394 => 150,  388 => 148,  384 => 146,  382 => 145,  378 => 143,  371 => 140,  367 => 138,  365 => 137,  359 => 133,  353 => 131,  349 => 129,  347 => 128,  343 => 126,  337 => 124,  333 => 122,  331 => 121,  325 => 117,  319 => 115,  315 => 113,  313 => 112,  309 => 110,  303 => 108,  299 => 106,  297 => 105,  291 => 101,  285 => 99,  281 => 97,  279 => 96,  275 => 94,  269 => 92,  262 => 89,  260 => 88,  245 => 75,  239 => 73,  235 => 71,  233 => 70,  224 => 63,  218 => 61,  214 => 59,  212 => 58,  203 => 51,  197 => 49,  193 => 47,  191 => 46,  182 => 39,  176 => 37,  172 => 35,  170 => 34,  158 => 25,  151 => 24,  145 => 22,  139 => 20,  137 => 19,  129 => 13,  119 => 12,  107 => 10,  102 => 9,  92 => 8,  79 => 5,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'coaches/base.html.twig' %}
{% block style %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/playerVisitCard.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/coach/playerStatPageStyle.css\") }}\">

{% endblock %}
{% block nav %}
    <a class=\"nav-item nav-link  ml-2\" href=\"{{ path('coacheViewAction') }}\">Начална страница</a>
    <a class=\"nav-item nav-link current-item ml-2\" href=\"{{ path(\"trainingView\") }}\">Тренировки</a>
{% endblock %}
{% block body %}

    <div class=\" justify-content-center row mt-4 mb-5\">
        <div class=\"col-12 justify-content-center text-center row \">
            <div class=\"text-center information-div row\">
                <div class=\"col-12 row player-visit-container\">
                    <div class=\"col-lg-4 col-sm-12 col-12 p-1 \">
                        {% if image == '0' or image == null  %}
                            <img src=\"{{asset(\"images/user1.png\")}}\" alt=\"\" class=\"profile-pic-changer  m-2\">
                        {% else %}
                            <img src=\"{{asset(\"images/\" ~ image)}}\" alt=\"\" class=\"profile-pic-changer m-2\">
                        {% endif %}
                        <h4> {{ player.User.Name }} {{ player.User.FName }}</h4>
                        <h6>{{ player.Position.Name }}</h6>
                    </div>
                    <div class=\" col-lg-8 col-sm-12 col-12 mx-auto text-center  justify-content-center\">
                        <div class=\"visiting-player-card-text-holder col-12\">
                            <h3 class=\" justify-content-center row\">Визитна карта </h3>
                        </div>
                        <div class=\"col-12 justify-content-center text-center row 0\">
                            <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                    {% if player.Team == null%}
                                        <h5>Отбор: Няма</h5>
                                    {% else %}
                                        <h5>Отбор: {{ player.Team.Name }}</h5>
                                    {% endif %}
                                </div>
                                <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                    <h5>Отбелязани голове: 0</h5>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                    {% if player.team.Division == null%}
                                        <h5>Първенство: Няма</h5>
                                    {% else %}
                                        <h5>Първенство: {{ player.team.Division.Name }}</h5>
                                    {% endif %}
                                </div>
                                <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                    <h5>Асистенции: 0</h5>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                    {% if player.User.City == null%}
                                        <h5>Националност: Не е зададен</h5>
                                    {% else %}
                                        <h5>Националност: {{ player.User.City.Country.Name }}</h5>
                                    {% endif %}
                                </div>
                                <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                    <h5>Изиграни мачове: 0</h5>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                    {% if player.BirthDay == null%}
                                        <h5>Ден на раждане: Не е зададен</h5>
                                    {% else %}
                                        <h5>Ден на раждане: {{ player.BirthDay |date(\"d.m.Y\")|join }}</h5>
                                    {% endif %}

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
                            {% if playerStats.Weight == null%}
                                <img src=\"{{ asset(\"images/weight-machine.png\") }}\" alt=\"\" class=\"player-stats-image\">
                                <h5>Килограми: 0кг</h5>
                            {% else %}
                                <h5>Килограми: {{ playerStats.Weight }}кг</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Height == null%}
                                <h5>Височина: 0см</h5>
                            {% else %}
                                <h5>Височина: {{ playerStats.Height }}см</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0  mt-4  myBorderPlayerStat-left text-center\">
                            {% if playerStats.Pace == null%}
                                <h5>Скорост: 0 km/h</h5>
                            {% else %}
                                <h5>Скорост: {{ playerStats.Pace }} km/h</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            {% if playerStats.LongPass == null%}
                                <h5>Дълъг пас: 0</h5>
                            {% else %}
                                <h5>Дълъг пас: {{ playerStats.LongPass}}</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Relax == null%}
                                <h5>Спокойствие на терена: 0</h5>
                            {% else %}
                                <h5>Спокойствие на терена: {{ playerStats.Relax}}</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            {% if playerStats.Fat == null%}
                                <h5>Подкожни мазнини: 0%</h5>
                            {% else %}
                                <h5>Подкожни мазнини: {{ playerStats.Fat }}%</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Work == null%}
                                <h5>Усърдна работа: 0</h5>
                            {% else %}
                                <h5>Усърдна работа: {{ playerStats.Work}}</h5>

                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Tacticks == null%}
                                <h5>Тактика: 0</h5>
                            {% else %}
                                <h5>Тактика: {{ playerStats.Tacticks }}</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.WillPower == null%}
                                <h5>Воля: 0</h5>
                            {% else %}
                                <h5>Воля:{{ playerStats.WillPower}}</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Dribble == null%}
                                <h5>Дрибъл: 0</h5>
                            {% else %}
                                <h5>Дрибъл:{{ playerStats.Dribble }}</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Shot == null%}
                                <h5>Удар: 0</h5>
                            {% else %}
                                <h5>Удар:{{ playerStats.Shot }}</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Technique == null%}
                                <h5>Техника: 0</h5>
                            {% else %}
                                <h5>Техника:{{ playerStats.Technique }}</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Pass == null%}
                                <h5>Пас: 0</h5>
                            {% else %}
                                <h5>Пас: {{ playerStats.Pass }}</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Perspective == null%}
                                <h5>Перспектива: 0</h5>
                            {% else %}
                                <h5>Перспектива:{{ playerStats.Perspective}}</h5>
                            {% endif %}
                        </div>
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
                  <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.longPass }}\" class=\"slider\" id=\"myRange-1\">
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                <h2 class=\"d-inline-block\">Спокойствие на терена <span id=\"stat-2\"></span> </h2>
                <div class=\"slidecontainer \">
                  <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.Relax }}\" class=\"slider\" id=\"myRange-2\">
                </div>
            </div>
        </div>
    </div>
        <div id=\"container col-12\">
            <div class=\"row   justify-content-center\">
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5  text-center\">
                    <h2 class=\"d-inline-block\">Усърдна работа: <span id=\"stat-3\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.Work }}\" class=\"slider\" id=\"myRange-3\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Тактика: <span id=\"stat-4\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.Tacticks }}\" class=\"slider\" id=\"myRange-4\">
                    </div>
                </div>
            </div>
        </div>
        <div id=\"container col-12\">
            <div class=\"row  justify-content-center\">
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Воля: <span id=\"stat-5\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.willPower }}\" class=\"slider\" id=\"myRange-5\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Дрибъл: <span id=\"stat-6\"></span> </h2>
                    <div class=\"slidecontainer \">
                        <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.dribble }}\" class=\"slider\" id=\"myRange-6\">
                    </div>
                </div>

            </div>
        </div>
    <div id=\"container col-12\">
            <div class=\"row   justify-content-center\">
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Удар: <span id=\"stat-7\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.shot }}\" class=\"slider\" id=\"myRange-7\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Техника: <span id=\"stat-8\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.Technique }}\" class=\"slider\" id=\"myRange-8\">
                    </div>
                </div>
            </div>
        </div>
        <div id=\"container col-12\">
            <div class=\"row   justify-content-center\">
                    <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                        <h2 class=\"d-inline-block\">Перспектива: <span id=\"stat-9\"></span> </h2>
                        <div class=\"slidecontainer \">
                          <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.perspective }}\" class=\"slider\" id=\"myRange-9\">
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                        <h2 class=\"d-inline-block\">Пас: <span id=\"stat-10\"></span> </h2>
                        <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.pass }}\" class=\"slider\" id=\"myRange-10\">
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
                    url: \"{{ path('playerStats', {id: player.Id}) }}\",
                })
                    .done(function (msg) {
                        window.location.href = \"/coache/training/\";
                        console.log(msg);
                        console.log(slider.value);

                    });
            }
        });



    </script>

{% endblock %}", "coaches/playerStat.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\playerStat.html.twig");
    }
}
