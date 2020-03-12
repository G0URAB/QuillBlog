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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/ClassMetadataExporter.php */
class __TwigTemplate_f8daaf2365c1967968e7ac97a410d277f7e68f1aa78a469a632fa1d951cdea63 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/ClassMetadataExporter.php"));

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
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Tools\\Export;

use const E_USER_DEPRECATED;
use function trigger_error;

/**
 * Class used for converting your mapping information between the
 * supported formats: yaml, xml, and php/annotation.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Jonathan Wage <jonwage@gmail.com>
 *
 * @deprecated 2.7 This class is being removed from the ORM and won't have any replacement
 */
class ClassMetadataExporter
{
    /**
     * @var array
     */
    private static \$_exporterDrivers = [
        'xml' => Driver\\XmlExporter::class,
        'yaml' => Driver\\YamlExporter::class,
        'yml' => Driver\\YamlExporter::class,
        'php' => Driver\\PhpExporter::class,
        'annotation' => Driver\\AnnotationExporter::class
    ];

    public function __construct()
    {
        @trigger_error(self::class . ' is deprecated and will be removed in Doctrine ORM 3.0', E_USER_DEPRECATED);
    }

    /**
     * Registers a new exporter driver class under a specified name.
     *
     * @param string \$name
     * @param string \$class
     *
     * @return void
     */
    public static function registerExportDriver(\$name, \$class)
    {
        self::\$_exporterDrivers[\$name] = \$class;
    }

    /**
     * Gets an exporter driver instance.
     *
     * @param string      \$type The type to get (yml, xml, etc.).
     * @param string|null \$dest The directory where the exporter will export to.
     *
     * @return Driver\\AbstractExporter
     *
     * @throws ExportException
     */
    public function getExporter(\$type, \$dest = null)
    {
        if ( ! isset(self::\$_exporterDrivers[\$type])) {
            throw ExportException::invalidExporterDriverType(\$type);
        }

        \$class = self::\$_exporterDrivers[\$type];

        return new \$class(\$dest);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/ClassMetadataExporter.php";
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
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Tools\\Export;

use const E_USER_DEPRECATED;
use function trigger_error;

/**
 * Class used for converting your mapping information between the
 * supported formats: yaml, xml, and php/annotation.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Jonathan Wage <jonwage@gmail.com>
 *
 * @deprecated 2.7 This class is being removed from the ORM and won't have any replacement
 */
class ClassMetadataExporter
{
    /**
     * @var array
     */
    private static \$_exporterDrivers = [
        'xml' => Driver\\XmlExporter::class,
        'yaml' => Driver\\YamlExporter::class,
        'yml' => Driver\\YamlExporter::class,
        'php' => Driver\\PhpExporter::class,
        'annotation' => Driver\\AnnotationExporter::class
    ];

    public function __construct()
    {
        @trigger_error(self::class . ' is deprecated and will be removed in Doctrine ORM 3.0', E_USER_DEPRECATED);
    }

    /**
     * Registers a new exporter driver class under a specified name.
     *
     * @param string \$name
     * @param string \$class
     *
     * @return void
     */
    public static function registerExportDriver(\$name, \$class)
    {
        self::\$_exporterDrivers[\$name] = \$class;
    }

    /**
     * Gets an exporter driver instance.
     *
     * @param string      \$type The type to get (yml, xml, etc.).
     * @param string|null \$dest The directory where the exporter will export to.
     *
     * @return Driver\\AbstractExporter
     *
     * @throws ExportException
     */
    public function getExporter(\$type, \$dest = null)
    {
        if ( ! isset(self::\$_exporterDrivers[\$type])) {
            throw ExportException::invalidExporterDriverType(\$type);
        }

        \$class = self::\$_exporterDrivers[\$type];

        return new \$class(\$dest);
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/ClassMetadataExporter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Export\\ClassMetadataExporter.php");
    }
}
