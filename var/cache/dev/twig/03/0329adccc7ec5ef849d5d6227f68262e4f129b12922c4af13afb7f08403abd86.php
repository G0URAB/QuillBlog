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

/* @app/vendor/twig/extra-bundle/src/MissingExtensionSuggestor.php */
class __TwigTemplate_b703139b6efa25cd4a55d20768a62ad819d3e2cb315397e011c99b6baee38a12 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/extra-bundle/src/MissingExtensionSuggestor.php"));

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

namespace Twig\\Extra\\TwigExtraBundle;

use Twig\\Error\\SyntaxError;

final class MissingExtensionSuggestor
{
    public function suggestFilter(string \$name): bool
    {
        if (\$filter = Extensions::getFilter(\$name)) {
            throw new SyntaxError(sprintf('The \"%s\" filter is part of the %s, which is not installed/enabled; try running \"composer require %s\".', \$name, \$filter[0], \$filter[1]));
        }

        return false;
    }

    public function suggestFunction(string \$name): bool
    {
        if (\$function = Extensions::getFunction(\$name)) {
            throw new SyntaxError(sprintf('The \"%s\" function is part of the %s, which is not installed/enabled; try running \"composer require %s\".', \$name, \$function[0], \$function[1]));
        }

        return false;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/extra-bundle/src/MissingExtensionSuggestor.php";
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

namespace Twig\\Extra\\TwigExtraBundle;

use Twig\\Error\\SyntaxError;

final class MissingExtensionSuggestor
{
    public function suggestFilter(string \$name): bool
    {
        if (\$filter = Extensions::getFilter(\$name)) {
            throw new SyntaxError(sprintf('The \"%s\" filter is part of the %s, which is not installed/enabled; try running \"composer require %s\".', \$name, \$filter[0], \$filter[1]));
        }

        return false;
    }

    public function suggestFunction(string \$name): bool
    {
        if (\$function = Extensions::getFunction(\$name)) {
            throw new SyntaxError(sprintf('The \"%s\" function is part of the %s, which is not installed/enabled; try running \"composer require %s\".', \$name, \$function[0], \$function[1]));
        }

        return false;
    }
}
", "@app/vendor/twig/extra-bundle/src/MissingExtensionSuggestor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\extra-bundle\\src\\MissingExtensionSuggestor.php");
    }
}
