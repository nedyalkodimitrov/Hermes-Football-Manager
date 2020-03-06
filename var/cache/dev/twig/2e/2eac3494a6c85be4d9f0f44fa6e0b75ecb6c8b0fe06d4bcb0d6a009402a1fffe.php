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

/* admin/teams.html.twig */
class __TwigTemplate_e21305a1f458eb77376c677c35b10dbec3d53c5c1db8bc2f06f53da48e605aec extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/teams.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/teams.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/teams.html.twig", 1);
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
        echo "     <a class=\"nav-item nav-link ml-2\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminHomeAction");
        echo "\">Начална страница </a>
     <a class=\"nav-item nav-link ml-2 \" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manTeam");
        echo "\">Мъжки отбор</a>
     <a class=\"nav-item nav-link ml-2 current-item\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\">Юнушестки отбори</a>
     <a class=\"nav-item nav-link ml-2 \" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\">Програма</a>


 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"container justify-content-center mx-auto text-center row\">
        <div class=\"col-12 row justify-content-center p-3 justify-content-lg-between\">
        ";
        // line 14
        if ((((isset($context["youthTeams"]) || array_key_exists("youthTeams", $context) ? $context["youthTeams"] : (function () { throw new RuntimeError('Variable "youthTeams" does not exist.', 14, $this->source); })()) == null) || ((isset($context["youthTeams"]) || array_key_exists("youthTeams", $context) ? $context["youthTeams"] : (function () { throw new RuntimeError('Variable "youthTeams" does not exist.', 14, $this->source); })()) == ""))) {
            // line 15
            echo "

        ";
        } else {
            // line 18
            echo "
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["youthTeams"]) || array_key_exists("youthTeams", $context) ? $context["youthTeams"] : (function () { throw new RuntimeError('Variable "youthTeams" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["youthTeam"]) {
                // line 20
                echo "
                    <div class=\"col-lg-6 col-sm-9 col-md-9 mt-3 justify-content-center youthTeamCard-wrap row \">
                        <div class=\"col-11  youthTeamCard-container\">
                            <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeam", ["id" => twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\">
                                    <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/footballWall.jpg"), "html", null, true);
                echo "\" class=\"youthTeamCard-image\" alt=\"\">
                                <div class=\"youthTeamCard-textInformation\">
                                    <h2 class=\"youthTeam-text\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Name", [], "any", false, false, false, 26), "html", null, true);
                echo "</h2>
                                    <h5 class=\"trainer_info\">
                                        Треньори:
                                        ";
                // line 29
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Coaches", [], "any", false, false, false, 29)) == 0)) {
                    // line 30
                    echo "                                            Няма
                                        ";
                } else {
                    // line 32
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Coaches", [], "any", false, false, false, 32)), "html", null, true);
                    echo "

                                        ";
                }
                // line 35
                echo "                                    </h5>
                                    <h5 class=\"player_info\">Играчи: ";
                // line 36
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Players", [], "any", false, false, false, 36)), "html", null, true);
                echo "</h5>
                                </div>
                            </a>
                            <span><i class=\"fas fa-times country-fa-times youthTeam-delete\" id=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Id", [], "any", false, false, false, 39), "html", null, true);
                echo "\"></i></span>
                        </div>
                    </div>


            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['youthTeam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "

        ";
        }
        // line 51
        echo "
