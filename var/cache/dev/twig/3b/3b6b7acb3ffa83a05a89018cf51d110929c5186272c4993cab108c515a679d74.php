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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerAware.php */
class __TwigTemplate_11c5d1053325a1c6d7d2d527a51955bcfc9e001933abf873ce19aac71c632f0f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerAware.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence;

use function class_alias;

class_alias(
    \\Doctrine\\Persistence\\ObjectManagerAware::class,
    __NAMESPACE__ . '\\ObjectManagerAware'
);

if (false) {
    interface ObjectManagerAware extends \\Doctrine\\Persistence\\ObjectManagerAware
    {
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerAware.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence;

use function class_alias;

class_alias(
    \\Doctrine\\Persistence\\ObjectManagerAware::class,
    __NAMESPACE__ . '\\ObjectManagerAware'
);

if (false) {
    interface ObjectManagerAware extends \\Doctrine\\Persistence\\ObjectManagerAware
    {
    }
}
", "@app/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerAware.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\ObjectManagerAware.php");
    }
}
