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

/* @app/vendor/symfony/flex/src/InformationOperation.php */
class __TwigTemplate_e5232ed05aa0328ab32cb54080ae36048b2f0d51419fb456a78516ff38dc74ae extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/InformationOperation.php"));

        // line 1
        echo "<?php

namespace Symfony\\Flex;

use Composer\\DependencyResolver\\Operation\\SolverOperation;
use Composer\\Package\\PackageInterface;

/**
 * @author Maxime Hélias <maximehelias16@gmail.com>
 */
class InformationOperation extends SolverOperation
{
    private \$package;

    public function __construct(PackageInterface \$package, \$reason = null)
    {
        parent::__construct(\$reason);

        \$this->package = \$package;
    }

    /**
     * Returns package instance.
     *
     * @return PackageInterface
     */
    public function getPackage()
    {
        return \$this->package;
    }

    /**
     * Returns job type.
     *
     * @return string
     */
    public function getJobType()
    {
        return 'information';
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return 'Information '.\$this->package->getPrettyName().' ('.\$this->formatVersion(\$this->package).')';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/InformationOperation.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Flex;

use Composer\\DependencyResolver\\Operation\\SolverOperation;
use Composer\\Package\\PackageInterface;

/**
 * @author Maxime Hélias <maximehelias16@gmail.com>
 */
class InformationOperation extends SolverOperation
{
    private \$package;

    public function __construct(PackageInterface \$package, \$reason = null)
    {
        parent::__construct(\$reason);

        \$this->package = \$package;
    }

    /**
     * Returns package instance.
     *
     * @return PackageInterface
     */
    public function getPackage()
    {
        return \$this->package;
    }

    /**
     * Returns job type.
     *
     * @return string
     */
    public function getJobType()
    {
        return 'information';
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return 'Information '.\$this->package->getPrettyName().' ('.\$this->formatVersion(\$this->package).')';
    }
}
", "@app/vendor/symfony/flex/src/InformationOperation.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\InformationOperation.php");
    }
}
