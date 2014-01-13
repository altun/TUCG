<?php

add_action('admin_head', 'ilc_add_tinymce');
function ilc_add_tinymce() {
    $output = '';
    
$iconpack = '
<section id="web-application">
<h2 class="page-header">Web Application Icons</h2>
<div class="row the-icons">
<div class="span3"><a href="#"><i class="icon-adjust"></i> icon-adjust</a></div>
<div class="span3"><a href="#"><i class="icon-anchor"></i> icon-anchor</a></div>
<div class="span3"><a href="#"><i class="icon-archive"></i> icon-archive</a></div>
<div class="span3"><a href="#"><i class="icon-asterisk"></i> icon-asterisk</a></div>
<div class="span3"><a href="#"><i class="icon-ban-circle"></i> icon-ban-circle</a></div>
<div class="span3"><a href="#"><i class="icon-bar-chart"></i> icon-bar-chart</a></div>
<div class="span3"><a href="#"><i class="icon-barcode"></i> icon-barcode</a></div>
<div class="span3"><a href="#"><i class="icon-beaker"></i> icon-beaker</a></div>
<div class="span3"><a href="#"><i class="icon-beer"></i> icon-beer</a></div>
<div class="span3"><a href="#"><i class="icon-bell"></i> icon-bell</a></div>
<div class="span3"><a href="#"><i class="icon-bell-alt"></i> icon-bell-alt</a></div>
<div class="span3"><a href="#"><i class="icon-bolt"></i> icon-bolt</a></div>
<div class="span3"><a href="#"><i class="icon-book"></i> icon-book</a></div>
<div class="span3"><a href="#"><i class="icon-bookmark"></i> icon-bookmark</a></div>
<div class="span3"><a href="#"><i class="icon-bookmark-empty"></i> icon-bookmark-empty</a></div>
<div class="span3"><a href="#"><i class="icon-briefcase"></i> icon-briefcase</a></div>
<div class="span3"><a href="#"><i class="icon-bug"></i> icon-bug</a></div>
<div class="span3"><a href="#"><i class="icon-building"></i> icon-building</a></div>
<div class="span3"><a href="#"><i class="icon-bullhorn"></i> icon-bullhorn</a></div>
<div class="span3"><a href="#"><i class="icon-bullseye"></i> icon-bullseye</a></div>
<div class="span3"><a href="#"><i class="icon-calendar"></i> icon-calendar</a></div>
<div class="span3"><a href="#"><i class="icon-calendar-empty"></i> icon-calendar-empty</a></div>
<div class="span3"><a href="#"><i class="icon-camera"></i> icon-camera</a></div>
<div class="span3"><a href="#"><i class="icon-camera-retro"></i> icon-camera-retro</a></div>
<div class="span3"><a href="#"><i class="icon-certificate"></i> icon-certificate</a></div>
<div class="span3"><a href="#"><i class="icon-check"></i> icon-check</a></div>
<div class="span3"><a href="#"><i class="icon-check-empty"></i> icon-check-empty</a></div>
<div class="span3"><a href="#"><i class="icon-check-minus"></i> icon-check-minus</a></div>
<div class="span3"><a href="#"><i class="icon-check-sign"></i> icon-check-sign</a></div>
<div class="span3"><a href="#"><i class="icon-circle"></i> icon-circle</a></div>
<div class="span3"><a href="#"><i class="icon-circle-blank"></i> icon-circle-blank</a></div>
<div class="span3"><a href="#"><i class="icon-cloud"></i> icon-cloud</a></div>
<div class="span3"><a href="#"><i class="icon-cloud-download"></i> icon-cloud-download</a></div>
<div class="span3"><a href="#"><i class="icon-cloud-upload"></i> icon-cloud-upload</a></div>
<div class="span3"><a href="#"><i class="icon-code"></i> icon-code</a></div>
<div class="span3"><a href="#"><i class="icon-code-fork"></i> icon-code-fork</a></div>
<div class="span3"><a href="#"><i class="icon-coffee"></i> icon-coffee</a></div>
<div class="span3"><a href="#"><i class="icon-cog"></i> icon-cog</a></div>
<div class="span3"><a href="#"><i class="icon-cogs"></i> icon-cogs</a></div>
<div class="span3"><a href="#"><i class="icon-collapse"></i> icon-collapse</a></div>
<div class="span3"><a href="#"><i class="icon-collapse-alt"></i> icon-collapse-alt</a></div>
<div class="span3"><a href="#"><i class="icon-collapse-top"></i> icon-collapse-top</a></div>
<div class="span3"><a href="#"><i class="icon-comment"></i> icon-comment</a></div>
<div class="span3"><a href="#"><i class="icon-comment-alt"></i> icon-comment-alt</a></div>
<div class="span3"><a href="#"><i class="icon-comments"></i> icon-comments</a></div>
<div class="span3"><a href="#"><i class="icon-comments-alt"></i> icon-comments-alt</a></div>
<div class="span3"><a href="#"><i class="icon-compass"></i> icon-compass</a></div>
<div class="span3"><a href="#"><i class="icon-credit-card"></i> icon-credit-card</a></div>
<div class="span3"><a href="#"><i class="icon-crop"></i> icon-crop</a></div>
<div class="span3"><a href="#"><i class="icon-dashboard"></i> icon-dashboard</a></div>
<div class="span3"><a href="#"><i class="icon-desktop"></i> icon-desktop</a></div>
<div class="span3"><a href="#"><i class="icon-download"></i> icon-download</a></div>
<div class="span3"><a href="#"><i class="icon-download-alt"></i> icon-download-alt</a></div>
<div class="span3"><a href="#"><i class="icon-edit"></i> icon-edit</a></div>
<div class="span3"><a href="#"><i class="icon-edit-sign"></i> icon-edit-sign</a></div>
<div class="span3"><a href="#"><i class="icon-ellipsis-horizontal"></i> icon-ellipsis-horizontal</a></div>
<div class="span3"><a href="#"><i class="icon-ellipsis-vertical"></i> icon-ellipsis-vertical</a></div>
<div class="span3"><a href="#"><i class="icon-envelope"></i> icon-envelope</a></div>
<div class="span3"><a href="#"><i class="icon-envelope-alt"></i> icon-envelope-alt</a></div>
<div class="span3"><a href="#"><i class="icon-eraser"></i> icon-eraser</a></div>
<div class="span3"><a href="#"><i class="icon-exchange"></i> icon-exchange</a></div>
<div class="span3"><a href="#"><i class="icon-exclamation"></i> icon-exclamation</a></div>
<div class="span3"><a href="#"><i class="icon-exclamation-sign"></i> icon-exclamation-sign</a></div>
<div class="span3"><a href="#"><i class="icon-expand"></i> icon-expand</a></div>
<div class="span3"><a href="#"><i class="icon-expand-alt"></i> icon-expand-alt</a></div>
<div class="span3"><a href="#"><i class="icon-external-link"></i> icon-external-link</a></div>
<div class="span3"><a href="#"><i class="icon-external-link-sign"></i> icon-external-link-sign</a></div>
<div class="span3"><a href="#"><i class="icon-eye-close"></i> icon-eye-close</a></div>
<div class="span3"><a href="#"><i class="icon-eye-open"></i> icon-eye-open</a></div>
<div class="span3"><a href="#"><i class="icon-facetime-video"></i> icon-facetime-video</a></div>
<div class="span3"><a href="#"><i class="icon-female"></i> icon-female</a></div>
<div class="span3"><a href="#"><i class="icon-fighter-jet"></i> icon-fighter-jet</a></div>
<div class="span3"><a href="#"><i class="icon-film"></i> icon-film</a></div>
<div class="span3"><a href="#"><i class="icon-filter"></i> icon-filter</a></div>
<div class="span3"><a href="#"><i class="icon-fire"></i> icon-fire</a></div>
<div class="span3"><a href="#"><i class="icon-fire-extinguisher"></i> icon-fire-extinguisher</a></div>
<div class="span3"><a href="#"><i class="icon-flag"></i> icon-flag</a></div>
<div class="span3"><a href="#"><i class="icon-flag-alt"></i> icon-flag-alt</a></div>
<div class="span3"><a href="#"><i class="icon-flag-checkered"></i> icon-flag-checkered</a></div>
<div class="span3"><a href="#"><i class="icon-folder-close"></i> icon-folder-close</a></div>
<div class="span3"><a href="#"><i class="icon-folder-close-alt"></i> icon-folder-close-alt</a></div>
<div class="span3"><a href="#"><i class="icon-folder-open"></i> icon-folder-open</a></div>
<div class="span3"><a href="#"><i class="icon-folder-open-alt"></i> icon-folder-open-alt</a></div>
<div class="span3"><a href="#"><i class="icon-food"></i> icon-food</a></div>
<div class="span3"><a href="#"><i class="icon-frown"></i> icon-frown</a></div>
<div class="span3"><a href="#"><i class="icon-gamepad"></i> icon-gamepad</a></div>
<div class="span3"><a href="#"><i class="icon-gear"></i> icon-gear <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-gears"></i> icon-gears <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-gift"></i> icon-gift</a></div>
<div class="span3"><a href="#"><i class="icon-glass"></i> icon-glass</a></div>
<div class="span3"><a href="#"><i class="icon-globe"></i> icon-globe</a></div>
<div class="span3"><a href="#"><i class="icon-group"></i> icon-group</a></div>
<div class="span3"><a href="#"><i class="icon-hdd"></i> icon-hdd</a></div>
<div class="span3"><a href="#"><i class="icon-headphones"></i> icon-headphones</a></div>
<div class="span3"><a href="#"><i class="icon-heart"></i> icon-heart</a></div>
<div class="span3"><a href="#"><i class="icon-heart-empty"></i> icon-heart-empty</a></div>
<div class="span3"><a href="#"><i class="icon-home"></i> icon-home</a></div>
<div class="span3"><a href="#"><i class="icon-inbox"></i> icon-inbox</a></div>
<div class="span3"><a href="#"><i class="icon-info"></i> icon-info</a></div>
<div class="span3"><a href="#"><i class="icon-info-sign"></i> icon-info-sign</a></div>
<div class="span3"><a href="#"><i class="icon-key"></i> icon-key</a></div>
<div class="span3"><a href="#"><i class="icon-keyboard"></i> icon-keyboard</a></div>
<div class="span3"><a href="#"><i class="icon-laptop"></i> icon-laptop</a></div>
<div class="span3"><a href="#"><i class="icon-leaf"></i> icon-leaf</a></div>
<div class="span3"><a href="#"><i class="icon-legal"></i> icon-legal</a></div>
<div class="span3"><a href="#"><i class="icon-lemon"></i> icon-lemon</a></div>
<div class="span3"><a href="#"><i class="icon-level-down"></i> icon-level-down</a></div>
<div class="span3"><a href="#"><i class="icon-level-up"></i> icon-level-up</a></div>
<div class="span3"><a href="#"><i class="icon-lightbulb"></i> icon-lightbulb</a></div>
<div class="span3"><a href="#"><i class="icon-location-arrow"></i> icon-location-arrow</a></div>
<div class="span3"><a href="#"><i class="icon-lock"></i> icon-lock</a></div>
<div class="span3"><a href="#"><i class="icon-magic"></i> icon-magic</a></div>
<div class="span3"><a href="#"><i class="icon-magnet"></i> icon-magnet</a></div>
<div class="span3"><a href="#"><i class="icon-mail-forward"></i> icon-mail-forward <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-mail-reply"></i> icon-mail-reply <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-mail-reply-all"></i> icon-mail-reply-all</a></div>
<div class="span3"><a href="#"><i class="icon-male"></i> icon-male</a></div>
<div class="span3"><a href="#"><i class="icon-map-marker"></i> icon-map-marker</a></div>
<div class="span3"><a href="#"><i class="icon-meh"></i> icon-meh</a></div>
<div class="span3"><a href="#"><i class="icon-microphone"></i> icon-microphone</a></div>
<div class="span3"><a href="#"><i class="icon-microphone-off"></i> icon-microphone-off</a></div>
<div class="span3"><a href="#"><i class="icon-minus"></i> icon-minus</a></div>
<div class="span3"><a href="#"><i class="icon-minus-sign"></i> icon-minus-sign</a></div>
<div class="span3"><a href="#"><i class="icon-minus-sign-alt"></i> icon-minus-sign-alt</a></div>
<div class="span3"><a href="#"><i class="icon-mobile-phone"></i> icon-mobile-phone</a></div>
<div class="span3"><a href="#"><i class="icon-money"></i> icon-money</a></div>
<div class="span3"><a href="#"><i class="icon-moon"></i> icon-moon</a></div>
<div class="span3"><a href="#"><i class="icon-move"></i> icon-move</a></div>
<div class="span3"><a href="#"><i class="icon-music"></i> icon-music</a></div>
<div class="span3"><a href="#"><i class="icon-off"></i> icon-off</a></div>
<div class="span3"><a href="#"><i class="icon-ok"></i> icon-ok</a></div>
<div class="span3"><a href="#"><i class="icon-ok-circle"></i> icon-ok-circle</a></div>
<div class="span3"><a href="#"><i class="icon-ok-sign"></i> icon-ok-sign</a></div>
<div class="span3"><a href="#"><i class="icon-pencil"></i> icon-pencil</a></div>
<div class="span3"><a href="#"><i class="icon-phone"></i> icon-phone</a></div>
<div class="span3"><a href="#"><i class="icon-phone-sign"></i> icon-phone-sign</a></div>
<div class="span3"><a href="#"><i class="icon-picture"></i> icon-picture</a></div>
<div class="span3"><a href="#"><i class="icon-plane"></i> icon-plane</a></div>
<div class="span3"><a href="#"><i class="icon-plus"></i> icon-plus</a></div>
<div class="span3"><a href="#"><i class="icon-plus-sign"></i> icon-plus-sign</a></div>
<div class="span3"><a href="#"><i class="icon-plus-sign-alt"></i> icon-plus-sign-alt</a></div>
<div class="span3"><a href="#"><i class="icon-power-off"></i> icon-power-off <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-print"></i> icon-print</a></div>
<div class="span3"><a href="#"><i class="icon-pushpin"></i> icon-pushpin</a></div>
<div class="span3"><a href="#"><i class="icon-puzzle-piece"></i> icon-puzzle-piece</a></div>
<div class="span3"><a href="#"><i class="icon-qrcode"></i> icon-qrcode</a></div>
<div class="span3"><a href="#"><i class="icon-question"></i> icon-question</a></div>
<div class="span3"><a href="#"><i class="icon-question-sign"></i> icon-question-sign</a></div>
<div class="span3"><a href="#"><i class="icon-quote-left"></i> icon-quote-left</a></div>
<div class="span3"><a href="#"><i class="icon-quote-right"></i> icon-quote-right</a></div>
<div class="span3"><a href="#"><i class="icon-random"></i> icon-random</a></div>
<div class="span3"><a href="#"><i class="icon-refresh"></i> icon-refresh</a></div>
<div class="span3"><a href="#"><i class="icon-remove"></i> icon-remove</a></div>
<div class="span3"><a href="#"><i class="icon-remove-circle"></i> icon-remove-circle</a></div>
<div class="span3"><a href="#"><i class="icon-remove-sign"></i> icon-remove-sign</a></div>
<div class="span3"><a href="#"><i class="icon-reorder"></i> icon-reorder</a></div>
<div class="span3"><a href="#"><i class="icon-reply"></i> icon-reply</a></div>
<div class="span3"><a href="#"><i class="icon-reply-all"></i> icon-reply-all</a></div>
<div class="span3"><a href="#"><i class="icon-resize-horizontal"></i> icon-resize-horizontal</a></div>
<div class="span3"><a href="#"><i class="icon-resize-vertical"></i> icon-resize-vertical</a></div>
<div class="span3"><a href="#"><i class="icon-retweet"></i> icon-retweet</a></div>
<div class="span3"><a href="#"><i class="icon-road"></i> icon-road</a></div>
<div class="span3"><a href="#"><i class="icon-rocket"></i> icon-rocket</a></div>
<div class="span3"><a href="#"><i class="icon-rss"></i> icon-rss</a></div>
<div class="span3"><a href="#"><i class="icon-rss-sign"></i> icon-rss-sign</a></div>
<div class="span3"><a href="#"><i class="icon-screenshot"></i> icon-screenshot</a></div>
<div class="span3"><a href="#"><i class="icon-search"></i> icon-search</a></div>
<div class="span3"><a href="#"><i class="icon-share"></i> icon-share</a></div>
<div class="span3"><a href="#"><i class="icon-share-alt"></i> icon-share-alt</a></div>
<div class="span3"><a href="#"><i class="icon-share-sign"></i> icon-share-sign</a></div>
<div class="span3"><a href="#"><i class="icon-shield"></i> icon-shield</a></div>
<div class="span3"><a href="#"><i class="icon-shopping-cart"></i> icon-shopping-cart</a></div>
<div class="span3"><a href="#"><i class="icon-sign-blank"></i> icon-sign-blank</a></div>
<div class="span3"><a href="#"><i class="icon-signal"></i> icon-signal</a></div>
<div class="span3"><a href="#"><i class="icon-signin"></i> icon-signin</a></div>
<div class="span3"><a href="#"><i class="icon-signout"></i> icon-signout</a></div>
<div class="span3"><a href="#"><i class="icon-sitemap"></i> icon-sitemap</a></div>
<div class="span3"><a href="#"><i class="icon-smile"></i> icon-smile</a></div>
<div class="span3"><a href="#"><i class="icon-sort"></i> icon-sort</a></div>
<div class="span3"><a href="#"><i class="icon-sort-by-alphabet"></i> icon-sort-by-alphabet</a></div>
<div class="span3"><a href="#"><i class="icon-sort-by-alphabet-alt"></i> icon-sort-by-alphabet-alt</a></div>
<div class="span3"><a href="#"><i class="icon-sort-by-attributes"></i> icon-sort-by-attributes</a></div>
<div class="span3"><a href="#"><i class="icon-sort-by-attributes-alt"></i> icon-sort-by-attributes-alt</a></div>
<div class="span3"><a href="#"><i class="icon-sort-by-order"></i> icon-sort-by-order</a></div>
<div class="span3"><a href="#"><i class="icon-sort-by-order-alt"></i> icon-sort-by-order-alt</a></div>
<div class="span3"><a href="#"><i class="icon-sort-down"></i> icon-sort-down</a></div>
<div class="span3"><a href="#"><i class="icon-sort-up"></i> icon-sort-up</a></div>
<div class="span3"><a href="#"><i class="icon-spinner"></i> icon-spinner</a></div>
<div class="span3"><a href="#"><i class="icon-star"></i> icon-star</a></div>
<div class="span3"><a href="#"><i class="icon-star-empty"></i> icon-star-empty</a></div>
<div class="span3"><a href="#"><i class="icon-star-half"></i> icon-star-half</a></div>
<div class="span3"><a href="#"><i class="icon-star-half-empty"></i> icon-star-half-empty</a></div>
<div class="span3"><a href="#"><i class="icon-star-half-full"></i> icon-star-half-full <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-subscript"></i> icon-subscript</a></div>
<div class="span3"><a href="#"><i class="icon-suitcase"></i> icon-suitcase</a></div>
<div class="span3"><a href="#"><i class="icon-sun"></i> icon-sun</a></div>
<div class="span3"><a href="#"><i class="icon-superscript"></i> icon-superscript</a></div>
<div class="span3"><a href="#"><i class="icon-tablet"></i> icon-tablet</a></div>
<div class="span3"><a href="#"><i class="icon-tag"></i> icon-tag</a></div>
<div class="span3"><a href="#"><i class="icon-tags"></i> icon-tags</a></div>
<div class="span3"><a href="#"><i class="icon-tasks"></i> icon-tasks</a></div>
<div class="span3"><a href="#"><i class="icon-terminal"></i> icon-terminal</a></div>
<div class="span3"><a href="#"><i class="icon-thumbs-down"></i> icon-thumbs-down</a></div>
<div class="span3"><a href="#"><i class="icon-thumbs-down-alt"></i> icon-thumbs-down-alt</a></div>
<div class="span3"><a href="#"><i class="icon-thumbs-up"></i> icon-thumbs-up</a></div>
<div class="span3"><a href="#"><i class="icon-thumbs-up-alt"></i> icon-thumbs-up-alt</a></div>
<div class="span3"><a href="#"><i class="icon-ticket"></i> icon-ticket</a></div>
<div class="span3"><a href="#"><i class="icon-time"></i> icon-time</a></div>
<div class="span3"><a href="#"><i class="icon-tint"></i> icon-tint</a></div>
<div class="span3"><a href="#"><i class="icon-trash"></i> icon-trash</a></div>
<div class="span3"><a href="#"><i class="icon-trophy"></i> icon-trophy</a></div>
<div class="span3"><a href="#"><i class="icon-truck"></i> icon-truck</a></div>
<div class="span3"><a href="#"><i class="icon-umbrella"></i> icon-umbrella</a></div>
<div class="span3"><a href="#"><i class="icon-unchecked"></i> icon-unchecked <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-unlock"></i> icon-unlock</a></div>
<div class="span3"><a href="#"><i class="icon-unlock-alt"></i> icon-unlock-alt</a></div>
<div class="span3"><a href="#"><i class="icon-upload"></i> icon-upload</a></div>
<div class="span3"><a href="#"><i class="icon-upload-alt"></i> icon-upload-alt</a></div>
<div class="span3"><a href="#"><i class="icon-user"></i> icon-user</a></div>
<div class="span3"><a href="#"><i class="icon-volume-down"></i> icon-volume-down</a></div>
<div class="span3"><a href="#"><i class="icon-volume-off"></i> icon-volume-off</a></div>
<div class="span3"><a href="#"><i class="icon-volume-up"></i> icon-volume-up</a></div>
<div class="span3"><a href="#"><i class="icon-warning-sign"></i> icon-warning-sign</a></div>
<div class="span3"><a href="#"><i class="icon-wrench"></i> icon-wrench</a></div>
<div class="span3"><a href="#"><i class="icon-zoom-in"></i> icon-zoom-in</a></div>
<div class="span3"><a href="#"><i class="icon-zoom-out"></i> icon-zoom-out</a></div>
<p></p></div>
</section>
<section id="currency">
<h2 class="page-header">Currency Icons</h2>
<div class="row the-icons">
<div class="span3"><a href="#"><i class="icon-bitcoin"></i> icon-bitcoin <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-btc"></i> icon-btc</a></div>
<div class="span3"><a href="#"><i class="icon-cny"></i> icon-cny</a></div>
<div class="span3"><a href="#"><i class="icon-dollar"></i> icon-dollar <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-eur"></i> icon-eur</a></div>
<div class="span3"><a href="#"><i class="icon-euro"></i> icon-euro <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-gbp"></i> icon-gbp</a></div>
<div class="span3"><a href="#"><i class="icon-inr"></i> icon-inr</a></div>
<div class="span3"><a href="#"><i class="icon-jpy"></i> icon-jpy</a></div>
<div class="span3"><a href="#"><i class="icon-krw"></i> icon-krw</a></div>
<div class="span3"><a href="#"><i class="icon-renminbi"></i> icon-renminbi <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-rupee"></i> icon-rupee <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-usd"></i> icon-usd</a></div>
<div class="span3"><a href="#"><i class="icon-won"></i> icon-won <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-yen"></i> icon-yen <span class="muted">(alias)</span></a></div>
<p></p></div>
</section>
<section id="text-editor">
<h2 class="page-header">Text Editor Icons</h2>
<div class="row the-icons">
<div class="span3"><a href="#"><i class="icon-align-center"></i> icon-align-center</a></div>
<div class="span3"><a href="#"><i class="icon-align-justify"></i> icon-align-justify</a></div>
<div class="span3"><a href="#"><i class="icon-align-left"></i> icon-align-left</a></div>
<div class="span3"><a href="#"><i class="icon-align-right"></i> icon-align-right</a></div>
<div class="span3"><a href="#"><i class="icon-bold"></i> icon-bold</a></div>
<div class="span3"><a href="#"><i class="icon-columns"></i> icon-columns</a></div>
<div class="span3"><a href="#"><i class="icon-copy"></i> icon-copy</a></div>
<div class="span3"><a href="#"><i class="icon-cut"></i> icon-cut</a></div>
<div class="span3"><a href="#"><i class="icon-eraser"></i> icon-eraser</a></div>
<div class="span3"><a href="#"><i class="icon-file"></i> icon-file</a></div>
<div class="span3"><a href="#"><i class="icon-file-alt"></i> icon-file-alt</a></div>
<div class="span3"><a href="#"><i class="icon-file-text"></i> icon-file-text</a></div>
<div class="span3"><a href="#"><i class="icon-file-text-alt"></i> icon-file-text-alt</a></div>
<div class="span3"><a href="#"><i class="icon-font"></i> icon-font</a></div>
<div class="span3"><a href="#"><i class="icon-indent-left"></i> icon-indent-left</a></div>
<div class="span3"><a href="#"><i class="icon-indent-right"></i> icon-indent-right</a></div>
<div class="span3"><a href="#"><i class="icon-italic"></i> icon-italic</a></div>
<div class="span3"><a href="#"><i class="icon-link"></i> icon-link</a></div>
<div class="span3"><a href="#"><i class="icon-list"></i> icon-list</a></div>
<div class="span3"><a href="#"><i class="icon-list-alt"></i> icon-list-alt</a></div>
<div class="span3"><a href="#"><i class="icon-list-ol"></i> icon-list-ol</a></div>
<div class="span3"><a href="#"><i class="icon-list-ul"></i> icon-list-ul</a></div>
<div class="span3"><a href="#"><i class="icon-paper-clip"></i> icon-paper-clip</a></div>
<div class="span3"><a href="#"><i class="icon-paperclip"></i> icon-paperclip <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-paste"></i> icon-paste</a></div>
<div class="span3"><a href="#"><i class="icon-repeat"></i> icon-repeat</a></div>
<div class="span3"><a href="#"><i class="icon-rotate-left"></i> icon-rotate-left <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-rotate-right"></i> icon-rotate-right <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-save"></i> icon-save</a></div>
<div class="span3"><a href="#"><i class="icon-strikethrough"></i> icon-strikethrough</a></div>
<div class="span3"><a href="#"><i class="icon-table"></i> icon-table</a></div>
<div class="span3"><a href="#"><i class="icon-text-height"></i> icon-text-height</a></div>
<div class="span3"><a href="#"><i class="icon-text-width"></i> icon-text-width</a></div>
<div class="span3"><a href="#"><i class="icon-th"></i> icon-th</a></div>
<div class="span3"><a href="#"><i class="icon-th-large"></i> icon-th-large</a></div>
<div class="span3"><a href="#"><i class="icon-th-list"></i> icon-th-list</a></div>
<div class="span3"><a href="#"><i class="icon-underline"></i> icon-underline</a></div>
<div class="span3"><a href="#"><i class="icon-undo"></i> icon-undo</a></div>
<div class="span3"><a href="#"><i class="icon-unlink"></i> icon-unlink</a></div>
<p></p></div>
</section>
<section id="directional">
<h2 class="page-header">Directional Icons</h2>
<div class="row the-icons">
<div class="span3"><a href="#"><i class="icon-angle-down"></i> icon-angle-down</a></div>
<div class="span3"><a href="#"><i class="icon-angle-left"></i> icon-angle-left</a></div>
<div class="span3"><a href="#"><i class="icon-angle-right"></i> icon-angle-right</a></div>
<div class="span3"><a href="#"><i class="icon-angle-up"></i> icon-angle-up</a></div>
<div class="span3"><a href="#"><i class="icon-arrow-down"></i> icon-arrow-down</a></div>
<div class="span3"><a href="#"><i class="icon-arrow-left"></i> icon-arrow-left</a></div>
<div class="span3"><a href="#"><i class="icon-arrow-right"></i> icon-arrow-right</a></div>
<div class="span3"><a href="#"><i class="icon-arrow-up"></i> icon-arrow-up</a></div>
<div class="span3"><a href="#"><i class="icon-caret-down"></i> icon-caret-down</a></div>
<div class="span3"><a href="#"><i class="icon-caret-left"></i> icon-caret-left</a></div>
<div class="span3"><a href="#"><i class="icon-caret-right"></i> icon-caret-right</a></div>
<div class="span3"><a href="#"><i class="icon-caret-up"></i> icon-caret-up</a></div>
<div class="span3"><a href="#"><i class="icon-chevron-down"></i> icon-chevron-down</a></div>
<div class="span3"><a href="#"><i class="icon-chevron-left"></i> icon-chevron-left</a></div>
<div class="span3"><a href="#"><i class="icon-chevron-right"></i> icon-chevron-right</a></div>
<div class="span3"><a href="#"><i class="icon-chevron-sign-down"></i> icon-chevron-sign-down</a></div>
<div class="span3"><a href="#"><i class="icon-chevron-sign-left"></i> icon-chevron-sign-left</a></div>
<div class="span3"><a href="#"><i class="icon-chevron-sign-right"></i> icon-chevron-sign-right</a></div>
<div class="span3"><a href="#"><i class="icon-chevron-sign-up"></i> icon-chevron-sign-up</a></div>
<div class="span3"><a href="#"><i class="icon-chevron-up"></i> icon-chevron-up</a></div>
<div class="span3"><a href="#"><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</a></div>
<div class="span3"><a href="#"><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</a></div>
<div class="span3"><a href="#"><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</a></div>
<div class="span3"><a href="#"><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</a></div>
<div class="span3"><a href="#"><i class="icon-double-angle-down"></i> icon-double-angle-down</a></div>
<div class="span3"><a href="#"><i class="icon-double-angle-left"></i> icon-double-angle-left</a></div>
<div class="span3"><a href="#"><i class="icon-double-angle-right"></i> icon-double-angle-right</a></div>
<div class="span3"><a href="#"><i class="icon-double-angle-up"></i> icon-double-angle-up</a></div>
<div class="span3"><a href="#"><i class="icon-hand-down"></i> icon-hand-down</a></div>
<div class="span3"><a href="#"><i class="icon-hand-left"></i> icon-hand-left</a></div>
<div class="span3"><a href="#"><i class="icon-hand-right"></i> icon-hand-right</a></div>
<div class="span3"><a href="#"><i class="icon-hand-up"></i> icon-hand-up</a></div>
<div class="span3"><a href="#"><i class="icon-long-arrow-down"></i> icon-long-arrow-down</a></div>
<div class="span3"><a href="#"><i class="icon-long-arrow-left"></i> icon-long-arrow-left</a></div>
<div class="span3"><a href="#"><i class="icon-long-arrow-right"></i> icon-long-arrow-right</a></div>
<div class="span3"><a href="#"><i class="icon-long-arrow-up"></i> icon-long-arrow-up</a></div>
</div>
</section>
<section id="video-player">
<h2 class="page-header">Video Player Icons</h2>
<div class="row the-icons">
<div class="span3"><a href="#"><i class="icon-backward"></i> icon-backward</a></div>
<div class="span3"><a href="#"><i class="icon-eject"></i> icon-eject</a></div>
<div class="span3"><a href="#"><i class="icon-fast-backward"></i> icon-fast-backward</a></div>
<div class="span3"><a href="#"><i class="icon-fast-forward"></i> icon-fast-forward</a></div>
<div class="span3"><a href="#"><i class="icon-forward"></i> icon-forward</a></div>
<div class="span3"><a href="#"><i class="icon-fullscreen"></i> icon-fullscreen</a></div>
<div class="span3"><a href="#"><i class="icon-pause"></i> icon-pause</a></div>
<div class="span3"><a href="#"><i class="icon-play"></i> icon-play</a></div>
<div class="span3"><a href="#"><i class="icon-play-circle"></i> icon-play-circle</a></div>
<div class="span3"><a href="#"><i class="icon-play-sign"></i> icon-play-sign</a></div>
<div class="span3"><a href="#"><i class="icon-resize-full"></i> icon-resize-full</a></div>
<div class="span3"><a href="#"><i class="icon-resize-small"></i> icon-resize-small</a></div>
<div class="span3"><a href="#"><i class="icon-step-backward"></i> icon-step-backward</a></div>
<div class="span3"><a href="#"><i class="icon-step-forward"></i> icon-step-forward</a></div>
<div class="span3"><a href="#"><i class="icon-stop"></i> icon-stop</a></div>
<div class="span3"><a href="#"><i class="icon-youtube-play"></i> icon-youtube-play</a></div>
<p></p></div>
</section>
<section id="brand">
<h2 class="page-header">Brand Icons</h2>
<div class="alert alert-info">
<ul class="margin-bottom-none">
<li>All brand icons are trademarks of their respective owners.</li>
<li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
</ul></div>
<div class="row the-icons">
<div class="span3"><a href="#"><i class="icon-adn"></i> icon-adn</a></div>
<div class="span3"><a href="#"><i class="icon-android"></i> icon-android</a></div>
<div class="span3"><a href="#"><i class="icon-apple"></i> icon-apple</a></div>
<div class="span3"><a href="#"><i class="icon-bitbucket"></i> icon-bitbucket</a></div>
<div class="span3"><a href="#"><i class="icon-bitbucket-sign"></i> icon-bitbucket-sign</a></div>
<div class="span3"><a href="#"><i class="icon-bitcoin"></i> icon-bitcoin <span class="muted">(alias)</span></a></div>
<div class="span3"><a href="#"><i class="icon-btc"></i> icon-btc</a></div>
<div class="span3"><a href="#"><i class="icon-css3"></i> icon-css3</a></div>
<div class="span3"><a href="#"><i class="icon-dribbble"></i> icon-dribbble</a></div>
<div class="span3"><a href="#"><i class="icon-dropbox"></i> icon-dropbox</a></div>
<div class="span3"><a href="#"><i class="icon-facebook"></i> icon-facebook</a></div>
<div class="span3"><a href="#"><i class="icon-facebook-sign"></i> icon-facebook-sign</a></div>
<div class="span3"><a href="#"><i class="icon-flickr"></i> icon-flickr</a></div>
<div class="span3"><a href="#"><i class="icon-foursquare"></i> icon-foursquare</a></div>
<div class="span3"><a href="#"><i class="icon-github"></i> icon-github</a></div>
<div class="span3"><a href="#"><i class="icon-github-alt"></i> icon-github-alt</a></div>
<div class="span3"><a href="#"><i class="icon-github-sign"></i> icon-github-sign</a></div>
<div class="span3"><a href="#"><i class="icon-gittip"></i> icon-gittip</a></div>
<div class="span3"><a href="#"><i class="icon-google-plus"></i> icon-google-plus</a></div>
<div class="span3"><a href="#"><i class="icon-google-plus-sign"></i> icon-google-plus-sign</a></div>
<div class="span3"><a href="#"><i class="icon-html5"></i> icon-html5</a></div>
<div class="span3"><a href="#"><i class="icon-instagram"></i> icon-instagram</a></div>
<div class="span3"><a href="#"><i class="icon-linkedin"></i> icon-linkedin</a></div>
<div class="span3"><a href="#"><i class="icon-linkedin-sign"></i> icon-linkedin-sign</a></div>
<div class="span3"><a href="#"><i class="icon-linux"></i> icon-linux</a></div>
<div class="span3"><a href="#"><i class="icon-maxcdn"></i> icon-maxcdn</a></div>
<div class="span3"><a href="#"><i class="icon-pinterest"></i> icon-pinterest</a></div>
<div class="span3"><a href="#"><i class="icon-pinterest-sign"></i> icon-pinterest-sign</a></div>
<div class="span3"><a href="#"><i class="icon-renren"></i> icon-renren</a></div>
<div class="span3"><a href="#"><i class="icon-skype"></i> icon-skype</a></div>
<div class="span3"><a href="#"><i class="icon-stackexchange"></i> icon-stackexchange</a></div>
<div class="span3"><a href="#"><i class="icon-trello"></i> icon-trello</a></div>
<div class="span3"><a href="#"><i class="icon-tumblr"></i> icon-tumblr</a></div>
<div class="span3"><a href="#"><i class="icon-tumblr-sign"></i> icon-tumblr-sign</a></div>
<div class="span3"><a href="#"><i class="icon-twitter"></i> icon-twitter</a></div>
<div class="span3"><a href="#"><i class="icon-twitter-sign"></i> icon-twitter-sign</a></div>
<div class="span3"><a href="#"><i class="icon-vk"></i> icon-vk</a></div>
<div class="span3"><a href="#"><i class="icon-weibo"></i> icon-weibo</a></div>
<div class="span3"><a href="#"><i class="icon-windows"></i> icon-windows</a></div>
<div class="span3"><a href="#"><i class="icon-xing"></i> icon-xing</a></div>
<div class="span3"><a href="#"><i class="icon-xing-sign"></i> icon-xing-sign</a></div>
<div class="span3"><a href="#"><i class="icon-youtube"></i> icon-youtube</a></div>
<div class="span3"><a href="#"><i class="icon-youtube-play"></i> icon-youtube-play</a></div>
<div class="span3"><a href="#"><i class="icon-youtube-sign"></i> icon-youtube-sign</a></div>
<p></p></div>
</section>
<section id="medical">
<h2 class="page-header">Medical Icons</h2>
<div class="row the-icons">
<div class="span3"><a href="#"><i class="icon-ambulance"></i> icon-ambulance</a></div>
<div class="span3"><a href="#"><i class="icon-h-sign"></i> icon-h-sign</a></div>
<div class="span3"><a href="#"><i class="icon-hospital"></i> icon-hospital</a></div>
<div class="span3"><a href="#"><i class="icon-medkit"></i> icon-medkit</a></div>
<div class="span3"><a href="#"><i class="icon-plus-sign-alt"></i> icon-plus-sign-alt</a></div>
<div class="span3"><a href="#"><i class="icon-stethoscope"></i> icon-stethoscope</a></div>
<div class="span3"><a href="#"><i class="icon-user-md"></i> icon-user-md</a></div>
</div>
</section>';

$pageitems = array('Pages' => array('[serviceblock textalign="center"] [one_fourth] [icon url="#" name="icon-cogs iservice" size="large" circle="true"]
<h3><a href="../icon/desktop">SEO Optimized</a></h3>
Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/one_fourth]
[one_fourth] [icon url="#" name="icon-desktop iservice" size="large" circle="true"]
<h3><a href="../icon/desktop">Retina Ready</a></h3>
Sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/one_fourth]
[one_fourth] [icon url="#" name="icon-mobile-phone iservice" size="large" circle="true"]
<h3><a href="../icon/desktop">Responsive Layout</a></h3>
Excepteur sint occaecat cupidatat non proident, sunt in dolore magna culpa qui officia deserunt mollit anim id est laborum.[/one_fourth] [one_fourth_last] [icon url="#" name="icon-picture iservice" size="large" circle="true"]
<h3><a href="../icon/desktop"> Clean Design</a></h3>
Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/one_fourth_last] [/serviceblock]

