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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ImportCommand.php */
class __TwigTemplate_d651edf450b559fa27db00b0993d6501387c9d614ff0faad66b5fe06c328e825 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ImportCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Tools\\Console\\Command;

use Doctrine\\DBAL\\Driver\\PDOConnection;
use Doctrine\\DBAL\\Driver\\PDOStatement;
use InvalidArgumentException;
use PDOException;
use RuntimeException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use const PHP_EOL;
use function assert;
use function error_get_last;
use function file_exists;
use function file_get_contents;
use function is_readable;
use function realpath;
use function sprintf;

/**
 * Task for executing arbitrary SQL that can come from a file or directly from
 * the command line.
 *
 * @deprecated Use a database client application instead
 */
class ImportCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
        ->setName('dbal:import')
        ->setDescription('Import SQL file(s) directly to Database.')
        ->setDefinition([new InputArgument(
            'file',
            InputArgument::REQUIRED | InputArgument::IS_ARRAY,
            'File path(s) of SQL to be executed.'
        ),
        ])
        ->setHelp(<<<EOT
Import SQL file(s) directly to Database.
EOT
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$conn = \$this->getHelper('db')->getConnection();

        \$fileNames = \$input->getArgument('file');

        if (\$fileNames === null) {
            return 0;
        }

        foreach ((array) \$fileNames as \$fileName) {
            \$filePath = realpath(\$fileName);

            // Phar compatibility.
            if (\$filePath === false) {
                \$filePath = \$fileName;
            }

            if (! file_exists(\$filePath)) {
                throw new InvalidArgumentException(
                    sprintf(\"SQL file '<info>%s</info>' does not exist.\", \$filePath)
                );
            }

            if (! is_readable(\$filePath)) {
                throw new InvalidArgumentException(
                    sprintf(\"SQL file '<info>%s</info>' does not have read permissions.\", \$filePath)
                );
            }

            \$output->write(sprintf(\"Processing file '<info>%s</info>'... \", \$filePath));
            \$sql = @file_get_contents(\$filePath);

            if (\$sql === false) {
                throw new RuntimeException(
                    sprintf(\"Unable to read SQL file '<info>%s</info>': %s\", \$filePath, error_get_last()['message'])
                );
            }

            if (\$conn instanceof PDOConnection) {
                // PDO Drivers
                try {
                    \$lines = 0;

                    \$stmt = \$conn->prepare(\$sql);
                    assert(\$stmt instanceof PDOStatement);

                    \$stmt->execute();

                    do {
                        // Required due to \"MySQL has gone away!\" issue
                        \$stmt->fetch();
                        \$stmt->closeCursor();

                        \$lines++;
                    } while (\$stmt->nextRowset());

                    \$output->write(sprintf('%d statements executed!', \$lines) . PHP_EOL);
                } catch (PDOException \$e) {
                    \$output->write('error!' . PHP_EOL);

                    throw new RuntimeException(\$e->getMessage(), \$e->getCode(), \$e);
                }
            } else {
                // Non-PDO Drivers (ie. OCI8 driver)
                \$stmt = \$conn->prepare(\$sql);
                \$rs   = \$stmt->execute();

                if (! \$rs) {
                    \$error = \$stmt->errorInfo();

                    \$output->write('error!' . PHP_EOL);

                    throw new RuntimeException(\$error[2], \$error[0]);
                }

                \$output->writeln('OK!' . PHP_EOL);

                \$stmt->closeCursor();
            }
        }

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ImportCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Tools\\Console\\Command;

use Doctrine\\DBAL\\Driver\\PDOConnection;
use Doctrine\\DBAL\\Driver\\PDOStatement;
use InvalidArgumentException;
use PDOException;
use RuntimeException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use const PHP_EOL;
use function assert;
use function error_get_last;
use function file_exists;
use function file_get_contents;
use function is_readable;
use function realpath;
use function sprintf;

/**
 * Task for executing arbitrary SQL that can come from a file or directly from
 * the command line.
 *
 * @deprecated Use a database client application instead
 */
class ImportCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
        ->setName('dbal:import')
        ->setDescription('Import SQL file(s) directly to Database.')
        ->setDefinition([new InputArgument(
            'file',
            InputArgument::REQUIRED | InputArgument::IS_ARRAY,
            'File path(s) of SQL to be executed.'
        ),
        ])
        ->setHelp(<<<EOT
Import SQL file(s) directly to Database.
EOT
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$conn = \$this->getHelper('db')->getConnection();

        \$fileNames = \$input->getArgument('file');

        if (\$fileNames === null) {
            return 0;
        }

        foreach ((array) \$fileNames as \$fileName) {
            \$filePath = realpath(\$fileName);

            // Phar compatibility.
            if (\$filePath === false) {
                \$filePath = \$fileName;
            }

            if (! file_exists(\$filePath)) {
                throw new InvalidArgumentException(
                    sprintf(\"SQL file '<info>%s</info>' does not exist.\", \$filePath)
                );
            }

            if (! is_readable(\$filePath)) {
                throw new InvalidArgumentException(
                    sprintf(\"SQL file '<info>%s</info>' does not have read permissions.\", \$filePath)
                );
            }

            \$output->write(sprintf(\"Processing file '<info>%s</info>'... \", \$filePath));
            \$sql = @file_get_contents(\$filePath);

            if (\$sql === false) {
                throw new RuntimeException(
                    sprintf(\"Unable to read SQL file '<info>%s</info>': %s\", \$filePath, error_get_last()['message'])
                );
            }

            if (\$conn instanceof PDOConnection) {
                // PDO Drivers
                try {
                    \$lines = 0;

                    \$stmt = \$conn->prepare(\$sql);
                    assert(\$stmt instanceof PDOStatement);

                    \$stmt->execute();

                    do {
                        // Required due to \"MySQL has gone away!\" issue
                        \$stmt->fetch();
                        \$stmt->closeCursor();

                        \$lines++;
                    } while (\$stmt->nextRowset());

                    \$output->write(sprintf('%d statements executed!', \$lines) . PHP_EOL);
                } catch (PDOException \$e) {
                    \$output->write('error!' . PHP_EOL);

                    throw new RuntimeException(\$e->getMessage(), \$e->getCode(), \$e);
                }
            } else {
                // Non-PDO Drivers (ie. OCI8 driver)
                \$stmt = \$conn->prepare(\$sql);
                \$rs   = \$stmt->execute();

                if (! \$rs) {
                    \$error = \$stmt->errorInfo();

                    \$output->write('error!' . PHP_EOL);

                    throw new RuntimeException(\$error[2], \$error[0]);
                }

                \$output->writeln('OK!' . PHP_EOL);

                \$stmt->closeCursor();
            }
        }

        return 0;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ImportCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\Command\\ImportCommand.php");
    }
}
