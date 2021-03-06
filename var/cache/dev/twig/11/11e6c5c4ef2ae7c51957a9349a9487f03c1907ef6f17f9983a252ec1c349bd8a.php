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

/* @app/vendor/twig/twig/src/TwigFilter.php */
class __TwigTemplate_d1cbfbf0d3eaf92187f8a9908a1651b27d9a7ded2d26b676602464405350d16d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TwigFilter.php"));

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

use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Node;

/**
 * Represents a template filter.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see https://twig.symfony.com/doc/templates.html#filters
 */
final class TwigFilter
{
    private \$name;
    private \$callable;
    private \$options;
    private \$arguments = [];

    /**
     * @param callable|null \$callable A callable implementing the filter. If null, you need to overwrite the \"node_class\" option to customize compilation.
     */
    public function __construct(string \$name, \$callable = null, array \$options = [])
    {
        \$this->name = \$name;
        \$this->callable = \$callable;
        \$this->options = array_merge([
            'needs_environment' => false,
            'needs_context' => false,
            'is_variadic' => false,
            'is_safe' => null,
            'is_safe_callback' => null,
            'pre_escape' => null,
            'preserves_safety' => null,
            'node_class' => FilterExpression::class,
            'deprecated' => false,
            'alternative' => null,
        ], \$options);
    }

    public function getName(): string
    {
        return \$this->name;
    }

    /**
     * Returns the callable to execute for this filter.
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

    public function needsEnvironment(): bool
    {
        return \$this->options['needs_environment'];
    }

    public function needsContext(): bool
    {
        return \$this->options['needs_context'];
    }

    public function getSafe(Node \$filterArgs): ?array
    {
        if (null !== \$this->options['is_safe']) {
            return \$this->options['is_safe'];
        }

        if (null !== \$this->options['is_safe_callback']) {
            return \$this->options['is_safe_callback'](\$filterArgs);
        }

        return null;
    }

    public function getPreservesSafety(): ?array
    {
        return \$this->options['preserves_safety'];
    }

    public function getPreEscape(): ?string
    {
        return \$this->options['pre_escape'];
    }

    public function isVariadic(): bool
    {
        return \$this->options['is_variadic'];
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
        return "@app/vendor/twig/twig/src/TwigFilter.php";
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

use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Node;

/**
 * Represents a template filter.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see https://twig.symfony.com/doc/templates.html#filters
 */
final class TwigFilter
{
    private \$name;
    private \$callable;
    private \$options;
    private \$arguments = [];

    /**
     * @param callable|null \$callable A callable implementing the filter. If null, you need to overwrite the \"node_class\" option to customize compilation.
     */
    public function __construct(string \$name, \$callable = null, array \$options = [])
    {
        \$this->name = \$name;
        \$this->callable = \$callable;
        \$this->options = array_merge([
            'needs_environment' => false,
            'needs_context' => false,
            'is_variadic' => false,
            'is_safe' => null,
            'is_safe_callback' => null,
            'pre_escape' => null,
            'preserves_safety' => null,
            'node_class' => FilterExpression::class,
            'deprecated' => false,
            'alternative' => null,
        ], \$options);
    }

    public function getName(): string
    {
        return \$this->name;
    }

    /**
     * Returns the callable to execute for this filter.
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

    public function needsEnvironment(): bool
    {
        return \$this->options['needs_environment'];
    }

    public function needsContext(): bool
    {
        return \$this->options['needs_context'];
    }

    public function getSafe(Node \$filterArgs): ?array
    {
        if (null !== \$this->options['is_safe']) {
            return \$this->options['is_safe'];
        }

        if (null !== \$this->options['is_safe_callback']) {
            return \$this->options['is_safe_callback'](\$filterArgs);
        }

        return null;
    }

    public function getPreservesSafety(): ?array
    {
        return \$this->options['preserves_safety'];
    }

    public function getPreEscape(): ?string
    {
        return \$this->options['pre_escape'];
    }

    public function isVariadic(): bool
    {
        return \$this->options['is_variadic'];
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
", "@app/vendor/twig/twig/src/TwigFilter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TwigFilter.php");
    }
}
