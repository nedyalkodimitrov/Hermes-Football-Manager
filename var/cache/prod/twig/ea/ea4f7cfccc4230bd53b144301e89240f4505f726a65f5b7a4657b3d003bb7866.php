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
class __TwigTemplate_dc33390175445b996ae921ca69c733ecad5c3143fe8fb72ecfeeed919db245e3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("coaches/playerBaseTemplate.html.twig", "player/settings/training.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, ($context["monday"] ?? null), "U"), twig_date_format_filter($this->env, ($context["sunday"] ?? null), "U"), 86400));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 20
            echo "                       ";
            if (((($context["j"] ?? null) < twig_length_filter($this->env, ($context["schedule"] ?? null))) && (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["schedule"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["j"] ?? null)] ?? null) : null), "date", [], "any", false, false, false, 20) == $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_date_format_filter($this->env, $context["x"], "d/m/Y"))))) {
                // line 21
                echo "                           <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["schedule"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["j"] ?? null)] ?? null) : null), "Description", [], "any", false, false, false, 21), "html", null, true);
                echo " </br> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["schedule"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["j"] ?? null)] ?? null) : null), "startTime", [], "any", false, false, false, 21), "html", null, true);
                echo "  </td>
                           ";
                // line 22
                $context["j"] = (($context["j"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, ($context["bigCoache"] ?? null), "Image", [], "any", false, false, false, 32))), "html", null, true);
        echo "\" alt=\"\" class=\"coache_image \"></label><br>
               <h1 >";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bigCoache"] ?? null), "User", [], "any", false, false, false, 33), "Name", [], "any", false, false, false, 33), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bigCoache"] ?? null), "User", [], "any", false, false, false, 33), "FName", [], "any", false, false, false, 33), "html", null, true);
        echo " </h1><br>
               ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schedule"] ?? null));
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
        return array (  133 => 39,  127 => 38,  123 => 36,  120 => 35,  116 => 34,  110 => 33,  106 => 32,  99 => 27,  93 => 26,  89 => 24,  86 => 23,  84 => 22,  77 => 21,  74 => 20,  69 => 19,  67 => 18,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "player/settings/training.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\settings\\training.html.twig");
    }
}
