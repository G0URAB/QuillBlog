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

/* @app/vendor/symfony/flex/src/Command/RequireCommand.php */
class __TwigTemplate_7531b027ea86dbf4b223f020324ade777b4686f6f02e42fa416d4a85ca3c9701 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/Command/RequireCommand.php"));

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

namespace Symfony\\Flex\\Command;

use Composer\\Command\\RequireCommand as BaseRequireCommand;
use Composer\\Package\\Version\\VersionParser;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Flex\\PackageResolver;
use Symfony\\Flex\\Unpack\\Operation;
use Symfony\\Flex\\Unpacker;

class RequireCommand extends BaseRequireCommand
{
    private \$resolver;

    public function __construct(PackageResolver \$resolver)
    {
        \$this->resolver = \$resolver;

        parent::__construct();
    }

    protected function configure()
    {
        parent::configure();
        \$this->addOption('unpack', null, InputOption::VALUE_NONE, 'Unpack Symfony packs in composer.json.');
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$packages = \$this->resolver->resolve(\$input->getArgument('packages'), true);
        if (\$packages) {
            \$versionParser = new VersionParser();
            \$op = new Operation(\$input->getOption('unpack'), \$input->getOption('sort-packages') || \$this->getComposer()->getConfig()->get('sort-packages'));
            foreach (\$versionParser->parseNameVersionPairs(\$packages) as \$package) {
                \$op->addPackage(\$package['name'], \$package['version'] ?? '', \$input->getOption('dev'));
            }

            \$unpacker = new Unpacker(\$this->getComposer(), \$this->resolver);
            \$result = \$unpacker->unpack(\$op);
            \$io = \$this->getIO();
            foreach (\$result->getUnpacked() as \$pkg) {
                \$io->writeError(sprintf('<info>Unpacked %s dependencies</>', \$pkg->getName()));
            }

            \$input->setArgument('packages', \$result->getRequired());
        } elseif (\$input->getOption('unpack')) {
            \$this->getIO()->writeError('<error>--unpack is incompatible with the interactive mode.</>');

            return 1;
        }

        if (\$input->hasOption('no-suggest')) {
            \$input->setOption('no-suggest', true);
        }

        return parent::execute(\$input, \$output);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/Command/RequireCommand.php";
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

namespace Symfony\\Flex\\Command;

use Composer\\Command\\RequireCommand as BaseRequireCommand;
use Composer\\Package\\Version\\VersionParser;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Flex\\PackageResolver;
use Symfony\\Flex\\Unpack\\Operation;
use Symfony\\Flex\\Unpacker;

class RequireCommand extends BaseRequireCommand
{
    private \$resolver;

    public function __construct(PackageResolver \$resolver)
    {
        \$this->resolver = \$resolver;

        parent::__construct();
    }

    protected function configure()
    {
        parent::configure();
        \$this->addOption('unpack', null, InputOption::VALUE_NONE, 'Unpack Symfony packs in composer.json.');
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$packages = \$this->resolver->resolve(\$input->getArgument('packages'), true);
        if (\$packages) {
            \$versionParser = new VersionParser();
            \$op = new Operation(\$input->getOption('unpack'), \$input->getOption('sort-packages') || \$this->getComposer()->getConfig()->get('sort-packages'));
            foreach (\$versionParser->parseNameVersionPairs(\$packages) as \$package) {
                \$op->addPackage(\$package['name'], \$package['version'] ?? '', \$input->getOption('dev'));
            }

            \$unpacker = new Unpacker(\$this->getComposer(), \$this->resolver);
            \$result = \$unpacker->unpack(\$op);
            \$io = \$this->getIO();
            foreach (\$result->getUnpacked() as \$pkg) {
                \$io->writeError(sprintf('<info>Unpacked %s dependencies</>', \$pkg->getName()));
            }

            \$input->setArgument('packages', \$result->getRequired());
        } elseif (\$input->getOption('unpack')) {
            \$this->getIO()->writeError('<error>--unpack is incompatible with the interactive mode.</>');

            return 1;
        }

        if (\$input->hasOption('no-suggest')) {
            \$input->setOption('no-suggest', true);
        }

        return parent::execute(\$input, \$output);
    }
}
", "@app/vendor/symfony/flex/src/Command/RequireCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\Command\\RequireCommand.php");
    }
}
