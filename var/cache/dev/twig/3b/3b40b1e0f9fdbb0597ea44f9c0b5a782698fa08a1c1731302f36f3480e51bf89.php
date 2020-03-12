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

/* @app/vendor/symfony/error-handler/Error/UndefinedMethodError.php */
class __TwigTemplate_10a90efcb9913c48aed42ae863170a53c7f297e2308f829c68bb2f5b5e11fdb0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/Error/UndefinedMethodError.php"));

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

namespace Symfony\\Component\\ErrorHandler\\Error;

class UndefinedMethodError extends \\Error
{
    /**
     * {@inheritdoc}
     */
    public function __construct(string \$message, \\Throwable \$previous)
    {
        parent::__construct(\$message, \$previous->getCode(), \$previous->getPrevious());

        foreach ([
            'file' => \$previous->getFile(),
            'line' => \$previous->getLine(),
            'trace' => \$previous->getTrace(),
        ] as \$property => \$value) {
            \$refl = new \\ReflectionProperty(\\Error::class, \$property);
            \$refl->setAccessible(true);
            \$refl->setValue(\$this, \$value);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/Error/UndefinedMethodError.php";
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

namespace Symfony\\Component\\ErrorHandler\\Error;

class UndefinedMethodError extends \\Error
{
    /**
     * {@inheritdoc}
     */
    public function __construct(string \$message, \\Throwable \$previous)
    {
        parent::__construct(\$message, \$previous->getCode(), \$previous->getPrevious());

        foreach ([
            'file' => \$previous->getFile(),
            'line' => \$previous->getLine(),
            'trace' => \$previous->getTrace(),
        ] as \$property => \$value) {
            \$refl = new \\ReflectionProperty(\\Error::class, \$property);
            \$refl->setAccessible(true);
            \$refl->setValue(\$this, \$value);
        }
    }
}
", "@app/vendor/symfony/error-handler/Error/UndefinedMethodError.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\Error\\UndefinedMethodError.php");
    }
}