[welcome_message reverse_button_text="Learn More" url="#" reverse_url="#" button_text="Purchase Now"]<center><img src="http://www.startis.ru/mega/files/2013/07/mega13.png"></center><strong>Welcome to the Mega Theme</strong> Fully responsive, powerfull and user friendly for your website... Multi-Pourpose theme for corporate, blog, magazine, portfolio [/welcome_message] [title]Recent Works[/title] [portfolio_items_carousel count="8" thumb_width="220" thumb_height="180" retina="true"] [two_third] [vtabs] [tab title="Web Design" icon="icon-picture"]
<h1>Responsive and Clean WordPress Theme</h1>
[lightbox src="http://www.startis.ru/mega/files/2011/09/cloudy_with_a_chance_of_meatballs_2_revenge_of_the_leftovers-wallpaper-1280x1024.jpg" width="500" height="150" url="#" title="There are many variations of passages of Lorem" retina="true"] There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<h3>Why choose this theme?</h3>
[custom_list style="list1"]
<ul>
	<li>Unlimited color variations</li>
	<li>Intuitive &amp; Powerfull Startis Options Panel</li>
	<li>Unlimited Portfolios</li>
</ul>
[/custom_list] [clear] [/tab] [tab title="Promotion Actions" icon="icon-bullhorn"]Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[/tab] [tab title="Copywriting" icon="icon-pencil"] [icon name="icon-camera-retro" size="5x" color="#333333" align="left"]Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/tab]
[tab title="Content Managment" icon="icon-list-alt"] Ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[icon name="icon-cogs" size="5x" color="#333333" align="left"]Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/tab] [tab title="Programming" icon="icon-css3"] Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[icon name="icon-picture" size="5x" color="#333333" align="left"]Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/tab] [tab title="SEO marketing" icon="icon-signal"] [icon name="icon-gamepad" size="5x" color="#333333" align="left"]Veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/tab] [tab title="Interior Design" icon="icon-star"] [icon name="icon-thumbs-up-alt" size="5x" color="#333333" align="left"]Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/tab] [tab title="Project managment" icon="icon-thumbs-up"] [icon name="icon-cloud-upload" size="5x" color="#333333" align="left"]Laboris nisi ut aliquip ex consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/tab] [tab title="Tab without icon"] [icon name="icon-cloud-upload" size="5x" color="#333333" align="left"]Laboris nisi ut aliquip ex consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/tab]
[/vtabs] [/two_third] [one_third_last]

