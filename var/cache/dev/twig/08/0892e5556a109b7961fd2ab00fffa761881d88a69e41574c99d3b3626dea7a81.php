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

/* @app/vendor/symfony/var-dumper/Caster/ResourceCaster.php */
class __TwigTemplate_b18c2f3689d0dee90c2ac17dc6242baf2d5c6023ef73d250a7f8c1a035f47e76 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/ResourceCaster.php"));

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
 * Casts common resource types to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class ResourceCaster
{
    public static function castCurl(\$h, array \$a, Stub \$stub, bool \$isNested)
    {
        return curl_getinfo(\$h);
    }

    public static function castDba(\$dba, array \$a, Stub \$stub, bool \$isNested)
    {
        \$list = dba_list();
        \$a['file'] = \$list[(int) \$dba];

        return \$a;
    }

    public static function castProcess(\$process, array \$a, Stub \$stub, bool \$isNested)
    {
        return proc_get_status(\$process);
    }

    public static function castStream(\$stream, array \$a, Stub \$stub, bool \$isNested)
    {
        \$a = stream_get_meta_data(\$stream) + static::castStreamContext(\$stream, \$a, \$stub, \$isNested);
        if (isset(\$a['uri'])) {
            \$a['uri'] = new LinkStub(\$a['uri']);
        }

        return \$a;
    }

    public static function castStreamContext(\$stream, array \$a, Stub \$stub, bool \$isNested)
    {
        return @stream_context_get_params(\$stream) ?: \$a;
    }

    public static function castGd(\$gd, array \$a, Stub \$stub, \$isNested)
    {
        \$a['size'] = imagesx(\$gd).'x'.imagesy(\$gd);
        \$a['trueColor'] = imageistruecolor(\$gd);

        return \$a;
    }

    public static function castMysqlLink(\$h, array \$a, Stub \$stub, bool \$isNested)
    {
        \$a['host'] = mysql_get_host_info(\$h);
        \$a['protocol'] = mysql_get_proto_info(\$h);
        \$a['server'] = mysql_get_server_info(\$h);

        return \$a;
    }

    public static function castOpensslX509(\$h, array \$a, Stub \$stub, bool \$isNested)
    {
        \$stub->cut = -1;
        \$info = openssl_x509_parse(\$h, false);

        \$pin = openssl_pkey_get_public(\$h);
        \$pin = openssl_pkey_get_details(\$pin)['key'];
        \$pin = \\array_slice(explode(\"\\n\", \$pin), 1, -2);
        \$pin = base64_decode(implode('', \$pin));
        \$pin = base64_encode(hash('sha256', \$pin, true));

        \$a += [
            'subject' => new EnumStub(array_intersect_key(\$info['subject'], ['organizationName' => true, 'commonName' => true])),
            'issuer' => new EnumStub(array_intersect_key(\$info['issuer'], ['organizationName' => true, 'commonName' => true])),
            'expiry' => new ConstStub(date(\\DateTime::ISO8601, \$info['validTo_time_t']), \$info['validTo_time_t']),
            'fingerprint' => new EnumStub([
                'md5' => new ConstStub(wordwrap(strtoupper(openssl_x509_fingerprint(\$h, 'md5')), 2, ':', true)),
                'sha1' => new ConstStub(wordwrap(strtoupper(openssl_x509_fingerprint(\$h, 'sha1')), 2, ':', true)),
                'sha256' => new ConstStub(wordwrap(strtoupper(openssl_x509_fingerprint(\$h, 'sha256')), 2, ':', true)),
                'pin-sha256' => new ConstStub(\$pin),
            ]),
        ];

        return \$a;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/ResourceCaster.php";
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
 * Casts common resource types to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class ResourceCaster
{
    public static function castCurl(\$h, array \$a, Stub \$stub, bool \$isNested)
    {
        return curl_getinfo(\$h);
    }

    public static function castDba(\$dba, array \$a, Stub \$stub, bool \$isNested)
    {
        \$list = dba_list();
        \$a['file'] = \$list[(int) \$dba];

        return \$a;
    }

    public static function castProcess(\$process, array \$a, Stub \$stub, bool \$isNested)
    {
        return proc_get_status(\$process);
    }

    public static function castStream(\$stream, array \$a, Stub \$stub, bool \$isNested)
    {
        \$a = stream_get_meta_data(\$stream) + static::castStreamContext(\$stream, \$a, \$stub, \$isNested);
        if (isset(\$a['uri'])) {
            \$a['uri'] = new LinkStub(\$a['uri']);
        }

        return \$a;
    }

    public static function castStreamContext(\$stream, array \$a, Stub \$stub, bool \$isNested)
    {
        return @stream_context_get_params(\$stream) ?: \$a;
    }

    public static function castGd(\$gd, array \$a, Stub \$stub, \$isNested)
    {
        \$a['size'] = imagesx(\$gd).'x'.imagesy(\$gd);
        \$a['trueColor'] = imageistruecolor(\$gd);

        return \$a;
    }

    public static function castMysqlLink(\$h, array \$a, Stub \$stub, bool \$isNested)
    {
        \$a['host'] = mysql_get_host_info(\$h);
        \$a['protocol'] = mysql_get_proto_info(\$h);
        \$a['server'] = mysql_get_server_info(\$h);

        return \$a;
    }

    public static function castOpensslX509(\$h, array \$a, Stub \$stub, bool \$isNested)
    {
        \$stub->cut = -1;
        \$info = openssl_x509_parse(\$h, false);

        \$pin = openssl_pkey_get_public(\$h);
        \$pin = openssl_pkey_get_details(\$pin)['key'];
        \$pin = \\array_slice(explode(\"\\n\", \$pin), 1, -2);
        \$pin = base64_decode(implode('', \$pin));
        \$pin = base64_encode(hash('sha256', \$pin, true));

        \$a += [
            'subject' => new EnumStub(array_intersect_key(\$info['subject'], ['organizationName' => true, 'commonName' => true])),
            'issuer' => new EnumStub(array_intersect_key(\$info['issuer'], ['organizationName' => true, 'commonName' => true])),
            'expiry' => new ConstStub(date(\\DateTime::ISO8601, \$info['validTo_time_t']), \$info['validTo_time_t']),
            'fingerprint' => new EnumStub([
                'md5' => new ConstStub(wordwrap(strtoupper(openssl_x509_fingerprint(\$h, 'md5')), 2, ':', true)),
                'sha1' => new ConstStub(wordwrap(strtoupper(openssl_x509_fingerprint(\$h, 'sha1')), 2, ':', true)),
                'sha256' => new ConstStub(wordwrap(strtoupper(openssl_x509_fingerprint(\$h, 'sha256')), 2, ':', true)),
                'pin-sha256' => new ConstStub(\$pin),
            ]),
        ];

        return \$a;
    }
}
", "@app/vendor/symfony/var-dumper/Caster/ResourceCaster.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\ResourceCaster.php");
    }
}
