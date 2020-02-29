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

/* player/training.html.twig */
class __TwigTemplate_2988d6d81aea57e169250390e2946656cf17426e64418d2da1c925a34f4527d7 extends \Twig\Template
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
        return "player/playerBaseTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/training.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/training.html.twig"));

        $this->parent = $this->loadTemplate("player/playerBaseTemplate.html.twig", "player/training.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("style", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"  ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/hiddenFormStyle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container row mt-3 col-12 justify-content-between max-resolution mb-5\">
        <table class=\"table col-lg-12  col-sm-12 \">
            <thead class=\"main-color\">
                <tr class=\" color-white\">
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Понеделник</th>
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Вторник</th>
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Сряда</th>
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Четвъртък</th>
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Петък</th>
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Събота</th>
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Неделя</th>
                </tr>
            </thead>
            <tbody>
                <tr class=\"\">
                ";
        // line 27
        $context["flag"] = true;
        // line 28
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, (isset($context["monday"]) || array_key_exists("monday", $context) ? $context["monday"] : (function () { throw new RuntimeError('Variable "monday" does not exist.', 28, $this->source); })()), "U"), twig_date_format_filter($this->env, (isset($context["sunday"]) || array_key_exists("sunday", $context) ? $context["sunday"] : (function () { throw new RuntimeError('Variable "sunday" does not exist.', 28, $this->source); })()), "U"), 86400));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 29
            echo "                        <td class=\" text-center\">
                            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 30, $this->source); })())) - 1), 1));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 31
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 31, $this->source); })()), $context["j"], [], "array", false, false, false, 31), "date", [], "any", false, false, false, 31) == $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_date_format_filter($this->env, $context["x"], "d/m/Y")))) {
                    // line 32
                    echo "                                    ";
                    $context["flag"] = false;
                    // line 33
                    echo "                                  ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 33, $this->source); })()), $context["j"], [], "array", false, false, false, 33), "StartTime", [], "any", false, false, false, 33), "html", null, true);
                    echo "     ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 33, $this->source); })()), $context["j"], [], "array", false, false, false, 33), "Description", [], "any", false, false, false, 33), "html", null, true);
                    echo "
                                    <br>
                                ";
                }
                // line 36
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                            ";
            if ((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 37, $this->source); })())) {
                // line 38
                echo "                                <h6>Почивка</h6>
                            ";
            }
            // line 40
            echo "                            ";
            $context["flag"] = true;
            // line 41
            echo "
                        </td>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tr>
            </tbody>
        </table>
        <div class=\"container row col-lg-12 col-sm-12 justify-content-sm-center mt-sm-3  text-center m-0 \">
            <div class=\"col-12 justify-content-center text-center\">
                ";
        // line 51
        if (((isset($context["bigCoach"]) || array_key_exists("bigCoach", $context) ? $context["bigCoach"] : (function () { throw new RuntimeError('Variable "bigCoach" does not exist.', 51, $this->source); })()) != null)) {
            // line 52
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["bigCoach"]) || array_key_exists("bigCoach", $context) ? $context["bigCoach"] : (function () { throw new RuntimeError('Variable "bigCoach" does not exist.', 52, $this->source); })()), "Image", [], "any", false, false, false, 52))), "html", null, true);
            echo "\" alt=\"\" title=\"them's hoverin' words\" class=\"coache_image \"></label><br>
                    <h3 class=\"mt-3\" >";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bigCoach"]) || array_key_exists("bigCoach", $context) ? $context["bigCoach"] : (function () { throw new RuntimeError('Variable "bigCoach" does not exist.', 53, $this->source); })()), "User", [], "any", false, false, false, 53), "Name", [], "any", false, false, false, 53), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bigCoach"]) || array_key_exists("bigCoach", $context) ? $context["bigCoach"] : (function () { throw new RuntimeError('Variable "bigCoach" does not exist.', 53, $this->source); })()), "User", [], "any", false, false, false, 53), "FName", [], "any", false, false, false, 53), "html", null, true);
            echo " </h3><br>
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["schedules"]) {
                // line 55
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["schedules"], "date", [], "any", false, false, false, 55) == $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_date_format_filter($this->env, "now")))) {
                    // line 56
                    echo "                            <p>schedules.date</p>
                        ";
                }
                // line 58
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                        <button class=\"btn main-color treatment\">Пропускане на тренировка </button>
                ";
        } else {
            // line 61
            echo "                    <h2>Нямате главен треньор и съобщението може да не бъде видяно</h2>
                        <button class=\"btn main-color treatment\">Пропускане на тренировка </button>
                ";
        }
        // line 64
        echo "            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"player-status-container row \">
            <div class=\"col-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"treatment_info\" >
                <h3 class=\"text-center\">Пропускане на тренировка </h3>
                <div class=\"col-lg-8 col-sm-11  row justify-content-center\">
                    <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                        <select class=\"form-control select bg-gray col-sm-12 \" id=\"status\" >
                            <option value=\"\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                            <option value=\"Семейни причини\" class=\"bg-gray\">Семеини причини</option>
                            <option value=\"Болен\" class=\"bg-gray\">Болен</option>
                            <option value=\"Контузен\" class=\"bg-gray\">Контузен</option>
                        </select>
                    </div>
                    <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                        <input class=\"effect-2 bg-gray medicaments\" type=\"text\"  placeholder=\"Медиакменти\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                        <span class=\"focus-border\"></span>
                    </div>
                    <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                        <input class=\"effect-2 bg-gray startDate-input\"  type=\"text\" placeholder=\"Няма да съм на тренировки от...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                        <span class=\"focus-border\"></span>
                    </div>
                    <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                        <input class=\"effect-2 bg-gray endDate-input\"  type=\"text\" placeholder=\"Няма да съм на тренировки до...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                        <span class=\"focus-border\"></span>
                    </div>
                    <button class=\"btn bg-mycolor send-player-missing-btn\" id=\"send-info\">Потвърди</button>
                </div>
                <span><i class=\"fas fa-times-circle\" ></i></span>
            </div>
        </div>
    </div>
    <div class=\"col-12 justify-content-center row\">
       <table class=\"table col-11  \">
           <thead class=\"bg-mycolor\">
           <tr class=\"color-white\">
               <th scope=\"col\" class=\"text-center align-middle\">Причина</th>
               <th scope=\"col\"  class=\"text-center align-middle\">Медикаменти</th>
               <th scope=\"col\"  class=\"text-center align-middle\">Период</th>
               <th scope=\"col\"  class=\"text-center align-middle\">Деиствия</th>
           </tr>
           </thead>
           <tbody>
           ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 111
            echo "               <tr class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "Id", [], "any", false, false, false, 111), "html", null, true);
            echo "\">
                   <td scope=\"col\" class=\"text-center align-middle\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "Status", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                   <td scope=\"col\" class=\"text-center align-middle\">";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "Medicaments", [], "any", false, false, false, 113), "html", null, true);
            echo "</td>
                   <td scope=\"col\" class=\"text-center align-middle\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "startTreatment", [], "any", false, false, false, 114), "html", null, true);
            echo " ~ ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "endTreatment", [], "any", false, false, false, 114), "html", null, true);
            echo " </td>
                   <td scope=\"col\" class=\"text-center align-middle\"><span id=\"\"><i class=\"fa fa-times delete-injured\" id=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "Id", [], "any", false, false, false, 115), "html", null, true);
            echo "\"  aria-hidden=\"true\"></i></span></td>
               </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "           </tbody>
       </table>
    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/playerTraining.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "player/training.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 123,  295 => 118,  286 => 115,  280 => 114,  276 => 113,  272 => 112,  267 => 111,  263 => 110,  215 => 64,  210 => 61,  206 => 59,  200 => 58,  196 => 56,  193 => 55,  189 => 54,  183 => 53,  178 => 52,  176 => 51,  169 => 46,  159 => 41,  156 => 40,  152 => 38,  149 => 37,  143 => 36,  134 => 33,  131 => 32,  128 => 31,  124 => 30,  121 => 29,  116 => 28,  114 => 27,  96 => 11,  86 => 10,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'player/playerBaseTemplate.html.twig' %}
{% block style %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/particles/hiddenFormStyle.css\") }}\">
{% endblock %}
{# {% block nav %}#}
{#     <a class=\"nav-item nav-link   ml-2\" href=\"#\">Начална страница </a>#}
{#     <a class=\"nav-item nav-link current-item ml-2\" href=\"{{ path(\"playerTraining\") }}\">Тренировки</a>#}
{# {% endblock %}#}
{% block body%}

    <div class=\"container row mt-3 col-12 justify-content-between max-resolution mb-5\">
        <table class=\"table col-lg-12  col-sm-12 \">
            <thead class=\"main-color\">
                <tr class=\" color-white\">
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Понеделник</th>
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Вторник</th>
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Сряда</th>
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Четвъртък</th>
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Петък</th>
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Събота</th>
                    <th scope=\"col  ml-sm-5\" class=\" text-center\">Неделя</th>
                </tr>
            </thead>
            <tbody>
                <tr class=\"\">
                {%set flag = true %}
                    {% for x in range(monday|date('U'), sunday|date('U'), 86400 ) %}
                        <td class=\" text-center\">
                            {% for j in range(0, schedule|length - 1, 1) %}
                                {% if schedule[j].date ==  x|date('d/m/Y')|trans   %}
                                    {% set flag = false %}
                                  {{ schedule[j].StartTime }}     {{ schedule[j].Description }}
                                    <br>
                                {% endif %}
                            {% endfor %}
                            {% if flag%}
                                <h6>Почивка</h6>
                            {% endif %}
                            {% set flag = true %}

                        </td>


                    {% endfor %}
                </tr>
            </tbody>
        </table>
        <div class=\"container row col-lg-12 col-sm-12 justify-content-sm-center mt-sm-3  text-center m-0 \">
            <div class=\"col-12 justify-content-center text-center\">
                {% if bigCoach != null %}
                    <img src=\"{{asset(\"images/\" ~ bigCoach.Image)}}\" alt=\"\" title=\"them's hoverin' words\" class=\"coache_image \"></label><br>
                    <h3 class=\"mt-3\" >{{ bigCoach.User.Name }} {{ bigCoach.User.FName}} </h3><br>
                    {% for schedules in schedule %}
                        {% if schedules.date == \"now\"|date()|trans %}
                            <p>schedules.date</p>
                        {% endif %}
                    {% endfor %}
                        <button class=\"btn main-color treatment\">Пропускане на тренировка </button>
                {% else %}
                    <h2>Нямате главен треньор и съобщението може да не бъде видяно</h2>
                        <button class=\"btn main-color treatment\">Пропускане на тренировка </button>
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"player-status-container row \">
            <div class=\"col-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"treatment_info\" >
                <h3 class=\"text-center\">Пропускане на тренировка </h3>
                <div class=\"col-lg-8 col-sm-11  row justify-content-center\">
                    <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                        <select class=\"form-control select bg-gray col-sm-12 \" id=\"status\" >
                            <option value=\"\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                            <option value=\"Семейни причини\" class=\"bg-gray\">Семеини причини</option>
                            <option value=\"Болен\" class=\"bg-gray\">Болен</option>
                            <option value=\"Контузен\" class=\"bg-gray\">Контузен</option>
                        </select>
                    </div>
                    <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                        <input class=\"effect-2 bg-gray medicaments\" type=\"text\"  placeholder=\"Медиакменти\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                        <span class=\"focus-border\"></span>
                    </div>
                    <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                        <input class=\"effect-2 bg-gray startDate-input\"  type=\"text\" placeholder=\"Няма да съм на тренировки от...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                        <span class=\"focus-border\"></span>
                    </div>
                    <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                        <input class=\"effect-2 bg-gray endDate-input\"  type=\"text\" placeholder=\"Няма да съм на тренировки до...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                        <span class=\"focus-border\"></span>
                    </div>
                    <button class=\"btn bg-mycolor send-player-missing-btn\" id=\"send-info\">Потвърди</button>
                </div>
                <span><i class=\"fas fa-times-circle\" ></i></span>
            </div>
        </div>
    </div>
    <div class=\"col-12 justify-content-center row\">
       <table class=\"table col-11  \">
           <thead class=\"bg-mycolor\">
           <tr class=\"color-white\">
               <th scope=\"col\" class=\"text-center align-middle\">Причина</th>
               <th scope=\"col\"  class=\"text-center align-middle\">Медикаменти</th>
               <th scope=\"col\"  class=\"text-center align-middle\">Период</th>
               <th scope=\"col\"  class=\"text-center align-middle\">Деиствия</th>
           </tr>
           </thead>
           <tbody>
           {% for stat in status %}
               <tr class=\"{{ stat.Id }}\">
                   <td scope=\"col\" class=\"text-center align-middle\">{{ stat.Status }}</td>
                   <td scope=\"col\" class=\"text-center align-middle\">{{  stat.Medicaments}}</td>
                   <td scope=\"col\" class=\"text-center align-middle\">{{ stat.startTreatment }} ~ {{ stat.endTreatment }} </td>
                   <td scope=\"col\" class=\"text-center align-middle\"><span id=\"\"><i class=\"fa fa-times delete-injured\" id=\"{{ stat.Id }}\"  aria-hidden=\"true\"></i></span></td>
               </tr>
           {% endfor %}
           </tbody>
       </table>
    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>
    <script src=\"{{ asset('js/playerTraining.js') }}\"></script>
{% endblock %}", "player/training.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\training.html.twig");
    }
}