[title]Latest News[/title] [recent_posts count="3" thumbnail="true" desc_length="140" thumb_width="100" thumb_height="65"] [/one_third_last] [title]What Custumers Say About Us[/title] [one_third] [testimonial customer_image="http://www.startis.ru/mega/files/2011/09/444.jpg" customer="<b>Antony HipHopkins</b> Creative Director NewCO Inc." url="#"] [icon name="icon-thumbs-up-alt" size="2x" color="#333344" align="left"]Ut enim ad minim veniam, quis nostrud exercitation ullamco. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_third][one_third] [testimonial customer_image="http://www.startis.ru/mega/files/2013/06/24.jpg" customer="<b>Jeniffer McDowel</b> Art Director STARTIS Inc." url="#"] [icon name="icon-star-empty" size="2x" color="#333344" align="left"] Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_third][one_third_last] [testimonial customer_image="http://www.startis.ru/mega/files/2013/06/4444.jpg" customer="<b>John Doe</b> Marketing Director STARTIS Inc." url="#"] [icon name="icon-thumbs-up-alt" size="2x" color="#333344" align="left"] Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/testimonial] [/one_third_last][title]Our Clients &amp; Partners[/title] [clients] [client client="Nvidia - One of the best clients and partners in the world!" image="http://www.startis.ru/mega/files/2013/06/2128.png" width="172"] [client client="VerySign - Super Gold Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client client="PayPal inc. - Platinum Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1434.png" width="172"] [client client="Electronic Arts - NeedForSpeed, FIFA, and so much more..." image="http://www.startis.ru/mega/files/2013/06/1433.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1432.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2039.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/40.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2012040.png" width="172"] [/clients]

&nbsp;







||<i class="icon-briefcase"></i> Home 1 - Corporate','







[serviceblock] [one_fourth] <div style="float: left;text-align: center">
<h3><a href="../icon/desktop">[icon name="icon-cogs" size="large" circle="true"] SEO Optimized</a></h3>
<p style="float: left;">Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
[/one_fourth] [one_fourth] <div style="float: left;text-align: center">
<h3><a href="../icon/desktop">[icon name="icon-desktop" size="large" circle="true"] Retina Ready</a></h3>
<p style="float: left;">Sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
[/one_fourth] [one_fourth] <div style="float: left;text-align: center">
<h3><a href="../icon/desktop">[icon name="icon-mobile-phone" size="large" circle="true"] Responsive Layout</a></h3>
<p style="float: left;">Excepteur sint occaecat cupidatat non proident, sunt in dolore magna culpa qui officia deserunt mollit anim id est laborum.</p>

</div>
[/one_fourth] [one_fourth_last] <div style="float: left;text-align: center"> 
<h3><a href="../icon/desktop">[icon name="icon-picture" size="large" circle="true"] Clean Design</a></h3>
<p style="float: left;">Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div>
[/one_fourth_last] [/serviceblock]

[welcome_message reverse_button_text="Learn More" button_text="Purchase Now"]<strong>Welcome to the Mega Theme</strong> Fully responsive, powerfull and user friendly for your website... Multi-Pourpose theme for corporate, blog, magazine, portfolio [/welcome_message] 

[two_third] [vtabs] [tab title="Web Design" icon="icon-picture"]
<h1>Responsive and Clean WordPress Theme</h1>
[icon name="icon-html5" size="5x" color="#333344" align="left"]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<h4>Lorem ipum dolor sit amet</h4>
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
<h3>Why choose this theme?</h3>
[custom_list style="list1"]
<ul>
	<li>Unlimited color variations</li>
	<li>over 220 Fonts &amp; 100 Shortcodes</li>
	<li>over 60 Textures Overlay + Custom Background images</li>
	<li>SEO Optimized Every pages &amp; posts</li>
	<li>Intuitive &amp; Powerfull Startis Options Panel</li>
	<li>Unlimited Portfolios</li>
</ul>
[/custom_list]

[clear]
[/tab]
[tab title="Promotion Actions" icon="icon-bullhorn"]
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[/tab]
[tab title="Copywriting" icon="icon-pencil"] [icon name="icon-camera-retro" size="5x" color="#333333" align="left"]Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/tab]
[tab title="Content Managment" icon="icon-list-alt"] Ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[icon name="icon-cogs" size="5x" color="#333333" align="left"]Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/tab]
[tab title="HighLoad Programming" icon="icon-css3"] Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[icon name="icon-picture" size="5x" color="#333333" align="left"]Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/tab]
[tab title="SEO marketing" icon="icon-signal"] [icon name="icon-gamepad" size="5x" color="#333333" align="left"]Veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/tab]
[tab title="Interior Design" icon="icon-star"] [icon name="icon-thumbs-up-alt" size="5x" color="#333333" align="left"]Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/tab]
[tab title="Project manadgment" icon="icon-thumbs-up"] [icon name="icon-cloud-upload" size="5x" color="#333333" align="left"]Laboris nisi ut aliquip ex consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/tab]
[/vtabs] [/two_third] [one_third_last]
[title]Accordions[/title][accordions] [accordion title="Our strategy"] [icon name="icon-css3" color="#555565" url="#" size="3x" align="left"] Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/accordion] [accordion title="About us"]
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/accordion] [accordion title="Corporate style"] Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/accordion] [accordion title="Our mission"] Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/accordion]

