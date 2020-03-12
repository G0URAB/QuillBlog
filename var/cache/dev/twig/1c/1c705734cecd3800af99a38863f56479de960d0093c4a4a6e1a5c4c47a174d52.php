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

/* @app/vendor/symfony/doctrine-bridge/Security/User/UserLoaderInterface.php */
class __TwigTemplate_c3b8ff9128d28df6778cced7cb65220ab30204091134c66d7f6f84279353d591 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Security/User/UserLoaderInterface.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Security\\User;

use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Represents a class that loads UserInterface objects from Doctrine source for the authentication system.
 *
 * This interface is meant to facilitate the loading of a User from Doctrine source using a custom method.
 * If you want to implement your own logic of retrieving the user from Doctrine your repository should implement this
 * interface.
 *
 * @see UserInterface
 *
 * @author Michal Trojanowski <michal@kmt-studio.pl>
 */
interface UserLoaderInterface
{
    /**
     * Loads the user for the given username.
     *
     * This method must return null if the user is not found.
     *
     * @return UserInterface|null
     */
    public function loadUserByUsername(string \$username);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Security/User/UserLoaderInterface.php";
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

namespace Symfony\\Bridge\\Doctrine\\Security\\User;

use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Represents a class that loads UserInterface objects from Doctrine source for the authentication system.
 *
 * This interface is meant to facilitate the loading of a User from Doctrine source using a custom method.
 * If you want to implement your own logic of retrieving the user from Doctrine your repository should implement this
 * interface.
 *
 * @see UserInterface
 *
 * @author Michal Trojanowski <michal@kmt-studio.pl>
 */
interface UserLoaderInterface
{
    /**
     * Loads the user for the given username.
     *
     * This method must return null if the user is not found.
     *
     * @return UserInterface|null
     */
    public function loadUserByUsername(string \$username);
}
", "@app/vendor/symfony/doctrine-bridge/Security/User/UserLoaderInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Security\\User\\UserLoaderInterface.php");
    }
}
