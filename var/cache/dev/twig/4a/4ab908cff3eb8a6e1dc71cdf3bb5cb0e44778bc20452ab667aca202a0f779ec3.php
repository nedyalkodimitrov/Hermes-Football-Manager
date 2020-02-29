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
        echo "    <div class=\"col-12 row justify-content-center mx-auto\">
        <div class=\"col-lg-10 col-sm-11 row m-0 text-center justify-content-center\">
            <div class=\"col-lg-8 col-sm-12 m-0 text-center justify-content-center\">
                <div class=\"create-training-container\">
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingCalendarActionView");
        echo "\" class=\"create-training-a-container\">
                        <p class=\"create-training-p\">Създаване на седмична програма </p>
                        <div class=\"create-training-image-container\">
                            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/footballGrass.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"create-training-image\">
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <hr class=\"col-lg-11 col-sm-10 mx-auto \">

    <div id=\"container\">
        <div class=\"row mt-5 justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 coach-player-adding-container row pb-3\">
                ";
        // line 35
        if (((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 35, $this->source); })()) == null)) {
            // line 36
            echo "                    <h1 class=\"col-12 text-center mt-4 mb-2\">0 Играчи</h1>
                ";
        } else {
            // line 38
            echo "                    <h1 class=\"col-12 text-center mt-4 mb-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 38, $this->source); })()), "count", [], "any", false, false, false, 38), "html", null, true);
            echo " Играчи</h1>
                ";
        }
        // line 40
        echo "
                ";
        // line 41
        $context["foo"] = 1;
        // line 42
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 43
            echo "                    <div class=\"col-lg-3 col-sm-12 ml-2 col-md-12 justify-content-center row mb-sm-2\">
                        <div class=\"col-12 player-container \" id=\"player-";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 44, $this->source); })()), "html", null, true);
            echo " \">
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerAction", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">
                                ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 46) == 0)) {
                // line 47
                echo "                                    <div class=\"status-green\"></div>
                                ";
            } else {
                // line 49
                echo "                                    <div class=\"status-red\"></div>
                                ";
            }
            // line 51
            echo "
                                ";
            // line 52
            if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 52) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 52) == " "))) {
                // line 53
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                echo "\" alt=\"\" class=\"player-img\">
                                ";
            } else {
                // line 55
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 55))), "html", null, true);
                echo "\" alt=\"\" class=\"player-img\">
                                ";
            }
            // line 57
            echo "
                                <p class=\"player-name\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 58), "Name", [], "any", false, false, false, 58), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 58), "FName", [], "any", false, false, false, 58), "html", null, true);
            echo " </p>
                            </a>
                        </div>
                    </div>

                    ";
            // line 63
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 63, $this->source); })()) + 1);
            // line 64
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                <div class=\"col-lg-3 col-sm-12 col-md-12 ml-2 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-player-container justify-content-center text-center\" id=\"player-";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 66, $this->source); })()), "html", null, true);
        echo " \">
                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
        echo "\" alt=\"\" class=\"add-player-img\">
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
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/coach/searchPlayers.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 94
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
        // line 130
        echo "

";
        // line 142
        echo "
";
        // line 144
        echo "
";
        // line 148
        echo "

";
        // line 163
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 164
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
        return array (  328 => 164,  325 => 163,  321 => 148,  318 => 144,  315 => 142,  311 => 130,  288 => 94,  284 => 93,  280 => 92,  252 => 67,  248 => 66,  245 => 65,  239 => 64,  237 => 63,  227 => 58,  224 => 57,  218 => 55,  212 => 53,  210 => 52,  207 => 51,  203 => 49,  199 => 47,  197 => 46,  193 => 45,  189 => 44,  186 => 43,  181 => 42,  179 => 41,  176 => 40,  170 => 38,  166 => 36,  164 => 35,  148 => 22,  142 => 19,  136 => 15,  126 => 14,  114 => 11,  110 => 10,  106 => 9,  102 => 8,  97 => 7,  87 => 6,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
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
    <div class=\"col-12 row justify-content-center mx-auto\">
        <div class=\"col-lg-10 col-sm-11 row m-0 text-center justify-content-center\">
            <div class=\"col-lg-8 col-sm-12 m-0 text-center justify-content-center\">
                <div class=\"create-training-container\">
                    <a href=\"{{ path('trainingCalendarActionView') }}\" class=\"create-training-a-container\">
                        <p class=\"create-training-p\">Създаване на седмична програма </p>
                        <div class=\"create-training-image-container\">
                            <img src=\"{{ asset('images/footballGrass.jpg')}}\" alt=\"\" class=\"create-training-image\">
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <hr class=\"col-lg-11 col-sm-10 mx-auto \">

    <div id=\"container\">
        <div class=\"row mt-5 justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 coach-player-adding-container row pb-3\">
                {% if players == null %}
                    <h1 class=\"col-12 text-center mt-4 mb-2\">0 Играчи</h1>
                {% else %}
                    <h1 class=\"col-12 text-center mt-4 mb-2\">{{ players.count }} Играчи</h1>
                {% endif %}

                {% set foo = 1 %}
                {% for player in players %}
                    <div class=\"col-lg-3 col-sm-12 ml-2 col-md-12 justify-content-center row mb-sm-2\">
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

                    {% set foo = foo + 1 %}
                {% endfor %}
                <div class=\"col-lg-3 col-sm-12 col-md-12 ml-2 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-player-container justify-content-center text-center\" id=\"player-{{  foo }} \">
                        <img src=\"{{ asset('images/plus .png') }}\" alt=\"\" class=\"add-player-img\">
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
