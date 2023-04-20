<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container mt-4">
        <button id="speakButton" class="btn btn-warning"><i class="fa fa-microphone fa-2x"></i></button>
        <button id="pauseButton" class="btn btn-danger"><i class="fa fa-pause fa-2x"></i></button>
        <button id="resumeButton" class="btn btn-info"><i class="fa fa-play fa-2x"></i></button>
    </div>
    <div class="container mt-4" id="textToSpeak">
        <div class="container-fluid">
            <header class="mw-body-header vector-page-titlebar"
                style="display: flex; justify-content: flex-end; box-shadow: #a2a9b1 0px 1px; align-items: center; grid-area: titlebar / titlebar / titlebar / titlebar; color: #202122; font-size: 16px; background-color: #ffffff;">
                <h1 id="firstHeading" class="firstHeading mw-first-heading"
                    style="color: #000000; margin: 0px; padding: 0px; overflow: hidden; font-size: 1.8em; font-weight: normal; font-family: 'Linux Libertine', Georgia, Times, serif; line-height: 1.375; overflow-wrap: break-word; flex-grow: 1; border: 0px initial initial;">
                    <span class="mw-page-title-main">Taj Mahal</span></h1>
                <div id="p-lang-btn" class="vector-menu vector-dropdown vector-menu-dropdown mw-portlet mw-portlet-lang"
                    style="position: relative; float: right; margin-top: 2px; box-sizing: border-box; height: 2em; flex-shrink: 0; margin-right: -12px;">
                    <input id="p-lang-btn-checkbox" class="vector-menu-checkbox mw-interlanguage-selector"
                        style="margin: 0px; cursor: pointer; position: absolute; top: 0px; left: 0px; z-index: 1; opacity: 0; width: 167.188px; height: 32px; padding: 0px; display: block;"
                        role="button" type="checkbox" aria-haspopup="true" data-event-name="ui.dropdown-p-lang-btn"
                        aria-label="Go to an article in another language. Available in 157 languages"><label
                        id="p-lang-btn-label"
                        class="vector-menu-heading mw-ui-button mw-ui-quiet mw-ui-progressive mw-portlet-lang-heading-157"
                        style="background-color: transparent; color: #3366cc; display: flex; box-sizing: border-box; margin: 0px; border: 1px solid transparent; border-radius: 2px; cursor: pointer; vertical-align: middle; font-family: inherit; font-size: 1em; font-weight: bold; line-height: 1.28571em; text-align: center; appearance: none; min-height: 32px; min-width: 4em; max-width: 28.75em; padding: 5px 12px; transition-property: background-color, color, border-color, box-shadow; transition-duration: 100ms; user-select: none; opacity: 1;"
                        for="p-lang-btn-checkbox" aria-hidden="true"><span class="vector-menu-heading-label"
                            style="margin-left: 6px; font-size: 0.875em;">157 languages</span></label></div>
            </header>
            <div class="vector-page-toolbar"
                style="grid-area: toolbar / toolbar / toolbar / toolbar; color: #202122; font-size: 16px; background-color: #ffffff;">
                <div class="vector-page-toolbar-container"
                    style="display: flex; font-size: 0.8125em; box-shadow: #c8ccd1 0px 1px; margin-bottom: 1px;">
                    <div id="left-navigation" style="display: flex; margin-left: -8px; flex-grow: 1;">
                        <nav aria-label="Namespaces">
                            <div id="p-associated-pages"
                                class="vector-menu vector-menu-tabs mw-portlet mw-portlet-associated-pages"
                                style="float: left;">
                                <div class="vector-menu-content">
                                    <ul class="vector-menu-content-list"
                                        style="list-style: none; margin: 0px; padding: 0px;">
                                        <li id="ca-nstab-main" class="selected vector-tab-noicon mw-list-item"
                                            style="margin: 0px 8px; white-space: nowrap; float: left;"><a accesskey="c"
                                                class=""
                                                style="text-decoration-line: none; color: #202122; background: none; display: inline-flex; position: relative; cursor: pointer; max-height: 3.15385em; box-sizing: border-box; border-bottom: 1px solid; padding: 12px 0px 7px; margin-bottom: -1px;"
                                                title="View the content page [alt-shift-c]"
                                                href="https://en.wikipedia.org/wiki/Taj_Mahal"
                                                data-mw="interface">Article</a></li>
                                        <li id="ca-talk" class="vector-tab-noicon mw-list-item"
                                            style="margin: 0px 8px; white-space: nowrap; float: left;"><a accesskey="t"
                                                class=""
                                                style="text-decoration-line: none; color: #3366cc; background: none; display: inline-flex; position: relative; cursor: pointer; max-height: 3.15385em; box-sizing: border-box; padding: 12px 0px 7px; margin-bottom: -1px;"
                                                title="Discuss improvements to the content page [alt-shift-t]"
                                                href="https://en.wikipedia.org/wiki/Talk:Taj_Mahal" rel="discussion"
                                                data-mw="interface">Talk</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div id="right-navigation" class="vector-collapsible" style="display: flex; margin-right: -8px;">
                        <nav aria-label="Views">
                            <div id="p-views" class="vector-menu vector-menu-tabs mw-portlet mw-portlet-views"
                                style="float: left;">
                                <div class="vector-menu-content" style="left: auto; right: -1px;">
                                    <ul class="vector-menu-content-list"
                                        style="list-style: none; margin: 0px; padding: 0px;">
                                        <li id="ca-view" class="selected vector-tab-noicon mw-list-item"
                                            style="margin: 0px 8px; white-space: nowrap; float: left;"><a class=""
                                                style="text-decoration-line: none; color: #202122; background: none; display: inline-flex; position: relative; cursor: pointer; max-height: 3.15385em; box-sizing: border-box; border-bottom: 1px solid; padding: 12px 0px 7px; margin-bottom: -1px;"
                                                href="https://en.wikipedia.org/wiki/Taj_Mahal"
                                                data-mw="interface">Read</a></li>
                                        <li id="ca-viewsource" class="vector-tab-noicon mw-list-item"
                                            style="margin: 0px 8px; white-space: nowrap; float: left;"><a accesskey="e"
                                                class=""
                                                style="text-decoration-line: none; color: #3366cc; background: none; display: inline-flex; position: relative; cursor: pointer; max-height: 3.15385em; box-sizing: border-box; padding: 12px 0px 7px; margin-bottom: -1px;"
                                                title="This page is protected.
