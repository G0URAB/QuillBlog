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

/* @app/vendor/symfony/dependency-injection/TypedReference.php */
class __TwigTemplate_c111fb297293959d72200e1cd72eb94d297bd67c7b6340963aab9ccbdeacf961 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/TypedReference.php"));

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

namespace Symfony\\Component\\DependencyInjection;

/**
 * Represents a PHP type-hinted service reference.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TypedReference extends Reference
{
    private \$type;
    private \$name;

    /**
     * @param string \$id              The service identifier
     * @param string \$type            The PHP type of the identified service
     * @param int    \$invalidBehavior The behavior when the service does not exist
     * @param string \$name            The name of the argument targeting the service
     */
    public function __construct(string \$id, string \$type, int \$invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, string \$name = null)
    {
        \$this->name = \$type === \$id ? \$name : null;
        parent::__construct(\$id, \$invalidBehavior);
        \$this->type = \$type;
    }

    public function getType()
    {
        return \$this->type;
    }

    public function getName(): ?string
    {
        return \$this->name;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/TypedReference.php";
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

namespace Symfony\\Component\\DependencyInjection;

/**
 * Represents a PHP type-hinted service reference.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TypedReference extends Reference
{
    private \$type;
    private \$name;

    /**
     * @param string \$id              The service identifier
     * @param string \$type            The PHP type of the identified service
     * @param int    \$invalidBehavior The behavior when the service does not exist
     * @param string \$name            The name of the argument targeting the service
     */
    public function __construct(string \$id, string \$type, int \$invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, string \$name = null)
    {
        \$this->name = \$type === \$id ? \$name : null;
        parent::__construct(\$id, \$invalidBehavior);
        \$this->type = \$type;
    }

    public function getType()
    {
        return \$this->type;
    }

    public function getName(): ?string
    {
        return \$this->name;
    }
}
", "@app/vendor/symfony/dependency-injection/TypedReference.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\TypedReference.php");
    }
}
