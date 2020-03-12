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

/* @app/vendor/twig/twig/src/TwigTest.php */
class __TwigTemplate_dda11484d45e24565d9f42fe75a28f6a08352cc2e2b2a4c867c48376b2a913c4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TwigTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

use Twig\\Node\\Expression\\TestExpression;

/**
 * Represents a template test.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see https://twig.symfony.com/doc/templates.html#test-operator
 */
final class TwigTest
{
    private \$name;
    private \$callable;
    private \$options;
    private \$arguments = [];

    /**
     * @param callable|null \$callable A callable implementing the test. If null, you need to overwrite the \"node_class\" option to customize compilation.
     */
    public function __construct(string \$name, \$callable = null, array \$options = [])
    {
        \$this->name = \$name;
        \$this->callable = \$callable;
        \$this->options = array_merge([
            'is_variadic' => false,
            'node_class' => TestExpression::class,
            'deprecated' => false,
            'alternative' => null,
        ], \$options);
    }

    public function getName(): string
    {
        return \$this->name;
    }

    /**
     * Returns the callable to execute for this test.
     *
     * @return callable|null
     */
    public function getCallable()
    {
        return \$this->callable;
    }

    public function getNodeClass(): string
    {
        return \$this->options['node_class'];
    }

    public function setArguments(array \$arguments): void
    {
        \$this->arguments = \$arguments;
    }

    public function getArguments(): array
    {
        return \$this->arguments;
    }

    public function isVariadic(): bool
    {
        return (bool) \$this->options['is_variadic'];
    }

    public function isDeprecated(): bool
    {
        return (bool) \$this->options['deprecated'];
    }

    public function getDeprecatedVersion(): string
    {
        return \\is_bool(\$this->options['deprecated']) ? '' : \$this->options['deprecated'];
    }

    public function getAlternative(): ?string
    {
        return \$this->options['alternative'];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TwigTest.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

use Twig\\Node\\Expression\\TestExpression;

/**
 * Represents a template test.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see https://twig.symfony.com/doc/templates.html#test-operator
 */
final class TwigTest
{
    private \$name;
    private \$callable;
    private \$options;
    private \$arguments = [];

    /**
     * @param callable|null \$callable A callable implementing the test. If null, you need to overwrite the \"node_class\" option to customize compilation.
     */
    public function __construct(string \$name, \$callable = null, array \$options = [])
    {
        \$this->name = \$name;
        \$this->callable = \$callable;
        \$this->options = array_merge([
            'is_variadic' => false,
            'node_class' => TestExpression::class,
            'deprecated' => false,
            'alternative' => null,
        ], \$options);
    }

    public function getName(): string
    {
        return \$this->name;
    }

    /**
     * Returns the callable to execute for this test.
     *
     * @return callable|null
     */
    public function getCallable()
    {
        return \$this->callable;
    }

    public function getNodeClass(): string
    {
        return \$this->options['node_class'];
    }

    public function setArguments(array \$arguments): void
    {
        \$this->arguments = \$arguments;
    }

    public function getArguments(): array
    {
        return \$this->arguments;
    }

    public function isVariadic(): bool
    {
        return (bool) \$this->options['is_variadic'];
    }

    public function isDeprecated(): bool
    {
        return (bool) \$this->options['deprecated'];
    }

    public function getDeprecatedVersion(): string
    {
        return \\is_bool(\$this->options['deprecated']) ? '' : \$this->options['deprecated'];
    }

    public function getAlternative(): ?string
    {
        return \$this->options['alternative'];
    }
}
", "@app/vendor/twig/twig/src/TwigTest.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TwigTest.php");
    }
}
