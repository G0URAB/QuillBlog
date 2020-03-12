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

/* @app/vendor/doctrine/doctrine-bundle/Mapping/ClassMetadataCollection.php */
class __TwigTemplate_b2753d16cb2324631d2eb57cd33be2a4fa105f8ef161885600e8dbea3c5ea797 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Mapping/ClassMetadataCollection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Mapping;

use Doctrine\\ORM\\Mapping\\ClassMetadata;

class ClassMetadataCollection
{
    /** @var string */
    private \$path;

    /** @var string */
    private \$namespace;

    /** @var ClassMetadata[] */
    private \$metadata;

    /**
     * @param ClassMetadata[] \$metadata
     */
    public function __construct(array \$metadata)
    {
        \$this->metadata = \$metadata;
    }

    /**
     * @return ClassMetadata[]
     */
    public function getMetadata()
    {
        return \$this->metadata;
    }

    /**
     * @param string \$path
     */
    public function setPath(\$path)
    {
        \$this->path = \$path;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return \$this->path;
    }

    /**
     * @param string \$namespace
     */
    public function setNamespace(\$namespace)
    {
        \$this->namespace = \$namespace;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return \$this->namespace;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Mapping/ClassMetadataCollection.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Mapping;

use Doctrine\\ORM\\Mapping\\ClassMetadata;

class ClassMetadataCollection
{
    /** @var string */
    private \$path;

    /** @var string */
    private \$namespace;

    /** @var ClassMetadata[] */
    private \$metadata;

    /**
     * @param ClassMetadata[] \$metadata
     */
    public function __construct(array \$metadata)
    {
        \$this->metadata = \$metadata;
    }

    /**
     * @return ClassMetadata[]
     */
    public function getMetadata()
    {
        return \$this->metadata;
    }

    /**
     * @param string \$path
     */
    public function setPath(\$path)
    {
        \$this->path = \$path;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return \$this->path;
    }

    /**
     * @param string \$namespace
     */
    public function setNamespace(\$namespace)
    {
        \$this->namespace = \$namespace;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return \$this->namespace;
    }
}
", "@app/vendor/doctrine/doctrine-bundle/Mapping/ClassMetadataCollection.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Mapping\\ClassMetadataCollection.php");
    }
}
