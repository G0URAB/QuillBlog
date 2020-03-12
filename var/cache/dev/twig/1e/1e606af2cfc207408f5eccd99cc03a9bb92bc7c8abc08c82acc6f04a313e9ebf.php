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

/* @app/vendor/symfony/dotenv/Exception/FormatExceptionContext.php */
class __TwigTemplate_8d85b848ca007e4a15b0defb73f33bb2ea512babf5ef7c9af1c9ffb9ff21a800 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dotenv/Exception/FormatExceptionContext.php"));

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

namespace Symfony\\Component\\Dotenv\\Exception;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class FormatExceptionContext
{
    private \$data;
    private \$path;
    private \$lineno;
    private \$cursor;

    public function __construct(string \$data, string \$path, int \$lineno, int \$cursor)
    {
        \$this->data = \$data;
        \$this->path = \$path;
        \$this->lineno = \$lineno;
        \$this->cursor = \$cursor;
    }

    public function getPath(): string
    {
        return \$this->path;
    }

    public function getLineno(): int
    {
        return \$this->lineno;
    }

    public function getDetails(): string
    {
        \$before = str_replace(\"\\n\", '\\n', substr(\$this->data, max(0, \$this->cursor - 20), min(20, \$this->cursor)));
        \$after = str_replace(\"\\n\", '\\n', substr(\$this->data, \$this->cursor, 20));

        return '...'.\$before.\$after.\"...\\n\".str_repeat(' ', \\strlen(\$before) + 2).'^ line '.\$this->lineno.' offset '.\$this->cursor;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dotenv/Exception/FormatExceptionContext.php";
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

namespace Symfony\\Component\\Dotenv\\Exception;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class FormatExceptionContext
{
    private \$data;
    private \$path;
    private \$lineno;
    private \$cursor;

    public function __construct(string \$data, string \$path, int \$lineno, int \$cursor)
    {
        \$this->data = \$data;
        \$this->path = \$path;
        \$this->lineno = \$lineno;
        \$this->cursor = \$cursor;
    }

    public function getPath(): string
    {
        return \$this->path;
    }

    public function getLineno(): int
    {
        return \$this->lineno;
    }

    public function getDetails(): string
    {
        \$before = str_replace(\"\\n\", '\\n', substr(\$this->data, max(0, \$this->cursor - 20), min(20, \$this->cursor)));
        \$after = str_replace(\"\\n\", '\\n', substr(\$this->data, \$this->cursor, 20));

        return '...'.\$before.\$after.\"...\\n\".str_repeat(' ', \\strlen(\$before) + 2).'^ line '.\$this->lineno.' offset '.\$this->cursor;
    }
}
", "@app/vendor/symfony/dotenv/Exception/FormatExceptionContext.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dotenv\\Exception\\FormatExceptionContext.php");
    }
}