[accordion title="Our Team"]

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[/accordion] [/accordions]
[/one_third_last]

[title]Recent Works[/title] [portfolio_items_carousel count="8" thumb_width="220" thumb_height="180" retina="true"]

[title]What Custumers Say About Us[/title] [one_half] [testimonial customer_image="http://www.startis.ru/mega/files/2013/07/5675674.jpg" customer="Jeniffer McDowel. Art Director STARTIS Inc." url="#"] Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_half][one_half_last] [testimonial customer_image="http://www.startis.ru/mega/files/2013/07/45.jpg" customer="John Doe. Marketing Director STARTIS Inc." url="#"] Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/testimonial] [/one_half_last]








||<i class="icon-briefcase"></i> Home 2 - Corporate','








[welcome_message reverse_button_text="Learn More" button_text="Purchase Now"]<center><img src="http://www.startis.ru/mega/files/2013/07/mega13.png"></center><strong>Welcome to the Mega Theme</strong> Fully responsive, powerfull and user friendly for your website... Multi-Pourpose theme for corporate, blog, magazine, portfolio [/welcome_message]

[serviceblock]
[one_fourth] 

[lightbox src="http://www.startis.ru/smartpress/files/2011/07/photodune-358760-great-idea-s.jpg" width="210" height="109" title="some title" url="#" hover="1" retina="true"]

<div style="float:left"><h3><a href="#" title="SEO Optimized">SEO Optimized</a></h3>
<p style="float:left;text-align:left">Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[read_more text="Read more" title="Read More..." url="#"]
</p></div>
[/one_fourth] [one_fourth]

[lightbox src="http://www.startis.ru/smartpress/files/2011/07/photodune-2117565-set-of-chess-figures-on-the-playing-board-s.jpg" width="210" height="109" title="some title" url="#" hover="1" retina="true"]
<div style="float:left"><h3><a href="#" title="Solid Build">11 Sliders</a></h3>
<p style="float:left;text-align:left">Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 
[read_more text="Read more" title="Read More..." url=""]</p></div>
[/one_fourth] [one_fourth]

[lightbox src="http://www.startis.ru/smartpress/files/2011/07/photodune-4552398-businessman-drawing-a-rising-arrow-s.jpg" width="210" height="109" title="some title" url="#" hover="1" retina="true"]
<div style="float:left"><h3><a href="#" title="Choose your Color">over 220 Fonts</a></h3>
<p style="float:left;text-align:left">Excepteur sint occaecat cupidatat non proident, sunt in dolore magna culpa qui officia deserunt mollit anim id est laborum.

[read_more text="Read more" title="Read More..." url="#"]</p></div>
[/one_fourth] [one_fourth_last]

[lightbox src="http://www.startis.ru/smartpress/files/2013/01/photodune-4522196-closeup-microphone-s.jpg" width="210" height="109" title="some title" url="#" hover="1" retina="true"]
<div style="float:left"><h3><a href="#" title="Ongoing Support">Unlimited Portfolios</a></h3>
<p style="float:left;text-align:left">Excepteur sint occaecat cupidatat non dolore magna proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[read_more text="Read more" title="Read More..." url="#"]</p></div>
[/one_fourth_last]
[/serviceblock]

[one_third] [title]Why choose this theme?[/title]
[custom_list style="list1"]
<ul>
    <li>Unlimited color variations</li>
    <li>9 Sliders</li>
    <li>over 520 Fonts</li>
    <li>over 100 Shortcodes</li>
    <li>over 60 Textures Overlay + Custom Background images</li>
    <li>SEO Optimized Every pages &amp; posts(Titles, Descriptions, Keywords)</li>
    <li>Intuitive &amp; Powerfull Startis Options Panel</li>
    <li>Unlimited Portfolios</li>
</ul>
 
[bigbutton url="#"] Download now [/bigbutton] 
[/custom_list][/one_third] [two_third_last] [title]Any title here[/title]
[tabs] 
    [tab title="Recent Posts" icon="icon-picture"] [recent_posts count="2" thumbnail="true" desc_length="240"] [/tab]
    [tab title="Recent Works" icon="icon-bullhorn"] 
[portfolio_items count="6" thumb_width="160" thumb_height="120"]
 [/tab] 
    [tab title="My content"] <h1>Responsive and Clean WordPress Theme</h1>
[icon name="icon-html5" size="5x" color="#333344" align="left"]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<h4>Lorem ipum dolor sit amet</h4>
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
<h4>Consectetur adipisicing elit, sed do eiusmod</h4>
[custom_list style="list1"]
<ul>
    <li>your list item</li>
    <li>your list item</li>
    <li>your list item</li>
</ul>
[/custom_list]
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. [/tab] 
[/tabs]
[/two_third_last] [title]Our Clients &amp; Partners[/title] [clients] [client client="Nvidia - One of the best clients and partners in the world!" image="http://www.startis.ru/mega/files/2013/06/2128.png"] [client client="VerySign - Super Gold Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1436.png"] [client client="PayPal inc. - Platinum Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1434.png"] [client client="Electronic Arts - NeedForSpeed, FIFA, and so much more..." image="http://www.startis.ru/mega/files/2013/06/1433.png"] [client image="http://www.startis.ru/mega/files/2013/06/1432.png"] [client image="http://www.startis.ru/mega/files/2013/06/1436.png"] [client image="http://www.startis.ru/mega/files/2013/07/2039.png"] [client image="http://www.startis.ru/mega/files/2013/07/40.png"] [client image="http://www.startis.ru/mega/files/2013/07/2012040.png"] [/clients]








||<i class="icon-briefcase"></i> Home 3 - Corporate','









[welcome_message reverse_button_text="Learn More" url="#" reverse_url="#" button_text="Purchase Now"]<strong>Welcome to the Mega Theme</strong> Fully responsive, powerfull and user friendly for your website... Multi-Pourpose theme for corporate, blog, magazine, portfolio [/welcome_message]

[serviceblock][one_third]
<h3><a title="SEO Optimized" href="#">SEO Optimized</a></h3>
Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[read_more text="Read more" title="Read More..." url="#"]
[/one_third]

[one_third]
<h3><a title="Pricing Tables" href="#">Pricing Tables</a></h3>
Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[read_more text="Read more" title="Read More..." url="#"]
[/one_third]

[one_third_last]
<h3><a title="Ajax contact form" href="#">Ajax contact form</a></h3>
Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[read_more text="Read more" title="Read More..." url="#"]
[/one_third_last][/serviceblock]

[title]Choose for yourself the best Tariff Plan[/title]
[ptable] 
[ptable_one_fifth][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_fifth] [ptable_one_fifth][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_fifth] [ptable_one_fifth_best][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#F95601" textcolor="#FFFFFF" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_fifth_best] [ptable_one_fifth][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_fifth] [ptable_one_fifth][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_fifth] [/ptable]

[divider_top]
[one_half] [title]Our Clients &amp; Partners[/title] [clients] [client client="Nvidia - One of the best clients and partners in the world!" image="http://www.startis.ru/mega/files/2013/06/2128.png"] [client client="VerySign - Super Gold Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1436.png"] [client client="PayPal inc. - Platinum Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1434.png"] [client client="Electronic Arts - NeedForSpeed, FIFA, and so much more..." image="http://www.startis.ru/mega/files/2013/06/1433.png"] [client image="http://www.startis.ru/mega/files/2013/06/1432.png"] [client image="http://www.startis.ru/mega/files/2013/06/1436.png"] [client image="http://www.startis.ru/mega/files/2013/07/2039.png"] [client image="http://www.startis.ru/mega/files/2013/07/40.png"] [client image="http://www.startis.ru/mega/files/2013/07/2012040.png"] [/clients]
[/one_half] [one_half_last] [title]What Custumers Say About Us[/title]
[slider style="whiteslider arrowstop"] [slide][testimonial customer_image="http://www.startis.ru/mega/files/2011/09/444.jpg" customer="Jeniffer McDowel. Art Director STARTIS Inc." url="#"] Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. [/testimonial][/slide][slide][testimonial customer_image="http://www.startis.ru/mega/files/2013/06/24.jpg" customer="John Doe. Marketing Director STARTIS Inc." url="#"] Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/testimonial][/slide][/slider]
[/one_half_last]








||<i class="icon-cloud-download"></i> Home 4 - Hoster','







[serviceblock][one_third]
<h3><a href="#" title="SEO Optimized">[icon name="icon-cogs" size="large" circle="true"] SEO Optimized</a></h3>
Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[read_more text="Read more" title="Read More..." url="#"]
[/one_third]

[one_third]
<h3><a href="#" title="Pricing Tables">[icon name="icon-desktop" size="large" circle="true"] Pricing Tables</a></h3>
Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[read_more text="Read more" title="Read More..." url="#"]
[/one_third]

[one_third_last]
<h3><a href="#" title="Ajax contact form">[icon name="icon-picture" size="large" circle="true"] Ajax contact form</a></h3>
Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[read_more text="Read more" title="Read More..." url="#"]
[/one_third_last][/serviceblock]

[welcome_message reverse_button_text="Learn More" url="#" reverse_url="#" button_text="Purchase Now"]<strong>Welcome to the Mega Theme</strong> Fully responsive, powerfull and user friendly for your website... Multi-Pourpose theme for corporate, blog, magazine, portfolio [/welcome_message]
[title]Recent Works[/title] [portfolio_items_carousel count="8" thumb_width="220" thumb_height="180" retina="true"]
[title]Our Clients &amp; Partners[/title] [clients] [client client="Nvidia - One of the best clients and partners in the world!" image="http://www.startis.ru/mega/files/2013/06/2128.png" width="172"] [client client="VerySign - Super Gold Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client client="PayPal inc. - Platinum Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1434.png" width="172"] [client client="Electronic Arts - NeedForSpeed, FIFA, and so much more..." image="http://www.startis.ru/mega/files/2013/06/1433.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1432.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2039.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/40.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2012040.png" width="172"] [/clients]
[title]What Custumers Say About Us[/title] [one_third] [testimonial customer_image="http://www.startis.ru/mega/files/2011/09/444.jpg" customer="<b>Antony HipHopkins</b> Creative Director NewCO Inc." url="#"] [icon name="icon-thumbs-up-alt" size="2x" color="#333344" align="left"]Ut enim ad minim veniam, quis nostrud exercitation ullamco. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_third][one_third] [testimonial customer_image="http://www.startis.ru/mega/files/2013/06/24.jpg" customer="<b>Jeniffer McDowel</b> Art Director STARTIS Inc." url="#"] [icon name="icon-star-empty" size="2x" color="#333344" align="left"] Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_third][one_third_last] [testimonial customer_image="http://www.startis.ru/mega/files/2013/06/4444.jpg" customer="<b>John Doe</b> Marketing Director STARTIS Inc." url="#"] [icon name="icon-thumbs-up-alt" size="2x" color="#333344" align="left"] Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/testimonial] [/one_third_last]
[/one_half_last]








