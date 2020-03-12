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

/* @app/vendor/twig/twig/src/Source.php */
class __TwigTemplate_c376fdd8d4eab1db934757af459b299cebe8df8a0c4653fe46ec69bd0332f307 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Source.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Holds information about a non-compiled Twig template.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Source
{
    private \$code;
    private \$name;
    private \$path;

    /**
     * @param string \$code The template source code
     * @param string \$name The template logical name
     * @param string \$path The filesystem path of the template if any
     */
    public function __construct(string \$code, string \$name, string \$path = '')
    {
        \$this->code = \$code;
        \$this->name = \$name;
        \$this->path = \$path;
    }

    public function getCode(): string
    {
        return \$this->code;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function getPath(): string
    {
        return \$this->path;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Source.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Holds information about a non-compiled Twig template.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Source
{
    private \$code;
    private \$name;
    private \$path;

    /**
     * @param string \$code The template source code
     * @param string \$name The template logical name
     * @param string \$path The filesystem path of the template if any
     */
    public function __construct(string \$code, string \$name, string \$path = '')
    {
        \$this->code = \$code;
        \$this->name = \$name;
        \$this->path = \$path;
    }

    public function getCode(): string
    {
        return \$this->code;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function getPath(): string
    {
        return \$this->path;
    }
}
", "@app/vendor/twig/twig/src/Source.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Source.php");
    }
}
