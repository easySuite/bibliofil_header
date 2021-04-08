<?php

/**
 * @file
 * Bibliofil header search wrapper.
 *
 * @var array $search
 */
?>
<?php print "{"; ?>
    type: <?php print $search['type']; ?>
    icon: "<?php print $search['icon']; ?>",
    placeholder: "<?php print $search['placeholder']; ?>",
    closeButton: <?php print json_encode($search['closeButton']); ?>,
    suggestionsView: "<?php print $search['suggestionsView']; ?>",
    <?php if ($search['suggestionsView'] == 'two-columns') : ?>
    suggestionsViewStyle: <?php print json_encode($search['suggestionsViewStyle']) ?>,
    <?php endif; ?>
    suggestions: [
        <?php foreach ($search['suggestions'] as $type => $suggestion): ?>
        {
            suggester: <?php print $suggestion['suggester']; ?>,
            minimalQueryLength: <?php print $suggestion['minimalQueryLength']; ?>,
            inputTimeout: <?php print $suggestion['inputTimeout']; ?>,
        <?php if ($type === 'opac'): ?>
            materials: <?php print json_encode($suggestion['materials']); ?>,
            authors: <?php print json_encode($suggestion['authors']); ?>,
            spellcheck: <?php print json_encode($suggestion['spellcheck']); ?>
        <?php else: ?>
            editorial: <?php print json_encode($suggestion['editorial']) ?>
        <?php endif; ?>
        },
        <?php endforeach; ?>
    ],
    onSubmit: function(value, event) {
        window.open('<?php print theme_get_setting('bibliofil_header_opac_url', 'bibliofil'); ?>/cgi-bin/m2-cms?mode=vt&nyttsok=1&pubsok_txt_0=' + value, '_self');
    },
    onSuggestion: function(value, event) {
        if (value.type === "editorial") {
            window.open('<?php print theme_get_setting('bibliofil_header_client_base_url', 'bibliofil'); ?>/search/node/' + value.key, '_self');
        }
    }
<?php print "}"; ?>
