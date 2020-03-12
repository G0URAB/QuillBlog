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

/* @app/vendor/symfony/twig-bridge/Extension/DumpExtension.php */
class __TwigTemplate_17350e4783230ee82f1fac59813c3e61b5620496c8e8d618bab611a7c087d11b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/DumpExtension.php"));

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

use Symfony\\Bridge\\Twig\\TokenParser\\DumpTokenParser;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Twig\\Environment;
use Twig\\Extension\\AbstractExtension;
use Twig\\Template;
use Twig\\TwigFunction;

/**
 * Provides integration of the dump() function with Twig.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class DumpExtension extends AbstractExtension
{
    private \$cloner;
    private \$dumper;

    public function __construct(ClonerInterface \$cloner, HtmlDumper \$dumper = null)
    {
        \$this->cloner = \$cloner;
        \$this->dumper = \$dumper;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('dump', [\$this, 'dump'], ['is_safe' => ['html'], 'needs_context' => true, 'needs_environment' => true]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTokenParsers(): array
    {
        return [new DumpTokenParser()];
    }

    public function dump(Environment \$env, array \$context): ?string
    {
        if (!\$env->isDebug()) {
            return null;
        }

        if (2 === \\func_num_args()) {
            \$vars = [];
            foreach (\$context as \$key => \$value) {
                if (!\$value instanceof Template) {
                    \$vars[\$key] = \$value;
                }
            }

            \$vars = [\$vars];
        } else {
            \$vars = \\func_get_args();
            unset(\$vars[0], \$vars[1]);
        }

        \$dump = fopen('php://memory', 'r+b');
        \$this->dumper = \$this->dumper ?: new HtmlDumper();
        \$this->dumper->setCharset(\$env->getCharset());

        foreach (\$vars as \$value) {
            \$this->dumper->dump(\$this->cloner->cloneVar(\$value), \$dump);
        }

        return stream_get_contents(\$dump, -1, 0);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/DumpExtension.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Bridge\\Twig\\TokenParser\\DumpTokenParser;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Twig\\Environment;
use Twig\\Extension\\AbstractExtension;
use Twig\\Template;
use Twig\\TwigFunction;

/**
 * Provides integration of the dump() function with Twig.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class DumpExtension extends AbstractExtension
{
    private \$cloner;
    private \$dumper;

    public function __construct(ClonerInterface \$cloner, HtmlDumper \$dumper = null)
    {
        \$this->cloner = \$cloner;
        \$this->dumper = \$dumper;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('dump', [\$this, 'dump'], ['is_safe' => ['html'], 'needs_context' => true, 'needs_environment' => true]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTokenParsers(): array
    {
        return [new DumpTokenParser()];
    }

    public function dump(Environment \$env, array \$context): ?string
    {
        if (!\$env->isDebug()) {
            return null;
        }

        if (2 === \\func_num_args()) {
            \$vars = [];
            foreach (\$context as \$key => \$value) {
                if (!\$value instanceof Template) {
                    \$vars[\$key] = \$value;
                }
            }

            \$vars = [\$vars];
        } else {
            \$vars = \\func_get_args();
            unset(\$vars[0], \$vars[1]);
        }

        \$dump = fopen('php://memory', 'r+b');
        \$this->dumper = \$this->dumper ?: new HtmlDumper();
        \$this->dumper->setCharset(\$env->getCharset());

        foreach (\$vars as \$value) {
            \$this->dumper->dump(\$this->cloner->cloneVar(\$value), \$dump);
        }

        return stream_get_contents(\$dump, -1, 0);
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/DumpExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\DumpExtension.php");
    }
}
