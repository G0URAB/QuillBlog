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

/* @app/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php */
class __TwigTemplate_ef8030eeefb4a863af3260ba7a85f5301140e80d30aa7b9edec1c46c71dcdceb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Doctrine\\Logger;

use Doctrine\\DBAL\\Logging\\SQLLogger;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Stopwatch\\Stopwatch;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DbalLogger implements SQLLogger
{
    const MAX_STRING_LENGTH = 32;
    const BINARY_DATA_VALUE = '(binary value)';

    protected \$logger;
    protected \$stopwatch;

    public function __construct(LoggerInterface \$logger = null, Stopwatch \$stopwatch = null)
    {
        \$this->logger = \$logger;
        \$this->stopwatch = \$stopwatch;
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function startQuery(\$sql, array \$params = null, array \$types = null)
    {
        if (null !== \$this->stopwatch) {
            \$this->stopwatch->start('doctrine', 'doctrine');
        }

        if (null !== \$this->logger) {
            \$this->log(\$sql, null === \$params ? [] : \$this->normalizeParams(\$params));
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function stopQuery()
    {
        if (null !== \$this->stopwatch) {
            \$this->stopwatch->stop('doctrine');
        }
    }

    /**
     * Logs a message.
     */
    protected function log(string \$message, array \$params)
    {
        \$this->logger->debug(\$message, \$params);
    }

    private function normalizeParams(array \$params): array
    {
        foreach (\$params as \$index => \$param) {
            // normalize recursively
            if (\\is_array(\$param)) {
                \$params[\$index] = \$this->normalizeParams(\$param);
                continue;
            }

            if (!\\is_string(\$params[\$index])) {
                continue;
            }

            // non utf-8 strings break json encoding
            if (!preg_match('//u', \$params[\$index])) {
                \$params[\$index] = self::BINARY_DATA_VALUE;
                continue;
            }

            // detect if the too long string must be shorten
            if (self::MAX_STRING_LENGTH < mb_strlen(\$params[\$index], 'UTF-8')) {
                \$params[\$index] = mb_substr(\$params[\$index], 0, self::MAX_STRING_LENGTH - 6, 'UTF-8').' [...]';
                continue;
            }
        }

        return \$params;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Doctrine\\Logger;

use Doctrine\\DBAL\\Logging\\SQLLogger;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Stopwatch\\Stopwatch;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DbalLogger implements SQLLogger
{
    const MAX_STRING_LENGTH = 32;
    const BINARY_DATA_VALUE = '(binary value)';

    protected \$logger;
    protected \$stopwatch;

    public function __construct(LoggerInterface \$logger = null, Stopwatch \$stopwatch = null)
    {
        \$this->logger = \$logger;
        \$this->stopwatch = \$stopwatch;
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function startQuery(\$sql, array \$params = null, array \$types = null)
    {
        if (null !== \$this->stopwatch) {
            \$this->stopwatch->start('doctrine', 'doctrine');
        }

        if (null !== \$this->logger) {
            \$this->log(\$sql, null === \$params ? [] : \$this->normalizeParams(\$params));
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function stopQuery()
    {
        if (null !== \$this->stopwatch) {
            \$this->stopwatch->stop('doctrine');
        }
    }

    /**
     * Logs a message.
     */
    protected function log(string \$message, array \$params)
    {
        \$this->logger->debug(\$message, \$params);
    }

    private function normalizeParams(array \$params): array
    {
        foreach (\$params as \$index => \$param) {
            // normalize recursively
            if (\\is_array(\$param)) {
                \$params[\$index] = \$this->normalizeParams(\$param);
                continue;
            }

            if (!\\is_string(\$params[\$index])) {
                continue;
            }

            // non utf-8 strings break json encoding
            if (!preg_match('//u', \$params[\$index])) {
                \$params[\$index] = self::BINARY_DATA_VALUE;
                continue;
            }

            // detect if the too long string must be shorten
            if (self::MAX_STRING_LENGTH < mb_strlen(\$params[\$index], 'UTF-8')) {
                \$params[\$index] = mb_substr(\$params[\$index], 0, self::MAX_STRING_LENGTH - 6, 'UTF-8').' [...]';
                continue;
            }
        }

        return \$params;
    }
}
", "@app/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Logger\\DbalLogger.php");
    }
}
