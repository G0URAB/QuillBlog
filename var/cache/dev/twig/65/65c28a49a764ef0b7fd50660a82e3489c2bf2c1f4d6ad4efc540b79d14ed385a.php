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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/PropertyChangedListener.php */
class __TwigTemplate_a6abc5021f070f06928275e8fe4e427786c4fd15608bd758e32f4f281f6e0d51 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/PropertyChangedListener.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence;

use function interface_exists;

/**
 * Contract for classes that are potential listeners of a {@see NotifyPropertyChanged}
 * implementor.
 */
interface PropertyChangedListener
{
    /**
     * Collect information about a property change.
     *
     * @param object \$sender       The object on which the property changed.
     * @param string \$propertyName The name of the property that changed.
     * @param mixed  \$oldValue     The old value of the property that changed.
     * @param mixed  \$newValue     The new value of the property that changed.
     *
     * @return void
     */
    public function propertyChanged(\$sender, \$propertyName, \$oldValue, \$newValue);
}

interface_exists(\\Doctrine\\Common\\PropertyChangedListener::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/PropertyChangedListener.php";
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
 * Contract for classes that are potential listeners of a {@see NotifyPropertyChanged}
 * implementor.
 */
interface PropertyChangedListener
{
    /**
     * Collect information about a property change.
     *
     * @param object \$sender       The object on which the property changed.
     * @param string \$propertyName The name of the property that changed.
     * @param mixed  \$oldValue     The old value of the property that changed.
     * @param mixed  \$newValue     The new value of the property that changed.
     *
     * @return void
     */
    public function propertyChanged(\$sender, \$propertyName, \$oldValue, \$newValue);
}

interface_exists(\\Doctrine\\Common\\PropertyChangedListener::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/PropertyChangedListener.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\PropertyChangedListener.php");
    }
}
