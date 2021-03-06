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

/* @app/vendor/symfony/flex/src/Configurator/BundlesConfigurator.php */
class __TwigTemplate_91e822ec995435e74e94c1ebe459bd63a5f191716843eed233a79a3ca632509c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/Configurator/BundlesConfigurator.php"));

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

use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class BundlesConfigurator extends AbstractConfigurator
{
    public function configure(Recipe \$recipe, \$bundles, Lock \$lock, array \$options = [])
    {
        \$this->write('Enabling the package as a Symfony bundle');
        \$file = \$this->getConfFile();
        \$registered = \$this->load(\$file);
        \$classes = \$this->parse(\$bundles, \$registered);
        if (isset(\$classes[\$fwb = 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle'])) {
            foreach (\$classes[\$fwb] as \$env) {
                \$registered[\$fwb][\$env] = true;
            }
            unset(\$classes[\$fwb]);
        }
        foreach (\$classes as \$class => \$envs) {
            foreach (\$envs as \$env) {
                \$registered[\$class][\$env] = true;
            }
        }
        \$this->dump(\$file, \$registered);
    }

    public function unconfigure(Recipe \$recipe, \$bundles, Lock \$lock)
    {
        \$this->write('Disabling the Symfony bundle');
        \$file = \$this->getConfFile();
        if (!file_exists(\$file)) {
            return;
        }

        \$registered = \$this->load(\$file);
        foreach (array_keys(\$this->parse(\$bundles, [])) as \$class) {
            unset(\$registered[\$class]);
        }
        \$this->dump(\$file, \$registered);
    }

    private function parse(array \$manifest, array \$registered): array
    {
        \$bundles = [];
        foreach (\$manifest as \$class => \$envs) {
            if (!isset(\$registered[\$class])) {
                \$bundles[ltrim(\$class, '\\\\')] = \$envs;
            }
        }

        return \$bundles;
    }

    private function load(string \$file): array
    {
        \$bundles = file_exists(\$file) ? (require \$file) : [];
        if (!\\is_array(\$bundles)) {
            \$bundles = [];
        }

        return \$bundles;
    }

    private function dump(string \$file, array \$bundles)
    {
        \$contents = \"<?php\\n\\nreturn [\\n\";
        foreach (\$bundles as \$class => \$envs) {
            \$contents .= \"    \$class::class => [\";
            foreach (\$envs as \$env => \$value) {
                \$booleanValue = var_export(\$value, true);
                \$contents .= \"'\$env' => \$booleanValue, \";
            }
            \$contents = substr(\$contents, 0, -2).\"],\\n\";
        }
        \$contents .= \"];\\n\";

        if (!is_dir(\\dirname(\$file))) {
            mkdir(\\dirname(\$file), 0777, true);
        }

        file_put_contents(\$file, \$contents);

        if (\\function_exists('opcache_invalidate')) {
            opcache_invalidate(\$file);
        }
    }

    private function getConfFile(): string
    {
        return \$this->options->get('root-dir').'/'.\$this->options->expandTargetDir('%CONFIG_DIR%/bundles.php');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/Configurator/BundlesConfigurator.php";
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

use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class BundlesConfigurator extends AbstractConfigurator
{
    public function configure(Recipe \$recipe, \$bundles, Lock \$lock, array \$options = [])
    {
        \$this->write('Enabling the package as a Symfony bundle');
        \$file = \$this->getConfFile();
        \$registered = \$this->load(\$file);
        \$classes = \$this->parse(\$bundles, \$registered);
        if (isset(\$classes[\$fwb = 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle'])) {
            foreach (\$classes[\$fwb] as \$env) {
                \$registered[\$fwb][\$env] = true;
            }
            unset(\$classes[\$fwb]);
        }
        foreach (\$classes as \$class => \$envs) {
            foreach (\$envs as \$env) {
                \$registered[\$class][\$env] = true;
            }
        }
        \$this->dump(\$file, \$registered);
    }

    public function unconfigure(Recipe \$recipe, \$bundles, Lock \$lock)
    {
        \$this->write('Disabling the Symfony bundle');
        \$file = \$this->getConfFile();
        if (!file_exists(\$file)) {
            return;
        }

        \$registered = \$this->load(\$file);
        foreach (array_keys(\$this->parse(\$bundles, [])) as \$class) {
            unset(\$registered[\$class]);
        }
        \$this->dump(\$file, \$registered);
    }

    private function parse(array \$manifest, array \$registered): array
    {
        \$bundles = [];
        foreach (\$manifest as \$class => \$envs) {
            if (!isset(\$registered[\$class])) {
                \$bundles[ltrim(\$class, '\\\\')] = \$envs;
            }
        }

        return \$bundles;
    }

    private function load(string \$file): array
    {
        \$bundles = file_exists(\$file) ? (require \$file) : [];
        if (!\\is_array(\$bundles)) {
            \$bundles = [];
        }

        return \$bundles;
    }

    private function dump(string \$file, array \$bundles)
    {
        \$contents = \"<?php\\n\\nreturn [\\n\";
        foreach (\$bundles as \$class => \$envs) {
            \$contents .= \"    \$class::class => [\";
            foreach (\$envs as \$env => \$value) {
                \$booleanValue = var_export(\$value, true);
                \$contents .= \"'\$env' => \$booleanValue, \";
            }
            \$contents = substr(\$contents, 0, -2).\"],\\n\";
        }
        \$contents .= \"];\\n\";

        if (!is_dir(\\dirname(\$file))) {
            mkdir(\\dirname(\$file), 0777, true);
        }

        file_put_contents(\$file, \$contents);

        if (\\function_exists('opcache_invalidate')) {
            opcache_invalidate(\$file);
        }
    }

    private function getConfFile(): string
    {
        return \$this->options->get('root-dir').'/'.\$this->options->expandTargetDir('%CONFIG_DIR%/bundles.php');
    }
}
", "@app/vendor/symfony/flex/src/Configurator/BundlesConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\Configurator\\BundlesConfigurator.php");
    }
}
