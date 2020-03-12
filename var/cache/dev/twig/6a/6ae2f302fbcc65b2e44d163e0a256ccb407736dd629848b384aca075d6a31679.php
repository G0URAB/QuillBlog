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

/* @app/vendor/symfony/dependency-injection/Compiler/PriorityTaggedServiceTrait.php */
class __TwigTemplate_523141cb8c71bbd2d3ccf30181fee8770ff139eaf7aee31530697c54531e2f85 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/PriorityTaggedServiceTrait.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Argument\\TaggedIteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\TypedReference;

/**
 * Trait that allows a generic method to find and sort service by priority option in the tag.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
trait PriorityTaggedServiceTrait
{
    /**
     * Finds all services with the given tag name and order them by their priority.
     *
     * The order of additions must be respected for services having the same priority,
     * and knowing that the \\SplPriorityQueue class does not respect the FIFO method,
     * we should not use that class.
     *
     * @see https://bugs.php.net/53710
     * @see https://bugs.php.net/60926
     *
     * @param string|TaggedIteratorArgument \$tagName
     *
     * @return Reference[]
     */
    private function findAndSortTaggedServices(\$tagName, ContainerBuilder \$container): array
    {
        \$indexAttribute = \$defaultIndexMethod = \$needsIndexes = \$defaultPriorityMethod = null;

        if (\$tagName instanceof TaggedIteratorArgument) {
            \$indexAttribute = \$tagName->getIndexAttribute();
            \$defaultIndexMethod = \$tagName->getDefaultIndexMethod();
            \$needsIndexes = \$tagName->needsIndexes();
            \$defaultPriorityMethod = \$tagName->getDefaultPriorityMethod();
            \$tagName = \$tagName->getTag();
        }

        \$services = [];

        foreach (\$container->findTaggedServiceIds(\$tagName, true) as \$serviceId => \$attributes) {
            \$class = \$r = null;

            \$defaultPriority = null;
            \$defaultIndex = null;

            foreach (\$attributes as \$attribute) {
                \$index = \$priority = null;

                if (isset(\$attribute['priority'])) {
                    \$priority = \$attribute['priority'];
                } elseif (null === \$defaultPriority && \$defaultPriorityMethod) {
                    \$class = \$container->getDefinition(\$serviceId)->getClass();
                    \$class = \$container->getParameterBag()->resolveValue(\$class) ?: null;

                    if ((\$r = (\$r ?? \$container->getReflectionClass(\$class))) && \$r->hasMethod(\$defaultPriorityMethod)) {
                        if (!(\$rm = \$r->getMethod(\$defaultPriorityMethod))->isStatic()) {
                            throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should be static: tag \"%s\" on service \"%s\".', \$class, \$defaultPriorityMethod, \$tagName, \$serviceId));
                        }

                        if (!\$rm->isPublic()) {
                            throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should be public: tag \"%s\" on service \"%s\".', \$class, \$defaultPriorityMethod, \$tagName, \$serviceId));
                        }

                        \$defaultPriority = \$rm->invoke(null);

                        if (!\\is_int(\$defaultPriority)) {
                            throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should return an integer, got %s: tag \"%s\" on service \"%s\".', \$class, \$defaultPriorityMethod, \\gettype(\$priority), \$tagName, \$serviceId));
                        }
                    }
                }

                \$priority = \$priority ?? \$defaultPriority ?? 0;

                if (null !== \$indexAttribute && isset(\$attribute[\$indexAttribute])) {
                    \$index = \$attribute[\$indexAttribute];
                } elseif (null === \$defaultIndex && null === \$indexAttribute && !\$needsIndexes) {
                    // With partially associative array, insertion to get next key is simpler.
                    \$services[\$priority][] = null;
                    end(\$services[\$priority]);
                    \$defaultIndex = key(\$services[\$priority]);
                } elseif (null === \$defaultIndex && \$defaultIndexMethod) {
                    \$class = \$container->getDefinition(\$serviceId)->getClass();
                    \$class = \$container->getParameterBag()->resolveValue(\$class) ?: null;

                    if ((\$r = (\$r ?? \$container->getReflectionClass(\$class))) && \$r->hasMethod(\$defaultIndexMethod)) {
                        if (!(\$rm = \$r->getMethod(\$defaultIndexMethod))->isStatic()) {
                            throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should be static: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \$tagName, \$serviceId, \$indexAttribute));
                        }

                        if (!\$rm->isPublic()) {
                            throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should be public: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \$tagName, \$serviceId, \$indexAttribute));
                        }

                        \$defaultIndex = \$rm->invoke(null);

                        if (!\\is_string(\$defaultIndex)) {
                            throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should return a string, got %s: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \\gettype(\$defaultIndex), \$tagName, \$serviceId, \$indexAttribute));
                        }
                    }

                    \$defaultIndex = \$defaultIndex ?? \$serviceId;
                }

                \$index = \$index ?? \$defaultIndex;

                \$reference = null;
                if (!\$class || 'stdClass' === \$class) {
                    \$reference = new Reference(\$serviceId);
                } elseif (\$index === \$serviceId) {
                    \$reference = new TypedReference(\$serviceId, \$class);
                } else {
                    \$reference = new TypedReference(\$serviceId, \$class, ContainerBuilder::EXCEPTION_ON_INVALID_REFERENCE, \\is_string(\$index) ? \$index : null);
                }

                \$services[\$priority][\$index] = \$reference;
            }
        }

        if (\$services) {
            krsort(\$services);
            \$services = array_merge(...\$services);
        }

        return \$services;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/PriorityTaggedServiceTrait.php";
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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Argument\\TaggedIteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\TypedReference;

