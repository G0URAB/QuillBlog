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

/* @app/vendor/doctrine/doctrine-bundle/Command/Proxy/DoctrineCommandHelper.php */
class __TwigTemplate_8a7856ec39eba96c5fbcb716ad0de3ddaf03ced8d83ebd78381702e71feae5bc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Command/Proxy/DoctrineCommandHelper.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy;

use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Tools\\Console\\Helper\\EntityManagerHelper;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;

/**
 * Provides some helper and convenience methods to configure doctrine commands in the context of bundles
 * and multiple connections/entity managers.
 */
abstract class DoctrineCommandHelper
{
    /**
     * Convenience method to push the helper sets of a given entity manager into the application.
     *
     * @param string \$emName
     */
    public static function setApplicationEntityManager(Application \$application, \$emName)
    {
        /** @var EntityManager \$em */
        \$em        = \$application->getKernel()->getContainer()->get('doctrine')->getManager(\$emName);
        \$helperSet = \$application->getHelperSet();
        \$helperSet->set(new ConnectionHelper(\$em->getConnection()), 'db');
        \$helperSet->set(new EntityManagerHelper(\$em), 'em');
    }

    /**
     * Convenience method to push the helper sets of a given connection into the application.
     *
     * @param string \$connName
     */
    public static function setApplicationConnection(Application \$application, \$connName)
    {
        \$connection = \$application->getKernel()->getContainer()->get('doctrine')->getConnection(\$connName);
        \$helperSet  = \$application->getHelperSet();
        \$helperSet->set(new ConnectionHelper(\$connection), 'db');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Command/Proxy/DoctrineCommandHelper.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy;

use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Tools\\Console\\Helper\\EntityManagerHelper;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;

/**
 * Provides some helper and convenience methods to configure doctrine commands in the context of bundles
 * and multiple connections/entity managers.
 */
abstract class DoctrineCommandHelper
{
    /**
     * Convenience method to push the helper sets of a given entity manager into the application.
     *
     * @param string \$emName
     */
    public static function setApplicationEntityManager(Application \$application, \$emName)
    {
        /** @var EntityManager \$em */
        \$em        = \$application->getKernel()->getContainer()->get('doctrine')->getManager(\$emName);
        \$helperSet = \$application->getHelperSet();
        \$helperSet->set(new ConnectionHelper(\$em->getConnection()), 'db');
        \$helperSet->set(new EntityManagerHelper(\$em), 'em');
    }

    /**
     * Convenience method to push the helper sets of a given connection into the application.
     *
     * @param string \$connName
     */
    public static function setApplicationConnection(Application \$application, \$connName)
    {
        \$connection = \$application->getKernel()->getContainer()->get('doctrine')->getConnection(\$connName);
        \$helperSet  = \$application->getHelperSet();
        \$helperSet->set(new ConnectionHelper(\$connection), 'db');
    }
}
", "@app/vendor/doctrine/doctrine-bundle/Command/Proxy/DoctrineCommandHelper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\DoctrineCommandHelper.php");
    }
}
