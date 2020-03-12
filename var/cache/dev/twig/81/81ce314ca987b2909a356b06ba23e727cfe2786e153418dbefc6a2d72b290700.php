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

/* @app/vendor/symfony/dotenv/Exception/PathException.php */
class __TwigTemplate_e3808259032d5c8b9d55405d8e4c57af89cb70e58d84ae4b1f5e573b78ab5df6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dotenv/Exception/PathException.php"));

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

namespace Symfony\\Component\\Dotenv\\Exception;

/**
 * Thrown when a file does not exist or is not readable.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class PathException extends \\RuntimeException implements ExceptionInterface
{
    public function __construct(string \$path, int \$code = 0, \\Throwable \$previous = null)
    {
        parent::__construct(sprintf('Unable to read the \"%s\" environment file.', \$path), \$code, \$previous);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dotenv/Exception/PathException.php";
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

namespace Symfony\\Component\\Dotenv\\Exception;

/**
 * Thrown when a file does not exist or is not readable.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class PathException extends \\RuntimeException implements ExceptionInterface
{
    public function __construct(string \$path, int \$code = 0, \\Throwable \$previous = null)
    {
        parent::__construct(sprintf('Unable to read the \"%s\" environment file.', \$path), \$code, \$previous);
    }
}
", "@app/vendor/symfony/dotenv/Exception/PathException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dotenv\\Exception\\PathException.php");
    }
}
