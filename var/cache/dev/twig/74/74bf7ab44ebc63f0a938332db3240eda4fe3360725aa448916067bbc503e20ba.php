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

/* @app/vendor/doctrine/orm/bin/doctrine-pear.php */
class __TwigTemplate_09cbe8911443aff5b239df3c4975d0b5de71b304da3df456849d1d2cff8a8eee extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/bin/doctrine-pear.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.doctrine-project.org>.
 */

require_once 'Doctrine/Common/ClassLoader.php';

\$classLoader = new \\Doctrine\\Common\\ClassLoader('Doctrine');
\$classLoader->register();

\$classLoader = new \\Doctrine\\Common\\ClassLoader('Symfony');
\$classLoader->register();

\$configFile = getcwd() . DIRECTORY_SEPARATOR . 'cli-config.php';

\$helperSet = null;
if (file_exists(\$configFile)) {
    if ( ! is_readable(\$configFile)) {
        trigger_error(
            'Configuration file [' . \$configFile . '] does not have read permission.', E_USER_ERROR
        );
    }

    require \$configFile;

    foreach (\$GLOBALS as \$helperSetCandidate) {
        if (\$helperSetCandidate instanceof \\Symfony\\Component\\Console\\Helper\\HelperSet) {
            \$helperSet = \$helperSetCandidate;
            break;
        }
    }
}

\$helperSet = (\$helperSet) ?: new \\Symfony\\Component\\Console\\Helper\\HelperSet();

\\Doctrine\\ORM\\Tools\\Console\\ConsoleRunner::run(\$helperSet);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/bin/doctrine-pear.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.doctrine-project.org>.
 */

require_once 'Doctrine/Common/ClassLoader.php';

\$classLoader = new \\Doctrine\\Common\\ClassLoader('Doctrine');
\$classLoader->register();

\$classLoader = new \\Doctrine\\Common\\ClassLoader('Symfony');
\$classLoader->register();

\$configFile = getcwd() . DIRECTORY_SEPARATOR . 'cli-config.php';

\$helperSet = null;
if (file_exists(\$configFile)) {
    if ( ! is_readable(\$configFile)) {
        trigger_error(
            'Configuration file [' . \$configFile . '] does not have read permission.', E_USER_ERROR
        );
    }

    require \$configFile;

    foreach (\$GLOBALS as \$helperSetCandidate) {
        if (\$helperSetCandidate instanceof \\Symfony\\Component\\Console\\Helper\\HelperSet) {
            \$helperSet = \$helperSetCandidate;
            break;
        }
    }
}

\$helperSet = (\$helperSet) ?: new \\Symfony\\Component\\Console\\Helper\\HelperSet();

\\Doctrine\\ORM\\Tools\\Console\\ConsoleRunner::run(\$helperSet);
", "@app/vendor/doctrine/orm/bin/doctrine-pear.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\bin\\doctrine-pear.php");
    }
}
