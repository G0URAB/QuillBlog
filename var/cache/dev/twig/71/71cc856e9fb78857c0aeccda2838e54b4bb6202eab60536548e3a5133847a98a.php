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

/* @app/vendor/symfony/http-kernel/Controller/ArgumentResolver.php */
class __TwigTemplate_dc210b7c0b7dd82e389378697708e7d39a2175ec582801ba454f4a15a6920461 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Controller/ArgumentResolver.php"));

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

namespace Symfony\\Component\\HttpKernel\\Controller;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\DefaultValueResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestValueResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\SessionValueResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\VariadicValueResolver;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface;

/**
 * Responsible for resolving the arguments passed to an action.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class ArgumentResolver implements ArgumentResolverInterface
{
    private \$argumentMetadataFactory;

    /**
     * @var iterable|ArgumentValueResolverInterface[]
     */
    private \$argumentValueResolvers;

    public function __construct(ArgumentMetadataFactoryInterface \$argumentMetadataFactory = null, iterable \$argumentValueResolvers = [])
    {
        \$this->argumentMetadataFactory = \$argumentMetadataFactory ?: new ArgumentMetadataFactory();
        \$this->argumentValueResolvers = \$argumentValueResolvers ?: self::getDefaultArgumentValueResolvers();
    }

    /**
     * {@inheritdoc}
     */
    public function getArguments(Request \$request, callable \$controller): array
    {
        \$arguments = [];

        foreach (\$this->argumentMetadataFactory->createArgumentMetadata(\$controller) as \$metadata) {
            foreach (\$this->argumentValueResolvers as \$resolver) {
                if (!\$resolver->supports(\$request, \$metadata)) {
                    continue;
                }

                \$resolved = \$resolver->resolve(\$request, \$metadata);

                \$atLeastOne = false;
                foreach (\$resolved as \$append) {
                    \$atLeastOne = true;
                    \$arguments[] = \$append;
                }

                if (!\$atLeastOne) {
                    throw new \\InvalidArgumentException(sprintf('%s::resolve() must yield at least one value.', \\get_class(\$resolver)));
                }

                // continue to the next controller argument
                continue 2;
            }

            \$representative = \$controller;

            if (\\is_array(\$representative)) {
                \$representative = sprintf('%s::%s()', \\get_class(\$representative[0]), \$representative[1]);
            } elseif (\\is_object(\$representative)) {
                \$representative = \\get_class(\$representative);
            }

            throw new \\RuntimeException(sprintf('Controller \"%s\" requires that you provide a value for the \"\$%s\" argument. Either the argument is nullable and no null value has been provided, no default value has been provided or because there is a non optional argument after this one.', \$representative, \$metadata->getName()));
        }

        return \$arguments;
    }

    public static function getDefaultArgumentValueResolvers(): iterable
    {
        return [
            new RequestAttributeValueResolver(),
            new RequestValueResolver(),
            new SessionValueResolver(),
            new DefaultValueResolver(),
            new VariadicValueResolver(),
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Controller/ArgumentResolver.php";
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

namespace Symfony\\Component\\HttpKernel\\Controller;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\DefaultValueResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestValueResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\SessionValueResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\VariadicValueResolver;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface;

/**
 * Responsible for resolving the arguments passed to an action.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class ArgumentResolver implements ArgumentResolverInterface
{
    private \$argumentMetadataFactory;

    /**
     * @var iterable|ArgumentValueResolverInterface[]
     */
    private \$argumentValueResolvers;

    public function __construct(ArgumentMetadataFactoryInterface \$argumentMetadataFactory = null, iterable \$argumentValueResolvers = [])
    {
        \$this->argumentMetadataFactory = \$argumentMetadataFactory ?: new ArgumentMetadataFactory();
        \$this->argumentValueResolvers = \$argumentValueResolvers ?: self::getDefaultArgumentValueResolvers();
    }

    /**
     * {@inheritdoc}
     */
    public function getArguments(Request \$request, callable \$controller): array
    {
        \$arguments = [];

        foreach (\$this->argumentMetadataFactory->createArgumentMetadata(\$controller) as \$metadata) {
            foreach (\$this->argumentValueResolvers as \$resolver) {
                if (!\$resolver->supports(\$request, \$metadata)) {
                    continue;
                }

                \$resolved = \$resolver->resolve(\$request, \$metadata);

                \$atLeastOne = false;
                foreach (\$resolved as \$append) {
                    \$atLeastOne = true;
                    \$arguments[] = \$append;
                }

                if (!\$atLeastOne) {
                    throw new \\InvalidArgumentException(sprintf('%s::resolve() must yield at least one value.', \\get_class(\$resolver)));
                }

                // continue to the next controller argument
                continue 2;
            }

            \$representative = \$controller;

            if (\\is_array(\$representative)) {
                \$representative = sprintf('%s::%s()', \\get_class(\$representative[0]), \$representative[1]);
            } elseif (\\is_object(\$representative)) {
                \$representative = \\get_class(\$representative);
            }

            throw new \\RuntimeException(sprintf('Controller \"%s\" requires that you provide a value for the \"\$%s\" argument. Either the argument is nullable and no null value has been provided, no default value has been provided or because there is a non optional argument after this one.', \$representative, \$metadata->getName()));
        }

        return \$arguments;
    }

    public static function getDefaultArgumentValueResolvers(): iterable
    {
        return [
            new RequestAttributeValueResolver(),
            new RequestValueResolver(),
            new SessionValueResolver(),
            new DefaultValueResolver(),
            new VariadicValueResolver(),
        ];
    }
}
", "@app/vendor/symfony/http-kernel/Controller/ArgumentResolver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver.php");
    }
}
