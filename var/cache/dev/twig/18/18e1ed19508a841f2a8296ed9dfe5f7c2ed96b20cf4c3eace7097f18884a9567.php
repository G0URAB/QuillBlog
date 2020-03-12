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

/* @app/vendor/symfony/console/Input/Input.php */
class __TwigTemplate_65851e1bdde1ba92b4bf687e0e509f6719033ed7cb75d982c1d2ab4f5b18e65f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Input/Input.php"));

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

namespace Symfony\\Component\\Console\\Input;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Exception\\RuntimeException;

/**
 * Input is the base class for all concrete Input classes.
 *
 * Three concrete classes are provided by default:
 *
 *  * `ArgvInput`: The input comes from the CLI arguments (argv)
 *  * `StringInput`: The input is provided as a string
 *  * `ArrayInput`: The input is provided as an array
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Input implements InputInterface, StreamableInputInterface
{
    protected \$definition;
    protected \$stream;
    protected \$options = [];
    protected \$arguments = [];
    protected \$interactive = true;

    public function __construct(InputDefinition \$definition = null)
    {
        if (null === \$definition) {
            \$this->definition = new InputDefinition();
        } else {
            \$this->bind(\$definition);
            \$this->validate();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bind(InputDefinition \$definition)
    {
        \$this->arguments = [];
        \$this->options = [];
        \$this->definition = \$definition;

        \$this->parse();
    }

    /**
     * Processes command line arguments.
     */
    abstract protected function parse();

    /**
     * {@inheritdoc}
     */
    public function validate()
    {
        \$definition = \$this->definition;
        \$givenArguments = \$this->arguments;

        \$missingArguments = array_filter(array_keys(\$definition->getArguments()), function (\$argument) use (\$definition, \$givenArguments) {
            return !\\array_key_exists(\$argument, \$givenArguments) && \$definition->getArgument(\$argument)->isRequired();
        });

        if (\\count(\$missingArguments) > 0) {
            throw new RuntimeException(sprintf('Not enough arguments (missing: \"%s\").', implode(', ', \$missingArguments)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isInteractive()
    {
        return \$this->interactive;
    }

    /**
     * {@inheritdoc}
     */
    public function setInteractive(bool \$interactive)
    {
        \$this->interactive = \$interactive;
    }

    /**
     * {@inheritdoc}
     */
    public function getArguments()
    {
        return array_merge(\$this->definition->getArgumentDefaults(), \$this->arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function getArgument(string \$name)
    {
        if (!\$this->definition->hasArgument(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" argument does not exist.', \$name));
        }

        return isset(\$this->arguments[\$name]) ? \$this->arguments[\$name] : \$this->definition->getArgument(\$name)->getDefault();
    }

    /**
     * {@inheritdoc}
     */
    public function setArgument(string \$name, \$value)
    {
        if (!\$this->definition->hasArgument(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" argument does not exist.', \$name));
        }

        \$this->arguments[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function hasArgument(\$name)
    {
        return \$this->definition->hasArgument(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        return array_merge(\$this->definition->getOptionDefaults(), \$this->options);
    }

    /**
     * {@inheritdoc}
     */
    public function getOption(string \$name)
    {
        if (!\$this->definition->hasOption(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" option does not exist.', \$name));
        }

        return \\array_key_exists(\$name, \$this->options) ? \$this->options[\$name] : \$this->definition->getOption(\$name)->getDefault();
    }

    /**
     * {@inheritdoc}
     */
    public function setOption(string \$name, \$value)
    {
        if (!\$this->definition->hasOption(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" option does not exist.', \$name));
        }

        \$this->options[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function hasOption(string \$name)
    {
        return \$this->definition->hasOption(\$name);
    }

    /**
     * Escapes a token through escapeshellarg if it contains unsafe chars.
     *
     * @return string
     */
    public function escapeToken(string \$token)
    {
        return preg_match('{^[\\w-]+\$}', \$token) ? \$token : escapeshellarg(\$token);
    }

    /**
     * {@inheritdoc}
     */
    public function setStream(\$stream)
    {
        \$this->stream = \$stream;
    }

    /**
     * {@inheritdoc}
     */
    public function getStream()
    {
        return \$this->stream;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Input/Input.php";
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

namespace Symfony\\Component\\Console\\Input;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Exception\\RuntimeException;

/**
 * Input is the base class for all concrete Input classes.
 *
 * Three concrete classes are provided by default:
 *
 *  * `ArgvInput`: The input comes from the CLI arguments (argv)
 *  * `StringInput`: The input is provided as a string
 *  * `ArrayInput`: The input is provided as an array
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Input implements InputInterface, StreamableInputInterface
{
    protected \$definition;
    protected \$stream;
    protected \$options = [];
    protected \$arguments = [];
    protected \$interactive = true;

    public function __construct(InputDefinition \$definition = null)
    {
        if (null === \$definition) {
            \$this->definition = new InputDefinition();
        } else {
            \$this->bind(\$definition);
            \$this->validate();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bind(InputDefinition \$definition)
    {
        \$this->arguments = [];
        \$this->options = [];
        \$this->definition = \$definition;

        \$this->parse();
    }

    /**
     * Processes command line arguments.
     */
    abstract protected function parse();

    /**
     * {@inheritdoc}
     */
    public function validate()
    {
        \$definition = \$this->definition;
        \$givenArguments = \$this->arguments;

        \$missingArguments = array_filter(array_keys(\$definition->getArguments()), function (\$argument) use (\$definition, \$givenArguments) {
            return !\\array_key_exists(\$argument, \$givenArguments) && \$definition->getArgument(\$argument)->isRequired();
        });

        if (\\count(\$missingArguments) > 0) {
            throw new RuntimeException(sprintf('Not enough arguments (missing: \"%s\").', implode(', ', \$missingArguments)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isInteractive()
    {
        return \$this->interactive;
    }

    /**
     * {@inheritdoc}
     */
    public function setInteractive(bool \$interactive)
    {
        \$this->interactive = \$interactive;
    }

    /**
     * {@inheritdoc}
     */
    public function getArguments()
    {
        return array_merge(\$this->definition->getArgumentDefaults(), \$this->arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function getArgument(string \$name)
    {
        if (!\$this->definition->hasArgument(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" argument does not exist.', \$name));
        }

        return isset(\$this->arguments[\$name]) ? \$this->arguments[\$name] : \$this->definition->getArgument(\$name)->getDefault();
    }

    /**
     * {@inheritdoc}
     */
    public function setArgument(string \$name, \$value)
    {
        if (!\$this->definition->hasArgument(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" argument does not exist.', \$name));
        }

        \$this->arguments[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function hasArgument(\$name)
    {
        return \$this->definition->hasArgument(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        return array_merge(\$this->definition->getOptionDefaults(), \$this->options);
    }

    /**
     * {@inheritdoc}
     */
    public function getOption(string \$name)
    {
        if (!\$this->definition->hasOption(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" option does not exist.', \$name));
        }

        return \\array_key_exists(\$name, \$this->options) ? \$this->options[\$name] : \$this->definition->getOption(\$name)->getDefault();
    }

    /**
     * {@inheritdoc}
     */
    public function setOption(string \$name, \$value)
    {
        if (!\$this->definition->hasOption(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" option does not exist.', \$name));
        }

        \$this->options[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function hasOption(string \$name)
    {
        return \$this->definition->hasOption(\$name);
    }

    /**
     * Escapes a token through escapeshellarg if it contains unsafe chars.
     *
     * @return string
     */
    public function escapeToken(string \$token)
    {
        return preg_match('{^[\\w-]+\$}', \$token) ? \$token : escapeshellarg(\$token);
    }

    /**
     * {@inheritdoc}
     */
    public function setStream(\$stream)
    {
        \$this->stream = \$stream;
    }

    /**
     * {@inheritdoc}
     */
    public function getStream()
    {
        return \$this->stream;
    }
}
", "@app/vendor/symfony/console/Input/Input.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Input\\Input.php");
    }
}
