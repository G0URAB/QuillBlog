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

/* @app/vendor/symfony/console/Exception/CommandNotFoundException.php */
class __TwigTemplate_0861cb708b8bf4ffe310098584adfcfea64538e95f0a5e3a3976b7884fecb23e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Exception/CommandNotFoundException.php"));

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

namespace Symfony\\Component\\Console\\Exception;

/**
 * Represents an incorrect command name typed in the console.
 *
 * @author Jérôme Tamarelle <jerome@tamarelle.net>
 */
class CommandNotFoundException extends \\InvalidArgumentException implements ExceptionInterface
{
    private \$alternatives;

    /**
     * @param string     \$message      Exception message to throw
     * @param array      \$alternatives List of similar defined names
     * @param int        \$code         Exception code
     * @param \\Throwable \$previous     Previous exception used for the exception chaining
     */
    public function __construct(string \$message, array \$alternatives = [], int \$code = 0, \\Throwable \$previous = null)
    {
        parent::__construct(\$message, \$code, \$previous);

        \$this->alternatives = \$alternatives;
    }

    /**
     * @return array A list of similar defined names
     */
    public function getAlternatives()
    {
        return \$this->alternatives;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Exception/CommandNotFoundException.php";
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

namespace Symfony\\Component\\Console\\Exception;

/**
 * Represents an incorrect command name typed in the console.
 *
 * @author Jérôme Tamarelle <jerome@tamarelle.net>
 */
class CommandNotFoundException extends \\InvalidArgumentException implements ExceptionInterface
{
    private \$alternatives;

    /**
     * @param string     \$message      Exception message to throw
     * @param array      \$alternatives List of similar defined names
     * @param int        \$code         Exception code
     * @param \\Throwable \$previous     Previous exception used for the exception chaining
     */
    public function __construct(string \$message, array \$alternatives = [], int \$code = 0, \\Throwable \$previous = null)
    {
        parent::__construct(\$message, \$code, \$previous);

        \$this->alternatives = \$alternatives;
    }

    /**
     * @return array A list of similar defined names
     */
    public function getAlternatives()
    {
        return \$this->alternatives;
    }
}
", "@app/vendor/symfony/console/Exception/CommandNotFoundException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Exception\\CommandNotFoundException.php");
    }
}
