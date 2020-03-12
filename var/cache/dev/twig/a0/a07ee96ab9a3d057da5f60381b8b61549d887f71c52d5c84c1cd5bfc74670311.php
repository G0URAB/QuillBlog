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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/crud/templates/edit.tpl.php */
class __TwigTemplate_678c5d3d33b40179a496c24f339f9fbc9f9f0df25bd3d5c12ef9ca96e5a3cee5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/crud/templates/edit.tpl.php"));

        // line 1
        echo "<?= \$helper->getHeadPrintCode('Edit '.\$entity_class_name) ?>

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Edit <?= \$entity_class_name ?></h1>

    ";
        // line 6
        echo twig_include($this->env, $context, "<?= \$route_name ?>/_form.html.twig", ["button_label" => "Update"]);
        echo "

    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("<?= \$route_name ?>_index");
        echo "\">back to list</a>

    ";
        // line 10
        echo twig_include($this->env, $context, "<?= \$route_name ?>/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/crud/templates/edit.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  67 => 8,  62 => 6,  58 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \$helper->getHeadPrintCode('Edit '.\$entity_class_name) ?>

{% block body %}
    <h1>Edit <?= \$entity_class_name ?></h1>

    {{ include('<?= \$route_name ?>/_form.html.twig', {'button_label': 'Update'}) }}

    <a href=\"{{ path('<?= \$route_name ?>_index') }}\">back to list</a>

    {{ include('<?= \$route_name ?>/_delete_form.html.twig') }}
{% endblock %}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/crud/templates/edit.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\crud\\templates\\edit.tpl.php");
    }
}
