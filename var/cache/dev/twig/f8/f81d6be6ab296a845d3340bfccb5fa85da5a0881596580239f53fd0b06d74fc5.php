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

/* @app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Instantiator.php */
class __TwigTemplate_0296ba03f191cc36a48544c19c91e2494c4aef74c29af65ffce8da7a5a8912a9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Instantiator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Instantiator;

use ArrayIterator;
use Doctrine\\Instantiator\\Exception\\InvalidArgumentException;
use Doctrine\\Instantiator\\Exception\\UnexpectedValueException;
use Exception;
use ReflectionClass;
use ReflectionException;
use Serializable;
use function class_exists;
use function is_subclass_of;
use function restore_error_handler;
use function set_error_handler;
use function sprintf;
use function strlen;
use function unserialize;

/**
 * {@inheritDoc}
 */
final class Instantiator implements InstantiatorInterface
{
    /**
     * Markers used internally by PHP to define whether {@see \\unserialize} should invoke
     * the method {@see \\Serializable::unserialize()} when dealing with classes implementing
     * the {@see \\Serializable} interface.
     */
    public const SERIALIZATION_FORMAT_USE_UNSERIALIZER   = 'C';
    public const SERIALIZATION_FORMAT_AVOID_UNSERIALIZER = 'O';

    /**
     * Used to instantiate specific classes, indexed by class name.
     *
     * @var callable[]
     */
    private static \$cachedInstantiators = [];

    /**
     * Array of objects that can directly be cloned, indexed by class name.
     *
     * @var object[]
     */
    private static \$cachedCloneables = [];

    /**
     * {@inheritDoc}
     */
    public function instantiate(\$className)
    {
        if (isset(self::\$cachedCloneables[\$className])) {
            return clone self::\$cachedCloneables[\$className];
        }

        if (isset(self::\$cachedInstantiators[\$className])) {
            \$factory = self::\$cachedInstantiators[\$className];

            return \$factory();
        }

        return \$this->buildAndCacheFromFactory(\$className);
    }

    /**
     * Builds the requested object and caches it in static properties for performance
     *
     * @return object
     */
    private function buildAndCacheFromFactory(string \$className)
    {
        \$factory  = self::\$cachedInstantiators[\$className] = \$this->buildFactory(\$className);
        \$instance = \$factory();

        if (\$this->isSafeToClone(new ReflectionClass(\$instance))) {
            self::\$cachedCloneables[\$className] = clone \$instance;
        }

        return \$instance;
    }

    /**
     * Builds a callable capable of instantiating the given \$className without
     * invoking its constructor.
     *
     * @throws InvalidArgumentException
     * @throws UnexpectedValueException
     * @throws ReflectionException
     */
    private function buildFactory(string \$className) : callable
    {
        \$reflectionClass = \$this->getReflectionClass(\$className);

        if (\$this->isInstantiableViaReflection(\$reflectionClass)) {
            return [\$reflectionClass, 'newInstanceWithoutConstructor'];
        }

        \$serializedString = sprintf(
            '%s:%d:\"%s\":0:{}',
            is_subclass_of(\$className, Serializable::class) ? self::SERIALIZATION_FORMAT_USE_UNSERIALIZER : self::SERIALIZATION_FORMAT_AVOID_UNSERIALIZER,
            strlen(\$className),
            \$className
        );

        \$this->checkIfUnSerializationIsSupported(\$reflectionClass, \$serializedString);

        return static function () use (\$serializedString) {
            return unserialize(\$serializedString);
        };
    }

    /**
     * @throws InvalidArgumentException
     * @throws ReflectionException
     */
    private function getReflectionClass(string \$className) : ReflectionClass
    {
        if (! class_exists(\$className)) {
            throw InvalidArgumentException::fromNonExistingClass(\$className);
        }

        \$reflection = new ReflectionClass(\$className);

        if (\$reflection->isAbstract()) {
            throw InvalidArgumentException::fromAbstractClass(\$reflection);
        }

        return \$reflection;
    }

