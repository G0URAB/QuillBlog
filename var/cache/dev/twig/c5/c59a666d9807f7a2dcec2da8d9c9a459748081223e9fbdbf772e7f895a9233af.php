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

/* @app/vendor/symfony/finder/Comparator/DateComparator.php */
class __TwigTemplate_954741d575e35bdc78ea32cf3b533f00d20bb1384b586187672c987f0d9b4b67 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/finder/Comparator/DateComparator.php"));

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
 * DateCompare compiles date comparisons.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DateComparator extends Comparator
{
    /**
     * @param string \$test A comparison string
     *
     * @throws \\InvalidArgumentException If the test is not understood
     */
    public function __construct(string \$test)
    {
        if (!preg_match('#^\\s*(==|!=|[<>]=?|after|since|before|until)?\\s*(.+?)\\s*\$#i', \$test, \$matches)) {
            throw new \\InvalidArgumentException(sprintf('Don\\'t understand \"%s\" as a date test.', \$test));
        }

        try {
            \$date = new \\DateTime(\$matches[2]);
            \$target = \$date->format('U');
        } catch (\\Exception \$e) {
            throw new \\InvalidArgumentException(sprintf('\"%s\" is not a valid date.', \$matches[2]));
        }

        \$operator = isset(\$matches[1]) ? \$matches[1] : '==';
        if ('since' === \$operator || 'after' === \$operator) {
            \$operator = '>';
        }

        if ('until' === \$operator || 'before' === \$operator) {
            \$operator = '<';
        }

        \$this->setOperator(\$operator);
        \$this->setTarget(\$target);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/finder/Comparator/DateComparator.php";
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
 * DateCompare compiles date comparisons.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DateComparator extends Comparator
{
    /**
     * @param string \$test A comparison string
     *
     * @throws \\InvalidArgumentException If the test is not understood
     */
    public function __construct(string \$test)
    {
        if (!preg_match('#^\\s*(==|!=|[<>]=?|after|since|before|until)?\\s*(.+?)\\s*\$#i', \$test, \$matches)) {
            throw new \\InvalidArgumentException(sprintf('Don\\'t understand \"%s\" as a date test.', \$test));
        }

        try {
            \$date = new \\DateTime(\$matches[2]);
            \$target = \$date->format('U');
        } catch (\\Exception \$e) {
            throw new \\InvalidArgumentException(sprintf('\"%s\" is not a valid date.', \$matches[2]));
        }

        \$operator = isset(\$matches[1]) ? \$matches[1] : '==';
        if ('since' === \$operator || 'after' === \$operator) {
            \$operator = '>';
        }

        if ('until' === \$operator || 'before' === \$operator) {
            \$operator = '<';
        }

        \$this->setOperator(\$operator);
        \$this->setTarget(\$target);
    }
}
", "@app/vendor/symfony/finder/Comparator/DateComparator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\finder\\Comparator\\DateComparator.php");
    }
}
