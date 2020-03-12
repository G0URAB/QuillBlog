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

/* @app/vendor/symfony/doctrine-bridge/Form/ChoiceList/EntityLoaderInterface.php */
class __TwigTemplate_ec10ac0e3fd0d2a77c9952bc74acadd35aba26e8fdff79025e0f6b5f2f869a09 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Form/ChoiceList/EntityLoaderInterface.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Form\\ChoiceList;

/**
 * Custom loader for entities in the choice list.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
interface EntityLoaderInterface
{
    /**
     * Returns an array of entities that are valid choices in the corresponding choice list.
     *
     * @return array The entities
     */
    public function getEntities();

    /**
     * Returns an array of entities matching the given identifiers.
     *
     * @return array The entities
     */
    public function getEntitiesByIds(string \$identifier, array \$values);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Form/ChoiceList/EntityLoaderInterface.php";
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

namespace Symfony\\Bridge\\Doctrine\\Form\\ChoiceList;

/**
 * Custom loader for entities in the choice list.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
interface EntityLoaderInterface
{
    /**
     * Returns an array of entities that are valid choices in the corresponding choice list.
     *
     * @return array The entities
     */
    public function getEntities();

    /**
     * Returns an array of entities matching the given identifiers.
     *
     * @return array The entities
     */
    public function getEntitiesByIds(string \$identifier, array \$values);
}
", "@app/vendor/symfony/doctrine-bridge/Form/ChoiceList/EntityLoaderInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Form\\ChoiceList\\EntityLoaderInterface.php");
    }
}
