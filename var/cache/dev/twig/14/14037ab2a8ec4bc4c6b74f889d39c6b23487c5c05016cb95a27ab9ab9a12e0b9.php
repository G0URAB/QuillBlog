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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractOracleDriver/EasyConnectString.php */
class __TwigTemplate_6963338134d7c5e96ef43b326ea11972894b16c01de6d7b65d433a7b251f83b0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractOracleDriver/EasyConnectString.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\DBAL\\Driver\\AbstractOracleDriver;

use function implode;
use function is_array;
use function sprintf;

/**
 * Represents an Oracle Easy Connect string
 *
 * @link https://docs.oracle.com/database/121/NETAG/naming.htm
 */
final class EasyConnectString
{
    /** @var string */
    private \$string;

    private function __construct(string \$string)
    {
        \$this->string = \$string;
    }

    public function __toString() : string
    {
        return \$this->string;
    }

    /**
     * Creates the object from an array representation
     *
     * @param mixed[] \$params
     */
    public static function fromArray(array \$params) : self
    {
        return new self(self::renderParams(\$params));
    }

    /**
     * Creates the object from the given DBAL connection parameters.
     *
     * @param mixed[] \$params
     */
    public static function fromConnectionParameters(array \$params) : self
    {
        if (! empty(\$params['connectstring'])) {
            return new self(\$params['connectstring']);
        }

        if (empty(\$params['host'])) {
            return new self(\$params['dbname'] ?? '');
        }

        \$connectData = [];

        if (isset(\$params['servicename']) || isset(\$params['dbname'])) {
            \$serviceKey = 'SID';

            if (! empty(\$params['service'])) {
                \$serviceKey = 'SERVICE_NAME';
            }

            \$serviceName = \$params['servicename'] ?? \$params['dbname'];

            \$connectData[\$serviceKey] = \$serviceName;
        }

        if (! empty(\$params['instancename'])) {
            \$connectData['INSTANCE_NAME'] = \$params['instancename'];
        }

        if (! empty(\$params['pooled'])) {
            \$connectData['SERVER'] = 'POOLED';
        }

        return self::fromArray([
            'DESCRIPTION' => [
                'ADDRESS' => [
                    'PROTOCOL' => 'TCP',
                    'HOST' => \$params['host'],
                    'PORT' => \$params['port'] ?? 1521,
                ],
                'CONNECT_DATA' => \$connectData,
            ],
        ]);
    }

    /**
     * @param mixed[] \$params
     */
    private static function renderParams(array \$params) : string
    {
        \$chunks = [];

        foreach (\$params as \$key => \$value) {
            \$string = self::renderValue(\$value);

            if (\$string === '') {
                continue;
            }

            \$chunks[] = sprintf('(%s=%s)', \$key, \$string);
        }

        return implode('', \$chunks);
    }

    /**
     * @param mixed \$value
     */
    private static function renderValue(\$value) : string
    {
        if (is_array(\$value)) {
            return self::renderParams(\$value);
        }

        return (string) \$value;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractOracleDriver/EasyConnectString.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\DBAL\\Driver\\AbstractOracleDriver;

use function implode;
use function is_array;
use function sprintf;

/**
 * Represents an Oracle Easy Connect string
 *
 * @link https://docs.oracle.com/database/121/NETAG/naming.htm
 */
final class EasyConnectString
{
    /** @var string */
    private \$string;

    private function __construct(string \$string)
    {
        \$this->string = \$string;
    }

    public function __toString() : string
    {
        return \$this->string;
    }

    /**
     * Creates the object from an array representation
     *
     * @param mixed[] \$params
     */
    public static function fromArray(array \$params) : self
    {
        return new self(self::renderParams(\$params));
    }

    /**
     * Creates the object from the given DBAL connection parameters.
     *
     * @param mixed[] \$params
     */
    public static function fromConnectionParameters(array \$params) : self
    {
        if (! empty(\$params['connectstring'])) {
            return new self(\$params['connectstring']);
        }

        if (empty(\$params['host'])) {
            return new self(\$params['dbname'] ?? '');
        }

        \$connectData = [];

        if (isset(\$params['servicename']) || isset(\$params['dbname'])) {
            \$serviceKey = 'SID';

            if (! empty(\$params['service'])) {
                \$serviceKey = 'SERVICE_NAME';
            }

            \$serviceName = \$params['servicename'] ?? \$params['dbname'];

            \$connectData[\$serviceKey] = \$serviceName;
        }

        if (! empty(\$params['instancename'])) {
            \$connectData['INSTANCE_NAME'] = \$params['instancename'];
        }

        if (! empty(\$params['pooled'])) {
            \$connectData['SERVER'] = 'POOLED';
        }

        return self::fromArray([
            'DESCRIPTION' => [
                'ADDRESS' => [
                    'PROTOCOL' => 'TCP',
                    'HOST' => \$params['host'],
                    'PORT' => \$params['port'] ?? 1521,
                ],
                'CONNECT_DATA' => \$connectData,
            ],
        ]);
    }

    /**
     * @param mixed[] \$params
     */
    private static function renderParams(array \$params) : string
    {
        \$chunks = [];

        foreach (\$params as \$key => \$value) {
            \$string = self::renderValue(\$value);

            if (\$string === '') {
                continue;
            }

            \$chunks[] = sprintf('(%s=%s)', \$key, \$string);
        }

        return implode('', \$chunks);
    }

    /**
     * @param mixed \$value
     */
    private static function renderValue(\$value) : string
    {
        if (is_array(\$value)) {
            return self::renderParams(\$value);
        }

        return (string) \$value;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractOracleDriver/EasyConnectString.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\AbstractOracleDriver\\EasyConnectString.php");
    }
}
