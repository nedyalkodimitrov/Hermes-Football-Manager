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
class __TwigTemplate_40c6cfa3f90897e53f4a49d576faa4653ad5189d25da2ed36e41d6ed15ca9495 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("player/playerBaseTemplate.html.twig", "player/training.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/hiddenFormStyle.css"), "html", null, true);
        echo "\">
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, ($context["monday"] ?? null), "U"), twig_date_format_filter($this->env, ($context["sunday"] ?? null), "U"), 86400));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 29
            echo "                        <td class=\" text-center\">
                            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["schedule"] ?? null)) - 1), 1));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 31
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["schedule"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["j"]] ?? null) : null), "date", [], "any", false, false, false, 31) == $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_date_format_filter($this->env, $context["x"], "d/m/Y")))) {
                    // line 32
                    echo "                                    ";
                    $context["flag"] = false;
                    // line 33
                    echo "                                  ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["schedule"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["j"]] ?? null) : null), "StartTime", [], "any", false, false, false, 33), "html", null, true);
                    echo "     ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["schedule"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["j"]] ?? null) : null), "Description", [], "any", false, false, false, 33), "html", null, true);
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
            if (($context["flag"] ?? null)) {
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
        if ((($context["bigCoach"] ?? null) != null)) {
            // line 52
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, ($context["bigCoach"] ?? null), "Image", [], "any", false, false, false, 52))), "html", null, true);
            echo "\" alt=\"\" title=\"them's hoverin' words\" class=\"coache_image \"></label><br>
                    <h3 class=\"mt-3\" >";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bigCoach"] ?? null), "User", [], "any", false, false, false, 53), "Name", [], "any", false, false, false, 53), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bigCoach"] ?? null), "User", [], "any", false, false, false, 53), "FName", [], "any", false, false, false, 53), "html", null, true);
            echo " </h3><br>
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["schedule"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["status"] ?? null));
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
        return array (  272 => 123,  265 => 118,  256 => 115,  250 => 114,  246 => 113,  242 => 112,  237 => 111,  233 => 110,  185 => 64,  180 => 61,  176 => 59,  170 => 58,  166 => 56,  163 => 55,  159 => 54,  153 => 53,  148 => 52,  146 => 51,  139 => 46,  129 => 41,  126 => 40,  122 => 38,  119 => 37,  113 => 36,  104 => 33,  101 => 32,  98 => 31,  94 => 30,  91 => 29,  86 => 28,  84 => 27,  66 => 11,  62 => 10,  56 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "player/training.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\training.html.twig");
    }
}
