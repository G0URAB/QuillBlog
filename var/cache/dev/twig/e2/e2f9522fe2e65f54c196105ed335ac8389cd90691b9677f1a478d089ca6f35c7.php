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

/* @app/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php */
class __TwigTemplate_a3291e310ba5ba120ec01495743d4924d53b980ea121454472a981a4d4a7fd44 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Validator;

use Doctrine\\Persistence\\ManagerRegistry;
use Symfony\\Component\\Validator\\ObjectInitializerInterface;

/**
 * Automatically loads proxy object before validation.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DoctrineInitializer implements ObjectInitializerInterface
{
    protected \$registry;

    public function __construct(ManagerRegistry \$registry)
    {
        \$this->registry = \$registry;
    }

    public function initialize(object \$object)
    {
        \$manager = \$this->registry->getManagerForClass(\\get_class(\$object));
        if (null !== \$manager) {
            \$manager->initializeObject(\$object);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php";
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

namespace Symfony\\Bridge\\Doctrine\\Validator;

use Doctrine\\Persistence\\ManagerRegistry;
use Symfony\\Component\\Validator\\ObjectInitializerInterface;

/**
 * Automatically loads proxy object before validation.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DoctrineInitializer implements ObjectInitializerInterface
{
    protected \$registry;

    public function __construct(ManagerRegistry \$registry)
    {
        \$this->registry = \$registry;
    }

    public function initialize(object \$object)
    {
        \$manager = \$this->registry->getManagerForClass(\\get_class(\$object));
        if (null !== \$manager) {
            \$manager->initializeObject(\$object);
        }
    }
}
", "@app/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Validator\\DoctrineInitializer.php");
    }
}
