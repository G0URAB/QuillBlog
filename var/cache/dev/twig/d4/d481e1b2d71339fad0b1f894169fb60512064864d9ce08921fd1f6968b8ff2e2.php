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

/* @app/vendor/symfony/http-kernel/Config/FileLocator.php */
class __TwigTemplate_70648e58c4c4adbb8e9fae6c94233552cfa99ccefde1bb50dcbf04590073c88f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Config/FileLocator.php"));

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

namespace Symfony\\Component\\HttpKernel\\Config;

use Symfony\\Component\\Config\\FileLocator as BaseFileLocator;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * FileLocator uses the KernelInterface to locate resources in bundles.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLocator extends BaseFileLocator
{
    private \$kernel;

    public function __construct(KernelInterface \$kernel)
    {
        \$this->kernel = \$kernel;

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function locate(string \$file, string \$currentPath = null, bool \$first = true)
    {
        if (isset(\$file[0]) && '@' === \$file[0]) {
            \$resource = \$this->kernel->locateResource(\$file);

            return \$first ? \$resource : [\$resource];
        }

        return parent::locate(\$file, \$currentPath, \$first);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Config/FileLocator.php";
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

namespace Symfony\\Component\\HttpKernel\\Config;

use Symfony\\Component\\Config\\FileLocator as BaseFileLocator;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * FileLocator uses the KernelInterface to locate resources in bundles.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLocator extends BaseFileLocator
{
    private \$kernel;

    public function __construct(KernelInterface \$kernel)
    {
        \$this->kernel = \$kernel;

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function locate(string \$file, string \$currentPath = null, bool \$first = true)
    {
        if (isset(\$file[0]) && '@' === \$file[0]) {
            \$resource = \$this->kernel->locateResource(\$file);

            return \$first ? \$resource : [\$resource];
        }

        return parent::locate(\$file, \$currentPath, \$first);
    }
}
", "@app/vendor/symfony/http-kernel/Config/FileLocator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php");
    }
}
