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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/SymfonyFileLocator.php */
class __TwigTemplate_8ba8528f8475fa1af807f42827a26fc5f18e12255a05cce899a65969a2cbc69d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/SymfonyFileLocator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping\\Driver;

use function class_alias;

class_alias(
    \\Doctrine\\Persistence\\Mapping\\Driver\\SymfonyFileLocator::class,
    __NAMESPACE__ . '\\SymfonyFileLocator'
);

if (false) {
    class SymfonyFileLocator extends \\Doctrine\\Persistence\\Mapping\\Driver\\SymfonyFileLocator
    {
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/SymfonyFileLocator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Mapping\\Driver;

use function class_alias;

class_alias(
    \\Doctrine\\Persistence\\Mapping\\Driver\\SymfonyFileLocator::class,
    __NAMESPACE__ . '\\SymfonyFileLocator'
);

if (false) {
    class SymfonyFileLocator extends \\Doctrine\\Persistence\\Mapping\\Driver\\SymfonyFileLocator
    {
    }
}
", "@app/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/SymfonyFileLocator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\SymfonyFileLocator.php");
    }
}
