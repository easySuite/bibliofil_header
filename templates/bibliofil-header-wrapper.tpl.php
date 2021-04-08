<?php

/**
 * @file
 * Bibliofil header js file wrapping.
 *
 * @var array $data
 */
?>
define(function() {
    var searchfield = document.querySelector("#pubsok_txt_0");

    var isFrontPage = window.location.pathname === "/";

    return {
        clientBaseUrl: "<?php print $data['clientBaseUrl']; ?>",
        client: "<?php print $data['client']; ?>",
        storageBaseUrl: "<?php print $data['storageBaseUrl']; ?>",
        suggestionsDomain: "<?php print $data['suggestionsDomain']; ?>",
        header: function() {
            return {
                skin: "<?php print $data['skin'] ?? '' ?>",
                logo: <?php print $data['logos'] ?? [] ?>,
                links: <?php echo $data['links'] ?? []; ?>,
                actions: <?php print $data['actions'] ?? []; ?>,
                search: <?php print $data['search'] ?? []; ?>
            }
        },
    };
});