";
        // line 54
        echo "        </div>
    </div>

    <div class=\"add-team-circle-container row \">
        <div class=\"add-team-circle\" id=\"player- \">
            <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
        echo "\" alt=\"\" class=\"add-team\">

        </div>
    </div>




    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-lg-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"add-player\" >

            <div class=\"col-lg-8 col-sm-11 row justify-content-center\">
                <div class=\"input-group mb-3 col-lg-12 col-sm-12\">
                    <h2 class=\"mb-5 col-12 text-center justify-content-center\">Добавяне на  юнушестки отбор</h2>
                    <input class=\"effect-2 bg-gray name\" type=\"text\"  placeholder=\"Име...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>

                <div class=\"input-group mb-3 col-lg-12 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"division\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["divisions"]) || array_key_exists("divisions", $context) ? $context["divisions"] : (function () { throw new RuntimeError('Variable "divisions" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["division"]) {
            // line 81
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "Id", [], "any", false, false, false, 81), "html", null, true);
            echo "\" selected=\"selected\"  class=\"bg-gray\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "Name", [], "any", false, false, false, 81), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "Age", [], "any", false, false, false, 81), "html", null, true);
            echo ") </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['division'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </select>
                </div>

                <button class=\"btn bg-mycolor\" id=\"send-info\">Потвърди</button>

            </div>


            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>
    <script>
        \$('.add-team').on('click', function () {
            \$('.player-status-container').css('visibility', 'visible')
                .css('height', '100vh')
                .css('top', '0%')
                .css('transition', 'ease 0.7s');
            \$('.player-status-div')
                .css('visibility', 'visible')
                .css('transition', ' ease 0.6s')
                .css('top', '50%')
                .css('transform', ' translate(-50%, -50%)');

            \$('#treatment_info').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-div')
                    .css('top', '-50%')
                    .css('transform', ' translate(-50%, -100%)')
                    .css('transition', 'ease 1s');

                \$('.player-status-container').css('visibility', 'hidden')
                    .css('height', '0vh')
                    .css('top', '-50%')
                    .css('transition', 'ease 1.1s');
            });
        });



        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var division = \$('#division').val();

            if (division != 0 && name.length > 4) {
                \$.ajax({
                    method: \"POST\",
                    data: {\"name\": name, \"division\": division},
                    url: \"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createYouthTeam");
        echo "\",
                })
                    .done(function( msg ) {
                        console.log(msg);
                        window.location.href = \"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\";
                    });

             }else{

            }
        });

        \$('.youthTeam-delete').on('click', function () {
            var id = \$(this).attr('id');
            \$.ajax({
                method: \"POST\",
                url: \"app.php/admin/deleteYouthTeam/\" + id,
            })
                .done(function( msg ) {

                    window.location.href = \"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\";
                });

           });




    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/teams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 151,  291 => 135,  284 => 131,  234 => 83,  221 => 81,  217 => 80,  193 => 59,  186 => 54,  183 => 51,  178 => 45,  166 => 39,  160 => 36,  157 => 35,  150 => 32,  146 => 30,  144 => 29,  138 => 26,  133 => 24,  129 => 23,  124 => 20,  120 => 19,  117 => 18,  112 => 15,  110 => 14,  106 => 12,  96 => 11,  82 => 6,  78 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
 {% block nav %}
     <a class=\"nav-item nav-link ml-2\" href=\"{{ path(\"adminHomeAction\") }}\">Начална страница </a>
     <a class=\"nav-item nav-link ml-2 \" href=\"{{ path(\"manTeam\") }}\">Мъжки отбор</a>
     <a class=\"nav-item nav-link ml-2 current-item\" href=\"{{ path(\"youthTeams\") }}\">Юнушестки отбори</a>
     <a class=\"nav-item nav-link ml-2 \" href=\"{{ path(\"youthTeams\") }}\">Програма</a>


 {% endblock  %}

