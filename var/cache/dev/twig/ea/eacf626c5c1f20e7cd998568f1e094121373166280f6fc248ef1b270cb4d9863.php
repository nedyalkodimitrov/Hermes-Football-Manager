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

/* superAdmin/divisions.html.twig */
class __TwigTemplate_44bd9ac504640ae1cab150f74d670aec113ab3ef48949873d0c4055d1a4c852c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superAdmin/divisions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superAdmin/divisions.html.twig"));

        $this->parent = $this->loadTemplate("superAdmin/base.html.twig", "superAdmin/divisions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-12 row justify-content-center mx-auto max-resolution\">
        <div class=\"col-lg-11 col-md-7 col-sm-11 col-10   row pb-3\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["divisions"]) || array_key_exists("divisions", $context) ? $context["divisions"] : (function () { throw new RuntimeError('Variable "divisions" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["division"]) {
            // line 6
            echo "                <div class=\"col-lg-4 col-sm-11 row m-0 \">
                    <div class=\"col-lg-12  col-sm-9 col-md-6 country-container justify-content-around text-center mt-3 mx-auto\">
                        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("superAdminTeams", ["id" => twig_get_attribute($this->env, $this->source, $context["division"], "Id", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\" class=\"m-0 \">
                            <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["division"], "Image", [], "any", false, false, false, 9))), "html", null, true);
            echo "\" alt=\"\" class=\"country-img m-0 mt-4\">
                            <h1 class=\"country-text mt-1 ml-2 text-left mb-2 mt-3\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</h1>
                        </a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['division'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            <div class=\"add-division-circle-container  row \" id=\"add-player-container\">
                <div class=\"add-division-circle\" id=\"player- \">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
        echo "\" alt=\"\" class=\"add-division \" >

                </div>
            </div>
        </div>
    </div>


    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-9  player-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <label for=\"form_image\" class=\"\">   <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/"), "html", null, true);
        echo "\" alt=\"\" class=\"profile_pic\"></label>

                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray name\" type=\"text\"  placeholder=\"Име на отбора\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
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
            regex:\"[А-Я][а-я]+\" ,
            alias: \"string\",
            clearIncomplete: true
        });


        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var phone = \$('.phone').val();

            var namesChecker = false;
            var  phoneCheker = false;


            if(name.length > 5  ){
                namesChecker = true;
            }else {
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Името трябва да е по-дълgо от 5 символа\",
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
            if (phoneCheker == true && namesChecker == true){
                \$.ajax({
                    method: \"POST\",
                    data: {\"name\": name, \"phone\": phone},
                    url: \"\",
                })
                    .done(function( msg ) {
                        if(msg == 1){
                            \$('#position').val(0);
                            \$('.name').val('');
                            \$('.fName').val('');
                            \$('.phone').val('');
                        }
                        console.log(msg);
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
        return "superAdmin/divisions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 28,  103 => 17,  99 => 15,  88 => 10,  84 => 9,  80 => 8,  76 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'superAdmin/base.html.twig' %}
{% block body %}
    <div class=\"col-12 row justify-content-center mx-auto max-resolution\">
        <div class=\"col-lg-11 col-md-7 col-sm-11 col-10   row pb-3\">
            {% for division in divisions%}
                <div class=\"col-lg-4 col-sm-11 row m-0 \">
                    <div class=\"col-lg-12  col-sm-9 col-md-6 country-container justify-content-around text-center mt-3 mx-auto\">
                        <a href=\"{{ path(\"superAdminTeams\", {id: division.Id}) }}\" class=\"m-0 \">
                            <img src=\"{{asset(\"images/\" ~ division.Image)}}\" alt=\"\" class=\"country-img m-0 mt-4\">
                            <h1 class=\"country-text mt-1 ml-2 text-left mb-2 mt-3\">{{ division.name }}</h1>
                        </a>
                    </div>
                </div>
            {% endfor %}
            <div class=\"add-division-circle-container  row \" id=\"add-player-container\">
                <div class=\"add-division-circle\" id=\"player- \">
                    <img src=\"{{ asset('images/plus .png') }}\" alt=\"\" class=\"add-division \" >

                </div>
            </div>
        </div>
    </div>


    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-9  player-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <label for=\"form_image\" class=\"\">   <img src=\"{{asset(\"images/\" )}}\" alt=\"\" class=\"profile_pic\"></label>

                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray name\" type=\"text\"  placeholder=\"Име на отбора\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
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
            regex:\"[А-Я][а-я]+\" ,
            alias: \"string\",
            clearIncomplete: true
        });


        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var phone = \$('.phone').val();

            var namesChecker = false;
            var  phoneCheker = false;


            if(name.length > 5  ){
                namesChecker = true;
            }else {
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Името трябва да е по-дълgо от 5 символа\",
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
            if (phoneCheker == true && namesChecker == true){
                \$.ajax({
                    method: \"POST\",
                    data: {\"name\": name, \"phone\": phone},
                    url: \"\",
                })
                    .done(function( msg ) {
                        if(msg == 1){
                            \$('#position').val(0);
                            \$('.name').val('');
                            \$('.fName').val('');
                            \$('.phone').val('');
                        }
                        console.log(msg);
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
{% endblock %}", "superAdmin/divisions.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\superAdmin\\divisions.html.twig");
    }
}
