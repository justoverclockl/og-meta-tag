import app from 'flarum/admin/app';

app.initializers.add('justoverclock/og-meta-tag', () => {
    app.extensionData
        .for('justoverclock-og-meta-tag')
        .registerSetting({
            setting: 'justoverclock-og-meta-tag.SiteName',
            name: 'SiteName',
            type: 'text',
            label: app.translator.trans('justoverclock-og-meta-tag.admin.siteName'),
            help: app.translator.trans('justoverclock-og-meta-tag.admin.siteName-help'),
        })
        .registerSetting({
            setting: 'justoverclock-og-meta-tag.OgImage',
            name: 'OgImage',
            type: 'URL',
            label: app.translator.trans('justoverclock-og-meta-tag.admin.ogimage'),
            help: app.translator.trans('justoverclock-og-meta-tag.admin.ogimage-help'),
        })
        .registerSetting({
            setting: 'justoverclock-og-meta-tag.OgDescription',
            name: 'OgDescription',
            type: 'text',
            label: app.translator.trans('justoverclock-og-meta-tag.admin.ogdesc'),
            help: app.translator.trans('justoverclock-og-meta-tag.admin.ogdesc-help'),
        })
        .registerSetting({
            setting: 'justoverclock-og-meta-tag.OgTitle',
            name: 'OgTitle',
            type: 'text',
            label: app.translator.trans('justoverclock-og-meta-tag.admin.ogtitle'),
            help: app.translator.trans('justoverclock-og-meta-tag.admin.ogtitle-help'),
        })
        .registerSetting({
            setting: 'justoverclock-og-meta-tag.OgUrl',
            name: 'OgUrl',
            type: 'URL',
            label: app.translator.trans('justoverclock-og-meta-tag.admin.ogurl'),
            help: app.translator.trans('justoverclock-og-meta-tag.admin.ogurl-help'),
        });
});
