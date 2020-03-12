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

/* @app/vendor/symfony/framework-bundle/Command/SecretsListCommand.php */
class __TwigTemplate_fa2d1a1472eb2256dc1b4b2bc605c72bd0fce0317de6b7b84d69962552a8afd7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Command/SecretsListCommand.php"));

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
use Symfony\\Component\\Console\\Helper\\Dumper;
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
final class SecretsListCommand extends Command
{
    protected static \$defaultName = 'secrets:list';

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
            ->setDescription('Lists all secrets.')
            ->addOption('reveal', 'r', InputOption::VALUE_NONE, 'Display decrypted values alongside names')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command list all stored secrets.

    <info>%command.full_name%</info>

When the option <info>--reveal</info> is provided, the decrypted secrets are also displayed.

    <info>%command.full_name% --reveal</info>
EOF
            )
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output instanceof ConsoleOutputInterface ? \$output->getErrorOutput() : \$output);

        \$io->comment('Use <info>\"%env(<name>)%\"</info> to reference a secret in a config file.');

        if (!\$reveal = \$input->getOption('reveal')) {
            \$io->comment(sprintf('To reveal the secrets run <info>php %s %s --reveal</info>', \$_SERVER['PHP_SELF'], \$this->getName()));
        }

        \$secrets = \$this->vault->list(\$reveal);
        \$localSecrets = null !== \$this->localVault ? \$this->localVault->list(\$reveal) : null;

        \$rows = [];

        \$dump = new Dumper(\$output);
        \$dump = static function (?string \$v) use (\$dump) {
            return null === \$v ? '******' : \$dump(\$v);
        };

        foreach (\$secrets as \$name => \$value) {
            \$rows[\$name] = [\$name, \$dump(\$value)];
        }

        if (null !== \$message = \$this->vault->getLastMessage()) {
            \$io->comment(\$message);
        }

        foreach (\$localSecrets ?? [] as \$name => \$value) {
            if (isset(\$rows[\$name])) {
                \$rows[\$name][] = \$dump(\$value);
            }
        }

        if (null !== \$this->localVault && null !== \$message = \$this->localVault->getLastMessage()) {
            \$io->comment(\$message);
        }

        (new SymfonyStyle(\$input, \$output))
            ->table(['Secret', 'Value'] + (null !== \$localSecrets ? [2 => 'Local Value'] : []), \$rows);

        \$io->comment(\"Local values override secret values.\\nUse <info>secrets:set --local</info> to define them.\");

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Command/SecretsListCommand.php";
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
use Symfony\\Component\\Console\\Helper\\Dumper;
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
final class SecretsListCommand extends Command
{
    protected static \$defaultName = 'secrets:list';

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
            ->setDescription('Lists all secrets.')
            ->addOption('reveal', 'r', InputOption::VALUE_NONE, 'Display decrypted values alongside names')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command list all stored secrets.

    <info>%command.full_name%</info>

When the option <info>--reveal</info> is provided, the decrypted secrets are also displayed.

    <info>%command.full_name% --reveal</info>
EOF
            )
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output instanceof ConsoleOutputInterface ? \$output->getErrorOutput() : \$output);

        \$io->comment('Use <info>\"%env(<name>)%\"</info> to reference a secret in a config file.');

        if (!\$reveal = \$input->getOption('reveal')) {
            \$io->comment(sprintf('To reveal the secrets run <info>php %s %s --reveal</info>', \$_SERVER['PHP_SELF'], \$this->getName()));
        }

        \$secrets = \$this->vault->list(\$reveal);
        \$localSecrets = null !== \$this->localVault ? \$this->localVault->list(\$reveal) : null;

        \$rows = [];

        \$dump = new Dumper(\$output);
        \$dump = static function (?string \$v) use (\$dump) {
            return null === \$v ? '******' : \$dump(\$v);
        };

        foreach (\$secrets as \$name => \$value) {
            \$rows[\$name] = [\$name, \$dump(\$value)];
        }

        if (null !== \$message = \$this->vault->getLastMessage()) {
            \$io->comment(\$message);
        }

        foreach (\$localSecrets ?? [] as \$name => \$value) {
            if (isset(\$rows[\$name])) {
                \$rows[\$name][] = \$dump(\$value);
            }
        }

        if (null !== \$this->localVault && null !== \$message = \$this->localVault->getLastMessage()) {
            \$io->comment(\$message);
        }

        (new SymfonyStyle(\$input, \$output))
            ->table(['Secret', 'Value'] + (null !== \$localSecrets ? [2 => 'Local Value'] : []), \$rows);

        \$io->comment(\"Local values override secret values.\\nUse <info>secrets:set --local</info> to define them.\");

        return 0;
    }
}
", "@app/vendor/symfony/framework-bundle/Command/SecretsListCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Command\\SecretsListCommand.php");
    }
}
