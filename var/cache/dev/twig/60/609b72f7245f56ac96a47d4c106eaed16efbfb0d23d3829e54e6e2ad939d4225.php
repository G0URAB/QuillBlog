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

/* @app/vendor/symfony/console/Descriptor/Descriptor.php */
class __TwigTemplate_a9778d2298b692cf94c16aeef2e6fcbe6a25a0a23826f3e52586cc2fbd10605c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Descriptor/Descriptor.php"));

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

namespace Symfony\\Component\\Console\\Descriptor;

use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
abstract class Descriptor implements DescriptorInterface
{
    /**
     * @var OutputInterface
     */
    protected \$output;

    /**
     * {@inheritdoc}
     */
    public function describe(OutputInterface \$output, \$object, array \$options = [])
    {
        \$this->output = \$output;

        switch (true) {
            case \$object instanceof InputArgument:
                \$this->describeInputArgument(\$object, \$options);
                break;
            case \$object instanceof InputOption:
                \$this->describeInputOption(\$object, \$options);
                break;
            case \$object instanceof InputDefinition:
                \$this->describeInputDefinition(\$object, \$options);
                break;
            case \$object instanceof Command:
                \$this->describeCommand(\$object, \$options);
                break;
            case \$object instanceof Application:
                \$this->describeApplication(\$object, \$options);
                break;
            default:
                throw new InvalidArgumentException(sprintf('Object of type \"%s\" is not describable.', \\get_class(\$object)));
        }
    }

    /**
     * Writes content to output.
     */
    protected function write(string \$content, bool \$decorated = false)
    {
        \$this->output->write(\$content, false, \$decorated ? OutputInterface::OUTPUT_NORMAL : OutputInterface::OUTPUT_RAW);
    }

    /**
     * Describes an InputArgument instance.
     *
     * @return string|mixed
     */
    abstract protected function describeInputArgument(InputArgument \$argument, array \$options = []);

    /**
     * Describes an InputOption instance.
     *
     * @return string|mixed
     */
    abstract protected function describeInputOption(InputOption \$option, array \$options = []);

    /**
     * Describes an InputDefinition instance.
     *
     * @return string|mixed
     */
    abstract protected function describeInputDefinition(InputDefinition \$definition, array \$options = []);

    /**
     * Describes a Command instance.
     *
     * @return string|mixed
     */
    abstract protected function describeCommand(Command \$command, array \$options = []);

    /**
     * Describes an Application instance.
     *
     * @return string|mixed
     */
    abstract protected function describeApplication(Application \$application, array \$options = []);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Descriptor/Descriptor.php";
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

namespace Symfony\\Component\\Console\\Descriptor;

use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
abstract class Descriptor implements DescriptorInterface
{
    /**
     * @var OutputInterface
     */
    protected \$output;

    /**
     * {@inheritdoc}
     */
    public function describe(OutputInterface \$output, \$object, array \$options = [])
    {
        \$this->output = \$output;

        switch (true) {
            case \$object instanceof InputArgument:
                \$this->describeInputArgument(\$object, \$options);
                break;
            case \$object instanceof InputOption:
                \$this->describeInputOption(\$object, \$options);
                break;
            case \$object instanceof InputDefinition:
                \$this->describeInputDefinition(\$object, \$options);
                break;
            case \$object instanceof Command:
                \$this->describeCommand(\$object, \$options);
                break;
            case \$object instanceof Application:
                \$this->describeApplication(\$object, \$options);
                break;
            default:
                throw new InvalidArgumentException(sprintf('Object of type \"%s\" is not describable.', \\get_class(\$object)));
        }
    }

    /**
     * Writes content to output.
     */
    protected function write(string \$content, bool \$decorated = false)
    {
        \$this->output->write(\$content, false, \$decorated ? OutputInterface::OUTPUT_NORMAL : OutputInterface::OUTPUT_RAW);
    }

    /**
     * Describes an InputArgument instance.
     *
     * @return string|mixed
     */
    abstract protected function describeInputArgument(InputArgument \$argument, array \$options = []);

    /**
     * Describes an InputOption instance.
     *
     * @return string|mixed
     */
    abstract protected function describeInputOption(InputOption \$option, array \$options = []);

    /**
     * Describes an InputDefinition instance.
     *
     * @return string|mixed
     */
    abstract protected function describeInputDefinition(InputDefinition \$definition, array \$options = []);

    /**
     * Describes a Command instance.
     *
     * @return string|mixed
     */
    abstract protected function describeCommand(Command \$command, array \$options = []);

    /**
     * Describes an Application instance.
     *
     * @return string|mixed
     */
    abstract protected function describeApplication(Application \$application, array \$options = []);
}
", "@app/vendor/symfony/console/Descriptor/Descriptor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Descriptor\\Descriptor.php");
    }
}
