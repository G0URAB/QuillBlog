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

/* @app/vendor/symfony/mime/Header/DateHeader.php */
class __TwigTemplate_6ad627e764234288306d48aafe3c948b93b958531499dfeb1e1e3ab05ede753d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Header/DateHeader.php"));

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

namespace Symfony\\Component\\Mime\\Header;

/**
 * A Date MIME Header.
 *
 * @author Chris Corbyn
 */
final class DateHeader extends AbstractHeader
{
    private \$dateTime;

    public function __construct(string \$name, \\DateTimeInterface \$date)
    {
        parent::__construct(\$name);

        \$this->setDateTime(\$date);
    }

    /**
     * @param \\DateTimeInterface \$body
     */
    public function setBody(\$body)
    {
        \$this->setDateTime(\$body);
    }

    public function getBody(): \\DateTimeImmutable
    {
        return \$this->getDateTime();
    }

    public function getDateTime(): \\DateTimeImmutable
    {
        return \$this->dateTime;
    }

    /**
     * Set the date-time of the Date in this Header.
     *
     * If a DateTime instance is provided, it is converted to DateTimeImmutable.
     */
    public function setDateTime(\\DateTimeInterface \$dateTime)
    {
        if (\$dateTime instanceof \\DateTime) {
            \$immutable = new \\DateTimeImmutable('@'.\$dateTime->getTimestamp());
            \$dateTime = \$immutable->setTimezone(\$dateTime->getTimezone());
        }
        \$this->dateTime = \$dateTime;
    }

    public function getBodyAsString(): string
    {
        return \$this->dateTime->format(\\DateTime::RFC2822);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Header/DateHeader.php";
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

namespace Symfony\\Component\\Mime\\Header;

/**
 * A Date MIME Header.
 *
 * @author Chris Corbyn
 */
final class DateHeader extends AbstractHeader
{
    private \$dateTime;

    public function __construct(string \$name, \\DateTimeInterface \$date)
    {
        parent::__construct(\$name);

        \$this->setDateTime(\$date);
    }

    /**
     * @param \\DateTimeInterface \$body
     */
    public function setBody(\$body)
    {
        \$this->setDateTime(\$body);
    }

    public function getBody(): \\DateTimeImmutable
    {
        return \$this->getDateTime();
    }

    public function getDateTime(): \\DateTimeImmutable
    {
        return \$this->dateTime;
    }

    /**
     * Set the date-time of the Date in this Header.
     *
     * If a DateTime instance is provided, it is converted to DateTimeImmutable.
     */
    public function setDateTime(\\DateTimeInterface \$dateTime)
    {
        if (\$dateTime instanceof \\DateTime) {
            \$immutable = new \\DateTimeImmutable('@'.\$dateTime->getTimestamp());
            \$dateTime = \$immutable->setTimezone(\$dateTime->getTimezone());
        }
        \$this->dateTime = \$dateTime;
    }

    public function getBodyAsString(): string
    {
        return \$this->dateTime->format(\\DateTime::RFC2822);
    }
}
", "@app/vendor/symfony/mime/Header/DateHeader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Header\\DateHeader.php");
    }
}
