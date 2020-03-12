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

/* @app/vendor/symfony/error-handler/ErrorEnhancer/UndefinedFunctionErrorEnhancer.php */
class __TwigTemplate_9abf88d198f290751c23fd56f5e6d5e399f591baf7dcb0926d7353c8bd4750ad extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/ErrorEnhancer/UndefinedFunctionErrorEnhancer.php"));

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
use Symfony\\Component\\ErrorHandler\\Error\\UndefinedFunctionError;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UndefinedFunctionErrorEnhancer implements ErrorEnhancerInterface
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
        \$messageLen = \\strlen(\$message);
        \$notFoundSuffix = '()';
        \$notFoundSuffixLen = \\strlen(\$notFoundSuffix);
        if (\$notFoundSuffixLen > \$messageLen) {
            return null;
        }

        if (0 !== substr_compare(\$message, \$notFoundSuffix, -\$notFoundSuffixLen)) {
            return null;
        }

        \$prefix = 'Call to undefined function ';
        \$prefixLen = \\strlen(\$prefix);
        if (0 !== strpos(\$message, \$prefix)) {
            return null;
        }

        \$fullyQualifiedFunctionName = substr(\$message, \$prefixLen, -\$notFoundSuffixLen);
        if (false !== \$namespaceSeparatorIndex = strrpos(\$fullyQualifiedFunctionName, '\\\\')) {
            \$functionName = substr(\$fullyQualifiedFunctionName, \$namespaceSeparatorIndex + 1);
            \$namespacePrefix = substr(\$fullyQualifiedFunctionName, 0, \$namespaceSeparatorIndex);
            \$message = sprintf('Attempted to call function \"%s\" from namespace \"%s\".', \$functionName, \$namespacePrefix);
        } else {
            \$functionName = \$fullyQualifiedFunctionName;
            \$message = sprintf('Attempted to call function \"%s\" from the global namespace.', \$functionName);
        }

        \$candidates = [];
        foreach (get_defined_functions() as \$type => \$definedFunctionNames) {
            foreach (\$definedFunctionNames as \$definedFunctionName) {
                if (false !== \$namespaceSeparatorIndex = strrpos(\$definedFunctionName, '\\\\')) {
                    \$definedFunctionNameBasename = substr(\$definedFunctionName, \$namespaceSeparatorIndex + 1);
                } else {
                    \$definedFunctionNameBasename = \$definedFunctionName;
                }

                if (\$definedFunctionNameBasename === \$functionName) {
                    \$candidates[] = '\\\\'.\$definedFunctionName;
                }
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

        return new UndefinedFunctionError(\$message, \$error);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/ErrorEnhancer/UndefinedFunctionErrorEnhancer.php";
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
use Symfony\\Component\\ErrorHandler\\Error\\UndefinedFunctionError;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UndefinedFunctionErrorEnhancer implements ErrorEnhancerInterface
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
        \$messageLen = \\strlen(\$message);
        \$notFoundSuffix = '()';
        \$notFoundSuffixLen = \\strlen(\$notFoundSuffix);
        if (\$notFoundSuffixLen > \$messageLen) {
            return null;
        }

        if (0 !== substr_compare(\$message, \$notFoundSuffix, -\$notFoundSuffixLen)) {
            return null;
        }

        \$prefix = 'Call to undefined function ';
        \$prefixLen = \\strlen(\$prefix);
        if (0 !== strpos(\$message, \$prefix)) {
            return null;
        }

        \$fullyQualifiedFunctionName = substr(\$message, \$prefixLen, -\$notFoundSuffixLen);
        if (false !== \$namespaceSeparatorIndex = strrpos(\$fullyQualifiedFunctionName, '\\\\')) {
            \$functionName = substr(\$fullyQualifiedFunctionName, \$namespaceSeparatorIndex + 1);
            \$namespacePrefix = substr(\$fullyQualifiedFunctionName, 0, \$namespaceSeparatorIndex);
            \$message = sprintf('Attempted to call function \"%s\" from namespace \"%s\".', \$functionName, \$namespacePrefix);
        } else {
            \$functionName = \$fullyQualifiedFunctionName;
            \$message = sprintf('Attempted to call function \"%s\" from the global namespace.', \$functionName);
        }

        \$candidates = [];
        foreach (get_defined_functions() as \$type => \$definedFunctionNames) {
            foreach (\$definedFunctionNames as \$definedFunctionName) {
                if (false !== \$namespaceSeparatorIndex = strrpos(\$definedFunctionName, '\\\\')) {
                    \$definedFunctionNameBasename = substr(\$definedFunctionName, \$namespaceSeparatorIndex + 1);
                } else {
                    \$definedFunctionNameBasename = \$definedFunctionName;
                }

                if (\$definedFunctionNameBasename === \$functionName) {
                    \$candidates[] = '\\\\'.\$definedFunctionName;
                }
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

        return new UndefinedFunctionError(\$message, \$error);
    }
}
", "@app/vendor/symfony/error-handler/ErrorEnhancer/UndefinedFunctionErrorEnhancer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\ErrorEnhancer\\UndefinedFunctionErrorEnhancer.php");
    }
}
