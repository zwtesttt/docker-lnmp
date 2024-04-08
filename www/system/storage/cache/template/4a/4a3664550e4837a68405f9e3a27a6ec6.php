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

/* admin/view/template/extension/payment.twig */
class __TwigTemplate_470be1c1a8f6e9099315e8ea05ae7b88 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["promotion"] ?? null);
        echo "
<fieldset>
  <legend>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</legend>
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-start\">";
        // line 8
        echo ($context["column_name"] ?? null);
        echo "</td>
          <td class=\"text-center\">";
        // line 9
        echo ($context["column_vendor"] ?? null);
        echo "</td>
          <td class=\"text-start\">";
        // line 10
        echo ($context["column_status"] ?? null);
        echo "</td>
          <td class=\"text-end\">";
        // line 11
        echo ($context["column_sort_order"] ?? null);
        echo "</td>
          <td class=\"text-end\">";
        // line 12
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 16
        if (($context["extensions"] ?? null)) {
            // line 17
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 18
                echo "            <tr>
              <td class=\"text-start\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 19);
                echo "</td>
              <td class=\"text-center\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "link", [], "any", false, false, false, 20);
                echo "</td>
              <td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 21);
                echo "</td>
              <td class=\"text-end\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "sort_order", [], "any", false, false, false, 22);
                echo "</td>
              <td class=\"text-end text-nowrap\">";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 24);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                ";
                } else {
                    // line 26
                    echo "                  <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa-solid fa-pencil\"></i></button>
                ";
                }
                // line 28
                echo "                ";
                if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 29);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_install"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></a>
                ";
                } else {
                    // line 31
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 31);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_uninstall"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></a>
                ";
                }
                // line 32
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ";
        } else {
            // line 36
            echo "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 37
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 40
        echo "      </tbody>
    </table>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/extension/payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 40,  146 => 37,  143 => 36,  140 => 35,  132 => 32,  124 => 31,  116 => 29,  113 => 28,  109 => 26,  101 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  80 => 18,  75 => 17,  73 => 16,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/extension/payment.twig", "/var/www/admin/view/template/extension/payment.twig");
    }
}
