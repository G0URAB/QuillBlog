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

/* @app/vendor/symfony/doctrine-bridge/Form/DoctrineOrmExtension.php */
class __TwigTemplate_88719d22bb7abe03eeecd660c725e41c4f2e403f46a4389c492ecc07cef77967 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Form/DoctrineOrmExtension.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Form;

use Doctrine\\Persistence\\ManagerRegistry;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractExtension;

class DoctrineOrmExtension extends AbstractExtension
{
    protected \$registry;

    public function __construct(ManagerRegistry \$registry)
    {
        \$this->registry = \$registry;
    }

    protected function loadTypes()
    {
        return [
            new EntityType(\$this->registry),
        ];
    }

    protected function loadTypeGuesser()
    {
        return new DoctrineOrmTypeGuesser(\$this->registry);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Form/DoctrineOrmExtension.php";
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

namespace Symfony\\Bridge\\Doctrine\\Form;

use Doctrine\\Persistence\\ManagerRegistry;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractExtension;

class DoctrineOrmExtension extends AbstractExtension
{
    protected \$registry;

    public function __construct(ManagerRegistry \$registry)
    {
        \$this->registry = \$registry;
    }

    protected function loadTypes()
    {
        return [
            new EntityType(\$this->registry),
        ];
    }

    protected function loadTypeGuesser()
    {
        return new DoctrineOrmTypeGuesser(\$this->registry);
    }
}
", "@app/vendor/symfony/doctrine-bridge/Form/DoctrineOrmExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Form\\DoctrineOrmExtension.php");
    }
}
