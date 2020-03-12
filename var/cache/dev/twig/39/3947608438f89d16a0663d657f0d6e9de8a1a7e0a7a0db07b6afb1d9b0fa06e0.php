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

/* @app/vendor/symfony/twig-bridge/TokenParser/FormThemeTokenParser.php */
class __TwigTemplate_30fa088d5ef9b4d564f680a32b31d2c7b23e1ad5c84f8102109d5ba5ce3a4d19 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/TokenParser/FormThemeTokenParser.php"));

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

use Symfony\\Bridge\\Twig\\Node\\FormThemeNode;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Node;
use Twig\\Token;
use Twig\\TokenParser\\AbstractTokenParser;

/**
 * Token Parser for the 'form_theme' tag.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class FormThemeTokenParser extends AbstractTokenParser
{
    /**
     * {@inheritdoc}
     */
    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();

        \$form = \$this->parser->getExpressionParser()->parseExpression();
        \$only = false;

        if (\$this->parser->getStream()->test(Token::NAME_TYPE, 'with')) {
            \$this->parser->getStream()->next();
            \$resources = \$this->parser->getExpressionParser()->parseExpression();

            if (\$this->parser->getStream()->nextIf(Token::NAME_TYPE, 'only')) {
                \$only = true;
            }
        } else {
            \$resources = new ArrayExpression([], \$stream->getCurrent()->getLine());
            do {
                \$resources->addElement(\$this->parser->getExpressionParser()->parseExpression());
            } while (!\$stream->test(Token::BLOCK_END_TYPE));
        }

        \$stream->expect(Token::BLOCK_END_TYPE);

        return new FormThemeNode(\$form, \$resources, \$lineno, \$this->getTag(), \$only);
    }

    /**
     * {@inheritdoc}
     */
    public function getTag(): string
    {
        return 'form_theme';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/TokenParser/FormThemeTokenParser.php";
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

use Symfony\\Bridge\\Twig\\Node\\FormThemeNode;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Node;
use Twig\\Token;
use Twig\\TokenParser\\AbstractTokenParser;

/**
 * Token Parser for the 'form_theme' tag.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class FormThemeTokenParser extends AbstractTokenParser
{
    /**
     * {@inheritdoc}
     */
    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();

        \$form = \$this->parser->getExpressionParser()->parseExpression();
        \$only = false;

        if (\$this->parser->getStream()->test(Token::NAME_TYPE, 'with')) {
            \$this->parser->getStream()->next();
            \$resources = \$this->parser->getExpressionParser()->parseExpression();

            if (\$this->parser->getStream()->nextIf(Token::NAME_TYPE, 'only')) {
                \$only = true;
            }
        } else {
            \$resources = new ArrayExpression([], \$stream->getCurrent()->getLine());
            do {
                \$resources->addElement(\$this->parser->getExpressionParser()->parseExpression());
            } while (!\$stream->test(Token::BLOCK_END_TYPE));
        }

        \$stream->expect(Token::BLOCK_END_TYPE);

        return new FormThemeNode(\$form, \$resources, \$lineno, \$this->getTag(), \$only);
    }

    /**
     * {@inheritdoc}
     */
    public function getTag(): string
    {
        return 'form_theme';
    }
}
", "@app/vendor/symfony/twig-bridge/TokenParser/FormThemeTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\TokenParser\\FormThemeTokenParser.php");
    }
}
