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

/* @app/vendor/symfony/flex/src/Configurator/ComposerScriptsConfigurator.php */
class __TwigTemplate_d7b542513ccb3754d8e30ac9414e0cb7d61dca6db0ce25a9ac971496fa446a66 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/Configurator/ComposerScriptsConfigurator.php"));

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

use Composer\\Factory;
use Composer\\Json\\JsonFile;
use Composer\\Json\\JsonManipulator;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ComposerScriptsConfigurator extends AbstractConfigurator
{
    public function configure(Recipe \$recipe, \$scripts, Lock \$lock, array \$options = [])
    {
        \$json = new JsonFile(Factory::getComposerFile());

        \$jsonContents = \$json->read();
        \$autoScripts = \$jsonContents['scripts']['auto-scripts'] ?? [];
        \$autoScripts = array_merge(\$autoScripts, \$scripts);

        \$manipulator = new JsonManipulator(file_get_contents(\$json->getPath()));
        \$manipulator->addSubNode('scripts', 'auto-scripts', \$autoScripts);

        file_put_contents(\$json->getPath(), \$manipulator->getContents());
    }

    public function unconfigure(Recipe \$recipe, \$scripts, Lock \$lock)
    {
        \$json = new JsonFile(Factory::getComposerFile());

        \$jsonContents = \$json->read();
        \$autoScripts = \$jsonContents['scripts']['auto-scripts'] ?? [];
        foreach (array_keys(\$scripts) as \$cmd) {
            unset(\$autoScripts[\$cmd]);
        }

        \$manipulator = new JsonManipulator(file_get_contents(\$json->getPath()));
        \$manipulator->addSubNode('scripts', 'auto-scripts', \$autoScripts);

        file_put_contents(\$json->getPath(), \$manipulator->getContents());
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/Configurator/ComposerScriptsConfigurator.php";
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

use Composer\\Factory;
use Composer\\Json\\JsonFile;
use Composer\\Json\\JsonManipulator;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ComposerScriptsConfigurator extends AbstractConfigurator
{
    public function configure(Recipe \$recipe, \$scripts, Lock \$lock, array \$options = [])
    {
        \$json = new JsonFile(Factory::getComposerFile());

        \$jsonContents = \$json->read();
        \$autoScripts = \$jsonContents['scripts']['auto-scripts'] ?? [];
        \$autoScripts = array_merge(\$autoScripts, \$scripts);

        \$manipulator = new JsonManipulator(file_get_contents(\$json->getPath()));
        \$manipulator->addSubNode('scripts', 'auto-scripts', \$autoScripts);

        file_put_contents(\$json->getPath(), \$manipulator->getContents());
    }

    public function unconfigure(Recipe \$recipe, \$scripts, Lock \$lock)
    {
        \$json = new JsonFile(Factory::getComposerFile());

        \$jsonContents = \$json->read();
        \$autoScripts = \$jsonContents['scripts']['auto-scripts'] ?? [];
        foreach (array_keys(\$scripts) as \$cmd) {
            unset(\$autoScripts[\$cmd]);
        }

        \$manipulator = new JsonManipulator(file_get_contents(\$json->getPath()));
        \$manipulator->addSubNode('scripts', 'auto-scripts', \$autoScripts);

        file_put_contents(\$json->getPath(), \$manipulator->getContents());
    }
}
", "@app/vendor/symfony/flex/src/Configurator/ComposerScriptsConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\Configurator\\ComposerScriptsConfigurator.php");
    }
}
