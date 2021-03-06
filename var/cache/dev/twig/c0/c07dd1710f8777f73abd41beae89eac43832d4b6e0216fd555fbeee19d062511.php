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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/command/Command.tpl.php */
class __TwigTemplate_7bc06fc90722c362148e8c8bb067c33eb2bd983220ec55a069264eb93fe48413 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/command/Command.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\"; ?>

namespace <?= \$namespace; ?>;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

class <?= \$class_name; ?> extends Command
{
    protected static \$defaultName = '<?= \$command_name; ?>';

    protected function configure()
    {
        \$this
            ->setDescription('Add a short description for your command')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$arg1 = \$input->getArgument('arg1');

        if (\$arg1) {
            \$io->note(sprintf('You passed an argument: %s', \$arg1));
        }

        if (\$input->getOption('option1')) {
            // ...
        }

        \$io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/command/Command.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\"; ?>

namespace <?= \$namespace; ?>;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

class <?= \$class_name; ?> extends Command
{
    protected static \$defaultName = '<?= \$command_name; ?>';

    protected function configure()
    {
        \$this
            ->setDescription('Add a short description for your command')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$arg1 = \$input->getArgument('arg1');

        if (\$arg1) {
            \$io->note(sprintf('You passed an argument: %s', \$arg1));
        }

        if (\$input->getOption('option1')) {
            // ...
        }

        \$io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return 0;
    }
}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/command/Command.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\command\\Command.tpl.php");
    }
}
