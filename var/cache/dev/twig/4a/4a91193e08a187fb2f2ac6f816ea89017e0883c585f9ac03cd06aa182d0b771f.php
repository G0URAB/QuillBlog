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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeTzType.php */
class __TwigTemplate_945f57773705957151de78cca606ccea7026a4a3a2133c837c8832c0a61b093a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeTzType.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Types;

use DateTime;
use DateTimeInterface;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * DateTime type saving additional timezone information.
 *
 * Caution: Databases are not necessarily experts at storing timezone related
 * data of dates. First, of all the supported vendors only PostgreSQL and Oracle
 * support storing Timezone data. But those two don't save the actual timezone
 * attached to a DateTime instance (for example \"Europe/Berlin\" or \"America/Montreal\")
 * but the current offset of them related to UTC. That means depending on daylight saving times
 * or not you may get different offsets.
 *
 * This datatype makes only sense to use, if your application works with an offset, not
 * with an actual timezone that uses transitions. Otherwise your DateTime instance
 * attached with a timezone such as Europe/Berlin gets saved into the database with
 * the offset and re-created from persistence with only the offset, not the original timezone
 * attached.
 */
class DateTimeTzType extends Type implements PhpDateTimeMappingType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Types::DATETIMETZ_MUTABLE;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getDateTimeTzTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return \$value;
        }

        if (\$value instanceof DateTimeInterface) {
            return \$value->format(\$platform->getDateTimeTzFormatString());
        }

        throw ConversionException::conversionFailedInvalidType(\$value, \$this->getName(), ['null', 'DateTime']);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value instanceof DateTimeInterface) {
            return \$value;
        }

        \$val = DateTime::createFromFormat(\$platform->getDateTimeTzFormatString(), \$value);
        if (! \$val) {
            throw ConversionException::conversionFailedFormat(\$value, \$this->getName(), \$platform->getDateTimeTzFormatString());
        }

        return \$val;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeTzType.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Types;

use DateTime;
use DateTimeInterface;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * DateTime type saving additional timezone information.
 *
 * Caution: Databases are not necessarily experts at storing timezone related
 * data of dates. First, of all the supported vendors only PostgreSQL and Oracle
 * support storing Timezone data. But those two don't save the actual timezone
 * attached to a DateTime instance (for example \"Europe/Berlin\" or \"America/Montreal\")
 * but the current offset of them related to UTC. That means depending on daylight saving times
 * or not you may get different offsets.
 *
 * This datatype makes only sense to use, if your application works with an offset, not
 * with an actual timezone that uses transitions. Otherwise your DateTime instance
 * attached with a timezone such as Europe/Berlin gets saved into the database with
 * the offset and re-created from persistence with only the offset, not the original timezone
 * attached.
 */
class DateTimeTzType extends Type implements PhpDateTimeMappingType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Types::DATETIMETZ_MUTABLE;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getDateTimeTzTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return \$value;
        }

        if (\$value instanceof DateTimeInterface) {
            return \$value->format(\$platform->getDateTimeTzFormatString());
        }

        throw ConversionException::conversionFailedInvalidType(\$value, \$this->getName(), ['null', 'DateTime']);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value instanceof DateTimeInterface) {
            return \$value;
        }

        \$val = DateTime::createFromFormat(\$platform->getDateTimeTzFormatString(), \$value);
        if (! \$val) {
            throw ConversionException::conversionFailedFormat(\$value, \$this->getName(), \$platform->getDateTimeTzFormatString());
        }

        return \$val;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeTzType.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Types\\DateTimeTzType.php");
    }
}
