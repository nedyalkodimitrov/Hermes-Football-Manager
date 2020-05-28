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

/* superAdmin/match.html.twig */
class __TwigTemplate_1ecf185621f932b67d1436d0d5a4057a1b6f6b8a30a869b96605bf6a4603c899 extends \Twig\Template
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
        return "superAdmin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superAdmin/match.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superAdmin/match.html.twig"));

        $this->parent = $this->loadTemplate("superAdmin/base.html.twig", "superAdmin/match.html.twig", 1);
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

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/superAdmin/matchPageStyle.css"), "html", null, true);
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
        echo "
    <div class=\"col-12 container justify-content-center p-0 m-0 row \">
        <div class=\"col-4 p-0 m-0 justify-content-center mx-auto row \">
            <h2 class=\"col-7\">Мачът е:
               <button type=\"btn btn-success\" name=\"button\"><i class=\"fas fa-check\"></i></button>
               <button type=\"btn btn-danger\" name=\"button\"><i class=\"fas fa-check\"></i></button>
               <button type=\"btn btn-success\" name=\"button\"><i class=\"fas fa-check\"></i></button>
            </h2>
        </div>
    </div>
    <div class=\"container m-0 p-0    col-12 row\">
        <div class=\"col-12 row p-0 m-0 justify-content-around\">
            <div class=\"match-info-holder col-11 row mt-3  mx-auto  justify-content-center p-0\">
                <div class=\"homeTeam-info-holder col-5 p-0 m-0 text-center justify-content-center \">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 21, $this->source); })()), "homeTeam", [], "any", false, false, false, 21), "Image", [], "any", false, false, false, 21))), "html", null, true);
        echo "\" class=\"mx-auto\" alt=\"\">
                    <h3>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 22, $this->source); })()), "homeTeam", [], "any", false, false, false, 22), "Name", [], "any", false, false, false, 22), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"awayTeam-info-holder col-5 p-0 m-0 text-center\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 25, $this->source); })()), "awayTeam", [], "any", false, false, false, 25), "Image", [], "any", false, false, false, 25))), "html", null, true);
        echo "\" class=\"mx-auto\" alt=\"\">
                    <h3>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 26, $this->source); })()), "awayTeam", [], "any", false, false, false, 26), "Name", [], "any", false, false, false, 26), "html", null, true);
        echo "</h3>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 32, $this->source); })()), "MatchList", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["matchList"]) {
            // line 33
            echo "        <div class=\"player-status-container row justify-content-center align-items-center\" id=\"player-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 33), "Id", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
            <div class=\"col-lg-9 col-sm-10 player-status-div player-";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 34), "Id", [], "any", false, false, false, 34), "html", null, true);
            echo " row align-items-center justify-content-center\" id=\"add-player\" >
                <div class=\"col-lg-9 col-sm-11 row justify-content-around\">
                    <h2 class=\"mb-5 col-12 text-center justify-content-center\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 36), "User", [], "any", false, false, false, 36), "Name", [], "any", false, false, false, 36), "html", null, true);
            echo "</h2>
                    <span><i class=\"fas fa-times-circle\"></i></span>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matchList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    <table class=\"table-bordered col-12 mt-5\"  style=\"margin-bottom: 0; padding:0;\">
        <tr class=\"row col-12 p-1 m-0 table-color\">
            <th class=\"col-2 col-lg-4 color-white\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 45, $this->source); })()), "HomeTeam", [], "any", false, false, false, 45), "Image", [], "any", false, false, false, 45))), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 45, $this->source); })()), "HomeTeam", [], "any", false, false, false, 45), "Name", [], "any", false, false, false, 45), "html", null, true);
        echo "</th>
            <th class=\"col-1 my-auto color-white\">Г</th>
            <th class=\"col-1 my-auto color-white\">А</th>
            <th class=\"col-1 my-auto color-white\">У</th>
            <th class=\"col-2 col-lg-1 my-auto color-white\">Започнал</th>
            <th class=\"col-1 my-auto color-white\">От</th>
            <th class=\"col-1 my-auto color-white\">До</th>
            <th class=\"col-1 my-auto color-white\">Позиция</th>
        </tr>
        <tr class=\"startedPlayers\">
          <th class=\"col-12\">Титуляри</th>
        </tr>
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 57, $this->source); })()), "MatchList", [], "any", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["matchList"]) {
            // line 58
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 58), "Team", [], "any", false, false, false, 58) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 58, $this->source); })()), "HomeTeam", [], "any", false, false, false, 58), "Name", [], "any", false, false, false, 58))) {
                // line 59
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["matchList"], "IsStarting", [], "any", false, false, false, 59) == 1)) {
                    // line 60
                    echo "                      ";
                    $context["player"] = twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 60);
                    // line 61
                    echo "
                      <tr class=\"teamTable homeTeamPlayer row col-12 p-1 m-0\">
                          <th  class=\"col-2 col-lg-4 justify-content-end\"><img src=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 63, $this->source); })()), "Image", [], "any", false, false, false, 63))), "html", null, true);
                    echo "\" alt=\"\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 63, $this->source); })()), "User", [], "any", false, false, false, 63), "Name", [], "any", false, false, false, 63), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 63, $this->source); })()), "User", [], "any", false, false, false, 63), "FName", [], "any", false, false, false, 63), "html", null, true);
                    echo " </th>
                          <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\" class=\"goals\" value=\"0\"></th>
                          <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\" value=\"0\"></th>
                          <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"15\" value=\"0\"></th>
                          <th class=\"col-2 col-lg-1 my-auto\"><input type=\"checkbox\" checked disabled></th>
                          <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"0\" value=\"0\"></th>
                          <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\" value=\"0\"></th>
                          <th class=\"col-1 my-auto\"><p>";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 70, $this->source); })()), "Position", [], "any", false, false, false, 70), "html", null, true);
                    echo "</p></th>
                          <input type=\"hidden\" name=\"\" value=\"";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matchList"], "IsStarting", [], "any", false, false, false, 71), "html", null, true);
                    echo "\">
                      </tr>
                    ";
                }
                // line 74
                echo "                  ";
            }
            // line 75
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matchList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            <tr class=\"reservePlayers\">
              <th class=\"col-12\">Резерви</th>
            </tr>
            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 79, $this->source); })()), "MatchList", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["matchList"]) {
            // line 80
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 80), "Team", [], "any", false, false, false, 80) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 80, $this->source); })()), "HomeTeam", [], "any", false, false, false, 80), "Name", [], "any", false, false, false, 80))) {
                // line 81
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["matchList"], "IsStarting", [], "any", false, false, false, 81) == 0)) {
                    // line 82
                    echo "                          ";
                    $context["player"] = twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 82);
                    // line 83
                    echo "                          <tr class=\"teamTable homeTeamPlayer row col-12 p-1 m-0\">
                              <th  class=\"col-2 col-lg-4 justify-content-end\"><img src=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 84, $this->source); })()), "Image", [], "any", false, false, false, 84))), "html", null, true);
                    echo "\" alt=\"\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 84, $this->source); })()), "User", [], "any", false, false, false, 84), "Name", [], "any", false, false, false, 84), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 84, $this->source); })()), "User", [], "any", false, false, false, 84), "FName", [], "any", false, false, false, 84), "html", null, true);
                    echo " </th>
                              <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\" value=\"0\"></th>
                              <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\" value=\"0\"></th>
                              <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"15\" value=\"0\"></th>
                              <th class=\"col-2 col-lg-1 my-auto\"><input type=\"checkbox\"></th>
                              <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\" value=\"0\"></th>
                              <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\" value=\"0\"></th>
                              <th class=\"col-1 my-auto\"><p>";
                    // line 91
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 91, $this->source); })()), "Position", [], "any", false, false, false, 91), "html", null, true);
                    echo "</p></th>
                              <input type=\"hidden\" name=\"\" value=\"";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matchList"], "IsStarting", [], "any", false, false, false, 92), "html", null, true);
                    echo "\">
                          </tr>
                        ";
                }
                // line 95
                echo "                      ";
            }
            // line 96
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matchList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "    </table>
    <table class=\"table-bordered col-12 mt-4 mb-4 \"  style=\"margin-bottom: 0; padding:0;\">
        <tr class=\"row col-12 p-1 m-0 table-color\">
            <th class=\"col-4 color-white\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 100, $this->source); })()), "AwayTeam", [], "any", false, false, false, 100), "Image", [], "any", false, false, false, 100))), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 100, $this->source); })()), "AwayTeam", [], "any", false, false, false, 100), "Name", [], "any", false, false, false, 100), "html", null, true);
        echo "</th>
            <th class=\"col-1 my-auto color-white\">Г</th>
            <th class=\"col-1 my-auto color-white\">А</th>
            <th class=\"col-1 my-auto color-white\">У</th>
            <th class=\"col-1 my-auto color-white\">Започнал</th>
            <th class=\"col-1 my-auto color-white\">От</th>
            <th class=\"col-1 my-auto color-white\">До</th>
        </tr>
        ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 108, $this->source); })()), "MatchList", [], "any", false, false, false, 108));
        foreach ($context['_seq'] as $context["_key"] => $context["matchList"]) {
            // line 109
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 109), "Team", [], "any", false, false, false, 109) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 109, $this->source); })()), "AwayTeam", [], "any", false, false, false, 109), "Name", [], "any", false, false, false, 109))) {
                // line 110
                echo "                    ";
                $context["player"] = twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 110);
                // line 111
                echo "                    <tr class=\"teamTable awayTeamPlayer ow col-12 p-1 m-0\">
                        <th  class=\"col-4 justify-content-end\"><img src=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 112, $this->source); })()), "Image", [], "any", false, false, false, 112))), "html", null, true);
                echo "\" alt=\"\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 112, $this->source); })()), "User", [], "any", false, false, false, 112), "Name", [], "any", false, false, false, 112), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 112, $this->source); })()), "User", [], "any", false, false, false, 112), "FName", [], "any", false, false, false, 112), "html", null, true);
                echo "</th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"15\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"checkbox\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\"></th>
                    </tr>
                    ";
            } else {
                // line 121
                echo "                ";
            }
            // line 122
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matchList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "    </table>

    <div class=\"col-12 text-center\">
        <button class=\"btn btn-danger sendInformation\">Потвърждаване на резултата</button>
    </div>


    <script>

        \$('.sendInformation').on('click', function(){
          var homeTeamPlayers = [];
          var awayTeamPlayers = [];
          var homeTeamPlayersElements = document.getElementsByClassName(\"homeTeamPlayer\");
          var awayTeamPlayersElements = document.getElementsByClassName(\"awayTeamPlayer\");

          var player = [];

          for (var i = 0; i < homeTeamPlayersElements.length; i++) {
            var homeTeamPlayer = homeTeamPlayersElements[i].getElementsByTagName(\"th\");
            var player = [];
            player.Goal =  homeTeamPlayer[1].getElementsByTagName(\"input\")[0].value;
            player.Assists = homeTeamPlayer[2].getElementsByTagName(\"input\")[0].value;
            player.Shoots = homeTeamPlayer[3].getElementsByTagName(\"input\")[0].value;
            player.MinStart = homeTeamPlayer[5].getElementsByTagName(\"input\")[0].value;
            player.Shootss = homeTeamPlayer[3].getElementsByTagName(\"input\")[0].checked;
            player.MinEnd = homeTeamPlayer[6].getElementsByTagName(\"input\")[0].value;
            homeTeamPlayers.push(player);

          }

          for (var i = 0; i < awayTeamPlayersElements.length; i++) {
            var awayTeamPlayer = awayTeamPlayersElements[i].getElementsByTagName(\"th\");
            var player = [];
            player.Goal =  awayTeamPlayer[1].getElementsByTagName(\"input\")[0].value;
            player.Assists = awayTeamPlayer[2].getElementsByTagName(\"input\")[0].value;
            player.Shoots = awayTeamPlayer[3].getElementsByTagName(\"input\")[0].value;
              // player.Shootss = awayTeamPlayer[3].getElementsByTagName(\"input\")[0].checked;
            player.MinStart = awayTeamPlayer[5].getElementsByTagName(\"input\")[0].value;
            player.MinEnd = awayTeamPlayer[6].getElementsByTagName(\"input\")[0].value;
            awayTeamPlayers.push(player);
          }

           console.log(homeTeamPlayers);


        });


        \$('.adding-match').on('click', function () {
            let playerId = \$(this).attr('id');
            console.log(playerId);
            let container = '#player-' + playerId;
            let child = '.player-' + playerId;
            \$(container).css('visibility', 'visible')
                .css('height', '100vh')
                .css('top', '0%')
                .css('transition', 'ease 0.7s');
            \$(child)
                .css('visibility', 'visible')
                .css('transition', ' ease 0.6s')
                .css('top', '50%')
                .css('transform', ' translate(-50%, -50%)');

            \$('#treatment_info').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$(child)
                    .css('top', '-50%')
                    .css('transform', ' translate(-50%, -100%)')
                    .css('transition', 'ease 1s');

                \$(container).css('visibility', 'hidden')
                    .css('height', '0vh')
                    .css('top', '-50%')
                    .css('transition', 'ease 1.1s');
            });
        });




    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "superAdmin/match.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 123,  333 => 122,  330 => 121,  314 => 112,  311 => 111,  308 => 110,  305 => 109,  301 => 108,  288 => 100,  283 => 97,  277 => 96,  274 => 95,  268 => 92,  264 => 91,  250 => 84,  247 => 83,  244 => 82,  241 => 81,  238 => 80,  234 => 79,  229 => 76,  223 => 75,  220 => 74,  214 => 71,  210 => 70,  196 => 63,  192 => 61,  189 => 60,  186 => 59,  183 => 58,  179 => 57,  162 => 45,  157 => 42,  145 => 36,  140 => 34,  135 => 33,  131 => 32,  122 => 26,  118 => 25,  112 => 22,  108 => 21,  92 => 7,  82 => 6,  69 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'superAdmin/base.html.twig' %}
{% block style %}
{#    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/admin/topPlayerCard.css\") }}\">#}
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/superAdmin/matchPageStyle.css\") }}\">
{% endblock %}
{% block body %}

    <div class=\"col-12 container justify-content-center p-0 m-0 row \">
        <div class=\"col-4 p-0 m-0 justify-content-center mx-auto row \">
            <h2 class=\"col-7\">Мачът е:
               <button type=\"btn btn-success\" name=\"button\"><i class=\"fas fa-check\"></i></button>
               <button type=\"btn btn-danger\" name=\"button\"><i class=\"fas fa-check\"></i></button>
               <button type=\"btn btn-success\" name=\"button\"><i class=\"fas fa-check\"></i></button>
            </h2>
        </div>
    </div>
    <div class=\"container m-0 p-0    col-12 row\">
        <div class=\"col-12 row p-0 m-0 justify-content-around\">
            <div class=\"match-info-holder col-11 row mt-3  mx-auto  justify-content-center p-0\">
                <div class=\"homeTeam-info-holder col-5 p-0 m-0 text-center justify-content-center \">
                    <img src=\"{{ asset(\"images/\" ~ match.homeTeam.Image) }}\" class=\"mx-auto\" alt=\"\">
                    <h3>{{ match.homeTeam.Name }}</h3>
                </div>
                <div class=\"awayTeam-info-holder col-5 p-0 m-0 text-center\">
                    <img src=\"{{ asset(\"images/\" ~ match.awayTeam.Image) }}\" class=\"mx-auto\" alt=\"\">
                    <h3>{{ match.awayTeam.Name }}</h3>
                </div>
            </div>
        </div>
    </div>

    {% for matchList in match.MatchList %}
        <div class=\"player-status-container row justify-content-center align-items-center\" id=\"player-{{ matchList.Player.Id }}\">
            <div class=\"col-lg-9 col-sm-10 player-status-div player-{{ matchList.Player.Id }} row align-items-center justify-content-center\" id=\"add-player\" >
                <div class=\"col-lg-9 col-sm-11 row justify-content-around\">
                    <h2 class=\"mb-5 col-12 text-center justify-content-center\">{{ matchList.Player.User.Name }}</h2>
                    <span><i class=\"fas fa-times-circle\"></i></span>
                </div>
            </div>
        </div>
    {% endfor %}

    <table class=\"table-bordered col-12 mt-5\"  style=\"margin-bottom: 0; padding:0;\">
        <tr class=\"row col-12 p-1 m-0 table-color\">
            <th class=\"col-2 col-lg-4 color-white\"><img src=\"{{ asset(\"images/\"~match.HomeTeam.Image) }}\" alt=\"\">{{match.HomeTeam.Name}}</th>
            <th class=\"col-1 my-auto color-white\">Г</th>
            <th class=\"col-1 my-auto color-white\">А</th>
            <th class=\"col-1 my-auto color-white\">У</th>
            <th class=\"col-2 col-lg-1 my-auto color-white\">Започнал</th>
            <th class=\"col-1 my-auto color-white\">От</th>
            <th class=\"col-1 my-auto color-white\">До</th>
            <th class=\"col-1 my-auto color-white\">Позиция</th>
        </tr>
        <tr class=\"startedPlayers\">
          <th class=\"col-12\">Титуляри</th>
        </tr>
        {% for matchList in match.MatchList %}
                {% if matchList.Player.Team == match.HomeTeam.Name %}
                  {% if matchList.IsStarting == 1 %}
                      {% set player = matchList.Player %}

                      <tr class=\"teamTable homeTeamPlayer row col-12 p-1 m-0\">
                          <th  class=\"col-2 col-lg-4 justify-content-end\"><img src=\"{{ asset(\"images/\"~player.Image) }}\" alt=\"\"> {{ player.User.Name }} {{  player.User.FName}} </th>
                          <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\" class=\"goals\" value=\"0\"></th>
                          <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\" value=\"0\"></th>
                          <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"15\" value=\"0\"></th>
                          <th class=\"col-2 col-lg-1 my-auto\"><input type=\"checkbox\" checked disabled></th>
                          <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"0\" value=\"0\"></th>
                          <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\" value=\"0\"></th>
                          <th class=\"col-1 my-auto\"><p>{{player.Position}}</p></th>
                          <input type=\"hidden\" name=\"\" value=\"{{matchList.IsStarting}}\">
                      </tr>
                    {% endif %}
                  {% endif %}
            {% endfor %}
            <tr class=\"reservePlayers\">
              <th class=\"col-12\">Резерви</th>
            </tr>
            {% for matchList in match.MatchList %}
                    {% if matchList.Player.Team == match.HomeTeam.Name %}
                      {% if matchList.IsStarting == 0 %}
                          {% set player = matchList.Player %}
                          <tr class=\"teamTable homeTeamPlayer row col-12 p-1 m-0\">
                              <th  class=\"col-2 col-lg-4 justify-content-end\"><img src=\"{{ asset(\"images/\"~player.Image) }}\" alt=\"\"> {{ player.User.Name }} {{  player.User.FName}} </th>
                              <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\" value=\"0\"></th>
                              <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\" value=\"0\"></th>
                              <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"15\" value=\"0\"></th>
                              <th class=\"col-2 col-lg-1 my-auto\"><input type=\"checkbox\"></th>
                              <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\" value=\"0\"></th>
                              <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\" value=\"0\"></th>
                              <th class=\"col-1 my-auto\"><p>{{player.Position}}</p></th>
                              <input type=\"hidden\" name=\"\" value=\"{{matchList.IsStarting}}\">
                          </tr>
                        {% endif %}
                      {% endif %}
                {% endfor %}
    </table>
    <table class=\"table-bordered col-12 mt-4 mb-4 \"  style=\"margin-bottom: 0; padding:0;\">
        <tr class=\"row col-12 p-1 m-0 table-color\">
            <th class=\"col-4 color-white\"><img src=\"{{ asset(\"images/\"~match.AwayTeam.Image) }}\" alt=\"\">{{match.AwayTeam.Name}}</th>
            <th class=\"col-1 my-auto color-white\">Г</th>
            <th class=\"col-1 my-auto color-white\">А</th>
            <th class=\"col-1 my-auto color-white\">У</th>
            <th class=\"col-1 my-auto color-white\">Започнал</th>
            <th class=\"col-1 my-auto color-white\">От</th>
            <th class=\"col-1 my-auto color-white\">До</th>
        </tr>
        {% for matchList in match.MatchList %}
                {% if matchList.Player.Team == match.AwayTeam.Name %}
                    {% set player = matchList.Player %}
                    <tr class=\"teamTable awayTeamPlayer ow col-12 p-1 m-0\">
                        <th  class=\"col-4 justify-content-end\"><img src=\"{{ asset(\"images/\"~player.Image) }}\" alt=\"\"> {{ player.User.Name }} {{  player.User.FName}}</th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"15\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"checkbox\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\"></th>
                    </tr>
                    {% else %}
                {% endif %}
            {% endfor %}
    </table>

    <div class=\"col-12 text-center\">
        <button class=\"btn btn-danger sendInformation\">Потвърждаване на резултата</button>
    </div>


    <script>

        \$('.sendInformation').on('click', function(){
          var homeTeamPlayers = [];
          var awayTeamPlayers = [];
          var homeTeamPlayersElements = document.getElementsByClassName(\"homeTeamPlayer\");
          var awayTeamPlayersElements = document.getElementsByClassName(\"awayTeamPlayer\");

          var player = [];

          for (var i = 0; i < homeTeamPlayersElements.length; i++) {
            var homeTeamPlayer = homeTeamPlayersElements[i].getElementsByTagName(\"th\");
            var player = [];
            player.Goal =  homeTeamPlayer[1].getElementsByTagName(\"input\")[0].value;
            player.Assists = homeTeamPlayer[2].getElementsByTagName(\"input\")[0].value;
            player.Shoots = homeTeamPlayer[3].getElementsByTagName(\"input\")[0].value;
            player.MinStart = homeTeamPlayer[5].getElementsByTagName(\"input\")[0].value;
            player.Shootss = homeTeamPlayer[3].getElementsByTagName(\"input\")[0].checked;
            player.MinEnd = homeTeamPlayer[6].getElementsByTagName(\"input\")[0].value;
            homeTeamPlayers.push(player);

          }

          for (var i = 0; i < awayTeamPlayersElements.length; i++) {
            var awayTeamPlayer = awayTeamPlayersElements[i].getElementsByTagName(\"th\");
            var player = [];
            player.Goal =  awayTeamPlayer[1].getElementsByTagName(\"input\")[0].value;
            player.Assists = awayTeamPlayer[2].getElementsByTagName(\"input\")[0].value;
            player.Shoots = awayTeamPlayer[3].getElementsByTagName(\"input\")[0].value;
              // player.Shootss = awayTeamPlayer[3].getElementsByTagName(\"input\")[0].checked;
            player.MinStart = awayTeamPlayer[5].getElementsByTagName(\"input\")[0].value;
            player.MinEnd = awayTeamPlayer[6].getElementsByTagName(\"input\")[0].value;
            awayTeamPlayers.push(player);
          }

           console.log(homeTeamPlayers);


        });


        \$('.adding-match').on('click', function () {
            let playerId = \$(this).attr('id');
            console.log(playerId);
            let container = '#player-' + playerId;
            let child = '.player-' + playerId;
            \$(container).css('visibility', 'visible')
                .css('height', '100vh')
                .css('top', '0%')
                .css('transition', 'ease 0.7s');
            \$(child)
                .css('visibility', 'visible')
                .css('transition', ' ease 0.6s')
                .css('top', '50%')
                .css('transform', ' translate(-50%, -50%)');

            \$('#treatment_info').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$(child)
                    .css('top', '-50%')
                    .css('transform', ' translate(-50%, -100%)')
                    .css('transition', 'ease 1s');

                \$(container).css('visibility', 'hidden')
                    .css('height', '0vh')
                    .css('top', '-50%')
                    .css('transition', 'ease 1.1s');
            });
        });




    </script>


{% endblock %}
", "superAdmin/match.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\superAdmin\\match.html.twig");
    }
}
