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

/* @app/vendor/symfony/twig-bridge/TokenParser/TransDefaultDomainTokenParser.php */
class __TwigTemplate_747b80bda98e9302145ff8a56a3ca5766f45af24e55212013f92a778ae02eb45 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/TokenParser/TransDefaultDomainTokenParser.php"));

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

namespace Symfony\\Bridge\\Twig\\TokenParser;

use Symfony\\Bridge\\Twig\\Node\\TransDefaultDomainNode;
use Twig\\Node\\Node;
use Twig\\Token;
use Twig\\TokenParser\\AbstractTokenParser;

/**
 * Token Parser for the 'trans_default_domain' tag.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class TransDefaultDomainTokenParser extends AbstractTokenParser
{
    /**
     * {@inheritdoc}
     */
    public function parse(Token \$token): Node
    {
        \$expr = \$this->parser->getExpressionParser()->parseExpression();

        \$this->parser->getStream()->expect(Token::BLOCK_END_TYPE);

        return new TransDefaultDomainNode(\$expr, \$token->getLine(), \$this->getTag());
    }

    /**
     * {@inheritdoc}
     */
    public function getTag(): string
    {
        return 'trans_default_domain';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/TokenParser/TransDefaultDomainTokenParser.php";
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

namespace Symfony\\Bridge\\Twig\\TokenParser;

use Symfony\\Bridge\\Twig\\Node\\TransDefaultDomainNode;
use Twig\\Node\\Node;
use Twig\\Token;
use Twig\\TokenParser\\AbstractTokenParser;

/**
 * Token Parser for the 'trans_default_domain' tag.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class TransDefaultDomainTokenParser extends AbstractTokenParser
{
    /**
     * {@inheritdoc}
     */
    public function parse(Token \$token): Node
    {
        \$expr = \$this->parser->getExpressionParser()->parseExpression();

        \$this->parser->getStream()->expect(Token::BLOCK_END_TYPE);

        return new TransDefaultDomainNode(\$expr, \$token->getLine(), \$this->getTag());
    }

    /**
     * {@inheritdoc}
     */
    public function getTag(): string
    {
        return 'trans_default_domain';
    }
}
", "@app/vendor/symfony/twig-bridge/TokenParser/TransDefaultDomainTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\TokenParser\\TransDefaultDomainTokenParser.php");
    }
}
