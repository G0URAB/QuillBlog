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

/* @app/vendor/symfony/dependency-injection/Exception/ServiceCircularReferenceException.php */
class __TwigTemplate_b07b586ab3f35beee4f392234509865e295e219916853005d6662746fa8b4946 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Exception/ServiceCircularReferenceException.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Exception;

/**
 * This exception is thrown when a circular reference is detected.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ServiceCircularReferenceException extends RuntimeException
{
    private \$serviceId;
    private \$path;

    public function __construct(string \$serviceId, array \$path, \\Throwable \$previous = null)
    {
        parent::__construct(sprintf('Circular reference detected for service \"%s\", path: \"%s\".', \$serviceId, implode(' -> ', \$path)), 0, \$previous);

        \$this->serviceId = \$serviceId;
        \$this->path = \$path;
    }

    public function getServiceId()
    {
        return \$this->serviceId;
    }

    public function getPath()
    {
        return \$this->path;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Exception/ServiceCircularReferenceException.php";
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

namespace Symfony\\Component\\DependencyInjection\\Exception;

/**
 * This exception is thrown when a circular reference is detected.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ServiceCircularReferenceException extends RuntimeException
{
    private \$serviceId;
    private \$path;

    public function __construct(string \$serviceId, array \$path, \\Throwable \$previous = null)
    {
        parent::__construct(sprintf('Circular reference detected for service \"%s\", path: \"%s\".', \$serviceId, implode(' -> ', \$path)), 0, \$previous);

        \$this->serviceId = \$serviceId;
        \$this->path = \$path;
    }

    public function getServiceId()
    {
        return \$this->serviceId;
    }

    public function getPath()
    {
        return \$this->path;
    }
}
", "@app/vendor/symfony/dependency-injection/Exception/ServiceCircularReferenceException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Exception\\ServiceCircularReferenceException.php");
    }
}
