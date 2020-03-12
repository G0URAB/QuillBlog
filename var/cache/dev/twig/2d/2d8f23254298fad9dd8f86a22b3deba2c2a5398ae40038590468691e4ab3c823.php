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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/TimeImmutableType.php */
class __TwigTemplate_4a551d970593336f96bdd69198301639b509e74085a6836b8d556262dcd22235 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/TimeImmutableType.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Types;

use DateTimeImmutable;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * Immutable type of {@see TimeType}.
 */
class TimeImmutableType extends TimeType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Types::TIME_IMMUTABLE;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return \$value;
        }

        if (\$value instanceof DateTimeImmutable) {
            return \$value->format(\$platform->getTimeFormatString());
        }

        throw ConversionException::conversionFailedInvalidType(
            \$value,
            \$this->getName(),
            ['null', DateTimeImmutable::class]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value instanceof DateTimeImmutable) {
            return \$value;
        }

        \$dateTime = DateTimeImmutable::createFromFormat('!' . \$platform->getTimeFormatString(), \$value);

        if (! \$dateTime) {
            throw ConversionException::conversionFailedFormat(
                \$value,
                \$this->getName(),
                \$platform->getTimeFormatString()
            );
        }

        return \$dateTime;
    }

    /**
     * {@inheritdoc}
     */
    public function requiresSQLCommentHint(AbstractPlatform \$platform)
    {
        return true;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/TimeImmutableType.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Types;

use DateTimeImmutable;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * Immutable type of {@see TimeType}.
 */
class TimeImmutableType extends TimeType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Types::TIME_IMMUTABLE;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return \$value;
        }

        if (\$value instanceof DateTimeImmutable) {
            return \$value->format(\$platform->getTimeFormatString());
        }

        throw ConversionException::conversionFailedInvalidType(
            \$value,
            \$this->getName(),
            ['null', DateTimeImmutable::class]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value instanceof DateTimeImmutable) {
            return \$value;
        }

        \$dateTime = DateTimeImmutable::createFromFormat('!' . \$platform->getTimeFormatString(), \$value);

        if (! \$dateTime) {
            throw ConversionException::conversionFailedFormat(
                \$value,
                \$this->getName(),
                \$platform->getTimeFormatString()
            );
        }

        return \$dateTime;
    }

    /**
     * {@inheritdoc}
     */
    public function requiresSQLCommentHint(AbstractPlatform \$platform)
    {
        return true;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/TimeImmutableType.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Types\\TimeImmutableType.php");
    }
}
