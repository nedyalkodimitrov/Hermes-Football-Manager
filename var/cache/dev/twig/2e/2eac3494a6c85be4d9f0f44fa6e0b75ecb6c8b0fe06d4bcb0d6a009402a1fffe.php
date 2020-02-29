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
        echo "     <a class=\"nav-item nav-link   ml-2\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminHomeAction");
        echo "\">Начална страница </a>
     <a class=\"nav-item nav-link current-item ml-2 \" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\">Юнушестки отбори</a>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container justify-content-center mx-auto text-center row\">
        <div class=\"col-12 row justify-content-center p-3 justify-content-lg-between\">
        ";
        // line 11
        if ((((isset($context["youthTeams"]) || array_key_exists("youthTeams", $context) ? $context["youthTeams"] : (function () { throw new RuntimeError('Variable "youthTeams" does not exist.', 11, $this->source); })()) == null) || ((isset($context["youthTeams"]) || array_key_exists("youthTeams", $context) ? $context["youthTeams"] : (function () { throw new RuntimeError('Variable "youthTeams" does not exist.', 11, $this->source); })()) == ""))) {
            // line 12
            echo "

        ";
        } else {
            // line 15
            echo "
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["youthTeams"]) || array_key_exists("youthTeams", $context) ? $context["youthTeams"] : (function () { throw new RuntimeError('Variable "youthTeams" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["youthTeam"]) {
                // line 17
                echo "
                    <div class=\"col-lg-6 col-sm-9 col-md-9 mt-3 justify-content-center youthTeamCard-wrap row \">
                        <div class=\"col-11  youthTeamCard-container\">
                            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeam", ["id" => twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">
                                    <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/footballWall.jpg"), "html", null, true);
                echo "\" class=\"youthTeamCard-image\" alt=\"\">
                                <div class=\"youthTeamCard-textInformation\">
                                    <h2 class=\"youthTeam-text\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Name", [], "any", false, false, false, 23), "html", null, true);
                echo "</h2>
                                    <h5 class=\"trainer_info\">
                                        Треньори:
                                        ";
                // line 26
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Coaches", [], "any", false, false, false, 26)) == 0)) {
                    // line 27
                    echo "                                            Няма
                                        ";
                } else {
                    // line 29
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Coaches", [], "any", false, false, false, 29)), "html", null, true);
                    echo "

                                        ";
                }
                // line 32
                echo "                                    </h5>
                                    <h5 class=\"player_info\">Играчи: ";
                // line 33
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Players", [], "any", false, false, false, 33)), "html", null, true);
                echo "</h5>
                                </div>
                            </a>
                            <span><i class=\"fas fa-times country-fa-times youthTeam-delete\" id=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Id", [], "any", false, false, false, 36), "html", null, true);
                echo "\"></i></span>
                        </div>
                    </div>


            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['youthTeam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "

        ";
        }
        // line 48
        echo "
";
        // line 51
        echo "        </div>
    </div>

    <div class=\"add-team-circle-container row \">
        <div class=\"add-team-circle\" id=\"player- \">
            <img src=\"";
        // line 56
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
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["divisions"]) || array_key_exists("divisions", $context) ? $context["divisions"] : (function () { throw new RuntimeError('Variable "divisions" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["division"]) {
            // line 78
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "Id", [], "any", false, false, false, 78), "html", null, true);
            echo "\" selected=\"selected\"  class=\"bg-gray\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "Name", [], "any", false, false, false, 78), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "Age", [], "any", false, false, false, 78), "html", null, true);
            echo ") </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['division'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createYouthTeam");
        echo "\",
                })
                    .done(function( msg ) {
                        console.log(msg);
                        window.location.href = \"";
        // line 132
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
        // line 148
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
        return array (  301 => 148,  282 => 132,  275 => 128,  225 => 80,  212 => 78,  208 => 77,  184 => 56,  177 => 51,  174 => 48,  169 => 42,  157 => 36,  151 => 33,  148 => 32,  141 => 29,  137 => 27,  135 => 26,  129 => 23,  124 => 21,  120 => 20,  115 => 17,  111 => 16,  108 => 15,  103 => 12,  101 => 11,  97 => 9,  87 => 8,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
 {% block nav %}
     <a class=\"nav-item nav-link   ml-2\" href=\"{{ path(\"adminHomeAction\") }}\">Начална страница </a>
     <a class=\"nav-item nav-link current-item ml-2 \" href=\"{{ path(\"youthTeams\") }}\">Юнушестки отбори</a>

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
