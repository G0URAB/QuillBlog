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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/AbstractExporter.php */
class __TwigTemplate_899d7e0d2dc02916699a353b9c96ec282e77532a3e5af08a213da4a1a2db099c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/AbstractExporter.php"));

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

namespace Doctrine\\ORM\\Tools\\Export\\Driver;

use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Doctrine\\ORM\\Tools\\Export\\ExportException;
use const E_USER_DEPRECATED;
use function trigger_error;

/**
 * Abstract base class which is to be used for the Exporter drivers
 * which can be found in \\Doctrine\\ORM\\Tools\\Export\\Driver.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Jonathan Wage <jonwage@gmail.com>
 *
 * @deprecated 2.7 This class is being removed from the ORM and won't have any replacement
 */
abstract class AbstractExporter
{
    /**
     * @var array
     */
    protected \$_metadata = [];

    /**
     * @var string|null
     */
    protected \$_outputDir;

    /**
     * @var string|null
     */
    protected \$_extension;

    /**
     * @var bool
     */
    protected \$_overwriteExistingFiles = false;

    /**
     * @param string|null \$dir
     */
    public function __construct(\$dir = null)
    {
        @trigger_error(static::class . ' is deprecated and will be removed in Doctrine ORM 3.0', E_USER_DEPRECATED);

        \$this->_outputDir = \$dir;
    }

    /**
     * @param bool \$overwrite
     *
     * @return void
     */
    public function setOverwriteExistingFiles(\$overwrite)
    {
        \$this->_overwriteExistingFiles = \$overwrite;
    }

    /**
     * Converts a single ClassMetadata instance to the exported format
     * and returns it.
     *
     * @param ClassMetadataInfo \$metadata
     *
     * @return string
     */
    abstract public function exportClassMetadata(ClassMetadataInfo \$metadata);

    /**
     * Sets the array of ClassMetadataInfo instances to export.
     *
     * @param array \$metadata
     *
     * @return void
     */
    public function setMetadata(array \$metadata)
    {
        \$this->_metadata = \$metadata;
    }

    /**
     * Gets the extension used to generated the path to a class.
     *
     * @return string|null
     */
    public function getExtension()
    {
        return \$this->_extension;
    }

    /**
     * Sets the directory to output the mapping files to.
     *
     *     [php]
     *     \$exporter = new YamlExporter(\$metadata);
     *     \$exporter->setOutputDir(__DIR__ . '/yaml');
     *     \$exporter->export();
     *
     * @param string \$dir
     *
     * @return void
     */
    public function setOutputDir(\$dir)
    {
        \$this->_outputDir = \$dir;
    }

    /**
     * Exports each ClassMetadata instance to a single Doctrine Mapping file
     * named after the entity.
     *
     * @return void
     *
     * @throws \\Doctrine\\ORM\\Tools\\Export\\ExportException
     */
    public function export()
    {
        if ( ! is_dir(\$this->_outputDir)) {
            mkdir(\$this->_outputDir, 0775, true);
        }

        foreach (\$this->_metadata as \$metadata) {
            // In case output is returned, write it to a file, skip otherwise
            if (\$output = \$this->exportClassMetadata(\$metadata)) {
                \$path = \$this->_generateOutputPath(\$metadata);
                \$dir = dirname(\$path);
                if ( ! is_dir(\$dir)) {
                    mkdir(\$dir, 0775, true);
                }
                if (file_exists(\$path) && !\$this->_overwriteExistingFiles) {
                    throw ExportException::attemptOverwriteExistingFile(\$path);
                }
                file_put_contents(\$path, \$output);
                chmod(\$path, 0664);
            }
        }
    }

    /**
     * Generates the path to write the class for the given ClassMetadataInfo instance.
     *
     * @param ClassMetadataInfo \$metadata
     *
     * @return string
     */
    protected function _generateOutputPath(ClassMetadataInfo \$metadata)
    {
        return \$this->_outputDir . '/' . str_replace('\\\\', '.', \$metadata->name) . \$this->_extension;
    }

    /**
     * Sets the directory to output the mapping files to.
     *
     *     [php]
     *     \$exporter = new YamlExporter(\$metadata, __DIR__ . '/yaml');
     *     \$exporter->setExtension('.yml');
     *     \$exporter->export();
     *
     * @param string \$extension
     *
     * @return void
     */
    public function setExtension(\$extension)
    {
        \$this->_extension = \$extension;
    }