||<i class="icon-picture"></i> Home 5 - Portfolio','







[serviceblock textalign="center"] [one_fourth] [icon url="#" name="icon-cogs iservice" size="large" circle="true"]
<h3><a href="../icon/desktop">SEO Optimized</a></h3>
Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/one_fourth]
[one_fourth] [icon url="#" name="icon-desktop iservice" size="large" circle="true"]
<h3><a href="../icon/desktop">Retina Ready</a></h3>
Sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/one_fourth]
[one_fourth] [icon url="#" name="icon-mobile-phone iservice" size="large" circle="true"]
<h3><a href="../icon/desktop">Responsive Layout</a></h3>
Excepteur sint occaecat cupidatat non proident, sunt in dolore magna culpa qui officia deserunt mollit anim id est laborum.[/one_fourth] [one_fourth_last] [icon url="#" name="icon-picture iservice" size="large" circle="true"]
<h3><a href="../icon/desktop"> Clean Design</a></h3>
Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/one_fourth_last] [/serviceblock]

[welcome_message reverse_button_text="Learn More" url="#" reverse_url="#" button_text="Purchase Now"]<strong>Welcome to the Mega Theme</strong> Fully responsive, powerfull and user friendly for your website... Multi-Pourpose theme for corporate, blog, magazine, portfolio [/welcome_message]
[title]Recent Portfolio Items[/title] [portfolio_items count="10" thumb_width="234" thumb_height="180" show_title="true"]
[title]Our Clients &amp; Partners[/title] [clients] [client client="Nvidia - One of the best clients and partners in the world!" image="http://www.startis.ru/mega/files/2013/06/2128.png" width="172"] [client client="VerySign - Super Gold Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client client="PayPal inc. - Platinum Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1434.png" width="172"] [client client="Electronic Arts - NeedForSpeed, FIFA, and so much more..." image="http://www.startis.ru/mega/files/2013/06/1433.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1432.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2039.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/40.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2012040.png" width="172"] [/clients]
[title]What Custumers Say About Us[/title] [one_third] [testimonial customer_image="http://www.startis.ru/mega/files/2011/09/444.jpg" customer="<b>Antony HipHopkins</b> Creative Director NewCO Inc." url="#"] [icon name="icon-thumbs-up-alt" size="2x" color="#333344" align="left"]Ut enim ad minim veniam, quis nostrud exercitation ullamco. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_third][one_third] [testimonial customer_image="http://www.startis.ru/mega/files/2013/06/24.jpg" customer="<b>Jeniffer McDowel</b> Art Director STARTIS Inc." url="#"] [icon name="icon-star-empty" size="2x" color="#333344" align="left"] Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_third][one_third_last] [testimonial customer_image="http://www.startis.ru/mega/files/2013/06/4444.jpg" customer="<b>John Doe</b> Marketing Director STARTIS Inc." url="#"] [icon name="icon-thumbs-up-alt" size="2x" color="#333344" align="left"] Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/testimonial] [/one_third_last]






||<i class="icon-picture"></i> Home 6 - Portfolio 2','





[welcome_message reverse_button_text="Learn More" url="#" reverse_url="#" button_text="Purchase Now"]<center><img src="http://www.startis.ru/mega/files/2013/07/mega13.png"></center><strong>Welcome to the Mega Theme</strong> Fully responsive, powerfull and user friendly for your website... Multi-Pourpose theme for corporate, blog, magazine, portfolio [/welcome_message]

[one_sixth]
[title]Recent Works[/title]
[portfolio_items count="7" thumb_width="125" thumb_height="100"]
[/one_sixth]

[two_third]
[title]About Us[/title]
<h1>Responsive and Clean WordPress Theme</h1>
[icon name="icon-html5" size="5x" color="#333344" align="left"]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<h4>Lorem ipum dolor sit amet</h4>
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[divider]

[title]Choose for yourself the best Tariff Plan[/title] [ptable] [ptable_one_third][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_third] [ptable_one_third_best][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#F95601" textcolor="#FFFFFF" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_third_best] [ptable_one_third][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_third] [/ptable]

[title]Our Clients &amp; Partners[/title] [clients] [client client="Nvidia - One of the best clients and partners in the world!" image="http://www.startis.ru/mega/files/2013/06/2128.png" width="172"] [client client="VerySign - Super Gold Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client client="PayPal inc. - Platinum Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1434.png" width="172"] [client client="Electronic Arts - NeedForSpeed, FIFA, and so much more..." image="http://www.startis.ru/mega/files/2013/06/1433.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1432.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2039.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/40.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2012040.png" width="172"] [/clients]

[title]What Custumers Say About Us[/title] [one_half] [testimonial customer_image="http://www.startis.ru/smartpress/files/2013/05/4444.jpg" customer="Jeniffer McDowel. Art Director STARTIS Inc." url="#"] [icon name="icon-thumbs-up-alt" size="3x" color="#333333" align="left"]Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_half][one_half_last] [testimonial customer_image="http://www.startis.ru/smartpress/files/2013/05/24.jpg" customer="John Doe. Marketing Director STARTIS Inc." url="#"] [icon name="icon-star-empty" size="3x" color="#333333" align="left"]Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/testimonial] [/one_half_last]

[/two_third]

[one_sixth_last]
[title]Images[/title]
[image src="http://www.startis.ru/wp-content/uploads/2011/08/bf.png" width="125" height="80" title="some title" url="#" hover="1"]
[image src="http://www.startis.ru/wp-content/uploads/2011/08/cont.png" width="125" height="80" title="some title" url="#" hover="1"]
[image src="http://www.startis.ru/wp-content/uploads/2011/08/bri.png" width="125" height="80" title="some title" url="#" hover="1"]
[image src="http://www.startis.ru/wp-content/uploads/2011/08/good.png" width="125" height="80" title="some title" url="#" hover="1"]
[image src="http://www.startis.ru/wp-content/uploads/2011/08/dun.png" width="125" height="80" title="some title" url="#" hover="1"]
[image src="http://www.startis.ru/wp-content/uploads/2011/08/misha.png" width="125" height="80" title="some title" url="#" hover="1"]
<h3>Our Flickr Photos</h3>
[flickr id="43102195@N08" count="6" display="random"]
[/one_sixth_last]








||<i class="icon-th"></i> Home 7 - 3 Columns','





[welcome_message reverse_button_text="Learn More" url="#" reverse_url="#" button_text="Purchase Now"]<strong>Welcome to the Mega Theme</strong> Fully responsive, powerfull and user friendly for your website... Multi-Pourpose theme for corporate, blog, magazine, portfolio [/welcome_message]
[one_third]
[title]Why choose this theme?[/title]
[custom_list style="list9"]
<ul>
    <li>Unlimited color variations</li>
    <li>9 Sliders</li>
    <li>over 520 Fonts</li>
    <li>over 100 Shortcodes</li>
    <li>over 60 Textures Overlay + Custom Background images</li>
    <li>SEO Optimized Every pages &amp; posts(Titles, Descriptions, Keywords)</li>
    <li>Intuitive &amp; Powerfull Startis Options Panel</li>
    <li>Unlimited Portfolios</li>
</ul>

[/custom_list]

[bigbutton url="#"]Download now[/bigbutton]

[divider]

[title]Accordions[/title][accordions] 
    [accordion title="Our strategy"] 
[icon name="icon-css3" color="#333333" url="#" size="5x" align="left"] Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

 [/accordion] 
    [accordion title="About us"] 
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

 [/accordion]
    [accordion title="Corporate style"] 

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

 [/accordion]
    [accordion title="Our mission"] 

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

 [/accordion]
[/accordions]

[divider]

[title]Recent Works[/title]
 [portfolio_items_carousel count="8" thumb_width="166" thumb_height="120"]


[/one_third]

[two_third_last]
[title]About Us[/title]<p> <h1>Responsive and Clean WordPress Theme</h1>
[icon name="icon-html5" size="5x" color="#333344" align="left"]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<h4>Lorem ipum dolor sit amet</h4>
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[divider]

[title]Choose for yourself the best Tariff Plan[/title] [ptable] [ptable_one_third][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_third] [ptable_one_third_best][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#F95601" textcolor="#FFFFFF" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_third_best] [ptable_one_third][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_third] [/ptable]

[title]Our Clients &amp; Partners[/title] [clients] [client client="Nvidia - One of the best clients and partners in the world!" image="http://www.startis.ru/mega/files/2013/06/2128.png" width="172"] [client client="VerySign - Super Gold Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client client="PayPal inc. - Platinum Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1434.png" width="172"] [client client="Electronic Arts - NeedForSpeed, FIFA, and so much more..." image="http://www.startis.ru/mega/files/2013/06/1433.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1432.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2039.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/40.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2012040.png" width="172"] [/clients]

[title]What Custumers Say About Us[/title] [one_half] [testimonial customer_image="http://www.startis.ru/smartpress/files/2013/05/4444.jpg" customer="Jeniffer McDowel. Art Director STARTIS Inc." url="#"] [icon name="icon-thumbs-up-alt" size="3x" color="#333333" align="left"]Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_half][one_half_last] [testimonial customer_image="http://www.startis.ru/smartpress/files/2013/05/24.jpg" customer="John Doe. Marketing Director STARTIS Inc." url="#"] [icon name="icon-star-empty" size="3x" color="#333333" align="left"]Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/testimonial] [/one_half_last]
[/two_third_last]








||<i class="icon-briefcase"></i> Home 8 - Left Sidebar','





[welcome_message reverse_button_text="Learn More" url="#" reverse_url="#" button_text="Purchase Now"]<strong>Welcome to the Mega Theme</strong> Fully responsive, powerfull and user friendly for your website... Multi-Pourpose theme for corporate, blog, magazine, portfolio [/welcome_message]

[two_third]
[title]About Us[/title]<p> <h1>Responsive and Clean WordPress Theme</h1>
[icon name="icon-html5" size="5x" color="#333344" align="left"]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<h4>Lorem ipum dolor sit amet</h4>
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[divider]

[title]Choose for yourself the best Tariff Plan[/title] [ptable] [ptable_one_third][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_third] [ptable_one_third_best][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#F95601" textcolor="#FFFFFF" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_third_best] [ptable_one_third][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_third] [/ptable]

[title]Our Clients &amp; Partners[/title] [clients] [client client="Nvidia - One of the best clients and partners in the world!" image="http://www.startis.ru/mega/files/2013/06/2128.png" width="172"] [client client="VerySign - Super Gold Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client client="PayPal inc. - Platinum Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1434.png" width="172"] [client client="Electronic Arts - NeedForSpeed, FIFA, and so much more..." image="http://www.startis.ru/mega/files/2013/06/1433.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1432.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2039.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/40.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2012040.png" width="172"] [/clients]

[title]What Custumers Say About Us[/title] [one_half] [testimonial customer_image="http://www.startis.ru/smartpress/files/2013/05/4444.jpg" customer="Jeniffer McDowel. Art Director STARTIS Inc." url="#"] [icon name="icon-thumbs-up-alt" size="3x" color="#333333" align="left"]Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_half][one_half_last] [testimonial customer_image="http://www.startis.ru/smartpress/files/2013/05/24.jpg" customer="John Doe. Marketing Director STARTIS Inc." url="#"] [icon name="icon-star-empty" size="3x" color="#333333" align="left"]Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/testimonial] [/one_half_last]

[/two_third]
[one_third_last]
[title]Why choose this theme?[/title]
[custom_list style="list9"]
<ul>
    <li>Unlimited color variations</li>
    <li>9 Sliders</li>
    <li>over 520 Fonts</li>
    <li>over 100 Shortcodes</li>
    <li>over 60 Textures Overlay + Custom Background images</li>
    <li>SEO Optimized Every pages &amp; posts(Titles, Descriptions, Keywords)</li>
    <li>Intuitive &amp; Powerfull Startis Options Panel</li>
    <li>Unlimited Portfolios</li>
</ul>

[/custom_list]

[bigbutton url="#"]Download now[/bigbutton]

[divider]

[title]Accordions[/title][accordions] 
    [accordion title="Our strategy"] 
[icon name="icon-css3" color="#333333" url="#" size="5x" align="left"] Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

 [/accordion] 
    [accordion title="About us"] 
Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

 [/accordion]
    [accordion title="Corporate style"] 

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

 [/accordion]
    [accordion title="Our mission"] 

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

 [/accordion]
[/accordions]

[divider]

[title]Recent Works[/title]
 [portfolio_items_carousel count="8" thumb_width="166" thumb_height="120"]

[/one_third_last]










||<i class="icon-briefcase"></i> Home 9 - Right Sidebar','








[serviceblock textalign="center"] [one_fourth] [icon url="#" name="icon-cogs iservice" size="large" circle="true"]
<h3><a href="../icon/desktop">SEO Optimized</a></h3>
Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/one_fourth]
[one_fourth] [icon url="#" name="icon-desktop iservice" size="large" circle="true"]
<h3><a href="../icon/desktop">Retina Ready</a></h3>
Sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/one_fourth]
[one_fourth] [icon url="#" name="icon-mobile-phone iservice" size="large" circle="true"]
<h3><a href="../icon/desktop">Responsive Layout</a></h3>
Excepteur sint occaecat cupidatat non proident, sunt in dolore magna culpa qui officia deserunt mollit anim id est laborum.[/one_fourth] [one_fourth_last] [icon url="#" name="icon-picture iservice" size="large" circle="true"]
<h3><a href="../icon/desktop"> Clean Design</a></h3>
Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/one_fourth_last] [/serviceblock]