You can view its source [alt-shift-e]" href="https://en.wikipedia.org/w/index.php?title=Taj_Mahal&amp;action=edit"
                                                data-mw="interface">View source</a></li>
                                        <li id="ca-history" class="vector-tab-noicon mw-list-item"
                                            style="margin: 0px 8px; white-space: nowrap; float: left;"><a accesskey="h"
                                                class=""
                                                style="text-decoration-line: none; color: #3366cc; background: none; display: inline-flex; position: relative; cursor: pointer; max-height: 3.15385em; box-sizing: border-box; padding: 12px 0px 7px; margin-bottom: -1px;"
                                                title="Past revisions of this page [alt-shift-h]"
                                                href="https://en.wikipedia.org/w/index.php?title=Taj_Mahal&amp;action=history"
                                                data-mw="interface">View history</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <nav class="vector-page-tools-landmark" aria-label="More options">
                            <div id="vector-page-tools-dropdown"
                                class="vector-menu vector-dropdown vector-menu-dropdown vector-page-tools-dropdown"
                                style="position: relative; margin: 0px 8px; float: left;"><input
                                    id="vector-page-tools-dropdown-checkbox" class="vector-menu-checkbox "
                                    style="margin: 0px; cursor: pointer; position: absolute; top: 0px; left: 0px; z-index: 1; opacity: 0; width: 45.3594px; height: 34px; padding: 0px; display: block;"
                                    role="button" type="checkbox" aria-haspopup="true"
                                    data-event-name="ui.dropdown-vector-page-tools-dropdown" aria-label="Tools"><label
                                    id="vector-page-tools-dropdown-label" class="vector-menu-heading "
                                    style="display: inline-flex; white-space: nowrap; position: relative; cursor: pointer; max-height: 3.15385em; box-sizing: border-box; font-size: inherit; padding: 12px 0px 7px; margin-bottom: -1px;"
                                    for="vector-page-tools-dropdown-checkbox" aria-hidden="true"><span
                                        class="vector-menu-heading-label">Tools</span></label>
                                <div class="vector-menu-content vector-dropdown-content"
                                    style="position: absolute; top: 34px; left: auto; opacity: 0; height: 0px; visibility: hidden; overflow: hidden; margin: 0px; padding: 4px 0px; z-index: 3; border-style: solid; border-color: #a2a9b1; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px 0px; transition-property: opacity; transition-duration: 100ms; width: max-content; max-width: 200px; right: -1px;">
                                    <div id="vector-page-tools-unpinned-container" class="vector-unpinned-container">
                                        <div id="vector-page-tools" class="vector-page-tools vector-pinnable-element">
                                            <div class="vector-pinnable-header vector-page-tools-pinnable-header vector-pinnable-header-unpinned"
                                                style="align-items: center; padding: 6px 14px; font-size: 0.875rem; border-bottom-style: solid; border-bottom-color: #eaecf0;"
                                                data-feature-name="page-tools-pinned"
                                                data-pinnable-element-id="vector-page-tools"
                                                data-pinned-container-id="vector-page-tools-pinned-container"
                                                data-unpinned-container-id="vector-page-tools-unpinned-container"
                                                data-saved-pinned-state="false">
                                                <div class="vector-pinnable-header-label"
                                                    style="display: inline-block; color: #54595d; font-size: 0.875rem; margin: 0px; padding: 0px; border: 0px initial initial;">
                                                    &nbsp;</div>
                                                <button
                                                    class="vector-pinnable-header-toggle-button vector-pinnable-header-pin-button"
                                                    style="margin: 0px; padding: 0px; color: #3366cc; cursor: pointer; text-align: left; border: 0px initial initial;"
                                                    data-event-name="pinnable-header.vector-page-tools.pin"></button>
                                            </div>
                                            <div id="p-tb" class="vector-menu mw-portlet mw-portlet-tb"
                                                style="border-bottom-style: solid; border-bottom-color: #eaecf0;">
                                                <div class="vector-menu-heading"
                                                    style="display: flex; align-items: center; padding: 6px 14px; font-size: 0.875rem; align-self: center; color: #54595d; cursor: default; border-color: #c8ccd1;">
                                                    &nbsp;</div>
                                                <div class="vector-menu-content" style="left: auto; right: -1px;">
                                                    <ul class="vector-menu-content-list"
                                                        style="list-style: none; margin: 0px; padding: 0px;">
                                                        <li id="t-whatlinkshere" class="mw-list-item"
                                                            style="margin: 0px; padding: 0px;"></li>
                                                        <li id="t-recentchangeslinked" class="mw-list-item"
                                                            style="margin: 0px; padding: 0px;"></li>
                                                        <li id="t-specialpages" class="mw-list-item"
                                                            style="margin: 0px; padding: 0px;"></li>
                                                        <li id="t-permalink" class="mw-list-item"
                                                            style="margin: 0px; padding: 0px;"></li>
                                                        <li id="t-info" class="mw-list-item"
                                                            style="margin: 0px; padding: 0px;"></li>
                                                        <li id="t-cite" class="mw-list-item"
                                                            style="margin: 0px; padding: 0px;"></li>
                                                        <li id="t-wikibase" class="mw-list-item"
                                                            style="margin: 0px; padding: 0px;"></li>
                                                        <li id="wbc-editpage" class="mw-list-item mw-list-item-js"
                                                            style="margin: 0px; padding: 0px;"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="p-coll-print_export"
                                                class="vector-menu mw-portlet mw-portlet-coll-print_export"
                                                style="border-bottom-style: solid; border-bottom-color: #eaecf0;">
                                                <div class="vector-menu-heading"
                                                    style="display: flex; align-items: center; padding: 6px 14px; font-size: 0.875rem; align-self: center; color: #54595d; cursor: default; border-color: #c8ccd1;">
                                                    &nbsp;</div>
                                                <div class="vector-menu-content" style="left: auto; right: -1px;">
                                                    <ul class="vector-menu-content-list"
                                                        style="list-style: none; margin: 0px; padding: 0px;">
                                                        <li id="coll-download-as-rl" class="mw-list-item"
                                                            style="margin: 0px; padding: 0px;"></li>
                                                        <li id="t-print" class="mw-list-item"
                                                            style="margin: 0px; padding: 0px;"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="p-wikibase-otherprojects"
                                                class="vector-menu mw-portlet mw-portlet-wikibase-otherprojects">
                                                <div class="vector-menu-heading"
                                                    style="display: flex; align-items: center; padding: 6px 14px; font-size: 0.875rem; align-self: center; color: #54595d; cursor: default; border-color: #c8ccd1;">
                                                    &nbsp;</div>
                                                <div class="vector-menu-content" style="left: auto; right: -1px;">
                                                    <ul class="vector-menu-content-list"
                                                        style="list-style: none; margin: 0px; padding: 0px;">
                                                        <li class="wb-otherproject-link wb-otherproject-commons mw-list-item"
                                                            style="margin: 0px; padding: 0px;">&nbsp;</li>
                                                        <li class="wb-otherproject-link wb-otherproject-wikiquote mw-list-item"
                                                            style="margin: 0px; padding: 0px;">&nbsp;</li>
                                                        <li class="wb-otherproject-link wb-otherproject-wikivoyage badge-Q70893996 mw-list-item"
                                                            style="margin: 0px; padding: 0px;" title="">&nbsp;</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="vector-column-end"
                style="contain: paint; grid-area: columnEnd / columnEnd / columnEnd / columnEnd; overflow-anchor: none; color: #202122; font-size: 16px; background-color: #ffffff;">
                &nbsp;</div>
            <div id="bodyContent" class="vector-body ve-init-mw-desktopArticleTarget-targetContainer"
                style="font-size: calc(0.875em); line-height: 1.6; position: relative; z-index: 0; grid-area: content / content / content / content; color: #202122; background-color: #ffffff;"
                aria-labelledby="firstHeading" data-mw-ve-target-container="">
                <div class="vector-body-before-content" style="overflow: hidden;">
                    <div class="mw-indicators"
                        style="font-size: 0.875em; line-height: 1.6; position: relative; float: right; z-index: 1;">
                        <div id="mw-indicator-pp-default" class="mw-indicator" style="display: inline-block;">
                            <div class="mw-parser-output"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    title="This article is semi-protected."
                                    href="https://en.wikipedia.org/wiki/Wikipedia:Protection_policy#semi"><img
                                        style="border: 0px; vertical-align: middle;"
                                        src="https://upload.wikimedia.org/wikipedia/en/thumb/1/1b/Semi-protection-shackle.svg/20px-Semi-protection-shackle.svg.png"
                                        srcset="//upload.wikimedia.org/wikipedia/en/thumb/1/1b/Semi-protection-shackle.svg/30px-Semi-protection-shackle.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/1/1b/Semi-protection-shackle.svg/40px-Semi-protection-shackle.svg.png 2x"
                                        alt="Page semi-protected" width="20" height="20" data-file-width="512"
                                        data-file-height="512"></a></div>
                        </div>
                    </div>
                    <div id="siteSub" class="noprint" style="margin-top: 8px; font-size: 12.8px;">From Wikipedia, the
                        free encyclopedia</div>
                </div>
                <div id="contentSub"
                    style="font-size: 11.76px; line-height: 1.2em; color: #54595d; width: auto; margin: 8px 0px 0px;">
                    <div id="mw-content-subtitle"></div>
                </div>
                <div id="mw-content-text" class="mw-body-content mw-content-ltr" dir="ltr" lang="en"
                    style="margin-top: 16px;">
                    <div class="mw-parser-output">
                        <div class="hatnote navigation-not-searchable"
                            style="font-style: italic; padding-left: 1.6em; margin-bottom: 0.5em;" role="note">For other
                            uses, see&nbsp;<a class="mw-disambig"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Taj Mahal (disambiguation)"
                                href="https://en.wikipedia.org/wiki/Taj_Mahal_(disambiguation)">Taj Mahal
                                (disambiguation)</a>.</div>
                        <table class="infobox vcard"
                            style="font-size: 12.32px; border: 1px solid #a2a9b1; border-spacing: 3px; background-color: #f8f9fa; color: black; margin: 0.5em 0px 0.5em 1em; padding: 0.2em; float: right; clear: right; line-height: 1.5em; width: 22em;">
                            <tbody>
                                <tr>
                                    <th class="infobox-above fn org"
                                        style="vertical-align: top; text-align: center; font-size: 15.4px;" colspan="2">
                                        Taj Mahal</th>
                                </tr>
                                <tr>
                                    <td class="infobox-image" style="vertical-align: top; text-align: center;"
                                        colspan="2"><a class="image"
                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                            href="https://en.wikipedia.org/wiki/File:Taj_Mahal,_Agra,_India_edit3.jpg"><img
                                                style="border: 0px; vertical-align: middle;"
                                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Taj_Mahal%2C_Agra%2C_India_edit3.jpg/250px-Taj_Mahal%2C_Agra%2C_India_edit3.jpg"
                                                srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Taj_Mahal%2C_Agra%2C_India_edit3.jpg/375px-Taj_Mahal%2C_Agra%2C_India_edit3.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Taj_Mahal%2C_Agra%2C_India_edit3.jpg/500px-Taj_Mahal%2C_Agra%2C_India_edit3.jpg 2x"
                                                alt="Taj Mahal, Agra, India edit3.jpg" width="250" height="173"
                                                data-file-width="3144" data-file-height="2173"></a></td>
                                </tr>
                                <tr>
                                    <th class="infobox-label" style="vertical-align: top; text-align: left;"
                                        scope="row">Location</th>
                                    <td class="infobox-data" style="vertical-align: top;"><a
                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                            title="Agra" href="https://en.wikipedia.org/wiki/Agra">Agra</a>,&nbsp;<a
                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                            title="Uttar Pradesh"
                                            href="https://en.wikipedia.org/wiki/Uttar_Pradesh">Uttar Pradesh</a>, India
                                    </td>
                                </tr>
                                <tr>
                                    <th class="infobox-label" style="vertical-align: top; text-align: left;"
                                        scope="row">Coordinates</th>
                                    <td class="infobox-data" style="vertical-align: top;"><span
                                            class="plainlinks nourlexpansion"><span style="white-space: nowrap;"><img
                                                    class="wmamapbutton noprint"
                                                    style="border: 0px; vertical-align: middle; padding: 0px 3px 0px 0px; cursor: pointer;"
                                                    title="Show location on an interactive map"
                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/WMA_button2b.png/17px-WMA_button2b.png"
                                                    srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/55/WMA_button2b.png/17px-WMA_button2b.png 1x, //upload.wikimedia.org/wikipedia/commons/thumb/5/55/WMA_button2b.png/34px-WMA_button2b.png 2x"
                                                    alt=""><a class="external text"
                                                    style="text-decoration-line: none; color: #3366cc; overflow-wrap: break-word; white-space: normal; background: none !important; padding: 0px !important;"
                                                    href="https://geohack.toolforge.org/geohack.php?pagename=Taj_Mahal&amp;params=27_10_30_N_78_02_31_E_type:landmark_region:IN-UP"><span
                                                        class="geo-default" style="display: inline;"><span
                                                            class="geo-dms" style="display: inline;"
                                                            title="Maps, aerial photos, and other data for this location"><span
                                                                class="latitude"
                                                                style="white-space: nowrap;">27°10′30″N</span>&nbsp;<span
                                                                class="longitude"
                                                                style="white-space: nowrap;">78°02′31″E</span></span></span></a></span></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="infobox-label" style="vertical-align: top; text-align: left;"
                                        scope="row">Area</th>
                                    <td class="infobox-data" style="vertical-align: top;">17 hectares (42 acres)<sup
                                            id="cite_ref-1" class="reference"
                                            style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 9.856px;"><a
                                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                                href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-1">[1]</a></sup>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="infobox-label" style="vertical-align: top; text-align: left;"
                                        scope="row">Height</th>
                                    <td class="infobox-data" style="vertical-align: top;">73&nbsp;m (240&nbsp;ft)</td>
                                </tr>
                                <tr>
                                    <th class="infobox-label" style="vertical-align: top; text-align: left;"
                                        scope="row">Built</th>
                                    <td class="infobox-data" style="vertical-align: top;">1631–1653<sup
                                            id="cite_ref-FOOTNOTEDuTemple200332_2-0" class="reference"
                                            style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 9.856px;"><a
                                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                                href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-FOOTNOTEDuTemple200332-2">[2]</a></sup>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="infobox-label" style="vertical-align: top; text-align: left;"
                                        scope="row">Built for</th>
                                    <td class="infobox-data" style="vertical-align: top;"><a
                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                            title="Mumtaz Mahal"
                                            href="https://en.wikipedia.org/wiki/Mumtaz_Mahal">Mumtaz Mahal</a></td>
                                </tr>
                                <tr>
                                    <th class="infobox-label" style="vertical-align: top; text-align: left;"
                                        scope="row">Architect</th>
                                    <td class="infobox-data" style="vertical-align: top;"><a
                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                            title="Ustad Ahmad Lahori"
                                            href="https://en.wikipedia.org/wiki/Ustad_Ahmad_Lahori">Ustad Ahmad
                                            Lahori</a></td>
                                </tr>
                                <tr>
                                    <th class="infobox-label" style="vertical-align: top; text-align: left;"
                                        scope="row">Architectural style(s)</th>
                                    <td class="infobox-data" style="vertical-align: top;"><a
                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                            title="Mughal architecture"
                                            href="https://en.wikipedia.org/wiki/Mughal_architecture">Mughal
                                            architecture</a></td>
                                </tr>
                                <tr>
                                    <th class="infobox-label" style="vertical-align: top; text-align: left;"
                                        scope="row">Visitors</th>
                                    <td class="infobox-data" style="vertical-align: top;">6,532,366<sup
                                            id="cite_ref-Visitors2019_3-0" class="reference"
                                            style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 9.856px;"><a
                                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                                href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-Visitors2019-3">[3]</a></sup>&nbsp;(in
                                        2019)</td>
                                </tr>
                                <tr>
                                    <th class="infobox-label" style="vertical-align: top; text-align: left;"
                                        scope="row">Governing body</th>
                                    <td class="infobox-data" style="vertical-align: top;"><a
                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                            title="Government of India"
                                            href="https://en.wikipedia.org/wiki/Government_of_India">Government of
                                            India</a></td>
                                </tr>
                                <tr>
                                    <th class="infobox-label" style="vertical-align: top; text-align: left;"
                                        scope="row">Website</th>
                                    <td class="infobox-data" style="vertical-align: top;"><a class="external text"
                                            style="text-decoration-line: none; color: #3366cc; background: url('../../w/skins/Vector/resources/common/images/link-external-small-ltr-progressive.svg?30a3a') right center / 0.857em no-repeat; overflow-wrap: break-word; padding-right: 1em;"
                                            href="http://www.tajmahal.gov.in/" rel="nofollow">www.tajmahal.gov.in</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="infobox-full-data" style="vertical-align: top; text-align: center;"
                                        colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="infobox-full-data" style="vertical-align: top; text-align: center;"
                                        colspan="2">
                                        <div class="switcher-container">
                                            <div class="center" style="width: 256.125px;">
                                                <div class="locmap"
                                                    style="margin-left: auto; margin-right: auto; width: 235px; float: none; clear: both;">
                                                    <div
                                                        style="margin-left: auto; margin-right: auto; width: 235px; padding: 0px;">
                                                        <div
                                                            style="margin-left: auto; margin-right: auto; position: relative; width: 235px;">
                                                            <a class="image"
                                                                style="text-decoration-line: none; color: #3366cc; background: none; margin-left: auto; margin-right: auto; overflow-wrap: break-word;"
                                                                title="Taj Mahal is located in Uttar Pradesh"
                                                                href="https://en.wikipedia.org/wiki/File:India_Uttar_Pradesh_location_map.svg"><img
                                                                    class="notpageimage"
                                                                    style="border: 0px; vertical-align: middle; margin-left: auto; margin-right: auto;"
                                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/India_Uttar_Pradesh_location_map.svg/235px-India_Uttar_Pradesh_location_map.svg.png"
                                                                    srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7f/India_Uttar_Pradesh_location_map.svg/353px-India_Uttar_Pradesh_location_map.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7f/India_Uttar_Pradesh_location_map.svg/470px-India_Uttar_Pradesh_location_map.svg.png 2x"
                                                                    alt="Taj Mahal is located in Uttar Pradesh"
                                                                    width="235" height="204" data-file-width="1066"
                                                                    data-file-height="927"></a>
                                                            <div class="od"
                                                                style="margin-left: auto; margin-right: auto; position: absolute; top: 101.234px; left: 31.7969px;">
                                                                <div class="id"
                                                                    style="margin-left: auto; margin-right: auto; position: absolute; line-height: 0; left: -4px; top: -4px;">
                                                                    <img class="notpageimage"
                                                                        style="border: 0px; vertical-align: middle; margin-left: auto; margin-right: auto;"
                                                                        title="Taj Mahal"
                                                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Red_pog.svg/7px-Red_pog.svg.png"
                                                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Red_pog.svg/11px-Red_pog.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Red_pog.svg/14px-Red_pog.svg.png 2x"
                                                                        alt="Taj Mahal" width="7" height="7"
                                                                        data-file-width="64" data-file-height="64">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            style="margin-left: auto; margin-right: auto; padding-top: 0.2em;">
                                                            Location of Taj Mahal in&nbsp;<a
                                                                style="text-decoration-line: none; color: #3366cc; background: none; margin-left: auto; margin-right: auto; overflow-wrap: break-word;"
                                                                title="Uttar Pradesh"
                                                                href="https://en.wikipedia.org/wiki/Uttar_Pradesh">Uttar
                                                                Pradesh</a>, India</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label style="display: block;"><input
                                                    style="margin-top: 0px; margin-right: 0px; margin-left: 0px;"
                                                    name="switcher-0" type="radio">Show map of Uttar
                                                Pradesh</label><label style="display: block;"><input
                                                    style="margin-top: 0px; margin-right: 0px; margin-left: 0px;"
                                                    name="switcher-0" type="radio">Show map of India</label><label
                                                style="display: block;"><input
                                                    style="margin-top: 0px; margin-right: 0px; margin-left: 0px;"
                                                    name="switcher-0" type="radio">Show all</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="infobox-full-data" style="vertical-align: top; text-align: center;"
                                        colspan="2">&nbsp;</td>
                                </tr>
                                <tr class="mergedrow">
                                    <th class="infobox-header" style="vertical-align: top; text-align: center;"
                                        colspan="2">
                                        <div style="line-height: 1.5; border: 4px solid #ffe153;"><a
                                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                                title="World Heritage Site"
                                                href="https://en.wikipedia.org/wiki/World_Heritage_Site">UNESCO World
                                                Heritage Site</a></div>
                                    </th>
                                </tr>
                                <tr class="mergedrow">
                                    <th class="infobox-label"
                                        style="vertical-align: top; text-align: left; padding-right: 0.3em;"
                                        scope="row"><a
                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                            title="World Heritage Site"
                                            href="https://en.wikipedia.org/wiki/World_Heritage_Site#Selection_criteria">Criteria</a>
                                    </th>
                                    <td class="infobox-data category" style="vertical-align: top;">Cultural: i</td>
                                </tr>
                                <tr class="mergedrow">
                                    <th class="infobox-label"
                                        style="vertical-align: top; text-align: left; padding-right: 0.3em;"
                                        scope="row">Reference</th>
                                    <td class="infobox-data" style="vertical-align: top;"><a class="external text"
                                            style="text-decoration-line: none; color: #3366cc; background: url('../../w/skins/Vector/resources/common/images/link-external-small-ltr-progressive.svg?30a3a') right center / 0.857em no-repeat; overflow-wrap: break-word; padding-right: 1em;"
                                            href="https://whc.unesco.org/en/list/252" rel="nofollow">252</a></td>
                                </tr>
                                <tr class="mergedrow">
                                    <th class="infobox-label"
                                        style="vertical-align: top; text-align: left; padding-right: 0.3em;"
                                        scope="row">Inscription</th>
                                    <td class="infobox-data" style="vertical-align: top;">1983 (7th&nbsp;<a
                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                            title="World Heritage Committee"
                                            href="https://en.wikipedia.org/wiki/World_Heritage_Committee">Session</a>)
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="margin: 0.5em 0px;">The&nbsp;<strong>Taj Mahal</strong>&nbsp;(<span
                                class="rt-commentedText nowrap" style="white-space: nowrap;"><span
                                    class="IPA nopopups noexcerpt" lang="en-fonipa"><a
                                        style="color: #3366cc; background: none; overflow-wrap: break-word; text-decoration-line: none !important;"
                                        title="Help:IPA/English"
                                        href="https://en.wikipedia.org/wiki/Help:IPA/English">/<span
                                            style="border-bottom: 1px dotted;"><span
                                                title="/ˌ/: secondary stress follows">ˌ</span><span
                                                title="'t' in 'tie'">t</span><span
                                                title="/ɑː/: 'a' in 'father'">ɑː</span><span
                                                title="/dʒ/: 'j' in 'jam'">dʒ</span></span><span class="wrap"
                                            style="white-space: normal;">&nbsp;</span><span
                                            style="border-bottom: 1px dotted;"><span title="'m' in 'my'">m</span><span
                                                title="/ə/: 'a' in 'about'">ə</span><span
                                                title="/ˈ/: primary stress follows">ˈ</span><span
                                                title="'h' in 'hi'">h</span><span
                                                title="/ɑː/: 'a' in 'father'">ɑː</span><span
                                                title="'l' in 'lie'">l</span></span>,<span class="wrap"
                                            style="white-space: normal;">&nbsp;</span><span
                                            style="border-bottom: 1px dotted;"><span
                                                title="/ˌ/: secondary stress follows">ˌ</span><span
                                                title="'t' in 'tie'">t</span><span
                                                title="/ɑː/: 'a' in 'father'">ɑː</span><span
                                                title="/ʒ/: 's' in 'pleasure'">ʒ</span></span>-/</a></span></span>;&nbsp;<abbr
                                style="border-bottom: 0px; cursor: help; font-size: 11.9px;"
                                title="literal translation">lit.</abbr><span style="white-space: nowrap;"> </span>'Crown
                            of the Palace')<sup id="cite_ref-:0_4-0" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-:0-4">[4]</a></sup><sup
                                id="cite_ref-FOOTNOTEWells1990704_5-0" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-FOOTNOTEWells1990704-5">[5]</a></sup><sup
                                id="cite_ref-FOOTNOTEAhmed199894_6-0" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-FOOTNOTEAhmed199894-6">[6]</a></sup>&nbsp;is
                            an ivory-white&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Marble" href="https://en.wikipedia.org/wiki/Marble">marble</a>&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Mausoleum" href="https://en.wikipedia.org/wiki/Mausoleum">mausoleum</a>&nbsp;on
                            the right bank of the river&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Yamuna" href="https://en.wikipedia.org/wiki/Yamuna">Yamuna</a>&nbsp;in&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Agra" href="https://en.wikipedia.org/wiki/Agra">Agra</a>,&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Uttar Pradesh" href="https://en.wikipedia.org/wiki/Uttar_Pradesh">Uttar
                                Pradesh</a>, India. It was commissioned in 1631 by the fifth&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Mughal Empire" href="https://en.wikipedia.org/wiki/Mughal_Empire">Mughal
                                emperor</a>,&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Shah Jahan" href="https://en.wikipedia.org/wiki/Shah_Jahan">Shah
                                Jahan</a>&nbsp;(<span style="white-space: nowrap;"><abbr
                                    style="border-bottom: 0px; cursor: help;"
                                    title="reigned">r.</abbr>&nbsp;1628–1658</span>) to house the tomb of his favourite
                            wife,&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Mumtaz Mahal" href="https://en.wikipedia.org/wiki/Mumtaz_Mahal">Mumtaz Mahal</a>;
                            it also houses the tomb of Shah Jahan himself. The tomb is the centrepiece of a 17-hectare
                            (42-acre) complex, which includes a&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Mosque" href="https://en.wikipedia.org/wiki/Mosque">mosque</a>&nbsp;and a guest
                            house, and is set in formal gardens bounded on three sides by a&nbsp;<a class="mw-redirect"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Crenellated"
                                href="https://en.wikipedia.org/wiki/Crenellated">crenellated</a>&nbsp;wall.</p>
                        <p style="margin: 0.5em 0px;">Construction of the mausoleum was essentially completed in 1643,
                            but work continued on other phases of the project for another 10 years. The Taj Mahal
                            complex is believed to have been completed in its entirety in 1653 at a cost estimated at
                            the time to be around&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Indian rupee sign"
                                href="https://en.wikipedia.org/wiki/Indian_rupee_sign">₹</a>32&nbsp;million, which in
                            2020 would be approximately&nbsp;<span style="white-space: nowrap;">₹</span>70&nbsp;billion
                            (about&nbsp;<a class="mw-redirect"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="US $" href="https://en.wikipedia.org/wiki/US_$">US $1&nbsp;billion</a>). The
                            construction project employed some 20,000 artisans under the guidance of a board of
                            architects led by&nbsp;<a class="mw-redirect"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Ustad Ahmad Lahauri"
                                href="https://en.wikipedia.org/wiki/Ustad_Ahmad_Lahauri">Ustad Ahmad Lahauri</a>, the
                            emperor’s court architect. Various types of symbolism have been employed in the Taj to
                            reflect natural beauty and divinity.</p>
                        <p style="margin: 0.5em 0px;">The Taj Mahal was designated as a&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="UNESCO" href="https://en.wikipedia.org/wiki/UNESCO">UNESCO</a>&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="World Heritage Site"
                                href="https://en.wikipedia.org/wiki/World_Heritage_Site">World Heritage Site</a>&nbsp;in
                            1983 for being "the jewel of&nbsp;<a class="mw-redirect"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Muslim art" href="https://en.wikipedia.org/wiki/Muslim_art">Muslim
                                art</a>&nbsp;in India and one of the universally admired masterpieces of the world's
                            heritage". It is regarded by many as the best example of&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Mughal architecture"
                                href="https://en.wikipedia.org/wiki/Mughal_architecture">Mughal
                                architecture</a>&nbsp;and a symbol of India's rich history. The Taj Mahal attracts more
                            than 6&nbsp;million visitors a year<sup id="cite_ref-Visitors2019_3-1" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-Visitors2019-3">[3]</a></sup>&nbsp;and
                            in 2007, it was declared a winner of the&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="New 7 Wonders of the World"
                                href="https://en.wikipedia.org/wiki/New_7_Wonders_of_the_World">New 7 Wonders of the
                                World</a>&nbsp;(2000–2007) initiative.</p>
                        <h2
                            style="color: #000000; margin: 1em 0px 0.25em; padding: 0px; overflow: hidden; border-bottom-style: solid; border-bottom-color: #a2a9b1; font-weight: normal; font-family: 'Linux Libertine', Georgia, Times, serif; line-height: 1.375;">
                            <span id="Etymology" class="mw-headline">Etymology</span></h2>
                        <p style="margin: 0.5em 0px;"><a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Abdul Hamid Lahori" href="https://en.wikipedia.org/wiki/Abdul_Hamid_Lahori">Abdul
                                Hamid Lahauri</a>, in his book from 1636&nbsp;<i><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    title="Padshahnama"
                                    href="https://en.wikipedia.org/wiki/Padshahnama">Padshahnama</a></i>, refers to the
                            Taj Mahal as&nbsp;<i><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    title="Rauza" href="https://en.wikipedia.org/wiki/Rauza">rauza</a>-i
                                munawwara</i>&nbsp;(<a class="mw-redirect"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Perso-Arabic"
                                href="https://en.wikipedia.org/wiki/Perso-Arabic">Perso-Arabic</a>:&nbsp;<span
                                title="Persian-language text"><span dir="rtl" lang="fa">روضه
                                    منواره</span></span>,&nbsp;<i>rawdah-i munawwarah</i>), meaning the illumined or
                            illustrious tomb.<sup id="cite_ref-FOOTNOTETillotson200814_7-0" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-FOOTNOTETillotson200814-7">[7]</a></sup>&nbsp;The
                            current name for the Taj Mahal is believed to be derived from the&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Persian language"
                                href="https://en.wikipedia.org/wiki/Persian_language">Persian</a>&nbsp;<span
                                title="Persian-language text"><span dir="rtl" lang="fa">تاج
                                    محل</span></span>&nbsp;<i>tāj mahall</i>, meaning "crown" (<i>tāj</i>) "palace"
                            (<i>mahall</i>).<sup id="cite_ref-8" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-8">[8]</a></sup><sup
                                id="cite_ref-9" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-9">[9]</a></sup><sup
                                id="cite_ref-:0_4-1" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-:0-4">[4]</a></sup>&nbsp;The
                            name "Taj" came from the corruption of the second syllable of "Mumtaz".<sup id="cite_ref-10"
                                class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-10">[10]</a></sup><sup
                                id="cite_ref-11" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-11">[11]</a></sup></p>
                        <div class="hatnote navigation-not-searchable"
                            style="font-style: italic; padding-left: 1.6em; margin-bottom: 0.5em;" role="note">See
                            also:&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Persian language in the Indian subcontinent"
                                href="https://en.wikipedia.org/wiki/Persian_language_in_the_Indian_subcontinent">Persian
                                language in the Indian subcontinent</a></div>
                        <h2
                            style="color: #000000; margin: 1em 0px 0.25em; padding: 0px; overflow: hidden; border-bottom-style: solid; border-bottom-color: #a2a9b1; font-weight: normal; font-family: 'Linux Libertine', Georgia, Times, serif; line-height: 1.375;">
                            <span id="Inspiration" class="mw-headline">Inspiration</span></h2>
                        <p style="margin: 0.5em 0px;">The Taj Mahal was commissioned by Shah Jahan in 1631, to be built
                            in the memory of his wife Mumtaz Mahal, who died on 17 June that year, while giving birth to
                            their 14th child,&nbsp;<a class="mw-redirect"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Gauhara Begum" href="https://en.wikipedia.org/wiki/Gauhara_Begum">Gauhara
                                Begum</a>.<sup id="cite_ref-FOOTNOTEAsher1992210_12-0" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-FOOTNOTEAsher1992210-12">[12]</a></sup><sup
                                id="cite_ref-13" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-13">[13]</a></sup>&nbsp;Construction
                            started in 1632,<sup id="cite_ref-FOOTNOTESarkar191930,_31_14-0" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-FOOTNOTESarkar191930,_31-14">[14]</a></sup>&nbsp;and
                            the mausoleum was completed in 1648, while the surrounding buildings and garden were
                            finished five years later.<sup id="cite_ref-Creation_History_15-0" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-Creation_History-15">[15]</a></sup>&nbsp;The
                            imperial court documenting Shah Jahan's grief after the death of Mumtaz Mahal illustrates
                            the love story held as the inspiration for the Taj Mahal.<sup
                                id="cite_ref-FOOTNOTEChaghtai193846_16-0" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-FOOTNOTEChaghtai193846-16">[16]</a></sup>
                        </p>
                        <div class="mod-gallery mod-gallery-default mod-gallery-center"
                            style="display: table; background: transparent; margin-top: 0.3em; margin-left: auto; margin-right: auto;">
                            <div class="title" style="display: table-row;">
                                <div
                                    style="display: table-cell; padding: 0.2em 0px 0.6em 1.6em; text-align: center; font-weight: bold;">
                                    Shah Jahan and Mumtaz Mahal</div>
                            </div>
                            <div class="main" style="display: table-row;">
                                <div style="display: table-cell;">
                                    <ul class="gallery mw-gallery-traditional nochecker bordered-images whitebg"
                                        style="list-style-image: url('../../w/skins/Vector/resources/common/images/bullet-icon.svg?d4515'); margin: 2px; padding: 2px; line-height: 1.35em;">
                                        <li class="gallerybox"
                                            style="margin-bottom: 0.1em; vertical-align: top; display: inline-block; width: 235px;">
                                            <div style="width: 235px;">
                                                <div class="thumb"
                                                    style="width: 230px; background-color: #f8f9fa; margin: 2px; text-align: center; border-style: solid; border-color: #c8ccd1; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important;">
                                                    <div style="margin: 15px auto;"><a class="image"
                                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                                            title="&quot;Shah Jahan on a globe&quot; from the Smithsonian Institution"
                                                            href="https://en.wikipedia.org/wiki/File:Shahjahan_on_globe,_mid_17th_century.jpg"><img
                                                                style="border: 1px solid #eaecf0; vertical-align: middle; background: none !important; display: block; margin: 0px auto;"
                                                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Shahjahan_on_globe%2C_mid_17th_century.jpg/137px-Shahjahan_on_globe%2C_mid_17th_century.jpg"
                                                                srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Shahjahan_on_globe%2C_mid_17th_century.jpg/205px-Shahjahan_on_globe%2C_mid_17th_century.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Shahjahan_on_globe%2C_mid_17th_century.jpg/273px-Shahjahan_on_globe%2C_mid_17th_century.jpg 2x"
                                                                alt="&quot;Shah Jahan on a globe&quot; from the Smithsonian Institution"
                                                                width="137" height="200" data-file-width="458"
                                                                data-file-height="670"></a></div>
                                                </div>
                                                <div class="gallerytext"
                                                    style="overflow: hidden; font-size: 13.16px; padding: 2px 4px; overflow-wrap: break-word;">
                                                    <p style="margin: 0.5em 0px;">"Shah Jahan on a globe" from
                                                        the&nbsp;<a
                                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                                            title="Smithsonian Institution"
                                                            href="https://en.wikipedia.org/wiki/Smithsonian_Institution">Smithsonian
                                                            Institution</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        &nbsp;
                                        <li class="gallerybox"
                                            style="margin-bottom: 0.1em; vertical-align: top; display: inline-block; width: 235px;">
                                            <div style="width: 235px;">
                                                <div class="thumb"
                                                    style="width: 230px; background-color: #f8f9fa; margin: 2px; text-align: center; border-style: solid; border-color: #c8ccd1; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important;">
                                                    <div style="margin: 15px auto;"><a class="image"
                                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                                            title="Artistic depiction of Mumtaz Mahal"
                                                            href="https://en.wikipedia.org/wiki/File:Mumtaz_Mahal.jpg"><img
                                                                style="border: 1px solid #eaecf0; vertical-align: middle; background: none !important; display: block; margin: 0px auto;"
                                                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mumtaz_Mahal.jpg/152px-Mumtaz_Mahal.jpg"
                                                                srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mumtaz_Mahal.jpg/228px-Mumtaz_Mahal.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mumtaz_Mahal.jpg/304px-Mumtaz_Mahal.jpg 2x"
                                                                alt="Artistic depiction of Mumtaz Mahal" width="152"
                                                                height="200" data-file-width="647"
                                                                data-file-height="850"></a></div>
                                                </div>
                                                <div class="gallerytext"
                                                    style="overflow: hidden; font-size: 13.16px; padding: 2px 4px; overflow-wrap: break-word;">
                                                    <p style="margin: 0.5em 0px;">Artistic depiction of&nbsp;<a
                                                            style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                                            title="Mumtaz Mahal"
                                                            href="https://en.wikipedia.org/wiki/Mumtaz_Mahal">Mumtaz
                                                            Mahal</a></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h2
                            style="color: #000000; margin: 1em 0px 0.25em; padding: 0px; overflow: hidden; border-bottom-style: solid; border-bottom-color: #a2a9b1; font-weight: normal; font-family: 'Linux Libertine', Georgia, Times, serif; line-height: 1.375;">
                            <span id="Architecture_and_design" class="mw-headline">Architecture and design</span></h2>
                        <div class="hatnote navigation-not-searchable"
                            style="font-style: italic; padding-left: 1.6em; margin-bottom: 0.5em;" role="note">Main
                            article:&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Origins and architecture of the Taj Mahal"
                                href="https://en.wikipedia.org/wiki/Origins_and_architecture_of_the_Taj_Mahal">Origins
                                and architecture of the Taj Mahal</a></div>
                        <div class="thumb tright"
                            style="clear: right; float: right; width: auto; background-color: transparent; margin: 0.5em 0px 1.3em 1.4em;">
                            <div class="thumbinner"
                                style="min-width: 100px; padding: 3px; text-align: center; overflow: hidden; border-style: solid; border-color: #c8ccd1; background-color: #f8f9fa; font-size: 13.16px; width: 222px;">
                                <div class="thumbcaption"
                                    style="text-align: left; line-height: 1.4em; padding: 3px; font-size: 12.3704px; border: 0px initial initial;">
                                    <div class="magnify" style="float: right; margin-right: 0px;">&nbsp;</div>
                                    Animation showing the Taj Mahal (English subtitles)
                                </div>
                            </div>
                        </div>
                        <p style="margin: 0.5em 0px;">The Taj Mahal incorporates and expands on design traditions
                            of&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Indo-Islamic architecture"
                                href="https://en.wikipedia.org/wiki/Indo-Islamic_architecture">Indo-Islamic</a>&nbsp;and
                            earlier Mughal architecture. Specific inspiration came from successful&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Timurid dynasty"
                                href="https://en.wikipedia.org/wiki/Timurid_dynasty">Timurid</a>&nbsp;and&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Mughal Empire"
                                href="https://en.wikipedia.org/wiki/Mughal_Empire">Mughal</a>&nbsp;buildings including
                            the&nbsp;<a class="mw-redirect"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Gur-e Amir" href="https://en.wikipedia.org/wiki/Gur-e_Amir">Gur-e
                                Amir</a>&nbsp;(the tomb of Timur, progenitor of the Mughal dynasty, in&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Samarkand" href="https://en.wikipedia.org/wiki/Samarkand">Samarkand</a>),<sup
                                id="cite_ref-FOOTNOTEChaghtai1938146_17-0" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-FOOTNOTEChaghtai1938146-17">[17]</a></sup>&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Humayun's Tomb" href="https://en.wikipedia.org/wiki/Humayun%27s_Tomb">Humayun's
                                Tomb</a>&nbsp;which inspired the&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Charbagh" href="https://en.wikipedia.org/wiki/Charbagh">Charbagh</a>&nbsp;gardens
                            and&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Hasht-behesht (architecture)"
                                href="https://en.wikipedia.org/wiki/Hasht-behesht_(architecture)">hasht-behesht
                                (architecture)</a>&nbsp;plan of the site,&nbsp;<a class="mw-redirect"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Itmad-Ud-Daulah's Tomb"
                                href="https://en.wikipedia.org/wiki/Itmad-Ud-Daulah%27s_Tomb">Itmad-Ud-Daulah's
                                Tomb</a>&nbsp;(sometimes called the&nbsp;<i>Baby Taj</i>), and Shah Jahan's own&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Jama Masjid, Delhi" href="https://en.wikipedia.org/wiki/Jama_Masjid,_Delhi">Jama
                                Masjid</a>&nbsp;in&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Delhi" href="https://en.wikipedia.org/wiki/Delhi">Delhi</a>. While earlier Mughal
                            buildings were primarily constructed of red&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Sandstone" href="https://en.wikipedia.org/wiki/Sandstone">sandstone</a>, Shah
                            Jahan promoted the use of white marble inlaid with&nbsp;<a class="mw-redirect"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Semi-precious stones"
                                href="https://en.wikipedia.org/wiki/Semi-precious_stones">semi-precious stones</a>.
                            Buildings under his patronage reached new levels of refinement.<sup
                                id="cite_ref-FOOTNOTECopplestone1963166_18-0" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-FOOTNOTECopplestone1963166-18">[18]</a></sup>
                        </p>
                        <h3
                            style="color: #000000; margin: 0.3em 0px 0px; padding-top: 0.5em; padding-bottom: 0px; overflow: hidden; font-size: 1.2em; line-height: 1.6;">
                            <span id="Tomb" class="mw-headline">Tomb</span></h3>
                        <p style="margin: 0.5em 0px;">The tomb is the central focus of the entire complex of the Taj
                            Mahal. It is a large, white marble structure standing on a square&nbsp;<a
                                class="mw-redirect"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Plinth" href="https://en.wikipedia.org/wiki/Plinth">plinth</a>&nbsp;and consists
                            of a symmetrical building with an&nbsp;<i><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    title="Iwan" href="https://en.wikipedia.org/wiki/Iwan">iwan</a></i>&nbsp;(an
                            arch-shaped doorway) topped by a large dome and&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Finial" href="https://en.wikipedia.org/wiki/Finial">finial</a>. Like most Mughal
                            tombs, the basic elements are&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Indo-Islamic architecture"
                                href="https://en.wikipedia.org/wiki/Indo-Islamic_architecture">Indo-Islamic</a>&nbsp;in
                            origin.<sup id="cite_ref-19" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-19">[19]</a></sup></p>
                        <p style="margin: 0.5em 0px;">The base structure is a large multi-chambered cube with&nbsp;<a
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Chamfer" href="https://en.wikipedia.org/wiki/Chamfer">chamfered</a>&nbsp;corners
                            forming an unequal eight-sided structure that is approximately 55 metres (180&nbsp;ft) on
                            each of the four long sides. Each side of the iwan is framed with a huge&nbsp;<i><a
                                    class="mw-redirect"
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    title="Pishtaq" href="https://en.wikipedia.org/wiki/Pishtaq">pishtaq</a></i>&nbsp;or
                            vaulted archway with two similarly shaped arched balconies stacked on either side. This
                            motif of stacked&nbsp;<i>pishtaqs</i>&nbsp;is replicated on the chamfered corner areas,
                            making the design completely symmetrical on all sides of the building. Four&nbsp;<a
                                class="mw-redirect"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Minarets" href="https://en.wikipedia.org/wiki/Minarets">minarets</a>&nbsp;frame
                            the tomb, one at each corner of the plinth facing the chamfered corners. The main chamber
                            houses the false&nbsp;<a class="mw-redirect"
                                style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                title="Sarcophagi"
                                href="https://en.wikipedia.org/wiki/Sarcophagi">sarcophagi</a>&nbsp;of Mumtaz Mahal and
                            Shah Jahan; the actual graves are at a lower level.<sup id="cite_ref-20" class="reference"
                                style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a
                                    style="text-decoration-line: none; color: #3366cc; background: none; overflow-wrap: break-word;"
                                    href="https://en.wikipedia.org/wiki/Taj_Mahal#cite_note-20">[20]</a></sup></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="read.js"></script>
</body>

</html>