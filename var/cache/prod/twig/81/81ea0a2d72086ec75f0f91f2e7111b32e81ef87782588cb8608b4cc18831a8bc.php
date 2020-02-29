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

/* coaches/index.html.twig */
class __TwigTemplate_03bc86f3bce3b6851da52b73438ddb55c88f060bc26af9a9a87f658cac9d08c0 extends \Twig\Template
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
        // line 2
        return "coaches/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("coaches/base.html.twig", "coaches/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div id=\"container\">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9  main-charts-container row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-4  mb-5 information-charts-text\">Основни характеристики</h4>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container \">
                          <p>";
        // line 12
        echo twig_escape_filter($this->env, ($context["playersCount"] ?? null), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Играча в отбора</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12 col-md-12 mt-2 text-center chart-container\">
                    <div class=\"information-container\">
                      <p>1</p>
                    </div>
                    <h3>
                        <span class=\"label green badge \">Временно класиране</span>
                    </h3>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center  chart-container\">
                    <div class=\"information-container\">
                       <p>";
        // line 30
        echo twig_escape_filter($this->env, ($context["division"] ?? null), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"green badge fat-percent-badge  label\">Първенство</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script>
        \$('.player_portfolio').on('click', function () {

            var player = \$(this).children().attr('id');
            \$('.player-status-container').css('visibility', 'visible');
            \$('#status-'+player).css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('#status-'+player).css('visibility', 'hidden');
            });

            \$('.player-status-container').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('#status-'+player).css('visibility', 'hidden');
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "coaches/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  60 => 12,  50 => 4,  46 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "coaches/index.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\index.html.twig");
    }
}