[welcome_message reverse_button_text="Learn More" url="#" reverse_url="#" button_text="Purchase Now"]<center><img src="http://www.startis.ru/mega/files/2013/07/mega13.png"></center><strong>Welcome to the Mega Theme</strong> Fully responsive, powerfull and user friendly for your website... Multi-Pourpose theme for corporate, blog, magazine, portfolio [/welcome_message] [title]Recent Works[/title] [portfolio_items_carousel count="8" thumb_width="220" thumb_height="180" retina="true"] [title]Recent Posts Carousel[/title] [recent_posts_carousel count="6" thumbnail="true" thumb_width="220" thumb_height="180" desc_length="0"]
[title]What Custumers Say About Us[/title] [one_third] [testimonial customer_image="http://www.startis.ru/mega/files/2011/09/444.jpg" customer="<b>Antony HipHopkins</b> Creative Director NewCO Inc." url="#"] [icon name="icon-thumbs-up-alt" size="2x" color="#333344" align="left"]Ut enim ad minim veniam, quis nostrud exercitation ullamco. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_third][one_third] [testimonial customer_image="http://www.startis.ru/mega/files/2013/06/24.jpg" customer="<b>Jeniffer McDowel</b> Art Director STARTIS Inc." url="#"] [icon name="icon-star-empty" size="2x" color="#333344" align="left"] Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_third][one_third_last] [testimonial customer_image="http://www.startis.ru/mega/files/2013/06/4444.jpg" customer="<b>John Doe</b> Marketing Director STARTIS Inc." url="#"] [icon name="icon-thumbs-up-alt" size="2x" color="#333344" align="left"] Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/testimonial] [/one_third_last][title]Our Clients &amp; Partners[/title] [clients] [client client="Nvidia - One of the best clients and partners in the world!" image="http://www.startis.ru/mega/files/2013/06/2128.png" width="172"] [client client="VerySign - Super Gold Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client client="PayPal inc. - Platinum Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1434.png" width="172"] [client client="Electronic Arts - NeedForSpeed, FIFA, and so much more..." image="http://www.startis.ru/mega/files/2013/06/1433.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1432.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2039.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/40.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2012040.png" width="172"] [/clients]




||<i class="icon-briefcase"></i> Home 10 - Corporate'),'


Other Pages' => array('





[one_half][slider height="360"][slide]<img class="alignright size-full wp-image-1308" alt="??????????" src="http://www.startis.ru/smartpress/files/2013/01/photodune-4522196-closeup-microphone-s.jpg" width="948" height="632" />[/slide] [slide]<img class="alignright size-full wp-image-1306" alt="Businessman drawing a rising arrow" src="http://www.startis.ru/smartpress/files/2011/07/photodune-4552398-businessman-drawing-a-rising-arrow-s.jpg" width="948" height="632" />[/slide] [slide]<img class="alignright size-full wp-image-1304" alt="Set of chess figures on the playing board" src="http://www.startis.ru/smartpress/files/2011/07/photodune-2117565-set-of-chess-figures-on-the-playing-board-s.jpg" width="950" height="631" />[/slide][/slider][/one_half] [one_half_last] [title]Welcome to Mega Theme[/title]

[icon name="icon-css3" size="5x" color="#333333" align="left"]Duis aute irure dolor nulla pariatur. Excepteur sint ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptatlaboris nisi ut aliquip ex ea commodo consequat uis aute irure dolor in reprehenderit nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpaaute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[/one_half_last]

[title]Meet Our Team[/title]
[one_fourth] [image src="http://www.startis.ru/mega/files/2013/07/45.jpg" width="216" height="216" retina="true"]
<h4>John Doe [icon name="icon-envelope" url="#" align="right"] [icon name="icon-facebook" url="#" align="right"] [icon name="icon-google-plus" url="#" align="right"] [icon name="icon-twitter" url="#" align="right"]</h4>
<b>CEO</b>
<p style="float: left;text-align: left">Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[/one_fourth] [one_fourth] [image src="http://www.startis.ru/mega/files/2013/07/4444.jpg" width="216" height="216" retina="true"]
<h4>Harooki Murakami [icon name="icon-google-plus" url="#" align="right"] [icon name="icon-twitter" url="#" align="right"]</h4>
<b>Tech-Director</b>
<p style="float: left;text-align: left">Sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[/one_fourth] [one_fourth] [image src="http://www.startis.ru/mega/files/2013/07/664.jpg" width="216" height="216" retina="true"]
<h4>Antony Hiphopkins [icon name="icon-envelope" url="#" align="right"] [icon name="icon-facebook" url="#" align="right"] [icon name="icon-twitter" url="#" align="right"]</h4>
<b>Project manager</b>
<p style="float: left;text-align: left">Excepteur sint occaecat cupidatat non proident, sunt in dolore magna culpa qui officia deserunt mollit anim id est laborum.</p>
[/one_fourth] [one_fourth_last] [image src="http://www.startis.ru/mega/files/2013/07/544.jpg" width="216" height="216" retina="true"]
<h4>Shall Smith [icon name="icon-envelope" url="#" align="right"] [icon name="icon-facebook" url="#" align="right"] [icon name="icon-google-plus" url="#" align="right"] [icon name="icon-twitter" url="#" align="right"]</h4>
<b>SEO promotion</b>
<p style="float: left;text-align: left">Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[/one_fourth_last] [one_fourth] [image src="http://www.startis.ru/mega/files/2013/07/5674.jpg" width="216" height="216" retina="true"]
<h4>James Brown [icon name="icon-envelope" url="#" align="right"] [icon name="icon-facebook" url="#" align="right"] [icon name="icon-twitter" url="#" align="right"]</h4>
<b>Php proramming</b>
<p style="float: left;text-align: left">Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[/one_fourth] [one_fourth] [image src="http://www.startis.ru/mega/files/2013/07/5675674.jpg" width="216" height="216" retina="true"]
<h4>Milla Jameson [icon name="icon-envelope" url="#" align="right"] [icon name="icon-facebook" url="#" align="right"] [icon name="icon-google-plus" url="#" align="right"] [icon name="icon-twitter" url="#" align="right"]</h4>
<b>Team Leader</b>
<p style="float: left;text-align: left">Sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[/one_fourth] [one_fourth] [image src="http://www.startis.ru/mega/files/2013/07/444.jpg" width="216" height="216" retina="true"]
<h4>Katarina Williams [icon name="icon-envelope" url="#" align="right"] [icon name="icon-facebook" url="#" align="right"] [icon name="icon-twitter" url="#" align="right"]</h4>
<b>Sales manager</b>
<p style="float: left;text-align: left">Excepteur sint occaecat cupidatat non proident, sunt in dolore magna culpa qui officia deserunt mollit anim id est laborum.</p>
[/one_fourth] [one_fourth_last] [image src="http://www.startis.ru/mega/files/2013/07/564.jpg" width="216" height="216" retina="true"]
<h4>Max Goodiny [icon name="icon-envelope" url="#" align="right"] [icon name="icon-facebook" url="#" align="right"] [icon name="icon-google-plus" url="#" align="right"] [icon name="icon-twitter" url="#" align="right"]</h4>
<b>Security</b>
<p style="float: left;text-align: left">Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[/one_fourth_last]




||<i class="icon-group"></i> Our Team','



[serviceblock] [one_fourth]
<div style="float: left; text-align: center;">
<h4><a href="../icon/desktop">[icon name="icon-cogs" size="large" circle="true"] SEO Optimized</a></h4>
<p style="float: left;">Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[read_more text="Read more" title="Read More..." url="#"]
</div>
[/one_fourth] [one_fourth]
<div style="float: left; text-align: center;">
<h4><a href="../icon/desktop">[icon name="icon-desktop" size="large" circle="true"] Retina Ready</a></h4>
<p style="float: left;">Sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sunt in dolore magna.</p>
[read_more text="Read more" title="Read More..." url="#"]
</div>
[/one_fourth] [one_fourth]
<div style="float: left; text-align: center;">
<h4><a href="../icon/desktop">[icon name="icon-mobile-phone" size="large" circle="true"] Responsive Layout</a></h4>
<p style="float: left;">Excepteur sint occaecat cupidatat non proident, sunt in dolore magna culpa qui officia deserunt mollit anim id est laborum.</p>
[read_more text="Read more" title="Read More..." url="#"]
</div>
[/one_fourth] [one_fourth_last]
<div style="float: left; text-align: center;">
<h4><a href="../icon/desktop">[icon name="icon-picture" size="large" circle="true"] Clean Design</a></h4>
<p style="float: left;">Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[read_more text="Read more" title="Read More..." url="#"]
</div>
[/one_fourth_last] [/serviceblock]
[title]Featured Products[/title]

[featured_products per_page="4" columns="4" orderby="date" order="desc"]

[recent_posts_carousel count="5" thumbnail="true" thumb_width="220" thumb_height="180" moretag="true" readmorelink="true" desc_length="240" category_id="12345"]

[title]Recent Products[/title]

[recent_products per_page="4" columns="4" orderby="date" order="desc"]


[title]Brands[/title] [clients] [client client_url="http://www.startis.ru/mega/product-category/brands/love-moschino/" image="http://www.startis.ru/mega/files/2013/07/2345.png"] [client client_url="http://www.startis.ru/mega/product-category/brands/love-moschino/" image="http://www.startis.ru/mega/files/2013/07/45.png"] [client client_url="http://www.startis.ru/mega/product-category/brands/love-moschino/" image="http://www.startis.ru/mega/files/2013/07/5675.png"] [client client_url="http://www.startis.ru/mega/product-category/brands/love-moschino/" image="http://www.startis.ru/mega/files/2013/07/665.png"] [client client_url="http://www.startis.ru/mega/product-category/brands/love-moschino/" image="http://www.startis.ru/mega/files/2013/07/7675.png"] [client client_url="http://www.startis.ru/mega/product-category/brands/love-moschino/" image="http://www.startis.ru/mega/files/2013/07/7575.png"] [client client_url="http://www.startis.ru/mega/product-category/brands/love-moschino/" image="http://www.startis.ru/mega/files/2013/07/5.png"] [client client_url="http://www.startis.ru/mega/product-category/brands/love-moschino/" image="http://www.startis.ru/mega/files/2013/07/555.png"] [client client_url="http://www.startis.ru/mega/product-category/brands/love-moschino/" image="http://www.startis.ru/mega/files/2013/07/6655.png"] [/clients]



||<i class="icon-shopping-cart"></i> Home Shop','


[one_half][slider height="360"][slide]<img class="alignright size-full wp-image-1308" alt="??????????" src="http://www.startis.ru/smartpress/files/2013/01/photodune-4522196-closeup-microphone-s.jpg" width="948" height="632" />[/slide] [slide]<img class="alignright size-full wp-image-1306" alt="Businessman drawing a rising arrow" src="http://www.startis.ru/smartpress/files/2011/07/photodune-4552398-businessman-drawing-a-rising-arrow-s.jpg" width="948" height="632" />[/slide] [slide]<img class="alignright size-full wp-image-1304" alt="Set of chess figures on the playing board" src="http://www.startis.ru/smartpress/files/2011/07/photodune-2117565-set-of-chess-figures-on-the-playing-board-s.jpg" width="950" height="631" />[/slide][/slider][/one_half] [one_half_last] [title]Welcome to Mega Theme[/title]

[icon name="icon-gift" size="5x" color="#333333" align="left"]Duis aute irure dolor nulla pariatur. Excepteur sint ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptatlaboris nisi ut aliquip ex ea commodo consequat uis aute irure dolor in reprehenderit nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpaaute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[/one_half_last]

[title]What Custumers Say About Us[/title] [one_third] [testimonial customer_image="http://www.startis.ru/mega/files/2011/09/444.jpg" customer="<b>Antony HipHopkins</b> Creative Director NewCO Inc." url="#"] [icon name="icon-thumbs-up-alt" size="2x" color="#333344" align="left"]Ut enim ad minim veniam, quis nostrud exercitation ullamco. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_third][one_third] [testimonial customer_image="http://www.startis.ru/mega/files/2013/06/24.jpg" customer="<b>Jeniffer McDowel</b> Art Director STARTIS Inc." url="#"] [icon name="icon-star-empty" size="2x" color="#333344" align="left"] Dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cillum dolore eu fugiat nulla pariatur et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. [/testimonial] [/one_third][one_third_last] [testimonial customer_image="http://www.startis.ru/mega/files/2013/06/4444.jpg" customer="<b>John Doe</b> Marketing Director STARTIS Inc." url="#"] [icon name="icon-thumbs-up-alt" size="2x" color="#333344" align="left"] Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/testimonial] [/one_third_last] [title]Our Clients &amp; Partners[/title] [clients] [client client="Nvidia - One of the best clients and partners in the world!" image="http://www.startis.ru/mega/files/2013/06/2128.png" width="172"] [client client="VerySign - Super Gold Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client client="PayPal inc. - Platinum Certified Partner" image="http://www.startis.ru/mega/files/2013/06/1434.png" width="172"] [client client="Electronic Arts - NeedForSpeed, FIFA, and so much more..." image="http://www.startis.ru/mega/files/2013/06/1433.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1432.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/06/1436.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2039.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/40.png" width="172"] [client image="http://www.startis.ru/mega/files/2013/07/2012040.png" width="172"] [/clients]



||<i class="icon-comment-alt"></i> About Us','



[serviceblock textalign="center"] [one_fourth] [icon url="#" name="icon-cogs iservice" size="large" circle="true"]
<h3><a href="../icon/desktop">SEO Optimized</a></h3>
Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/one_fourth]
[one_fourth] [icon url="#" name="icon-desktop iservice" size="large" circle="true"]
<h3><a href="../icon/desktop">Retina Ready</a></h3>
Sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/one_fourth]
[one_fourth] [icon url="#" name="icon-mobile-phone iservice" size="large" circle="true"]
<h3><a href="../icon/desktop">Responsive Layout</a></h3>
Excepteur sint occaecat cupidatat non proident, sunt in dolore magna culpa qui officia deserunt mollit anim id est laborum.[/one_fourth] [one_fourth_last] [icon url="#" name="icon-picture iservice" size="large" circle="true"]
<h3><a href="../icon/desktop"> Clean Design</a></h3>
Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/one_fourth_last] [/serviceblock]
[divider]
[serviceblock] [one_fourth]
<div style="float: left; text-align: center;">
<h3><a href="../icon/desktop">[icon name="icon-cogs" size="large" circle="true"] SEO Optimized</a></h3>
<p style="float: left;">Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div>
[/one_fourth] [one_fourth]
<div style="float: left; text-align: center;">
<h3><a href="../icon/desktop">[icon name="icon-desktop" size="large" circle="true"] Retina Ready</a></h3>
<p style="float: left;">Sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div>
[/one_fourth] [one_fourth]
<div style="float: left; text-align: center;">
<h3><a href="../icon/desktop">[icon name="icon-mobile-phone" size="large" circle="true"] Responsive Layout</a></h3>
<p style="float: left;">Excepteur sint occaecat cupidatat non proident, sunt in dolore magna culpa qui officia deserunt mollit anim id est laborum.</p>

