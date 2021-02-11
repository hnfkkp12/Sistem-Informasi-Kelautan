<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => 'v2.0.2@8d8f88b3b3830916be94292c1fbce84433efb1aa',
  'brick/math' => '0.9.2@dff976c2f3487d42c1db75a3b180e2b9f0e72ce0',
  'clue/stream-filter' => 'v1.5.0@aeb7d8ea49c7963d3b581378955dbf5bc49aa320',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/dbal' => '2.10.4@47433196b6390d14409a33885ee42b6208160643',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dragonmantank/cron-expression' => 'v2.3.1@65b2d8ee1f10915efb3b55597da3404f096acba2',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'fideloper/proxy' => '4.4.1@c073b2bd04d1c90e04dc1b787662b558dd65ade0',
  'fruitcake/laravel-cors' => 'v2.0.3@01de0fe5f71c70d1930ee9a80385f9cc28e0f63a',
  'guzzlehttp/guzzle' => '7.2.0@0aa74dfb41ae110835923ef10a9d803a22d50e79',
  'guzzlehttp/promises' => '1.4.0@60d379c243457e073cff02bc323a2a86cb355631',
  'guzzlehttp/psr7' => '1.7.0@53330f47520498c0ae1f61f7e2c90f55690c06a3',
  'http-interop/http-factory-guzzle' => '1.0.0@34861658efb9899a6618cef03de46e2a52c80fc0',
  'jean85/pretty-package-versions' => '1.5.1@a917488320c20057da87f67d0d40543dd9427f7a',
  'laravel/framework' => 'v7.30.4@9dd38140dc2924daa1a020a3d7a45f9ceff03df3',
  'laravel/tinker' => 'v2.6.0@daae1c43f1300fe88c05d83db6f3d8f76677ad88',
  'laravel/ui' => 'v2.5.0@d01a705763c243b07be795e9d1bb47f89260f73d',
  'league/commonmark' => '1.5.7@11df9b36fd4f1d2b727a73bf14931d81373b9a54',
  'league/flysystem' => '1.1.3@9be3b16c877d477357c015cec057548cf9b2a14a',
  'league/mime-type-detection' => '1.7.0@3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'nesbot/carbon' => '2.44.0@e6ef33cb1f67a4bed831ed6d0f7e156739a5d8cd',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'opis/closure' => '3.6.1@943b5d70cc5ae7483f6aff6ff43d7e34592ca0f5',
  'php-http/client-common' => '2.3.0@e37e46c610c87519753135fb893111798c69076a',
  'php-http/discovery' => '1.13.0@788f72d64c43dc361e7fcc7464c3d947c64984a7',
  'php-http/httplug' => '2.2.0@191a0a1b41ed026b717421931f8d3bd2514ffbf9',
  'php-http/message' => '1.11.0@fb0dbce7355cad4f4f6a225f537c34d013571f29',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'phpoption/phpoption' => '1.7.5@994ecccd8f3283ecf5ac33254543eb0ac946d525',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.6@6f990c19f91729de8b31e639d6e204ea59f19cf3',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.1.3@28a5c4ab2f5111db6a60b2b4ec84057e0f43b9c1',
  'ramsey/uuid' => '4.1.1@cd4032040a750077205918c86049aa0f43d22947',
  'sentry/sdk' => '3.1.0@f03133b067fdf03fed09ff03daf3f1d68f5f3673',
  'sentry/sentry' => '3.1.3@db8a322f87983bb4f3cd8db01f9a9a593efe72a3',
  'sentry/sentry-laravel' => '2.3.1@3c8b6c02fbb6b50cb8e236cd1845155b45fc881e',
  'swiftmailer/swiftmailer' => 'v6.2.5@698a6a9f54d7eb321274de3ad19863802c879fb7',
  'symfony/console' => 'v5.2.2@d62ec79478b55036f65e2602e282822b8eaaff0a',
  'symfony/css-selector' => 'v5.2.2@f65f217b3314504a1ec99c2d6ef69016bb13490f',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/error-handler' => 'v5.2.2@4fd4a377f7b7ec7c3f3b40346a1411e0a83f9d40',
  'symfony/event-dispatcher' => 'v5.2.2@4f9760f8074978ad82e2ce854dff79a71fe45367',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/finder' => 'v5.2.2@196f45723b5e618bf0e23b97e96d11652696ea9e',
  'symfony/http-client' => 'v5.2.2@22cb1a7844fff206cc5186409776e78865405ea5',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.2.2@16dfa5acf8103f0394d447f8eea3ea49f9e50855',
  'symfony/http-kernel' => 'v5.2.2@831b51e9370ece0febd0950dd819c63f996721c7',
  'symfony/mime' => 'v5.2.2@37bade585ea100d235c031b258eff93b5b6bb9a9',
  'symfony/options-resolver' => 'v5.2.2@5d0f633f9bbfcf7ec642a2b5037268e61b0a62ce',
  'symfony/polyfill-ctype' => 'v1.22.0@c6c942b1ac76c82448322025e084cadc56048b4e',
  'symfony/polyfill-iconv' => 'v1.22.0@b34bfb8c4c22650ac080d2662ae3502e5f2f4ae6',
  'symfony/polyfill-intl-grapheme' => 'v1.22.0@267a9adeb8ecb8071040a740930e077cdfb987af',
  'symfony/polyfill-intl-idn' => 'v1.22.0@0eb8293dbbcd6ef6bf81404c9ce7d95bcdf34f44',
  'symfony/polyfill-intl-normalizer' => 'v1.22.0@6e971c891537eb617a00bb07a43d182a6915faba',
  'symfony/polyfill-mbstring' => 'v1.22.0@f377a3dd1fde44d37b9831d68dc8dea3ffd28e13',
  'symfony/polyfill-php72' => 'v1.22.0@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.22.0@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.0@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/polyfill-uuid' => 'v1.22.0@17e0611d2e180a91d02b4fa8b03aab0368b661bc',
  'symfony/process' => 'v5.2.2@313a38f09c77fbcdc1d223e57d368cea76a2fd2f',
  'symfony/routing' => 'v5.2.2@348b5917e56546c6d96adbf21d7f92c9ef563661',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/string' => 'v5.2.2@c95468897f408dd0aca2ff582074423dd0455122',
  'symfony/translation' => 'v5.2.2@c021864d4354ee55160ddcfd31dc477a1bc77949',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/var-dumper' => 'v5.2.2@72ca213014a92223a5d18651ce79ef441c12b694',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'vlucas/phpdotenv' => 'v4.2.0@da64796370fc4eb03cc277088f6fede9fde88482',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  'yajra/laravel-datatables-oracle' => 'v9.15.2@e0b416d8b7d4472b16217c40e74284074cc34dde',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'facade/flare-client-php' => '1.3.7@fd688d3c06658f2b3b5f7bb19f051ee4ddf02492',
  'facade/ignition' => '2.4.1@9fc6c3d3de5271a1b94cff19dce2c9295abf0ffa',
  'facade/ignition-contracts' => '1.0.1@aeab1ce8b68b188a43e81758e750151ad7da796b',
  'fakerphp/faker' => 'v1.13.0@ab3f5364d01f2c2c16113442fb987d26e4004913',
  'filp/whoops' => '2.9.2@df7933820090489623ce0be5e85c7e693638e536',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'mockery/mockery' => '1.3.3@60fa2f67f6e4d3634bb4a45ff3171fa52215800d',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nunomaduro/collision' => 'v4.3.0@7c125dc2463f3e144ddc7e05e63077109508c94e',
  'phar-io/manifest' => '2.0.1@85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
  'phar-io/version' => '3.0.4@e4782611070e50613683d2b9a57730e9a3ba5451',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.12.2@245710e971a030f42e08f4912863805570f23d39',
  'phpunit/php-code-coverage' => '7.0.14@bb7c9a210c72e4709cdde67f8b7362f672f2225c',
  'phpunit/php-file-iterator' => '2.0.3@4b49fb70f067272b659ef0174ff9ca40fdaa6357',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '3.1.2@472b687829041c24b25f475e14c2f38a09edf1c2',
  'phpunit/phpunit' => '8.5.14@c25f79895d27b6ecd5abfa63de1606b786a461a3',
  'scrivo/highlight.php' => 'v9.18.1.6@44a3d4136edb5ad8551590bf90f437db80b2d466',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.3@1071dfcef776a57013124ff35e1fc41ccd294758',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.3@6b853149eab67d4da22291d36f5b0631c0fd856e',
  'sebastian/global-state' => '3.0.1@474fb9edb7ab891665d3bfc6317f42a0a150454b',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/type' => '1.1.4@0150cfbc4495ed2df3872fb31b26781e4e077eb4',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'laravel/laravel' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}