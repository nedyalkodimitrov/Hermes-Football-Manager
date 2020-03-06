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

/* admin/home.html.twig */
class __TwigTemplate_edfcc50dbff065241ae228531fca8c58e331fd75ff45eb574f31b488757a9d4e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin/topPlayerCard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/hiddenFormStyle.css"), "html", null, true);
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
        echo "    <div id=\"container\">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9  main-charts-container row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-4  mb-5 information-charts-text\">Основни характеристики</h4>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container \">
                        <p>15</p>
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
                        <p>EfBet Cup</p>
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
        // line 52
        $context["foo"] = 1;
        // line 53
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 54
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container top-player-card-container\" id=\"player-";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 55, $this->source); })()), "html", null, true);
            echo " \">
";
            // line 61
            echo "                             <div class=\"top-player-image-container\">
                                ";
            // line 62
            if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 62) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 62) == " "))) {
                // line 63
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                echo "\" alt=\"\" class=\"top-player-card-img\">
                                ";
            } else {
                // line 65
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 65))), "html", null, true);
                echo "\" alt=\"\" class=\"top-player-card-img\">
                                ";
            }
            // line 67
            echo "                             </div>
                            <p class=\"top-player-card-name\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 68), "Name", [], "any", false, false, false, 68), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 68), "FName", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
";
            // line 70
            echo "                        </div>
                    </div>
                    ";
            // line 72
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 72, $this->source); })()) + 1);
            // line 73
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
            </div>
        </div>
    </div>
    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-around div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Топ трима играча от юношеските отбори</h2>
                </div>
                ";
        // line 84
        $context["foo"] = 1;
        // line 85
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["youthPlayers"]) || array_key_exists("youthPlayers", $context) ? $context["youthPlayers"] : (function () { throw new RuntimeError('Variable "youthPlayers" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 86
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-around player_portfolio row \">
                        <div class=\"col-12 player-container top-player-card-container\" id=\"player-";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 87, $this->source); })()), "html", null, true);
            echo " \">
";
            // line 93
            echo "                             <div class=\"top-player-image-container\">
                                ";
            // line 94
            if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 94) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 94) == " "))) {
                // line 95
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                echo "\" alt=\"\" class=\"top-player-card-img\">
                                ";
            } else {
                // line 97
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 97))), "html", null, true);
                echo "\" alt=\"\" class=\"top-player-card-img\">
                                ";
            }
            // line 99
            echo "                             </div>
                            <p class=\"top-player-card-name\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 100), "Name", [], "any", false, false, false, 100), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 100), "FName", [], "any", false, false, false, 100), "html", null, true);
            echo "</p>