</div>
[/one_fourth] [one_fourth_last]
<div style="float: left; text-align: center;">
<h3><a href="../icon/desktop">[icon name="icon-picture" size="large" circle="true"] Clean Design</a></h3>
<p style="float: left;">Mollit anim excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div>
[/one_fourth_last] [/serviceblock]

[divider]

[serviceblock]
[one_fourth]

[lightbox src="http://www.startis.ru/smartpress/files/2011/07/photodune-358760-great-idea-s.jpg" width="210" height="110" title="some title" url="#" hover="1" retina="true"]
<div style="float: left;">
<h3><a title="SEO Optimized" href="#">SEO Optimized</a></h3>
<p style="float: left; text-align: left;">Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[read_more text="Read more" title="Read More..." url="#"]

</div>
[/one_fourth] [one_fourth]

[lightbox src="http://www.startis.ru/smartpress/files/2011/07/photodune-2117565-set-of-chess-figures-on-the-playing-board-s.jpg" width="210" height="110" title="some title" url="#" hover="1" retina="true"]
<div style="float: left;">
<h3><a title="Solid Build" href="#">11 Sliders</a></h3>
<p style="float: left; text-align: left;">Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[read_more text="Read more" title="Read More..." url=""]

</div>
[/one_fourth] [one_fourth]

[lightbox src="http://www.startis.ru/smartpress/files/2011/07/photodune-4552398-businessman-drawing-a-rising-arrow-s.jpg" width="210" height="110" title="some title" url="#" hover="1" retina="true"]
<div style="float: left;">
<h3><a title="Choose your Color" href="#">over 220 Fonts</a></h3>
<p style="float: left; text-align: left;">Excepteur sint occaecat cupidatat non proident, sunt in dolore magna culpa qui officia deserunt mollit anim id est laborum.</p>
[read_more text="Read more" title="Read More..." url="#"]

</div>
[/one_fourth] [one_fourth_last]

[lightbox src="http://www.startis.ru/smartpress/files/2013/01/photodune-4522196-closeup-microphone-s.jpg" width="210" height="110" title="some title" url="#" hover="1" retina="true"]
<div style="float: left;">
<h3><a title="Ongoing Support" href="#">Unlimited Portfolios</a></h3>
<p style="float: left; text-align: left;">Excepteur sint occaecat cupidatat non dolore magna proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
[read_more text="Read more" title="Read More..." url="#"]

</div>
[/one_fourth_last]
[/serviceblock]

[divider]

[serviceblock][one_third]
<h3><a title="SEO Optimized" href="#">SEO Optimized</a></h3>
Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[read_more text="Read more" title="Read More..." url="#"]
[/one_third]

[one_third]
<h3><a title="Pricing Tables" href="#">Pricing Tables</a></h3>
Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[read_more text="Read more" title="Read More..." url="#"]
[/one_third]

[one_third_last]
<h3><a title="Ajax contact form" href="#">Ajax contact form</a></h3>
Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[read_more text="Read more" title="Read More..." url="#"]
[/one_third_last][/serviceblock]

[divider]

[serviceblock][one_third]
<h3><a title="SEO Optimized" href="#">[icon name="icon-cogs" size="large" circle="true"] SEO Optimized</a></h3>
Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[read_more text="Read more" title="Read More..." url="#"]
[/one_third]

[one_third]
<h3><a title="Pricing Tables" href="#">[icon name="icon-desktop" size="large" circle="true"] Pricing Tables</a></h3>
Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[read_more text="Read more" title="Read More..." url="#"]
[/one_third]

[one_third_last]
<h3><a title="Ajax contact form" href="#">[icon name="icon-picture" size="large" circle="true"] Ajax contact form</a></h3>
Excepteur sint occaecat dolore magna cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[read_more text="Read more" title="Read More..." url="#"]
[/one_third_last][/serviceblock]
[divider]
    





||<i class="icon-cogs"></i> Services','



[tabs]    
    [tab title="Install"]
[accordions]
    [accordion title="How to install this Theme?"] Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/accordion]
    [accordion title="What about copyrights?"] Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/accordion]
    [accordion title="How much?"] Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  [/accordion]
    [accordion title="Included support"] Sliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/accordion]
    [accordion title="Can i change contact form page?"] content [/accordion]
    [accordion title="How to install this Theme?"] Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/accordion]
    [accordion title="What about copyrights?"] Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/accordion]
    [accordion title="How much?"] Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  [/accordion]
    [accordion title="Included support"] Sliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/accordion]
    [accordion title="Can i change contact form page?"] content [/accordion]
    [accordion title="How to install this Theme?"] Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/accordion]
    [accordion title="What about copyrights?"] Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/accordion]
    [accordion title="How much?"] Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  [/accordion]
    [accordion title="Included support"] Sliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/accordion]
    [accordion title="Can i change contact form page?"] content [/accordion]
[/accordions]
 [/tab]
    [tab title="Setup"]    
[accordions]
[accordion title="What about copyrights?"] Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/accordion]
    [accordion title="How much?"] Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  [/accordion]
    [accordion title="Included support"] Sliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/accordion]
    [accordion title="Can i change contact form page?"] content [/accordion]
    [accordion title="How to install this Theme?"] Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/accordion]
    [accordion title="What about copyrights?"] Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/accordion]
    [accordion title="How much?"] Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  [/accordion]
    [accordion title="Included support"] Sliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/accordion]
    [accordion title="Can i change contact form page?"] content [/accordion]
    [accordion title="How to install this Theme?"] Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/accordion]
    [accordion title="What about copyrights?"] Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/accordion]
    [accordion title="How much?"] Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  [/accordion]
[/accordions]
[/tab]
    [tab title="Usage"] <h1><strong>Responsive and Clean WordPress Theme</strong></h1>

<i class="icon-html5 icon-5x alignleft"></i> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

<h4>Lorem ipum dolor sit amet</h4>
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.

<h3>Why choose this theme?</h3>

[custom_list style="list1"]
<ul>
	<li>Unlimited color variations</li>
	<li>over 220 Fonts & 100 Shortcodes</li>
	<li>over 60 Textures Overlay + Custom Background images</li>
	<li>SEO Optimized Every pages &amp; posts</li>
	<li>Intuitive &amp; Powerfull Startis Options Panel</li>
	<li>Unlimited Portfolios</li>
</ul>
[/custom_list]

[clear] 
[/tab]
[/tabs]



||<i class="icon-question-sign"></i> FAQ'));

