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

/* @app/vendor/symfony/framework-bundle/Command/YamlLintCommand.php */
class __TwigTemplate_87f368068c3f5078b8fcac4233d8127ed5dc29c892892baae2fdbc57d5a78725 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Command/YamlLintCommand.php"));

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

use Symfony\\Component\\Yaml\\Command\\LintCommand as BaseLintCommand;

/**
 * Validates YAML files syntax and outputs encountered errors.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Robin Chalas <robin.chalas@gmail.com>
 *
 * @final
 */
class YamlLintCommand extends BaseLintCommand
{
    protected static \$defaultName = 'lint:yaml';

    public function __construct()
    {
        \$directoryIteratorProvider = function (\$directory, \$default) {
            if (!is_dir(\$directory)) {
                \$directory = \$this->getApplication()->getKernel()->locateResource(\$directory);
            }

            return \$default(\$directory);
        };

        \$isReadableProvider = function (\$fileOrDirectory, \$default) {
            return 0 === strpos(\$fileOrDirectory, '@') || \$default(\$fileOrDirectory);
        };

        parent::__construct(null, \$directoryIteratorProvider, \$isReadableProvider);
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        parent::configure();

        \$this->setHelp(\$this->getHelp().<<<'EOF'

Or find all files in a bundle:

  <info>php %command.full_name% @AcmeDemoBundle</info>

EOF
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Command/YamlLintCommand.php";
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

use Symfony\\Component\\Yaml\\Command\\LintCommand as BaseLintCommand;

/**
 * Validates YAML files syntax and outputs encountered errors.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Robin Chalas <robin.chalas@gmail.com>
 *
 * @final
 */
class YamlLintCommand extends BaseLintCommand
{
    protected static \$defaultName = 'lint:yaml';

    public function __construct()
    {
        \$directoryIteratorProvider = function (\$directory, \$default) {
            if (!is_dir(\$directory)) {
                \$directory = \$this->getApplication()->getKernel()->locateResource(\$directory);
            }

            return \$default(\$directory);
        };

        \$isReadableProvider = function (\$fileOrDirectory, \$default) {
            return 0 === strpos(\$fileOrDirectory, '@') || \$default(\$fileOrDirectory);
        };

        parent::__construct(null, \$directoryIteratorProvider, \$isReadableProvider);
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        parent::configure();

        \$this->setHelp(\$this->getHelp().<<<'EOF'

Or find all files in a bundle:

  <info>php %command.full_name% @AcmeDemoBundle</info>

EOF
        );
    }
}
", "@app/vendor/symfony/framework-bundle/Command/YamlLintCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Command\\YamlLintCommand.php");
    }
}
