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

/* @app/vendor/symfony/cache/Adapter/RedisAdapter.php */
class __TwigTemplate_3f5ab4ed33b80693487b2312226d5403d88d3dc9dc67fe2592b3ec2e6e96fcc3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/Adapter/RedisAdapter.php"));

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

namespace Symfony\\Component\\Cache\\Adapter;

use Symfony\\Component\\Cache\\Marshaller\\MarshallerInterface;
use Symfony\\Component\\Cache\\Traits\\RedisTrait;

class RedisAdapter extends AbstractAdapter
{
    use RedisTrait;

    /**
     * @param \\Redis|\\RedisArray|\\RedisCluster|\\Predis\\ClientInterface \$redisClient     The redis client
     * @param string                                                   \$namespace       The default namespace
     * @param int                                                      \$defaultLifetime The default lifetime
     */
    public function __construct(\$redisClient, string \$namespace = '', int \$defaultLifetime = 0, MarshallerInterface \$marshaller = null)
    {
        \$this->init(\$redisClient, \$namespace, \$defaultLifetime, \$marshaller);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/Adapter/RedisAdapter.php";
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

namespace Symfony\\Component\\Cache\\Adapter;

use Symfony\\Component\\Cache\\Marshaller\\MarshallerInterface;
use Symfony\\Component\\Cache\\Traits\\RedisTrait;

class RedisAdapter extends AbstractAdapter
{
    use RedisTrait;

    /**
     * @param \\Redis|\\RedisArray|\\RedisCluster|\\Predis\\ClientInterface \$redisClient     The redis client
     * @param string                                                   \$namespace       The default namespace
     * @param int                                                      \$defaultLifetime The default lifetime
     */
    public function __construct(\$redisClient, string \$namespace = '', int \$defaultLifetime = 0, MarshallerInterface \$marshaller = null)
    {
        \$this->init(\$redisClient, \$namespace, \$defaultLifetime, \$marshaller);
    }
}
", "@app/vendor/symfony/cache/Adapter/RedisAdapter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\Adapter\\RedisAdapter.php");
    }
}
