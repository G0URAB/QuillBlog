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

/* @app/vendor/doctrine/common/lib/Doctrine/Common/Version.php */
class __TwigTemplate_362e12e20e351239fb5dd0ba68352e65f10a39a35914c7f44c76417143997dae extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/common/lib/Doctrine/Common/Version.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common;

/**
 * Class to store and retrieve the version of Doctrine.
 *
 * @link   www.doctrine-project.org
 * @since  2.0
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 *
 * @deprecated The Version class is deprecated, please refrain from checking the version of doctrine/common.
 */
class Version
{
    /**
     * Current Doctrine Version.
     */
    const VERSION = '2.12.0-DEV';

    /**
     * Compares a Doctrine version with the current one.
     *
     * @param string \$version Doctrine version to compare.
     *
     * @return int -1 if older, 0 if it is the same, 1 if version passed as argument is newer.
     */
    public static function compare(\$version)
    {
        \$currentVersion = str_replace(' ', '', strtolower(self::VERSION));
        \$version        = str_replace(' ', '', \$version);

        return version_compare(\$version, \$currentVersion);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/common/lib/Doctrine/Common/Version.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common;

/**
 * Class to store and retrieve the version of Doctrine.
 *
 * @link   www.doctrine-project.org
 * @since  2.0
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 *
 * @deprecated The Version class is deprecated, please refrain from checking the version of doctrine/common.
 */
class Version
{
    /**
     * Current Doctrine Version.
     */
    const VERSION = '2.12.0-DEV';

    /**
     * Compares a Doctrine version with the current one.
     *
     * @param string \$version Doctrine version to compare.
     *
     * @return int -1 if older, 0 if it is the same, 1 if version passed as argument is newer.
     */
    public static function compare(\$version)
    {
        \$currentVersion = str_replace(' ', '', strtolower(self::VERSION));
        \$version        = str_replace(' ', '', \$version);

        return version_compare(\$version, \$currentVersion);
    }
}
", "@app/vendor/doctrine/common/lib/Doctrine/Common/Version.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Version.php");
    }
}
