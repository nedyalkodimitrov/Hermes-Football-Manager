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

/* coaches/trainings/trainingCalendar.html.twig */
class __TwigTemplate_387a8dd68535b9ef9d0853f376aeee3fdc14bac6acf32b93580ece9bcbd24353 extends \Twig\Template
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
        return "coaches/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/trainings/trainingCalendar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/trainings/trainingCalendar.html.twig"));

        $this->parent = $this->loadTemplate("coaches/base.html.twig", "coaches/trainings/trainingCalendar.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/trainingTemplate.css"), "html", null, true);
        echo "\">
    <meta charset=\"utf-8\">
    <title>FM-Football Manager</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/calendar.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/trainingCalendar.php"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/mdb.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/settingsMenu.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"calendar col-12 mt-4\">
                <div>
                    <div class=\"card-header\">
                        <ul>
                            <li id=\"month\" class=\"text-white text-uppercase text-center\">
                            </li>
                            <li id=\"year\" class=\"text-white text-uppercase text-center\">
                            </li>
                        </ul>
                    </div>
                    <table class=\"table calendar table-bordered table-responsive-sm \"  id=\"calendar\">
                        <thead>
                        <tr class=\"weekdays bg-dark\">
                            <th scope=\"col\" class=\"text-white text-center\">Пон</th>
                            <th scope=\"col\" class=\"text-white text-center\">Вто</th>
                            <th scope=\"col\" class=\"text-white text-center\">Сря</th>
                            <th scope=\"col\" class=\"text-white text-center\">Чет</th>
                            <th scope=\"col\" class=\"text-white text-center\">Пет</th>
                            <th scope=\"col\" class=\"text-white text-center\">Съб</th>
                            <th scope=\"col\" class=\"text-white text-center\">Нед</th>
                        </tr>
                        </thead>
                        <tbody class=\"days bg-light\" id=\"days\"></tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>

        <br><hr>
        <div class=\"row\">
            <div class=\"col-md offset-md-1\">
                <form id=\"form_create_appointment\">
                    <div class=\"form-row\">
                        <div class=\"col form-group\">
                            <label class=\"required\">Дата</label>
                            <input class=\"form-control date-input\" type=\"text\" id=\"date\" data-trigger=\"hover\" data-toggle=\"popover\" name=\"_date\" title=\"Дата\" data-content=\"Можете да изберете всяка дата от днес, като кликнете върху номера в календара\" required>
                        </div>
                        <div class=\"col form-group\">
                            <label>Описание</label>
                            <input class=\"form-control\" type=\"text\" id=\"description\">
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col form-group\">
                            <label class=\"required\">Начален час</label>
                            <input class=\"form-control time-input\" type=\"text\" id=\"start_time\" required>
                        </div>
                        <div class=\"col form-group\">
                            <label class=\"required\">Край на събитието</label>
                            <input class=\"form-control time-input\" type=\"text\" id=\"end_time\" required>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col form-group\">
                            <button type=\"button\" class=\"btn btn-danger btn-block\" id=\"clear\" onclick=\"clear_input()\">Изчисване на формата</button>
                        </div>
                        <div class=\"col form-group\">
                            <button type=\"button\" class=\"btn btn-danger  btn-block\" id=\"submit\" onclick=\"make_appointment()\" disabled=\"disabled\">Създаване на тренировка</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"col offset-md-1\">
                <div class=\"row\">
                    <div class=\"col\">
                        <h3>Събития</h3>
                    </div>

                </div>
                <table class=\"table table-bordered table-hover table-striped table-sm\" id=\"delete-injured-table\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\" class=\"text-center align-middle\">Дата</th>
                        <th scope=\"col\" class=\"text-center align-middle\">Описание</th>
                        <th scope=\"col\" class=\"text-center align-middle\">Начален час</th>
                        <th scope=\"col\" class=\"text-center align-middle\">Край на събитето</th>
                        <th scope=\"col\" class=\"text-center align-middle\">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 106
            echo "                        <tr>
                            <th scope=\"col\" class=\"text-center align-middle\">";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "Date", [], "any", false, false, false, 107), "html", null, true);
            echo "</th>
                            <th scope=\"col\" class=\"text-center align-middle\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "Description", [], "any", false, false, false, 108), "html", null, true);
            echo "</th>
                            <th scope=\"col\" class=\"text-center align-middle\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 109), "html", null, true);
            echo "</th>
                            <th scope=\"col\" class=\"text-center align-middle\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 110), "html", null, true);
            echo "</th>
                            <th scope=\"col\" class=\"text-center align-middle\"><i class=\"fas fa-times\"></i></th>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coaches/trainings/trainingCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 126,  243 => 114,  233 => 110,  229 => 109,  225 => 108,  221 => 107,  218 => 106,  214 => 105,  129 => 22,  119 => 21,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  90 => 14,  86 => 13,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'coaches/base.html.twig' %}
{% block style %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/trainingTemplate.css\") }}\">
    <meta charset=\"utf-8\">
    <title>FM-Football Manager</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/calendar.css')}}\">
    <script type=\"text/javascript\" src=\"{{  asset(\"mdb/js/jquery-3.3.1.min.js\")}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"js/trainingCalendar.php\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/mdb.min.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/bootstrap.min.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"js/settingsMenu.js\") }}\"></script>

{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"calendar col-12 mt-4\">
                <div>
                    <div class=\"card-header\">
                        <ul>
                            <li id=\"month\" class=\"text-white text-uppercase text-center\">
                            </li>
                            <li id=\"year\" class=\"text-white text-uppercase text-center\">
                            </li>
                        </ul>
                    </div>
                    <table class=\"table calendar table-bordered table-responsive-sm \"  id=\"calendar\">
                        <thead>
                        <tr class=\"weekdays bg-dark\">
                            <th scope=\"col\" class=\"text-white text-center\">Пон</th>
                            <th scope=\"col\" class=\"text-white text-center\">Вто</th>
                            <th scope=\"col\" class=\"text-white text-center\">Сря</th>
                            <th scope=\"col\" class=\"text-white text-center\">Чет</th>
                            <th scope=\"col\" class=\"text-white text-center\">Пет</th>
                            <th scope=\"col\" class=\"text-white text-center\">Съб</th>
                            <th scope=\"col\" class=\"text-white text-center\">Нед</th>
                        </tr>
                        </thead>
                        <tbody class=\"days bg-light\" id=\"days\"></tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>

        <br><hr>
        <div class=\"row\">
            <div class=\"col-md offset-md-1\">
                <form id=\"form_create_appointment\">
                    <div class=\"form-row\">
                        <div class=\"col form-group\">
                            <label class=\"required\">Дата</label>
                            <input class=\"form-control date-input\" type=\"text\" id=\"date\" data-trigger=\"hover\" data-toggle=\"popover\" name=\"_date\" title=\"Дата\" data-content=\"Можете да изберете всяка дата от днес, като кликнете върху номера в календара\" required>
                        </div>
                        <div class=\"col form-group\">
                            <label>Описание</label>
                            <input class=\"form-control\" type=\"text\" id=\"description\">
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col form-group\">
                            <label class=\"required\">Начален час</label>
                            <input class=\"form-control time-input\" type=\"text\" id=\"start_time\" required>
                        </div>
                        <div class=\"col form-group\">
                            <label class=\"required\">Край на събитието</label>
                            <input class=\"form-control time-input\" type=\"text\" id=\"end_time\" required>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col form-group\">
                            <button type=\"button\" class=\"btn btn-danger btn-block\" id=\"clear\" onclick=\"clear_input()\">Изчисване на формата</button>
                        </div>
                        <div class=\"col form-group\">
                            <button type=\"button\" class=\"btn btn-danger  btn-block\" id=\"submit\" onclick=\"make_appointment()\" disabled=\"disabled\">Създаване на тренировка</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"col offset-md-1\">
                <div class=\"row\">
                    <div class=\"col\">
                        <h3>Събития</h3>
                    </div>

                </div>
                <table class=\"table table-bordered table-hover table-striped table-sm\" id=\"delete-injured-table\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\" class=\"text-center align-middle\">Дата</th>
                        <th scope=\"col\" class=\"text-center align-middle\">Описание</th>
                        <th scope=\"col\" class=\"text-center align-middle\">Начален час</th>
                        <th scope=\"col\" class=\"text-center align-middle\">Край на събитето</th>
                        <th scope=\"col\" class=\"text-center align-middle\">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for schedule in schedules %}
                        <tr>
                            <th scope=\"col\" class=\"text-center align-middle\">{{ schedule.Date }}</th>
                            <th scope=\"col\" class=\"text-center align-middle\">{{ schedule.Description }}</th>
                            <th scope=\"col\" class=\"text-center align-middle\">{{ schedule.startTime}}</th>
                            <th scope=\"col\" class=\"text-center align-middle\">{{ schedule.endTime }}</th>
                            <th scope=\"col\" class=\"text-center align-middle\"><i class=\"fas fa-times\"></i></th>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>
    <script src=\"{{ asset(\"js/calendar.js\")}}\"></script>
{% endblock %}

", "coaches/trainings/trainingCalendar.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\trainings\\trainingCalendar.html.twig");
    }
}
