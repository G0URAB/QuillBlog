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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManagerAware.php */
class __TwigTemplate_3989e23bbc117e59356b121aa76c37590fdd5d1c28b202f7405a9bf0e0bda708 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManagerAware.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence;

use Doctrine\\Persistence\\Mapping\\ClassMetadata;
use function interface_exists;

/**
 * Makes a Persistent Objects aware of its own object-manager.
 *
 * Using this interface the managing object manager and class metadata instances
 * are injected into the persistent object after construction. This allows
 * you to implement ActiveRecord functionality on top of the persistence-ignorance
 * that Doctrine propagates.
 *
 * Word of Warning: This is a very powerful hook to change how you can work with your domain models.
 * Using this hook will break the Single Responsibility Principle inside your Domain Objects
 * and increase the coupling of database and objects.
 *
 * Every ObjectManager has to implement this functionality itself.
 */
interface ObjectManagerAware
{
    /**
     * Injects responsible ObjectManager and the ClassMetadata into this persistent object.
     *
     * @return void
     */
    public function injectObjectManager(ObjectManager \$objectManager, ClassMetadata \$classMetadata);
}

interface_exists(\\Doctrine\\Common\\Persistence\\ObjectManagerAware::class);
interface_exists(ClassMetadata::class);
interface_exists(ObjectManager::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManagerAware.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence;

use Doctrine\\Persistence\\Mapping\\ClassMetadata;
use function interface_exists;

/**
 * Makes a Persistent Objects aware of its own object-manager.
 *
 * Using this interface the managing object manager and class metadata instances
 * are injected into the persistent object after construction. This allows
 * you to implement ActiveRecord functionality on top of the persistence-ignorance
 * that Doctrine propagates.
 *
 * Word of Warning: This is a very powerful hook to change how you can work with your domain models.
 * Using this hook will break the Single Responsibility Principle inside your Domain Objects
 * and increase the coupling of database and objects.
 *
 * Every ObjectManager has to implement this functionality itself.
 */
interface ObjectManagerAware
{
    /**
     * Injects responsible ObjectManager and the ClassMetadata into this persistent object.
     *
     * @return void
     */
    public function injectObjectManager(ObjectManager \$objectManager, ClassMetadata \$classMetadata);
}

interface_exists(\\Doctrine\\Common\\Persistence\\ObjectManagerAware::class);
interface_exists(ClassMetadata::class);
interface_exists(ObjectManager::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManagerAware.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectManagerAware.php");
    }
}
