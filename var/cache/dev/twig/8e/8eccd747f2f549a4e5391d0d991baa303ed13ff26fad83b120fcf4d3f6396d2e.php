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

/* @app/vendor/symfony/error-handler/ErrorEnhancer/UndefinedMethodErrorEnhancer.php */
class __TwigTemplate_d37e3a1871184e707031365a99e04a02de836b6ccbcc85c5f4e16688a66d4310 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/ErrorEnhancer/UndefinedMethodErrorEnhancer.php"));

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

namespace Symfony\\Component\\ErrorHandler\\ErrorEnhancer;

use Symfony\\Component\\ErrorHandler\\Error\\FatalError;
use Symfony\\Component\\ErrorHandler\\Error\\UndefinedMethodError;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class UndefinedMethodErrorEnhancer implements ErrorEnhancerInterface
{
    /**
     * {@inheritdoc}
     */
    public function enhance(\\Throwable \$error): ?\\Throwable
    {
        if (\$error instanceof FatalError) {
            return null;
        }

        \$message = \$error->getMessage();
        preg_match('/^Call to undefined method (.*)::(.*)\\(\\)\$/', \$message, \$matches);
        if (!\$matches) {
            return null;
        }

        \$className = \$matches[1];
        \$methodName = \$matches[2];

        \$message = sprintf('Attempted to call an undefined method named \"%s\" of class \"%s\".', \$methodName, \$className);

        if (!class_exists(\$className) || null === \$methods = get_class_methods(\$className)) {
            // failed to get the class or its methods on which an unknown method was called (for example on an anonymous class)
            return new UndefinedMethodError(\$message, \$error);
        }

        \$candidates = [];
        foreach (\$methods as \$definedMethodName) {
            \$lev = levenshtein(\$methodName, \$definedMethodName);
            if (\$lev <= \\strlen(\$methodName) / 3 || false !== strpos(\$definedMethodName, \$methodName)) {
                \$candidates[] = \$definedMethodName;
            }
        }

        if (\$candidates) {
            sort(\$candidates);
            \$last = array_pop(\$candidates).'\"?';
            if (\$candidates) {
                \$candidates = 'e.g. \"'.implode('\", \"', \$candidates).'\" or \"'.\$last;
            } else {
                \$candidates = '\"'.\$last;
            }

            \$message .= \"\\nDid you mean to call \".\$candidates;
        }

        return new UndefinedMethodError(\$message, \$error);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/ErrorEnhancer/UndefinedMethodErrorEnhancer.php";
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

namespace Symfony\\Component\\ErrorHandler\\ErrorEnhancer;

use Symfony\\Component\\ErrorHandler\\Error\\FatalError;
use Symfony\\Component\\ErrorHandler\\Error\\UndefinedMethodError;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class UndefinedMethodErrorEnhancer implements ErrorEnhancerInterface
{
    /**
     * {@inheritdoc}
     */
    public function enhance(\\Throwable \$error): ?\\Throwable
    {
        if (\$error instanceof FatalError) {
            return null;
        }

        \$message = \$error->getMessage();
        preg_match('/^Call to undefined method (.*)::(.*)\\(\\)\$/', \$message, \$matches);
        if (!\$matches) {
            return null;
        }

        \$className = \$matches[1];
        \$methodName = \$matches[2];

        \$message = sprintf('Attempted to call an undefined method named \"%s\" of class \"%s\".', \$methodName, \$className);

        if (!class_exists(\$className) || null === \$methods = get_class_methods(\$className)) {
            // failed to get the class or its methods on which an unknown method was called (for example on an anonymous class)
            return new UndefinedMethodError(\$message, \$error);
        }

        \$candidates = [];
        foreach (\$methods as \$definedMethodName) {
            \$lev = levenshtein(\$methodName, \$definedMethodName);
            if (\$lev <= \\strlen(\$methodName) / 3 || false !== strpos(\$definedMethodName, \$methodName)) {
                \$candidates[] = \$definedMethodName;
            }
        }

        if (\$candidates) {
            sort(\$candidates);
            \$last = array_pop(\$candidates).'\"?';
            if (\$candidates) {
                \$candidates = 'e.g. \"'.implode('\", \"', \$candidates).'\" or \"'.\$last;
            } else {
                \$candidates = '\"'.\$last;
            }

            \$message .= \"\\nDid you mean to call \".\$candidates;
        }

        return new UndefinedMethodError(\$message, \$error);
    }
}
", "@app/vendor/symfony/error-handler/ErrorEnhancer/UndefinedMethodErrorEnhancer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\ErrorEnhancer\\UndefinedMethodErrorEnhancer.php");
    }
}
