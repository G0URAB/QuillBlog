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

/* @app/vendor/symfony/routing/Generator/CompiledUrlGenerator.php */
class __TwigTemplate_307c195d9b1b7cecdffe72631077bcfd3f269ac81fbac6c574fac6303448bd56 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/routing/Generator/CompiledUrlGenerator.php"));

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

namespace Symfony\\Component\\Routing\\Generator;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Routing\\Exception\\RouteNotFoundException;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * Generates URLs based on rules dumped by CompiledUrlGeneratorDumper.
 */
class CompiledUrlGenerator extends UrlGenerator
{
    private \$compiledRoutes = [];
    private \$defaultLocale;

    public function __construct(array \$compiledRoutes, RequestContext \$context, LoggerInterface \$logger = null, string \$defaultLocale = null)
    {
        \$this->compiledRoutes = \$compiledRoutes;
        \$this->context = \$context;
        \$this->logger = \$logger;
        \$this->defaultLocale = \$defaultLocale;
    }

    public function generate(string \$name, array \$parameters = [], int \$referenceType = self::ABSOLUTE_PATH)
    {
        \$locale = \$parameters['_locale']
            ?? \$this->context->getParameter('_locale')
            ?: \$this->defaultLocale;

        if (null !== \$locale) {
            do {
                if ((\$this->compiledRoutes[\$name.'.'.\$locale][1]['_canonical_route'] ?? null) === \$name) {
                    \$name .= '.'.\$locale;
                    break;
                }
            } while (false !== \$locale = strstr(\$locale, '_', true));
        }

        if (!isset(\$this->compiledRoutes[\$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route \"%s\" as such route does not exist.', \$name));
        }

        list(\$variables, \$defaults, \$requirements, \$tokens, \$hostTokens, \$requiredSchemes) = \$this->compiledRoutes[\$name];

        if (isset(\$defaults['_canonical_route']) && isset(\$defaults['_locale'])) {
            if (!\\in_array('_locale', \$variables, true)) {
                unset(\$parameters['_locale']);
            } elseif (!isset(\$parameters['_locale'])) {
                \$parameters['_locale'] = \$defaults['_locale'];
            }
        }

        return \$this->doGenerate(\$variables, \$defaults, \$requirements, \$tokens, \$parameters, \$name, \$referenceType, \$hostTokens, \$requiredSchemes);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/routing/Generator/CompiledUrlGenerator.php";
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

namespace Symfony\\Component\\Routing\\Generator;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Routing\\Exception\\RouteNotFoundException;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * Generates URLs based on rules dumped by CompiledUrlGeneratorDumper.
 */
class CompiledUrlGenerator extends UrlGenerator
{
    private \$compiledRoutes = [];
    private \$defaultLocale;

    public function __construct(array \$compiledRoutes, RequestContext \$context, LoggerInterface \$logger = null, string \$defaultLocale = null)
    {
        \$this->compiledRoutes = \$compiledRoutes;
        \$this->context = \$context;
        \$this->logger = \$logger;
        \$this->defaultLocale = \$defaultLocale;
    }

    public function generate(string \$name, array \$parameters = [], int \$referenceType = self::ABSOLUTE_PATH)
    {
        \$locale = \$parameters['_locale']
            ?? \$this->context->getParameter('_locale')
            ?: \$this->defaultLocale;

        if (null !== \$locale) {
            do {
                if ((\$this->compiledRoutes[\$name.'.'.\$locale][1]['_canonical_route'] ?? null) === \$name) {
                    \$name .= '.'.\$locale;
                    break;
                }
            } while (false !== \$locale = strstr(\$locale, '_', true));
        }

        if (!isset(\$this->compiledRoutes[\$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route \"%s\" as such route does not exist.', \$name));
        }

        list(\$variables, \$defaults, \$requirements, \$tokens, \$hostTokens, \$requiredSchemes) = \$this->compiledRoutes[\$name];

        if (isset(\$defaults['_canonical_route']) && isset(\$defaults['_locale'])) {
            if (!\\in_array('_locale', \$variables, true)) {
                unset(\$parameters['_locale']);
            } elseif (!isset(\$parameters['_locale'])) {
                \$parameters['_locale'] = \$defaults['_locale'];
            }
        }

        return \$this->doGenerate(\$variables, \$defaults, \$requirements, \$tokens, \$parameters, \$name, \$referenceType, \$hostTokens, \$requiredSchemes);
    }
}
", "@app/vendor/symfony/routing/Generator/CompiledUrlGenerator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\routing\\Generator\\CompiledUrlGenerator.php");
    }
}
