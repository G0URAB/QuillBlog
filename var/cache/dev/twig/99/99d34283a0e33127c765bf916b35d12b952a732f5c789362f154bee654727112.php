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

/* @app/vendor/symfony/maker-bundle/src/Doctrine/RelationOneToMany.php */
class __TwigTemplate_b5792fb7010c86731700eab5c666ee21de45e8ef320905db3f30d703e75a3f35 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Doctrine/RelationOneToMany.php"));

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
final class RelationOneToMany extends BaseCollectionRelation
{
    private \$orphanRemoval;

    public function getOrphanRemoval(): bool
    {
        return \$this->orphanRemoval;
    }

    public function setOrphanRemoval(\$orphanRemoval)
    {
        \$this->orphanRemoval = \$orphanRemoval;

        return \$this;
    }

    public function getTargetGetterMethodName(): string
    {
        return 'get'.Str::asCamelCase(\$this->getTargetPropertyName());
    }

    public function getTargetSetterMethodName(): string
    {
        return 'set'.Str::asCamelCase(\$this->getTargetPropertyName());
    }

    public function isOwning(): bool
    {
        return false;
    }

    public function isMapInverseRelation(): bool
    {
        throw new \\Exception('OneToMany IS the inverse side!');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Doctrine/RelationOneToMany.php";
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
final class RelationOneToMany extends BaseCollectionRelation
{
    private \$orphanRemoval;

    public function getOrphanRemoval(): bool
    {
        return \$this->orphanRemoval;
    }

    public function setOrphanRemoval(\$orphanRemoval)
    {
        \$this->orphanRemoval = \$orphanRemoval;

        return \$this;
    }

    public function getTargetGetterMethodName(): string
    {
        return 'get'.Str::asCamelCase(\$this->getTargetPropertyName());
    }

    public function getTargetSetterMethodName(): string
    {
        return 'set'.Str::asCamelCase(\$this->getTargetPropertyName());
    }

    public function isOwning(): bool
    {
        return false;
    }

    public function isMapInverseRelation(): bool
    {
        throw new \\Exception('OneToMany IS the inverse side!');
    }
}
", "@app/vendor/symfony/maker-bundle/src/Doctrine/RelationOneToMany.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\RelationOneToMany.php");
    }
}