    /**
     * @param int \$type
     *
     * @return string
     */
    protected function _getInheritanceTypeString(\$type)
    {
        switch (\$type) {
            case ClassMetadataInfo::INHERITANCE_TYPE_NONE:
                return 'NONE';

            case ClassMetadataInfo::INHERITANCE_TYPE_JOINED:
                return 'JOINED';

            case ClassMetadataInfo::INHERITANCE_TYPE_SINGLE_TABLE:
                return 'SINGLE_TABLE';

            case ClassMetadataInfo::INHERITANCE_TYPE_TABLE_PER_CLASS:
                return 'PER_CLASS';
        }
    }

    /**
     * @param int \$mode
     *
     * @return string
     */
    protected function _getFetchModeString(\$mode)
    {
        switch (\$mode) {
            case ClassMetadataInfo::FETCH_EAGER:
                return 'EAGER';

            case ClassMetadataInfo::FETCH_EXTRA_LAZY:
                return 'EXTRA_LAZY';

            case ClassMetadataInfo::FETCH_LAZY:
                return 'LAZY';
        }
    }

    /**
     * @param int \$policy
     *
     * @return string
     */
    protected function _getChangeTrackingPolicyString(\$policy)
    {
        switch (\$policy) {
            case ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT:
                return 'DEFERRED_IMPLICIT';

            case ClassMetadataInfo::CHANGETRACKING_DEFERRED_EXPLICIT:
                return 'DEFERRED_EXPLICIT';

            case ClassMetadataInfo::CHANGETRACKING_NOTIFY:
                return 'NOTIFY';
        }
    }

