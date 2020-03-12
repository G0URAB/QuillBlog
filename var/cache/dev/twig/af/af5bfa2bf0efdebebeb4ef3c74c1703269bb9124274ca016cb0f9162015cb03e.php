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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Event/LoadClassMetadataEventArgs.php */
class __TwigTemplate_e7245a78a94a444ff46c239fe52b5bbc31a64d8dfc748689468a9387952980ad extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Event/LoadClassMetadataEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Persistence\\ObjectManager;
use function class_exists;

/**
 * Class that holds event arguments for a loadMetadata event.
 */
class LoadClassMetadataEventArgs extends EventArgs
{
    /** @var ClassMetadata */
    private \$classMetadata;

    /** @var ObjectManager */
    private \$objectManager;

    public function __construct(ClassMetadata \$classMetadata, ObjectManager \$objectManager)
    {
        \$this->classMetadata = \$classMetadata;
        \$this->objectManager = \$objectManager;
    }

    /**
     * Retrieves the associated ClassMetadata.
     *
     * @return ClassMetadata
     */
    public function getClassMetadata()
    {
        return \$this->classMetadata;
    }

    /**
     * Retrieves the associated ObjectManager.
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return \$this->objectManager;
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\Event\\LoadClassMetadataEventArgs::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Event/LoadClassMetadataEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Persistence\\ObjectManager;
use function class_exists;

/**
 * Class that holds event arguments for a loadMetadata event.
 */
class LoadClassMetadataEventArgs extends EventArgs
{
    /** @var ClassMetadata */
    private \$classMetadata;

    /** @var ObjectManager */
    private \$objectManager;

    public function __construct(ClassMetadata \$classMetadata, ObjectManager \$objectManager)
    {
        \$this->classMetadata = \$classMetadata;
        \$this->objectManager = \$objectManager;
    }

    /**
     * Retrieves the associated ClassMetadata.
     *
     * @return ClassMetadata
     */
    public function getClassMetadata()
    {
        return \$this->classMetadata;
    }

    /**
     * Retrieves the associated ObjectManager.
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return \$this->objectManager;
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\Event\\LoadClassMetadataEventArgs::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Event/LoadClassMetadataEventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Event\\LoadClassMetadataEventArgs.php");
    }
}
