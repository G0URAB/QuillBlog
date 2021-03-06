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

/* @app/vendor/symfony/dependency-injection/Argument/BoundArgument.php */
class __TwigTemplate_abe4df5e5d0e6e9991982f88f5c855c9e7459ac00f39363c710dfb1565134a57 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Argument/BoundArgument.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Argument;

/**
 * @author Guilhem Niot <guilhem.niot@gmail.com>
 */
final class BoundArgument implements ArgumentInterface
{
    const SERVICE_BINDING = 0;
    const DEFAULTS_BINDING = 1;
    const INSTANCEOF_BINDING = 2;

    private static \$sequence = 0;

    private \$value;
    private \$identifier;
    private \$used;
    private \$type;
    private \$file;

    public function __construct(\$value, bool \$trackUsage = true, int \$type = 0, string \$file = null)
    {
        \$this->value = \$value;
        if (\$trackUsage) {
            \$this->identifier = ++self::\$sequence;
        } else {
            \$this->used = true;
        }
        \$this->type = \$type;
        \$this->file = \$file;
    }

    /**
     * {@inheritdoc}
     */
    public function getValues(): array
    {
        return [\$this->value, \$this->identifier, \$this->used, \$this->type, \$this->file];
    }

    /**
     * {@inheritdoc}
     */
    public function setValues(array \$values)
    {
        if (5 === \\count(\$values)) {
            list(\$this->value, \$this->identifier, \$this->used, \$this->type, \$this->file) = \$values;
        } else {
            list(\$this->value, \$this->identifier, \$this->used) = \$values;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Argument/BoundArgument.php";
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

namespace Symfony\\Component\\DependencyInjection\\Argument;

/**
 * @author Guilhem Niot <guilhem.niot@gmail.com>
 */
final class BoundArgument implements ArgumentInterface
{
    const SERVICE_BINDING = 0;
    const DEFAULTS_BINDING = 1;
    const INSTANCEOF_BINDING = 2;

    private static \$sequence = 0;

    private \$value;
    private \$identifier;
    private \$used;
    private \$type;
    private \$file;

    public function __construct(\$value, bool \$trackUsage = true, int \$type = 0, string \$file = null)
    {
        \$this->value = \$value;
        if (\$trackUsage) {
            \$this->identifier = ++self::\$sequence;
        } else {
            \$this->used = true;
        }
        \$this->type = \$type;
        \$this->file = \$file;
    }

    /**
     * {@inheritdoc}
     */
    public function getValues(): array
    {
        return [\$this->value, \$this->identifier, \$this->used, \$this->type, \$this->file];
    }

    /**
     * {@inheritdoc}
     */
    public function setValues(array \$values)
    {
        if (5 === \\count(\$values)) {
            list(\$this->value, \$this->identifier, \$this->used, \$this->type, \$this->file) = \$values;
        } else {
            list(\$this->value, \$this->identifier, \$this->used) = \$values;
        }
    }
}
", "@app/vendor/symfony/dependency-injection/Argument/BoundArgument.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Argument\\BoundArgument.php");
    }
}
