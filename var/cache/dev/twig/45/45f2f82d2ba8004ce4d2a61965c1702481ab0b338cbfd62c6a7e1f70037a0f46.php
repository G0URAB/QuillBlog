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

/* @app/vendor/symfony/service-contracts/ServiceSubscriberTrait.php */
class __TwigTemplate_3c2358e85611e008afa4ac3514348d739b7776e54575363c58f1fa57fe48185f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/service-contracts/ServiceSubscriberTrait.php"));

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

namespace Symfony\\Contracts\\Service;

use Psr\\Container\\ContainerInterface;

/**
 * Implementation of ServiceSubscriberInterface that determines subscribed services from
 * private method return types. Service ids are available as \"ClassName::methodName\".
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
trait ServiceSubscriberTrait
{
    /** @var ContainerInterface */
    protected \$container;

    public static function getSubscribedServices(): array
    {
        static \$services;

        if (null !== \$services) {
            return \$services;
        }

        \$services = \\is_callable(['parent', __FUNCTION__]) ? parent::getSubscribedServices() : [];

        foreach ((new \\ReflectionClass(self::class))->getMethods() as \$method) {
            if (\$method->isStatic() || \$method->isAbstract() || \$method->isGenerator() || \$method->isInternal() || \$method->getNumberOfRequiredParameters()) {
                continue;
            }

            if (self::class === \$method->getDeclaringClass()->name && (\$returnType = \$method->getReturnType()) && !\$returnType->isBuiltin()) {
                \$services[self::class.'::'.\$method->name] = '?'.\$returnType->getName();
            }
        }

        return \$services;
    }

    /**
     * @required
     */
    public function setContainer(ContainerInterface \$container)
    {
        \$this->container = \$container;

        if (\\is_callable(['parent', __FUNCTION__])) {
            return parent::setContainer(\$container);
        }

        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/service-contracts/ServiceSubscriberTrait.php";
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

namespace Symfony\\Contracts\\Service;

use Psr\\Container\\ContainerInterface;

/**
 * Implementation of ServiceSubscriberInterface that determines subscribed services from
 * private method return types. Service ids are available as \"ClassName::methodName\".
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
trait ServiceSubscriberTrait
{
    /** @var ContainerInterface */
    protected \$container;

    public static function getSubscribedServices(): array
    {
        static \$services;

        if (null !== \$services) {
            return \$services;
        }

        \$services = \\is_callable(['parent', __FUNCTION__]) ? parent::getSubscribedServices() : [];

        foreach ((new \\ReflectionClass(self::class))->getMethods() as \$method) {
            if (\$method->isStatic() || \$method->isAbstract() || \$method->isGenerator() || \$method->isInternal() || \$method->getNumberOfRequiredParameters()) {
                continue;
            }

            if (self::class === \$method->getDeclaringClass()->name && (\$returnType = \$method->getReturnType()) && !\$returnType->isBuiltin()) {
                \$services[self::class.'::'.\$method->name] = '?'.\$returnType->getName();
            }
        }

        return \$services;
    }

    /**
     * @required
     */
    public function setContainer(ContainerInterface \$container)
    {
        \$this->container = \$container;

        if (\\is_callable(['parent', __FUNCTION__])) {
            return parent::setContainer(\$container);
        }

        return null;
    }
}
", "@app/vendor/symfony/service-contracts/ServiceSubscriberTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\service-contracts\\ServiceSubscriberTrait.php");
    }
}
