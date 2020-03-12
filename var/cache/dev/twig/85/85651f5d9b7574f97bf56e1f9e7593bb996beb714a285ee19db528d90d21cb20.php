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

/* @app/vendor/symfony/framework-bundle/Command/SecretsRemoveCommand.php */
class __TwigTemplate_81657ead195f0bca33722a43672884f4bdab51d542e2c02c70adb159aa97f2cf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Command/SecretsRemoveCommand.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Command;

use Symfony\\Bundle\\FrameworkBundle\\Secrets\\AbstractVault;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * @author Jérémy Derussé <jeremy@derusse.com>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class SecretsRemoveCommand extends Command
{
    protected static \$defaultName = 'secrets:remove';

    private \$vault;
    private \$localVault;

    public function __construct(AbstractVault \$vault, AbstractVault \$localVault = null)
    {
        \$this->vault = \$vault;
        \$this->localVault = \$localVault;

        parent::__construct();
    }

    protected function configure()
    {
        \$this
            ->setDescription('Removes a secret from the vault.')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the secret')
            ->addOption('local', 'l', InputOption::VALUE_NONE, 'Updates the local vault.')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command removes a secret from the vault.

    <info>%command.full_name% <name></info>
EOF
            )
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output instanceof ConsoleOutputInterface ? \$output->getErrorOutput() : \$output);
        \$vault = \$input->getOption('local') ? \$this->localVault : \$this->vault;

        if (null === \$vault) {
            \$io->success('The local vault is disabled.');

            return 1;
        }

        if (\$vault->remove(\$name = \$input->getArgument('name'))) {
            \$io->success(\$vault->getLastMessage() ?? 'Secret was removed from the vault.');
        } else {
            \$io->comment(\$vault->getLastMessage() ?? 'Secret was not found in the vault.');
        }

        if (\$this->vault === \$vault && null !== \$this->localVault->reveal(\$name)) {
            \$io->comment('Note that this secret is overridden in the local vault.');
        }

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Command/SecretsRemoveCommand.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Command;

use Symfony\\Bundle\\FrameworkBundle\\Secrets\\AbstractVault;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * @author Jérémy Derussé <jeremy@derusse.com>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class SecretsRemoveCommand extends Command
{
    protected static \$defaultName = 'secrets:remove';

    private \$vault;
    private \$localVault;

    public function __construct(AbstractVault \$vault, AbstractVault \$localVault = null)
    {
        \$this->vault = \$vault;
        \$this->localVault = \$localVault;

        parent::__construct();
    }

    protected function configure()
    {
        \$this
            ->setDescription('Removes a secret from the vault.')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the secret')
            ->addOption('local', 'l', InputOption::VALUE_NONE, 'Updates the local vault.')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command removes a secret from the vault.

    <info>%command.full_name% <name></info>
EOF
            )
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output instanceof ConsoleOutputInterface ? \$output->getErrorOutput() : \$output);
        \$vault = \$input->getOption('local') ? \$this->localVault : \$this->vault;

        if (null === \$vault) {
            \$io->success('The local vault is disabled.');

            return 1;
        }

        if (\$vault->remove(\$name = \$input->getArgument('name'))) {
            \$io->success(\$vault->getLastMessage() ?? 'Secret was removed from the vault.');
        } else {
            \$io->comment(\$vault->getLastMessage() ?? 'Secret was not found in the vault.');
        }

        if (\$this->vault === \$vault && null !== \$this->localVault->reveal(\$name)) {
            \$io->comment('Note that this secret is overridden in the local vault.');
        }

        return 0;
    }
}
", "@app/vendor/symfony/framework-bundle/Command/SecretsRemoveCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Command\\SecretsRemoveCommand.php");
    }
}
