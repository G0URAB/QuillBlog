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

/* @app/vendor/symfony/config/Resource/ReflectionClassResource.php */
class __TwigTemplate_109384edf88bab68dd37897f2bc3f84bf0e729c0aec6e755df073185ec3c0aef extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Resource/ReflectionClassResource.php"));

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

namespace Symfony\\Component\\Config\\Resource;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Messenger\\Handler\\MessageSubscriberInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class ReflectionClassResource implements SelfCheckingResourceInterface
{
    private \$files = [];
    private \$className;
    private \$classReflector;
    private \$excludedVendors = [];
    private \$hash;

    public function __construct(\\ReflectionClass \$classReflector, array \$excludedVendors = [])
    {
        \$this->className = \$classReflector->name;
        \$this->classReflector = \$classReflector;
        \$this->excludedVendors = \$excludedVendors;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(int \$timestamp): bool
    {
        if (null === \$this->hash) {
            \$this->hash = \$this->computeHash();
            \$this->loadFiles(\$this->classReflector);
        }

        foreach (\$this->files as \$file => \$v) {
            if (false === \$filemtime = @filemtime(\$file)) {
                return false;
            }

            if (\$filemtime > \$timestamp) {
                return \$this->hash === \$this->computeHash();
            }
        }

        return true;
    }

    public function __toString(): string
    {
        return 'reflection.'.\$this->className;
    }

    /**
     * @internal
     */
    public function __sleep(): array
    {
        if (null === \$this->hash) {
            \$this->hash = \$this->computeHash();
            \$this->loadFiles(\$this->classReflector);
        }

        return ['files', 'className', 'hash'];
    }

    private function loadFiles(\\ReflectionClass \$class)
    {
        foreach (\$class->getInterfaces() as \$v) {
            \$this->loadFiles(\$v);
        }
        do {
            \$file = \$class->getFileName();
            if (false !== \$file && file_exists(\$file)) {
                foreach (\$this->excludedVendors as \$vendor) {
                    if (0 === strpos(\$file, \$vendor) && false !== strpbrk(substr(\$file, \\strlen(\$vendor), 1), '/'.\\DIRECTORY_SEPARATOR)) {
                        \$file = false;
                        break;
                    }
                }
                if (\$file) {
                    \$this->files[\$file] = null;
                }
            }
            foreach (\$class->getTraits() as \$v) {
                \$this->loadFiles(\$v);
            }
        } while (\$class = \$class->getParentClass());
    }

    private function computeHash(): string
    {
        if (null === \$this->classReflector) {
            try {
                \$this->classReflector = new \\ReflectionClass(\$this->className);
            } catch (\\ReflectionException \$e) {
                // the class does not exist anymore
                return false;
            }
        }
        \$hash = hash_init('md5');

        foreach (\$this->generateSignature(\$this->classReflector) as \$info) {
            hash_update(\$hash, \$info);
        }

        return hash_final(\$hash);
    }

    private function generateSignature(\\ReflectionClass \$class): iterable
    {
        yield \$class->getDocComment();
        yield (int) \$class->isFinal();
        yield (int) \$class->isAbstract();

        if (\$class->isTrait()) {
            yield print_r(class_uses(\$class->name), true);
        } else {
            yield print_r(class_parents(\$class->name), true);
            yield print_r(class_implements(\$class->name), true);
            yield print_r(\$class->getConstants(), true);
        }

        if (!\$class->isInterface()) {
            \$defaults = \$class->getDefaultProperties();

            foreach (\$class->getProperties(\\ReflectionProperty::IS_PUBLIC | \\ReflectionProperty::IS_PROTECTED) as \$p) {
                yield \$p->getDocComment().\$p;
                yield print_r(isset(\$defaults[\$p->name]) && !\\is_object(\$defaults[\$p->name]) ? \$defaults[\$p->name] : null, true);
            }
        }

        foreach (\$class->getMethods(\\ReflectionMethod::IS_PUBLIC | \\ReflectionMethod::IS_PROTECTED) as \$m) {
            \$defaults = [];
            \$parametersWithUndefinedConstants = [];
            foreach (\$m->getParameters() as \$p) {
                if (!\$p->isDefaultValueAvailable()) {
                    \$defaults[\$p->name] = null;

                    continue;
                }

                if (!\$p->isDefaultValueConstant() || \\defined(\$p->getDefaultValueConstantName())) {
                    \$defaults[\$p->name] = \$p->getDefaultValue();

                    continue;
                }

                \$defaults[\$p->name] = \$p->getDefaultValueConstantName();
                \$parametersWithUndefinedConstants[\$p->name] = true;
            }

            if (!\$parametersWithUndefinedConstants) {
                yield preg_replace('/^  @@.*/m', '', \$m);
            } else {
                \$stack = [
                    \$m->getDocComment(),
                    \$m->getName(),
                    \$m->isAbstract(),
                    \$m->isFinal(),
                    \$m->isStatic(),
                    \$m->isPublic(),
                    \$m->isPrivate(),
                    \$m->isProtected(),
                    \$m->returnsReference(),
                    \$m->hasReturnType() ? \$m->getReturnType()->getName() : '',
                ];

                foreach (\$m->getParameters() as \$p) {
                    if (!isset(\$parametersWithUndefinedConstants[\$p->name])) {
                        \$stack[] = (string) \$p;
                    } else {
                        \$stack[] = \$p->isOptional();
                        \$stack[] = \$p->hasType() ? \$p->getType()->getName() : '';
                        \$stack[] = \$p->isPassedByReference();
                        \$stack[] = \$p->isVariadic();
                        \$stack[] = \$p->getName();
                    }
                }

                yield implode(',', \$stack);
            }

            yield print_r(\$defaults, true);
        }

        if (\$class->isAbstract() || \$class->isInterface() || \$class->isTrait()) {
            return;
        }

        if (interface_exists(EventSubscriberInterface::class, false) && \$class->isSubclassOf(EventSubscriberInterface::class)) {
            yield EventSubscriberInterface::class;
            yield print_r(\$class->name::getSubscribedEvents(), true);
        }

        if (interface_exists(MessageSubscriberInterface::class, false) && \$class->isSubclassOf(MessageSubscriberInterface::class)) {
            yield MessageSubscriberInterface::class;
            foreach (\$class->name::getHandledMessages() as \$key => \$value) {
                yield \$key.print_r(\$value, true);
            }
        }

        if (interface_exists(ServiceSubscriberInterface::class, false) && \$class->isSubclassOf(ServiceSubscriberInterface::class)) {
            yield ServiceSubscriberInterface::class;
            yield print_r(\$class->name::getSubscribedServices(), true);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Resource/ReflectionClassResource.php";
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

namespace Symfony\\Component\\Config\\Resource;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Messenger\\Handler\\MessageSubscriberInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class ReflectionClassResource implements SelfCheckingResourceInterface
{
    private \$files = [];
    private \$className;
    private \$classReflector;
    private \$excludedVendors = [];
    private \$hash;

    public function __construct(\\ReflectionClass \$classReflector, array \$excludedVendors = [])
    {
        \$this->className = \$classReflector->name;
        \$this->classReflector = \$classReflector;
        \$this->excludedVendors = \$excludedVendors;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(int \$timestamp): bool
    {
        if (null === \$this->hash) {
            \$this->hash = \$this->computeHash();
            \$this->loadFiles(\$this->classReflector);
        }

        foreach (\$this->files as \$file => \$v) {
            if (false === \$filemtime = @filemtime(\$file)) {
                return false;
            }

            if (\$filemtime > \$timestamp) {
                return \$this->hash === \$this->computeHash();
            }
        }

        return true;
    }

    public function __toString(): string
    {
        return 'reflection.'.\$this->className;
    }

    /**
     * @internal
     */
    public function __sleep(): array
    {
        if (null === \$this->hash) {
            \$this->hash = \$this->computeHash();
            \$this->loadFiles(\$this->classReflector);
        }

        return ['files', 'className', 'hash'];
    }

    private function loadFiles(\\ReflectionClass \$class)
    {
        foreach (\$class->getInterfaces() as \$v) {
            \$this->loadFiles(\$v);
        }
        do {
            \$file = \$class->getFileName();
            if (false !== \$file && file_exists(\$file)) {
                foreach (\$this->excludedVendors as \$vendor) {
                    if (0 === strpos(\$file, \$vendor) && false !== strpbrk(substr(\$file, \\strlen(\$vendor), 1), '/'.\\DIRECTORY_SEPARATOR)) {
                        \$file = false;
                        break;
                    }
                }
                if (\$file) {
                    \$this->files[\$file] = null;
                }
            }
            foreach (\$class->getTraits() as \$v) {
                \$this->loadFiles(\$v);
            }
        } while (\$class = \$class->getParentClass());
    }

    private function computeHash(): string
    {
        if (null === \$this->classReflector) {
            try {
                \$this->classReflector = new \\ReflectionClass(\$this->className);
            } catch (\\ReflectionException \$e) {
                // the class does not exist anymore
                return false;
            }
        }
        \$hash = hash_init('md5');

        foreach (\$this->generateSignature(\$this->classReflector) as \$info) {
            hash_update(\$hash, \$info);
        }

        return hash_final(\$hash);
    }

    private function generateSignature(\\ReflectionClass \$class): iterable
    {
        yield \$class->getDocComment();
        yield (int) \$class->isFinal();
        yield (int) \$class->isAbstract();

        if (\$class->isTrait()) {
            yield print_r(class_uses(\$class->name), true);
        } else {
            yield print_r(class_parents(\$class->name), true);
            yield print_r(class_implements(\$class->name), true);
            yield print_r(\$class->getConstants(), true);
        }

        if (!\$class->isInterface()) {
            \$defaults = \$class->getDefaultProperties();

            foreach (\$class->getProperties(\\ReflectionProperty::IS_PUBLIC | \\ReflectionProperty::IS_PROTECTED) as \$p) {
                yield \$p->getDocComment().\$p;
                yield print_r(isset(\$defaults[\$p->name]) && !\\is_object(\$defaults[\$p->name]) ? \$defaults[\$p->name] : null, true);
            }
        }

        foreach (\$class->getMethods(\\ReflectionMethod::IS_PUBLIC | \\ReflectionMethod::IS_PROTECTED) as \$m) {
            \$defaults = [];
            \$parametersWithUndefinedConstants = [];
            foreach (\$m->getParameters() as \$p) {
                if (!\$p->isDefaultValueAvailable()) {
                    \$defaults[\$p->name] = null;

                    continue;
                }

                if (!\$p->isDefaultValueConstant() || \\defined(\$p->getDefaultValueConstantName())) {
                    \$defaults[\$p->name] = \$p->getDefaultValue();

                    continue;
                }

                \$defaults[\$p->name] = \$p->getDefaultValueConstantName();
                \$parametersWithUndefinedConstants[\$p->name] = true;
            }

            if (!\$parametersWithUndefinedConstants) {
                yield preg_replace('/^  @@.*/m', '', \$m);
            } else {
                \$stack = [
                    \$m->getDocComment(),
                    \$m->getName(),
                    \$m->isAbstract(),
                    \$m->isFinal(),
                    \$m->isStatic(),
                    \$m->isPublic(),
                    \$m->isPrivate(),
                    \$m->isProtected(),
                    \$m->returnsReference(),
                    \$m->hasReturnType() ? \$m->getReturnType()->getName() : '',
                ];

                foreach (\$m->getParameters() as \$p) {
                    if (!isset(\$parametersWithUndefinedConstants[\$p->name])) {
                        \$stack[] = (string) \$p;
                    } else {
                        \$stack[] = \$p->isOptional();
                        \$stack[] = \$p->hasType() ? \$p->getType()->getName() : '';
                        \$stack[] = \$p->isPassedByReference();
                        \$stack[] = \$p->isVariadic();
                        \$stack[] = \$p->getName();
                    }
                }

                yield implode(',', \$stack);
            }

            yield print_r(\$defaults, true);
        }

        if (\$class->isAbstract() || \$class->isInterface() || \$class->isTrait()) {
            return;
        }

        if (interface_exists(EventSubscriberInterface::class, false) && \$class->isSubclassOf(EventSubscriberInterface::class)) {
            yield EventSubscriberInterface::class;
            yield print_r(\$class->name::getSubscribedEvents(), true);
        }

        if (interface_exists(MessageSubscriberInterface::class, false) && \$class->isSubclassOf(MessageSubscriberInterface::class)) {
            yield MessageSubscriberInterface::class;
            foreach (\$class->name::getHandledMessages() as \$key => \$value) {
                yield \$key.print_r(\$value, true);
            }
        }

        if (interface_exists(ServiceSubscriberInterface::class, false) && \$class->isSubclassOf(ServiceSubscriberInterface::class)) {
            yield ServiceSubscriberInterface::class;
            yield print_r(\$class->name::getSubscribedServices(), true);
        }
    }
}
", "@app/vendor/symfony/config/Resource/ReflectionClassResource.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Resource\\ReflectionClassResource.php");
    }
}