/**
 * Trait that allows a generic method to find and sort service by priority option in the tag.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
trait PriorityTaggedServiceTrait
{
    /**
     * Finds all services with the given tag name and order them by their priority.
     *
     * The order of additions must be respected for services having the same priority,
     * and knowing that the \\SplPriorityQueue class does not respect the FIFO method,
     * we should not use that class.
     *
     * @see https://bugs.php.net/53710
     * @see https://bugs.php.net/60926
     *
     * @param string|TaggedIteratorArgument \$tagName
     *
     * @return Reference[]
     */
    private function findAndSortTaggedServices(\$tagName, ContainerBuilder \$container): array
    {
        \$indexAttribute = \$defaultIndexMethod = \$needsIndexes = \$defaultPriorityMethod = null;

        if (\$tagName instanceof TaggedIteratorArgument) {
            \$indexAttribute = \$tagName->getIndexAttribute();
            \$defaultIndexMethod = \$tagName->getDefaultIndexMethod();
            \$needsIndexes = \$tagName->needsIndexes();
            \$defaultPriorityMethod = \$tagName->getDefaultPriorityMethod();
            \$tagName = \$tagName->getTag();
        }

        \$services = [];

        foreach (\$container->findTaggedServiceIds(\$tagName, true) as \$serviceId => \$attributes) {
            \$class = \$r = null;

            \$defaultPriority = null;
            \$defaultIndex = null;

            foreach (\$attributes as \$attribute) {
                \$index = \$priority = null;

                if (isset(\$attribute['priority'])) {
                    \$priority = \$attribute['priority'];
                } elseif (null === \$defaultPriority && \$defaultPriorityMethod) {
                    \$class = \$container->getDefinition(\$serviceId)->getClass();
                    \$class = \$container->getParameterBag()->resolveValue(\$class) ?: null;

                    if ((\$r = (\$r ?? \$container->getReflectionClass(\$class))) && \$r->hasMethod(\$defaultPriorityMethod)) {
                        if (!(\$rm = \$r->getMethod(\$defaultPriorityMethod))->isStatic()) {
                            throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should be static: tag \"%s\" on service \"%s\".', \$class, \$defaultPriorityMethod, \$tagName, \$serviceId));
                        }

                        if (!\$rm->isPublic()) {
                            throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should be public: tag \"%s\" on service \"%s\".', \$class, \$defaultPriorityMethod, \$tagName, \$serviceId));
                        }

                        \$defaultPriority = \$rm->invoke(null);

                        if (!\\is_int(\$defaultPriority)) {
                            throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should return an integer, got %s: tag \"%s\" on service \"%s\".', \$class, \$defaultPriorityMethod, \\gettype(\$priority), \$tagName, \$serviceId));
                        }
                    }
                }

                \$priority = \$priority ?? \$defaultPriority ?? 0;

                if (null !== \$indexAttribute && isset(\$attribute[\$indexAttribute])) {
                    \$index = \$attribute[\$indexAttribute];
                } elseif (null === \$defaultIndex && null === \$indexAttribute && !\$needsIndexes) {
                    // With partially associative array, insertion to get next key is simpler.
                    \$services[\$priority][] = null;
                    end(\$services[\$priority]);
                    \$defaultIndex = key(\$services[\$priority]);
                } elseif (null === \$defaultIndex && \$defaultIndexMethod) {
                    \$class = \$container->getDefinition(\$serviceId)->getClass();
                    \$class = \$container->getParameterBag()->resolveValue(\$class) ?: null;

                    if ((\$r = (\$r ?? \$container->getReflectionClass(\$class))) && \$r->hasMethod(\$defaultIndexMethod)) {
                        if (!(\$rm = \$r->getMethod(\$defaultIndexMethod))->isStatic()) {
                            throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should be static: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \$tagName, \$serviceId, \$indexAttribute));
                        }

                        if (!\$rm->isPublic()) {
                            throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should be public: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \$tagName, \$serviceId, \$indexAttribute));
                        }

                        \$defaultIndex = \$rm->invoke(null);

                        if (!\\is_string(\$defaultIndex)) {
                            throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should return a string, got %s: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \\gettype(\$defaultIndex), \$tagName, \$serviceId, \$indexAttribute));
                        }
                    }

                    \$defaultIndex = \$defaultIndex ?? \$serviceId;
                }

                \$index = \$index ?? \$defaultIndex;

                \$reference = null;
                if (!\$class || 'stdClass' === \$class) {
                    \$reference = new Reference(\$serviceId);
                } elseif (\$index === \$serviceId) {
                    \$reference = new TypedReference(\$serviceId, \$class);
                } else {
                    \$reference = new TypedReference(\$serviceId, \$class, ContainerBuilder::EXCEPTION_ON_INVALID_REFERENCE, \\is_string(\$index) ? \$index : null);
                }

                \$services[\$priority][\$index] = \$reference;
            }
        }

        if (\$services) {
            krsort(\$services);
            \$services = array_merge(...\$services);
        }

        return \$services;
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/PriorityTaggedServiceTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\PriorityTaggedServiceTrait.php");
    }
}
