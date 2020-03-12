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

/* @app/vendor/symfony/var-dumper/Caster/SymfonyCaster.php */
class __TwigTemplate_00ca410539087ff91256d10774c7118316f2806704b4c0c0661c3d16bd109146 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/SymfonyCaster.php"));

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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * @final
 */
class SymfonyCaster
{
    private static \$requestGetters = [
        'pathInfo' => 'getPathInfo',
        'requestUri' => 'getRequestUri',
        'baseUrl' => 'getBaseUrl',
        'basePath' => 'getBasePath',
        'method' => 'getMethod',
        'format' => 'getRequestFormat',
    ];

    public static function castRequest(Request \$request, array \$a, Stub \$stub, bool \$isNested)
    {
        \$clone = null;

        foreach (self::\$requestGetters as \$prop => \$getter) {
            \$key = Caster::PREFIX_PROTECTED.\$prop;
            if (\\array_key_exists(\$key, \$a) && null === \$a[\$key]) {
                if (null === \$clone) {
                    \$clone = clone \$request;
                }
                \$a[Caster::PREFIX_VIRTUAL.\$prop] = \$clone->{\$getter}();
            }
        }

        return \$a;
    }

    public static function castHttpClient(\$client, array \$a, Stub \$stub, bool \$isNested)
    {
        \$multiKey = sprintf(\"\\0%s\\0multi\", \\get_class(\$client));
        if (isset(\$a[\$multiKey])) {
            \$a[\$multiKey] = new CutStub(\$a[\$multiKey]);
        }

        return \$a;
    }

    public static function castHttpClientResponse(\$response, array \$a, Stub \$stub, bool \$isNested)
    {
        \$stub->cut += \\count(\$a);
        \$a = [];

        foreach (\$response->getInfo() as \$k => \$v) {
            \$a[Caster::PREFIX_VIRTUAL.\$k] = \$v;
        }

        return \$a;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/SymfonyCaster.php";
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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * @final
 */
class SymfonyCaster
{
    private static \$requestGetters = [
        'pathInfo' => 'getPathInfo',
        'requestUri' => 'getRequestUri',
        'baseUrl' => 'getBaseUrl',
        'basePath' => 'getBasePath',
        'method' => 'getMethod',
        'format' => 'getRequestFormat',
    ];

    public static function castRequest(Request \$request, array \$a, Stub \$stub, bool \$isNested)
    {
        \$clone = null;

        foreach (self::\$requestGetters as \$prop => \$getter) {
            \$key = Caster::PREFIX_PROTECTED.\$prop;
            if (\\array_key_exists(\$key, \$a) && null === \$a[\$key]) {
                if (null === \$clone) {
                    \$clone = clone \$request;
                }
                \$a[Caster::PREFIX_VIRTUAL.\$prop] = \$clone->{\$getter}();
            }
        }

        return \$a;
    }

    public static function castHttpClient(\$client, array \$a, Stub \$stub, bool \$isNested)
    {
        \$multiKey = sprintf(\"\\0%s\\0multi\", \\get_class(\$client));
        if (isset(\$a[\$multiKey])) {
            \$a[\$multiKey] = new CutStub(\$a[\$multiKey]);
        }

        return \$a;
    }

    public static function castHttpClientResponse(\$response, array \$a, Stub \$stub, bool \$isNested)
    {
        \$stub->cut += \\count(\$a);
        \$a = [];

        foreach (\$response->getInfo() as \$k => \$v) {
            \$a[Caster::PREFIX_VIRTUAL.\$k] = \$v;
        }

        return \$a;
    }
}
", "@app/vendor/symfony/var-dumper/Caster/SymfonyCaster.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\SymfonyCaster.php");
    }
}
