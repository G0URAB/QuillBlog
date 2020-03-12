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

/* @app/vendor/symfony/http-foundation/Session/Storage/Handler/SessionHandlerFactory.php */
class __TwigTemplate_05dc5746151ef98fcf33c609129fd890da239f2ceb4a4c7e244e0d7f85078a1b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/Storage/Handler/SessionHandlerFactory.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

use Doctrine\\DBAL\\DriverManager;
use Symfony\\Component\\Cache\\Adapter\\AbstractAdapter;
use Symfony\\Component\\Cache\\Traits\\RedisClusterProxy;
use Symfony\\Component\\Cache\\Traits\\RedisProxy;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class SessionHandlerFactory
{
    /**
     * @param \\Redis|\\RedisArray|\\RedisCluster|\\Predis\\ClientInterface|RedisProxy|RedisClusterProxy|\\Memcached|\\PDO|string \$connection Connection or DSN
     */
    public static function createHandler(\$connection): AbstractSessionHandler
    {
        if (!\\is_string(\$connection) && !\\is_object(\$connection)) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be a string or a connection object, %s given.', __METHOD__, \\gettype(\$connection)));
        }

        switch (true) {
            case \$connection instanceof \\Redis:
            case \$connection instanceof \\RedisArray:
            case \$connection instanceof \\RedisCluster:
            case \$connection instanceof \\Predis\\ClientInterface:
            case \$connection instanceof RedisProxy:
            case \$connection instanceof RedisClusterProxy:
                return new RedisSessionHandler(\$connection);

            case \$connection instanceof \\Memcached:
                return new MemcachedSessionHandler(\$connection);

            case \$connection instanceof \\PDO:
                return new PdoSessionHandler(\$connection);

            case !\\is_string(\$connection):
                throw new \\InvalidArgumentException(sprintf('Unsupported Connection: %s.', \\get_class(\$connection)));
            case 0 === strpos(\$connection, 'file://'):
                return new StrictSessionHandler(new NativeFileSessionHandler(substr(\$connection, 7)));

            case 0 === strpos(\$connection, 'redis:'):
            case 0 === strpos(\$connection, 'rediss:'):
            case 0 === strpos(\$connection, 'memcached:'):
                if (!class_exists(AbstractAdapter::class)) {
                    throw new \\InvalidArgumentException(sprintf('Unsupported DSN \"%s\". Try running \"composer require symfony/cache\".', \$connection));
                }
                \$handlerClass = 0 === strpos(\$connection, 'memcached:') ? MemcachedSessionHandler::class : RedisSessionHandler::class;
                \$connection = AbstractAdapter::createConnection(\$connection, ['lazy' => true]);

                return new \$handlerClass(\$connection);

            case 0 === strpos(\$connection, 'pdo_oci://'):
                if (!class_exists(DriverManager::class)) {
                    throw new \\InvalidArgumentException(sprintf('Unsupported DSN \"%s\". Try running \"composer require doctrine/dbal\".', \$connection));
                }
                \$connection = DriverManager::getConnection(['url' => \$connection])->getWrappedConnection();
                // no break;

            case 0 === strpos(\$connection, 'mssql://'):
            case 0 === strpos(\$connection, 'mysql://'):
            case 0 === strpos(\$connection, 'mysql2://'):
            case 0 === strpos(\$connection, 'pgsql://'):
            case 0 === strpos(\$connection, 'postgres://'):
            case 0 === strpos(\$connection, 'postgresql://'):
            case 0 === strpos(\$connection, 'sqlsrv://'):
            case 0 === strpos(\$connection, 'sqlite://'):
            case 0 === strpos(\$connection, 'sqlite3://'):
                return new PdoSessionHandler(\$connection);
        }

        throw new \\InvalidArgumentException(sprintf('Unsupported Connection: %s.', \$connection));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/Storage/Handler/SessionHandlerFactory.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

use Doctrine\\DBAL\\DriverManager;
use Symfony\\Component\\Cache\\Adapter\\AbstractAdapter;
use Symfony\\Component\\Cache\\Traits\\RedisClusterProxy;
use Symfony\\Component\\Cache\\Traits\\RedisProxy;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class SessionHandlerFactory
{
    /**
     * @param \\Redis|\\RedisArray|\\RedisCluster|\\Predis\\ClientInterface|RedisProxy|RedisClusterProxy|\\Memcached|\\PDO|string \$connection Connection or DSN
     */
    public static function createHandler(\$connection): AbstractSessionHandler
    {
        if (!\\is_string(\$connection) && !\\is_object(\$connection)) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be a string or a connection object, %s given.', __METHOD__, \\gettype(\$connection)));
        }

        switch (true) {
            case \$connection instanceof \\Redis:
            case \$connection instanceof \\RedisArray:
            case \$connection instanceof \\RedisCluster:
            case \$connection instanceof \\Predis\\ClientInterface:
            case \$connection instanceof RedisProxy:
            case \$connection instanceof RedisClusterProxy:
                return new RedisSessionHandler(\$connection);

            case \$connection instanceof \\Memcached:
                return new MemcachedSessionHandler(\$connection);

            case \$connection instanceof \\PDO:
                return new PdoSessionHandler(\$connection);

            case !\\is_string(\$connection):
                throw new \\InvalidArgumentException(sprintf('Unsupported Connection: %s.', \\get_class(\$connection)));
            case 0 === strpos(\$connection, 'file://'):
                return new StrictSessionHandler(new NativeFileSessionHandler(substr(\$connection, 7)));

            case 0 === strpos(\$connection, 'redis:'):
            case 0 === strpos(\$connection, 'rediss:'):
            case 0 === strpos(\$connection, 'memcached:'):
                if (!class_exists(AbstractAdapter::class)) {
                    throw new \\InvalidArgumentException(sprintf('Unsupported DSN \"%s\". Try running \"composer require symfony/cache\".', \$connection));
                }
                \$handlerClass = 0 === strpos(\$connection, 'memcached:') ? MemcachedSessionHandler::class : RedisSessionHandler::class;
                \$connection = AbstractAdapter::createConnection(\$connection, ['lazy' => true]);

                return new \$handlerClass(\$connection);

            case 0 === strpos(\$connection, 'pdo_oci://'):
                if (!class_exists(DriverManager::class)) {
                    throw new \\InvalidArgumentException(sprintf('Unsupported DSN \"%s\". Try running \"composer require doctrine/dbal\".', \$connection));
                }
                \$connection = DriverManager::getConnection(['url' => \$connection])->getWrappedConnection();
                // no break;

            case 0 === strpos(\$connection, 'mssql://'):
            case 0 === strpos(\$connection, 'mysql://'):
            case 0 === strpos(\$connection, 'mysql2://'):
            case 0 === strpos(\$connection, 'pgsql://'):
            case 0 === strpos(\$connection, 'postgres://'):
            case 0 === strpos(\$connection, 'postgresql://'):
            case 0 === strpos(\$connection, 'sqlsrv://'):
            case 0 === strpos(\$connection, 'sqlite://'):
            case 0 === strpos(\$connection, 'sqlite3://'):
                return new PdoSessionHandler(\$connection);
        }

        throw new \\InvalidArgumentException(sprintf('Unsupported Connection: %s.', \$connection));
    }
}
", "@app/vendor/symfony/http-foundation/Session/Storage/Handler/SessionHandlerFactory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\Storage\\Handler\\SessionHandlerFactory.php");
    }
}
