<?php
/**
 * Font awesome
 * Last edit: 2017-03-08
 * JS export line : $('#icons').find('section:not(#new) .fontawesome-icon-list .fa-hover a').map(function() {return {[$(this).find('i').attr('class').replace(/^fa /, "")]: $(this).text().replace(/^ Example of /, "")};}).get();
 * Author: LEBLEU Communication humaine
 */
if(!function_exists('fontAwesomeIcons')) {
	function fontAwesomeIcons() {
		return array(
		    "fa fa-address-book" => "address-book",
		    "fa fa-address-book-o" => "address-book-o",
		    "fa fa-address-card" => "address-card",
		    "fa fa-address-card-o" => "address-card-o",
		    "fa fa-adjust" => "adjust",
		    "fa fa-american-sign-language-interpreting" => "american-sign-language-interpreting",
		    "fa fa-anchor" => "anchor",
		    "fa fa-archive" => "archive",
		    "fa fa-area-chart" => "area-chart",
		    "fa fa-arrows" => "arrows",
		    "fa fa-arrows-h" => "arrows-h",
		    "fa fa-arrows-v" => "arrows-v",
		    "fa fa-asl-interpreting" => "asl-interpreting (alias)",
		    "fa fa-assistive-listening-systems" => "assistive-listening-systems",
		    "fa fa-asterisk" => "asterisk",
		    "fa fa-at" => "at",
		    "fa fa-audio-description" => "audio-description",
		    "fa fa-automobile" => "automobile (alias)",
		    "fa fa-balance-scale" => "balance-scale",
		    "fa fa-ban" => "ban",
		    "fa fa-bank" => "bank (alias)",
		    "fa fa-bar-chart" => "bar-chart",
		    "fa fa-bar-chart-o" => "bar-chart-o (alias)",
		    "fa fa-barcode" => "barcode",
		    "fa fa-bars" => "bars",
		    "fa fa-bath" => "bath",
		    "fa fa-bathtub" => "bathtub (alias)",
		    "fa fa-battery" => "battery (alias)",
		    "fa fa-battery-0" => "battery-0 (alias)",
		    "fa fa-battery-1" => "battery-1 (alias)",
		    "fa fa-battery-2" => "battery-2 (alias)",
		    "fa fa-battery-3" => "battery-3 (alias)",
		    "fa fa-battery-4" => "battery-4 (alias)",
		    "fa fa-battery-empty" => "battery-empty",
		    "fa fa-battery-full" => "battery-full",
		    "fa fa-battery-half" => "battery-half",
		    "fa fa-battery-quarter" => "battery-quarter",
		    "fa fa-battery-three-quarters" => "battery-three-quarters",
		    "fa fa-bed" => "bed",
		    "fa fa-beer" => "beer",
		    "fa fa-bell" => "bell",
		    "fa fa-bell-o" => "bell-o",
		    "fa fa-bell-slash" => "bell-slash",
		    "fa fa-bell-slash-o" => "bell-slash-o",
		    "fa fa-bicycle" => "bicycle",
		    "fa fa-binoculars" => "binoculars",
		    "fa fa-birthday-cake" => "birthday-cake",
		    "fa fa-blind" => "blind",
		    "fa fa-bluetooth" => "bluetooth",
		    "fa fa-bluetooth-b" => "bluetooth-b",
		    "fa fa-bolt" => "bolt",
		    "fa fa-bomb" => "bomb",
		    "fa fa-book" => "book",
		    "fa fa-bookmark" => "bookmark",
		    "fa fa-bookmark-o" => "bookmark-o",
		    "fa fa-braille" => "braille",
		    "fa fa-briefcase" => "briefcase",
		    "fa fa-bug" => "bug",
		    "fa fa-building" => "building",
		    "fa fa-building-o" => "building-o",
		    "fa fa-bullhorn" => "bullhorn",
		    "fa fa-bullseye" => "bullseye",
		    "fa fa-bus" => "bus",
		    "fa fa-cab" => "cab (alias)",
		    "fa fa-calculator" => "calculator",
		    "fa fa-calendar" => "calendar",
		    "fa fa-calendar-check-o" => "calendar-check-o",
		    "fa fa-calendar-minus-o" => "calendar-minus-o",
		    "fa fa-calendar-o" => "calendar-o",
		    "fa fa-calendar-plus-o" => "calendar-plus-o",
		    "fa fa-calendar-times-o" => "calendar-times-o",
		    "fa fa-camera" => "camera",
		    "fa fa-camera-retro" => "camera-retro",
		    "fa fa-car" => "car",
		    "fa fa-caret-square-o-down" => "caret-square-o-down",
		    "fa fa-caret-square-o-left" => "caret-square-o-left",
		    "fa fa-caret-square-o-right" => "caret-square-o-right",
		    "fa fa-caret-square-o-up" => "caret-square-o-up",
		    "fa fa-cart-arrow-down" => "cart-arrow-down",
		    "fa fa-cart-plus" => "cart-plus",
		    "fa fa-cc" => "cc",
		    "fa fa-certificate" => "certificate",
		    "fa fa-check" => "check",
		    "fa fa-check-circle" => "check-circle",
		    "fa fa-check-circle-o" => "check-circle-o",
		    "fa fa-check-square" => "check-square",
		    "fa fa-check-square-o" => "check-square-o",
		    "fa fa-child" => "child",
		    "fa fa-circle" => "circle",
		    "fa fa-circle-o" => "circle-o",
		    "fa fa-circle-o-notch" => "circle-o-notch",
		    "fa fa-circle-thin" => "circle-thin",
		    "fa fa-clock-o" => "clock-o",
		    "fa fa-clone" => "clone",
		    "fa fa-close" => "close (alias)",
		    "fa fa-cloud" => "cloud",
		    "fa fa-cloud-download" => "cloud-download",
		    "fa fa-cloud-upload" => "cloud-upload",
		    "fa fa-code" => "code",
		    "fa fa-code-fork" => "code-fork",
		    "fa fa-coffee" => "coffee",
		    "fa fa-cog" => "cog",
		    "fa fa-cogs" => "cogs",
		    "fa fa-comment" => "comment",
		    "fa fa-comment-o" => "comment-o",
		    "fa fa-commenting" => "commenting",
		    "fa fa-commenting-o" => "commenting-o",
		    "fa fa-comments" => "comments",
		    "fa fa-comments-o" => "comments-o",
		    "fa fa-compass" => "compass",
		    "fa fa-copyright" => "copyright",
		    "fa fa-creative-commons" => "creative-commons",
		    "fa fa-credit-card" => "credit-card",
		    "fa fa-credit-card-alt" => "credit-card-alt",
		    "fa fa-crop" => "crop",
		    "fa fa-crosshairs" => "crosshairs",
		    "fa fa-cube" => "cube",
		    "fa fa-cubes" => "cubes",
		    "fa fa-cutlery" => "cutlery",
		    "fa fa-dashboard" => "dashboard (alias)",
		    "fa fa-database" => "database",
		    "fa fa-deaf" => "deaf",
		    "fa fa-deafness" => "deafness (alias)",
		    "fa fa-desktop" => "desktop",
		    "fa fa-diamond" => "diamond",
		    "fa fa-dot-circle-o" => "dot-circle-o",
		    "fa fa-download" => "download",
		    "fa fa-drivers-license" => "drivers-license (alias)",
		    "fa fa-drivers-license-o" => "drivers-license-o (alias)",
		    "fa fa-edit" => "edit (alias)",
		    "fa fa-ellipsis-h" => "ellipsis-h",
		    "fa fa-ellipsis-v" => "ellipsis-v",
		    "fa fa-envelope" => "envelope",
		    "fa fa-envelope-o" => "envelope-o",
		    "fa fa-envelope-open" => "envelope-open",
		    "fa fa-envelope-open-o" => "envelope-open-o",
		    "fa fa-envelope-square" => "envelope-square",
		    "fa fa-eraser" => "eraser",
		    "fa fa-exchange" => "exchange",
		    "fa fa-exclamation" => "exclamation",
		    "fa fa-exclamation-circle" => "exclamation-circle",
		    "fa fa-exclamation-triangle" => "exclamation-triangle",
		    "fa fa-external-link" => "external-link",
		    "fa fa-external-link-square" => "external-link-square",
		    "fa fa-eye" => "eye",
		    "fa fa-eye-slash" => "eye-slash",
		    "fa fa-eyedropper" => "eyedropper",
		    "fa fa-fax" => "fax",
		    "fa fa-feed" => "feed (alias)",
		    "fa fa-female" => "female",
		    "fa fa-fighter-jet" => "fighter-jet",
		    "fa fa-file-archive-o" => "file-archive-o",
		    "fa fa-file-audio-o" => "file-audio-o",
		    "fa fa-file-code-o" => "file-code-o",
		    "fa fa-file-excel-o" => "file-excel-o",
		    "fa fa-file-image-o" => "file-image-o",
		    "fa fa-file-movie-o" => "file-movie-o (alias)",
		    "fa fa-file-pdf-o" => "file-pdf-o",
		    "fa fa-file-photo-o" => "file-photo-o (alias)",
		    "fa fa-file-picture-o" => "file-picture-o (alias)",
		    "fa fa-file-powerpoint-o" => "file-powerpoint-o",
		    "fa fa-file-sound-o" => "file-sound-o (alias)",
		    "fa fa-file-video-o" => "file-video-o",
		    "fa fa-file-word-o" => "file-word-o",
		    "fa fa-file-zip-o" => "file-zip-o (alias)",
		    "fa fa-film" => "film",
		    "fa fa-filter" => "filter",
		    "fa fa-fire" => "fire",
		    "fa fa-fire-extinguisher" => "fire-extinguisher",
		    "fa fa-flag" => "flag",
		    "fa fa-flag-checkered" => "flag-checkered",
		    "fa fa-flag-o" => "flag-o",
		    "fa fa-flash" => "flash (alias)",
		    "fa fa-flask" => "flask",
		    "fa fa-folder" => "folder",
		    "fa fa-folder-o" => "folder-o",
		    "fa fa-folder-open" => "folder-open",
		    "fa fa-folder-open-o" => "folder-open-o",
		    "fa fa-frown-o" => "frown-o",
		    "fa fa-futbol-o" => "futbol-o",
		    "fa fa-gamepad" => "gamepad",
		    "fa fa-gavel" => "gavel",
		    "fa fa-gear" => "gear (alias)",
		    "fa fa-gears" => "gears (alias)",
		    "fa fa-gift" => "gift",
		    "fa fa-glass" => "glass",
		    "fa fa-globe" => "globe",
		    "fa fa-graduation-cap" => "graduation-cap",
		    "fa fa-group" => "group (alias)",
		    "fa fa-hand-grab-o" => "hand-grab-o (alias)",
		    "fa fa-hand-lizard-o" => "hand-lizard-o",
		    "fa fa-hand-paper-o" => "hand-paper-o",
		    "fa fa-hand-peace-o" => "hand-peace-o",
		    "fa fa-hand-pointer-o" => "hand-pointer-o",
		    "fa fa-hand-rock-o" => "hand-rock-o",
		    "fa fa-hand-scissors-o" => "hand-scissors-o",
		    "fa fa-hand-spock-o" => "hand-spock-o",
		    "fa fa-hand-stop-o" => "hand-stop-o (alias)",
		    "fa fa-handshake-o" => "handshake-o",
		    "fa fa-hard-of-hearing" => "hard-of-hearing (alias)",
		    "fa fa-hashtag" => "hashtag",
		    "fa fa-hdd-o" => "hdd-o",
		    "fa fa-headphones" => "headphones",
		    "fa fa-heart" => "heart",
		    "fa fa-heart-o" => "heart-o",
		    "fa fa-heartbeat" => "heartbeat",
		    "fa fa-history" => "history",
		    "fa fa-home" => "home",
		    "fa fa-hotel" => "hotel (alias)",
		    "fa fa-hourglass" => "hourglass",
		    "fa fa-hourglass-1" => "hourglass-1 (alias)",
		    "fa fa-hourglass-2" => "hourglass-2 (alias)",
		    "fa fa-hourglass-3" => "hourglass-3 (alias)",
		    "fa fa-hourglass-end" => "hourglass-end",
		    "fa fa-hourglass-half" => "hourglass-half",
		    "fa fa-hourglass-o" => "hourglass-o",
		    "fa fa-hourglass-start" => "hourglass-start",
		    "fa fa-i-cursor" => "i-cursor",
		    "fa fa-id-badge" => "id-badge",
		    "fa fa-id-card" => "id-card",
		    "fa fa-id-card-o" => "id-card-o",
		    "fa fa-image" => "image (alias)",
		    "fa fa-inbox" => "inbox",
		    "fa fa-industry" => "industry",
		    "fa fa-info" => "info",
		    "fa fa-info-circle" => "info-circle",
		    "fa fa-institution" => "institution (alias)",
		    "fa fa-key" => "key",
		    "fa fa-keyboard-o" => "keyboard-o",
		    "fa fa-language" => "language",
		    "fa fa-laptop" => "laptop",
		    "fa fa-leaf" => "leaf",
		    "fa fa-legal" => "legal (alias)",
		    "fa fa-lemon-o" => "lemon-o",
		    "fa fa-level-down" => "level-down",
		    "fa fa-level-up" => "level-up",
		    "fa fa-life-bouy" => "life-bouy (alias)",
		    "fa fa-life-buoy" => "life-buoy (alias)",
		    "fa fa-life-ring" => "life-ring",
		    "fa fa-life-saver" => "life-saver (alias)",
		    "fa fa-lightbulb-o" => "lightbulb-o",
		    "fa fa-line-chart" => "line-chart",
		    "fa fa-location-arrow" => "location-arrow",
		    "fa fa-lock" => "lock",
		    "fa fa-low-vision" => "low-vision",
		    "fa fa-magic" => "magic",
		    "fa fa-magnet" => "magnet",
		    "fa fa-mail-forward" => "mail-forward (alias)",
		    "fa fa-mail-reply" => "mail-reply (alias)",
		    "fa fa-mail-reply-all" => "mail-reply-all (alias)",
		    "fa fa-male" => "male",
		    "fa fa-map" => "map",
		    "fa fa-map-marker" => "map-marker",
		    "fa fa-map-o" => "map-o",
		    "fa fa-map-pin" => "map-pin",
		    "fa fa-map-signs" => "map-signs",
		    "fa fa-meh-o" => "meh-o",
		    "fa fa-microchip" => "microchip",
		    "fa fa-microphone" => "microphone",
		    "fa fa-microphone-slash" => "microphone-slash",
		    "fa fa-minus" => "minus",
		    "fa fa-minus-circle" => "minus-circle",
		    "fa fa-minus-square" => "minus-square",
		    "fa fa-minus-square-o" => "minus-square-o",
		    "fa fa-mobile" => "mobile",
		    "fa fa-mobile-phone" => "mobile-phone (alias)",
		    "fa fa-money" => "money",
		    "fa fa-moon-o" => "moon-o",
		    "fa fa-mortar-board" => "mortar-board (alias)",
		    "fa fa-motorcycle" => "motorcycle",
		    "fa fa-mouse-pointer" => "mouse-pointer",
		    "fa fa-music" => "music",
		    "fa fa-navicon" => "navicon (alias)",
		    "fa fa-newspaper-o" => "newspaper-o",
		    "fa fa-object-group" => "object-group",
		    "fa fa-object-ungroup" => "object-ungroup",
		    "fa fa-paint-brush" => "paint-brush",
		    "fa fa-paper-plane" => "paper-plane",
		    "fa fa-paper-plane-o" => "paper-plane-o",
		    "fa fa-paw" => "paw",
		    "fa fa-pencil" => "pencil",
		    "fa fa-pencil-square" => "pencil-square",
		    "fa fa-pencil-square-o" => "pencil-square-o",
		    "fa fa-percent" => "percent",
		    "fa fa-phone" => "phone",
		    "fa fa-phone-square" => "phone-square",
		    "fa fa-photo" => "photo (alias)",
		    "fa fa-picture-o" => "picture-o",
		    "fa fa-pie-chart" => "pie-chart",
		    "fa fa-plane" => "plane",
		    "fa fa-plug" => "plug",
		    "fa fa-plus" => "plus",
		    "fa fa-plus-circle" => "plus-circle",
		    "fa fa-plus-square" => "plus-square",
		    "fa fa-plus-square-o" => "plus-square-o",
		    "fa fa-podcast" => "podcast",
		    "fa fa-power-off" => "power-off",
		    "fa fa-print" => "print",
		    "fa fa-puzzle-piece" => "puzzle-piece",
		    "fa fa-qrcode" => "qrcode",
		    "fa fa-question" => "question",
		    "fa fa-question-circle" => "question-circle",
		    "fa fa-question-circle-o" => "question-circle-o",
		    "fa fa-quote-left" => "quote-left",
		    "fa fa-quote-right" => "quote-right",
		    "fa fa-random" => "random",
		    "fa fa-recycle" => "recycle",
		    "fa fa-refresh" => "refresh",
		    "fa fa-registered" => "registered",
		    "fa fa-remove" => "remove (alias)",
		    "fa fa-reorder" => "reorder (alias)",
		    "fa fa-reply" => "reply",
		    "fa fa-reply-all" => "reply-all",
		    "fa fa-retweet" => "retweet",
		    "fa fa-road" => "road",
		    "fa fa-rocket" => "rocket",
		    "fa fa-rss" => "rss",
		    "fa fa-rss-square" => "rss-square",
		    "fa fa-s15" => "s15 (alias)",
		    "fa fa-search" => "search",
		    "fa fa-search-minus" => "search-minus",
		    "fa fa-search-plus" => "search-plus",
		    "fa fa-send" => "send (alias)",
		    "fa fa-send-o" => "send-o (alias)",
		    "fa fa-server" => "server",
		    "fa fa-share" => "share",
		    "fa fa-share-alt" => "share-alt",
		    "fa fa-share-alt-square" => "share-alt-square",
		    "fa fa-share-square" => "share-square",
		    "fa fa-share-square-o" => "share-square-o",
		    "fa fa-shield" => "shield",
		    "fa fa-ship" => "ship",
		    "fa fa-shopping-bag" => "shopping-bag",
		    "fa fa-shopping-basket" => "shopping-basket",
		    "fa fa-shopping-cart" => "shopping-cart",
		    "fa fa-shower" => "shower",
		    "fa fa-sign-in" => "sign-in",
		    "fa fa-sign-language" => "sign-language",
		    "fa fa-sign-out" => "sign-out",
		    "fa fa-signal" => "signal",
		    "fa fa-signing" => "signing (alias)",
		    "fa fa-sitemap" => "sitemap",
		    "fa fa-sliders" => "sliders",
		    "fa fa-smile-o" => "smile-o",
		    "fa fa-snowflake-o" => "snowflake-o",
		    "fa fa-soccer-ball-o" => "soccer-ball-o (alias)",
		    "fa fa-sort" => "sort",
		    "fa fa-sort-alpha-asc" => "sort-alpha-asc",
		    "fa fa-sort-alpha-desc" => "sort-alpha-desc",
		    "fa fa-sort-amount-asc" => "sort-amount-asc",
		    "fa fa-sort-amount-desc" => "sort-amount-desc",
		    "fa fa-sort-asc" => "sort-asc",
		    "fa fa-sort-desc" => "sort-desc",
		    "fa fa-sort-down" => "sort-down (alias)",
		    "fa fa-sort-numeric-asc" => "sort-numeric-asc",
		    "fa fa-sort-numeric-desc" => "sort-numeric-desc",
		    "fa fa-sort-up" => "sort-up (alias)",
		    "fa fa-space-shuttle" => "space-shuttle",
		    "fa fa-spinner" => "spinner",
		    "fa fa-spoon" => "spoon",
		    "fa fa-square" => "square",
		    "fa fa-square-o" => "square-o",
		    "fa fa-star" => "star",
		    "fa fa-star-half" => "star-half",
		    "fa fa-star-half-empty" => "star-half-empty (alias)",
		    "fa fa-star-half-full" => "star-half-full (alias)",
		    "fa fa-star-half-o" => "star-half-o",
		    "fa fa-star-o" => "star-o",
		    "fa fa-sticky-note" => "sticky-note",
		    "fa fa-sticky-note-o" => "sticky-note-o",
		    "fa fa-street-view" => "street-view",
		    "fa fa-suitcase" => "suitcase",
		    "fa fa-sun-o" => "sun-o",
		    "fa fa-support" => "support (alias)",
		    "fa fa-tablet" => "tablet",
		    "fa fa-tachometer" => "tachometer",
		    "fa fa-tag" => "tag",
		    "fa fa-tags" => "tags",
		    "fa fa-tasks" => "tasks",
		    "fa fa-taxi" => "taxi",
		    "fa fa-television" => "television",
		    "fa fa-terminal" => "terminal",
		    "fa fa-thermometer" => "thermometer (alias)",
		    "fa fa-thermometer-0" => "thermometer-0 (alias)",
		    "fa fa-thermometer-1" => "thermometer-1 (alias)",
		    "fa fa-thermometer-2" => "thermometer-2 (alias)",
		    "fa fa-thermometer-3" => "thermometer-3 (alias)",
		    "fa fa-thermometer-4" => "thermometer-4 (alias)",
		    "fa fa-thermometer-empty" => "thermometer-empty",
		    "fa fa-thermometer-full" => "thermometer-full",
		    "fa fa-thermometer-half" => "thermometer-half",
		    "fa fa-thermometer-quarter" => "thermometer-quarter",
		    "fa fa-thermometer-three-quarters" => "thermometer-three-quarters",
		    "fa fa-thumb-tack" => "thumb-tack",
		    "fa fa-thumbs-down" => "thumbs-down",
		    "fa fa-thumbs-o-down" => "thumbs-o-down",
		    "fa fa-thumbs-o-up" => "thumbs-o-up",
		    "fa fa-thumbs-up" => "thumbs-up",
		    "fa fa-ticket" => "ticket",
		    "fa fa-times" => "times",
		    "fa fa-times-circle" => "times-circle",
		    "fa fa-times-circle-o" => "times-circle-o",
		    "fa fa-times-rectangle" => "times-rectangle (alias)",
		    "fa fa-times-rectangle-o" => "times-rectangle-o (alias)",
		    "fa fa-tint" => "tint",
		    "fa fa-toggle-down" => "toggle-down (alias)",
		    "fa fa-toggle-left" => "toggle-left (alias)",
		    "fa fa-toggle-off" => "toggle-off",
		    "fa fa-toggle-on" => "toggle-on",
		    "fa fa-toggle-right" => "toggle-right (alias)",
		    "fa fa-toggle-up" => "toggle-up (alias)",
		    "fa fa-trademark" => "trademark",
		    "fa fa-trash" => "trash",
		    "fa fa-trash-o" => "trash-o",
		    "fa fa-tree" => "tree",
		    "fa fa-trophy" => "trophy",
		    "fa fa-truck" => "truck",
		    "fa fa-tty" => "tty",
		    "fa fa-tv" => "tv (alias)",
		    "fa fa-umbrella" => "umbrella",
		    "fa fa-universal-access" => "universal-access",
		    "fa fa-university" => "university",
		    "fa fa-unlock" => "unlock",
		    "fa fa-unlock-alt" => "unlock-alt",
		    "fa fa-unsorted" => "unsorted (alias)",
		    "fa fa-upload" => "upload",
		    "fa fa-user" => "user",
		    "fa fa-user-circle" => "user-circle",
		    "fa fa-user-circle-o" => "user-circle-o",
		    "fa fa-user-o" => "user-o",
		    "fa fa-user-plus" => "user-plus",
		    "fa fa-user-secret" => "user-secret",
		    "fa fa-user-times" => "user-times",
		    "fa fa-users" => "users",
		    "fa fa-vcard" => "vcard (alias)",
		    "fa fa-vcard-o" => "vcard-o (alias)",
		    "fa fa-video-camera" => "video-camera",
		    "fa fa-volume-control-phone" => "volume-control-phone",
		    "fa fa-volume-down" => "volume-down",
		    "fa fa-volume-off" => "volume-off",
		    "fa fa-volume-up" => "volume-up",
		    "fa fa-warning" => "warning (alias)",
		    "fa fa-wheelchair" => "wheelchair",
		    "fa fa-wheelchair-alt" => "wheelchair-alt",
		    "fa fa-wifi" => "wifi",
		    "fa fa-window-close" => "window-close",
		    "fa fa-window-close-o" => "window-close-o",
		    "fa fa-window-maximize" => "window-maximize",
		    "fa fa-window-minimize" => "window-minimize",
		    "fa fa-window-restore" => "window-restore",
		    "fa fa-wrench" => "wrench",
		    "fa fa-american-sign-language-interpreting" => "american-sign-language-interpreting",
		    "fa fa-asl-interpreting" => "asl-interpreting (alias)",
		    "fa fa-assistive-listening-systems" => "assistive-listening-systems",
		    "fa fa-audio-description" => "audio-description",
		    "fa fa-blind" => "blind",
		    "fa fa-braille" => "braille",
		    "fa fa-cc" => "cc",
		    "fa fa-deaf" => "deaf",
		    "fa fa-deafness" => "deafness (alias)",
		    "fa fa-hard-of-hearing" => "hard-of-hearing (alias)",
		    "fa fa-low-vision" => "low-vision",
		    "fa fa-question-circle-o" => "question-circle-o",
		    "fa fa-sign-language" => "sign-language",
		    "fa fa-signing" => "signing (alias)",
		    "fa fa-tty" => "tty",
		    "fa fa-universal-access" => "universal-access",
		    "fa fa-volume-control-phone" => "volume-control-phone",
		    "fa fa-wheelchair" => "wheelchair",
		    "fa fa-wheelchair-alt" => "wheelchair-alt",
		    "fa fa-hand-grab-o" => "hand-grab-o (alias)",
		    "fa fa-hand-lizard-o" => "hand-lizard-o",
		    "fa fa-hand-o-down" => "hand-o-down",
		    "fa fa-hand-o-left" => "hand-o-left",
		    "fa fa-hand-o-right" => "hand-o-right",
		    "fa fa-hand-o-up" => "hand-o-up",
		    "fa fa-hand-paper-o" => "hand-paper-o",
		    "fa fa-hand-peace-o" => "hand-peace-o",
		    "fa fa-hand-pointer-o" => "hand-pointer-o",
		    "fa fa-hand-rock-o" => "hand-rock-o",
		    "fa fa-hand-scissors-o" => "hand-scissors-o",
		    "fa fa-hand-spock-o" => "hand-spock-o",
		    "fa fa-hand-stop-o" => "hand-stop-o (alias)",
		    "fa fa-thumbs-down" => "thumbs-down",
		    "fa fa-thumbs-o-down" => "thumbs-o-down",
		    "fa fa-thumbs-o-up" => "thumbs-o-up",
		    "fa fa-thumbs-up" => "thumbs-up",
		    "fa fa-ambulance" => "ambulance",
		    "fa fa-automobile" => "automobile (alias)",
		    "fa fa-bicycle" => "bicycle",
		    "fa fa-bus" => "bus",
		    "fa fa-cab" => "cab (alias)",
		    "fa fa-car" => "car",
		    "fa fa-fighter-jet" => "fighter-jet",
		    "fa fa-motorcycle" => "motorcycle",
		    "fa fa-plane" => "plane",
		    "fa fa-rocket" => "rocket",
		    "fa fa-ship" => "ship",
		    "fa fa-space-shuttle" => "space-shuttle",
		    "fa fa-subway" => "subway",
		    "fa fa-taxi" => "taxi",
		    "fa fa-train" => "train",
		    "fa fa-truck" => "truck",
		    "fa fa-wheelchair" => "wheelchair",
		    "fa fa-wheelchair-alt" => "wheelchair-alt",
		    "fa fa-genderless" => "genderless",
		    "fa fa-intersex" => "intersex (alias)",
		    "fa fa-mars" => "mars",
		    "fa fa-mars-double" => "mars-double",
		    "fa fa-mars-stroke" => "mars-stroke",
		    "fa fa-mars-stroke-h" => "mars-stroke-h",
		    "fa fa-mars-stroke-v" => "mars-stroke-v",
		    "fa fa-mercury" => "mercury",
		    "fa fa-neuter" => "neuter",
		    "fa fa-transgender" => "transgender",
		    "fa fa-transgender-alt" => "transgender-alt",
		    "fa fa-venus" => "venus",
		    "fa fa-venus-double" => "venus-double",
		    "fa fa-venus-mars" => "venus-mars",
		    "fa fa-file" => "file",
		    "fa fa-file-archive-o" => "file-archive-o",
		    "fa fa-file-audio-o" => "file-audio-o",
		    "fa fa-file-code-o" => "file-code-o",
		    "fa fa-file-excel-o" => "file-excel-o",
		    "fa fa-file-image-o" => "file-image-o",
		    "fa fa-file-movie-o" => "file-movie-o (alias)",
		    "fa fa-file-o" => "file-o",
		    "fa fa-file-pdf-o" => "file-pdf-o",
		    "fa fa-file-photo-o" => "file-photo-o (alias)",
		    "fa fa-file-picture-o" => "file-picture-o (alias)",
		    "fa fa-file-powerpoint-o" => "file-powerpoint-o",
		    "fa fa-file-sound-o" => "file-sound-o (alias)",
		    "fa fa-file-text" => "file-text",
		    "fa fa-file-text-o" => "file-text-o",
		    "fa fa-file-video-o" => "file-video-o",
		    "fa fa-file-word-o" => "file-word-o",
		    "fa fa-file-zip-o" => "file-zip-o (alias)",
		    "fa fa-circle-o-notch" => "circle-o-notch",
		    "fa fa-cog" => "cog",
		    "fa fa-gear" => "gear (alias)",
		    "fa fa-refresh" => "refresh",
		    "fa fa-spinner" => "spinner",
		    "fa fa-check-square" => "check-square",
		    "fa fa-check-square-o" => "check-square-o",
		    "fa fa-circle" => "circle",
		    "fa fa-circle-o" => "circle-o",
		    "fa fa-dot-circle-o" => "dot-circle-o",
		    "fa fa-minus-square" => "minus-square",
		    "fa fa-minus-square-o" => "minus-square-o",
		    "fa fa-plus-square" => "plus-square",
		    "fa fa-plus-square-o" => "plus-square-o",
		    "fa fa-square" => "square",
		    "fa fa-square-o" => "square-o",
		    "fa fa-cc-amex" => "cc-amex",
		    "fa fa-cc-diners-club" => "cc-diners-club",
		    "fa fa-cc-discover" => "cc-discover",
		    "fa fa-cc-jcb" => "cc-jcb",
		    "fa fa-cc-mastercard" => "cc-mastercard",
		    "fa fa-cc-paypal" => "cc-paypal",
		    "fa fa-cc-stripe" => "cc-stripe",
		    "fa fa-cc-visa" => "cc-visa",
		    "fa fa-credit-card" => "credit-card",
		    "fa fa-credit-card-alt" => "credit-card-alt",
		    "fa fa-google-wallet" => "google-wallet",
		    "fa fa-paypal" => "paypal",
		    "fa fa-area-chart" => "area-chart",
		    "fa fa-bar-chart" => "bar-chart",
		    "fa fa-bar-chart-o" => "bar-chart-o (alias)",
		    "fa fa-line-chart" => "line-chart",
		    "fa fa-pie-chart" => "pie-chart",
		    "fa fa-bitcoin" => "bitcoin (alias)",
		    "fa fa-btc" => "btc",
		    "fa fa-cny" => "cny (alias)",
		    "fa fa-dollar" => "dollar (alias)",
		    "fa fa-eur" => "eur",
		    "fa fa-euro" => "euro (alias)",
		    "fa fa-gbp" => "gbp",
		    "fa fa-gg" => "gg",
		    "fa fa-gg-circle" => "gg-circle",
		    "fa fa-ils" => "ils",
		    "fa fa-inr" => "inr",
		    "fa fa-jpy" => "jpy",
		    "fa fa-krw" => "krw",
		    "fa fa-money" => "money",
		    "fa fa-rmb" => "rmb (alias)",
		    "fa fa-rouble" => "rouble (alias)",
		    "fa fa-rub" => "rub",
		    "fa fa-ruble" => "ruble (alias)",
		    "fa fa-rupee" => "rupee (alias)",
		    "fa fa-shekel" => "shekel (alias)",
		    "fa fa-sheqel" => "sheqel (alias)",
		    "fa fa-try" => "try",
		    "fa fa-turkish-lira" => "turkish-lira (alias)",
		    "fa fa-usd" => "usd",
		    "fa fa-won" => "won (alias)",
		    "fa fa-yen" => "yen (alias)",
		    "fa fa-align-center" => "align-center",
		    "fa fa-align-justify" => "align-justify",
		    "fa fa-align-left" => "align-left",
		    "fa fa-align-right" => "align-right",
		    "fa fa-bold" => "bold",
		    "fa fa-chain" => "chain (alias)",
		    "fa fa-chain-broken" => "chain-broken",
		    "fa fa-clipboard" => "clipboard",
		    "fa fa-columns" => "columns",
		    "fa fa-copy" => "copy (alias)",
		    "fa fa-cut" => "cut (alias)",
		    "fa fa-dedent" => "dedent (alias)",
		    "fa fa-eraser" => "eraser",
		    "fa fa-file" => "file",
		    "fa fa-file-o" => "file-o",
		    "fa fa-file-text" => "file-text",
		    "fa fa-file-text-o" => "file-text-o",
		    "fa fa-files-o" => "files-o",
		    "fa fa-floppy-o" => "floppy-o",
		    "fa fa-font" => "font",
		    "fa fa-header" => "header",
		    "fa fa-indent" => "indent",
		    "fa fa-italic" => "italic",
		    "fa fa-link" => "link",
		    "fa fa-list" => "list",
		    "fa fa-list-alt" => "list-alt",
		    "fa fa-list-ol" => "list-ol",
		    "fa fa-list-ul" => "list-ul",
		    "fa fa-outdent" => "outdent",
		    "fa fa-paperclip" => "paperclip",
		    "fa fa-paragraph" => "paragraph",
		    "fa fa-paste" => "paste (alias)",
		    "fa fa-repeat" => "repeat",
		    "fa fa-rotate-left" => "rotate-left (alias)",
		    "fa fa-rotate-right" => "rotate-right (alias)",
		    "fa fa-save" => "save (alias)",
		    "fa fa-scissors" => "scissors",
		    "fa fa-strikethrough" => "strikethrough",
		    "fa fa-subscript" => "subscript",
		    "fa fa-superscript" => "superscript",
		    "fa fa-table" => "table",
		    "fa fa-text-height" => "text-height",
		    "fa fa-text-width" => "text-width",
		    "fa fa-th" => "th",
		    "fa fa-th-large" => "th-large",
		    "fa fa-th-list" => "th-list",
		    "fa fa-underline" => "underline",
		    "fa fa-undo" => "undo",
		    "fa fa-unlink" => "unlink (alias)",
		    "fa fa-angle-double-down" => "angle-double-down",
		    "fa fa-angle-double-left" => "angle-double-left",
		    "fa fa-angle-double-right" => "angle-double-right",
		    "fa fa-angle-double-up" => "angle-double-up",
		    "fa fa-angle-down" => "angle-down",
		    "fa fa-angle-left" => "angle-left",
		    "fa fa-angle-right" => "angle-right",
		    "fa fa-angle-up" => "angle-up",
		    "fa fa-arrow-circle-down" => "arrow-circle-down",
		    "fa fa-arrow-circle-left" => "arrow-circle-left",
		    "fa fa-arrow-circle-o-down" => "arrow-circle-o-down",
		    "fa fa-arrow-circle-o-left" => "arrow-circle-o-left",
		    "fa fa-arrow-circle-o-right" => "arrow-circle-o-right",
		    "fa fa-arrow-circle-o-up" => "arrow-circle-o-up",
		    "fa fa-arrow-circle-right" => "arrow-circle-right",
		    "fa fa-arrow-circle-up" => "arrow-circle-up",
		    "fa fa-arrow-down" => "arrow-down",
		    "fa fa-arrow-left" => "arrow-left",
		    "fa fa-arrow-right" => "arrow-right",
		    "fa fa-arrow-up" => "arrow-up",
		    "fa fa-arrows" => "arrows",
		    "fa fa-arrows-alt" => "arrows-alt",
		    "fa fa-arrows-h" => "arrows-h",
		    "fa fa-arrows-v" => "arrows-v",
		    "fa fa-caret-down" => "caret-down",
		    "fa fa-caret-left" => "caret-left",
		    "fa fa-caret-right" => "caret-right",
		    "fa fa-caret-square-o-down" => "caret-square-o-down",
		    "fa fa-caret-square-o-left" => "caret-square-o-left",
		    "fa fa-caret-square-o-right" => "caret-square-o-right",
		    "fa fa-caret-square-o-up" => "caret-square-o-up",
		    "fa fa-caret-up" => "caret-up",
		    "fa fa-chevron-circle-down" => "chevron-circle-down",
		    "fa fa-chevron-circle-left" => "chevron-circle-left",
		    "fa fa-chevron-circle-right" => "chevron-circle-right",
		    "fa fa-chevron-circle-up" => "chevron-circle-up",
		    "fa fa-chevron-down" => "chevron-down",
		    "fa fa-chevron-left" => "chevron-left",
		    "fa fa-chevron-right" => "chevron-right",
		    "fa fa-chevron-up" => "chevron-up",
		    "fa fa-exchange" => "exchange",
		    "fa fa-hand-o-down" => "hand-o-down",
		    "fa fa-hand-o-left" => "hand-o-left",
		    "fa fa-hand-o-right" => "hand-o-right",
		    "fa fa-hand-o-up" => "hand-o-up",
		    "fa fa-long-arrow-down" => "long-arrow-down",
		    "fa fa-long-arrow-left" => "long-arrow-left",
		    "fa fa-long-arrow-right" => "long-arrow-right",
		    "fa fa-long-arrow-up" => "long-arrow-up",
		    "fa fa-toggle-down" => "toggle-down (alias)",
		    "fa fa-toggle-left" => "toggle-left (alias)",
		    "fa fa-toggle-right" => "toggle-right (alias)",
		    "fa fa-toggle-up" => "toggle-up (alias)",
		    "fa fa-arrows-alt" => "arrows-alt",
		    "fa fa-backward" => "backward",
		    "fa fa-compress" => "compress",
		    "fa fa-eject" => "eject",
		    "fa fa-expand" => "expand",
		    "fa fa-fast-backward" => "fast-backward",
		    "fa fa-fast-forward" => "fast-forward",
		    "fa fa-forward" => "forward",
		    "fa fa-pause" => "pause",
		    "fa fa-pause-circle" => "pause-circle",
		    "fa fa-pause-circle-o" => "pause-circle-o",
		    "fa fa-play" => "play",
		    "fa fa-play-circle" => "play-circle",
		    "fa fa-play-circle-o" => "play-circle-o",
		    "fa fa-random" => "random",
		    "fa fa-step-backward" => "step-backward",
		    "fa fa-step-forward" => "step-forward",
		    "fa fa-stop" => "stop",
		    "fa fa-stop-circle" => "stop-circle",
		    "fa fa-stop-circle-o" => "stop-circle-o",
		    "fa fa-youtube-play" => "youtube-play",
		    "fa fa-500px" => "500px",
		    "fa fa-adn" => "adn",
		    "fa fa-amazon" => "amazon",
		    "fa fa-android" => "android",
		    "fa fa-angellist" => "angellist",
		    "fa fa-apple" => "apple",
		    "fa fa-bandcamp" => "bandcamp",
		    "fa fa-behance" => "behance",
		    "fa fa-behance-square" => "behance-square",
		    "fa fa-bitbucket" => "bitbucket",
		    "fa fa-bitbucket-square" => "bitbucket-square",
		    "fa fa-bitcoin" => "bitcoin (alias)",
		    "fa fa-black-tie" => "black-tie",
		    "fa fa-bluetooth" => "bluetooth",
		    "fa fa-bluetooth-b" => "bluetooth-b",
		    "fa fa-btc" => "btc",
		    "fa fa-buysellads" => "buysellads",
		    "fa fa-cc-amex" => "cc-amex",
		    "fa fa-cc-diners-club" => "cc-diners-club",
		    "fa fa-cc-discover" => "cc-discover",
		    "fa fa-cc-jcb" => "cc-jcb",
		    "fa fa-cc-mastercard" => "cc-mastercard",
		    "fa fa-cc-paypal" => "cc-paypal",
		    "fa fa-cc-stripe" => "cc-stripe",
		    "fa fa-cc-visa" => "cc-visa",
		    "fa fa-chrome" => "chrome",
		    "fa fa-codepen" => "codepen",
		    "fa fa-codiepie" => "codiepie",
		    "fa fa-connectdevelop" => "connectdevelop",
		    "fa fa-contao" => "contao",
		    "fa fa-css3" => "css3",
		    "fa fa-dashcube" => "dashcube",
		    "fa fa-delicious" => "delicious",
		    "fa fa-deviantart" => "deviantart",
		    "fa fa-digg" => "digg",
		    "fa fa-dribbble" => "dribbble",
		    "fa fa-dropbox" => "dropbox",
		    "fa fa-drupal" => "drupal",
		    "fa fa-edge" => "edge",
		    "fa fa-eercast" => "eercast",
		    "fa fa-empire" => "empire",
		    "fa fa-envira" => "envira",
		    "fa fa-etsy" => "etsy",
		    "fa fa-expeditedssl" => "expeditedssl",
		    "fa fa-fa" => "fa (alias)",
		    "fa fa-facebook" => "facebook",
		    "fa fa-facebook-f" => "facebook-f (alias)",
		    "fa fa-facebook-official" => "facebook-official",
		    "fa fa-facebook-square" => "facebook-square",
		    "fa fa-firefox" => "firefox",
		    "fa fa-first-order" => "first-order",
		    "fa fa-flickr" => "flickr",
		    "fa fa-font-awesome" => "font-awesome",
		    "fa fa-fonticons" => "fonticons",
		    "fa fa-fort-awesome" => "fort-awesome",
		    "fa fa-forumbee" => "forumbee",
		    "fa fa-foursquare" => "foursquare",
		    "fa fa-free-code-camp" => "free-code-camp",
		    "fa fa-ge" => "ge (alias)",
		    "fa fa-get-pocket" => "get-pocket",
		    "fa fa-gg" => "gg",
		    "fa fa-gg-circle" => "gg-circle",
		    "fa fa-git" => "git",
		    "fa fa-git-square" => "git-square",
		    "fa fa-github" => "github",
		    "fa fa-github-alt" => "github-alt",
		    "fa fa-github-square" => "github-square",
		    "fa fa-gitlab" => "gitlab",
		    "fa fa-gittip" => "gittip (alias)",
		    "fa fa-glide" => "glide",
		    "fa fa-glide-g" => "glide-g",
		    "fa fa-google" => "google",
		    "fa fa-google-plus" => "google-plus",
		    "fa fa-google-plus-circle" => "google-plus-circle (alias)",
		    "fa fa-google-plus-official" => "google-plus-official",
		    "fa fa-google-plus-square" => "google-plus-square",
		    "fa fa-google-wallet" => "google-wallet",
		    "fa fa-gratipay" => "gratipay",
		    "fa fa-grav" => "grav",
		    "fa fa-hacker-news" => "hacker-news",
		    "fa fa-houzz" => "houzz",
		    "fa fa-html5" => "html5",
		    "fa fa-imdb" => "imdb",
		    "fa fa-instagram" => "instagram",
		    "fa fa-internet-explorer" => "internet-explorer",
		    "fa fa-ioxhost" => "ioxhost",
		    "fa fa-joomla" => "joomla",
		    "fa fa-jsfiddle" => "jsfiddle",
		    "fa fa-lastfm" => "lastfm",
		    "fa fa-lastfm-square" => "lastfm-square",
		    "fa fa-leanpub" => "leanpub",
		    "fa fa-linkedin" => "linkedin",
		    "fa fa-linkedin-square" => "linkedin-square",
		    "fa fa-linode" => "linode",
		    "fa fa-linux" => "linux",
		    "fa fa-maxcdn" => "maxcdn",
		    "fa fa-meanpath" => "meanpath",
		    "fa fa-medium" => "medium",
		    "fa fa-meetup" => "meetup",
		    "fa fa-mixcloud" => "mixcloud",
		    "fa fa-modx" => "modx",
		    "fa fa-odnoklassniki" => "odnoklassniki",
		    "fa fa-odnoklassniki-square" => "odnoklassniki-square",
		    "fa fa-opencart" => "opencart",
		    "fa fa-openid" => "openid",
		    "fa fa-opera" => "opera",
		    "fa fa-optin-monster" => "optin-monster",
		    "fa fa-pagelines" => "pagelines",
		    "fa fa-paypal" => "paypal",
		    "fa fa-pied-piper" => "pied-piper",
		    "fa fa-pied-piper-alt" => "pied-piper-alt",
		    "fa fa-pied-piper-pp" => "pied-piper-pp",
		    "fa fa-pinterest" => "pinterest",
		    "fa fa-pinterest-p" => "pinterest-p",
		    "fa fa-pinterest-square" => "pinterest-square",
		    "fa fa-product-hunt" => "product-hunt",
		    "fa fa-qq" => "qq",
		    "fa fa-quora" => "quora",
		    "fa fa-ra" => "ra (alias)",
		    "fa fa-ravelry" => "ravelry",
		    "fa fa-rebel" => "rebel",
		    "fa fa-reddit" => "reddit",
		    "fa fa-reddit-alien" => "reddit-alien",
		    "fa fa-reddit-square" => "reddit-square",
		    "fa fa-renren" => "renren",
		    "fa fa-resistance" => "resistance (alias)",
		    "fa fa-safari" => "safari",
		    "fa fa-scribd" => "scribd",
		    "fa fa-sellsy" => "sellsy",
		    "fa fa-share-alt" => "share-alt",
		    "fa fa-share-alt-square" => "share-alt-square",
		    "fa fa-shirtsinbulk" => "shirtsinbulk",
		    "fa fa-simplybuilt" => "simplybuilt",
		    "fa fa-skyatlas" => "skyatlas",
		    "fa fa-skype" => "skype",
		    "fa fa-slack" => "slack",
		    "fa fa-slideshare" => "slideshare",
		    "fa fa-snapchat" => "snapchat",
		    "fa fa-snapchat-ghost" => "snapchat-ghost",
		    "fa fa-snapchat-square" => "snapchat-square",
		    "fa fa-soundcloud" => "soundcloud",
		    "fa fa-spotify" => "spotify",
		    "fa fa-stack-exchange" => "stack-exchange",
		    "fa fa-stack-overflow" => "stack-overflow",
		    "fa fa-steam" => "steam",
		    "fa fa-steam-square" => "steam-square",
		    "fa fa-stumbleupon" => "stumbleupon",
		    "fa fa-stumbleupon-circle" => "stumbleupon-circle",
		    "fa fa-superpowers" => "superpowers",
		    "fa fa-telegram" => "telegram",
		    "fa fa-tencent-weibo" => "tencent-weibo",
		    "fa fa-themeisle" => "themeisle",
		    "fa fa-trello" => "trello",
		    "fa fa-tripadvisor" => "tripadvisor",
		    "fa fa-tumblr" => "tumblr",
		    "fa fa-tumblr-square" => "tumblr-square",
		    "fa fa-twitch" => "twitch",
		    "fa fa-twitter" => "twitter",
		    "fa fa-twitter-square" => "twitter-square",
		    "fa fa-usb" => "usb",
		    "fa fa-viacoin" => "viacoin",
		    "fa fa-viadeo" => "viadeo",
		    "fa fa-viadeo-square" => "viadeo-square",
		    "fa fa-vimeo" => "vimeo",
		    "fa fa-vimeo-square" => "vimeo-square",
		    "fa fa-vine" => "vine",
		    "fa fa-vk" => "vk",
		    "fa fa-wechat" => "wechat (alias)",
		    "fa fa-weibo" => "weibo",
		    "fa fa-weixin" => "weixin",
		    "fa fa-whatsapp" => "whatsapp",
		    "fa fa-wikipedia-w" => "wikipedia-w",
		    "fa fa-windows" => "windows",
		    "fa fa-wordpress" => "wordpress",
		    "fa fa-wpbeginner" => "wpbeginner",
		    "fa fa-wpexplorer" => "wpexplorer",
		    "fa fa-wpforms" => "wpforms",
		    "fa fa-xing" => "xing",
		    "fa fa-xing-square" => "xing-square",
		    "fa fa-y-combinator" => "y-combinator",
		    "fa fa-y-combinator-square" => "y-combinator-square (alias)",
		    "fa fa-yahoo" => "yahoo",
		    "fa fa-yc" => "yc (alias)",
		    "fa fa-yc-square" => "yc-square (alias)",
		    "fa fa-yelp" => "yelp",
		    "fa fa-yoast" => "yoast",
		    "fa fa-youtube" => "youtube",
		    "fa fa-youtube-play" => "youtube-play",
		    "fa fa-youtube-square" => "youtube-square",
		    "fa fa-ambulance" => "ambulance",
		    "fa fa-h-square" => "h-square",
		    "fa fa-heart" => "heart",
		    "fa fa-heart-o" => "heart-o",
		    "fa fa-heartbeat" => "heartbeat",
		    "fa fa-hospital-o" => "hospital-o",
		    "fa fa-medkit" => "medkit",
		    "fa fa-plus-square" => "plus-square",
		    "fa fa-stethoscope" => "stethoscope",
		    "fa fa-user-md" => "user-md",
		    "fa fa-wheelchair" => "wheelchair",
		    "fa fa-wheelchair-alt" => "wheelchair-alt"
		);
	}
}