    /**
     * @throws UnexpectedValueException
     */
    private function checkIfUnSerializationIsSupported(ReflectionClass \$reflectionClass, string \$serializedString) : void
    {
        set_error_handler(static function (int \$code, string \$message, string \$file, int \$line) use (\$reflectionClass, &\$error) : bool {
            \$error = UnexpectedValueException::fromUncleanUnSerialization(
                \$reflectionClass,
                \$message,
                \$code,
                \$file,
                \$line
            );

            return true;
        });

        try {
            \$this->attemptInstantiationViaUnSerialization(\$reflectionClass, \$serializedString);
        } finally {
            restore_error_handler();
        }

        if (\$error) {
            throw \$error;
        }
    }

    /**
     * @throws UnexpectedValueException
     */
    private function attemptInstantiationViaUnSerialization(ReflectionClass \$reflectionClass, string \$serializedString) : void
    {
        try {
            unserialize(\$serializedString);
        } catch (Exception \$exception) {
            throw UnexpectedValueException::fromSerializationTriggeredException(\$reflectionClass, \$exception);
        }
    }

    private function isInstantiableViaReflection(ReflectionClass \$reflectionClass) : bool
    {
        return ! (\$this->hasInternalAncestors(\$reflectionClass) && \$reflectionClass->isFinal());
    }

    /**
     * Verifies whether the given class is to be considered internal
     */
    private function hasInternalAncestors(ReflectionClass \$reflectionClass) : bool
    {
        do {
            if (\$reflectionClass->isInternal()) {
                return true;
            }

            \$reflectionClass = \$reflectionClass->getParentClass();
        } while (\$reflectionClass);

        return false;
    }

