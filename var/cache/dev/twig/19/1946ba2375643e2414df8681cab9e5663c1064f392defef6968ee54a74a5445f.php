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

/* @app/vendor/symfony/config/FileLocatorInterface.php */
class __TwigTemplate_fd0ea18759493a6fd86bf6cd579ac8f7269e02f9e3c8ab0851e15edf453da685 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/FileLocatorInterface.php"));

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

namespace Symfony\\Component\\Config;

use Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface FileLocatorInterface
{
    /**
     * Returns a full path for a given file name.
     *
     * @param string      \$name        The file name to locate
     * @param string|null \$currentPath The current path
     * @param bool        \$first       Whether to return the first occurrence or an array of filenames
     *
     * @return string|array The full path to the file or an array of file paths
     *
     * @throws \\InvalidArgumentException        If \$name is empty
     * @throws FileLocatorFileNotFoundException If a file is not found
     */
    public function locate(string \$name, string \$currentPath = null, bool \$first = true);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/FileLocatorInterface.php";
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

namespace Symfony\\Component\\Config;

use Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface FileLocatorInterface
{
    /**
     * Returns a full path for a given file name.
     *
     * @param string      \$name        The file name to locate
     * @param string|null \$currentPath The current path
     * @param bool        \$first       Whether to return the first occurrence or an array of filenames
     *
     * @return string|array The full path to the file or an array of file paths
     *
     * @throws \\InvalidArgumentException        If \$name is empty
     * @throws FileLocatorFileNotFoundException If a file is not found
     */
    public function locate(string \$name, string \$currentPath = null, bool \$first = true);
}
", "@app/vendor/symfony/config/FileLocatorInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\FileLocatorInterface.php");
    }
}
