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

/* @app/vendor/symfony/flex/src/Path.php */
class __TwigTemplate_6a135eb8a6b96671d4d2be458fe282015676e522f5718afb8bc3c072110cae88 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/Path.php"));

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

namespace Symfony\\Flex;

/**
 * @internal
 */
class Path
{
    private \$workingDirectory;

    public function __construct(\$workingDirectory)
    {
        \$this->workingDirectory = \$workingDirectory;
    }

    public function relativize(string \$absolutePath): string
    {
        \$relativePath = str_replace(\$this->workingDirectory, '.', \$absolutePath);

        return is_dir(\$absolutePath) ? rtrim(\$relativePath, '/').'/' : \$relativePath;
    }

    public function concatenate(array \$parts): string
    {
        \$first = array_shift(\$parts);

        return array_reduce(\$parts, function (string \$initial, string \$next): string {
            return rtrim(\$initial, '/').'/'.ltrim(\$next, '/');
        }, \$first);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/Path.php";
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

namespace Symfony\\Flex;

/**
 * @internal
 */
class Path
{
    private \$workingDirectory;

    public function __construct(\$workingDirectory)
    {
        \$this->workingDirectory = \$workingDirectory;
    }

    public function relativize(string \$absolutePath): string
    {
        \$relativePath = str_replace(\$this->workingDirectory, '.', \$absolutePath);

        return is_dir(\$absolutePath) ? rtrim(\$relativePath, '/').'/' : \$relativePath;
    }

    public function concatenate(array \$parts): string
    {
        \$first = array_shift(\$parts);

        return array_reduce(\$parts, function (string \$initial, string \$next): string {
            return rtrim(\$initial, '/').'/'.ltrim(\$next, '/');
        }, \$first);
    }
}
", "@app/vendor/symfony/flex/src/Path.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\Path.php");
    }
}
