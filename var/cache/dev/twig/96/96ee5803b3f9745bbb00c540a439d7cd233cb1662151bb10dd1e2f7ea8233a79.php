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

/* @app/vendor/symfony/http-foundation/Test/Constraint/RequestAttributeValueSame.php */
class __TwigTemplate_892f53c0507885f020ccd5cf6fec0c17b9659b3cffb0c314aee7a98705b44a4c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Test/Constraint/RequestAttributeValueSame.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Test\\Constraint;

use PHPUnit\\Framework\\Constraint\\Constraint;
use Symfony\\Component\\HttpFoundation\\Request;

final class RequestAttributeValueSame extends Constraint
{
    private \$name;
    private \$value;

    public function __construct(string \$name, string \$value)
    {
        \$this->name = \$name;
        \$this->value = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('has attribute \"%s\" with value \"%s\"', \$this->name, \$this->value);
    }

    /**
     * @param Request \$request
     *
     * {@inheritdoc}
     */
    protected function matches(\$request): bool
    {
        return \$this->value === \$request->attributes->get(\$this->name);
    }

    /**
     * @param Request \$request
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$request): string
    {
        return 'the Request '.\$this->toString();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Test/Constraint/RequestAttributeValueSame.php";
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

namespace Symfony\\Component\\HttpFoundation\\Test\\Constraint;

use PHPUnit\\Framework\\Constraint\\Constraint;
use Symfony\\Component\\HttpFoundation\\Request;

final class RequestAttributeValueSame extends Constraint
{
    private \$name;
    private \$value;

    public function __construct(string \$name, string \$value)
    {
        \$this->name = \$name;
        \$this->value = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('has attribute \"%s\" with value \"%s\"', \$this->name, \$this->value);
    }

    /**
     * @param Request \$request
     *
     * {@inheritdoc}
     */
    protected function matches(\$request): bool
    {
        return \$this->value === \$request->attributes->get(\$this->name);
    }

    /**
     * @param Request \$request
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$request): string
    {
        return 'the Request '.\$this->toString();
    }
}
", "@app/vendor/symfony/http-foundation/Test/Constraint/RequestAttributeValueSame.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Test\\Constraint\\RequestAttributeValueSame.php");
    }
}
