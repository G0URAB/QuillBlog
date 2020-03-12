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

/* @app/vendor/symfony/service-contracts/ServiceProviderInterface.php */
class __TwigTemplate_e9a1b626251283db042262e32d2eae9ff0564c2b1cf1c3e8c60ab756a54d8599 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/service-contracts/ServiceProviderInterface.php"));

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

namespace Symfony\\Contracts\\Service;

use Psr\\Container\\ContainerInterface;

/**
 * A ServiceProviderInterface exposes the identifiers and the types of services provided by a container.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Mateusz Sip <mateusz.sip@gmail.com>
 */
interface ServiceProviderInterface extends ContainerInterface
{
    /**
     * Returns an associative array of service types keyed by the identifiers provided by the current container.
     *
     * Examples:
     *
     *  * ['logger' => 'Psr\\Log\\LoggerInterface'] means the object provides a service named \"logger\" that implements Psr\\Log\\LoggerInterface
     *  * ['foo' => '?'] means the container provides service name \"foo\" of unspecified type
     *  * ['bar' => '?Bar\\Baz'] means the container provides a service \"bar\" of type Bar\\Baz|null
     *
     * @return string[] The provided service types, keyed by service names
     */
    public function getProvidedServices(): array;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/service-contracts/ServiceProviderInterface.php";
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

namespace Symfony\\Contracts\\Service;

use Psr\\Container\\ContainerInterface;

/**
 * A ServiceProviderInterface exposes the identifiers and the types of services provided by a container.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Mateusz Sip <mateusz.sip@gmail.com>
 */
interface ServiceProviderInterface extends ContainerInterface
{
    /**
     * Returns an associative array of service types keyed by the identifiers provided by the current container.
     *
     * Examples:
     *
     *  * ['logger' => 'Psr\\Log\\LoggerInterface'] means the object provides a service named \"logger\" that implements Psr\\Log\\LoggerInterface
     *  * ['foo' => '?'] means the container provides service name \"foo\" of unspecified type
     *  * ['bar' => '?Bar\\Baz'] means the container provides a service \"bar\" of type Bar\\Baz|null
     *
     * @return string[] The provided service types, keyed by service names
     */
    public function getProvidedServices(): array;
}
", "@app/vendor/symfony/service-contracts/ServiceProviderInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\service-contracts\\ServiceProviderInterface.php");
    }
}
