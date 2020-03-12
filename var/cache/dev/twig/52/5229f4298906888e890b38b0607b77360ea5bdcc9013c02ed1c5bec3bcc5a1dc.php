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

/* @app/vendor/symfony/config/Definition/Processor.php */
class __TwigTemplate_d66b0012b3a682061580e45427528da9228e8da63e49488d6ab3c660dacc8645 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Definition/Processor.php"));

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

namespace Symfony\\Component\\Config\\Definition;

/**
 * This class is the entry point for config normalization/merging/finalization.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @final
 */
class Processor
{
    /**
     * Processes an array of configurations.
     *
     * @param array \$configs An array of configuration items to process
     *
     * @return array The processed configuration
     */
    public function process(NodeInterface \$configTree, array \$configs): array
    {
        \$currentConfig = [];
        foreach (\$configs as \$config) {
            \$config = \$configTree->normalize(\$config);
            \$currentConfig = \$configTree->merge(\$currentConfig, \$config);
        }

        return \$configTree->finalize(\$currentConfig);
    }

    /**
     * Processes an array of configurations.
     *
     * @param array \$configs An array of configuration items to process
     *
     * @return array The processed configuration
     */
    public function processConfiguration(ConfigurationInterface \$configuration, array \$configs): array
    {
        return \$this->process(\$configuration->getConfigTreeBuilder()->buildTree(), \$configs);
    }

    /**
     * Normalizes a configuration entry.
     *
     * This method returns a normalize configuration array for a given key
     * to remove the differences due to the original format (YAML and XML mainly).
     *
     * Here is an example.
     *
     * The configuration in XML:
     *
     * <twig:extension>twig.extension.foo</twig:extension>
     * <twig:extension>twig.extension.bar</twig:extension>
     *
     * And the same configuration in YAML:
     *
     * extensions: ['twig.extension.foo', 'twig.extension.bar']
     *
     * @param array  \$config A config array
     * @param string \$key    The key to normalize
     * @param string \$plural The plural form of the key if it is irregular
     */
    public static function normalizeConfig(array \$config, string \$key, string \$plural = null): array
    {
        if (null === \$plural) {
            \$plural = \$key.'s';
        }

        if (isset(\$config[\$plural])) {
            return \$config[\$plural];
        }

        if (isset(\$config[\$key])) {
            if (\\is_string(\$config[\$key]) || !\\is_int(key(\$config[\$key]))) {
                // only one
                return  [\$config[\$key]];
            }

            return  \$config[\$key];
        }

        return [];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Definition/Processor.php";
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

namespace Symfony\\Component\\Config\\Definition;

/**
 * This class is the entry point for config normalization/merging/finalization.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @final
 */
class Processor
{
    /**
     * Processes an array of configurations.
     *
     * @param array \$configs An array of configuration items to process
     *
     * @return array The processed configuration
     */
    public function process(NodeInterface \$configTree, array \$configs): array
    {
        \$currentConfig = [];
        foreach (\$configs as \$config) {
            \$config = \$configTree->normalize(\$config);
            \$currentConfig = \$configTree->merge(\$currentConfig, \$config);
        }

        return \$configTree->finalize(\$currentConfig);
    }

    /**
     * Processes an array of configurations.
     *
     * @param array \$configs An array of configuration items to process
     *
     * @return array The processed configuration
     */
    public function processConfiguration(ConfigurationInterface \$configuration, array \$configs): array
    {
        return \$this->process(\$configuration->getConfigTreeBuilder()->buildTree(), \$configs);
    }

    /**
     * Normalizes a configuration entry.
     *
     * This method returns a normalize configuration array for a given key
     * to remove the differences due to the original format (YAML and XML mainly).
     *
     * Here is an example.
     *
     * The configuration in XML:
     *
     * <twig:extension>twig.extension.foo</twig:extension>
     * <twig:extension>twig.extension.bar</twig:extension>
     *
     * And the same configuration in YAML:
     *
     * extensions: ['twig.extension.foo', 'twig.extension.bar']
     *
     * @param array  \$config A config array
     * @param string \$key    The key to normalize
     * @param string \$plural The plural form of the key if it is irregular
     */
    public static function normalizeConfig(array \$config, string \$key, string \$plural = null): array
    {
        if (null === \$plural) {
            \$plural = \$key.'s';
        }

        if (isset(\$config[\$plural])) {
            return \$config[\$plural];
        }

        if (isset(\$config[\$key])) {
            if (\\is_string(\$config[\$key]) || !\\is_int(key(\$config[\$key]))) {
                // only one
                return  [\$config[\$key]];
            }

            return  \$config[\$key];
        }

        return [];
    }
}
", "@app/vendor/symfony/config/Definition/Processor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Definition\\Processor.php");
    }
}
