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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/IntegerType.php */
class __TwigTemplate_16f700287bb553b986998e53df715b5b932ea8b72f07150a5088bab8f3edd7c0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/IntegerType.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\ParameterType;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * Type that maps an SQL INT to a PHP integer.
 */
class IntegerType extends Type implements PhpIntegerMappingType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Types::INTEGER;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getIntegerTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        return \$value === null ? null : (int) \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getBindingType()
    {
        return ParameterType::INTEGER;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/IntegerType.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\ParameterType;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * Type that maps an SQL INT to a PHP integer.
 */
class IntegerType extends Type implements PhpIntegerMappingType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Types::INTEGER;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getIntegerTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        return \$value === null ? null : (int) \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getBindingType()
    {
        return ParameterType::INTEGER;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/IntegerType.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Types\\IntegerType.php");
    }
}
