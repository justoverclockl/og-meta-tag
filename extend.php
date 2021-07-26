<?php

/*
 * This file is part of justoverclock/og-meta-tag.
 *
 * Copyright (c) 2021 Marco Colia.
 * https://flarum.it
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Justoverclock\OgMetaTag;

use Flarum\Extend;
use Flarum\Frontend\Document;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__ . '/js/dist/forum.js')
        ->css(__DIR__ . '/resources/less/forum.less')
        ->content(function (Document $document) {
            $SiteName = resolve(\Flarum\Settings\SettingsRepositoryInterface::class)->get('justoverclock-og-meta-tag.SiteName');
            $OgImage = resolve(\Flarum\Settings\SettingsRepositoryInterface::class)->get('justoverclock-og-meta-tag.OgImage');
            $OgDescription = resolve(\Flarum\Settings\SettingsRepositoryInterface::class)->get('justoverclock-og-meta-tag.OgDescription');
            $OgTitle = resolve(\Flarum\Settings\SettingsRepositoryInterface::class)->get('justoverclock-og-meta-tag.OgTitle');
            $OgUrl = resolve(\Flarum\Settings\SettingsRepositoryInterface::class)->get('justoverclock-og-meta-tag.OgUrl');
            $document->head[] = '<meta property="og:site_name" content="' . $SiteName . '">
<meta property="og:type" content="website">
<meta property="og:image" content="' . $OgImage . '">
<meta property="og:description" content="' . $OgDescription . '">
<meta property="og:title" content="' . $OgTitle . '">
<meta property="og:url" content="' . $OgUrl . '">';
        }),
    (new Extend\Frontend('admin'))
        ->js(__DIR__ . '/js/dist/admin.js')
        ->css(__DIR__ . '/resources/less/admin.less'),
    new Extend\Locales(__DIR__ . '/resources/locale'),
];

