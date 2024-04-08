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

/* admin/view/template/localisation/language_form.twig */
class __TwigTemplate_d1c98707c16300eb258b696e13822de7 extends Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-language\" formaction=\"";
        // line 6
        echo ($context["save"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-language\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">

          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 23
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 25
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          <div class=\"row mb-3 required\">
            <label for=\"input-code\" class=\"col-sm-2 col-form-label\">";
        // line 31
        echo ($context["entry_code"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"code\" value=\"";
        // line 33
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\"/>
              <div id=\"error-code\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          <div class=\"row mb-3\">
            <label for=\"input-extension\" class=\"col-sm-2 col-form-label\">";
        // line 39
        echo ($context["entry_extension"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"extension\" value=\"";
        // line 41
        echo ($context["extension"] ?? null);
        echo "\" id=\"input-extension\" class=\"form-control\" readonly/>
            </div>
          </div>

          <div class=\"row mb-3 required\">
            <label for=\"input-locale\" class=\"col-sm-2 col-form-label\">";
        // line 46
        echo ($context["entry_locale"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"locale\" value=\"";
        // line 48
        echo ($context["locale"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_locale"] ?? null);
        echo "\" id=\"input-locale\" class=\"form-control\"/>
              <div class=\"form-text\">";
        // line 49
        echo ($context["help_locale"] ?? null);
        echo "</div>
              <div id=\"error-locale\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 55
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 59
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
              </div>
              <div class=\"form-text\">";
        // line 61
        echo ($context["help_status"] ?? null);
        echo "</div>
            </div>
          </div>

          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 66
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"";
        // line 68
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>

          <input type=\"hidden\" name=\"language_id\" value=\"";
        // line 72
        echo ($context["language_id"] ?? null);
        echo "\" id=\"input-language-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 78
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/localisation/language_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 78,  197 => 72,  188 => 68,  183 => 66,  175 => 61,  168 => 59,  161 => 55,  152 => 49,  146 => 48,  141 => 46,  133 => 41,  128 => 39,  117 => 33,  112 => 31,  101 => 25,  96 => 23,  90 => 20,  85 => 18,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/localisation/language_form.twig", "/var/www/admin/view/template/localisation/language_form.twig");
    }
}
