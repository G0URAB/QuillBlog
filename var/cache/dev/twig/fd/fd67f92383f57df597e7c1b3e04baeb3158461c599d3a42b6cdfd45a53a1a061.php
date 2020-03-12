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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/NotifyPropertyChanged.php */
class __TwigTemplate_8362f2a8ae544b9cdbe65ad2e0af64be2c3fd6c72b59371207e31380f29ba0a7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/NotifyPropertyChanged.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence;

use function interface_exists;

/**
 * Interface for classes that notify event listeners of changes to their managed properties.
 *
 * This interface is implemented by objects that manually want to notify their object manager or
 * other listeners when properties change, instead of relying on the object manager to compute
 * property changes itself when changes are to be persisted.
 */
interface NotifyPropertyChanged
{
    /**
     * Adds a listener that wants to be notified about property changes.
     *
     * @return void
     */
    public function addPropertyChangedListener(PropertyChangedListener \$listener);
}

interface_exists(\\Doctrine\\Common\\NotifyPropertyChanged::class);
interface_exists(PropertyChangedListener::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/NotifyPropertyChanged.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence;

use function interface_exists;

/**
 * Interface for classes that notify event listeners of changes to their managed properties.
 *
 * This interface is implemented by objects that manually want to notify their object manager or
 * other listeners when properties change, instead of relying on the object manager to compute
 * property changes itself when changes are to be persisted.
 */
interface NotifyPropertyChanged
{
    /**
     * Adds a listener that wants to be notified about property changes.
     *
     * @return void
     */
    public function addPropertyChangedListener(PropertyChangedListener \$listener);
}

interface_exists(\\Doctrine\\Common\\NotifyPropertyChanged::class);
interface_exists(PropertyChangedListener::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/NotifyPropertyChanged.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\NotifyPropertyChanged.php");
    }
}
