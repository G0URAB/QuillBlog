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

/* @app/vendor/symfony/flex/src/Configurator/AbstractConfigurator.php */
class __TwigTemplate_1b7a6ee4a19b10dc4b9b1766eb702f0f4f98a3429163fc9b50c0f800d44cce09 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/Configurator/AbstractConfigurator.php"));

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

namespace Symfony\\Flex\\Configurator;

use Composer\\Composer;
use Composer\\IO\\IOInterface;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Options;
use Symfony\\Flex\\Path;
use Symfony\\Flex\\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractConfigurator
{
    protected \$composer;
    protected \$io;
    protected \$options;
    protected \$path;

    public function __construct(Composer \$composer, IOInterface \$io, Options \$options)
    {
        \$this->composer = \$composer;
        \$this->io = \$io;
        \$this->options = \$options;
        \$this->path = new Path(\$options->get('root-dir'));
    }

    abstract public function configure(Recipe \$recipe, \$config, Lock \$lock, array \$options = []);

    abstract public function unconfigure(Recipe \$recipe, \$config, Lock \$lock);

    protected function write(\$messages)
    {
        if (!\\is_array(\$messages)) {
            \$messages = [\$messages];
        }
        foreach (\$messages as \$i => \$message) {
            \$messages[\$i] = '    '.\$message;
        }
        \$this->io->writeError(\$messages, true, IOInterface::VERBOSE);
    }

    protected function isFileMarked(Recipe \$recipe, string \$file): bool
    {
        return is_file(\$file) && false !== strpos(file_get_contents(\$file), sprintf('###> %s ###', \$recipe->getName()));
    }

    protected function markData(Recipe \$recipe, string \$data): string
    {
        return \"\\n\".sprintf('###> %s ###%s%s%s###< %s ###%s', \$recipe->getName(), \"\\n\", rtrim(\$data, \"\\r\\n\"), \"\\n\", \$recipe->getName(), \"\\n\");
    }

    protected function isFileXmlMarked(Recipe \$recipe, string \$file): bool
    {
        return is_file(\$file) && false !== strpos(file_get_contents(\$file), sprintf('###+ %s ###', \$recipe->getName()));
    }

    protected function markXmlData(Recipe \$recipe, string \$data): string
    {
        return \"\\n\".sprintf('        <!-- ###+ %s ### -->%s%s%s        <!-- ###- %s ### -->%s', \$recipe->getName(), \"\\n\", rtrim(\$data, \"\\r\\n\"), \"\\n\", \$recipe->getName(), \"\\n\");
    }

    /**
     * @return bool True if section was found and replaced
     */
    protected function updateData(string \$file, string \$data): bool
    {
        if (!file_exists(\$file)) {
            return false;
        }

        \$pieces = explode(\"\\n\", trim(\$data));
        \$startMark = trim(reset(\$pieces));
        \$endMark = trim(end(\$pieces));
        \$contents = file_get_contents(\$file);

        if (false === strpos(\$contents, \$startMark) || false === strpos(\$contents, \$endMark)) {
            return false;
        }

        \$pattern = '/'.preg_quote(\$startMark, '/').'.*?'.preg_quote(\$endMark, '/').'/s';
        \$newContents = preg_replace(\$pattern, trim(\$data), \$contents);
        file_put_contents(\$file, \$newContents);

        return true;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/Configurator/AbstractConfigurator.php";
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

namespace Symfony\\Flex\\Configurator;

use Composer\\Composer;
use Composer\\IO\\IOInterface;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Options;
use Symfony\\Flex\\Path;
use Symfony\\Flex\\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractConfigurator
{
    protected \$composer;
    protected \$io;
    protected \$options;
    protected \$path;

    public function __construct(Composer \$composer, IOInterface \$io, Options \$options)
    {
        \$this->composer = \$composer;
        \$this->io = \$io;
        \$this->options = \$options;
        \$this->path = new Path(\$options->get('root-dir'));
    }

    abstract public function configure(Recipe \$recipe, \$config, Lock \$lock, array \$options = []);

    abstract public function unconfigure(Recipe \$recipe, \$config, Lock \$lock);

    protected function write(\$messages)
    {
        if (!\\is_array(\$messages)) {
            \$messages = [\$messages];
        }
        foreach (\$messages as \$i => \$message) {
            \$messages[\$i] = '    '.\$message;
        }
        \$this->io->writeError(\$messages, true, IOInterface::VERBOSE);
    }

    protected function isFileMarked(Recipe \$recipe, string \$file): bool
    {
        return is_file(\$file) && false !== strpos(file_get_contents(\$file), sprintf('###> %s ###', \$recipe->getName()));
    }

    protected function markData(Recipe \$recipe, string \$data): string
    {
        return \"\\n\".sprintf('###> %s ###%s%s%s###< %s ###%s', \$recipe->getName(), \"\\n\", rtrim(\$data, \"\\r\\n\"), \"\\n\", \$recipe->getName(), \"\\n\");
    }

    protected function isFileXmlMarked(Recipe \$recipe, string \$file): bool
    {
        return is_file(\$file) && false !== strpos(file_get_contents(\$file), sprintf('###+ %s ###', \$recipe->getName()));
    }

    protected function markXmlData(Recipe \$recipe, string \$data): string
    {
        return \"\\n\".sprintf('        <!-- ###+ %s ### -->%s%s%s        <!-- ###- %s ### -->%s', \$recipe->getName(), \"\\n\", rtrim(\$data, \"\\r\\n\"), \"\\n\", \$recipe->getName(), \"\\n\");
    }

    /**
     * @return bool True if section was found and replaced
     */
    protected function updateData(string \$file, string \$data): bool
    {
        if (!file_exists(\$file)) {
            return false;
        }

        \$pieces = explode(\"\\n\", trim(\$data));
        \$startMark = trim(reset(\$pieces));
        \$endMark = trim(end(\$pieces));
        \$contents = file_get_contents(\$file);

        if (false === strpos(\$contents, \$startMark) || false === strpos(\$contents, \$endMark)) {
            return false;
        }

        \$pattern = '/'.preg_quote(\$startMark, '/').'.*?'.preg_quote(\$endMark, '/').'/s';
        \$newContents = preg_replace(\$pattern, trim(\$data), \$contents);
        file_put_contents(\$file, \$newContents);

        return true;
    }
}
", "@app/vendor/symfony/flex/src/Configurator/AbstractConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\Configurator\\AbstractConfigurator.php");
    }
}
