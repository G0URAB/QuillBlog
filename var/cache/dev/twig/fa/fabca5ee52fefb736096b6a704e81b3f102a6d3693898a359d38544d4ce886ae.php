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

/* @app/vendor/symfony/config/Definition/Exception/InvalidConfigurationException.php */
class __TwigTemplate_01a5c81494f102e9deebef8840665edfdcb09a67961dd39bc63c920118f0b57b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Definition/Exception/InvalidConfigurationException.php"));

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

namespace Symfony\\Component\\Config\\Definition\\Exception;

/**
 * A very general exception which can be thrown whenever non of the more specific
 * exceptions is suitable.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class InvalidConfigurationException extends Exception
{
    private \$path;
    private \$containsHints = false;

    public function setPath(\$path)
    {
        \$this->path = \$path;
    }

    public function getPath()
    {
        return \$this->path;
    }

    /**
     * Adds extra information that is suffixed to the original exception message.
     */
    public function addHint(string \$hint)
    {
        if (!\$this->containsHints) {
            \$this->message .= \"\\nHint: \".\$hint;
            \$this->containsHints = true;
        } else {
            \$this->message .= ', '.\$hint;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Definition/Exception/InvalidConfigurationException.php";
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

namespace Symfony\\Component\\Config\\Definition\\Exception;

/**
 * A very general exception which can be thrown whenever non of the more specific
 * exceptions is suitable.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class InvalidConfigurationException extends Exception
{
    private \$path;
    private \$containsHints = false;

    public function setPath(\$path)
    {
        \$this->path = \$path;
    }

    public function getPath()
    {
        return \$this->path;
    }

    /**
     * Adds extra information that is suffixed to the original exception message.
     */
    public function addHint(string \$hint)
    {
        if (!\$this->containsHints) {
            \$this->message .= \"\\nHint: \".\$hint;
            \$this->containsHints = true;
        } else {
            \$this->message .= ', '.\$hint;
        }
    }
}
", "@app/vendor/symfony/config/Definition/Exception/InvalidConfigurationException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Definition\\Exception\\InvalidConfigurationException.php");
    }
}
