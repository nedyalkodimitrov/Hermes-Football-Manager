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

/* player/settings/training.html.twig */
class __TwigTemplate_ecf1505a8a8d9cc8bb6a9c66760719bef0998ab529ab7aaf2375f5e0e881f73e extends \Twig\Template
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
        return "coaches/playerBaseTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/settings/training.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/settings/training.html.twig"));

        $this->parent = $this->loadTemplate("coaches/playerBaseTemplate.html.twig", "player/settings/training.html.twig", 1);
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
        echo "   <div class=\"container row mt-3 col-12 justify-content-between max-resolution\">
       <table class=\"table col-8 trainig-program-list\">
           <thead>
           <tr>
               <th scope=\"col\">Пон</th>
               <th scope=\"col\">Втор</th>
               <th scope=\"col\">Сря</th>
               <th scope=\"col\">Чет</th>
               <th scope=\"col\">Пет</th>
               <th scope=\"col\">Съб</th>
               <th scope=\"col\">Нед</th>
           </tr>
           </thead>
           <tbody>
               <tr class=\"taining-program-tr\">
                   ";
        // line 18
        $context["j"] = 0;
        // line 19
        echo "                   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, (isset($context["monday"]) || array_key_exists("monday", $context) ? $context["monday"] : (function () { throw new RuntimeError('Variable "monday" does not exist.', 19, $this->source); })()), "U"), twig_date_format_filter($this->env, (isset($context["sunday"]) || array_key_exists("sunday", $context) ? $context["sunday"] : (function () { throw new RuntimeError('Variable "sunday" does not exist.', 19, $this->source); })()), "U"), 86400));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 20
            echo "                       ";
            if ((((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 20, $this->source); })()) < twig_length_filter($this->env, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 20, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 20, $this->source); })()), (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 20, $this->source); })()), [], "array", false, false, false, 20), "date", [], "any", false, false, false, 20) == $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_date_format_filter($this->env, $context["x"], "d/m/Y"))))) {
                // line 21
                echo "                           <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 21, $this->source); })()), (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 21, $this->source); })()), [], "array", false, false, false, 21), "Description", [], "any", false, false, false, 21), "html", null, true);
                echo " </br> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 21, $this->source); })()), (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 21, $this->source); })()), [], "array", false, false, false, 21), "startTime", [], "any", false, false, false, 21), "html", null, true);
                echo "  </td>
                           ";
                // line 22
                $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 22, $this->source); })()) + 1);
                // line 23
                echo "                       ";
            } else {
                // line 24
                echo "                           <td>Почивка</td>
                       ";
            }
            // line 26
            echo "                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "               </tr>
           </tbody>
       </table>
       <div class=\"container row col-4 trainig-program  \">
           <div class=\"col-12 justify-content-center text-center\">
               <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["bigCoache"]) || array_key_exists("bigCoache", $context) ? $context["bigCoache"] : (function () { throw new RuntimeError('Variable "bigCoache" does not exist.', 32, $this->source); })()), "Image", [], "any", false, false, false, 32))), "html", null, true);
        echo "\" alt=\"\" class=\"coache_image \"></label><br>
               <h1 >";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bigCoache"]) || array_key_exists("bigCoache", $context) ? $context["bigCoache"] : (function () { throw new RuntimeError('Variable "bigCoache" does not exist.', 33, $this->source); })()), "UserId", [], "any", false, false, false, 33), "Name", [], "any", false, false, false, 33), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bigCoache"]) || array_key_exists("bigCoache", $context) ? $context["bigCoache"] : (function () { throw new RuntimeError('Variable "bigCoache" does not exist.', 33, $this->source); })()), "UserId", [], "any", false, false, false, 33), "FName", [], "any", false, false, false, 33), "html", null, true);
        echo " </h1><br>
               ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["schedules"]) {
            // line 35
            echo "                   ";
            if ((twig_get_attribute($this->env, $this->source, $context["schedules"], "date", [], "any", false, false, false, 35) == $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_date_format_filter($this->env, "now")))) {
                // line 36
                echo "                       <p>schedules.date</p>
                   ";
            }
            // line 38
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedules'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "               <button class=\"btn bg-mycolor treatment\">Пропускане на тренировка </button>
           </div>
       </div>
    </div>
    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"treatment_info\" >
            <div class=\"col-8 row justify-content-center\">
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"status\" >
                        <option value=\"\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                        <option value=\"family\" class=\"bg-gray\">Семеини причини</option>
                        <option value=\"ill\" class=\"bg-gray\">Болен</option>
                        <option value=\"injured\" class=\"bg-gray\">Контузен</option>
                    </select>
                </div>
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray medicaments\" type=\"text\"  placeholder=\"Медиакменти\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2  bg-gray startDate-input\" type=\"text\" placeholder=\"Няма да съм на тренировки от...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray endDate-input\" inputmask type=\"text\" placeholder=\"Няма да съм на тренировки до...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <button class=\"btn bg-mycolor\" id=\"send-info\">Потвърди</button>
            </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js\"></script>
    <script>
        \$('.treatment').on('click', function () {
            \$('.player-status-container').css('visibility', 'visible');
            \$('#treatment_info').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('#treatment_info').css('visibility', 'hidden');
            });
        });


        \$(\".startDate-input\").inputmask(\"dd/mm/YYYY\", {
            placeholder: \"dd/mm/YYYY\",
            alias: \"datetime\",
            clearIncomplete: true
        });
        \$(\".endDate-input\").inputmask(\"dd/mm/yyyy\", {
            placeholder: \"dd/mm/YYYY\",
            alias: \"datetime\",
            clearIncomplete: true
        });

        \$('.select').on('change', function () {
            if (\$('.select').val == 'family'){
                \$('.medicaments').css('')
            }
        });

        \$('#send-info').on('click', function () {
           var status = \$('#status').val();
           var medicaments = \$('.medicaments').val();
           var startTreatment = \$('.startDate-input').val();
           var endTreatment = \$('.endDate-input').val();

            \$('#status').val('');
            \$('.medicaments').val('');
            \$('.startDate-input').val('');
            \$('.endDate-input').val('');

            \$.ajax({
                method: \"POST\",
                data: {\"appbundle_playersinjured[status]\": status, \"appbundle_playersinjured[medicaments]\": medicaments, \"appbundle_playersinjured[startTreatment]\": startTreatment, \"appbundle_playersinjured[endTreatment]\": endTreatment},
                url: \"hi\",
            })
                .done(function( msg ) {
                    console.log(msg);
                    console.log(status);
                });
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "player/settings/training.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 39,  145 => 38,  141 => 36,  138 => 35,  134 => 34,  128 => 33,  124 => 32,  117 => 27,  111 => 26,  107 => 24,  104 => 23,  102 => 22,  95 => 21,  92 => 20,  87 => 19,  85 => 18,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'coaches/playerBaseTemplate.html.twig' %}
{% block body%}
   <div class=\"container row mt-3 col-12 justify-content-between max-resolution\">
       <table class=\"table col-8 trainig-program-list\">
           <thead>
           <tr>
               <th scope=\"col\">Пон</th>
               <th scope=\"col\">Втор</th>
               <th scope=\"col\">Сря</th>
               <th scope=\"col\">Чет</th>
               <th scope=\"col\">Пет</th>
               <th scope=\"col\">Съб</th>
               <th scope=\"col\">Нед</th>
           </tr>
           </thead>
           <tbody>
               <tr class=\"taining-program-tr\">
                   {% set j = 0 %}
                   {% for x in range(monday|date('U'), sunday|date('U'), 86400 ) %}
                       {% if  j < schedule|length and schedule[j].date ==  x|date('d/m/Y')|trans   %}
                           <td>{{ schedule[j].Description }} </br> {{ schedule[j].startTime }}  </td>
                           {% set j = j + 1 %}
                       {% else %}
                           <td>Почивка</td>
                       {% endif %}
                   {% endfor %}
               </tr>
           </tbody>
       </table>
       <div class=\"container row col-4 trainig-program  \">
           <div class=\"col-12 justify-content-center text-center\">
               <img src=\"{{asset(\"images/\" ~ bigCoache.Image)}}\" alt=\"\" class=\"coache_image \"></label><br>
               <h1 >{{ bigCoache.UserId.Name }} {{ bigCoache.UserId.FName}} </h1><br>
               {% for schedules in schedule %}
                   {% if schedules.date == \"now\"|date()|trans %}
                       <p>schedules.date</p>
                   {% endif %}
               {% endfor %}
               <button class=\"btn bg-mycolor treatment\">Пропускане на тренировка </button>
           </div>
       </div>
    </div>
    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"treatment_info\" >
            <div class=\"col-8 row justify-content-center\">
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"status\" >
                        <option value=\"\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                        <option value=\"family\" class=\"bg-gray\">Семеини причини</option>
                        <option value=\"ill\" class=\"bg-gray\">Болен</option>
                        <option value=\"injured\" class=\"bg-gray\">Контузен</option>
                    </select>
                </div>
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray medicaments\" type=\"text\"  placeholder=\"Медиакменти\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2  bg-gray startDate-input\" type=\"text\" placeholder=\"Няма да съм на тренировки от...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray endDate-input\" inputmask type=\"text\" placeholder=\"Няма да съм на тренировки до...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <button class=\"btn bg-mycolor\" id=\"send-info\">Потвърди</button>
            </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js\"></script>
    <script>
        \$('.treatment').on('click', function () {
            \$('.player-status-container').css('visibility', 'visible');
            \$('#treatment_info').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('#treatment_info').css('visibility', 'hidden');
            });
        });


        \$(\".startDate-input\").inputmask(\"dd/mm/YYYY\", {
            placeholder: \"dd/mm/YYYY\",
            alias: \"datetime\",
            clearIncomplete: true
        });
        \$(\".endDate-input\").inputmask(\"dd/mm/yyyy\", {
            placeholder: \"dd/mm/YYYY\",
            alias: \"datetime\",
            clearIncomplete: true
        });

        \$('.select').on('change', function () {
            if (\$('.select').val == 'family'){
                \$('.medicaments').css('')
            }
        });

        \$('#send-info').on('click', function () {
           var status = \$('#status').val();
           var medicaments = \$('.medicaments').val();
           var startTreatment = \$('.startDate-input').val();
           var endTreatment = \$('.endDate-input').val();

            \$('#status').val('');
            \$('.medicaments').val('');
            \$('.startDate-input').val('');
            \$('.endDate-input').val('');

            \$.ajax({
                method: \"POST\",
                data: {\"appbundle_playersinjured[status]\": status, \"appbundle_playersinjured[medicaments]\": medicaments, \"appbundle_playersinjured[startTreatment]\": startTreatment, \"appbundle_playersinjured[endTreatment]\": endTreatment},
                url: \"hi\",
            })
                .done(function( msg ) {
                    console.log(msg);
                    console.log(status);
                });
        });

    </script>
{% endblock %}", "player/settings/training.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\settings\\training.html.twig");
    }
}
