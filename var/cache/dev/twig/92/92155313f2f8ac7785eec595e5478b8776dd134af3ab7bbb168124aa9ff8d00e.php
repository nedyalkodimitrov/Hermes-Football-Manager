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
        echo "    <div class=\"container m-0 p-0    col-12 row\">
        <div class=\" col-12 p-0 m-0 text-center \">
            <input type=\"checkbox\" class=\"mt-5\" class=\"checkbox\">
        </div>
        <div class=\"col-12 row p-0 m-0 justify-content-around\">
            <div class=\"match-info-holder col-11 row mt-3  mx-auto  justify-content-center p-0\">
                <div class=\"homeTeam-info-holder col-5 p-0 m-0 text-center justify-content-center \">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 14, $this->source); })()), "homeTeam", [], "any", false, false, false, 14), "Image", [], "any", false, false, false, 14))), "html", null, true);
        echo "\" class=\"mx-auto\" alt=\"\">
                    <h3>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 15, $this->source); })()), "homeTeam", [], "any", false, false, false, 15), "Name", [], "any", false, false, false, 15), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"awayTeam-info-holder col-5 p-0 m-0 text-center\">
                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 18, $this->source); })()), "awayTeam", [], "any", false, false, false, 18), "Image", [], "any", false, false, false, 18))), "html", null, true);
        echo "\" class=\"mx-auto\" alt=\"\">
                    <h3>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 19, $this->source); })()), "awayTeam", [], "any", false, false, false, 19), "Name", [], "any", false, false, false, 19), "html", null, true);
        echo "</h3>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 25, $this->source); })()), "MatchList", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["matchList"]) {
            // line 26
            echo "        <div class=\"player-status-container row justify-content-center align-items-center\" id=\"player-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 26), "Id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
            <div class=\"col-lg-9 col-sm-10 player-status-div player-";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 27), "Id", [], "any", false, false, false, 27), "html", null, true);
            echo " row align-items-center justify-content-center\" id=\"add-player\" >
                <div class=\"col-lg-9 col-sm-11 row justify-content-around\">
                    <h2 class=\"mb-5 col-12 text-center justify-content-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 29), "User", [], "any", false, false, false, 29), "Name", [], "any", false, false, false, 29), "html", null, true);
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
        // line 37
        echo "
    <table class=\"table-bordered col-12 mt-5\"  style=\"margin-bottom: 0; padding:0;\">
        <tr class=\"row col-12 p-1 m-0 table-color\">
            <th class=\"col-4 color-white\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 40, $this->source); })()), "HomeTeam", [], "any", false, false, false, 40), "Image", [], "any", false, false, false, 40))), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 40, $this->source); })()), "HomeTeam", [], "any", false, false, false, 40), "Name", [], "any", false, false, false, 40), "html", null, true);
        echo "</th>
            <th class=\"col-1 my-auto color-white\">Г</th>
            <th class=\"col-1 my-auto color-white\">А</th>
            <th class=\"col-1 my-auto color-white\">У</th>
            <th class=\"col-1 my-auto color-white\">Започнал</th>
            <th class=\"col-1 my-auto color-white\">От</th>
            <th class=\"col-1 my-auto color-white\">До</th>
        </tr>
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 48, $this->source); })()), "MatchList", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["matchList"]) {
            // line 49
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 49), "Team", [], "any", false, false, false, 49) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 49, $this->source); })()), "HomeTeam", [], "any", false, false, false, 49), "Name", [], "any", false, false, false, 49))) {
                // line 50
                echo "                    ";
                $context["player"] = twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 50);
                // line 51
                echo "
            <tr class=\"teamTable row col-12 p-1 m-0\">
                <th  class=\"col-4 justify-content-end\"><img src=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 53, $this->source); })()), "Image", [], "any", false, false, false, 53))), "html", null, true);
                echo "\" alt=\"\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 53, $this->source); })()), "User", [], "any", false, false, false, 53), "Name", [], "any", false, false, false, 53), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 53, $this->source); })()), "User", [], "any", false, false, false, 53), "FName", [], "any", false, false, false, 53), "html", null, true);
                echo "</th>
                <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\" value=\"0\"></th>
                <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\" value=\"0\"></th>
                <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"15\" value=\"0\"></th>
                <th class=\"col-1 my-auto\"><input type=\"checkbox\"></th>
                <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\" value=\"0\"></th>
                <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\" value=\"0\"></th>
