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

/* @app/vendor/symfony/config/Exception/FileLoaderImportCircularReferenceException.php */
class __TwigTemplate_af3ce6821cc001ca5f0887d7d1951e072e182b173ac967462a9f35ac5f6adee2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Exception/FileLoaderImportCircularReferenceException.php"));

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

namespace Symfony\\Component\\Config\\Exception;

/**
 * Exception class for when a circular reference is detected when importing resources.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLoaderImportCircularReferenceException extends LoaderLoadException
{
    public function __construct(array \$resources, int \$code = null, \\Throwable \$previous = null)
    {
        \$message = sprintf('Circular reference detected in \"%s\" (\"%s\" > \"%s\").', \$this->varToString(\$resources[0]), implode('\" > \"', \$resources), \$resources[0]);

        \\Exception::__construct(\$message, \$code, \$previous);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Exception/FileLoaderImportCircularReferenceException.php";
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

namespace Symfony\\Component\\Config\\Exception;

/**
 * Exception class for when a circular reference is detected when importing resources.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLoaderImportCircularReferenceException extends LoaderLoadException
{
    public function __construct(array \$resources, int \$code = null, \\Throwable \$previous = null)
    {
        \$message = sprintf('Circular reference detected in \"%s\" (\"%s\" > \"%s\").', \$this->varToString(\$resources[0]), implode('\" > \"', \$resources), \$resources[0]);

        \\Exception::__construct(\$message, \$code, \$previous);
    }
}
", "@app/vendor/symfony/config/Exception/FileLoaderImportCircularReferenceException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Exception\\FileLoaderImportCircularReferenceException.php");
    }
}