    /**
     * @param int \$type
     *
     * @return string
     */
    protected function _getIdGeneratorTypeString(\$type)
    {
        switch (\$type) {
            case ClassMetadataInfo::GENERATOR_TYPE_AUTO:
                return 'AUTO';

            case ClassMetadataInfo::GENERATOR_TYPE_SEQUENCE:
                return 'SEQUENCE';

            case ClassMetadataInfo::GENERATOR_TYPE_TABLE:
                return 'TABLE';

            case ClassMetadataInfo::GENERATOR_TYPE_IDENTITY:
                return 'IDENTITY';

            case ClassMetadataInfo::GENERATOR_TYPE_UUID:
                return 'UUID';

            case ClassMetadataInfo::GENERATOR_TYPE_CUSTOM:
                return 'CUSTOM';
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/AbstractExporter.php";
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

namespace Doctrine\\ORM\\Tools\\Export\\Driver;

use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Doctrine\\ORM\\Tools\\Export\\ExportException;
use const E_USER_DEPRECATED;
use function trigger_error;

/**
 * Abstract base class which is to be used for the Exporter drivers
 * which can be found in \\Doctrine\\ORM\\Tools\\Export\\Driver.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Jonathan Wage <jonwage@gmail.com>
 *
 * @deprecated 2.7 This class is being removed from the ORM and won't have any replacement
 */
abstract class AbstractExporter
{
    /**
     * @var array
     */
    protected \$_metadata = [];

    /**
     * @var string|null
     */
    protected \$_outputDir;

    /**
     * @var string|null
     */
    protected \$_extension;

    /**
     * @var bool
     */
    protected \$_overwriteExistingFiles = false;

    /**
     * @param string|null \$dir
     */
    public function __construct(\$dir = null)
    {
        @trigger_error(static::class . ' is deprecated and will be removed in Doctrine ORM 3.0', E_USER_DEPRECATED);

        \$this->_outputDir = \$dir;
    }

    /**
     * @param bool \$overwrite
     *
     * @return void
     */
    public function setOverwriteExistingFiles(\$overwrite)
    {
        \$this->_overwriteExistingFiles = \$overwrite;
    }

    /**
     * Converts a single ClassMetadata instance to the exported format
     * and returns it.
     *
     * @param ClassMetadataInfo \$metadata
     *
     * @return string
     */
    abstract public function exportClassMetadata(ClassMetadataInfo \$metadata);

    /**
     * Sets the array of ClassMetadataInfo instances to export.
     *
     * @param array \$metadata
     *
     * @return void
     */
    public function setMetadata(array \$metadata)
    {
        \$this->_metadata = \$metadata;
    }

    /**
     * Gets the extension used to generated the path to a class.
     *
     * @return string|null
     */
    public function getExtension()
    {
        return \$this->_extension;
    }

    /**
     * Sets the directory to output the mapping files to.
     *
     *     [php]
     *     \$exporter = new YamlExporter(\$metadata);
     *     \$exporter->setOutputDir(__DIR__ . '/yaml');
     *     \$exporter->export();
     *
     * @param string \$dir
     *
     * @return void
     */
    public function setOutputDir(\$dir)
    {
        \$this->_outputDir = \$dir;
    }

    /**
     * Exports each ClassMetadata instance to a single Doctrine Mapping file
     * named after the entity.
     *
     * @return void
     *
     * @throws \\Doctrine\\ORM\\Tools\\Export\\ExportException
     */
    public function export()
    {
        if ( ! is_dir(\$this->_outputDir)) {
            mkdir(\$this->_outputDir, 0775, true);
        }

        foreach (\$this->_metadata as \$metadata) {
            // In case output is returned, write it to a file, skip otherwise
            if (\$output = \$this->exportClassMetadata(\$metadata)) {
                \$path = \$this->_generateOutputPath(\$metadata);
                \$dir = dirname(\$path);
                if ( ! is_dir(\$dir)) {
                    mkdir(\$dir, 0775, true);
                }
                if (file_exists(\$path) && !\$this->_overwriteExistingFiles) {
                    throw ExportException::attemptOverwriteExistingFile(\$path);
                }
                file_put_contents(\$path, \$output);
                chmod(\$path, 0664);
            }
        }
    }

    /**
     * Generates the path to write the class for the given ClassMetadataInfo instance.
     *
     * @param ClassMetadataInfo \$metadata
     *
     * @return string
     */
    protected function _generateOutputPath(ClassMetadataInfo \$metadata)
    {
        return \$this->_outputDir . '/' . str_replace('\\\\', '.', \$metadata->name) . \$this->_extension;
    }

    /**
     * Sets the directory to output the mapping files to.
     *
     *     [php]
     *     \$exporter = new YamlExporter(\$metadata, __DIR__ . '/yaml');
     *     \$exporter->setExtension('.yml');
     *     \$exporter->export();
     *
     * @param string \$extension
     *
     * @return void
     */
    public function setExtension(\$extension)
    {
        \$this->_extension = \$extension;
    }

    /**
     * @param int \$type
     *
     * @return string
     */
    protected function _getInheritanceTypeString(\$type)
    {
        switch (\$type) {
            case ClassMetadataInfo::INHERITANCE_TYPE_NONE:
                return 'NONE';

            case ClassMetadataInfo::INHERITANCE_TYPE_JOINED:
                return 'JOINED';

            case ClassMetadataInfo::INHERITANCE_TYPE_SINGLE_TABLE:
                return 'SINGLE_TABLE';

            case ClassMetadataInfo::INHERITANCE_TYPE_TABLE_PER_CLASS:
                return 'PER_CLASS';
        }
    }

    /**
     * @param int \$mode
     *
     * @return string
     */
    protected function _getFetchModeString(\$mode)
    {
        switch (\$mode) {
            case ClassMetadataInfo::FETCH_EAGER:
                return 'EAGER';

            case ClassMetadataInfo::FETCH_EXTRA_LAZY:
                return 'EXTRA_LAZY';

            case ClassMetadataInfo::FETCH_LAZY:
                return 'LAZY';
        }
    }

    /**
     * @param int \$policy
     *
     * @return string
     */
    protected function _getChangeTrackingPolicyString(\$policy)
    {
        switch (\$policy) {
            case ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT:
                return 'DEFERRED_IMPLICIT';

            case ClassMetadataInfo::CHANGETRACKING_DEFERRED_EXPLICIT:
                return 'DEFERRED_EXPLICIT';

            case ClassMetadataInfo::CHANGETRACKING_NOTIFY:
                return 'NOTIFY';
        }
    }

    /**
     * @param int \$type
     *
     * @return string
     */
    protected function _getIdGeneratorTypeString(\$type)
    {
        switch (\$type) {
            case ClassMetadataInfo::GENERATOR_TYPE_AUTO:
                return 'AUTO';

            case ClassMetadataInfo::GENERATOR_TYPE_SEQUENCE:
                return 'SEQUENCE';

            case ClassMetadataInfo::GENERATOR_TYPE_TABLE:
                return 'TABLE';

            case ClassMetadataInfo::GENERATOR_TYPE_IDENTITY:
                return 'IDENTITY';

            case ClassMetadataInfo::GENERATOR_TYPE_UUID:
                return 'UUID';

            case ClassMetadataInfo::GENERATOR_TYPE_CUSTOM:
                return 'CUSTOM';
        }
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/AbstractExporter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Export\\Driver\\AbstractExporter.php");
    }
}