$shortitems = array('Typography' => array('
[title]your title text[/title]||<i class="icon-text-height"></i> Title','
[highlight color="#F95601"]your text with unlimited highlight colors [/highlight]||<i class="icon-edit-sign"></i> Highlight','
[blockquote class="alignleft"]This is a left pullquote.[/blockquote]||<i class="icon-quote-left"></i> Blockquote','
[dropcap color="#F95601"]R[/dropcap]||<i class="icon-font"></i> Dropcaps','
[welcome_message reverse_button_text="Learn More" url="#" reverse_url="#" button_text="Purchase Now"]<strong>Welcome to the Mega Theme</strong> Fully responsive, powerfull and user friendly for your website... Multi-Pourpose theme for corporate, blog, magazine, portfolio [/welcome_message]||<i class="icon-flag-alt"></i> Welcome Message','
[left]||<i class="icon-arrow-left"></i> Left align','
[right]||<i class="icon-arrow-right"></i> Right align','
[divider]||<i class="icon-minus"></i> Divider','
[divider_top]||<i class="icon-minus"></i> Divider top','
[read_more text="Read more" title="Read More" url="#"]||<i class="icon-double-angle-right"></i> Read More Link','
[clear]||<i class="icon-eraser"></i> Clear'),'
Elements' => array('
[accordions]
    [accordion title="title 1"] content [/accordion]
    [accordion title="title 2"] content [/accordion]
    [accordion title="title 3"] content [/accordion]
    [accordion title="title 4"] content [/accordion]
    [accordion title="title 5"] content [/accordion]
[/accordions]||<i class="icon-list"></i> Accordion','
[tabs]
[tab title="title 1" icon="icon-picture"]
<h4>Lorem ipum dolor sit amet</h4>
[recent_posts count="2" thumbnail="true" desc_length="240"]
[/tab]
[tab title="title 2" icon="icon-html5"]
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[/tab] 
[tab title="title 3"] Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [/tab]
[/tabs]||<i class="icon-list-alt"></i> Horizontal Tabs','
[vtabs]    
    [tab title="title 1" icon="icon-picture"] contents [/tab]
    [tab title="title 2"] contents [/tab]
    [tab title="title 3"] contents [/tab]
[/vtabs]||<i class="icon-list-alt"></i> Vertical Tabs','
[toggle title="Title 1"]Content[/toggle]
[toggle title="Title 2"]Content[/toggle]
[toggle title="Title 3"]Content[/toggle]||<i class="icon-chevron-down"></i> Toggles','
[table] Your table [/table]||<i class="icon-table"></i> Table','
[testimonial customer_image="http://www.startis.ru/wp-content/uploads/2011/07/qs3.jpg" customer="John Doe. Marketing Director STARTIS Inc." url="#"] Your Testimonial Text [/testimonial]||<i class="icon-comments"></i> Testimonial','

[ptable]

[ptable_one_third][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_third]

[ptable_one_third_best][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#F95601" textcolor="#FFFFFF" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_third_best]

[ptable_one_third][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_third]

[/ptable]||<i class="icon-money"></i> Pricing Table 3','
[ptable]

[ptable_one_fifth][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_fifth]

[ptable_one_fifth][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_fifth]

[ptable_one_fifth_best][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#F95601" textcolor="#FFFFFF" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_fifth_best]

[ptable_one_fifth][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_fifth]

[ptable_one_fifth][ptable_header] Item Header [/ptable_header]
[ptable_options]<strong>Key Features:</strong>[/ptable_options]
[ptable_options]
[custom_list style="list1"]
<ul>
	<li>your list item</li>
	<li>your list item</li>
	<li>your list item</li>
</ul>
[/custom_list]
[/ptable_options]
[ptable_price]$100[/ptable_price]
[ptable_options]
[bigbutton bgcolor="#336699" textcolor="#FFFFFF" shadowcolor="#ffffff" url="#"]Buy Now[/bigbutton]
[/ptable_options]
[/ptable_one_fifth]
[/ptable]||<i class="icon-money"></i> Pricing Table 5'),'
    
Widgets' => array('
[blog_posts count="6" category_id="6" thumbnail="true" moretag="true" readmorelink="true" desc_length="240"]||<i class="icon-list-ul"></i> Blog Posts','
[recent_posts count="5" thumbnail="true" thumb_width="200" thumb_height="150" moretag="true" readmorelink="true" desc_length="240" category_id="12345"]||<i class="icon-list-ul"></i> Recent Posts','
[recent_posts_slider count="5" thumbnail="true" thumb_width="595" thumb_height="350" moretag="true" readmorelink="true" desc_length="240" category_id="12345"]||<i class="icon-picture"></i> Recent Posts Slider','
[recent_posts_carousel count="5" thumbnail="true" thumb_width="220" thumb_height="180" moretag="true" readmorelink="true" desc_length="240" category_id="12345"]||<i class="icon-list-ul"></i> Posts Carousel','
[portfolio_items count="6" category_name="photos" thumb_width="234" thumb_height="180"]||<i class="icon-th"></i> Recent Portfolio Items','
[portfolio_items_carousel count="6" category_name="photos" thumb_width="220" thumb_height="180"]||<i class="icon-th"></i> Portfolio Carousel','
[flickr id="flickr id" count="9" display="latest"]||<i class="icon-picture"></i> Flickr','
[slider][slide title="Welcome to FlatMagazin" text="Yes adidas ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo"][image src="http://www.startis.ru/flatmagazine/files/2013/06/Kf-zWtSMGkM.jpg" width="595" height="300" retina="true" ][/slide] [slide title="Unique Flat Design News/Magazine theme" text="Perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo"][image src="http://www.startis.ru/flatmagazine/files/2013/06/lXYbPcIttIA.jpg" width="595" height="300" retina="true"][/slide][/slider]||<i class="icon-expand"></i> Content Slider','
[clients] 
[client client="Client name" client_url="LINK" image="URL"]
[client client="Client name" client_url="LINK" image="URL"]
[client client="Client name" client_url="LINK" image="URL"]
[client client="Client name" client_url="LINK" image="URL"]
[client client="Client name" client_url="LINK" image="URL"]
[client client="Client name" client_url="LINK" image="URL"]
[client client="Client name" client_url="LINK" image="URL"]
[client client="Client name" client_url="LINK" image="URL"][/clients]||<i class="icon-group"></i> Clients carousel'),'

Buttons & images' => array('

[sbutton bgcolor="#ffffff" textcolor="#777777" textshadowcolor="#ffffff" url="#"]support SButton[/sbutton]||<i class="icon-check-empty"></i> SButton','
[rsbutton bgcolor="#FFB515" textcolor="#FFFFFF" textshadowcolor="#555" url="#"] Custom RS Button[/rsbutton]||<i class="icon-check-empty"></i> RSButton','
[bigbutton bgcolor="#fbec8e" textcolor="#967d00" textshadowcolor="#ffffff" url="#"]Big Button[/bigbutton]||<i class="icon-check-empty"></i> BigButton','
[callme text="Call Me Back"]||<i class="icon-phone"></i> CallMe Button','
[image src="image url" align="right" width="140" height="70" title="some title" url="#" hover="1"]||<i class="icon-picture"></i> Images','
[lightbox src="image url" width="210" height="100" title="EG" align="right"]||<i class="icon-zoom-in"></i> Lightbox images'),'

Page OnLoad Effects' => array('

[onload_effect after_loading="true" name="from_left" delay="0"] Content [/onload_effect]||<i class="icon-magic"></i> From Left','
[onload_effect after_loading="true" name="from_right" delay="0"] Content [/onload_effect]||<i class="icon-magic"></i> From Right','
[onload_effect after_loading="true" name="from_top" delay="0"] Content [/onload_effect]||<i class="icon-magic"></i> From Top','
[onload_effect after_loading="true" name="from_bottom" delay="0"] Content [/onload_effect]||<i class="icon-magic"></i> From Buttom','
[onload_effect after_loading="true" name="zoomin" delay="0"] Content [/onload_effect]||<i class="icon-magic"></i> Zoom in','
[onload_effect after_loading="true" name="zoomout" delay="0"] Content [/onload_effect]||<i class="icon-magic"></i> Zoom Out','
[onload_effect after_loading="true" name="rotate_from_left" delay="0"] Content [/onload_effect]||<i class="icon-magic"></i> Rotate From Left','
[onload_effect after_loading="true" name="rotate_from_right" delay="0"] Content [/onload_effect]||<i class="icon-magic"></i> Rotate From Right'),'

Styled Boxes' => array('

[note] Box content [/note]||<i class="icon-paper-clip"></i> Note box','
[success] Box content [/success]||<i class="icon-flag"></i> Success box','
[info] Box content [/info]||<i class="icon-info-sign"></i> Info box','
[warning] Box content [/warning]||<i class="icon-warning-sign"></i> Warning box','
[error] Box content [/error]||<i class="icon-remove-sign"></i> Error box'));  
    
$menuitems = array('[one_half]Your content[/one_half][one_half_last]Your content[/one_half_last] ||2 Columns 1 | 1' => array('
[one_third]Your content[/one_third] [two_third_last]Your content[/two_third_last] ||2 Columns 1 | 2 ','
[two_third]Your content[/two_third] [one_half_last]Your content[/one_half_last] ||2 Columns 2 | 1 ','
[one_fourth]Your content[/one_fourth] [three_fourth_last] Your content [/three_fourth_last] ||2 Columns 1 | 3 ','
[three_fourth]Your content[/three_fourth] [one_fourth_last] Your content [/one_fourth_last] ||2 Columns 3 | 1 ','
[one_fifth]Your content[/one_fifth] [four_fifth_last] Your content [/four_fifth_last] ||2 Columns 1 | 4 ','
[four_fifth]Your content[/four_fifth] [one_fifth_last] Your content [/one_fifth_last] ||2 Columns 4 | 1 ','
[one_sixth]Your content[/one_sixth] [five_sixth_last] Your content [/five_sixth_last] ||2 Columns 1 | 5 ','
[five_sixth]Your content[/five_sixth] [one_sixth_last] Your content [/one_sixth_last] ||2 Columns 5 | 1 '),'[one_third]Your content[/one_third] [one_third] Your content [/one_third] [one_third_last]Your content[/one_third_last] ||3 Columns 1 | 1 | 1 ' => array('
[one_half]Your content[/one_half] [one_fourth] Your content [/one_fourth] [one_fourth_last]Your content[/one_fourth_last] ||3 Columns 2 | 1 | 1 ','
[one_fourth]Your content[/one_fourth] [one_half] Your content [/one_half] [one_fourth_last]Your content[/one_fourth_last] ||3 Columns 1 | 2 | 1 ','
[one_fourth]Your content[/one_fourth] [one_fourth] Your content [/one_fourth] [one_half_last]Your content[/one_half_last] ||3 Columns 1 | 1 | 2 ','
[three_fifth]Your content[/three_fifth] [one_fifth] Your content [/one_fifth] [one_fifth_last]Your content[/one_fifth_last] ||3 Columns 3 | 1 | 1 ','
[one_fifth]Your content[/one_fifth] [three_fifth] Your content [/three_fifth] [one_fifth_last]Your content[/one_fifth_last] ||3 Columns 1 | 3 | 1 ','
[one_fifth]Your content[/one_fifth] [one_fifth] Your content [/one_fifth] [three_fifth_last]Your content[/three_fifth_last] ||3 Columns 1 | 1 | 3 ','
[two_third]Your content[/two_third] [one_fifth] Your content [/one_fifth] [one_sixth_last]Your content[/one_sixth_last] ||3 Columns 4 | 1 | 1 ','
[one_sixth]Your content[/one_sixth] [two_third] Your content [/two_third] [one_sixth_last]Your content[/one_sixth_last] ||3 Columns 1 | 4 | 1 ','
[one_sixth]Your content[/one_sixth] [one_sixth] Your content [/one_sixth] [two_third_last]Your content[/two_third_last] ||3 Columns 1 | 1 | 4 '),'
[one_fourth]Your content[/one_fourth][one_fourth]Your content[/one_fourth][one_fourth]Your content[/one_fourth][one_fourth_last]Your content[/one_fourth_last] ||4 Columns 1 | 1 | 1 | 1 ' => array('
[two_fifth]Your content[/two_fifth][one_fifth]Your content[/one_fifth][one_fifth]Your content[/one_fifth][one_fifth_last]Your content[/one_fifth_last] ||4 Columns 2 | 1 | 1 | 1 ','
[one_fifth]Your content[/one_fifth][two_fifth]Your content[/two_fifth][one_fifth]Your content[/one_fifth][one_fifth_last]Your content[/one_fifth_last] ||4 Columns 1 | 2 | 1 | 1 ','
[one_fifth]Your content[/one_fifth][one_fifth]Your content[/one_fifth][two_fifth]Your content[/two_fifth][one_fifth_last]Your content[/one_fifth_last] ||4 Columns 1 | 1 | 2 | 1 ','
[one_fifth]Your content[/one_fifth][one_fifth]Your content[/one_fifth][one_fifth]Your content[/one_fifth][two_fifth_last]Your content[/two_fifth_last] ||4 Columns 1 | 1 | 1 | 2 ','
[one_half]Your content[/one_half][one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_sixth_last]Your content[/one_sixth_last] ||4 Columns 3 | 1 | 1 | 1 ','
[one_sixth]Your content[/one_sixth][one_half]Your content[/one_half][one_sixth]Your content[/one_sixth][one_sixth_last]Your content[/one_sixth_last] ||4 Columns 1 | 3 | 1 | 1 ','
[one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_half]Your content[/one_half][one_sixth_last]Your content[/one_sixth_last] ||4 Columns 1 | 1 | 3 | 1 ','
[one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_half_last]Your content[/one_half_last] ||4 Columns 1 | 1 | 1 | 3 '),'
[one_fifth]Your content[/one_fifth][one_fifth]Your content[/one_fifth][one_fifth]Your content[/one_fifth][one_fifth]Your content[/one_fifth] [one_fifth_last]Your content[/one_fifth_last] ||5 Columns 1 | 1 | 1 | 1 | 1 ' => array('
[one_third]Your content[/one_third][one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth] [one_sixth_last]Your content[/one_sixth_last] ||5 Columns 2 | 1 | 1 | 1 | 1 ','
[one_sixth]Your content[/one_sixth][one_third]Your content[/one_third][one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth] [one_sixth_last]Your content[/one_sixth_last] ||5 Columns 1 | 2 | 1 | 1 | 1 ','
[one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_third]Your content[/one_third][one_sixth]Your content[/one_sixth] [one_sixth_last]Your content[/one_sixth_last] ||5 Columns 1 | 1 | 2 | 1 | 1 ','
[one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_third]Your content[/one_third] [one_sixth_last]Your content[/one_sixth_last] ||5 Columns 1 | 1 | 1 | 2 | 1 ','
[one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth] [one_third_last]Your content[/one_third_last] ||5 Columns 1 | 1 | 1 | 1 | 2 '),'
[one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth][one_sixth]Your content[/one_sixth] [one_sixth_last]Your content[/one_sixth_last] ||6 Columns ' => '');

$pagesitems = array('2 Columns 1 | 1' => array('
[one_third]Your content[/one_third] [two_third_last]Your content[/two_third_last] ||2 Columns 1 | 2 ','
[two_third]Your content[/two_third] [one_half_last]Your content[/one_half_last] ||2 Columns 2 | 1 ','
2 Columns 1 | 3 ','
2 Columns 3 | 1 ','
2 Columns 1 | 4 ','
2 Columns 4 | 1 ','
2 Columns 1 | 5 ','
2 Columns 5 | 1 '),'
3 Columns 1 | 1 | 1 ' => array('
3 Columns 2 | 1 | 1 ','
3 Columns 1 | 2 | 1 ','
3 Columns 1 | 1 | 2 ','
3 Columns 3 | 1 | 1 ','
3 Columns 1 | 3 | 1 ','
3 Columns 1 | 1 | 3 ','
3 Columns 4 | 1 | 1 ','
3 Columns 1 | 4 | 1 ','
3 Columns 1 | 1 | 4 '),'
4 Columns 1 | 1 | 1 | 1 ' => array('
4 Columns 2 | 1 | 1 | 1 ','
4 Columns 1 | 2 | 1 | 1 ','
4 Columns 1 | 1 | 2 | 1 ','
4 Columns 1 | 1 | 1 | 2 ','
4 Columns 3 | 1 | 1 | 1 ','
4 Columns 1 | 3 | 1 | 1 ','
4 Columns 1 | 1 | 3 | 1 ','
4 Columns 1 | 1 | 1 | 3 '),'
5 Columns 1 | 1 | 1 | 1 | 1 ' => array('
5 Columns 2 | 1 | 1 | 1 | 1 ','
5 Columns 1 | 2 | 1 | 1 | 1 ','
5 Columns 1 | 1 | 2 | 1 | 1 ','
5 Columns 1 | 1 | 1 | 2 | 1 ','
5 Columns 1 | 1 | 1 | 1 | 2 '),'
6 Columns ' => '');

    /*$menuitems = array('Columns' => array('icon,size,color','2 Columns','2/3 Coulumns','4 Coulumns'), 
                       'Typography' => array('icon,size,color','2 Columns','2/3 Coulumns','4 Coulumns'), 
                       'Typography' => array('icon,size,color','2 Columns','2/3 Coulumns','4 Coulumns') 
                        );*/
	//if ( current_user_can('edit_posts') && current_user_can('edit_pages') ) {
	   if ( get_user_option('rich_editing') == 'true') {
    ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/faw/css/font-awesome.min.css" type="text/css" media="screen" />
   	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/functions/shortcodes.css" type="text/css" media="screen" />
    <script type="text/javascript">
    jQuery(document).ready(function($) {
    <?php $output = 'jQuery(\'#wp-content-editor-container\').append(\'<div id="dropcol" class="shortbox"><ul>';
			foreach ($menuitems as $key => $value) { 
				$output .= '<li>';
                $colkey = explode("||", $key);
				$output .= '<b>'.$colkey[1].'<span class="shorcont">'.$colkey[0].'</span></b>';
                if ($value!='') {
                    $output .= '<ul>';
                    foreach ($value as $val) {
                        $colval = explode("||", $val);
                        $output .= '<li>'.$colval[1].'<span class="shorcont">'.$colval[0].'</span></li>';
                    }
                    $output .= '</ul>';
                }
				$output .= '</li>';
				
			}
    $output = str_replace("\r", "", $output);
    $output = str_replace("\n", "", $output); 
        echo $output.'</ul><span class="closedrop"><i class="icon-remove"></i>'.__('Close').'</span></div>\');'; ?>



    <?php $outputpages = 'jQuery(\'#wp-content-editor-container\').append(\'<div id="droppages" class="shortbox"><ul>';
			foreach ($pageitems as $key => $value) { 
				$outputpages .= '<li>';
				$outputpages .= '<b>'.$key.'</b>';
                if ($value!='') {
                    $outputpages .= '<ul>';
                    foreach ($value as $val) {
                        $colval = explode("||", $val);
                        $outputpages .= '<li>'.$colval[1].'<span class="shorcont">'.$colval[0].'</span></li>';
                    }
                    $outputpages .= '</ul>';
                }
				$outputpages .= '</li>';
				
			}
    $outputpages = str_replace("\r", "", $outputpages);
    $outputpages = str_replace("\n", "", $outputpages); 
        echo $outputpages.'</ul><span class="closedrop"><i class="icon-remove"></i>'.__('Close').'</span></div>\');'; ?>
  
<?php $outputshort = 'jQuery(\'#wp-content-editor-container\').append(\'<div id="dropshort" class="shortbox"><ul>';
			foreach ($shortitems as $key => $value) { 
				$outputshort .= '<li>';
				$outputshort .= '<b>'.$key.'</b>';
                if ($value!='') {
                    $outputshort .= '<ul>';
                    $shortval = array();
                    foreach ($value as $val) {
                        $shortval = explode("||", $val);
                        $outputshort .= '<li>'.$shortval[1].'<span class="shorcont">'.$shortval[0].'</span></li>';
                    }
                    $outputshort .= '</ul>';
                }
				$outputshort .= '</li>';
				
			}
    $outputshort = str_replace("\r", "", $outputshort);
    $outputshort = str_replace("\n", "", $outputshort); 
    $iconpack = str_replace("\r", "", $iconpack);
    $iconpack = str_replace("\n", "", $iconpack); 
    
        echo $outputshort.'</ul><span class="closedrop"><i class="icon-remove"></i>'.__('Close').'</span></div>\');';
        $outputicons = 'jQuery(\'#wp-content-editor-container\').append(\'<div id="dropicons" class="shortbox">'.$iconpack; 
        echo $outputicons.'<span class="closedrop"><i class="icon-remove"></i>'.__('Close').'</span></div>\');'; ?>
        jQuery('.closedrop').click( function() {
            jQuery('.shortbox').fadeOut();
            });
    });
    </script>
    <?php
    }
}


function register_startis_buttons($buttons) {
	array_push($buttons, "|", "startis_button");
    array_push($buttons, "|", "startis_columns");
    array_push($buttons, "|", "startis_pages");
    array_push($buttons, "|", "startis_icons");
	return $buttons;
}


function startis_shortcode_buttons() {
	if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
		return;

	if ( get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", "add_startis_tinymce_plugin");
        add_filter("mce_buttons_3", "register_startis_buttons");
	}
}

add_action('init', 'startis_shortcode_buttons');

function add_startis_tinymce_plugin($plugin_array) {
	global $fscb_base_dir;
	$plugin_array['startis_button'] = get_template_directory_uri().'/js/shortcode.js';  
	return $plugin_array;
}


add_filter( 'the_content', 'shortcode_unautop',100 );
add_filter( 'do_shortcode', 'shortcode_unautop',100 );
    
?>