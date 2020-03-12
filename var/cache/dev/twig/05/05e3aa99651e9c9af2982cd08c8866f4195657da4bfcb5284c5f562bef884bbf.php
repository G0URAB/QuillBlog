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

/* @app/vendor/symfony/finder/Gitignore.php */
class __TwigTemplate_e5b0c224a7ae0e51b55d1cd6ba969abcdd61b796767f00b2421f34370dac302a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/finder/Gitignore.php"));

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

namespace Symfony\\Component\\Finder;

/**
 * Gitignore matches against text.
 *
 * @author Ahmed Abdou <mail@ahmd.io>
 */
class Gitignore
{
    /**
     * Returns a regexp which is the equivalent of the gitignore pattern.
     *
     * @return string The regexp
     */
    public static function toRegex(string \$gitignoreFileContent): string
    {
        \$gitignoreFileContent = preg_replace('/^[^\\\\\\r\\n]*#.*/m', '', \$gitignoreFileContent);
        \$gitignoreLines = preg_split('/\\r\\n|\\r|\\n/', \$gitignoreFileContent);
        \$gitignoreLines = array_map('trim', \$gitignoreLines);
        \$gitignoreLines = array_filter(\$gitignoreLines);

        \$ignoreLinesPositive = array_filter(\$gitignoreLines, function (string \$line) {
            return !preg_match('/^!/', \$line);
        });

        \$ignoreLinesNegative = array_filter(\$gitignoreLines, function (string \$line) {
            return preg_match('/^!/', \$line);
        });

        \$ignoreLinesNegative = array_map(function (string \$line) {
            return preg_replace('/^!(.*)/', '\${1}', \$line);
        }, \$ignoreLinesNegative);
        \$ignoreLinesNegative = array_map([__CLASS__, 'getRegexFromGitignore'], \$ignoreLinesNegative);

        \$ignoreLinesPositive = array_map([__CLASS__, 'getRegexFromGitignore'], \$ignoreLinesPositive);
        if (empty(\$ignoreLinesPositive)) {
            return '/^\$/';
        }

        if (empty(\$ignoreLinesNegative)) {
            return sprintf('/%s/', implode('|', \$ignoreLinesPositive));
        }

        return sprintf('/(?=^(?:(?!(%s)).)*\$)(%s)/', implode('|', \$ignoreLinesNegative), implode('|', \$ignoreLinesPositive));
    }

    private static function getRegexFromGitignore(string \$gitignorePattern): string
    {
        \$regex = '(';
        if (0 === strpos(\$gitignorePattern, '/')) {
            \$gitignorePattern = substr(\$gitignorePattern, 1);
            \$regex .= '^';
        } else {
            \$regex .= '(^|\\/)';
        }

        if ('/' === \$gitignorePattern[\\strlen(\$gitignorePattern) - 1]) {
            \$gitignorePattern = substr(\$gitignorePattern, 0, -1);
        }

        \$iMax = \\strlen(\$gitignorePattern);
        for (\$i = 0; \$i < \$iMax; ++\$i) {
            \$doubleChars = substr(\$gitignorePattern, \$i, 2);
            if ('**' === \$doubleChars) {
                \$regex .= '.+';
                ++\$i;
                continue;
            }

            \$c = \$gitignorePattern[\$i];
            switch (\$c) {
                case '*':
                    \$regex .= '[^\\/]+';
                    break;
                case '/':
                case '.':
                case ':':
                case '(':
                case ')':
                case '{':
                case '}':
                    \$regex .= '\\\\'.\$c;
                    break;
                default:
                    \$regex .= \$c;
            }
        }

        \$regex .= '(\$|\\/)';
        \$regex .= ')';

        return \$regex;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/finder/Gitignore.php";
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

namespace Symfony\\Component\\Finder;

/**
 * Gitignore matches against text.
 *
 * @author Ahmed Abdou <mail@ahmd.io>
 */
class Gitignore
{
    /**
     * Returns a regexp which is the equivalent of the gitignore pattern.
     *
     * @return string The regexp
     */
    public static function toRegex(string \$gitignoreFileContent): string
    {
        \$gitignoreFileContent = preg_replace('/^[^\\\\\\r\\n]*#.*/m', '', \$gitignoreFileContent);
        \$gitignoreLines = preg_split('/\\r\\n|\\r|\\n/', \$gitignoreFileContent);
        \$gitignoreLines = array_map('trim', \$gitignoreLines);
        \$gitignoreLines = array_filter(\$gitignoreLines);

        \$ignoreLinesPositive = array_filter(\$gitignoreLines, function (string \$line) {
            return !preg_match('/^!/', \$line);
        });

        \$ignoreLinesNegative = array_filter(\$gitignoreLines, function (string \$line) {
            return preg_match('/^!/', \$line);
        });

        \$ignoreLinesNegative = array_map(function (string \$line) {
            return preg_replace('/^!(.*)/', '\${1}', \$line);
        }, \$ignoreLinesNegative);
        \$ignoreLinesNegative = array_map([__CLASS__, 'getRegexFromGitignore'], \$ignoreLinesNegative);

        \$ignoreLinesPositive = array_map([__CLASS__, 'getRegexFromGitignore'], \$ignoreLinesPositive);
        if (empty(\$ignoreLinesPositive)) {
            return '/^\$/';
        }

        if (empty(\$ignoreLinesNegative)) {
            return sprintf('/%s/', implode('|', \$ignoreLinesPositive));
        }

        return sprintf('/(?=^(?:(?!(%s)).)*\$)(%s)/', implode('|', \$ignoreLinesNegative), implode('|', \$ignoreLinesPositive));
    }

    private static function getRegexFromGitignore(string \$gitignorePattern): string
    {
        \$regex = '(';
        if (0 === strpos(\$gitignorePattern, '/')) {
            \$gitignorePattern = substr(\$gitignorePattern, 1);
            \$regex .= '^';
        } else {
            \$regex .= '(^|\\/)';
        }

        if ('/' === \$gitignorePattern[\\strlen(\$gitignorePattern) - 1]) {
            \$gitignorePattern = substr(\$gitignorePattern, 0, -1);
        }

        \$iMax = \\strlen(\$gitignorePattern);
        for (\$i = 0; \$i < \$iMax; ++\$i) {
            \$doubleChars = substr(\$gitignorePattern, \$i, 2);
            if ('**' === \$doubleChars) {
                \$regex .= '.+';
                ++\$i;
                continue;
            }

            \$c = \$gitignorePattern[\$i];
            switch (\$c) {
                case '*':
                    \$regex .= '[^\\/]+';
                    break;
                case '/':
                case '.':
                case ':':
                case '(':
                case ')':
                case '{':
                case '}':
                    \$regex .= '\\\\'.\$c;
                    break;
                default:
                    \$regex .= \$c;
            }
        }

        \$regex .= '(\$|\\/)';
        \$regex .= ')';

        return \$regex;
    }
}
", "@app/vendor/symfony/finder/Gitignore.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\finder\\Gitignore.php");
    }
}
