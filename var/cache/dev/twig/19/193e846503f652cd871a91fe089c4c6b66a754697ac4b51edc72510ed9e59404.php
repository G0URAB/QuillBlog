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

/* @app/vendor/symfony/twig-bridge/Extension/TranslationExtension.php */
class __TwigTemplate_1cdc368f21fbfb9f9ecc41d5846f973cadeb10c07043ea953e62b77bb0e6cb2a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/TranslationExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Bridge\\Twig\\NodeVisitor\\TranslationDefaultDomainNodeVisitor;
use Symfony\\Bridge\\Twig\\NodeVisitor\\TranslationNodeVisitor;
use Symfony\\Bridge\\Twig\\TokenParser\\TransDefaultDomainTokenParser;
use Symfony\\Bridge\\Twig\\TokenParser\\TransTokenParser;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorTrait;
use Twig\\Extension\\AbstractExtension;
use Twig\\NodeVisitor\\NodeVisitorInterface;
use Twig\\TwigFilter;

/**
 * Provides integration of the Translation component with Twig.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class TranslationExtension extends AbstractExtension
{
    private \$translator;
    private \$translationNodeVisitor;

    public function __construct(TranslatorInterface \$translator = null, NodeVisitorInterface \$translationNodeVisitor = null)
    {
        \$this->translator = \$translator;
        \$this->translationNodeVisitor = \$translationNodeVisitor;
    }

    public function getTranslator(): TranslatorInterface
    {
        if (null === \$this->translator) {
            if (!interface_exists(TranslatorInterface::class)) {
                throw new \\LogicException(sprintf('You cannot use the \"%s\" if the Translation Contracts are not available. Try running \"composer require symfony/translation\".', __CLASS__));
            }

            \$this->translator = new class() implements TranslatorInterface {
                use TranslatorTrait;
            };
        }

        return \$this->translator;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('trans', [\$this, 'trans']),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTokenParsers(): array
    {
        return [
            // ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Symfony is great!", [], "messages");
        // line 72
        echo "            new TransTokenParser(),

            // ";
        // line 75
        echo "            new TransDefaultDomainTokenParser(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getNodeVisitors(): array
    {
        return [\$this->getTranslationNodeVisitor(), new TranslationDefaultDomainNodeVisitor()];
    }

    public function getTranslationNodeVisitor(): TranslationNodeVisitor
    {
        return \$this->translationNodeVisitor ?: \$this->translationNodeVisitor = new TranslationNodeVisitor();
    }

    public function trans(string \$message, array \$arguments = [], string \$domain = null, string \$locale = null, int \$count = null): string
    {
        if (null !== \$count) {
            \$arguments['%count%'] = \$count;
        }

        return \$this->getTranslator()->trans(\$message, \$arguments, \$domain, \$locale);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/TranslationExtension.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 75,  114 => 72,  112 => 71,  40 => 1,);
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Bridge\\Twig\\NodeVisitor\\TranslationDefaultDomainNodeVisitor;
use Symfony\\Bridge\\Twig\\NodeVisitor\\TranslationNodeVisitor;
use Symfony\\Bridge\\Twig\\TokenParser\\TransDefaultDomainTokenParser;
use Symfony\\Bridge\\Twig\\TokenParser\\TransTokenParser;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorTrait;
use Twig\\Extension\\AbstractExtension;
use Twig\\NodeVisitor\\NodeVisitorInterface;
use Twig\\TwigFilter;

/**
 * Provides integration of the Translation component with Twig.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class TranslationExtension extends AbstractExtension
{
    private \$translator;
    private \$translationNodeVisitor;

    public function __construct(TranslatorInterface \$translator = null, NodeVisitorInterface \$translationNodeVisitor = null)
    {
        \$this->translator = \$translator;
        \$this->translationNodeVisitor = \$translationNodeVisitor;
    }

    public function getTranslator(): TranslatorInterface
    {
        if (null === \$this->translator) {
            if (!interface_exists(TranslatorInterface::class)) {
                throw new \\LogicException(sprintf('You cannot use the \"%s\" if the Translation Contracts are not available. Try running \"composer require symfony/translation\".', __CLASS__));
            }

            \$this->translator = new class() implements TranslatorInterface {
                use TranslatorTrait;
            };
        }

        return \$this->translator;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('trans', [\$this, 'trans']),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTokenParsers(): array
    {
        return [
            // {% trans %}Symfony is great!{% endtrans %}
            new TransTokenParser(),

            // {% trans_default_domain \"foobar\" %}
            new TransDefaultDomainTokenParser(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getNodeVisitors(): array
    {
        return [\$this->getTranslationNodeVisitor(), new TranslationDefaultDomainNodeVisitor()];
    }

    public function getTranslationNodeVisitor(): TranslationNodeVisitor
    {
        return \$this->translationNodeVisitor ?: \$this->translationNodeVisitor = new TranslationNodeVisitor();
    }

    public function trans(string \$message, array \$arguments = [], string \$domain = null, string \$locale = null, int \$count = null): string
    {
        if (null !== \$count) {
            \$arguments['%count%'] = \$count;
        }

        return \$this->getTranslator()->trans(\$message, \$arguments, \$domain, \$locale);
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/TranslationExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php");
    }
}
