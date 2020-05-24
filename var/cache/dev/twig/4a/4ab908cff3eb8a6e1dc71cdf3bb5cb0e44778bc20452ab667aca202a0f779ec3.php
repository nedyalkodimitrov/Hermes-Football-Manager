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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coach/trainingPageStyle.css  "), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/searchResultsTable.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["coachTeamImage"]) || array_key_exists("coachTeamImage", $context) ? $context["coachTeamImage"] : (function () { throw new RuntimeError('Variable "coachTeamImage" does not exist.', 16, $this->source); })()))), "html", null, true);
        echo "\" class=\"mx-auto team-image mt-3\" alt=\"\">
    <h2 class=\"text-center mt-1\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["coachTeamName"]) || array_key_exists("coachTeamName", $context) ? $context["coachTeamName"] : (function () { throw new RuntimeError('Variable "coachTeamName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</h2>
    <div id=\"container\">
        <div class=\"row mt-1 justify-content-center col-12\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 p-0 m-0 coach-player-adding-container justify-content-center row pb-3\">
                <div class=\"col-12 mb-1 mt-2\">
                    <h4 class=\"col-12 text-center\">Вратари</h4>
                </div>
                <div class=\"col-12 row players-row m-0 p-0 justify-content-center\">
                    ";
        // line 25
        $context["foo"] = 1;
        // line 26
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 27
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Position", [], "any", false, false, false, 27) == "Goalkeeper")) {
                // line 28
                echo "                            <div class=\"col-lg-3 col-sm-12 col-md-12 mt-4 justify-content-center row mb-sm-2 p-0\">
                                <div class=\"col-11 player-container \" id=\"player-";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 29, $this->source); })()), "html", null, true);
                echo " \">
                                    <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerStatsView", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">
                                        ";
                // line 31
                if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 31) == 0)) {
                    // line 32
                    echo "                                            <div class=\"status-green\"></div>
                                        ";
                } else {
                    // line 34
                    echo "                                            <div class=\"status-red\"></div>
                                        ";
                }
                // line 36
                echo "
                                        ";
                // line 37
                if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 37) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 37) == " "))) {
                    // line 38
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                        ";
                } else {
                    // line 40
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 40))), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                        ";
                }
                // line 42
                echo "
                                        <p class=\"player-name\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 43), "Name", [], "any", false, false, false, 43), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 43), "FName", [], "any", false, false, false, 43), "html", null, true);
                echo " </p>
                                    </a>
                                </div>
                            </div>

                        ";
            }
            // line 49
            echo "                        ";
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 49, $this->source); })()) + 1);
            // line 50
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </div>
                <hr class=\"col-9 mt-4 mx-auto\">
                <div class=\"col-12 mt-3 mb-1\">
                    <h4  class=\"col-12 text-center\">Защитници</h4>
                </div>
                <div class=\"col-12 row players-row m-0 p-0 justify-content-center\">
                    ";
        // line 57
        $context["foo"] = 1;
        // line 58
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 59
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Position", [], "any", false, false, false, 59) == "Defender")) {
                // line 60
                echo "
                        <div class=\"col-lg-3 col-sm-12 col-md-12 mt-4 justify-content-center row mb-sm-2\">
                            <div class=\"col-12 player-container \" id=\"player-";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 62, $this->source); })()), "html", null, true);
                echo " \">
                                <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerStatsView", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\">
                                    ";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 64) == 0)) {
                    // line 65
                    echo "                                        <div class=\"status-green\"></div>
                                    ";
                } else {
                    // line 67
                    echo "                                        <div class=\"status-red\"></div>
                                    ";
                }
                // line 69
                echo "
                                    ";
                // line 70
                if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 70) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 70) == " "))) {
                    // line 71
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                    ";
                } else {
                    // line 73
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 73))), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                    ";
                }
                // line 75
                echo "
                                    <p class=\"player-name\">";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 76), "Name", [], "any", false, false, false, 76), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 76), "FName", [], "any", false, false, false, 76), "html", null, true);
                echo " </p>
                                </a>
                            </div>
                        </div>

                        ";
            }
            // line 82
            echo "                        ";
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 82, $this->source); })()) + 1);
            // line 83
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </div>
                <hr class=\"col-9 mt-4 mx-auto\">
                <div class=\"col-12 mt-3 mb-1\">
                    <h4 class=\"col-12 text-center \">Халфове</h4>
                </div>
                <div class=\"col-12 row players-row m-0 p-0 justify-content-center\">
                    ";
        // line 90
        $context["foo"] = 1;
        // line 91
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 92
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Position", [], "any", false, false, false, 92) == "Midfielder")) {
                // line 93
                echo "                            <div class=\"col-lg-3 col-sm-12 col-md-12 mt-4 justify-content-center row mb-sm-2\">
                                <div class=\"col-12 player-container \" id=\"player-";
                // line 94
                echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 94, $this->source); })()), "html", null, true);
                echo " \">
                                    <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerStatsView", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 95)]), "html", null, true);
                echo "\">
                                        ";
                // line 96
                if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 96) == 0)) {
                    // line 97
                    echo "                                            <div class=\"status-green\"></div>
                                        ";
                } else {
                    // line 99
                    echo "                                            <div class=\"status-red\"></div>
                                        ";
                }
                // line 101
                echo "
                                        ";
                // line 102
                if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 102) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 102) == " "))) {
                    // line 103
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                        ";
                } else {
                    // line 105
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 105))), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                        ";
                }
                // line 107
                echo "
                                        <p class=\"player-name\">";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 108), "Name", [], "any", false, false, false, 108), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 108), "FName", [], "any", false, false, false, 108), "html", null, true);
                echo " </p>
                                    </a>
                                </div>
                            </div>
                        ";
            }
            // line 113
            echo "                        ";
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 113, $this->source); })()) + 1);
            // line 114
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                </div>
                <hr class=\"col-9 mt-4 mx-auto\">
                <div class=\"col-12 mt-3 mb-1\">
                    <h4 class=\"col-12 text-center\">Нападатели</h4>
                </div>
                <div class=\"col-12 row players-row m-0 p-0 justify-content-center\">
                    ";
        // line 121
        $context["foo"] = 1;
        // line 122
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 123
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Position", [], "any", false, false, false, 123) == "Attacker")) {
                // line 124
                echo "                            <div class=\"col-lg-3 col-sm-12 mt-4 col-md-12 justify-content-center row mb-sm-2\">
                                <div class=\"col-12 player-container \" id=\"player-";
                // line 125
                echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 125, $this->source); })()), "html", null, true);
                echo " \">
                                    <a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerStats", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 126)]), "html", null, true);
                echo "\">
                                        ";
                // line 127
                if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 127) == 0)) {
                    // line 128
                    echo "                                            <div class=\"status-green\"></div>
                                        ";
                } else {
                    // line 130
                    echo "                                            <div class=\"status-red\"></div>
                                        ";
                }
                // line 132
                echo "
                                        ";
                // line 133
                if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 133) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 133) == " "))) {
                    // line 134
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                        ";
                } else {
                    // line 136
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 136))), "html", null, true);
                    echo "\" alt=\"\" class=\"player-img\">
                                        ";
                }
                // line 138
                echo "
                                        <p class=\"player-name\">";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 139), "Name", [], "any", false, false, false, 139), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 139), "FName", [], "any", false, false, false, 139), "html", null, true);
                echo " </p>
                                    </a>
                                </div>
                            </div>
                        ";
            }
            // line 144
            echo "                        ";
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 144, $this->source); })()) + 1);
            // line 145
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                </div>
                <div class=\"add-team-circle-container  row \" id=\"add-player-container\">
                    <div class=\"add-team-circle\" id=\"player- \">
                        <img src=\"";
        // line 149
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
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/coach/searchPlayers.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 177
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
        // line 213
        echo "

