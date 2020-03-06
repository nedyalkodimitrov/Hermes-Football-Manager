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

/* coaches/trainings/training.html.twig */
class __TwigTemplate_8a8e06c3941b745097dea1b5423951b3707a3cff02e65b01779be7137120b974 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/trainings/training.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/trainings/training.html.twig"));

        $this->parent = $this->loadTemplate("coaches/base.html.twig", "coaches/trainings/training.html.twig", 1);
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
        echo "    <a class=\"nav-item nav-link  ml-2\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coacheViewAction");
        echo "\">Начална страница</a>
    <a class=\"nav-item nav-link current-item ml-2\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingView");
        echo "\">Тренировки</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 7
        echo "    ";
        $this->displayParentBlock("style", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"  ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/hiddenFormStyle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/searchEngine.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coach/trainingPageStyle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/searchResultsTable.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["coachTeamImage"]) || array_key_exists("coachTeamImage", $context) ? $context["coachTeamImage"] : (function () { throw new RuntimeError('Variable "coachTeamImage" does not exist.', 15, $this->source); })()))), "html", null, true);
        echo "\" class=\"mx-auto team-image mt-3\" alt=\"\">
    <h2 class=\"text-center mt-1\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["coachTeamName"]) || array_key_exists("coachTeamName", $context) ? $context["coachTeamName"] : (function () { throw new RuntimeError('Variable "coachTeamName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</h2>
    <div id=\"container\">
        <div class=\"row mt-1 justify-content-center \">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 coach-player-adding-container justify-content-around row pb-3\">
                <div class=\"col-12 mb-1 mt-2\">
                    <h4>Вратари</h4>
                </div>
                ";
        // line 23
        $context["foo"] = 1;
        // line 24
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 25
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Position", [], "any", false, false, false, 25) == "Goalkeeper")) {
                // line 26
                echo "                        <div class=\"col-lg-3 col-sm-12 col-md-12 mt-4 justify-content-center row mb-sm-2\">
                            <div class=\"col-12 player-container \" id=\"player-";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 27, $this->source); })()), "html", null, true);
                echo " \">
                                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerAction", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">
                                    ";
                // line 29
                if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 29) == 0)) {
                    // line 30
                    echo "                                        <div class=\"status-green\"></div>
                                    ";
                } else {
                    // line 32
                    echo "                                        <div class=\"status-red\"></div>
                                    ";
                }
                // line 34
                echo "
                                    ";
                // line 35
                if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 35) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 35) == " "))) {
                    // line 36
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                    ";
                } else {
                    // line 38
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 38))), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                    ";
                }
                // line 40
                echo "
                                    <p class=\"player-name\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 41), "Name", [], "any", false, false, false, 41), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 41), "FName", [], "any", false, false, false, 41), "html", null, true);
                echo " </p>
                                </a>
                            </div>
                        </div>

                    ";
            }
            // line 47
            echo "                    ";
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 47, $this->source); })()) + 1);
            // line 48
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
                <div class=\"col-12 mt-5 mb-1\">
                    <h4>Защитници</h4>
                </div>
                ";
        // line 53
        $context["foo"] = 1;
        // line 54
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 55
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Position", [], "any", false, false, false, 55) == "Defender")) {
                // line 56
                echo "
                    <div class=\"col-lg-3 col-sm-12 col-md-12 mt-4 justify-content-center row mb-sm-2\">
                        <div class=\"col-12 player-container \" id=\"player-";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 58, $this->source); })()), "html", null, true);
                echo " \">
                            <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerAction", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\">
                                ";
                // line 60
                if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 60) == 0)) {
                    // line 61
                    echo "                                    <div class=\"status-green\"></div>
                                ";
                } else {
                    // line 63
                    echo "                                    <div class=\"status-red\"></div>
                                ";
                }
                // line 65
                echo "
                                ";
                // line 66
                if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 66) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 66) == " "))) {
                    // line 67
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                ";
                } else {
                    // line 69
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 69))), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                ";
                }
                // line 71
                echo "
                                <p class=\"player-name\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 72), "Name", [], "any", false, false, false, 72), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 72), "FName", [], "any", false, false, false, 72), "html", null, true);
                echo " </p>
                            </a>
                        </div>
                    </div>

                    ";
            }
            // line 78
            echo "                    ";
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 78, $this->source); })()) + 1);
            // line 79
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "    <div class=\"col-12 mt-5 mb-1\">
                    <h4>Халфове</h4>
                </div>
                ";
        // line 82
        $context["foo"] = 1;
        // line 83
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 84
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Position", [], "any", false, false, false, 84) == "Midfilder")) {
                // line 85
                echo "
                    <div class=\"col-lg-3 col-sm-12 col-md-12 mt-4 justify-content-center row mb-sm-2\">
                        <div class=\"col-12 player-container \" id=\"player-";
                // line 87
                echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 87, $this->source); })()), "html", null, true);
                echo " \">
                            <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerAction", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                echo "\">
                                ";
                // line 89
                if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 89) == 0)) {
                    // line 90
                    echo "                                    <div class=\"status-green\"></div>
                                ";
                } else {
                    // line 92
                    echo "                                    <div class=\"status-red\"></div>
                                ";
                }
                // line 94
                echo "
                                ";
                // line 95
                if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 95) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 95) == " "))) {
                    // line 96
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                ";
                } else {
                    // line 98
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 98))), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                ";
                }
                // line 100
                echo "
                                <p class=\"player-name\">";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 101), "Name", [], "any", false, false, false, 101), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 101), "FName", [], "any", false, false, false, 101), "html", null, true);
                echo " </p>
                            </a>
                        </div>
                    </div>

                    ";
            }
            // line 107
            echo "                    ";
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 107, $this->source); })()) + 1);
            // line 108
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
                <div class=\"col-12 mt-5 mb-1\">
                    <h4>Нападатели</h4>
                </div>
                ";
        // line 113
        $context["foo"] = 1;
        // line 114
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 115
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Position", [], "any", false, false, false, 115) == "Attacker")) {
                // line 116
                echo "
                    <div class=\"col-lg-3 col-sm-12 mt-4 col-md-12 justify-content-center row mb-sm-2\">
                        <div class=\"col-12 player-container \" id=\"player-";
                // line 118
                echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 118, $this->source); })()), "html", null, true);
                echo " \">
                            <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerAction", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                echo "\">
                                ";
                // line 120
                if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 120) == 0)) {
                    // line 121
                    echo "                                    <div class=\"status-green\"></div>
                                ";
                } else {
                    // line 123
                    echo "                                    <div class=\"status-red\"></div>
                                ";
                }
                // line 125
                echo "
                                ";
                // line 126
                if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 126) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 126) == " "))) {
                    // line 127
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                ";
                } else {
                    // line 129
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 129))), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                ";
                }
                // line 131
                echo "
                                <p class=\"player-name\">";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 132), "Name", [], "any", false, false, false, 132), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 132), "FName", [], "any", false, false, false, 132), "html", null, true);
                echo " </p>
                            </a>
                        </div>
                    </div>

                    ";
            }
            // line 138
            echo "                    ";
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 138, $this->source); })()) + 1);
            // line 139
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                <div class=\"add-team-circle-container  row \" id=\"add-player-container\">
                    <div class=\"add-team-circle\" id=\"player- \">
                        <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
        echo "\" alt=\"\" class=\"add-team \" >

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center \">
        <div class=\"col-9  player-status-div   justify-content-center\" id=\"add-player\" >
            <div class=\"container col-12 row justify-content-center search-container-holder\">
                <div class=\"search-container mt-3  justify-content-center\">
                    <div class=\"search-box full-sized-search-box\">
                        <input type=\"text\" placeholder=\"Ивайло Колев\" class=\"search-text\" id=\"search\">
                        <button  class=\"search-button\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"container col-12 p-0 mx-auto row\">
                <div class=\"playerSearchResult col-12 p-0  \">
                </div>
            </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>
    <script type=\"text/javascript\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/coach/searchPlayers.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/coach/sendRequestToPlayer.js"), "html", null, true);
        echo "\"></script>

    <script>
       function Click (value) {



           \$.ajax({
               method: \"POST\",
               data: {\"playerInfo\": value},
               url: \"sendPlayerRequest/\"+value,
           })
               .done(function (data) {

                   console.log(value)
               });
               };

    </script>

";
        // line 206
        echo "

";
        // line 218
        echo "
";
        // line 220
        echo "
";
        // line 224
        echo "

";
        // line 239
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/hidingDiv.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coaches/trainings/training.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 240,  532 => 239,  528 => 224,  525 => 220,  522 => 218,  518 => 206,  495 => 170,  491 => 169,  487 => 168,  458 => 142,  454 => 140,  448 => 139,  445 => 138,  434 => 132,  431 => 131,  425 => 129,  419 => 127,  417 => 126,  414 => 125,  410 => 123,  406 => 121,  404 => 120,  400 => 119,  396 => 118,  392 => 116,  389 => 115,  384 => 114,  382 => 113,  376 => 109,  370 => 108,  367 => 107,  356 => 101,  353 => 100,  347 => 98,  341 => 96,  339 => 95,  336 => 94,  332 => 92,  328 => 90,  326 => 89,  322 => 88,  318 => 87,  314 => 85,  311 => 84,  306 => 83,  304 => 82,  294 => 79,  291 => 78,  280 => 72,  277 => 71,  271 => 69,  265 => 67,  263 => 66,  260 => 65,  256 => 63,  252 => 61,  250 => 60,  246 => 59,  242 => 58,  238 => 56,  235 => 55,  230 => 54,  228 => 53,  222 => 49,  216 => 48,  213 => 47,  202 => 41,  199 => 40,  193 => 38,  187 => 36,  185 => 35,  182 => 34,  178 => 32,  174 => 30,  172 => 29,  168 => 28,  164 => 27,  161 => 26,  158 => 25,  153 => 24,  151 => 23,  141 => 16,  136 => 15,  126 => 14,  114 => 11,  110 => 10,  106 => 9,  102 => 8,  97 => 7,  87 => 6,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'coaches/base.html.twig' %}
{% block nav %}
    <a class=\"nav-item nav-link  ml-2\" href=\"{{ path('coacheViewAction') }}\">Начална страница</a>
    <a class=\"nav-item nav-link current-item ml-2\" href=\"{{ path(\"trainingView\") }}\">Тренировки</a>
{% endblock %}
{% block style %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/particles/hiddenFormStyle.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/particles/searchEngine.css\") }}\">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/coach/trainingPageStyle.css\") }}\">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/particles/searchResultsTable.css\") }}\">
{% endblock %}

{% block body %}
    <img src=\"{{ asset(\"images/\" ~ coachTeamImage) }}\" class=\"mx-auto team-image mt-3\" alt=\"\">
    <h2 class=\"text-center mt-1\">{{ coachTeamName }}</h2>
    <div id=\"container\">
        <div class=\"row mt-1 justify-content-center \">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 coach-player-adding-container justify-content-around row pb-3\">
                <div class=\"col-12 mb-1 mt-2\">
                    <h4>Вратари</h4>
                </div>
                {% set foo = 1 %}
                {% for player in players %}
                    {% if player.Position == \"Goalkeeper\" %}
                        <div class=\"col-lg-3 col-sm-12 col-md-12 mt-4 justify-content-center row mb-sm-2\">
                            <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">
                                <a href=\"{{ path(\"playerAction\", {id: player.id}) }}\">
                                    {%   if  player.Status == 0 %}
                                        <div class=\"status-green\"></div>
                                    {% else %}
                                        <div class=\"status-red\"></div>
                                    {%  endif %}

                                    {% if player.Image == null or player.Image == ' ' %}
                                        <img src=\"{{asset('images/user-image.png')}}\" alt=\"\" class=\"player-img\">
                                    {% else %}
                                        <img src=\"{{asset('images/'~ player.Image )}}\" alt=\"\" class=\"player-img\">
                                    {% endif %}

                                    <p class=\"player-name\">{{ player.User.Name }} {{ player.User.FName }} </p>
                                </a>
                            </div>
                        </div>

                    {% endif %}
                    {% set foo = foo + 1 %}
                {% endfor %}

                <div class=\"col-12 mt-5 mb-1\">
                    <h4>Защитници</h4>
                </div>
                {% set foo = 1 %}
                {% for player in players %}
                    {% if player.Position == \"Defender\" %}

                    <div class=\"col-lg-3 col-sm-12 col-md-12 mt-4 justify-content-center row mb-sm-2\">
                        <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">
                            <a href=\"{{ path(\"playerAction\", {id: player.id}) }}\">
                                {%   if  player.Status == 0 %}
                                    <div class=\"status-green\"></div>
                                {% else %}
                                    <div class=\"status-red\"></div>
                                {%  endif %}

                                {% if player.Image == null or player.Image == ' ' %}
                                    <img src=\"{{asset('images/user-image.png')}}\" alt=\"\" class=\"player-img\">
                                {% else %}
                                    <img src=\"{{asset('images/'~ player.Image )}}\" alt=\"\" class=\"player-img\">
                                {% endif %}

                                <p class=\"player-name\">{{ player.User.Name }} {{ player.User.FName }} </p>
                            </a>
                        </div>
                    </div>

                    {% endif %}
                    {% set foo = foo + 1 %}
                {% endfor %}    <div class=\"col-12 mt-5 mb-1\">
                    <h4>Халфове</h4>
                </div>
                {% set foo = 1 %}
                {% for player in players %}
                    {% if player.Position == \"Midfilder\" %}

                    <div class=\"col-lg-3 col-sm-12 col-md-12 mt-4 justify-content-center row mb-sm-2\">
                        <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">
                            <a href=\"{{ path(\"playerAction\", {id: player.id}) }}\">
                                {%   if  player.Status == 0 %}
                                    <div class=\"status-green\"></div>
                                {% else %}
                                    <div class=\"status-red\"></div>
                                {%  endif %}

                                {% if player.Image == null or player.Image == ' ' %}
                                    <img src=\"{{asset('images/user-image.png')}}\" alt=\"\" class=\"player-img\">
                                {% else %}
                                    <img src=\"{{asset('images/'~ player.Image )}}\" alt=\"\" class=\"player-img\">
                                {% endif %}

                                <p class=\"player-name\">{{ player.User.Name }} {{ player.User.FName }} </p>
                            </a>
                        </div>
                    </div>

                    {% endif %}
                    {% set foo = foo + 1 %}
                {% endfor %}

                <div class=\"col-12 mt-5 mb-1\">
                    <h4>Нападатели</h4>
                </div>
                {% set foo = 1 %}
                {% for player in players %}
                    {% if player.Position == \"Attacker\" %}

                    <div class=\"col-lg-3 col-sm-12 mt-4 col-md-12 justify-content-center row mb-sm-2\">
                        <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">
                            <a href=\"{{ path(\"playerAction\", {id: player.id}) }}\">
                                {%   if  player.Status == 0 %}
                                    <div class=\"status-green\"></div>
                                {% else %}
                                    <div class=\"status-red\"></div>
                                {%  endif %}

                                {% if player.Image == null or player.Image == ' ' %}
                                    <img src=\"{{asset('images/user-image.png')}}\" alt=\"\" class=\"player-img\">
                                {% else %}
                                    <img src=\"{{asset('images/'~ player.Image )}}\" alt=\"\" class=\"player-img\">
                                {% endif %}

                                <p class=\"player-name\">{{ player.User.Name }} {{ player.User.FName }} </p>
                            </a>
                        </div>
                    </div>

                    {% endif %}
                    {% set foo = foo + 1 %}
                {% endfor %}
                <div class=\"add-team-circle-container  row \" id=\"add-player-container\">
                    <div class=\"add-team-circle\" id=\"player- \">
                        <img src=\"{{ asset('images/plus .png') }}\" alt=\"\" class=\"add-team \" >

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center \">
        <div class=\"col-9  player-status-div   justify-content-center\" id=\"add-player\" >
            <div class=\"container col-12 row justify-content-center search-container-holder\">
                <div class=\"search-container mt-3  justify-content-center\">
                    <div class=\"search-box full-sized-search-box\">
                        <input type=\"text\" placeholder=\"Ивайло Колев\" class=\"search-text\" id=\"search\">
                        <button  class=\"search-button\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"container col-12 p-0 mx-auto row\">
                <div class=\"playerSearchResult col-12 p-0  \">
                </div>
            </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>
    <script type=\"text/javascript\" src=\"{{  asset(\"mdb/js/jquery-3.3.1.min.js\")}}\"></script>
    <script type=\"text/javascript\" src=\"{{  asset(\"js/coach/searchPlayers.js\")}}\"></script>
    <script type=\"text/javascript\" src=\"{{  asset(\"js/coach/sendRequestToPlayer.js\")}}\"></script>

    <script>
       function Click (value) {



           \$.ajax({
               method: \"POST\",
               data: {\"playerInfo\": value},
               url: \"sendPlayerRequest/\"+value,
           })
               .done(function (data) {

                   console.log(value)
               });
               };

    </script>

{#    <script>#}
{#        // \$('.phone').inputmask('Regex', {#}
{#        //     regex: \"08([7-9])([0-9]{7})+\",#}
{#        //     alias: \"string\",#}
{#        //     clearIncomplete: true#}
{#        // });#}
{#        // \$(\".name\").inputmask(\"Regex\", {#}
{#        //     regex:'[А-Я][а-я]+' ,#}
{#        //     alias: \"string\",#}
{#        //     clearIncomplete: true#}
{#        // });#}
{#        // \$(\".fName\").inputmask(\"Regex\", {#}
{#        //     regex:'[А-Я][а-я]+' ,#}
{#        //     alias: \"string\",#}
{#        //     clearIncomplete: true#}
{#        // });#}


{#        \$('#search').on('keyup', function () {#}
{#            var playerInfo = document.getElementById('search').value;#}
{#            console.log(playerInfo);#}
{#            \$.ajax({#}
{#                method: \"POST\",#}
{#                data: {\"playerInfo\": playerInfo},#}
{#                url: \"{{ path('trainingAction') }}\",#}
{#            })#}
{#                .done(function( players ) {#}
{#                    for (var i = 0; i < players.length; i++){#}

{#                        var imagePath = players[i][0]['player']['img'];#}

{#                        if(imagePath == null){#}
{#                            imagePath = \"user-image.png\";#}
{#                        }#}


{#                        \$('.player').remove();#}
{#                        \$('.player-search-results').append#}
{#                        (\"<div class=\\\"col-lg-4 col-sm-12 ml-2 col-md-12 justify-content-center row mb-sm-2 player \\\">\" +#}
{#                            \"<div class='col-12 player-container player' id=player-1 >\"+#}
{#                                \"<a>\"+#}
{#                                    \"<img src='../images/\"+ imagePath + \"' alt='' class=player-img>\"+#}
{#                                    \"<p class=player-name>\"+ players[i][0]['name']+\"</p>\"+#}
{#                                \"</a>\"+#}
{#                            \"</div>\"+#}
{#                            \"</div>\")#}
{#                    }#}
{#                });#}
{#        });#}

    <script type=\"text/javascript\" src=\"{{ asset(\"js/hidingDiv.js\") }}\"></script>
{% endblock %}", "coaches/trainings/training.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\trainings\\training.html.twig");
    }
}
