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

/* @app/vendor/symfony/framework-bundle/Command/SecretsDecryptToLocalCommand.php */
class __TwigTemplate_8375d88bc0148d1d6723e4e516329c8072bb5e18eb9afa3078a1ba779e04e095 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Command/SecretsDecryptToLocalCommand.php"));

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
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class SecretsDecryptToLocalCommand extends Command
{
    protected static \$defaultName = 'secrets:decrypt-to-local';

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
            ->setDescription('Decrypts all secrets and stores them in the local vault.')
            ->addOption('force', 'f', InputOption::VALUE_NONE, 'Forces overriding of secrets that already exist in the local vault')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command decrypts all secrets and copies them in the local vault.

    <info>%command.full_name%</info>

When the option <info>--force</info> is provided, secrets that already exist in the local vault are overriden.

    <info>%command.full_name% --force</info>
EOF
            )
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output instanceof ConsoleOutputInterface ? \$output->getErrorOutput() : \$output);

        if (null === \$this->localVault) {
            \$io->error('The local vault is disabled.');

            return 1;
        }

        \$secrets = \$this->vault->list(true);

        if (!\$input->getOption('force')) {
            foreach (\$this->localVault->list() as \$k => \$v) {
                unset(\$secrets[\$k]);
            }
        }

        foreach (\$secrets as \$k => \$v) {
            if (null === \$v) {
                \$io->error(\$this->vault->getLastMessage());

                return 1;
            }

            \$this->localVault->seal(\$k, \$v);
        }

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Command/SecretsDecryptToLocalCommand.php";
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
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class SecretsDecryptToLocalCommand extends Command
{
    protected static \$defaultName = 'secrets:decrypt-to-local';

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
            ->setDescription('Decrypts all secrets and stores them in the local vault.')
            ->addOption('force', 'f', InputOption::VALUE_NONE, 'Forces overriding of secrets that already exist in the local vault')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command decrypts all secrets and copies them in the local vault.

    <info>%command.full_name%</info>

When the option <info>--force</info> is provided, secrets that already exist in the local vault are overriden.

    <info>%command.full_name% --force</info>
EOF
            )
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output instanceof ConsoleOutputInterface ? \$output->getErrorOutput() : \$output);

        if (null === \$this->localVault) {
            \$io->error('The local vault is disabled.');

            return 1;
        }

        \$secrets = \$this->vault->list(true);

        if (!\$input->getOption('force')) {
            foreach (\$this->localVault->list() as \$k => \$v) {
                unset(\$secrets[\$k]);
            }
        }

        foreach (\$secrets as \$k => \$v) {
            if (null === \$v) {
                \$io->error(\$this->vault->getLastMessage());

                return 1;
            }

            \$this->localVault->seal(\$k, \$v);
        }

        return 0;
    }
}
", "@app/vendor/symfony/framework-bundle/Command/SecretsDecryptToLocalCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Command\\SecretsDecryptToLocalCommand.php");
    }
}
