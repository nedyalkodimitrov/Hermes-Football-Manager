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

/* superAdmin/index.html.twig */
class __TwigTemplate_0612700be4c8d0d66eb04545629210dd1e53eccd5e7b043cb52e85e43dd143c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superAdmin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superAdmin/index.html.twig"));

        $this->parent = $this->loadTemplate("superAdmin/base.html.twig", "superAdmin/index.html.twig", 1);
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
        echo "    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 main-charts-container div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-4  mb-5 information-charts-text\">Основни характеристики</h4>
                </div>

                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container \">
                        <p> ";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 16, $this->source); })())), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Отбора</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container\">
                    <div class=\"information-container \">
                        <p> ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Потребители</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container \">
                        <p> ";
        // line 37
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["divisions"]) || array_key_exists("divisions", $context) ? $context["divisions"] : (function () { throw new RuntimeError('Variable "divisions" does not exist.', 37, $this->source); })())) + twig_length_filter($this->env, (isset($context["youthDivisions"]) || array_key_exists("youthDivisions", $context) ? $context["youthDivisions"] : (function () { throw new RuntimeError('Variable "youthDivisions" does not exist.', 37, $this->source); })()))), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Брой Първенства</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-between div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Топ три първенства с най-много отбори</h2>
                </div>
                ";
        // line 55
        $context["foo"] = 1;
        // line 56
        echo "
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topDivisions"]) || array_key_exists("topDivisions", $context) ? $context["topDivisions"] : (function () { throw new RuntimeError('Variable "topDivisions" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["divisions"]) {
            // line 58
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container top-player-card-container\" id=\"player-";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 59, $this->source); })()), "html", null, true);
            echo " \">

                            <div class=\"top-player-image-container\">
                                ";
            // line 62
            if (((twig_get_attribute($this->env, $this->source, $context["divisions"], "image", [], "any", false, false, false, 62) == null) || (twig_get_attribute($this->env, $this->source, $context["divisions"], "image", [], "any", false, false, false, 62) == " "))) {
                // line 63
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                echo "\" alt=\"\" class=\"top-player-card-img\">
                                ";
            } else {
                // line 65
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["divisions"], "image", [], "any", false, false, false, 65))), "html", null, true);
                echo "\" alt=\"\" class=\"top-player-card-img\">
                                ";
            }
            // line 67
            echo "                            </div>
                            <p class=\"top-player-card-name\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["divisions"], "name", [], "any", false, false, false, 68), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['divisions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
            </div>
        </div>
    </div>
";
        // line 106
        echo "
";
        // line 138
        echo "
";
        // line 142
        echo "

    ";
        // line 153
        echo "
";
        // line 157
        echo "
