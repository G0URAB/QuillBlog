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

/* @app/vendor/symfony/console/Formatter/OutputFormatterStyleStack.php */
class __TwigTemplate_4c775949fb970c749ea5d9f629c83b447f06510b50b23dea1bcb771296deebd9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Formatter/OutputFormatterStyleStack.php"));

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

namespace Symfony\\Component\\Console\\Formatter;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class OutputFormatterStyleStack implements ResetInterface
{
    /**
     * @var OutputFormatterStyleInterface[]
     */
    private \$styles;

    private \$emptyStyle;

    public function __construct(OutputFormatterStyleInterface \$emptyStyle = null)
    {
        \$this->emptyStyle = \$emptyStyle ?: new OutputFormatterStyle();
        \$this->reset();
    }

    /**
     * Resets stack (ie. empty internal arrays).
     */
    public function reset()
    {
        \$this->styles = [];
    }

    /**
     * Pushes a style in the stack.
     */
    public function push(OutputFormatterStyleInterface \$style)
    {
        \$this->styles[] = \$style;
    }

    /**
     * Pops a style from the stack.
     *
     * @return OutputFormatterStyleInterface
     *
     * @throws InvalidArgumentException When style tags incorrectly nested
     */
    public function pop(OutputFormatterStyleInterface \$style = null)
    {
        if (empty(\$this->styles)) {
            return \$this->emptyStyle;
        }

        if (null === \$style) {
            return array_pop(\$this->styles);
        }

        foreach (array_reverse(\$this->styles, true) as \$index => \$stackedStyle) {
            if (\$style->apply('') === \$stackedStyle->apply('')) {
                \$this->styles = \\array_slice(\$this->styles, 0, \$index);

                return \$stackedStyle;
            }
        }

        throw new InvalidArgumentException('Incorrectly nested style tag found.');
    }

    /**
     * Computes current style with stacks top codes.
     *
     * @return OutputFormatterStyle
     */
    public function getCurrent()
    {
        if (empty(\$this->styles)) {
            return \$this->emptyStyle;
        }

        return \$this->styles[\\count(\$this->styles) - 1];
    }

    /**
     * @return \$this
     */
    public function setEmptyStyle(OutputFormatterStyleInterface \$emptyStyle)
    {
        \$this->emptyStyle = \$emptyStyle;

        return \$this;
    }

    /**
     * @return OutputFormatterStyleInterface
     */
    public function getEmptyStyle()
    {
        return \$this->emptyStyle;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Formatter/OutputFormatterStyleStack.php";
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

namespace Symfony\\Component\\Console\\Formatter;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class OutputFormatterStyleStack implements ResetInterface
{
    /**
     * @var OutputFormatterStyleInterface[]
     */
    private \$styles;

    private \$emptyStyle;

    public function __construct(OutputFormatterStyleInterface \$emptyStyle = null)
    {
        \$this->emptyStyle = \$emptyStyle ?: new OutputFormatterStyle();
        \$this->reset();
    }

    /**
     * Resets stack (ie. empty internal arrays).
     */
    public function reset()
    {
        \$this->styles = [];
    }

    /**
     * Pushes a style in the stack.
     */
    public function push(OutputFormatterStyleInterface \$style)
    {
        \$this->styles[] = \$style;
    }

    /**
     * Pops a style from the stack.
     *
     * @return OutputFormatterStyleInterface
     *
     * @throws InvalidArgumentException When style tags incorrectly nested
     */
    public function pop(OutputFormatterStyleInterface \$style = null)
    {
        if (empty(\$this->styles)) {
            return \$this->emptyStyle;
        }

        if (null === \$style) {
            return array_pop(\$this->styles);
        }

        foreach (array_reverse(\$this->styles, true) as \$index => \$stackedStyle) {
            if (\$style->apply('') === \$stackedStyle->apply('')) {
                \$this->styles = \\array_slice(\$this->styles, 0, \$index);

                return \$stackedStyle;
            }
        }

        throw new InvalidArgumentException('Incorrectly nested style tag found.');
    }

    /**
     * Computes current style with stacks top codes.
     *
     * @return OutputFormatterStyle
     */
    public function getCurrent()
    {
        if (empty(\$this->styles)) {
            return \$this->emptyStyle;
        }

        return \$this->styles[\\count(\$this->styles) - 1];
    }

    /**
     * @return \$this
     */
    public function setEmptyStyle(OutputFormatterStyleInterface \$emptyStyle)
    {
        \$this->emptyStyle = \$emptyStyle;

        return \$this;
    }

    /**
     * @return OutputFormatterStyleInterface
     */
    public function getEmptyStyle()
    {
        return \$this->emptyStyle;
    }
}
", "@app/vendor/symfony/console/Formatter/OutputFormatterStyleStack.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Formatter\\OutputFormatterStyleStack.php");
    }
}
