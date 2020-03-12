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

/* @app/vendor/symfony/cache/Marshaller/DefaultMarshaller.php */
class __TwigTemplate_6f2ac2f80e1286dfe3758d51c2e015c79dcd15356d1bacfc1a868fedbfc30538 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/Marshaller/DefaultMarshaller.php"));

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

namespace Symfony\\Component\\Cache\\Marshaller;

use Symfony\\Component\\Cache\\Exception\\CacheException;

/**
 * Serializes/unserializes values using igbinary_serialize() if available, serialize() otherwise.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DefaultMarshaller implements MarshallerInterface
{
    private \$useIgbinarySerialize = true;

    public function __construct(bool \$useIgbinarySerialize = null)
    {
        if (null === \$useIgbinarySerialize) {
            \$useIgbinarySerialize = \\extension_loaded('igbinary') && (\\PHP_VERSION_ID < 70400 || version_compare('3.1.0', phpversion('igbinary'), '<='));
        } elseif (\$useIgbinarySerialize && (!\\extension_loaded('igbinary') || (\\PHP_VERSION_ID >= 70400 && version_compare('3.1.0', phpversion('igbinary'), '>')))) {
            throw new CacheException(\\extension_loaded('igbinary') && \\PHP_VERSION_ID >= 70400 ? 'Please upgrade the \"igbinary\" PHP extension to v3.1 or higher.' : 'The \"igbinary\" PHP extension is not loaded.');
        }
        \$this->useIgbinarySerialize = \$useIgbinarySerialize;
    }

    /**
     * {@inheritdoc}
     */
    public function marshall(array \$values, ?array &\$failed): array
    {
        \$serialized = \$failed = [];

        foreach (\$values as \$id => \$value) {
            try {
                if (\$this->useIgbinarySerialize) {
                    \$serialized[\$id] = igbinary_serialize(\$value);
                } else {
                    \$serialized[\$id] = serialize(\$value);
                }
            } catch (\\Exception \$e) {
                \$failed[] = \$id;
            }
        }

        return \$serialized;
    }

    /**
     * {@inheritdoc}
     */
    public function unmarshall(string \$value)
    {
        if ('b:0;' === \$value) {
            return false;
        }
        if ('N;' === \$value) {
            return null;
        }
        static \$igbinaryNull;
        if (\$value === (\$igbinaryNull ?? \$igbinaryNull = \\extension_loaded('igbinary') && (\\PHP_VERSION_ID < 70400 || version_compare('3.1.0', phpversion('igbinary'), '<=')) ? igbinary_serialize(null) : false)) {
            return null;
        }
        \$unserializeCallbackHandler = ini_set('unserialize_callback_func', __CLASS__.'::handleUnserializeCallback');
        try {
            if (':' === (\$value[1] ?? ':')) {
                if (false !== \$value = unserialize(\$value)) {
                    return \$value;
                }
            } elseif (false === \$igbinaryNull) {
                throw new \\RuntimeException('Failed to unserialize values, did you forget to install the \"igbinary\" extension?');
            } elseif (null !== \$value = igbinary_unserialize(\$value)) {
                return \$value;
            }

            throw new \\DomainException(error_get_last() ? error_get_last()['message'] : 'Failed to unserialize values.');
        } catch (\\Error \$e) {
            throw new \\ErrorException(\$e->getMessage(), \$e->getCode(), E_ERROR, \$e->getFile(), \$e->getLine());
        } finally {
            ini_set('unserialize_callback_func', \$unserializeCallbackHandler);
        }
    }

    /**
     * @internal
     */
    public static function handleUnserializeCallback(string \$class)
    {
        throw new \\DomainException('Class not found: '.\$class);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/Marshaller/DefaultMarshaller.php";
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

namespace Symfony\\Component\\Cache\\Marshaller;

use Symfony\\Component\\Cache\\Exception\\CacheException;

/**
 * Serializes/unserializes values using igbinary_serialize() if available, serialize() otherwise.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DefaultMarshaller implements MarshallerInterface
{
    private \$useIgbinarySerialize = true;

    public function __construct(bool \$useIgbinarySerialize = null)
    {
        if (null === \$useIgbinarySerialize) {
            \$useIgbinarySerialize = \\extension_loaded('igbinary') && (\\PHP_VERSION_ID < 70400 || version_compare('3.1.0', phpversion('igbinary'), '<='));
        } elseif (\$useIgbinarySerialize && (!\\extension_loaded('igbinary') || (\\PHP_VERSION_ID >= 70400 && version_compare('3.1.0', phpversion('igbinary'), '>')))) {
            throw new CacheException(\\extension_loaded('igbinary') && \\PHP_VERSION_ID >= 70400 ? 'Please upgrade the \"igbinary\" PHP extension to v3.1 or higher.' : 'The \"igbinary\" PHP extension is not loaded.');
        }
        \$this->useIgbinarySerialize = \$useIgbinarySerialize;
    }

    /**
     * {@inheritdoc}
     */
    public function marshall(array \$values, ?array &\$failed): array
    {
        \$serialized = \$failed = [];

        foreach (\$values as \$id => \$value) {
            try {
                if (\$this->useIgbinarySerialize) {
                    \$serialized[\$id] = igbinary_serialize(\$value);
                } else {
                    \$serialized[\$id] = serialize(\$value);
                }
            } catch (\\Exception \$e) {
                \$failed[] = \$id;
            }
        }

        return \$serialized;
    }

    /**
     * {@inheritdoc}
     */
    public function unmarshall(string \$value)
    {
        if ('b:0;' === \$value) {
            return false;
        }
        if ('N;' === \$value) {
            return null;
        }
        static \$igbinaryNull;
        if (\$value === (\$igbinaryNull ?? \$igbinaryNull = \\extension_loaded('igbinary') && (\\PHP_VERSION_ID < 70400 || version_compare('3.1.0', phpversion('igbinary'), '<=')) ? igbinary_serialize(null) : false)) {
            return null;
        }
        \$unserializeCallbackHandler = ini_set('unserialize_callback_func', __CLASS__.'::handleUnserializeCallback');
        try {
            if (':' === (\$value[1] ?? ':')) {
                if (false !== \$value = unserialize(\$value)) {
                    return \$value;
                }
            } elseif (false === \$igbinaryNull) {
                throw new \\RuntimeException('Failed to unserialize values, did you forget to install the \"igbinary\" extension?');
            } elseif (null !== \$value = igbinary_unserialize(\$value)) {
                return \$value;
            }

            throw new \\DomainException(error_get_last() ? error_get_last()['message'] : 'Failed to unserialize values.');
        } catch (\\Error \$e) {
            throw new \\ErrorException(\$e->getMessage(), \$e->getCode(), E_ERROR, \$e->getFile(), \$e->getLine());
        } finally {
            ini_set('unserialize_callback_func', \$unserializeCallbackHandler);
        }
    }

    /**
     * @internal
     */
    public static function handleUnserializeCallback(string \$class)
    {
        throw new \\DomainException('Class not found: '.\$class);
    }
}
", "@app/vendor/symfony/cache/Marshaller/DefaultMarshaller.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\Marshaller\\DefaultMarshaller.php");
    }
}
