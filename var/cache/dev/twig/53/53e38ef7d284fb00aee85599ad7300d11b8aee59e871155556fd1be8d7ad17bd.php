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

/* @app/vendor/doctrine/doctrine-bundle/Command/Proxy/DelegateCommand.php */
class __TwigTemplate_cb50492b7722628c95735b2b574b44a7e110ab04fe68b3fbb01a76581cd3bda0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Command/Proxy/DelegateCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy;

use RuntimeException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Command Delegate.
 */
abstract class DelegateCommand extends Command
{
    /** @var Command */
    protected \$command;

    /**
     * @return Command
     */
    abstract protected function createCommand();

    /**
     * @return string
     */
    protected function getMinimalVersion()
    {
        return '2.3.0-DEV';
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {
        return \$this->isVersionCompatible();
    }

    /**
     * @param string \$entityManagerName
     *
     * @return Command
     */
    protected function wrapCommand(\$entityManagerName)
    {
        if (! \$this->isVersionCompatible()) {
            throw new RuntimeException(sprintf('\"%s\" requires doctrine-orm \"%s\" or newer', \$this->getName(), \$this->getMinimalVersion()));
        }

        DoctrineCommandHelper::setApplicationEntityManager(\$this->getApplication(), \$entityManagerName);
        \$this->command->setApplication(\$this->getApplication());

        return \$this->command;
    }

    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        if (\$this->isVersionCompatible()) {
            \$this->command = \$this->createCommand();

            \$this->setHelp(\$this->command->getHelp());
            \$this->setDefinition(\$this->command->getDefinition());
            \$this->setDescription(\$this->command->getDescription());
        }

        \$this->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command');
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        return \$this->wrapCommand(\$input->getOption('em'))->execute(\$input, \$output);
    }

    /**
     * {@inheritDoc}
     */
    protected function interact(InputInterface \$input, OutputInterface \$output)
    {
        \$this->wrapCommand(\$input->getOption('em'))->interact(\$input, \$output);
    }

    /**
     * {@inheritDoc}
     */
    protected function initialize(InputInterface \$input, OutputInterface \$output)
    {
        \$this->wrapCommand(\$input->getOption('em'))->initialize(\$input, \$output);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Command/Proxy/DelegateCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy;

use RuntimeException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Command Delegate.
 */
abstract class DelegateCommand extends Command
{
    /** @var Command */
    protected \$command;

    /**
     * @return Command
     */
    abstract protected function createCommand();

    /**
     * @return string
     */
    protected function getMinimalVersion()
    {
        return '2.3.0-DEV';
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {
        return \$this->isVersionCompatible();
    }

    /**
     * @param string \$entityManagerName
     *
     * @return Command
     */
    protected function wrapCommand(\$entityManagerName)
    {
        if (! \$this->isVersionCompatible()) {
            throw new RuntimeException(sprintf('\"%s\" requires doctrine-orm \"%s\" or newer', \$this->getName(), \$this->getMinimalVersion()));
        }

        DoctrineCommandHelper::setApplicationEntityManager(\$this->getApplication(), \$entityManagerName);
        \$this->command->setApplication(\$this->getApplication());

        return \$this->command;
    }

    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        if (\$this->isVersionCompatible()) {
            \$this->command = \$this->createCommand();

            \$this->setHelp(\$this->command->getHelp());
            \$this->setDefinition(\$this->command->getDefinition());
            \$this->setDescription(\$this->command->getDescription());
        }

        \$this->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command');
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        return \$this->wrapCommand(\$input->getOption('em'))->execute(\$input, \$output);
    }

    /**
     * {@inheritDoc}
     */
    protected function interact(InputInterface \$input, OutputInterface \$output)
    {
        \$this->wrapCommand(\$input->getOption('em'))->interact(\$input, \$output);
    }

    /**
     * {@inheritDoc}
     */
    protected function initialize(InputInterface \$input, OutputInterface \$output)
    {
        \$this->wrapCommand(\$input->getOption('em'))->initialize(\$input, \$output);
    }
}
", "@app/vendor/doctrine/doctrine-bundle/Command/Proxy/DelegateCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\DelegateCommand.php");
    }
}
