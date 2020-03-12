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

/* @app/vendor/symfony/framework-bundle/Command/SecretsGenerateKeysCommand.php */
class __TwigTemplate_f49fec030fe426fdd3031dd28a4eb7ba175009d73d03848e2cf61355acdb1642 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Command/SecretsGenerateKeysCommand.php"));

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
 * @author Tobias Schultze <http://tobion.de>
 * @author Jérémy Derussé <jeremy@derusse.com>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class SecretsGenerateKeysCommand extends Command
{
    protected static \$defaultName = 'secrets:generate-keys';

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
            ->setDescription('Generates new encryption keys.')
            ->addOption('local', 'l', InputOption::VALUE_NONE, 'Updates the local vault.')
            ->addOption('rotate', 'r', InputOption::VALUE_NONE, 'Re-encrypts existing secrets with the newly generated keys.')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command generates a new encryption key.

    <info>%command.full_name%</info>

If encryption keys already exist, the command must be called with
the <info>--rotate</info> option in order to override those keys and re-encrypt
existing secrets.

    <info>%command.full_name% --rotate</info>
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

        if (!\$input->getOption('rotate')) {
            if (\$vault->generateKeys()) {
                \$io->success(\$vault->getLastMessage());

                if (\$this->vault === \$vault) {
                    \$io->caution('DO NOT COMMIT THE DECRYPTION KEY FOR THE PROD ENVIRONMENT⚠️');
                }

                return 0;
            }

            \$io->warning(\$vault->getLastMessage());

            return 1;
        }

        \$secrets = [];
        foreach (\$vault->list(true) as \$name => \$value) {
            if (null === \$value) {
                \$io->error(\$vault->getLastMessage());

                return 1;
            }

            \$secrets[\$name] = \$value;
        }

        if (!\$vault->generateKeys(true)) {
            \$io->warning(\$vault->getLastMessage());

            return 1;
        }

        \$io->success(\$vault->getLastMessage());

        if (\$secrets) {
            foreach (\$secrets as \$name => \$value) {
                \$vault->seal(\$name, \$value);
            }

            \$io->comment('Existing secrets have been rotated to the new keys.');
        }

        if (\$this->vault === \$vault) {
            \$io->caution('DO NOT COMMIT THE DECRYPTION KEY FOR THE PROD ENVIRONMENT⚠️');
        }

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Command/SecretsGenerateKeysCommand.php";
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
 * @author Tobias Schultze <http://tobion.de>
 * @author Jérémy Derussé <jeremy@derusse.com>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class SecretsGenerateKeysCommand extends Command
{
    protected static \$defaultName = 'secrets:generate-keys';

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
            ->setDescription('Generates new encryption keys.')
            ->addOption('local', 'l', InputOption::VALUE_NONE, 'Updates the local vault.')
            ->addOption('rotate', 'r', InputOption::VALUE_NONE, 'Re-encrypts existing secrets with the newly generated keys.')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command generates a new encryption key.

    <info>%command.full_name%</info>

If encryption keys already exist, the command must be called with
the <info>--rotate</info> option in order to override those keys and re-encrypt
existing secrets.

    <info>%command.full_name% --rotate</info>
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

        if (!\$input->getOption('rotate')) {
            if (\$vault->generateKeys()) {
                \$io->success(\$vault->getLastMessage());

                if (\$this->vault === \$vault) {
                    \$io->caution('DO NOT COMMIT THE DECRYPTION KEY FOR THE PROD ENVIRONMENT⚠️');
                }

                return 0;
            }

            \$io->warning(\$vault->getLastMessage());

            return 1;
        }

        \$secrets = [];
        foreach (\$vault->list(true) as \$name => \$value) {
            if (null === \$value) {
                \$io->error(\$vault->getLastMessage());

                return 1;
            }

            \$secrets[\$name] = \$value;
        }

        if (!\$vault->generateKeys(true)) {
            \$io->warning(\$vault->getLastMessage());

            return 1;
        }

        \$io->success(\$vault->getLastMessage());

        if (\$secrets) {
            foreach (\$secrets as \$name => \$value) {
                \$vault->seal(\$name, \$value);
            }

            \$io->comment('Existing secrets have been rotated to the new keys.');
        }

        if (\$this->vault === \$vault) {
            \$io->caution('DO NOT COMMIT THE DECRYPTION KEY FOR THE PROD ENVIRONMENT⚠️');
        }

        return 0;
    }
}
", "@app/vendor/symfony/framework-bundle/Command/SecretsGenerateKeysCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Command\\SecretsGenerateKeysCommand.php");
    }
}
