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

/* @app/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php */
class __TwigTemplate_6aea8d0ce75c4131aeab92e5946a9b42b3bd2586fa4db2c3c9c061eb5e301cb8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php"));

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

namespace Symfony\\Component\\HttpKernel\\Profiler;

/**
 * ProfilerStorageInterface.
 *
 * This interface exists for historical reasons. The only supported
 * implementation is FileProfilerStorage.
 *
 * As the profiler must only be used on non-production servers, the file storage
 * is more than enough and no other implementations will ever be supported.
 *
 * @internal
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ProfilerStorageInterface
{
    /**
     * Finds profiler tokens for the given criteria.
     *
     * @param int|null \$limit The maximum number of tokens to return
     * @param int|null \$start The start date to search from
     * @param int|null \$end   The end date to search to
     *
     * @return array An array of tokens
     */
    public function find(?string \$ip, ?string \$url, ?int \$limit, ?string \$method, int \$start = null, int \$end = null): array;

    /**
     * Reads data associated with the given token.
     *
     * The method returns false if the token does not exist in the storage.
     *
     * @return Profile|null The profile associated with token
     */
    public function read(string \$token): ?Profile;

    /**
     * Saves a Profile.
     *
     * @return bool Write operation successful
     */
    public function write(Profile \$profile): bool;

    /**
     * Purges all data from the database.
     */
    public function purge();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php";
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

namespace Symfony\\Component\\HttpKernel\\Profiler;

/**
 * ProfilerStorageInterface.
 *
 * This interface exists for historical reasons. The only supported
 * implementation is FileProfilerStorage.
 *
 * As the profiler must only be used on non-production servers, the file storage
 * is more than enough and no other implementations will ever be supported.
 *
 * @internal
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ProfilerStorageInterface
{
    /**
     * Finds profiler tokens for the given criteria.
     *
     * @param int|null \$limit The maximum number of tokens to return
     * @param int|null \$start The start date to search from
     * @param int|null \$end   The end date to search to
     *
     * @return array An array of tokens
     */
    public function find(?string \$ip, ?string \$url, ?int \$limit, ?string \$method, int \$start = null, int \$end = null): array;

    /**
     * Reads data associated with the given token.
     *
     * The method returns false if the token does not exist in the storage.
     *
     * @return Profile|null The profile associated with token
     */
    public function read(string \$token): ?Profile;

    /**
     * Saves a Profile.
     *
     * @return bool Write operation successful
     */
    public function write(Profile \$profile): bool;

    /**
     * Purges all data from the database.
     */
    public function purge();
}
", "@app/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Profiler\\ProfilerStorageInterface.php");
    }
}
