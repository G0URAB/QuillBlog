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

/* @app/vendor/symfony/dependency-injection/Exception/InvalidParameterTypeException.php */
class __TwigTemplate_4560749ed1857d83ea8a8cc94990fa4d135d3a1ebad380181258ec3ba35d61d9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Exception/InvalidParameterTypeException.php"));

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
 * Thrown when trying to inject a parameter into a constructor/method with an incompatible type.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Julien Maulny <jmaulny@darkmira.fr>
 */
class InvalidParameterTypeException extends InvalidArgumentException
{
    public function __construct(string \$serviceId, string \$type, \\ReflectionParameter \$parameter)
    {
        parent::__construct(sprintf('Invalid definition for service \"%s\": argument %d of \"%s::%s\" accepts \"%s\", \"%s\" passed.', \$serviceId, 1 + \$parameter->getPosition(), \$parameter->getDeclaringClass()->getName(), \$parameter->getDeclaringFunction()->getName(), \$parameter->getType()->getName(), \$type));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Exception/InvalidParameterTypeException.php";
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
 * Thrown when trying to inject a parameter into a constructor/method with an incompatible type.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Julien Maulny <jmaulny@darkmira.fr>
 */
class InvalidParameterTypeException extends InvalidArgumentException
{
    public function __construct(string \$serviceId, string \$type, \\ReflectionParameter \$parameter)
    {
        parent::__construct(sprintf('Invalid definition for service \"%s\": argument %d of \"%s::%s\" accepts \"%s\", \"%s\" passed.', \$serviceId, 1 + \$parameter->getPosition(), \$parameter->getDeclaringClass()->getName(), \$parameter->getDeclaringFunction()->getName(), \$parameter->getType()->getName(), \$type));
    }
}
", "@app/vendor/symfony/dependency-injection/Exception/InvalidParameterTypeException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Exception\\InvalidParameterTypeException.php");
    }
}
