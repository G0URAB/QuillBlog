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

/* @app/vendor/twig/twig/src/Extension/StagingExtension.php */
class __TwigTemplate_448b205057dcaf0d2fae454bd6173a2ad6f895c56015a3e2ae0b3a54fba0bc94 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Extension/StagingExtension.php"));

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

namespace Twig\\Extension;

use Twig\\NodeVisitor\\NodeVisitorInterface;
use Twig\\TokenParser\\TokenParserInterface;
use Twig\\TwigFilter;
use Twig\\TwigFunction;
use Twig\\TwigTest;

/**
 * Used by \\Twig\\Environment as a staging area.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
final class StagingExtension extends AbstractExtension
{
    private \$functions = [];
    private \$filters = [];
    private \$visitors = [];
    private \$tokenParsers = [];
    private \$tests = [];

    public function addFunction(TwigFunction \$function): void
    {
        if (isset(\$this->functions[\$function->getName()])) {
            throw new \\LogicException(sprintf('Function \"%s\" is already registered.', \$function->getName()));
        }

        \$this->functions[\$function->getName()] = \$function;
    }

    public function getFunctions(): array
    {
        return \$this->functions;
    }

    public function addFilter(TwigFilter \$filter): void
    {
        if (isset(\$this->filters[\$filter->getName()])) {
            throw new \\LogicException(sprintf('Filter \"%s\" is already registered.', \$filter->getName()));
        }

        \$this->filters[\$filter->getName()] = \$filter;
    }

    public function getFilters(): array
    {
        return \$this->filters;
    }

    public function addNodeVisitor(NodeVisitorInterface \$visitor): void
    {
        \$this->visitors[] = \$visitor;
    }

    public function getNodeVisitors(): array
    {
        return \$this->visitors;
    }

    public function addTokenParser(TokenParserInterface \$parser): void
    {
        if (isset(\$this->tokenParsers[\$parser->getTag()])) {
            throw new \\LogicException(sprintf('Tag \"%s\" is already registered.', \$parser->getTag()));
        }

        \$this->tokenParsers[\$parser->getTag()] = \$parser;
    }

    public function getTokenParsers(): array
    {
        return \$this->tokenParsers;
    }

    public function addTest(TwigTest \$test): void
    {
        if (isset(\$this->tests[\$test->getName()])) {
            throw new \\LogicException(sprintf('Test \"%s\" is already registered.', \$test->getName()));
        }

        \$this->tests[\$test->getName()] = \$test;
    }

    public function getTests(): array
    {
        return \$this->tests;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Extension/StagingExtension.php";
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

namespace Twig\\Extension;

use Twig\\NodeVisitor\\NodeVisitorInterface;
use Twig\\TokenParser\\TokenParserInterface;
use Twig\\TwigFilter;
use Twig\\TwigFunction;
use Twig\\TwigTest;

/**
 * Used by \\Twig\\Environment as a staging area.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
final class StagingExtension extends AbstractExtension
{
    private \$functions = [];
    private \$filters = [];
    private \$visitors = [];
    private \$tokenParsers = [];
    private \$tests = [];

    public function addFunction(TwigFunction \$function): void
    {
        if (isset(\$this->functions[\$function->getName()])) {
            throw new \\LogicException(sprintf('Function \"%s\" is already registered.', \$function->getName()));
        }

        \$this->functions[\$function->getName()] = \$function;
    }

    public function getFunctions(): array
    {
        return \$this->functions;
    }

    public function addFilter(TwigFilter \$filter): void
    {
        if (isset(\$this->filters[\$filter->getName()])) {
            throw new \\LogicException(sprintf('Filter \"%s\" is already registered.', \$filter->getName()));
        }

        \$this->filters[\$filter->getName()] = \$filter;
    }

    public function getFilters(): array
    {
        return \$this->filters;
    }

    public function addNodeVisitor(NodeVisitorInterface \$visitor): void
    {
        \$this->visitors[] = \$visitor;
    }

    public function getNodeVisitors(): array
    {
        return \$this->visitors;
    }

    public function addTokenParser(TokenParserInterface \$parser): void
    {
        if (isset(\$this->tokenParsers[\$parser->getTag()])) {
            throw new \\LogicException(sprintf('Tag \"%s\" is already registered.', \$parser->getTag()));
        }

        \$this->tokenParsers[\$parser->getTag()] = \$parser;
    }

    public function getTokenParsers(): array
    {
        return \$this->tokenParsers;
    }

    public function addTest(TwigTest \$test): void
    {
        if (isset(\$this->tests[\$test->getName()])) {
            throw new \\LogicException(sprintf('Test \"%s\" is already registered.', \$test->getName()));
        }

        \$this->tests[\$test->getName()] = \$test;
    }

    public function getTests(): array
    {
        return \$this->tests;
    }
}
", "@app/vendor/twig/twig/src/Extension/StagingExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Extension\\StagingExtension.php");
    }
}