";
        // line 160
        echo "





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


        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var phone = \$('.phone').val();
            var division = \$('#position').val();
            var phone = \$('.phone').val();

            var namesChecker = false;
            var positionCheker = false;
            var  phoneCheker = false;


            if(name.length >= 3 && fName.length >= 3 ){
                namesChecker = true;
            }else {
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Неможе началната дата да е по-голяма от крайната\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }


            if (position != 0){
                positionCheker = true;
            }else {
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Моля изберете позицията ,където играчът ще играе\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }
            if (phone.length == 10){
                phoneCheker = true;
            }else {
                console.log(phone);
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Телефона трябва да е с дължина от 10 цифри\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }
            if (phoneCheker == true && positionCheker == true && namesChecker == true){
                \$.ajax({
                    method: \"POST\",
                    data: {\"appbundle_users[name]\": name, \"appbundle_users[fName]\": fName, \"position\": position, \"appbundle_players[phone]\": phone},
                    url: \"";
        // line 252
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingView");
        echo "\",
                })
                    .done(function( msg ) {
                        if(msg == 1){
                            \$('#position').val(0);
                            \$('.name').val('');
                            \$('.fName').val('');
                            \$('.phone').val('');
                        }

                    });
            }else{
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Всички полета трябва да са попълнени\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
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
        return "superAdmin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 252,  228 => 160,  225 => 157,  222 => 153,  218 => 142,  215 => 138,  212 => 106,  206 => 74,  200 => 73,  198 => 72,  194 => 70,  190 => 68,  187 => 67,  181 => 65,  175 => 63,  173 => 62,  167 => 59,  164 => 58,  160 => 57,  157 => 56,  155 => 55,  134 => 37,  121 => 27,  107 => 16,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'superAdmin/base.html.twig' %}
{% block style %}
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/admin/topPlayerCard.css\") }}\">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/particles/hiddenFormStyle.css\") }}\">
{% endblock %}
{% block body %}
    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 main-charts-container div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-4  mb-5 information-charts-text\">Основни характеристики</h4>
                </div>

                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container \">
                        <p> {{teams|length}}</p>
                    </div>

                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Отбора</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container\">
                    <div class=\"information-container \">
                        <p> {{ users }}</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Потребители</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container \">
                        <p> {{ divisions|length + youthDivisions|length }}</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Брой Първенства</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-between div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Топ три първенства с най-много отбори</h2>
                </div>
                {% set foo = 1 %}

                {% for divisions in topDivisions %}
                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container top-player-card-container\" id=\"player-{{  foo }} \">

                            <div class=\"top-player-image-container\">
                                {% if divisions.image == null or divisions.image == ' ' %}
                                    <img src=\"{{asset('images/user-image.png')}}\" alt=\"\" class=\"top-player-card-img\">
                                {% else %}
                                    <img src=\"{{asset('images/'~ divisions.image )}}\" alt=\"\" class=\"top-player-card-img\">
                                {% endif %}
                            </div>
                            <p class=\"top-player-card-name\">{{ divisions.name }}</p>
                            {#                            <span><i class=\"fas fa-times country-fa-times players\" id=\"{{ player.Id }}\"></i></span>#}
                        </div>
                    </div>
                    {% set foo = foo + 1 %}
                {% endfor %}

            </div>
        </div>
    </div>
{# <div id=\"container \">#}
{#        <div class=\"row mt-5  justify-content-center\">#}
{#            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-between div-charts row pb-3\">#}
{#                <div class=\"col-12 text-center\">#}
{#                    <h2 >Топ три отбора с най-много играчи</h2>#}
{#                </div>#}
{#                {% set foo = 1 %}#}
{#                {% for player in youthPlayers %}#}
{#                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">#}
{#                        <div class=\"col-12 player-container top-player-card-container\" id=\"player-{{  foo }} \">#}
{#                            #}{#                            {%   if  player.Status == 0 %}#}
{#                            #}{#                                <div class=\"status-green\"></div>#}
{#                            #}{#                                {% else %}#}
{#                            #}{#                                <div class=\"status-red\"></div>#}
{#                            #}{#                            {%  endif %}#}
{#                            <div class=\"top-player-image-container\">#}
{#                                {% if player.Image == null or player.Image == ' ' %}#}
{#                                    <img src=\"{{asset('images/user-image.png')}}\" alt=\"\" class=\"top-player-card-img\">#}
{#                                {% else %}#}
{#                                    <img src=\"{{asset('images/'~ player.Image )}}\" alt=\"\" class=\"top-player-card-img\">#}
{#                                {% endif %}#}
{#                            </div>#}
{#                            <p class=\"top-player-card-name\">{{ player.User.Name }} {{ player.User.FName }}</p>#}
{#                            #}{#                            <span><i class=\"fas fa-times country-fa-times players\" id=\"{{ player.Id }}\"></i></span>#}
{#                        </div>#}
{#                    </div>#}
{#                    {% set foo = foo + 1 %}#}
{#                {% endfor %}#}

{#            </div>#}
{#        </div>#}
{#    </div>#}
{# <div id=\"container \">#}
{#        <div class=\"row mt-5  justify-content-center\">#}
{#            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-between div-charts row pb-3\">#}
{#                <div class=\"col-12 text-center\">#}
{#                    <h2 >Топ три най-добри играча</h2>#}
{#                </div>#}
{#                {% set foo = 1 %}#}
{#                {% for player in youthPlayers %}#}
{#                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">#}
{#                        <div class=\"col-12 player-container top-player-card-container\" id=\"player-{{  foo }} \">#}
{#                            #}{#                            {%   if  player.Status == 0 %}#}
{#                            #}{#                                <div class=\"status-green\"></div>#}
{#                            #}{#                                {% else %}#}
{#                            #}{#                                <div class=\"status-red\"></div>#}
{#                            #}{#                            {%  endif %}#}
{#                            <div class=\"top-player-image-container\">#}
{#                                {% if player.Image == null or player.Image == ' ' %}#}
{#                                    <img src=\"{{asset('images/user-image.png')}}\" alt=\"\" class=\"top-player-card-img\">#}
{#                                {% else %}#}
{#                                    <img src=\"{{asset('images/'~ player.Image )}}\" alt=\"\" class=\"top-player-card-img\">#}
{#                                {% endif %}#}
{#                            </div>#}
{#                            <p class=\"top-player-card-name\">{{ player.User.Name }} {{ player.User.FName }}</p>#}
{#                            #}{#                            <span><i class=\"fas fa-times country-fa-times players\" id=\"{{ player.Id }}\"></i></span>#}
{#                        </div>#}
{#                    </div>#}
{#                    {% set foo = foo + 1 %}#}
{#                {% endfor %}#}

{#            </div>#}
{#        </div>#}
{#    </div>#}


    {#    <div class=\"row mt-5  justify-content-center\">#}
{#    <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 row pb-3 justify-content-lg-center justify-content-sm-center\">#}
{#            <div class=\"col-lg-6 col-sm-12 col-md-12 justify-content-center player_portfolio row \">#}
{#                <div class=\"col-12   youthTeam-container\" >#}
{#                    <a href=\"{{ path(\"superAdminTeamsCountry\") }}\">#}
{#                        <img src=\"{{ asset(\"images/footballWall.jpg\") }}\" class=\"img-youthTeamRotate\" alt=\"\">#}
{#                        <h1 class=\"youthTeam-text\">#}
{#                           Отбори#}
{#                        </h1>#}

{#                    </a>#}
{#                </div>#}
{#            </div>#}

{#        </div>#}
{#    </div>#}






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


        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var phone = \$('.phone').val();
            var division = \$('#position').val();
            var phone = \$('.phone').val();

            var namesChecker = false;
            var positionCheker = false;
            var  phoneCheker = false;


            if(name.length >= 3 && fName.length >= 3 ){
                namesChecker = true;
            }else {
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Неможе началната дата да е по-голяма от крайната\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }


            if (position != 0){
                positionCheker = true;
            }else {
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Моля изберете позицията ,където играчът ще играе\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }
            if (phone.length == 10){
                phoneCheker = true;
            }else {
                console.log(phone);
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Телефона трябва да е с дължина от 10 цифри\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }
            if (phoneCheker == true && positionCheker == true && namesChecker == true){
                \$.ajax({
                    method: \"POST\",
                    data: {\"appbundle_users[name]\": name, \"appbundle_users[fName]\": fName, \"position\": position, \"appbundle_players[phone]\": phone},
                    url: \"{{ path('trainingView') }}\",
                })
                    .done(function( msg ) {
                        if(msg == 1){
                            \$('#position').val(0);
                            \$('.name').val('');
                            \$('.fName').val('');
                            \$('.phone').val('');
                        }

                    });
            }else{
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Всички полета трябва да са попълнени\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }
        });
    </script>

{% endblock %}", "superAdmin/index.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\superAdmin\\index.html.twig");
    }
}
