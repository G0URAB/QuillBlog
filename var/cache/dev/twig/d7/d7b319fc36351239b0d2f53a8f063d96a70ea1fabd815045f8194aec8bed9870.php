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

/* @app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FilesystemCache.php */
class __TwigTemplate_468bb802cef285e78fb404279ad31cb899f14e75f4c2e28931ca7551f1844964 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FilesystemCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use const PHP_EOL;
use function fclose;
use function fgets;
use function fopen;
use function is_file;
use function serialize;
use function time;
use function unserialize;

/**
 * Filesystem cache driver.
 */
class FilesystemCache extends FileCache
{
    public const EXTENSION = '.doctrinecache.data';

    /**
     * {@inheritdoc}
     */
    public function __construct(\$directory, \$extension = self::EXTENSION, \$umask = 0002)
    {
        parent::__construct(\$directory, \$extension, \$umask);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        \$data     = '';
        \$lifetime = -1;
        \$filename = \$this->getFilename(\$id);

        if (! is_file(\$filename)) {
            return false;
        }

        \$resource = fopen(\$filename, 'r');
        \$line     = fgets(\$resource);

        if (\$line !== false) {
            \$lifetime = (int) \$line;
        }

        if (\$lifetime !== 0 && \$lifetime < time()) {
            fclose(\$resource);

            return false;
        }

        while ((\$line = fgets(\$resource)) !== false) {
            \$data .= \$line;
        }

        fclose(\$resource);

        return unserialize(\$data);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        \$lifetime = -1;
        \$filename = \$this->getFilename(\$id);

        if (! is_file(\$filename)) {
            return false;
        }

        \$resource = fopen(\$filename, 'r');
        \$line     = fgets(\$resource);

        if (\$line !== false) {
            \$lifetime = (int) \$line;
        }

        fclose(\$resource);

        return \$lifetime === 0 || \$lifetime > time();
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        if (\$lifeTime > 0) {
            \$lifeTime = time() + \$lifeTime;
        }

        \$data     = serialize(\$data);
        \$filename = \$this->getFilename(\$id);

        return \$this->writeFile(\$filename, \$lifeTime . PHP_EOL . \$data);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FilesystemCache.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use const PHP_EOL;
use function fclose;
use function fgets;
use function fopen;
use function is_file;
use function serialize;
use function time;
use function unserialize;

/**
 * Filesystem cache driver.
 */
class FilesystemCache extends FileCache
{
    public const EXTENSION = '.doctrinecache.data';

    /**
     * {@inheritdoc}
     */
    public function __construct(\$directory, \$extension = self::EXTENSION, \$umask = 0002)
    {
        parent::__construct(\$directory, \$extension, \$umask);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        \$data     = '';
        \$lifetime = -1;
        \$filename = \$this->getFilename(\$id);

        if (! is_file(\$filename)) {
            return false;
        }

        \$resource = fopen(\$filename, 'r');
        \$line     = fgets(\$resource);

        if (\$line !== false) {
            \$lifetime = (int) \$line;
        }

        if (\$lifetime !== 0 && \$lifetime < time()) {
            fclose(\$resource);

            return false;
        }

        while ((\$line = fgets(\$resource)) !== false) {
            \$data .= \$line;
        }

        fclose(\$resource);

        return unserialize(\$data);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        \$lifetime = -1;
        \$filename = \$this->getFilename(\$id);

        if (! is_file(\$filename)) {
            return false;
        }

        \$resource = fopen(\$filename, 'r');
        \$line     = fgets(\$resource);

        if (\$line !== false) {
            \$lifetime = (int) \$line;
        }

        fclose(\$resource);

        return \$lifetime === 0 || \$lifetime > time();
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        if (\$lifeTime > 0) {
            \$lifeTime = time() + \$lifeTime;
        }

        \$data     = serialize(\$data);
        \$filename = \$this->getFilename(\$id);

        return \$this->writeFile(\$filename, \$lifeTime . PHP_EOL . \$data);
    }
}
", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FilesystemCache.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FilesystemCache.php");
    }
}
