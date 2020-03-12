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

/* @app/vendor/symfony/cache/Traits/FilesystemTrait.php */
class __TwigTemplate_9504461251ff2ec8ba05272f3deacca399828d80f2274c9efd31d39b9e723041 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/Traits/FilesystemTrait.php"));

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

namespace Symfony\\Component\\Cache\\Traits;

use Symfony\\Component\\Cache\\Exception\\CacheException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Rob Frawley 2nd <rmf@src.run>
 *
 * @internal
 */
trait FilesystemTrait
{
    use FilesystemCommonTrait;

    private \$marshaller;

    /**
     * @return bool
     */
    public function prune()
    {
        \$time = time();
        \$pruned = true;

        foreach (\$this->scanHashDir(\$this->directory) as \$file) {
            if (!\$h = @fopen(\$file, 'rb')) {
                continue;
            }

            if ((\$expiresAt = (int) fgets(\$h)) && \$time >= \$expiresAt) {
                fclose(\$h);
                \$pruned = @unlink(\$file) && !file_exists(\$file) && \$pruned;
            } else {
                fclose(\$h);
            }
        }

        return \$pruned;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        \$values = [];
        \$now = time();

        foreach (\$ids as \$id) {
            \$file = \$this->getFile(\$id);
            if (!file_exists(\$file) || !\$h = @fopen(\$file, 'rb')) {
                continue;
            }
            if ((\$expiresAt = (int) fgets(\$h)) && \$now >= \$expiresAt) {
                fclose(\$h);
                @unlink(\$file);
            } else {
                \$i = rawurldecode(rtrim(fgets(\$h)));
                \$value = stream_get_contents(\$h);
                fclose(\$h);
                if (\$i === \$id) {
                    \$values[\$id] = \$this->marshaller->unmarshall(\$value);
                }
            }
        }

        return \$values;
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(string \$id)
    {
        \$file = \$this->getFile(\$id);

        return file_exists(\$file) && (@filemtime(\$file) > time() || \$this->doFetch([\$id]));
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, int \$lifetime)
    {
        \$expiresAt = \$lifetime ? (time() + \$lifetime) : 0;
        \$values = \$this->marshaller->marshall(\$values, \$failed);

        foreach (\$values as \$id => \$value) {
            if (!\$this->write(\$this->getFile(\$id, true), \$expiresAt.\"\\n\".rawurlencode(\$id).\"\\n\".\$value, \$expiresAt)) {
                \$failed[] = \$id;
            }
        }

        if (\$failed && !is_writable(\$this->directory)) {
            throw new CacheException(sprintf('Cache directory is not writable (%s)', \$this->directory));
        }

        return \$failed;
    }

    private function getFileKey(string \$file): string
    {
        if (!\$h = @fopen(\$file, 'rb')) {
            return '';
        }

        fgets(\$h); // expiry
        \$encodedKey = fgets(\$h);
        fclose(\$h);

        return rawurldecode(rtrim(\$encodedKey));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/Traits/FilesystemTrait.php";
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

namespace Symfony\\Component\\Cache\\Traits;

use Symfony\\Component\\Cache\\Exception\\CacheException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Rob Frawley 2nd <rmf@src.run>
 *
 * @internal
 */
trait FilesystemTrait
{
    use FilesystemCommonTrait;

    private \$marshaller;

    /**
     * @return bool
     */
    public function prune()
    {
        \$time = time();
        \$pruned = true;

        foreach (\$this->scanHashDir(\$this->directory) as \$file) {
            if (!\$h = @fopen(\$file, 'rb')) {
                continue;
            }

            if ((\$expiresAt = (int) fgets(\$h)) && \$time >= \$expiresAt) {
                fclose(\$h);
                \$pruned = @unlink(\$file) && !file_exists(\$file) && \$pruned;
            } else {
                fclose(\$h);
            }
        }

        return \$pruned;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        \$values = [];
        \$now = time();

        foreach (\$ids as \$id) {
            \$file = \$this->getFile(\$id);
            if (!file_exists(\$file) || !\$h = @fopen(\$file, 'rb')) {
                continue;
            }
            if ((\$expiresAt = (int) fgets(\$h)) && \$now >= \$expiresAt) {
                fclose(\$h);
                @unlink(\$file);
            } else {
                \$i = rawurldecode(rtrim(fgets(\$h)));
                \$value = stream_get_contents(\$h);
                fclose(\$h);
                if (\$i === \$id) {
                    \$values[\$id] = \$this->marshaller->unmarshall(\$value);
                }
            }
        }

        return \$values;
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(string \$id)
    {
        \$file = \$this->getFile(\$id);

        return file_exists(\$file) && (@filemtime(\$file) > time() || \$this->doFetch([\$id]));
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, int \$lifetime)
    {
        \$expiresAt = \$lifetime ? (time() + \$lifetime) : 0;
        \$values = \$this->marshaller->marshall(\$values, \$failed);

        foreach (\$values as \$id => \$value) {
            if (!\$this->write(\$this->getFile(\$id, true), \$expiresAt.\"\\n\".rawurlencode(\$id).\"\\n\".\$value, \$expiresAt)) {
                \$failed[] = \$id;
            }
        }

        if (\$failed && !is_writable(\$this->directory)) {
            throw new CacheException(sprintf('Cache directory is not writable (%s)', \$this->directory));
        }

        return \$failed;
    }

    private function getFileKey(string \$file): string
    {
        if (!\$h = @fopen(\$file, 'rb')) {
            return '';
        }

        fgets(\$h); // expiry
        \$encodedKey = fgets(\$h);
        fclose(\$h);

        return rawurldecode(rtrim(\$encodedKey));
    }
}
", "@app/vendor/symfony/cache/Traits/FilesystemTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\Traits\\FilesystemTrait.php");
    }
}
