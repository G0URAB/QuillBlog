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

/* @app/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php */
class __TwigTemplate_92c60e5efeb0fd0a3d4ac1f5e58a4857cd7be8774d5536eb4c938cd2eba4eb3e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Bridge\\Twig\\TokenParser\\StopwatchTokenParser;
use Symfony\\Component\\Stopwatch\\Stopwatch;
use Twig\\Extension\\AbstractExtension;
use Twig\\TokenParser\\TokenParserInterface;

/**
 * Twig extension for the stopwatch helper.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
final class StopwatchExtension extends AbstractExtension
{
    private \$stopwatch;
    private \$enabled;

    public function __construct(Stopwatch \$stopwatch = null, bool \$enabled = true)
    {
        \$this->stopwatch = \$stopwatch;
        \$this->enabled = \$enabled;
    }

    public function getStopwatch(): Stopwatch
    {
        return \$this->stopwatch;
    }

    /**
     * @return TokenParserInterface[]
     */
    public function getTokenParsers(): array
    {
        return [
            /*
             * ";
        // line 47
        $context["__internal_ad0855cb43ec157f152573584fd9099a8adfc64b6900cfab873f8ca5221f4116"] = (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 47, $this->source); })())        ;
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\StopwatchExtension')->getStopwatch()->start($context["__internal_ad0855cb43ec157f152573584fd9099a8adfc64b6900cfab873f8ca5221f4116"], 'template');
        // line 48
        echo "             * Some stuff which will be recorded on the timeline
             * ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\StopwatchExtension')->getStopwatch()->stop($context["__internal_ad0855cb43ec157f152573584fd9099a8adfc64b6900cfab873f8ca5221f4116"]);
        // line 50
        echo "             */
            new StopwatchTokenParser(null !== \$this->stopwatch && \$this->enabled),
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 50,  91 => 48,  88 => 47,  40 => 1,);
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Bridge\\Twig\\TokenParser\\StopwatchTokenParser;
use Symfony\\Component\\Stopwatch\\Stopwatch;
use Twig\\Extension\\AbstractExtension;
use Twig\\TokenParser\\TokenParserInterface;

/**
 * Twig extension for the stopwatch helper.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
final class StopwatchExtension extends AbstractExtension
{
    private \$stopwatch;
    private \$enabled;

    public function __construct(Stopwatch \$stopwatch = null, bool \$enabled = true)
    {
        \$this->stopwatch = \$stopwatch;
        \$this->enabled = \$enabled;
    }

    public function getStopwatch(): Stopwatch
    {
        return \$this->stopwatch;
    }

    /**
     * @return TokenParserInterface[]
     */
    public function getTokenParsers(): array
    {
        return [
            /*
             * {% stopwatch foo %}
             * Some stuff which will be recorded on the timeline
             * {% endstopwatch %}
             */
            new StopwatchTokenParser(null !== \$this->stopwatch && \$this->enabled),
        ];
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\StopwatchExtension.php");
    }
}
