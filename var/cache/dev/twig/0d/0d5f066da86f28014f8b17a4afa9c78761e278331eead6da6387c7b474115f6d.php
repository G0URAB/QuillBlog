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

/* @app/vendor/symfony/error-handler/Exception/SilencedErrorContext.php */
class __TwigTemplate_ce6d1e06e0305271dc9607ea435d277c6f7919dab059bf9d597cd63ca83a852f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/Exception/SilencedErrorContext.php"));

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

namespace Symfony\\Component\\ErrorHandler\\Exception;

/**
 * Data Object that represents a Silenced Error.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class SilencedErrorContext implements \\JsonSerializable
{
    public \$count = 1;

    private \$severity;
    private \$file;
    private \$line;
    private \$trace;

    public function __construct(int \$severity, string \$file, int \$line, array \$trace = [], int \$count = 1)
    {
        \$this->severity = \$severity;
        \$this->file = \$file;
        \$this->line = \$line;
        \$this->trace = \$trace;
        \$this->count = \$count;
    }

    public function getSeverity(): int
    {
        return \$this->severity;
    }

    public function getFile(): string
    {
        return \$this->file;
    }

    public function getLine(): int
    {
        return \$this->line;
    }

    public function getTrace(): array
    {
        return \$this->trace;
    }

    public function jsonSerialize(): array
    {
        return [
            'severity' => \$this->severity,
            'file' => \$this->file,
            'line' => \$this->line,
            'trace' => \$this->trace,
            'count' => \$this->count,
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/Exception/SilencedErrorContext.php";
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

namespace Symfony\\Component\\ErrorHandler\\Exception;

/**
 * Data Object that represents a Silenced Error.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class SilencedErrorContext implements \\JsonSerializable
{
    public \$count = 1;

    private \$severity;
    private \$file;
    private \$line;
    private \$trace;

    public function __construct(int \$severity, string \$file, int \$line, array \$trace = [], int \$count = 1)
    {
        \$this->severity = \$severity;
        \$this->file = \$file;
        \$this->line = \$line;
        \$this->trace = \$trace;
        \$this->count = \$count;
    }

    public function getSeverity(): int
    {
        return \$this->severity;
    }

    public function getFile(): string
    {
        return \$this->file;
    }

    public function getLine(): int
    {
        return \$this->line;
    }

    public function getTrace(): array
    {
        return \$this->trace;
    }

    public function jsonSerialize(): array
    {
        return [
            'severity' => \$this->severity,
            'file' => \$this->file,
            'line' => \$this->line,
            'trace' => \$this->trace,
            'count' => \$this->count,
        ];
    }
}
", "@app/vendor/symfony/error-handler/Exception/SilencedErrorContext.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\Exception\\SilencedErrorContext.php");
    }
}