    /**
     * Checks if a class is cloneable
     *
     * Classes implementing `__clone` cannot be safely cloned, as that may cause side-effects.
     */
    private function isSafeToClone(ReflectionClass \$reflection) : bool
    {
        return \$reflection->isCloneable()
            && ! \$reflection->hasMethod('__clone')
            && ! \$reflection->isSubclassOf(ArrayIterator::class);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Instantiator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Instantiator;

use ArrayIterator;
use Doctrine\\Instantiator\\Exception\\InvalidArgumentException;
use Doctrine\\Instantiator\\Exception\\UnexpectedValueException;
use Exception;
use ReflectionClass;
use ReflectionException;
use Serializable;
use function class_exists;
use function is_subclass_of;
use function restore_error_handler;
use function set_error_handler;
use function sprintf;
use function strlen;
use function unserialize;

/**
 * {@inheritDoc}
 */
final class Instantiator implements InstantiatorInterface
{
    /**
     * Markers used internally by PHP to define whether {@see \\unserialize} should invoke
     * the method {@see \\Serializable::unserialize()} when dealing with classes implementing
     * the {@see \\Serializable} interface.
     */
    public const SERIALIZATION_FORMAT_USE_UNSERIALIZER   = 'C';
    public const SERIALIZATION_FORMAT_AVOID_UNSERIALIZER = 'O';

    /**
     * Used to instantiate specific classes, indexed by class name.
     *
     * @var callable[]
     */
    private static \$cachedInstantiators = [];

    /**
     * Array of objects that can directly be cloned, indexed by class name.
     *
     * @var object[]
     */
    private static \$cachedCloneables = [];

    /**
     * {@inheritDoc}
     */
    public function instantiate(\$className)
    {
        if (isset(self::\$cachedCloneables[\$className])) {
            return clone self::\$cachedCloneables[\$className];
        }

        if (isset(self::\$cachedInstantiators[\$className])) {
            \$factory = self::\$cachedInstantiators[\$className];

            return \$factory();
        }

        return \$this->buildAndCacheFromFactory(\$className);
    }

    /**
     * Builds the requested object and caches it in static properties for performance
     *
     * @return object
     */
    private function buildAndCacheFromFactory(string \$className)
    {
        \$factory  = self::\$cachedInstantiators[\$className] = \$this->buildFactory(\$className);
        \$instance = \$factory();

        if (\$this->isSafeToClone(new ReflectionClass(\$instance))) {
            self::\$cachedCloneables[\$className] = clone \$instance;
        }

        return \$instance;
    }

    /**
     * Builds a callable capable of instantiating the given \$className without
     * invoking its constructor.
     *
     * @throws InvalidArgumentException
     * @throws UnexpectedValueException
     * @throws ReflectionException
     */
    private function buildFactory(string \$className) : callable
    {
        \$reflectionClass = \$this->getReflectionClass(\$className);

        if (\$this->isInstantiableViaReflection(\$reflectionClass)) {
            return [\$reflectionClass, 'newInstanceWithoutConstructor'];
        }

        \$serializedString = sprintf(
            '%s:%d:\"%s\":0:{}',
            is_subclass_of(\$className, Serializable::class) ? self::SERIALIZATION_FORMAT_USE_UNSERIALIZER : self::SERIALIZATION_FORMAT_AVOID_UNSERIALIZER,
            strlen(\$className),
            \$className
        );

        \$this->checkIfUnSerializationIsSupported(\$reflectionClass, \$serializedString);

        return static function () use (\$serializedString) {
            return unserialize(\$serializedString);
        };
    }

    /**
     * @throws InvalidArgumentException
     * @throws ReflectionException
     */
    private function getReflectionClass(string \$className) : ReflectionClass
    {
        if (! class_exists(\$className)) {
            throw InvalidArgumentException::fromNonExistingClass(\$className);
        }

        \$reflection = new ReflectionClass(\$className);

        if (\$reflection->isAbstract()) {
            throw InvalidArgumentException::fromAbstractClass(\$reflection);
        }

        return \$reflection;
    }

    /**
     * @throws UnexpectedValueException
     */
    private function checkIfUnSerializationIsSupported(ReflectionClass \$reflectionClass, string \$serializedString) : void
    {
        set_error_handler(static function (int \$code, string \$message, string \$file, int \$line) use (\$reflectionClass, &\$error) : bool {
            \$error = UnexpectedValueException::fromUncleanUnSerialization(
                \$reflectionClass,
                \$message,
                \$code,
                \$file,
                \$line
            );

            return true;
        });

        try {
            \$this->attemptInstantiationViaUnSerialization(\$reflectionClass, \$serializedString);
        } finally {
            restore_error_handler();
        }

        if (\$error) {
            throw \$error;
        }
    }

    /**
     * @throws UnexpectedValueException
     */
    private function attemptInstantiationViaUnSerialization(ReflectionClass \$reflectionClass, string \$serializedString) : void
    {
        try {
            unserialize(\$serializedString);
        } catch (Exception \$exception) {
            throw UnexpectedValueException::fromSerializationTriggeredException(\$reflectionClass, \$exception);
        }
    }

    private function isInstantiableViaReflection(ReflectionClass \$reflectionClass) : bool
    {
        return ! (\$this->hasInternalAncestors(\$reflectionClass) && \$reflectionClass->isFinal());
    }

    /**
     * Verifies whether the given class is to be considered internal
     */
    private function hasInternalAncestors(ReflectionClass \$reflectionClass) : bool
    {
        do {
            if (\$reflectionClass->isInternal()) {
                return true;
            }

            \$reflectionClass = \$reflectionClass->getParentClass();
        } while (\$reflectionClass);

        return false;
    }

    /**
     * Checks if a class is cloneable
     *
     * Classes implementing `__clone` cannot be safely cloned, as that may cause side-effects.
     */
    private function isSafeToClone(ReflectionClass \$reflection) : bool
    {
        return \$reflection->isCloneable()
            && ! \$reflection->hasMethod('__clone')
            && ! \$reflection->isSubclassOf(ArrayIterator::class);
    }
}
", "@app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Instantiator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\instantiator\\src\\Doctrine\\Instantiator\\Instantiator.php");
    }
}
