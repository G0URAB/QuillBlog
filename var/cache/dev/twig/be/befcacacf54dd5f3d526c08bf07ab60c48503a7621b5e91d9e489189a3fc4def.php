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

/* @app/vendor/composer/autoload_files.php */
class __TwigTemplate_778fa794e6a3e0480b15c290cfdd3c0fd8b25a3f74d89f6738f724a79e5fa241 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/composer/autoload_files.php"));

        // line 1
        echo "<?php

// autoload_files.php @generated by Composer

\$vendorDir = dirname(dirname(__FILE__));
\$baseDir = dirname(\$vendorDir);

return array(
    '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => \$vendorDir . '/symfony/polyfill-mbstring/bootstrap.php',
    '0d59ee240a4cd96ddbb4ff164fccea4d' => \$vendorDir . '/symfony/polyfill-php73/bootstrap.php',
    'f598d06aa772fa33d905e87be6398fb1' => \$vendorDir . '/symfony/polyfill-intl-idn/bootstrap.php',
    '667aeda72477189d0494fecd327c3641' => \$vendorDir . '/symfony/var-dumper/Resources/functions/dump.php',
);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/composer/autoload_files.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

// autoload_files.php @generated by Composer

\$vendorDir = dirname(dirname(__FILE__));
\$baseDir = dirname(\$vendorDir);

return array(
    '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => \$vendorDir . '/symfony/polyfill-mbstring/bootstrap.php',
    '0d59ee240a4cd96ddbb4ff164fccea4d' => \$vendorDir . '/symfony/polyfill-php73/bootstrap.php',
    'f598d06aa772fa33d905e87be6398fb1' => \$vendorDir . '/symfony/polyfill-intl-idn/bootstrap.php',
    '667aeda72477189d0494fecd327c3641' => \$vendorDir . '/symfony/var-dumper/Resources/functions/dump.php',
);
", "@app/vendor/composer/autoload_files.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\composer\\autoload_files.php");
    }
}
