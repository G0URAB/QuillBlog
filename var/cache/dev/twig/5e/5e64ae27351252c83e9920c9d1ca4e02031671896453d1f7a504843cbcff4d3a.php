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

/* @app/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php */
class __TwigTemplate_44f90377eef5705cce43058c04a053a53a7ced1e8144831cbd050d24ba8fa9ae extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php"));

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

namespace Symfony\\Component\\DependencyInjection;

/**
 * EnvVarLoaderInterface objects return key/value pairs that are added to the list of available env vars.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface EnvVarLoaderInterface
{
    /**
     * @return string[] Key/value pairs that can be accessed using the regular \"%env()%\" syntax
     */
    public function loadEnvVars(): array;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php";
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

namespace Symfony\\Component\\DependencyInjection;

/**
 * EnvVarLoaderInterface objects return key/value pairs that are added to the list of available env vars.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface EnvVarLoaderInterface
{
    /**
     * @return string[] Key/value pairs that can be accessed using the regular \"%env()%\" syntax
     */
    public function loadEnvVars(): array;
}
", "@app/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php");
    }
}