";
        // line 225
        echo "
";
        // line 227
        echo "
";
        // line 231
        echo "

";
        // line 246
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 247
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
        return array (  541 => 247,  538 => 246,  534 => 231,  531 => 227,  528 => 225,  524 => 213,  501 => 177,  497 => 176,  493 => 175,  464 => 149,  459 => 146,  453 => 145,  450 => 144,  440 => 139,  437 => 138,  431 => 136,  425 => 134,  423 => 133,  420 => 132,  416 => 130,  412 => 128,  410 => 127,  406 => 126,  402 => 125,  399 => 124,  396 => 123,  391 => 122,  389 => 121,  381 => 115,  375 => 114,  372 => 113,  362 => 108,  359 => 107,  353 => 105,  347 => 103,  345 => 102,  342 => 101,  338 => 99,  334 => 97,  332 => 96,  328 => 95,  324 => 94,  321 => 93,  318 => 92,  313 => 91,  311 => 90,  303 => 84,  297 => 83,  294 => 82,  283 => 76,  280 => 75,  274 => 73,  268 => 71,  266 => 70,  263 => 69,  259 => 67,  255 => 65,  253 => 64,  249 => 63,  245 => 62,  241 => 60,  238 => 59,  233 => 58,  231 => 57,  223 => 51,  217 => 50,  214 => 49,  203 => 43,  200 => 42,  194 => 40,  188 => 38,  186 => 37,  183 => 36,  179 => 34,  175 => 32,  173 => 31,  169 => 30,  165 => 29,  162 => 28,  159 => 27,  154 => 26,  152 => 25,  141 => 17,  136 => 16,  126 => 15,  114 => 11,  110 => 10,  106 => 9,  102 => 8,  97 => 7,  87 => 6,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
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
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/coach/trainingPageStyle.css  \") }}\">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/particles/searchResultsTable.css\") }}\">
{#    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/coach/particles/teamPlayerCard.css\") }}\">#}
{% endblock %}

{% block body %}
    <img src=\"{{ asset(\"images/\" ~ coachTeamImage) }}\" class=\"mx-auto team-image mt-3\" alt=\"\">
    <h2 class=\"text-center mt-1\">{{ coachTeamName }}</h2>
    <div id=\"container\">
        <div class=\"row mt-1 justify-content-center col-12\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 p-0 m-0 coach-player-adding-container justify-content-center row pb-3\">
                <div class=\"col-12 mb-1 mt-2\">
                    <h4 class=\"col-12 text-center\">Вратари</h4>
                </div>
                <div class=\"col-12 row players-row m-0 p-0 justify-content-center\">
                    {% set foo = 1 %}
                    {% for player in players %}
                        {% if player.Position == \"Goalkeeper\" %}
                            <div class=\"col-lg-3 col-sm-12 col-md-12 mt-4 justify-content-center row mb-sm-2 p-0\">
                                <div class=\"col-11 player-container \" id=\"player-{{  foo }} \">
                                    <a href=\"{{ path(\"playerStatsView\", {id: player.id}) }}\">
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
                </div>
                <hr class=\"col-9 mt-4 mx-auto\">
                <div class=\"col-12 mt-3 mb-1\">
                    <h4  class=\"col-12 text-center\">Защитници</h4>
                </div>
                <div class=\"col-12 row players-row m-0 p-0 justify-content-center\">
                    {% set foo = 1 %}
                    {% for player in players %}
                        {% if player.Position == \"Defender\" %}

                        <div class=\"col-lg-3 col-sm-12 col-md-12 mt-4 justify-content-center row mb-sm-2\">
                            <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">
                                <a href=\"{{ path(\"playerStatsView\", {id: player.id}) }}\">
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
                </div>
                <hr class=\"col-9 mt-4 mx-auto\">
                <div class=\"col-12 mt-3 mb-1\">
                    <h4 class=\"col-12 text-center \">Халфове</h4>
                </div>
                <div class=\"col-12 row players-row m-0 p-0 justify-content-center\">
                    {% set foo = 1 %}
                    {% for player in players %}
                        {% if player.Position == \"Midfielder\" %}
                            <div class=\"col-lg-3 col-sm-12 col-md-12 mt-4 justify-content-center row mb-sm-2\">
                                <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">
                                    <a href=\"{{ path(\"playerStatsView\", {id: player.id}) }}\">
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
                </div>
                <hr class=\"col-9 mt-4 mx-auto\">
                <div class=\"col-12 mt-3 mb-1\">
                    <h4 class=\"col-12 text-center\">Нападатели</h4>
                </div>
                <div class=\"col-12 row players-row m-0 p-0 justify-content-center\">
                    {% set foo = 1 %}
                    {% for player in players %}
                        {% if player.Position == \"Attacker\" %}
                            <div class=\"col-lg-3 col-sm-12 mt-4 col-md-12 justify-content-center row mb-sm-2\">
                                <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">
                                    <a href=\"{{ path(\"playerStats\", {id: player.id}) }}\">
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
                </div>
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