";
                // line 62
                echo "            </tr>
                ";
            }
            // line 64
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matchList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "

    </table>
    <table class=\"table-bordered col-12 mt-4 mb-4 \"  style=\"margin-bottom: 0; padding:0;\">
        <tr class=\"row col-12 p-1 m-0 table-color\">
            <th class=\"col-4 color-white\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 70, $this->source); })()), "AwayTeam", [], "any", false, false, false, 70), "Image", [], "any", false, false, false, 70))), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 70, $this->source); })()), "AwayTeam", [], "any", false, false, false, 70), "Name", [], "any", false, false, false, 70), "html", null, true);
        echo "</th>
            <th class=\"col-1 my-auto color-white\">Г</th>
            <th class=\"col-1 my-auto color-white\">А</th>
            <th class=\"col-1 my-auto color-white\">У</th>
            <th class=\"col-1 my-auto color-white\">Започнал</th>
            <th class=\"col-1 my-auto color-white\">От</th>
            <th class=\"col-1 my-auto color-white\">До</th>
        </tr>
        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 78, $this->source); })()), "MatchList", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["matchList"]) {
            // line 79
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 79), "Team", [], "any", false, false, false, 79) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 79, $this->source); })()), "AwayTeam", [], "any", false, false, false, 79), "Name", [], "any", false, false, false, 79))) {
                // line 80
                echo "                    ";
                $context["player"] = twig_get_attribute($this->env, $this->source, $context["matchList"], "Player", [], "any", false, false, false, 80);
                // line 81
                echo "                    <tr class=\"teamTable row col-12 p-1 m-0\">
                        <th  class=\"col-4 justify-content-end\"><img src=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 82, $this->source); })()), "Image", [], "any", false, false, false, 82))), "html", null, true);
                echo "\" alt=\"\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 82, $this->source); })()), "User", [], "any", false, false, false, 82), "Name", [], "any", false, false, false, 82), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 82, $this->source); })()), "User", [], "any", false, false, false, 82), "FName", [], "any", false, false, false, 82), "html", null, true);
                echo "</th>

                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"15\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"checkbox\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\"></th>
        ";
                // line 91
                echo "        ";
                // line 92
                echo "                    </tr>
                    ";
            } else {
                // line 94
                echo "                ";
            }
            // line 95
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matchList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "

    </table>


    <div class=\"col-12 text-center\">
        <button class=\"btn btn-danger\">Потвърждаване на резултата</button>
    </div>


    <script>

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
        return array (  271 => 96,  265 => 95,  262 => 94,  258 => 92,  256 => 91,  241 => 82,  238 => 81,  235 => 80,  232 => 79,  228 => 78,  215 => 70,  208 => 65,  202 => 64,  198 => 62,  184 => 53,  180 => 51,  177 => 50,  174 => 49,  170 => 48,  157 => 40,  152 => 37,  138 => 29,  133 => 27,  128 => 26,  124 => 25,  115 => 19,  111 => 18,  105 => 15,  101 => 14,  92 => 7,  82 => 6,  69 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'superAdmin/base.html.twig' %}
{% block style %}
{#    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/admin/topPlayerCard.css\") }}\">#}
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/superAdmin/matchPageStyle.css\") }}\">
{% endblock %}
{% block body %}
    <div class=\"container m-0 p-0    col-12 row\">
        <div class=\" col-12 p-0 m-0 text-center \">
            <input type=\"checkbox\" class=\"mt-5\" class=\"checkbox\">
        </div>
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
            <th class=\"col-4 color-white\"><img src=\"{{ asset(\"images/\"~match.HomeTeam.Image) }}\" alt=\"\">{{match.HomeTeam.Name}}</th>
            <th class=\"col-1 my-auto color-white\">Г</th>
            <th class=\"col-1 my-auto color-white\">А</th>
            <th class=\"col-1 my-auto color-white\">У</th>
            <th class=\"col-1 my-auto color-white\">Започнал</th>
            <th class=\"col-1 my-auto color-white\">От</th>
            <th class=\"col-1 my-auto color-white\">До</th>
        </tr>
        {% for matchList in match.MatchList %}
                {% if matchList.Player.Team == match.HomeTeam.Name %}
                    {% set player = matchList.Player %}

            <tr class=\"teamTable row col-12 p-1 m-0\">
                <th  class=\"col-4 justify-content-end\"><img src=\"{{ asset(\"images/\"~player.Image) }}\" alt=\"\"> {{ player.User.Name }} {{  player.User.FName}}</th>
                <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\" value=\"0\"></th>
                <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\" value=\"0\"></th>
                <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"15\" value=\"0\"></th>
                <th class=\"col-1 my-auto\"><input type=\"checkbox\"></th>
                <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\" value=\"0\"></th>
                <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\" value=\"0\"></th>
{#                <th class=\"col-1\"> {{ team.GoalsInTheTeamDoor}}</th>#}
{#                <th class=\"col-1\">{{ team.points }}</th>#}
            </tr>
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
                    <tr class=\"teamTable row col-12 p-1 m-0\">
                        <th  class=\"col-4 justify-content-end\"><img src=\"{{ asset(\"images/\"~player.Image) }}\" alt=\"\"> {{ player.User.Name }} {{  player.User.FName}}</th>

                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"6\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"15\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"checkbox\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\"></th>
                        <th class=\"col-1 my-auto\"><input type=\"number\" min=\"0\" max=\"90\"></th>
        {#                <th class=\"col-1\"> {{ team.GoalsInTheTeamDoor}}</th>#}
        {#                <th class=\"col-1\">{{ team.points }}</th>#}
                    </tr>
                    {% else %}
                {% endif %}
            {% endfor %}


    </table>


    <div class=\"col-12 text-center\">
        <button class=\"btn btn-danger\">Потвърждаване на резултата</button>
    </div>


    <script>

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


{% endblock %}", "superAdmin/match.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\superAdmin\\match.html.twig");
    }
}
