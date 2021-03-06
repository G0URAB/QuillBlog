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

/* @app/vendor/symfony/console/Helper/Dumper.php */
class __TwigTemplate_55e306b941e224d25496a317f5734842467d99465732e575ad13b5181be45261 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Helper/Dumper.php"));

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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Dumper
{
    private \$output;
    private \$dumper;
    private \$cloner;
    private \$handler;

    public function __construct(OutputInterface \$output, CliDumper \$dumper = null, ClonerInterface \$cloner = null)
    {
        \$this->output = \$output;
        \$this->dumper = \$dumper;
        \$this->cloner = \$cloner;

        if (class_exists(CliDumper::class)) {
            \$this->handler = function (\$var): string {
                \$dumper = \$this->dumper ?? \$this->dumper = new CliDumper(null, null, CliDumper::DUMP_LIGHT_ARRAY | CliDumper::DUMP_COMMA_SEPARATOR);
                \$dumper->setColors(\$this->output->isDecorated());

                return rtrim(\$dumper->dump((\$this->cloner ?? \$this->cloner = new VarCloner())->cloneVar(\$var)->withRefHandles(false), true));
            };
        } else {
            \$this->handler = function (\$var): string {
                switch (true) {
                    case null === \$var:
                        return 'null';
                    case true === \$var:
                        return 'true';
                    case false === \$var:
                        return 'false';
                    case \\is_string(\$var):
                        return '\"'.\$var.'\"';
                    default:
                        return rtrim(print_r(\$var, true));
                }
            };
        }
    }

    public function __invoke(\$var): string
    {
        return (\$this->handler)(\$var);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Helper/Dumper.php";
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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Dumper
{
    private \$output;
    private \$dumper;
    private \$cloner;
    private \$handler;

    public function __construct(OutputInterface \$output, CliDumper \$dumper = null, ClonerInterface \$cloner = null)
    {
        \$this->output = \$output;
        \$this->dumper = \$dumper;
        \$this->cloner = \$cloner;

        if (class_exists(CliDumper::class)) {
            \$this->handler = function (\$var): string {
                \$dumper = \$this->dumper ?? \$this->dumper = new CliDumper(null, null, CliDumper::DUMP_LIGHT_ARRAY | CliDumper::DUMP_COMMA_SEPARATOR);
                \$dumper->setColors(\$this->output->isDecorated());

                return rtrim(\$dumper->dump((\$this->cloner ?? \$this->cloner = new VarCloner())->cloneVar(\$var)->withRefHandles(false), true));
            };
        } else {
            \$this->handler = function (\$var): string {
                switch (true) {
                    case null === \$var:
                        return 'null';
                    case true === \$var:
                        return 'true';
                    case false === \$var:
                        return 'false';
                    case \\is_string(\$var):
                        return '\"'.\$var.'\"';
                    default:
                        return rtrim(print_r(\$var, true));
                }
            };
        }
    }

    public function __invoke(\$var): string
    {
        return (\$this->handler)(\$var);
    }
}
", "@app/vendor/symfony/console/Helper/Dumper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Helper\\Dumper.php");
    }
}
