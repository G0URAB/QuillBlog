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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/BinaryType.php */
class __TwigTemplate_cba47fe8126bd58a97f87309370d32682a234df31521672dcefd1a85bd15ea18 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/BinaryType.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\ParameterType;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use function assert;
use function fopen;
use function fseek;
use function fwrite;
use function is_resource;
use function is_string;

/**
 * Type that maps ab SQL BINARY/VARBINARY to a PHP resource stream.
 */
class BinaryType extends Type
{
    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getBinaryTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return null;
        }

        if (is_string(\$value)) {
            \$fp = fopen('php://temp', 'rb+');
            assert(is_resource(\$fp));
            fwrite(\$fp, \$value);
            fseek(\$fp, 0);
            \$value = \$fp;
        }

        if (! is_resource(\$value)) {
            throw ConversionException::conversionFailed(\$value, Types::BINARY);
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Types::BINARY;
    }

    /**
     * {@inheritdoc}
     */
    public function getBindingType()
    {
        return ParameterType::BINARY;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/BinaryType.php";
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
use function assert;
use function fopen;
use function fseek;
use function fwrite;
use function is_resource;
use function is_string;

/**
 * Type that maps ab SQL BINARY/VARBINARY to a PHP resource stream.
 */
class BinaryType extends Type
{
    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getBinaryTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return null;
        }

        if (is_string(\$value)) {
            \$fp = fopen('php://temp', 'rb+');
            assert(is_resource(\$fp));
            fwrite(\$fp, \$value);
            fseek(\$fp, 0);
            \$value = \$fp;
        }

        if (! is_resource(\$value)) {
            throw ConversionException::conversionFailed(\$value, Types::BINARY);
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Types::BINARY;
    }

    /**
     * {@inheritdoc}
     */
    public function getBindingType()
    {
        return ParameterType::BINARY;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/BinaryType.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Types\\BinaryType.php");
    }
}
