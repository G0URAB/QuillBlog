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

/* @app/vendor/symfony/http-foundation/Test/Constraint/ResponseStatusCodeSame.php */
class __TwigTemplate_e3fd7f13307575eb7a2cd09ffc9d20cee0bae2e0e42413d5a940e895483d3dcc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Test/Constraint/ResponseStatusCodeSame.php"));

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
use Symfony\\Component\\HttpFoundation\\Response;

final class ResponseStatusCodeSame extends Constraint
{
    private \$statusCode;

    public function __construct(int \$statusCode)
    {
        \$this->statusCode = \$statusCode;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return 'status code is '.\$this->statusCode;
    }

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function matches(\$response): bool
    {
        return \$this->statusCode === \$response->getStatusCode();
    }

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$response): string
    {
        return 'the Response '.\$this->toString();
    }

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function additionalFailureDescription(\$response): string
    {
        return (string) \$response;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Test/Constraint/ResponseStatusCodeSame.php";
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
use Symfony\\Component\\HttpFoundation\\Response;

final class ResponseStatusCodeSame extends Constraint
{
    private \$statusCode;

    public function __construct(int \$statusCode)
    {
        \$this->statusCode = \$statusCode;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return 'status code is '.\$this->statusCode;
    }

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function matches(\$response): bool
    {
        return \$this->statusCode === \$response->getStatusCode();
    }

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$response): string
    {
        return 'the Response '.\$this->toString();
    }

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function additionalFailureDescription(\$response): string
    {
        return (string) \$response;
    }
}
", "@app/vendor/symfony/http-foundation/Test/Constraint/ResponseStatusCodeSame.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Test\\Constraint\\ResponseStatusCodeSame.php");
    }
}
