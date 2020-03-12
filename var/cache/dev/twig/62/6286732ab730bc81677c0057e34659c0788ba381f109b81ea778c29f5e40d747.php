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

/* @app/vendor/symfony/maker-bundle/src/Doctrine/BaseRelation.php */
class __TwigTemplate_4c65515bdcb547412a48e4d4295281d7f0665f5ab947e4a31d04fa784f8c4333 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Doctrine/BaseRelation.php"));

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

/**
 * @internal
 */
abstract class BaseRelation
{
    private \$propertyName;
    private \$targetClassName;
    private \$targetPropertyName;
    private \$isSelfReferencing = false;
    private \$mapInverseRelation = true;

    abstract public function isOwning(): bool;

    public function getPropertyName()
    {
        return \$this->propertyName;
    }

    public function setPropertyName(\$propertyName)
    {
        \$this->propertyName = \$propertyName;

        return \$this;
    }

    public function getTargetClassName()
    {
        return \$this->targetClassName;
    }

    public function setTargetClassName(\$targetClassName)
    {
        \$this->targetClassName = \$targetClassName;

        return \$this;
    }

    public function getTargetPropertyName()
    {
        return \$this->targetPropertyName;
    }

    public function setTargetPropertyName(\$targetPropertyName)
    {
        \$this->targetPropertyName = \$targetPropertyName;

        return \$this;
    }

    public function isSelfReferencing(): bool
    {
        return \$this->isSelfReferencing;
    }

    public function setIsSelfReferencing(bool \$isSelfReferencing)
    {
        \$this->isSelfReferencing = \$isSelfReferencing;

        return \$this;
    }

    public function getMapInverseRelation(): bool
    {
        return \$this->mapInverseRelation;
    }

    public function setMapInverseRelation(bool \$mapInverseRelation)
    {
        \$this->mapInverseRelation = \$mapInverseRelation;

        return \$this;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Doctrine/BaseRelation.php";
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

/**
 * @internal
 */
abstract class BaseRelation
{
    private \$propertyName;
    private \$targetClassName;
    private \$targetPropertyName;
    private \$isSelfReferencing = false;
    private \$mapInverseRelation = true;

    abstract public function isOwning(): bool;

    public function getPropertyName()
    {
        return \$this->propertyName;
    }

    public function setPropertyName(\$propertyName)
    {
        \$this->propertyName = \$propertyName;

        return \$this;
    }

    public function getTargetClassName()
    {
        return \$this->targetClassName;
    }

    public function setTargetClassName(\$targetClassName)
    {
        \$this->targetClassName = \$targetClassName;

        return \$this;
    }

    public function getTargetPropertyName()
    {
        return \$this->targetPropertyName;
    }

    public function setTargetPropertyName(\$targetPropertyName)
    {
        \$this->targetPropertyName = \$targetPropertyName;

        return \$this;
    }

    public function isSelfReferencing(): bool
    {
        return \$this->isSelfReferencing;
    }

    public function setIsSelfReferencing(bool \$isSelfReferencing)
    {
        \$this->isSelfReferencing = \$isSelfReferencing;

        return \$this;
    }

    public function getMapInverseRelation(): bool
    {
        return \$this->mapInverseRelation;
    }

    public function setMapInverseRelation(bool \$mapInverseRelation)
    {
        \$this->mapInverseRelation = \$mapInverseRelation;

        return \$this;
    }
}
", "@app/vendor/symfony/maker-bundle/src/Doctrine/BaseRelation.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\BaseRelation.php");
    }
}
