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

/* @app/vendor/symfony/http-foundation/ExpressionRequestMatcher.php */
class __TwigTemplate_cda291d774b57bc9f7c0b6c3f8ccfeffbcb68c9217a1da8a2e32d901b8d9b8a3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/ExpressionRequestMatcher.php"));

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

namespace Symfony\\Component\\HttpFoundation;

use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;

/**
 * ExpressionRequestMatcher uses an expression to match a Request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExpressionRequestMatcher extends RequestMatcher
{
    private \$language;
    private \$expression;

    public function setExpression(ExpressionLanguage \$language, \$expression)
    {
        \$this->language = \$language;
        \$this->expression = \$expression;
    }

    public function matches(Request \$request)
    {
        if (!\$this->language) {
            throw new \\LogicException('Unable to match the request as the expression language is not available.');
        }

        return \$this->language->evaluate(\$this->expression, [
            'request' => \$request,
            'method' => \$request->getMethod(),
            'path' => rawurldecode(\$request->getPathInfo()),
            'host' => \$request->getHost(),
            'ip' => \$request->getClientIp(),
            'attributes' => \$request->attributes->all(),
        ]) && parent::matches(\$request);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/ExpressionRequestMatcher.php";
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

namespace Symfony\\Component\\HttpFoundation;

use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;

/**
 * ExpressionRequestMatcher uses an expression to match a Request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExpressionRequestMatcher extends RequestMatcher
{
    private \$language;
    private \$expression;

    public function setExpression(ExpressionLanguage \$language, \$expression)
    {
        \$this->language = \$language;
        \$this->expression = \$expression;
    }

    public function matches(Request \$request)
    {
        if (!\$this->language) {
            throw new \\LogicException('Unable to match the request as the expression language is not available.');
        }

        return \$this->language->evaluate(\$this->expression, [
            'request' => \$request,
            'method' => \$request->getMethod(),
            'path' => rawurldecode(\$request->getPathInfo()),
            'host' => \$request->getHost(),
            'ip' => \$request->getClientIp(),
            'attributes' => \$request->attributes->all(),
        ]) && parent::matches(\$request);
    }
}
", "@app/vendor/symfony/http-foundation/ExpressionRequestMatcher.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\ExpressionRequestMatcher.php");
    }
}
