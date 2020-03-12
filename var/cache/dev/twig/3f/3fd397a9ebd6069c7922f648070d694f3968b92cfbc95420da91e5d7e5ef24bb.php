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

/* @app/vendor/symfony/finder/Comparator/Comparator.php */
class __TwigTemplate_947ff58615d53a170ec462766527b8a649a77f7fea14720476005494ade421a3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/finder/Comparator/Comparator.php"));

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

namespace Symfony\\Component\\Finder\\Comparator;

/**
 * Comparator.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Comparator
{
    private \$target;
    private \$operator = '==';

    /**
     * Gets the target value.
     *
     * @return string The target value
     */
    public function getTarget()
    {
        return \$this->target;
    }

    public function setTarget(string \$target)
    {
        \$this->target = \$target;
    }

    /**
     * Gets the comparison operator.
     *
     * @return string The operator
     */
    public function getOperator()
    {
        return \$this->operator;
    }

    /**
     * Sets the comparison operator.
     *
     * @throws \\InvalidArgumentException
     */
    public function setOperator(string \$operator)
    {
        if ('' === \$operator) {
            \$operator = '==';
        }

        if (!\\in_array(\$operator, ['>', '<', '>=', '<=', '==', '!='])) {
            throw new \\InvalidArgumentException(sprintf('Invalid operator \"%s\".', \$operator));
        }

        \$this->operator = \$operator;
    }

    /**
     * Tests against the target.
     *
     * @param mixed \$test A test value
     *
     * @return bool
     */
    public function test(\$test)
    {
        switch (\$this->operator) {
            case '>':
                return \$test > \$this->target;
            case '>=':
                return \$test >= \$this->target;
            case '<':
                return \$test < \$this->target;
            case '<=':
                return \$test <= \$this->target;
            case '!=':
                return \$test != \$this->target;
        }

        return \$test == \$this->target;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/finder/Comparator/Comparator.php";
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

namespace Symfony\\Component\\Finder\\Comparator;

/**
 * Comparator.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Comparator
{
    private \$target;
    private \$operator = '==';

    /**
     * Gets the target value.
     *
     * @return string The target value
     */
    public function getTarget()
    {
        return \$this->target;
    }

    public function setTarget(string \$target)
    {
        \$this->target = \$target;
    }

    /**
     * Gets the comparison operator.
     *
     * @return string The operator
     */
    public function getOperator()
    {
        return \$this->operator;
    }

    /**
     * Sets the comparison operator.
     *
     * @throws \\InvalidArgumentException
     */
    public function setOperator(string \$operator)
    {
        if ('' === \$operator) {
            \$operator = '==';
        }

        if (!\\in_array(\$operator, ['>', '<', '>=', '<=', '==', '!='])) {
            throw new \\InvalidArgumentException(sprintf('Invalid operator \"%s\".', \$operator));
        }

        \$this->operator = \$operator;
    }

    /**
     * Tests against the target.
     *
     * @param mixed \$test A test value
     *
     * @return bool
     */
    public function test(\$test)
    {
        switch (\$this->operator) {
            case '>':
                return \$test > \$this->target;
            case '>=':
                return \$test >= \$this->target;
            case '<':
                return \$test < \$this->target;
            case '<=':
                return \$test <= \$this->target;
            case '!=':
                return \$test != \$this->target;
        }

        return \$test == \$this->target;
    }
}
", "@app/vendor/symfony/finder/Comparator/Comparator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\finder\\Comparator\\Comparator.php");
    }
}
