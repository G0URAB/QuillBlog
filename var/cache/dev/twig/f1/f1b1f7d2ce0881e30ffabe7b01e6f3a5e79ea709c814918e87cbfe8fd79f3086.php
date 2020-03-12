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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php */
class __TwigTemplate_ef9768ac7a50dee6bab9c7b1643c4506fe1f7e9adb7431859897ebc6f7b0c5a9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Tools\\Console\\Command;

use Doctrine\\DBAL\\Tools\\Dumper;
use LogicException;
use RuntimeException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function assert;
use function is_numeric;
use function is_string;
use function stripos;

/**
 * Task for executing arbitrary SQL that can come from a file or directly from
 * the command line.
 */
class RunSqlCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
        ->setName('dbal:run-sql')
        ->setDescription('Executes arbitrary SQL directly from the command line.')
        ->setDefinition([
            new InputArgument('sql', InputArgument::REQUIRED, 'The SQL statement to execute.'),
            new InputOption('depth', null, InputOption::VALUE_REQUIRED, 'Dumping depth of result set.', 7),
            new InputOption('force-fetch', null, InputOption::VALUE_NONE, 'Forces fetching the result.'),
        ])
        ->setHelp(<<<EOT
Executes arbitrary SQL directly from the command line.
EOT
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$conn = \$this->getHelper('db')->getConnection();

        \$sql = \$input->getArgument('sql');

        if (\$sql === null) {
            throw new RuntimeException(\"Argument 'SQL' is required in order to execute this command correctly.\");
        }

        assert(is_string(\$sql));

        \$depth = \$input->getOption('depth');

        if (! is_numeric(\$depth)) {
            throw new LogicException(\"Option 'depth' must contains an integer value\");
        }

        if (stripos(\$sql, 'select') === 0 || \$input->getOption('force-fetch')) {
            \$resultSet = \$conn->fetchAll(\$sql);
        } else {
            \$resultSet = \$conn->executeUpdate(\$sql);
        }

        \$output->write(Dumper::dump(\$resultSet, (int) \$depth));

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Tools\\Console\\Command;

use Doctrine\\DBAL\\Tools\\Dumper;
use LogicException;
use RuntimeException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function assert;
use function is_numeric;
use function is_string;
use function stripos;

/**
 * Task for executing arbitrary SQL that can come from a file or directly from
 * the command line.
 */
class RunSqlCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
        ->setName('dbal:run-sql')
        ->setDescription('Executes arbitrary SQL directly from the command line.')
        ->setDefinition([
            new InputArgument('sql', InputArgument::REQUIRED, 'The SQL statement to execute.'),
            new InputOption('depth', null, InputOption::VALUE_REQUIRED, 'Dumping depth of result set.', 7),
            new InputOption('force-fetch', null, InputOption::VALUE_NONE, 'Forces fetching the result.'),
        ])
        ->setHelp(<<<EOT
Executes arbitrary SQL directly from the command line.
EOT
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$conn = \$this->getHelper('db')->getConnection();

        \$sql = \$input->getArgument('sql');

        if (\$sql === null) {
            throw new RuntimeException(\"Argument 'SQL' is required in order to execute this command correctly.\");
        }

        assert(is_string(\$sql));

        \$depth = \$input->getOption('depth');

        if (! is_numeric(\$depth)) {
            throw new LogicException(\"Option 'depth' must contains an integer value\");
        }

        if (stripos(\$sql, 'select') === 0 || \$input->getOption('force-fetch')) {
            \$resultSet = \$conn->fetchAll(\$sql);
        } else {
            \$resultSet = \$conn->executeUpdate(\$sql);
        }

        \$output->write(Dumper::dump(\$resultSet, (int) \$depth));

        return 0;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand.php");
    }
}
