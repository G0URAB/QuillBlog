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

/* @app/vendor/symfony/var-dumper/Caster/RedisCaster.php */
class __TwigTemplate_0efe0b8602cbc5bda186f50464b6ea3f907d1af1f9b6cb19b22dc27d800bb6d3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/RedisCaster.php"));

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

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts Redis class from ext-redis to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class RedisCaster
{
    private static \$serializer = [
        \\Redis::SERIALIZER_NONE => 'NONE',
        \\Redis::SERIALIZER_PHP => 'PHP',
        2 => 'IGBINARY', // Optional Redis::SERIALIZER_IGBINARY
    ];

    private static \$mode = [
        \\Redis::ATOMIC => 'ATOMIC',
        \\Redis::MULTI => 'MULTI',
        \\Redis::PIPELINE => 'PIPELINE',
    ];

    private static \$compression = [
        0 => 'NONE', // Redis::COMPRESSION_NONE
        1 => 'LZF',  // Redis::COMPRESSION_LZF
    ];

    private static \$failover = [
        \\RedisCluster::FAILOVER_NONE => 'NONE',
        \\RedisCluster::FAILOVER_ERROR => 'ERROR',
        \\RedisCluster::FAILOVER_DISTRIBUTE => 'DISTRIBUTE',
        \\RedisCluster::FAILOVER_DISTRIBUTE_SLAVES => 'DISTRIBUTE_SLAVES',
    ];

    public static function castRedis(\\Redis \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        if (!\$connected = \$c->isConnected()) {
            return \$a + [
                \$prefix.'isConnected' => \$connected,
            ];
        }

        \$mode = \$c->getMode();

        return \$a + [
            \$prefix.'isConnected' => \$connected,
            \$prefix.'host' => \$c->getHost(),
            \$prefix.'port' => \$c->getPort(),
            \$prefix.'auth' => \$c->getAuth(),
            \$prefix.'mode' => isset(self::\$mode[\$mode]) ? new ConstStub(self::\$mode[\$mode], \$mode) : \$mode,
            \$prefix.'dbNum' => \$c->getDbNum(),
            \$prefix.'timeout' => \$c->getTimeout(),
            \$prefix.'lastError' => \$c->getLastError(),
            \$prefix.'persistentId' => \$c->getPersistentID(),
            \$prefix.'options' => self::getRedisOptions(\$c),
        ];
    }

    public static function castRedisArray(\\RedisArray \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        return \$a + [
            \$prefix.'hosts' => \$c->_hosts(),
            \$prefix.'function' => ClassStub::wrapCallable(\$c->_function()),
            \$prefix.'lastError' => \$c->getLastError(),
            \$prefix.'options' => self::getRedisOptions(\$c),
        ];
    }

    public static function castRedisCluster(\\RedisCluster \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;
        \$failover = \$c->getOption(\\RedisCluster::OPT_SLAVE_FAILOVER);

        \$a += [
            \$prefix.'_masters' => \$c->_masters(),
            \$prefix.'_redir' => \$c->_redir(),
            \$prefix.'mode' => new ConstStub(\$c->getMode() ? 'MULTI' : 'ATOMIC', \$c->getMode()),
            \$prefix.'lastError' => \$c->getLastError(),
            \$prefix.'options' => self::getRedisOptions(\$c, [
                'SLAVE_FAILOVER' => isset(self::\$failover[\$failover]) ? new ConstStub(self::\$failover[\$failover], \$failover) : \$failover,
            ]),
        ];

        return \$a;
    }

    /**
     * @param \\Redis|\\RedisArray|\\RedisCluster \$redis
     */
    private static function getRedisOptions(\$redis, array \$options = []): EnumStub
    {
        \$serializer = \$redis->getOption(\\Redis::OPT_SERIALIZER);
        if (\\is_array(\$serializer)) {
            foreach (\$serializer as &\$v) {
                if (isset(self::\$serializer[\$v])) {
                    \$v = new ConstStub(self::\$serializer[\$v], \$v);
                }
            }
        } elseif (isset(self::\$serializer[\$serializer])) {
            \$serializer = new ConstStub(self::\$serializer[\$serializer], \$serializer);
        }

        \$compression = \\defined('Redis::OPT_COMPRESSION') ? \$redis->getOption(\\Redis::OPT_COMPRESSION) : 0;
        if (\\is_array(\$compression)) {
            foreach (\$compression as &\$v) {
                if (isset(self::\$compression[\$v])) {
                    \$v = new ConstStub(self::\$compression[\$v], \$v);
                }
            }
        } elseif (isset(self::\$compression[\$compression])) {
            \$compression = new ConstStub(self::\$compression[\$compression], \$compression);
        }

        \$retry = \\defined('Redis::OPT_SCAN') ? \$redis->getOption(\\Redis::OPT_SCAN) : 0;
        if (\\is_array(\$retry)) {
            foreach (\$retry as &\$v) {
                \$v = new ConstStub(\$v ? 'RETRY' : 'NORETRY', \$v);
            }
        } else {
            \$retry = new ConstStub(\$retry ? 'RETRY' : 'NORETRY', \$retry);
        }

        \$options += [
            'TCP_KEEPALIVE' => \\defined('Redis::OPT_TCP_KEEPALIVE') ? \$redis->getOption(\\Redis::OPT_TCP_KEEPALIVE) : 0,
            'READ_TIMEOUT' => \$redis->getOption(\\Redis::OPT_READ_TIMEOUT),
            'COMPRESSION' => \$compression,
            'SERIALIZER' => \$serializer,
            'PREFIX' => \$redis->getOption(\\Redis::OPT_PREFIX),
            'SCAN' => \$retry,
        ];

        return new EnumStub(\$options);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/RedisCaster.php";
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

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts Redis class from ext-redis to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class RedisCaster
{
    private static \$serializer = [
        \\Redis::SERIALIZER_NONE => 'NONE',
        \\Redis::SERIALIZER_PHP => 'PHP',
        2 => 'IGBINARY', // Optional Redis::SERIALIZER_IGBINARY
    ];

    private static \$mode = [
        \\Redis::ATOMIC => 'ATOMIC',
        \\Redis::MULTI => 'MULTI',
        \\Redis::PIPELINE => 'PIPELINE',
    ];

    private static \$compression = [
        0 => 'NONE', // Redis::COMPRESSION_NONE
        1 => 'LZF',  // Redis::COMPRESSION_LZF
    ];

    private static \$failover = [
        \\RedisCluster::FAILOVER_NONE => 'NONE',
        \\RedisCluster::FAILOVER_ERROR => 'ERROR',
        \\RedisCluster::FAILOVER_DISTRIBUTE => 'DISTRIBUTE',
        \\RedisCluster::FAILOVER_DISTRIBUTE_SLAVES => 'DISTRIBUTE_SLAVES',
    ];

    public static function castRedis(\\Redis \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        if (!\$connected = \$c->isConnected()) {
            return \$a + [
                \$prefix.'isConnected' => \$connected,
            ];
        }

        \$mode = \$c->getMode();

        return \$a + [
            \$prefix.'isConnected' => \$connected,
            \$prefix.'host' => \$c->getHost(),
            \$prefix.'port' => \$c->getPort(),
            \$prefix.'auth' => \$c->getAuth(),
            \$prefix.'mode' => isset(self::\$mode[\$mode]) ? new ConstStub(self::\$mode[\$mode], \$mode) : \$mode,
            \$prefix.'dbNum' => \$c->getDbNum(),
            \$prefix.'timeout' => \$c->getTimeout(),
            \$prefix.'lastError' => \$c->getLastError(),
            \$prefix.'persistentId' => \$c->getPersistentID(),
            \$prefix.'options' => self::getRedisOptions(\$c),
        ];
    }

    public static function castRedisArray(\\RedisArray \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        return \$a + [
            \$prefix.'hosts' => \$c->_hosts(),
            \$prefix.'function' => ClassStub::wrapCallable(\$c->_function()),
            \$prefix.'lastError' => \$c->getLastError(),
            \$prefix.'options' => self::getRedisOptions(\$c),
        ];
    }

    public static function castRedisCluster(\\RedisCluster \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;
        \$failover = \$c->getOption(\\RedisCluster::OPT_SLAVE_FAILOVER);

        \$a += [
            \$prefix.'_masters' => \$c->_masters(),
            \$prefix.'_redir' => \$c->_redir(),
            \$prefix.'mode' => new ConstStub(\$c->getMode() ? 'MULTI' : 'ATOMIC', \$c->getMode()),
            \$prefix.'lastError' => \$c->getLastError(),
            \$prefix.'options' => self::getRedisOptions(\$c, [
                'SLAVE_FAILOVER' => isset(self::\$failover[\$failover]) ? new ConstStub(self::\$failover[\$failover], \$failover) : \$failover,
            ]),
        ];

        return \$a;
    }

    /**
     * @param \\Redis|\\RedisArray|\\RedisCluster \$redis
     */
    private static function getRedisOptions(\$redis, array \$options = []): EnumStub
    {
        \$serializer = \$redis->getOption(\\Redis::OPT_SERIALIZER);
        if (\\is_array(\$serializer)) {
            foreach (\$serializer as &\$v) {
                if (isset(self::\$serializer[\$v])) {
                    \$v = new ConstStub(self::\$serializer[\$v], \$v);
                }
            }
        } elseif (isset(self::\$serializer[\$serializer])) {
            \$serializer = new ConstStub(self::\$serializer[\$serializer], \$serializer);
        }

        \$compression = \\defined('Redis::OPT_COMPRESSION') ? \$redis->getOption(\\Redis::OPT_COMPRESSION) : 0;
        if (\\is_array(\$compression)) {
            foreach (\$compression as &\$v) {
                if (isset(self::\$compression[\$v])) {
                    \$v = new ConstStub(self::\$compression[\$v], \$v);
                }
            }
        } elseif (isset(self::\$compression[\$compression])) {
            \$compression = new ConstStub(self::\$compression[\$compression], \$compression);
        }

        \$retry = \\defined('Redis::OPT_SCAN') ? \$redis->getOption(\\Redis::OPT_SCAN) : 0;
        if (\\is_array(\$retry)) {
            foreach (\$retry as &\$v) {
                \$v = new ConstStub(\$v ? 'RETRY' : 'NORETRY', \$v);
            }
        } else {
            \$retry = new ConstStub(\$retry ? 'RETRY' : 'NORETRY', \$retry);
        }

        \$options += [
            'TCP_KEEPALIVE' => \\defined('Redis::OPT_TCP_KEEPALIVE') ? \$redis->getOption(\\Redis::OPT_TCP_KEEPALIVE) : 0,
            'READ_TIMEOUT' => \$redis->getOption(\\Redis::OPT_READ_TIMEOUT),
            'COMPRESSION' => \$compression,
            'SERIALIZER' => \$serializer,
            'PREFIX' => \$redis->getOption(\\Redis::OPT_PREFIX),
            'SCAN' => \$retry,
        ];

        return new EnumStub(\$options);
    }
}
", "@app/vendor/symfony/var-dumper/Caster/RedisCaster.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\RedisCaster.php");
    }
}
