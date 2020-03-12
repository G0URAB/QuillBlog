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

/* @app/vendor/symfony/routing/Matcher/CompiledUrlMatcher.php */
class __TwigTemplate_6391ace867b5fab969894b72b2d1c477a8f672b28a3a58faba1435d02c73f0b6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/routing/Matcher/CompiledUrlMatcher.php"));

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

namespace Symfony\\Component\\Routing\\Matcher;

use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherTrait;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * Matches URLs based on rules dumped by CompiledUrlMatcherDumper.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CompiledUrlMatcher extends UrlMatcher
{
    use CompiledUrlMatcherTrait;

    public function __construct(array \$compiledRoutes, RequestContext \$context)
    {
        \$this->context = \$context;
        list(\$this->matchHost, \$this->staticRoutes, \$this->regexpList, \$this->dynamicRoutes, \$this->checkCondition) = \$compiledRoutes;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/routing/Matcher/CompiledUrlMatcher.php";
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

namespace Symfony\\Component\\Routing\\Matcher;

use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherTrait;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * Matches URLs based on rules dumped by CompiledUrlMatcherDumper.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CompiledUrlMatcher extends UrlMatcher
{
    use CompiledUrlMatcherTrait;

    public function __construct(array \$compiledRoutes, RequestContext \$context)
    {
        \$this->context = \$context;
        list(\$this->matchHost, \$this->staticRoutes, \$this->regexpList, \$this->dynamicRoutes, \$this->checkCondition) = \$compiledRoutes;
    }
}
", "@app/vendor/symfony/routing/Matcher/CompiledUrlMatcher.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\routing\\Matcher\\CompiledUrlMatcher.php");
    }
}
