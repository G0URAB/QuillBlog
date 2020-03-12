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

/* @app/vendor/symfony/flex/src/Recipe.php */
class __TwigTemplate_fd49d726209be00540ecce97079b7a4ebfb6fc046dd6e69f8051c4f029412ded extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/Recipe.php"));

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

use Composer\\Package\\PackageInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Recipe
{
    private \$package;
    private \$name;
    private \$job;
    private \$data;
    private \$lock;

    public function __construct(PackageInterface \$package, string \$name, string \$job, array \$data, array \$lock = [])
    {
        \$this->package = \$package;
        \$this->name = \$name;
        \$this->job = \$job;
        \$this->data = \$data;
        \$this->lock = \$lock;
    }

    public function getPackage(): PackageInterface
    {
        return \$this->package;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function getJob(): string
    {
        return \$this->job;
    }

    public function getManifest(): array
    {
        if (!isset(\$this->data['manifest'])) {
            throw new \\LogicException(sprintf('Manifest is not available for recipe \"%s\".', \$this->name));
        }

        return \$this->data['manifest'];
    }

    public function getFiles(): array
    {
        return \$this->data['files'] ?? [];
    }

    public function getOrigin(): string
    {
        return \$this->data['origin'] ?? '';
    }

    public function getURL(): string
    {
        if (!\$this->data['origin']) {
            return '';
        }

        // symfony/translation:3.3@github.com/symfony/recipes:master
        if (!preg_match('/^([^\\:]+?)\\:([^\\@]+)@([^\\:]+)\\:(.+)\$/', \$this->data['origin'], \$matches)) {
            // that excludes auto-generated recipes, which is what we want
            return '';
        }

        return sprintf('https://%s/tree/%s/%s/%s', \$matches[3], \$matches[4], \$matches[1], \$matches[2]);
    }

    public function isContrib(): bool
    {
        return \$this->data['is_contrib'] ?? false;
    }

    public function getRef()
    {
        return \$this->lock['recipe']['ref'] ?? null;
    }

    public function isAuto(): bool
    {
        return !isset(\$this->lock['recipe']);
    }

    public function getVersion(): string
    {
        return \$this->lock['version'];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/Recipe.php";
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

use Composer\\Package\\PackageInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Recipe
{
    private \$package;
    private \$name;
    private \$job;
    private \$data;
    private \$lock;

    public function __construct(PackageInterface \$package, string \$name, string \$job, array \$data, array \$lock = [])
    {
        \$this->package = \$package;
        \$this->name = \$name;
        \$this->job = \$job;
        \$this->data = \$data;
        \$this->lock = \$lock;
    }

    public function getPackage(): PackageInterface
    {
        return \$this->package;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function getJob(): string
    {
        return \$this->job;
    }

    public function getManifest(): array
    {
        if (!isset(\$this->data['manifest'])) {
            throw new \\LogicException(sprintf('Manifest is not available for recipe \"%s\".', \$this->name));
        }

        return \$this->data['manifest'];
    }

    public function getFiles(): array
    {
        return \$this->data['files'] ?? [];
    }

    public function getOrigin(): string
    {
        return \$this->data['origin'] ?? '';
    }

    public function getURL(): string
    {
        if (!\$this->data['origin']) {
            return '';
        }

        // symfony/translation:3.3@github.com/symfony/recipes:master
        if (!preg_match('/^([^\\:]+?)\\:([^\\@]+)@([^\\:]+)\\:(.+)\$/', \$this->data['origin'], \$matches)) {
            // that excludes auto-generated recipes, which is what we want
            return '';
        }

        return sprintf('https://%s/tree/%s/%s/%s', \$matches[3], \$matches[4], \$matches[1], \$matches[2]);
    }

    public function isContrib(): bool
    {
        return \$this->data['is_contrib'] ?? false;
    }

    public function getRef()
    {
        return \$this->lock['recipe']['ref'] ?? null;
    }

    public function isAuto(): bool
    {
        return !isset(\$this->lock['recipe']);
    }

    public function getVersion(): string
    {
        return \$this->lock['version'];
    }
}
", "@app/vendor/symfony/flex/src/Recipe.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\Recipe.php");
    }
}
