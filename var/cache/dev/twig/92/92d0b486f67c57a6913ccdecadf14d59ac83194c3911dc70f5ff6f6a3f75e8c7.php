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
            echo "                                <h5>Килограми: 0кг</h5>
                            ";
        } else {
            // line 91
            echo "                                <h5>Килограми: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 91, $this->source); })()), "Weight", [], "any", false, false, false, 91), "html", null, true);
            echo "кг</h5>
                            ";
        }
        // line 93
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 95, $this->source); })()), "Height", [], "any", false, false, false, 95) == null)) {
            // line 96
            echo "                                <h5>Височина: 0см</h5>
                            ";
        } else {
            // line 98
            echo "                                <h5>Височина: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 98, $this->source); })()), "Height", [], "any", false, false, false, 98), "html", null, true);
            echo "см</h5>
                            ";
        }
        // line 100
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0  mt-4  myBorderPlayerStat-left text-center\">
                            ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 104, $this->source); })()), "Pace", [], "any", false, false, false, 104) == null)) {
            // line 105
            echo "                                <h5>Скорост: 0 km/h</h5>
                            ";
        } else {
            // line 107
            echo "                                <h5>Скорост: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 107, $this->source); })()), "Pace", [], "any", false, false, false, 107), "html", null, true);
            echo " km/h</h5>
                            ";
        }
        // line 109
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 111
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 111, $this->source); })()), "LongPass", [], "any", false, false, false, 111) == null)) {
            // line 112
            echo "                                <h5>Дълъг пас: 0</h5>
                            ";
        } else {
            // line 114
            echo "                                <h5>Дълъг пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 114, $this->source); })()), "LongPass", [], "any", false, false, false, 114), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 116
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 120
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 120, $this->source); })()), "Relax", [], "any", false, false, false, 120) == null)) {
            // line 121
            echo "                                <h5>Спокойствие на терена: 0</h5>
                            ";
        } else {
            // line 123
            echo "                                <h5>Спокойствие на терена: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 123, $this->source); })()), "Relax", [], "any", false, false, false, 123), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 125
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            ";
        // line 127
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 127, $this->source); })()), "Fat", [], "any", false, false, false, 127) == null)) {
            // line 128
            echo "                                <h5>Подкожни мазнини: 0%</h5>
                            ";
        } else {
            // line 130
            echo "                                <h5>Подкожни мазнини: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 130, $this->source); })()), "Fat", [], "any", false, false, false, 130), "html", null, true);
            echo "%</h5>
                            ";
        }
        // line 132
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 136
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 136, $this->source); })()), "Work", [], "any", false, false, false, 136) == null)) {
            // line 137
            echo "                                <h5>Усърдна работа: 0</h5>
                            ";
        } else {
            // line 139
            echo "                                <h5>Усърдна работа: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 139, $this->source); })()), "Work", [], "any", false, false, false, 139), "html", null, true);
            echo "</h5>

                            ";
        }
        // line 142
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 144
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 144, $this->source); })()), "Tacticks", [], "any", false, false, false, 144) == null)) {
            // line 145
            echo "                                <h5>Тактика: 0</h5>
                            ";
        } else {
            // line 147
            echo "                                <h5>Тактика: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 147, $this->source); })()), "Tacticks", [], "any", false, false, false, 147), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 149
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 153
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 153, $this->source); })()), "WillPower", [], "any", false, false, false, 153) == null)) {
            // line 154
            echo "                                <h5>Воля: 0</h5>
                            ";
        } else {
            // line 156
            echo "                                <h5>Воля:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 156, $this->source); })()), "WillPower", [], "any", false, false, false, 156), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 158
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 160
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 160, $this->source); })()), "Dribble", [], "any", false, false, false, 160) == null)) {
            // line 161
            echo "                                <h5>Дрибъл: 0</h5>
                            ";
        } else {
            // line 163
            echo "                                <h5>Дрибъл:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 163, $this->source); })()), "Dribble", [], "any", false, false, false, 163), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 165
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 169
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 169, $this->source); })()), "Shot", [], "any", false, false, false, 169) == null)) {
            // line 170
            echo "                                <h5>Удар: 0</h5>
                            ";
        } else {
            // line 172
            echo "                                <h5>Удар:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 172, $this->source); })()), "Shot", [], "any", false, false, false, 172), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 174
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 176
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 176, $this->source); })()), "Technique", [], "any", false, false, false, 176) == null)) {
            // line 177
            echo "                                <h5>Техника: 0</h5>
                            ";
        } else {
            // line 179
            echo "                                <h5>Техника:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 179, $this->source); })()), "Technique", [], "any", false, false, false, 179), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 181
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 185
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 185, $this->source); })()), "Pass", [], "any", false, false, false, 185) == null)) {
            // line 186
            echo "                                <h5>Пас: 0</h5>
                            ";
        } else {
            // line 188
            echo "                                <h5>Пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 188, $this->source); })()), "Pass", [], "any", false, false, false, 188), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 190
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 192
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 192, $this->source); })()), "Perspective", [], "any", false, false, false, 192) == null)) {
            // line 193
            echo "                                <h5>Перспектива: 0</h5>
                            ";
        } else {
            // line 195
            echo "                                <h5>Перспектива:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 195, $this->source); })()), "Perspective", [], "any", false, false, false, 195), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 197
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
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 208, $this->source); })()), "longPass", [], "any", false, false, false, 208), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-1\">
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                <h2 class=\"d-inline-block\">Спокойствие на терена <span id=\"stat-2\"></span> </h2>
                <div class=\"slidecontainer \">
                  <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 214, $this->source); })()), "Relax", [], "any", false, false, false, 214), "html", null, true);
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
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 224, $this->source); })()), "Work", [], "any", false, false, false, 224), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-3\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Тактика: <span id=\"stat-4\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 230, $this->source); })()), "Tacticks", [], "any", false, false, false, 230), "html", null, true);
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
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 240, $this->source); })()), "willPower", [], "any", false, false, false, 240), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-5\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Дрибъл: <span id=\"stat-6\"></span> </h2>
                    <div class=\"slidecontainer \">
                        <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 247, $this->source); })()), "dribble", [], "any", false, false, false, 247), "html", null, true);
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
        // line 258
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 258, $this->source); })()), "shot", [], "any", false, false, false, 258), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-7\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Техника: <span id=\"stat-8\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 264, $this->source); })()), "Technique", [], "any", false, false, false, 264), "html", null, true);
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
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 274, $this->source); })()), "perspective", [], "any", false, false, false, 274), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-9\">
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                        <h2 class=\"d-inline-block\">Пас: <span id=\"stat-10\"></span> </h2>
                        <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 280
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 280, $this->source); })()), "pass", [], "any", false, false, false, 280), "html", null, true);
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
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerStats", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 385, $this->source); })()), "Id", [], "any", false, false, false, 385)]), "html", null, true);
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
        return array (  713 => 385,  605 => 280,  596 => 274,  583 => 264,  574 => 258,  560 => 247,  550 => 240,  537 => 230,  528 => 224,  515 => 214,  506 => 208,  493 => 197,  487 => 195,  483 => 193,  481 => 192,  477 => 190,  471 => 188,  467 => 186,  465 => 185,  459 => 181,  453 => 179,  449 => 177,  447 => 176,  443 => 174,  437 => 172,  433 => 170,  431 => 169,  425 => 165,  419 => 163,  415 => 161,  413 => 160,  409 => 158,  403 => 156,  399 => 154,  397 => 153,  391 => 149,  385 => 147,  381 => 145,  379 => 144,  375 => 142,  368 => 139,  364 => 137,  362 => 136,  356 => 132,  350 => 130,  346 => 128,  344 => 127,  340 => 125,  334 => 123,  330 => 121,  328 => 120,  322 => 116,  316 => 114,  312 => 112,  310 => 111,  306 => 109,  300 => 107,  296 => 105,  294 => 104,  288 => 100,  282 => 98,  278 => 96,  276 => 95,  272 => 93,  266 => 91,  262 => 89,  260 => 88,  245 => 75,  239 => 73,  235 => 71,  233 => 70,  224 => 63,  218 => 61,  214 => 59,  212 => 58,  203 => 51,  197 => 49,  193 => 47,  191 => 46,  182 => 39,  176 => 37,  172 => 35,  170 => 34,  158 => 25,  151 => 24,  145 => 22,  139 => 20,  137 => 19,  129 => 13,  119 => 12,  107 => 10,  102 => 9,  92 => 8,  79 => 5,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
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
