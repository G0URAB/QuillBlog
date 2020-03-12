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

/* @app/vendor/symfony/cache/Traits/ContractsTrait.php */
class __TwigTemplate_157f0a996f7f199da7601708630b4af639f2f3c2fb91326404263c3514c35c46 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/Traits/ContractsTrait.php"));

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

namespace Symfony\\Component\\Cache\\Traits;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Cache\\Adapter\\AdapterInterface;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\LockRegistry;
use Symfony\\Contracts\\Cache\\CacheInterface;
use Symfony\\Contracts\\Cache\\CacheTrait;
use Symfony\\Contracts\\Cache\\ItemInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait ContractsTrait
{
    use CacheTrait {
        doGet as private contractsGet;
    }

    private \$callbackWrapper = [LockRegistry::class, 'compute'];
    private \$computing = [];

    /**
     * Wraps the callback passed to ->get() in a callable.
     *
     * @return callable the previous callback wrapper
     */
    public function setCallbackWrapper(?callable \$callbackWrapper): callable
    {
        \$previousWrapper = \$this->callbackWrapper;
        \$this->callbackWrapper = \$callbackWrapper ?? function (callable \$callback, ItemInterface \$item, bool &\$save, CacheInterface \$pool, \\Closure \$setMetadata, ?LoggerInterface \$logger) {
            return \$callback(\$item, \$save);
        };

        return \$previousWrapper;
    }

    private function doGet(AdapterInterface \$pool, string \$key, callable \$callback, ?float \$beta, array &\$metadata = null)
    {
        if (0 > \$beta = \$beta ?? 1.0) {
            throw new InvalidArgumentException(sprintf('Argument \"\$beta\" provided to \"%s::get()\" must be a positive number, %f given.', static::class, \$beta));
        }

        static \$setMetadata;

        \$setMetadata = \$setMetadata ?? \\Closure::bind(
            static function (CacheItem \$item, float \$startTime, ?array &\$metadata) {
                if (\$item->expiry > \$endTime = microtime(true)) {
                    \$item->newMetadata[CacheItem::METADATA_EXPIRY] = \$metadata[CacheItem::METADATA_EXPIRY] = \$item->expiry;
                    \$item->newMetadata[CacheItem::METADATA_CTIME] = \$metadata[CacheItem::METADATA_CTIME] = (int) ceil(1000 * (\$endTime - \$startTime));
                } else {
                    unset(\$metadata[CacheItem::METADATA_EXPIRY], \$metadata[CacheItem::METADATA_CTIME]);
                }
            },
            null,
            CacheItem::class
        );

        return \$this->contractsGet(\$pool, \$key, function (CacheItem \$item, bool &\$save) use (\$pool, \$callback, \$setMetadata, &\$metadata, \$key) {
            // don't wrap nor save recursive calls
            if (isset(\$this->computing[\$key])) {
                \$value = \$callback(\$item, \$save);
                \$save = false;

                return \$value;
            }

            \$this->computing[\$key] = \$key;
            \$startTime = microtime(true);

            try {
                \$value = (\$this->callbackWrapper)(\$callback, \$item, \$save, \$pool, function (CacheItem \$item) use (\$setMetadata, \$startTime, &\$metadata) {
                    \$setMetadata(\$item, \$startTime, \$metadata);
                }, \$this->logger ?? null);
                \$setMetadata(\$item, \$startTime, \$metadata);

                return \$value;
            } finally {
                unset(\$this->computing[\$key]);
            }
        }, \$beta, \$metadata, \$this->logger ?? null);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/Traits/ContractsTrait.php";
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

namespace Symfony\\Component\\Cache\\Traits;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Cache\\Adapter\\AdapterInterface;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\LockRegistry;
use Symfony\\Contracts\\Cache\\CacheInterface;
use Symfony\\Contracts\\Cache\\CacheTrait;
use Symfony\\Contracts\\Cache\\ItemInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait ContractsTrait
{
    use CacheTrait {
        doGet as private contractsGet;
    }

    private \$callbackWrapper = [LockRegistry::class, 'compute'];
    private \$computing = [];

    /**
     * Wraps the callback passed to ->get() in a callable.
     *
     * @return callable the previous callback wrapper
     */
    public function setCallbackWrapper(?callable \$callbackWrapper): callable
    {
        \$previousWrapper = \$this->callbackWrapper;
        \$this->callbackWrapper = \$callbackWrapper ?? function (callable \$callback, ItemInterface \$item, bool &\$save, CacheInterface \$pool, \\Closure \$setMetadata, ?LoggerInterface \$logger) {
            return \$callback(\$item, \$save);
        };

        return \$previousWrapper;
    }

    private function doGet(AdapterInterface \$pool, string \$key, callable \$callback, ?float \$beta, array &\$metadata = null)
    {
        if (0 > \$beta = \$beta ?? 1.0) {
            throw new InvalidArgumentException(sprintf('Argument \"\$beta\" provided to \"%s::get()\" must be a positive number, %f given.', static::class, \$beta));
        }

        static \$setMetadata;

        \$setMetadata = \$setMetadata ?? \\Closure::bind(
            static function (CacheItem \$item, float \$startTime, ?array &\$metadata) {
                if (\$item->expiry > \$endTime = microtime(true)) {
                    \$item->newMetadata[CacheItem::METADATA_EXPIRY] = \$metadata[CacheItem::METADATA_EXPIRY] = \$item->expiry;
                    \$item->newMetadata[CacheItem::METADATA_CTIME] = \$metadata[CacheItem::METADATA_CTIME] = (int) ceil(1000 * (\$endTime - \$startTime));
                } else {
                    unset(\$metadata[CacheItem::METADATA_EXPIRY], \$metadata[CacheItem::METADATA_CTIME]);
                }
            },
            null,
            CacheItem::class
        );

        return \$this->contractsGet(\$pool, \$key, function (CacheItem \$item, bool &\$save) use (\$pool, \$callback, \$setMetadata, &\$metadata, \$key) {
            // don't wrap nor save recursive calls
            if (isset(\$this->computing[\$key])) {
                \$value = \$callback(\$item, \$save);
                \$save = false;

                return \$value;
            }

            \$this->computing[\$key] = \$key;
            \$startTime = microtime(true);

            try {
                \$value = (\$this->callbackWrapper)(\$callback, \$item, \$save, \$pool, function (CacheItem \$item) use (\$setMetadata, \$startTime, &\$metadata) {
                    \$setMetadata(\$item, \$startTime, \$metadata);
                }, \$this->logger ?? null);
                \$setMetadata(\$item, \$startTime, \$metadata);

                return \$value;
            } finally {
                unset(\$this->computing[\$key]);
            }
        }, \$beta, \$metadata, \$this->logger ?? null);
    }
}
", "@app/vendor/symfony/cache/Traits/ContractsTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\Traits\\ContractsTrait.php");
    }
}
