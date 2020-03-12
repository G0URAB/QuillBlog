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

/* @app/vendor/symfony/framework-bundle/Test/DomCrawlerAssertionsTrait.php */
class __TwigTemplate_209f878bbc3d496bcd1130d9076a7ed2af99a98d95c405c01db67f67450bef8f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Test/DomCrawlerAssertionsTrait.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Test;

use PHPUnit\\Framework\\Constraint\\LogicalAnd;
use PHPUnit\\Framework\\Constraint\\LogicalNot;
use Symfony\\Component\\DomCrawler\\Crawler;
use Symfony\\Component\\DomCrawler\\Test\\Constraint as DomCrawlerConstraint;

/**
 * Ideas borrowed from Laravel Dusk's assertions.
 *
 * @see https://laravel.com/docs/5.7/dusk#available-assertions
 */
trait DomCrawlerAssertionsTrait
{
    public static function assertSelectorExists(string \$selector, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), new DomCrawlerConstraint\\CrawlerSelectorExists(\$selector), \$message);
    }

    public static function assertSelectorNotExists(string \$selector, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), new LogicalNot(new DomCrawlerConstraint\\CrawlerSelectorExists(\$selector)), \$message);
    }

    public static function assertSelectorTextContains(string \$selector, string \$text, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), LogicalAnd::fromConstraints(
            new DomCrawlerConstraint\\CrawlerSelectorExists(\$selector),
            new DomCrawlerConstraint\\CrawlerSelectorTextContains(\$selector, \$text)
        ), \$message);
    }

    public static function assertSelectorTextSame(string \$selector, string \$text, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), LogicalAnd::fromConstraints(
            new DomCrawlerConstraint\\CrawlerSelectorExists(\$selector),
            new DomCrawlerConstraint\\CrawlerSelectorTextSame(\$selector, \$text)
        ), \$message);
    }

    public static function assertSelectorTextNotContains(string \$selector, string \$text, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), LogicalAnd::fromConstraints(
            new DomCrawlerConstraint\\CrawlerSelectorExists(\$selector),
            new LogicalNot(new DomCrawlerConstraint\\CrawlerSelectorTextContains(\$selector, \$text))
        ), \$message);
    }

    public static function assertPageTitleSame(string \$expectedTitle, string \$message = ''): void
    {
        self::assertSelectorTextSame('title', \$expectedTitle, \$message);
    }

    public static function assertPageTitleContains(string \$expectedTitle, string \$message = ''): void
    {
        self::assertSelectorTextContains('title', \$expectedTitle, \$message);
    }

    public static function assertInputValueSame(string \$fieldName, string \$expectedValue, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), LogicalAnd::fromConstraints(
            new DomCrawlerConstraint\\CrawlerSelectorExists(\"input[name=\\\"\$fieldName\\\"]\"),
            new DomCrawlerConstraint\\CrawlerSelectorAttributeValueSame(\"input[name=\\\"\$fieldName\\\"]\", 'value', \$expectedValue)
        ), \$message);
    }

    public static function assertInputValueNotSame(string \$fieldName, string \$expectedValue, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), LogicalAnd::fromConstraints(
            new DomCrawlerConstraint\\CrawlerSelectorExists(\"input[name=\\\"\$fieldName\\\"]\"),
            new LogicalNot(new DomCrawlerConstraint\\CrawlerSelectorAttributeValueSame(\"input[name=\\\"\$fieldName\\\"]\", 'value', \$expectedValue))
        ), \$message);
    }

    private static function getCrawler(): Crawler
    {
        if (!\$crawler = self::getClient()->getCrawler()) {
            static::fail('A client must have a crawler to make assertions. Did you forget to make an HTTP request?');
        }

        return \$crawler;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Test/DomCrawlerAssertionsTrait.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Test;

use PHPUnit\\Framework\\Constraint\\LogicalAnd;
use PHPUnit\\Framework\\Constraint\\LogicalNot;
use Symfony\\Component\\DomCrawler\\Crawler;
use Symfony\\Component\\DomCrawler\\Test\\Constraint as DomCrawlerConstraint;

/**
 * Ideas borrowed from Laravel Dusk's assertions.
 *
 * @see https://laravel.com/docs/5.7/dusk#available-assertions
 */
trait DomCrawlerAssertionsTrait
{
    public static function assertSelectorExists(string \$selector, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), new DomCrawlerConstraint\\CrawlerSelectorExists(\$selector), \$message);
    }

    public static function assertSelectorNotExists(string \$selector, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), new LogicalNot(new DomCrawlerConstraint\\CrawlerSelectorExists(\$selector)), \$message);
    }

    public static function assertSelectorTextContains(string \$selector, string \$text, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), LogicalAnd::fromConstraints(
            new DomCrawlerConstraint\\CrawlerSelectorExists(\$selector),
            new DomCrawlerConstraint\\CrawlerSelectorTextContains(\$selector, \$text)
        ), \$message);
    }

    public static function assertSelectorTextSame(string \$selector, string \$text, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), LogicalAnd::fromConstraints(
            new DomCrawlerConstraint\\CrawlerSelectorExists(\$selector),
            new DomCrawlerConstraint\\CrawlerSelectorTextSame(\$selector, \$text)
        ), \$message);
    }

    public static function assertSelectorTextNotContains(string \$selector, string \$text, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), LogicalAnd::fromConstraints(
            new DomCrawlerConstraint\\CrawlerSelectorExists(\$selector),
            new LogicalNot(new DomCrawlerConstraint\\CrawlerSelectorTextContains(\$selector, \$text))
        ), \$message);
    }

    public static function assertPageTitleSame(string \$expectedTitle, string \$message = ''): void
    {
        self::assertSelectorTextSame('title', \$expectedTitle, \$message);
    }

    public static function assertPageTitleContains(string \$expectedTitle, string \$message = ''): void
    {
        self::assertSelectorTextContains('title', \$expectedTitle, \$message);
    }

    public static function assertInputValueSame(string \$fieldName, string \$expectedValue, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), LogicalAnd::fromConstraints(
            new DomCrawlerConstraint\\CrawlerSelectorExists(\"input[name=\\\"\$fieldName\\\"]\"),
            new DomCrawlerConstraint\\CrawlerSelectorAttributeValueSame(\"input[name=\\\"\$fieldName\\\"]\", 'value', \$expectedValue)
        ), \$message);
    }

    public static function assertInputValueNotSame(string \$fieldName, string \$expectedValue, string \$message = ''): void
    {
        self::assertThat(self::getCrawler(), LogicalAnd::fromConstraints(
            new DomCrawlerConstraint\\CrawlerSelectorExists(\"input[name=\\\"\$fieldName\\\"]\"),
            new LogicalNot(new DomCrawlerConstraint\\CrawlerSelectorAttributeValueSame(\"input[name=\\\"\$fieldName\\\"]\", 'value', \$expectedValue))
        ), \$message);
    }

    private static function getCrawler(): Crawler
    {
        if (!\$crawler = self::getClient()->getCrawler()) {
            static::fail('A client must have a crawler to make assertions. Did you forget to make an HTTP request?');
        }

        return \$crawler;
    }
}
", "@app/vendor/symfony/framework-bundle/Test/DomCrawlerAssertionsTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Test\\DomCrawlerAssertionsTrait.php");
    }
}
