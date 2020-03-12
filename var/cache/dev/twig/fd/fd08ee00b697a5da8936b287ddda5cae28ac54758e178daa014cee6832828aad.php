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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere11Platform.php */
class __TwigTemplate_44fdcb9752d582b3bbfecd1c4d442c291eba804263b754bd7bc34e1e34d5d9fb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere11Platform.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms;

/**
 * The SQLAnywhere11Platform provides the behavior, features and SQL dialect of the
 * SAP Sybase SQL Anywhere 11 database platform.
 */
class SQLAnywhere11Platform extends SQLAnywherePlatform
{
    /**
     * {@inheritdoc}
     */
    public function getRegexpExpression()
    {
        return 'REGEXP';
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLAnywhere11Keywords::class;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere11Platform.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms;

/**
 * The SQLAnywhere11Platform provides the behavior, features and SQL dialect of the
 * SAP Sybase SQL Anywhere 11 database platform.
 */
class SQLAnywhere11Platform extends SQLAnywherePlatform
{
    /**
     * {@inheritdoc}
     */
    public function getRegexpExpression()
    {
        return 'REGEXP';
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLAnywhere11Keywords::class;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere11Platform.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Platforms\\SQLAnywhere11Platform.php");
    }
}
