<?php
ob_start();
    $source = ($_GET['source'] ? $_GET['source']:$_GET['s']);
    $p_source_url = [
        'ssl' => $ssl,
        'domain' => $domain,
        'domainType' => $domainBase[$domain],
        'page' => $source,
        'p1' => ($_GET['source_type'] ? $_GET['source_type']:NULL),
        'p2' => NULL,
        'p3' => NULL,
        'p4' => NULL,
        'p5' => NULL
    ];
    $p_source = appRouter($p_source_url);
    if ($p_source['page']) {
        $module = $thisSitePath.$p_source['page']['module'].'.source.php';
        if (file_exists($module)) {
            include_once($module);
            if ($p_source['data']['uid']) {
                $p_source_title = 'Profile';
            } else {
                $p_source_title = $p_source['meta']['title_'.$_SESSION['lang']];
            }
        }
    }

    $sourceHtml = ob_get_contents();
ob_end_clean();
?>
<script id="source-remove">
let source_js = `<?= $sourceData['js'] ?>` || false

let source = {
    status: false,
    id: 'warp-source',
    title: '<?= $p_source_title ? $p_source_title : 'false' ?>',
    content: `<?= $sourceData['content'] ? $sourceData['content']:$sourceHtml ?>`,
    footer: '<?= $sourceData['footer'] ? $sourceData['footer']:'false' ?>',
    size: '<?= $sourceData['size'] ? $sourceData['size']:'large' ?>',
    bg: 'var(--bg-color)'
}

init.createModal(source.id, {title: source.title, content: source.content, footer: source.footer}, source.size, source.bg)

let sourceStatusInterval = setInterval(() => {
    if ($('#' + source.id).is('div')) {
        clearInterval(sourceStatusInterval)
        $('#' + source.id).modal('show')
        $('#source-remove').remove()
    }
}, 250);

if (source_js) eval(source_js)

delete source_js
</script>