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

/* @app/vendor/composer/autoload_namespaces.php */
class __TwigTemplate_0b5b8e84c16d093ce74c7d072120b6ddac2828ff1171808bb33173d2dc1972ac extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/composer/autoload_namespaces.php"));

        // line 1
        echo "<?php

// autoload_namespaces.php @generated by Composer

\$vendorDir = dirname(dirname(__FILE__));
\$baseDir = dirname(\$vendorDir);

return array(
    'ProxyManager\\\\' => array(\$vendorDir . '/ocramius/proxy-manager/src'),
);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/composer/autoload_namespaces.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

// autoload_namespaces.php @generated by Composer

\$vendorDir = dirname(dirname(__FILE__));
\$baseDir = dirname(\$vendorDir);

return array(
    'ProxyManager\\\\' => array(\$vendorDir . '/ocramius/proxy-manager/src'),
);
", "@app/vendor/composer/autoload_namespaces.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\composer\\autoload_namespaces.php");
    }
}