{%  block body %}
    <div class=\"container justify-content-center mx-auto text-center row\">
        <div class=\"col-12 row justify-content-center p-3 justify-content-lg-between\">
        {% if youthTeams == null or youthTeams == '' %}


        {% else %}

            {% for youthTeam in youthTeams %}

                    <div class=\"col-lg-6 col-sm-9 col-md-9 mt-3 justify-content-center youthTeamCard-wrap row \">
                        <div class=\"col-11  youthTeamCard-container\">
                            <a href=\"{{ path('youthTeam',{id : youthTeam.Id}) }}\">
                                    <img src=\"{{ asset(\"images/footballWall.jpg\") }}\" class=\"youthTeamCard-image\" alt=\"\">
                                <div class=\"youthTeamCard-textInformation\">
                                    <h2 class=\"youthTeam-text\">{{ youthTeam.Name}}</h2>
                                    <h5 class=\"trainer_info\">
                                        Треньори:
                                        {% if youthTeam.Coaches|length == 0 %}
                                            Няма
                                        {% else %}
                                            {{ youthTeam.Coaches|length }}

                                        {% endif %}
                                    </h5>
                                    <h5 class=\"player_info\">Играчи: {{ youthTeam.Players|length }}</h5>
                                </div>
                            </a>
                            <span><i class=\"fas fa-times country-fa-times youthTeam-delete\" id=\"{{ youthTeam.Id }}\"></i></span>
                        </div>
                    </div>


            {% endfor %}


        {% endif %}
{#            <div class=\"col-lg-4 col-sm-12 col-md-12 justify-content-center player_portfolio row \">#}
{#                <div class=\"col-lg-12 player-container add-team add-coach justify-content-center text-center\" id=\"player- \">#}
{#                    <img src=\"{{ asset('images/plus .png') }}\" alt=\"\" class=\"add-player-img\">#}

{#                </div>#}
{#            </div>#}
        </div>
    </div>

    <div class=\"add-team-circle-container row \">
        <div class=\"add-team-circle\" id=\"player- \">
            <img src=\"{{ asset('images/plus .png') }}\" alt=\"\" class=\"add-team\">

        </div>
    </div>




    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-lg-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"add-player\" >

            <div class=\"col-lg-8 col-sm-11 row justify-content-center\">
                <div class=\"input-group mb-3 col-lg-12 col-sm-12\">
                    <h2 class=\"mb-5 col-12 text-center justify-content-center\">Добавяне на  юнушестки отбор</h2>
                    <input class=\"effect-2 bg-gray name\" type=\"text\"  placeholder=\"Име...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>

                <div class=\"input-group mb-3 col-lg-12 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"division\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                        {% for division in divisions %}
                            <option value=\"{{ division.Id }}\" selected=\"selected\"  class=\"bg-gray\">{{ division.Name  }} ({{ division.Age }}) </option>
                        {% endfor %}
                    </select>
                </div>

                <button class=\"btn bg-mycolor\" id=\"send-info\">Потвърди</button>

            </div>


            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>
    <script>
        \$('.add-team').on('click', function () {
            \$('.player-status-container').css('visibility', 'visible')
                .css('height', '100vh')
                .css('top', '0%')
                .css('transition', 'ease 0.7s');
            \$('.player-status-div')
                .css('visibility', 'visible')
                .css('transition', ' ease 0.6s')
                .css('top', '50%')
                .css('transform', ' translate(-50%, -50%)');

            \$('#treatment_info').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-div')
                    .css('top', '-50%')
                    .css('transform', ' translate(-50%, -100%)')
                    .css('transition', 'ease 1s');

                \$('.player-status-container').css('visibility', 'hidden')
                    .css('height', '0vh')
                    .css('top', '-50%')
                    .css('transition', 'ease 1.1s');
            });
        });



        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var division = \$('#division').val();

            if (division != 0 && name.length > 4) {
                \$.ajax({
                    method: \"POST\",
                    data: {\"name\": name, \"division\": division},
                    url: \"{{ path(\"createYouthTeam\") }}\",
                })
                    .done(function( msg ) {
                        console.log(msg);
                        window.location.href = \"{{ path(\"youthTeams\") }}\";
                    });

             }else{

            }
        });

        \$('.youthTeam-delete').on('click', function () {
            var id = \$(this).attr('id');
            \$.ajax({
                method: \"POST\",
                url: \"app.php/admin/deleteYouthTeam/\" + id,
            })
                .done(function( msg ) {

                    window.location.href = \"{{ path(\"youthTeams\") }}\";
                });

           });




    </script>
{% endblock %}", "admin/teams.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\admin\\teams.html.twig");
    }
}
