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

/* @app/vendor/symfony/service-contracts/Test/ServiceLocatorTest.php */
class __TwigTemplate_55d3d3ec7127f93b3c379d9e276e74f88c34960270cdd1c2bdc2a35c63fd0b7b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/service-contracts/Test/ServiceLocatorTest.php"));

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

namespace Symfony\\Contracts\\Service\\Test;

use PHPUnit\\Framework\\TestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Contracts\\Service\\ServiceLocatorTrait;

abstract class ServiceLocatorTest extends TestCase
{
    protected function getServiceLocator(array \$factories)
    {
        return new class(\$factories) implements ContainerInterface {
            use ServiceLocatorTrait;
        };
    }

    public function testHas()
    {
        \$locator = \$this->getServiceLocator([
            'foo' => function () { return 'bar'; },
            'bar' => function () { return 'baz'; },
            function () { return 'dummy'; },
        ]);

        \$this->assertTrue(\$locator->has('foo'));
        \$this->assertTrue(\$locator->has('bar'));
        \$this->assertFalse(\$locator->has('dummy'));
    }

    public function testGet()
    {
        \$locator = \$this->getServiceLocator([
            'foo' => function () { return 'bar'; },
            'bar' => function () { return 'baz'; },
        ]);

        \$this->assertSame('bar', \$locator->get('foo'));
        \$this->assertSame('baz', \$locator->get('bar'));
    }

    public function testGetDoesNotMemoize()
    {
        \$i = 0;
        \$locator = \$this->getServiceLocator([
            'foo' => function () use (&\$i) {
                ++\$i;

                return 'bar';
            },
        ]);

        \$this->assertSame('bar', \$locator->get('foo'));
        \$this->assertSame('bar', \$locator->get('foo'));
        \$this->assertSame(2, \$i);
    }

    public function testThrowsOnUndefinedInternalService()
    {
        if (!\$this->getExpectedException()) {
            \$this->expectException('Psr\\Container\\NotFoundExceptionInterface');
            \$this->expectExceptionMessage('The service \"foo\" has a dependency on a non-existent service \"bar\". This locator only knows about the \"foo\" service.');
        }
        \$locator = \$this->getServiceLocator([
            'foo' => function () use (&\$locator) { return \$locator->get('bar'); },
        ]);

        \$locator->get('foo');
    }

    public function testThrowsOnCircularReference()
    {
        \$this->expectException('Psr\\Container\\ContainerExceptionInterface');
        \$this->expectExceptionMessage('Circular reference detected for service \"bar\", path: \"bar -> baz -> bar\".');
        \$locator = \$this->getServiceLocator([
            'foo' => function () use (&\$locator) { return \$locator->get('bar'); },
            'bar' => function () use (&\$locator) { return \$locator->get('baz'); },
            'baz' => function () use (&\$locator) { return \$locator->get('bar'); },
        ]);

        \$locator->get('foo');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/service-contracts/Test/ServiceLocatorTest.php";
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

namespace Symfony\\Contracts\\Service\\Test;

use PHPUnit\\Framework\\TestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Contracts\\Service\\ServiceLocatorTrait;

abstract class ServiceLocatorTest extends TestCase
{
    protected function getServiceLocator(array \$factories)
    {
        return new class(\$factories) implements ContainerInterface {
            use ServiceLocatorTrait;
        };
    }

    public function testHas()
    {
        \$locator = \$this->getServiceLocator([
            'foo' => function () { return 'bar'; },
            'bar' => function () { return 'baz'; },
            function () { return 'dummy'; },
        ]);

        \$this->assertTrue(\$locator->has('foo'));
        \$this->assertTrue(\$locator->has('bar'));
        \$this->assertFalse(\$locator->has('dummy'));
    }

    public function testGet()
    {
        \$locator = \$this->getServiceLocator([
            'foo' => function () { return 'bar'; },
            'bar' => function () { return 'baz'; },
        ]);

        \$this->assertSame('bar', \$locator->get('foo'));
        \$this->assertSame('baz', \$locator->get('bar'));
    }

    public function testGetDoesNotMemoize()
    {
        \$i = 0;
        \$locator = \$this->getServiceLocator([
            'foo' => function () use (&\$i) {
                ++\$i;

                return 'bar';
            },
        ]);

        \$this->assertSame('bar', \$locator->get('foo'));
        \$this->assertSame('bar', \$locator->get('foo'));
        \$this->assertSame(2, \$i);
    }

    public function testThrowsOnUndefinedInternalService()
    {
        if (!\$this->getExpectedException()) {
            \$this->expectException('Psr\\Container\\NotFoundExceptionInterface');
            \$this->expectExceptionMessage('The service \"foo\" has a dependency on a non-existent service \"bar\". This locator only knows about the \"foo\" service.');
        }
        \$locator = \$this->getServiceLocator([
            'foo' => function () use (&\$locator) { return \$locator->get('bar'); },
        ]);

        \$locator->get('foo');
    }

    public function testThrowsOnCircularReference()
    {
        \$this->expectException('Psr\\Container\\ContainerExceptionInterface');
        \$this->expectExceptionMessage('Circular reference detected for service \"bar\", path: \"bar -> baz -> bar\".');
        \$locator = \$this->getServiceLocator([
            'foo' => function () use (&\$locator) { return \$locator->get('bar'); },
            'bar' => function () use (&\$locator) { return \$locator->get('baz'); },
            'baz' => function () use (&\$locator) { return \$locator->get('bar'); },
        ]);

        \$locator->get('foo');
    }
}
", "@app/vendor/symfony/service-contracts/Test/ServiceLocatorTest.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\service-contracts\\Test\\ServiceLocatorTest.php");
    }
}
