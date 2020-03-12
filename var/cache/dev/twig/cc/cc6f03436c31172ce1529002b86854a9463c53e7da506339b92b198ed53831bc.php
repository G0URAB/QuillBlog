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

/* @app/vendor/symfony/framework-bundle/Command/SecretsSetCommand.php */
class __TwigTemplate_5f76c042e2d738ec499e6e424867377ed9c7415bde55c87412c19c43aa8bcf6e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Command/SecretsSetCommand.php"));

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
 * @author Tobias Schultze <http://tobion.de>
 * @author Jérémy Derussé <jeremy@derusse.com>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class SecretsSetCommand extends Command
{
    protected static \$defaultName = 'secrets:set';

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
            ->setDescription('Sets a secret in the vault.')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the secret')
            ->addArgument('file', InputArgument::OPTIONAL, 'A file where to read the secret from or \"-\" for reading from STDIN')
            ->addOption('local', 'l', InputOption::VALUE_NONE, 'Updates the local vault.')
            ->addOption('random', 'r', InputOption::VALUE_OPTIONAL, 'Generates a random value.', false)
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command stores a secret in the vault.

    <info>%command.full_name% <name></info>

To reference secrets in services.yaml or any other config
files, use <info>\"%env(<name>)%\"</info>.

By default, the secret value should be entered interactively.
Alternatively, provide a file where to read the secret from:

    <info>php %command.full_name% <name> filename</info>

Use \"-\" as a file name to read from STDIN:

    <info>cat filename | php %command.full_name% <name> -</info>

Use <info>--local</info> to override secrets for local needs.
EOF
            )
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$errOutput = \$output instanceof ConsoleOutputInterface ? \$output->getErrorOutput() : \$output;
        \$io = new SymfonyStyle(\$input, \$errOutput);
        \$name = \$input->getArgument('name');
        \$vault = \$input->getOption('local') ? \$this->localVault : \$this->vault;

        if (null === \$vault) {
            \$io->error('The local vault is disabled.');

            return 1;
        }

        if (\$this->localVault === \$vault && !\\array_key_exists(\$name, \$this->vault->list())) {
            \$io->error(sprintf('Secret \"%s\" does not exist in the vault, you cannot override it locally.', \$name));

            return 1;
        }

        if (0 < \$random = \$input->getOption('random') ?? 16) {
            \$value = strtr(substr(base64_encode(random_bytes(\$random)), 0, \$random), '+/', '-_');
        } elseif (!\$file = \$input->getArgument('file')) {
            \$value = \$io->askHidden('Please type the secret value');
        } elseif ('-' === \$file) {
            \$value = file_get_contents('php://stdin');
        } elseif (is_file(\$file) && is_readable(\$file)) {
            \$value = file_get_contents(\$file);
        } elseif (!is_file(\$file)) {
            throw new \\InvalidArgumentException(sprintf('File not found: \"%s\".', \$file));
        } elseif (!is_readable(\$file)) {
            throw new \\InvalidArgumentException(sprintf('File is not readable: \"%s\".', \$file));
        }

        if (null === \$value) {
            \$io->warning('No value provided, aborting.');

            return 1;
        }

        if (\$vault->generateKeys()) {
            \$io->success(\$vault->getLastMessage());

            if (\$this->vault === \$vault) {
                \$io->caution('DO NOT COMMIT THE DECRYPTION KEY FOR THE PROD ENVIRONMENT⚠️');
            }
        }

        \$vault->seal(\$name, \$value);

        \$io->success(\$vault->getLastMessage() ?? 'Secret was successfully stored in the vault.');

        if (0 < \$random) {
            \$errOutput->write(' // The generated random value is: <comment>');
            \$output->write(\$value);
            \$errOutput->writeln('</comment>');
            \$io->newLine();
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
        return "@app/vendor/symfony/framework-bundle/Command/SecretsSetCommand.php";
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
 * @author Tobias Schultze <http://tobion.de>
 * @author Jérémy Derussé <jeremy@derusse.com>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class SecretsSetCommand extends Command
{
    protected static \$defaultName = 'secrets:set';

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
            ->setDescription('Sets a secret in the vault.')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the secret')
            ->addArgument('file', InputArgument::OPTIONAL, 'A file where to read the secret from or \"-\" for reading from STDIN')
            ->addOption('local', 'l', InputOption::VALUE_NONE, 'Updates the local vault.')
            ->addOption('random', 'r', InputOption::VALUE_OPTIONAL, 'Generates a random value.', false)
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command stores a secret in the vault.

    <info>%command.full_name% <name></info>

To reference secrets in services.yaml or any other config
files, use <info>\"%env(<name>)%\"</info>.

By default, the secret value should be entered interactively.
Alternatively, provide a file where to read the secret from:

    <info>php %command.full_name% <name> filename</info>

Use \"-\" as a file name to read from STDIN:

    <info>cat filename | php %command.full_name% <name> -</info>

Use <info>--local</info> to override secrets for local needs.
EOF
            )
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$errOutput = \$output instanceof ConsoleOutputInterface ? \$output->getErrorOutput() : \$output;
        \$io = new SymfonyStyle(\$input, \$errOutput);
        \$name = \$input->getArgument('name');
        \$vault = \$input->getOption('local') ? \$this->localVault : \$this->vault;

        if (null === \$vault) {
            \$io->error('The local vault is disabled.');

            return 1;
        }

        if (\$this->localVault === \$vault && !\\array_key_exists(\$name, \$this->vault->list())) {
            \$io->error(sprintf('Secret \"%s\" does not exist in the vault, you cannot override it locally.', \$name));

            return 1;
        }

        if (0 < \$random = \$input->getOption('random') ?? 16) {
            \$value = strtr(substr(base64_encode(random_bytes(\$random)), 0, \$random), '+/', '-_');
        } elseif (!\$file = \$input->getArgument('file')) {
            \$value = \$io->askHidden('Please type the secret value');
        } elseif ('-' === \$file) {
            \$value = file_get_contents('php://stdin');
        } elseif (is_file(\$file) && is_readable(\$file)) {
            \$value = file_get_contents(\$file);
        } elseif (!is_file(\$file)) {
            throw new \\InvalidArgumentException(sprintf('File not found: \"%s\".', \$file));
        } elseif (!is_readable(\$file)) {
            throw new \\InvalidArgumentException(sprintf('File is not readable: \"%s\".', \$file));
        }

        if (null === \$value) {
            \$io->warning('No value provided, aborting.');

            return 1;
        }

        if (\$vault->generateKeys()) {
            \$io->success(\$vault->getLastMessage());

            if (\$this->vault === \$vault) {
                \$io->caution('DO NOT COMMIT THE DECRYPTION KEY FOR THE PROD ENVIRONMENT⚠️');
            }
        }

        \$vault->seal(\$name, \$value);

        \$io->success(\$vault->getLastMessage() ?? 'Secret was successfully stored in the vault.');

        if (0 < \$random) {
            \$errOutput->write(' // The generated random value is: <comment>');
            \$output->write(\$value);
            \$errOutput->writeln('</comment>');
            \$io->newLine();
        }

        if (\$this->vault === \$vault && null !== \$this->localVault->reveal(\$name)) {
            \$io->comment('Note that this secret is overridden in the local vault.');
        }

        return 0;
    }
}
", "@app/vendor/symfony/framework-bundle/Command/SecretsSetCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Command\\SecretsSetCommand.php");
    }
}
