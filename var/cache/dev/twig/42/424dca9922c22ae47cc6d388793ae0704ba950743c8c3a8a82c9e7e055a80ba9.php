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

/* @app/vendor/symfony/flex/src/Unpack/Operation.php */
class __TwigTemplate_052076c7288ea50d18be5ec63ea02e7df49e5aef69d203fd1d1480693ebfcc51 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/Unpack/Operation.php"));

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

namespace Symfony\\Flex\\Unpack;

class Operation
{
    private \$packages = [];
    private \$unpack;
    private \$sort;

    public function __construct(bool \$unpack, bool \$sort)
    {
        \$this->unpack = \$unpack;
        \$this->sort = \$sort;
    }

    public function addPackage(string \$name, string \$version, bool \$dev)
    {
        \$this->packages[] = [
            'name' => \$name,
            'version' => \$version,
            'dev' => \$dev,
        ];
    }

    public function getPackages(): array
    {
        return \$this->packages;
    }

    public function shouldUnpack(): bool
    {
        return \$this->unpack;
    }

    public function shouldSort(): bool
    {
        return \$this->sort;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/Unpack/Operation.php";
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

namespace Symfony\\Flex\\Unpack;

class Operation
{
    private \$packages = [];
    private \$unpack;
    private \$sort;

    public function __construct(bool \$unpack, bool \$sort)
    {
        \$this->unpack = \$unpack;
        \$this->sort = \$sort;
    }

    public function addPackage(string \$name, string \$version, bool \$dev)
    {
        \$this->packages[] = [
            'name' => \$name,
            'version' => \$version,
            'dev' => \$dev,
        ];
    }

    public function getPackages(): array
    {
        return \$this->packages;
    }

    public function shouldUnpack(): bool
    {
        return \$this->unpack;
    }

    public function shouldSort(): bool
    {
        return \$this->sort;
    }
}
", "@app/vendor/symfony/flex/src/Unpack/Operation.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\Unpack\\Operation.php");
    }
}
