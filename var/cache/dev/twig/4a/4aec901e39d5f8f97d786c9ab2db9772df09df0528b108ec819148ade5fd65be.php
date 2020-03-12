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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ReflectionService.php */
class __TwigTemplate_5c423b6c3f30036b9ec4b7bd88e87a6628e4ac7dec0bc1dd0783289a1e7994ae extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ReflectionService.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

use function class_alias;

class_alias(
    \\Doctrine\\Persistence\\Mapping\\ReflectionService::class,
    __NAMESPACE__ . '\\ReflectionService'
);

if (false) {
    interface ReflectionService extends \\Doctrine\\Persistence\\Mapping\\ReflectionService
    {
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ReflectionService.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

use function class_alias;

class_alias(
    \\Doctrine\\Persistence\\Mapping\\ReflectionService::class,
    __NAMESPACE__ . '\\ReflectionService'
);

if (false) {
    interface ReflectionService extends \\Doctrine\\Persistence\\Mapping\\ReflectionService
    {
    }
}
", "@app/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ReflectionService.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\Mapping\\ReflectionService.php");
    }
}