";
            // line 102
            echo "                        </div>
                    </div>
                    ";
            // line 104
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 104, $this->source); })()) + 1);
            // line 105
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
            </div>
        </div>
    </div>

    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-center div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2>Треньри  </h2>
                </div>
                ";
        // line 117
        $context["foo"] = 1;
        // line 118
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["coache"]) {
            // line 119
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 mt-2 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 120, $this->source); })()), "html", null, true);
            echo " \">


                                ";
            // line 123
            if (((twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 123) == null) || (twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 123) == " "))) {
                // line 124
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1-white2.png"), "html", null, true);
                echo "\" alt=\"\" class=\"player-img\">
                                ";
            } else {
                // line 126
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 126))), "html", null, true);
                echo "\" alt=\"\" class=\"image\">
                                ";
            }
            // line 128
            echo "
                                <p class=\"player-name\">";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["coache"], "User", [], "any", false, false, false, 129), "Name", [], "any", false, false, false, 129), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["coache"], "User", [], "any", false, false, false, 129), "FName", [], "any", false, false, false, 129), "html", null, true);
            echo " </p>

                            <span><i class=\"fas fa-times country-fa-times coaches\" id=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coache"], "Id", [], "any", false, false, false, 131), "html", null, true);
            echo "\"></i></span>
                        </div>
                    </div>
                    ";
            // line 134
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 134, $this->source); })()) + 1);
            // line 135
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-coache justify-content-center text-center\" id=\"player-";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 137, $this->source); })()), "html", null, true);
        echo " \">

                        <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
        echo "\" alt=\"\" class=\"add-player-img\">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"player-status-div col-9  team-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h3 class=\"mb-3 col-12 text-center\">Искате ли да изтриете записа:</h3>
                <button class=\"btn bg-danger\" id=\"no\">Не</button>
                <button class=\"btn btn-green\" id=\"yes\">Да</button>

            </div>
            <span><i class=\"fas fa-times-circle color-black \"></i></span>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-9  player-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h1 class=\"col-12 text-center\">Добавяне на играчи</h1>
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray name\" type=\"text\"  placeholder=\"Име...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2  bg-gray fName\" type=\"text\" placeholder=\"Фамилия...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"position\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Позиция </option>
                        <option value=\"1\" class=\"bg-gray\">Вратар(GK)</option>
                        <option value=\"2\" class=\"bg-gray\">Нападател(ST)</option>
                        <option value=\"3\" class=\"bg-gray\">Контузен</option>
                    </select>
                </div>
                <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray phone\" inputmask type=\"text\" placeholder=\"Телефон...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <button class=\"btn bg-mycolor\" id=\"send-info\">Потвърди</button>

            </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>

    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-lg-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"add-coache\" >
            <div class=\"col-lg-8 col-sm-11 row justify-content-center\">
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray coacheName\" type=\"text\"  placeholder=\"Име...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2  bg-gray coacheFName\" type=\"text\" placeholder=\"Фамилия...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"coachePosition\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                        <option value=\"1\" class=\"bg-gray\">Главен(GK)</option>
                        <option value=\"2\" class=\"bg-gray\">Помощник(ST)</option>
                        <option value=\"3\" class=\"bg-gray\">Контузен</option>
                    </select>
                </div>
                <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray coachePhone\" inputmask type=\"text\" placeholder=\"Телефон...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <button class=\"btn bg-mycolor\" id=\"send-info-coache\">Потвърди</button>

            </div>


            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>


    <script>
        \$('.add-player').on('click', function () {
            var player = \$(this).children().attr('id');
            \$('.player-status-container').css('visibility', 'visible');
            \$('.player-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('.player-status-div').css('visibility', 'hidden');
            });
        });


        \$('.add-coache').on('click', function () {
            var player = \$(this).children().attr('id');
            \$('.coache-status-container').css('visibility', 'visible');
            \$('.coache-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.coache-status-container').css('visibility', 'hidden');
                \$('.coache-status-div').css('visibility', 'hidden');
            });
        });


        \$('.players').on('click', function () {
            var player = \$(this).attr('id');
            \$('.team-status-container').css('visibility', 'visible');
            \$('.team-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.team-status-container').css('visibility', 'hidden');
                \$('.team-status-div').css('visibility', 'hidden');
            });
            \$('#no').on('click', function () {
                \$('.team-status-container').css('visibility', 'hidden');
                \$('.team-status-div').css('visibility', 'hidden');
            });
            \$('#yes').on('click', function () {
                \$.ajax({
                    method: \"POST\",
                    data: {\"division\" : ";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 262, $this->source); })()), "Id", [], "any", false, false, false, 262), "html", null, true);
        echo " },
                    url: \" app.php/admin/deletePlayer/\" + player,
                })
                    .done(function( msg ) {
                        window.location.href = \"app.php/admin\";

                    });
            });
        });

        \$('.coaches').on('click', function () {
            var coache = \$(this).attr('id');
            \$('.team-status-container').css('visibility', 'visible');
            \$('.team-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.team-status-container').css('visibility', 'hidden');
                \$('.team-status-div').css('visibility', 'hidden');
            });
            \$('#no').on('click', function () {
                \$('.team-status-container').css('visibility', 'hidden');
                \$('.team-status-div').css('visibility', 'hidden');
            });
            \$('#yes').on('click', function () {
                \$.ajax({
                    method: \"POST\",
                    data: {\"division\" : ";
        // line 288
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 288, $this->source); })()), "Id", [], "any", false, false, false, 288), "html", null, true);
        echo " },
                    url: \" app.php/admin/deleteCoache/\" + coache,
                })
                    .done(function( msg ) {
                        window.location.href = \"app.php/admin\";

                    });
            });
        });
        \$('.phone').inputmask('Regex', {
            regex: \"08([7-9])([0-9]{7})+\",
            alias: \"string\",
            clearIncomplete: true
        });
        \$(\".name\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });
        \$(\".fName\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });

        \$('.cochePhone').inputmask('Regex', {
            regex: \"08([7-9])([0-9]{7})+\",
            alias: \"string\",
            clearIncomplete: true
        });
        \$(\".coacheName\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });
        \$(\".coacheFName\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });

        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var fName = \$('.fName').val();
            var position = \$('#position').val();
            var phone = \$('.phone').val();
            console.log(name);
            console.log(fName);
            console.log(position);
            console.log(phone);
            var namesChecker = true;
            var positionCheker = true;
            var  phoneCheker = true;
            // if(name >= 3 && fName >= 3){
            //     namesChecker = true;
            // }else {
            //     iziToast.warning({
            //         title: 'Грешни данни',
            //         message: \"Не може името и фамилията да съдържат по малко от 3 символа\",
            //         overlay: true,
            //         zindex: 999,
            //         position: 'center',
            //         timeout: 2000,
            //     });
            // }
            // if(position != 0){
            //     positionCheker = true;
            // }else{
            //     iziToast.warning({
            //         title: 'Грешни данни',
            //         message: \"Моля изберете позиция, на която играча ще играе\",
            //         overlay: true,
            //         zindex: 999,
            //         position: 'center',
            //         timeout: 2000,
            //     });
            // }
            //
            // if (phone == 10 ){
            //     phoneCheker = true;
            // }else{
            //     iziToast.warning({
            //         title: 'Грешни данни',
            //         message: \"Телефона трябва да съдържа 10 цифри \",
            //         overlay: true,
            //         zindex: 999,
            //         position: 'center',
            //         timeout: 2000,
            //     });
            // }
            //

            if(namesChecker == true && positionCheker == true && phoneCheker == true) {
                \$.ajax({
                    method: \"POST\",
                    data: {
                        \"appbundle_users[name]\": name,
                        \"appbundle_users[fName]\": fName,
                        \"position\": position,
                        \"appbundle_players[phone]\": phone
                    },
                    url: \"/admin\",
                })
                    .done(function (msg) {
                        if (msg == 1) {
                            window.location.href = \"app.php/admin\";
                        }
                        console.log(msg);

                    });
                }
            });



        \$('#send-info-coache').on('click', function () {
            var name = \$('.coacheName').val();
            var fName = \$('.coacheFName').val();
            var coachePosition = \$('#coachePosition').val();
            var phone = \$('.coachePhone').val();

            var namesChecker = false;
            var positionCheker = false;
            var  phoneCheker = false

            if(name >= 3 && fName >= 3){
                namesChecker = true;
            }else {
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Неможе името и фамилията да съдържат по малко от 3 символа\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });
            }
            if(position != 0){
                positionCheker = true;
            }else{
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Моля изберете позиция, на която играча ще играе\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });
            }

            if (phone == 10 ){
                phoneCheker = true;
            }else{
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Телефона трябва да съдържа 10 цифри \",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });
            }


            if(namesChecker == true && positionCheker == true && phoneCheker == true) {

                \$.ajax({
                    method: \"POST\",
                    data: {
                        \"appbundle_users[name]\": name,
                        \"appbundle_users[fName]\": fName,
                        \"position\": coachePosition,
                        \"appbundle_coaches[phone]\": phone
                    },
                    url: \"/admin\",
                })
                    .done(function (msg) {
                        if (msg == 1) {
                            window.location.href = \"app.php/admin\";
                        }

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
        return "admin/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 288,  460 => 262,  334 => 139,  329 => 137,  326 => 136,  320 => 135,  318 => 134,  312 => 131,  305 => 129,  302 => 128,  296 => 126,  290 => 124,  288 => 123,  282 => 120,  279 => 119,  274 => 118,  272 => 117,  259 => 106,  253 => 105,  251 => 104,  247 => 102,  241 => 100,  238 => 99,  232 => 97,  226 => 95,  224 => 94,  221 => 93,  217 => 87,  214 => 86,  209 => 85,  207 => 84,  195 => 74,  189 => 73,  187 => 72,  183 => 70,  177 => 68,  174 => 67,  168 => 65,  162 => 63,  160 => 62,  157 => 61,  153 => 55,  150 => 54,  145 => 53,  143 => 52,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{%  block stylesheets %}
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/admin/topPlayerCard.css\") }}\">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/particles/hiddenFormStyle.css\") }}\">
{% endblock %}
{%  block body %}
    <div id=\"container\">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9  main-charts-container row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-4  mb-5 information-charts-text\">Основни характеристики</h4>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container \">
                        <p>15</p>
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
                        <p>EfBet Cup</p>
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
                {% for player in players %}
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
    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-around div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Топ трима играча от юношеските отбори</h2>
                </div>
                {% set foo = 1 %}
                {% for player in youthPlayers %}
                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-around player_portfolio row \">
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

    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-center div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2>Треньри  </h2>
                </div>
                {% set foo = 1 %}
                {% for coache in coaches%}
                    <div class=\"col-lg-3 col-sm-12 col-md-12 mt-2 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">


                                {% if coache.Image == null or coache.Image == ' ' %}
                                    <img src=\"{{asset('images/user1-white2.png')}}\" alt=\"\" class=\"player-img\">
                                {% else %}
                                    <img src=\"{{asset('images/'~ coache.Image )}}\" alt=\"\" class=\"image\">
                                {% endif %}

                                <p class=\"player-name\">{{ coache.User.Name }} {{ coache.User.FName }} </p>

                            <span><i class=\"fas fa-times country-fa-times coaches\" id=\"{{ coache.Id }}\"></i></span>
                        </div>
                    </div>
                    {% set foo = foo + 1 %}
                {% endfor %}
                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-coache justify-content-center text-center\" id=\"player-{{  foo }} \">

                        <img src=\"{{ asset('images/plus .png') }}\" alt=\"\" class=\"add-player-img\">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"player-status-div col-9  team-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h3 class=\"mb-3 col-12 text-center\">Искате ли да изтриете записа:</h3>
                <button class=\"btn bg-danger\" id=\"no\">Не</button>
                <button class=\"btn btn-green\" id=\"yes\">Да</button>

            </div>
            <span><i class=\"fas fa-times-circle color-black \"></i></span>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-9  player-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h1 class=\"col-12 text-center\">Добавяне на играчи</h1>
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray name\" type=\"text\"  placeholder=\"Име...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2  bg-gray fName\" type=\"text\" placeholder=\"Фамилия...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"position\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Позиция </option>
                        <option value=\"1\" class=\"bg-gray\">Вратар(GK)</option>
                        <option value=\"2\" class=\"bg-gray\">Нападател(ST)</option>
                        <option value=\"3\" class=\"bg-gray\">Контузен</option>
                    </select>
                </div>
                <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray phone\" inputmask type=\"text\" placeholder=\"Телефон...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <button class=\"btn bg-mycolor\" id=\"send-info\">Потвърди</button>

            </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>

    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-lg-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"add-coache\" >
            <div class=\"col-lg-8 col-sm-11 row justify-content-center\">
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray coacheName\" type=\"text\"  placeholder=\"Име...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2  bg-gray coacheFName\" type=\"text\" placeholder=\"Фамилия...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"coachePosition\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                        <option value=\"1\" class=\"bg-gray\">Главен(GK)</option>
                        <option value=\"2\" class=\"bg-gray\">Помощник(ST)</option>
                        <option value=\"3\" class=\"bg-gray\">Контузен</option>
                    </select>
                </div>
                <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray coachePhone\" inputmask type=\"text\" placeholder=\"Телефон...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <button class=\"btn bg-mycolor\" id=\"send-info-coache\">Потвърди</button>

            </div>


            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>


    <script>
        \$('.add-player').on('click', function () {
            var player = \$(this).children().attr('id');
            \$('.player-status-container').css('visibility', 'visible');
            \$('.player-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('.player-status-div').css('visibility', 'hidden');
            });
        });


        \$('.add-coache').on('click', function () {
            var player = \$(this).children().attr('id');
            \$('.coache-status-container').css('visibility', 'visible');
            \$('.coache-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.coache-status-container').css('visibility', 'hidden');
                \$('.coache-status-div').css('visibility', 'hidden');
            });
        });


        \$('.players').on('click', function () {
            var player = \$(this).attr('id');
            \$('.team-status-container').css('visibility', 'visible');
            \$('.team-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.team-status-container').css('visibility', 'hidden');
                \$('.team-status-div').css('visibility', 'hidden');
            });
            \$('#no').on('click', function () {
                \$('.team-status-container').css('visibility', 'hidden');
                \$('.team-status-div').css('visibility', 'hidden');
            });
            \$('#yes').on('click', function () {
                \$.ajax({
                    method: \"POST\",
                    data: {\"division\" : {{ division.Id }} },
                    url: \" app.php/admin/deletePlayer/\" + player,
                })
                    .done(function( msg ) {
                        window.location.href = \"app.php/admin\";

                    });
            });
        });

        \$('.coaches').on('click', function () {
            var coache = \$(this).attr('id');
            \$('.team-status-container').css('visibility', 'visible');
            \$('.team-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.team-status-container').css('visibility', 'hidden');
                \$('.team-status-div').css('visibility', 'hidden');
            });
            \$('#no').on('click', function () {
                \$('.team-status-container').css('visibility', 'hidden');
                \$('.team-status-div').css('visibility', 'hidden');
            });
            \$('#yes').on('click', function () {
                \$.ajax({
                    method: \"POST\",
                    data: {\"division\" : {{ division.Id }} },
                    url: \" app.php/admin/deleteCoache/\" + coache,
                })
                    .done(function( msg ) {
                        window.location.href = \"app.php/admin\";

                    });
            });
        });
        \$('.phone').inputmask('Regex', {
            regex: \"08([7-9])([0-9]{7})+\",
            alias: \"string\",
            clearIncomplete: true
        });
        \$(\".name\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });
        \$(\".fName\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });

        \$('.cochePhone').inputmask('Regex', {
            regex: \"08([7-9])([0-9]{7})+\",
            alias: \"string\",
            clearIncomplete: true
        });
        \$(\".coacheName\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });
        \$(\".coacheFName\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });

        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var fName = \$('.fName').val();
            var position = \$('#position').val();
            var phone = \$('.phone').val();
            console.log(name);
            console.log(fName);
            console.log(position);
            console.log(phone);
            var namesChecker = true;
            var positionCheker = true;
            var  phoneCheker = true;
            // if(name >= 3 && fName >= 3){
            //     namesChecker = true;
            // }else {
            //     iziToast.warning({
            //         title: 'Грешни данни',
            //         message: \"Не може името и фамилията да съдържат по малко от 3 символа\",
            //         overlay: true,
            //         zindex: 999,
            //         position: 'center',
            //         timeout: 2000,
            //     });
            // }
            // if(position != 0){
            //     positionCheker = true;
            // }else{
            //     iziToast.warning({
            //         title: 'Грешни данни',
            //         message: \"Моля изберете позиция, на която играча ще играе\",
            //         overlay: true,
            //         zindex: 999,
            //         position: 'center',
            //         timeout: 2000,
            //     });
            // }
            //
            // if (phone == 10 ){
            //     phoneCheker = true;
            // }else{
            //     iziToast.warning({
            //         title: 'Грешни данни',
            //         message: \"Телефона трябва да съдържа 10 цифри \",
            //         overlay: true,
            //         zindex: 999,
            //         position: 'center',
            //         timeout: 2000,
            //     });
            // }
            //

            if(namesChecker == true && positionCheker == true && phoneCheker == true) {
                \$.ajax({
                    method: \"POST\",
                    data: {
                        \"appbundle_users[name]\": name,
                        \"appbundle_users[fName]\": fName,
                        \"position\": position,
                        \"appbundle_players[phone]\": phone
                    },
                    url: \"/admin\",
                })
                    .done(function (msg) {
                        if (msg == 1) {
                            window.location.href = \"app.php/admin\";
                        }
                        console.log(msg);

                    });
                }
            });



        \$('#send-info-coache').on('click', function () {
            var name = \$('.coacheName').val();
            var fName = \$('.coacheFName').val();
            var coachePosition = \$('#coachePosition').val();
            var phone = \$('.coachePhone').val();

            var namesChecker = false;
            var positionCheker = false;
            var  phoneCheker = false

            if(name >= 3 && fName >= 3){
                namesChecker = true;
            }else {
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Неможе името и фамилията да съдържат по малко от 3 символа\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });
            }
            if(position != 0){
                positionCheker = true;
            }else{
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Моля изберете позиция, на която играча ще играе\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });
            }

            if (phone == 10 ){
                phoneCheker = true;
            }else{
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Телефона трябва да съдържа 10 цифри \",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });
            }


            if(namesChecker == true && positionCheker == true && phoneCheker == true) {

                \$.ajax({
                    method: \"POST\",
                    data: {
                        \"appbundle_users[name]\": name,
                        \"appbundle_users[fName]\": fName,
                        \"position\": coachePosition,
                        \"appbundle_coaches[phone]\": phone
                    },
                    url: \"/admin\",
                })
                    .done(function (msg) {
                        if (msg == 1) {
                            window.location.href = \"app.php/admin\";
                        }

                    });
            }
        });


    </script>
{% endblock %}", "admin/home.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\admin\\home.html.twig");
    }
}
