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
class __TwigTemplate_6e34241b1ec3da29f10884a5b46f94ba80c3b48454128916e7f18c214ecd26fb extends \Twig\Template
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
        $this->parent = $this->loadTemplate("coaches/base.html.twig", "coaches/trainings/trainingCalendar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
                            <button type=\"button\" class=\"btn btn-danger btn-block\" id=\"clear\" onclick=\"clear_input()\">Clear Form</button>
                        </div>
                        <div class=\"col form-group\">
                            <button type=\"button\" class=\"btn btn-danger  btn-block\" id=\"submit\" onclick=\"make_appointment()\" disabled=\"disabled\">Make Appointment</button>
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
        $context['_seq'] = twig_ensure_traversable(($context["schedules"] ?? null));
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
        return array (  227 => 126,  213 => 114,  203 => 110,  199 => 109,  195 => 108,  191 => 107,  188 => 106,  184 => 105,  99 => 22,  95 => 21,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  56 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coaches/trainings/trainingCalendar.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\trainings\\trainingCalendar.html.twig");
    }
}
