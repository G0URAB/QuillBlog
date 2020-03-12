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

/* @app/vendor/doctrine/doctrine-bundle/Command/Proxy/ConvertMappingDoctrineCommand.php */
class __TwigTemplate_5bb922b1518b6836769d894dc68b145e2b2d7c74529fb721b3947cd683307c3e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Command/Proxy/ConvertMappingDoctrineCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy;

use Doctrine\\ORM\\Tools\\Console\\Command\\ConvertMappingCommand;
use Doctrine\\ORM\\Tools\\Export\\Driver\\AbstractExporter;
use Doctrine\\ORM\\Tools\\Export\\Driver\\XmlExporter;
use Doctrine\\ORM\\Tools\\Export\\Driver\\YamlExporter;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Convert Doctrine ORM metadata mapping information between the various supported
 * formats.
 */
class ConvertMappingDoctrineCommand extends ConvertMappingCommand
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        parent::configure();
        \$this
            ->setName('doctrine:mapping:convert')
            ->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command');
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        DoctrineCommandHelper::setApplicationEntityManager(\$this->getApplication(), \$input->getOption('em'));

        return parent::execute(\$input, \$output);
    }

    /**
     * @param string \$toType
     * @param string \$destPath
     *
     * @return AbstractExporter
     */
    protected function getExporter(\$toType, \$destPath)
    {
        /** @var AbstractExporter \$exporter */
        \$exporter = parent::getExporter(\$toType, \$destPath);
        if (\$exporter instanceof XmlExporter) {
            \$exporter->setExtension('.orm.xml');
        } elseif (\$exporter instanceof YamlExporter) {
            \$exporter->setExtension('.orm.yml');
        }

        return \$exporter;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Command/Proxy/ConvertMappingDoctrineCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy;

use Doctrine\\ORM\\Tools\\Console\\Command\\ConvertMappingCommand;
use Doctrine\\ORM\\Tools\\Export\\Driver\\AbstractExporter;
use Doctrine\\ORM\\Tools\\Export\\Driver\\XmlExporter;
use Doctrine\\ORM\\Tools\\Export\\Driver\\YamlExporter;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Convert Doctrine ORM metadata mapping information between the various supported
 * formats.
 */
class ConvertMappingDoctrineCommand extends ConvertMappingCommand
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        parent::configure();
        \$this
            ->setName('doctrine:mapping:convert')
            ->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command');
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        DoctrineCommandHelper::setApplicationEntityManager(\$this->getApplication(), \$input->getOption('em'));

        return parent::execute(\$input, \$output);
    }

    /**
     * @param string \$toType
     * @param string \$destPath
     *
     * @return AbstractExporter
     */
    protected function getExporter(\$toType, \$destPath)
    {
        /** @var AbstractExporter \$exporter */
        \$exporter = parent::getExporter(\$toType, \$destPath);
        if (\$exporter instanceof XmlExporter) {
            \$exporter->setExtension('.orm.xml');
        } elseif (\$exporter instanceof YamlExporter) {
            \$exporter->setExtension('.orm.yml');
        }

        return \$exporter;
    }
}
", "@app/vendor/doctrine/doctrine-bundle/Command/Proxy/ConvertMappingDoctrineCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ConvertMappingDoctrineCommand.php");
    }
}
