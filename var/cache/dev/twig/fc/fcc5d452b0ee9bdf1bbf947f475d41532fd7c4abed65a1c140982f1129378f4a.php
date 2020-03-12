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

/* @app/vendor/symfony/var-dumper/Command/Descriptor/CliDescriptor.php */
class __TwigTemplate_4c430f4486748def255dcd5f48233fac831ba590f9e267de2ef08b43adebd714 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Command/Descriptor/CliDescriptor.php"));

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

namespace Symfony\\Component\\VarDumper\\Command\\Descriptor;

use Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

/**
 * Describe collected data clones for cli output.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class CliDescriptor implements DumpDescriptorInterface
{
    private \$dumper;
    private \$lastIdentifier;
    private \$supportsHref;

    public function __construct(CliDumper \$dumper)
    {
        \$this->dumper = \$dumper;
        \$this->supportsHref = method_exists(OutputFormatterStyle::class, 'setHref');
    }

    public function describe(OutputInterface \$output, Data \$data, array \$context, int \$clientId): void
    {
        \$io = \$output instanceof SymfonyStyle ? \$output : new SymfonyStyle(new ArrayInput([]), \$output);
        \$this->dumper->setColors(\$output->isDecorated());

        \$rows = [['date', date('r', \$context['timestamp'])]];
        \$lastIdentifier = \$this->lastIdentifier;
        \$this->lastIdentifier = \$clientId;

        \$section = \"Received from client #\$clientId\";
        if (isset(\$context['request'])) {
            \$request = \$context['request'];
            \$this->lastIdentifier = \$request['identifier'];
            \$section = sprintf('%s %s', \$request['method'], \$request['uri']);
            if (\$controller = \$request['controller']) {
                \$rows[] = ['controller', rtrim(\$this->dumper->dump(\$controller, true), \"\\n\")];
            }
        } elseif (isset(\$context['cli'])) {
            \$this->lastIdentifier = \$context['cli']['identifier'];
            \$section = '\$ '.\$context['cli']['command_line'];
        }

        if (\$this->lastIdentifier !== \$lastIdentifier) {
            \$io->section(\$section);
        }

        if (isset(\$context['source'])) {
            \$source = \$context['source'];
            \$sourceInfo = sprintf('%s on line %d', \$source['name'], \$source['line']);
            \$fileLink = \$source['file_link'] ?? null;
            if (\$this->supportsHref && \$fileLink) {
                \$sourceInfo = sprintf('<href=%s>%s</>', \$fileLink, \$sourceInfo);
            }
            \$rows[] = ['source', \$sourceInfo];
            \$file = \$source['file_relative'] ?? \$source['file'];
            \$rows[] = ['file', \$file];
        }

        \$io->table([], \$rows);

        if (!\$this->supportsHref && isset(\$fileLink)) {
            \$io->writeln(['<info>Open source in your IDE/browser:</info>', \$fileLink]);
            \$io->newLine();
        }

        \$this->dumper->dump(\$data);
        \$io->newLine();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Command/Descriptor/CliDescriptor.php";
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

namespace Symfony\\Component\\VarDumper\\Command\\Descriptor;

use Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

/**
 * Describe collected data clones for cli output.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class CliDescriptor implements DumpDescriptorInterface
{
    private \$dumper;
    private \$lastIdentifier;
    private \$supportsHref;

    public function __construct(CliDumper \$dumper)
    {
        \$this->dumper = \$dumper;
        \$this->supportsHref = method_exists(OutputFormatterStyle::class, 'setHref');
    }

    public function describe(OutputInterface \$output, Data \$data, array \$context, int \$clientId): void
    {
        \$io = \$output instanceof SymfonyStyle ? \$output : new SymfonyStyle(new ArrayInput([]), \$output);
        \$this->dumper->setColors(\$output->isDecorated());

        \$rows = [['date', date('r', \$context['timestamp'])]];
        \$lastIdentifier = \$this->lastIdentifier;
        \$this->lastIdentifier = \$clientId;

        \$section = \"Received from client #\$clientId\";
        if (isset(\$context['request'])) {
            \$request = \$context['request'];
            \$this->lastIdentifier = \$request['identifier'];
            \$section = sprintf('%s %s', \$request['method'], \$request['uri']);
            if (\$controller = \$request['controller']) {
                \$rows[] = ['controller', rtrim(\$this->dumper->dump(\$controller, true), \"\\n\")];
            }
        } elseif (isset(\$context['cli'])) {
            \$this->lastIdentifier = \$context['cli']['identifier'];
            \$section = '\$ '.\$context['cli']['command_line'];
        }

        if (\$this->lastIdentifier !== \$lastIdentifier) {
            \$io->section(\$section);
        }

        if (isset(\$context['source'])) {
            \$source = \$context['source'];
            \$sourceInfo = sprintf('%s on line %d', \$source['name'], \$source['line']);
            \$fileLink = \$source['file_link'] ?? null;
            if (\$this->supportsHref && \$fileLink) {
                \$sourceInfo = sprintf('<href=%s>%s</>', \$fileLink, \$sourceInfo);
            }
            \$rows[] = ['source', \$sourceInfo];
            \$file = \$source['file_relative'] ?? \$source['file'];
            \$rows[] = ['file', \$file];
        }

        \$io->table([], \$rows);

        if (!\$this->supportsHref && isset(\$fileLink)) {
            \$io->writeln(['<info>Open source in your IDE/browser:</info>', \$fileLink]);
            \$io->newLine();
        }

        \$this->dumper->dump(\$data);
        \$io->newLine();
    }
}
", "@app/vendor/symfony/var-dumper/Command/Descriptor/CliDescriptor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Command\\Descriptor\\CliDescriptor.php");
    }
}
