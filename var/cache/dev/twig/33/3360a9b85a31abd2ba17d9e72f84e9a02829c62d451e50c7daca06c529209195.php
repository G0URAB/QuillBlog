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

/* @app/vendor/symfony/console/Input/StringInput.php */
class __TwigTemplate_258df9ddfa14a9a95fafa682c1a9124d36c36545da9994b1606a796daade338a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Input/StringInput.php"));

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

namespace Symfony\\Component\\Console\\Input;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * StringInput represents an input provided as a string.
 *
 * Usage:
 *
 *     \$input = new StringInput('foo --bar=\"foobar\"');
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StringInput extends ArgvInput
{
    const REGEX_STRING = '([^\\s]+?)(?:\\s|(?<!\\\\\\\\)\"|(?<!\\\\\\\\)\\'|\$)';
    const REGEX_QUOTED_STRING = '(?:\"([^\"\\\\\\\\]*(?:\\\\\\\\.[^\"\\\\\\\\]*)*)\"|\\'([^\\'\\\\\\\\]*(?:\\\\\\\\.[^\\'\\\\\\\\]*)*)\\')';

    /**
     * @param string \$input A string representing the parameters from the CLI
     */
    public function __construct(string \$input)
    {
        parent::__construct([]);

        \$this->setTokens(\$this->tokenize(\$input));
    }

    /**
     * Tokenizes a string.
     *
     * @throws InvalidArgumentException When unable to parse input (should never happen)
     */
    private function tokenize(string \$input): array
    {
        \$tokens = [];
        \$length = \\strlen(\$input);
        \$cursor = 0;
        while (\$cursor < \$length) {
            if (preg_match('/\\s+/A', \$input, \$match, null, \$cursor)) {
            } elseif (preg_match('/([^=\"\\'\\s]+?)(=?)('.self::REGEX_QUOTED_STRING.'+)/A', \$input, \$match, null, \$cursor)) {
                \$tokens[] = \$match[1].\$match[2].stripcslashes(str_replace(['\"\\'', '\\'\"', '\\'\\'', '\"\"'], '', substr(\$match[3], 1, \\strlen(\$match[3]) - 2)));
            } elseif (preg_match('/'.self::REGEX_QUOTED_STRING.'/A', \$input, \$match, null, \$cursor)) {
                \$tokens[] = stripcslashes(substr(\$match[0], 1, \\strlen(\$match[0]) - 2));
            } elseif (preg_match('/'.self::REGEX_STRING.'/A', \$input, \$match, null, \$cursor)) {
                \$tokens[] = stripcslashes(\$match[1]);
            } else {
                // should never happen
                throw new InvalidArgumentException(sprintf('Unable to parse input near \"... %s ...\"', substr(\$input, \$cursor, 10)));
            }

            \$cursor += \\strlen(\$match[0]);
        }

        return \$tokens;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Input/StringInput.php";
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

namespace Symfony\\Component\\Console\\Input;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * StringInput represents an input provided as a string.
 *
 * Usage:
 *
 *     \$input = new StringInput('foo --bar=\"foobar\"');
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StringInput extends ArgvInput
{
    const REGEX_STRING = '([^\\s]+?)(?:\\s|(?<!\\\\\\\\)\"|(?<!\\\\\\\\)\\'|\$)';
    const REGEX_QUOTED_STRING = '(?:\"([^\"\\\\\\\\]*(?:\\\\\\\\.[^\"\\\\\\\\]*)*)\"|\\'([^\\'\\\\\\\\]*(?:\\\\\\\\.[^\\'\\\\\\\\]*)*)\\')';

    /**
     * @param string \$input A string representing the parameters from the CLI
     */
    public function __construct(string \$input)
    {
        parent::__construct([]);

        \$this->setTokens(\$this->tokenize(\$input));
    }

    /**
     * Tokenizes a string.
     *
     * @throws InvalidArgumentException When unable to parse input (should never happen)
     */
    private function tokenize(string \$input): array
    {
        \$tokens = [];
        \$length = \\strlen(\$input);
        \$cursor = 0;
        while (\$cursor < \$length) {
            if (preg_match('/\\s+/A', \$input, \$match, null, \$cursor)) {
            } elseif (preg_match('/([^=\"\\'\\s]+?)(=?)('.self::REGEX_QUOTED_STRING.'+)/A', \$input, \$match, null, \$cursor)) {
                \$tokens[] = \$match[1].\$match[2].stripcslashes(str_replace(['\"\\'', '\\'\"', '\\'\\'', '\"\"'], '', substr(\$match[3], 1, \\strlen(\$match[3]) - 2)));
            } elseif (preg_match('/'.self::REGEX_QUOTED_STRING.'/A', \$input, \$match, null, \$cursor)) {
                \$tokens[] = stripcslashes(substr(\$match[0], 1, \\strlen(\$match[0]) - 2));
            } elseif (preg_match('/'.self::REGEX_STRING.'/A', \$input, \$match, null, \$cursor)) {
                \$tokens[] = stripcslashes(\$match[1]);
            } else {
                // should never happen
                throw new InvalidArgumentException(sprintf('Unable to parse input near \"... %s ...\"', substr(\$input, \$cursor, 10)));
            }

            \$cursor += \\strlen(\$match[0]);
        }

        return \$tokens;
    }
}
", "@app/vendor/symfony/console/Input/StringInput.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Input\\StringInput.php");
    }
}
