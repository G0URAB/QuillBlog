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

/* @app/vendor/symfony/finder/Iterator/CustomFilterIterator.php */
class __TwigTemplate_b0ef16fda79c390cd2624f7162669ccd359a49ece8c7cebabb73ac4d1c1e7975 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/finder/Iterator/CustomFilterIterator.php"));

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

namespace Symfony\\Component\\Finder\\Iterator;

/**
 * CustomFilterIterator filters files by applying anonymous functions.
 *
 * The anonymous function receives a \\SplFileInfo and must return false
 * to remove files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CustomFilterIterator extends \\FilterIterator
{
    private \$filters = [];

    /**
     * @param \\Iterator  \$iterator The Iterator to filter
     * @param callable[] \$filters  An array of PHP callbacks
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(\\Iterator \$iterator, array \$filters)
    {
        foreach (\$filters as \$filter) {
            if (!\\is_callable(\$filter)) {
                throw new \\InvalidArgumentException('Invalid PHP callback.');
            }
        }
        \$this->filters = \$filters;

        parent::__construct(\$iterator);
    }

    /**
     * Filters the iterator values.
     *
     * @return bool true if the value should be kept, false otherwise
     */
    public function accept()
    {
        \$fileinfo = \$this->current();

        foreach (\$this->filters as \$filter) {
            if (false === \$filter(\$fileinfo)) {
                return false;
            }
        }

        return true;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/finder/Iterator/CustomFilterIterator.php";
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

namespace Symfony\\Component\\Finder\\Iterator;

/**
 * CustomFilterIterator filters files by applying anonymous functions.
 *
 * The anonymous function receives a \\SplFileInfo and must return false
 * to remove files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CustomFilterIterator extends \\FilterIterator
{
    private \$filters = [];

    /**
     * @param \\Iterator  \$iterator The Iterator to filter
     * @param callable[] \$filters  An array of PHP callbacks
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(\\Iterator \$iterator, array \$filters)
    {
        foreach (\$filters as \$filter) {
            if (!\\is_callable(\$filter)) {
                throw new \\InvalidArgumentException('Invalid PHP callback.');
            }
        }
        \$this->filters = \$filters;

        parent::__construct(\$iterator);
    }

    /**
     * Filters the iterator values.
     *
     * @return bool true if the value should be kept, false otherwise
     */
    public function accept()
    {
        \$fileinfo = \$this->current();

        foreach (\$this->filters as \$filter) {
            if (false === \$filter(\$fileinfo)) {
                return false;
            }
        }

        return true;
    }
}
", "@app/vendor/symfony/finder/Iterator/CustomFilterIterator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\finder\\Iterator\\CustomFilterIterator.php");
    }
}
