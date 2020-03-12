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

/* @app/vendor/symfony/maker-bundle/src/Doctrine/RelationOneToOne.php */
class __TwigTemplate_b2faeca84a5e319bd80cb75716597b3ee1e41249f5ea7e3ee5af55ad368f6abf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Doctrine/RelationOneToOne.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Doctrine;

use Symfony\\Bundle\\MakerBundle\\Str;

/**
 * @internal
 */
final class RelationOneToOne extends BaseSingleRelation
{
    private \$isOwning;

    public function isOwning(): bool
    {
        return \$this->isOwning;
    }

    public function setIsOwning(\$isOwning)
    {
        \$this->isOwning = \$isOwning;

        return \$this;
    }

    public function getTargetGetterMethodName()
    {
        return 'get'.Str::asCamelCase(\$this->getTargetPropertyName());
    }

    public function getTargetSetterMethodName()
    {
        return 'set'.Str::asCamelCase(\$this->getTargetPropertyName());
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Doctrine/RelationOneToOne.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Doctrine;

use Symfony\\Bundle\\MakerBundle\\Str;

/**
 * @internal
 */
final class RelationOneToOne extends BaseSingleRelation
{
    private \$isOwning;

    public function isOwning(): bool
    {
        return \$this->isOwning;
    }

    public function setIsOwning(\$isOwning)
    {
        \$this->isOwning = \$isOwning;

        return \$this;
    }

    public function getTargetGetterMethodName()
    {
        return 'get'.Str::asCamelCase(\$this->getTargetPropertyName());
    }

    public function getTargetSetterMethodName()
    {
        return 'set'.Str::asCamelCase(\$this->getTargetPropertyName());
    }
}
", "@app/vendor/symfony/maker-bundle/src/Doctrine/RelationOneToOne.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\RelationOneToOne.php");
    }
}
