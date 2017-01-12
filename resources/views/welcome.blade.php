<!DOCTYPE HTML>
<html ng-app="demo">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

        <title>JSON Editor Online - view, edit and format JSON online</title>

        <meta name="description" content="JSON Editor Online is a web-based tool to view, edit, and format JSON. It shows your data side by side in a clear, editable treeview and in a code editor.">
        <meta name="keywords" content="json, editor, formatter, online, format, parser, json editor, json editor online, online json editor, javascript, javascript object notation, tools, tool, json tools, treeview, open source, free, json parser, json parser online, json formatter, json formatter online, online json formatter, online json parser, format json online">
        <meta name="author" content="Jos de Jong">
        <link rel="shortcut icon" href="favicon.ico">
        <!-- TODO: droid font
            <link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>
        -->
        {{assetsJs('angular/angular.min.js')}}
        {{assetsJs('angular/angular-sanitize.js')}}
        {{assetsJs('json-formatter/dist/json-formatter.min.js')}}
        {{assetsCss('bootstrap.css')}}
        {{assetsCss('json-formatter.css')}}

        {{assetsCss('style.css')}}

    </head>

    <body ng-controller="MainCtrl">

        <div id="header">
            <a href="#" class="header">
                <img alt="JSON Editor Online" title="JSON Editor Online" src="img/logo.png" id="logo">
            </a>

            <div id="name-menu">
                <div id="name" title="Document name. Click to change"></div>
                <div id="name-status" title="Changes are automatically saved online"></div>
            </div>

            <div id="menu">
                <ul>
                    <li>
                        <a id="new" title="Open a new, empty document">New</a>
                    </li>
                    <li>
                        <a id="open" title="Open file">
                            Open <span class="dropDownIcon">&#x25BC;</span>
                        </a>
                        <ul id="openMenu">
                            <li>
                                <a id="openFromDisk" title="Open file from disk">Open from disk</a>
                            </li>
                            <li>
                                <a id="openUrl" title="Open file from url">Open url</a>
                            </li>
                            <li id="filesList"></li>
                        </ul>
                    </li>
                    <li>
                        <a id="save" title="Save file">
                            Save <span class="dropDownIcon">&#x25BC;</span>
                        </a>
                        <ul id="saveMenu">
                            <li>
                                <a id="saveToDisk" title="Save file to disk">Save to disk</a>
                            </li>
                            <li>
                                <a id="saveOnline" title="Save and share online">Save online</a>
                            </li>
                        </ul>
                    </li>
                    <li class="settings">
                        <a id="settings" title="Settings">
                            Settings <span class="dropDownIcon">&#x25BC;</span>
                        </a>
                        <ul id="settingsMenu">
                            <li>
                                <div class="indentation">
                                    <label for="indentation">Indentation <input id="indentation" value="2" /></label>
                                </div>
                            </li>
                            <li id="schemasList"></li>
                        </ul>
                    </li>
                    <li>
                        <a id="help" title="Open documentation (opens in a new window)" href="doc/index.html" target="_blank">Help</a>
                    </li>
                </ul>
            </div>

        </div>

        <div id="auto">
            <div id="contents">
                <div id="codeEditor">
                    <div class="jsonviewer jsonviewer-mode-code">
                        <div class="jsonviewer-menu">
                            <button class="jsonviewer-format" title="Format JSON data, with proper indentation and line feeds (Ctrl+\)"></button>
                            <button class="jsonviewer-compact" title="Compact JSON data, remove all whitespaces (Ctrl+Shift+\)"></button>

                        </div>
                        <div class="jsonviewer-outer">
                            <div class=" ace_editor ace-jsonviewer" style="height: 100%; width: 100%; font-size: 13px;">
                                <textarea ng-model="textarea" class="col-xs-6"></textarea>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="splitter">
                    <div id="buttons">
                        <div>
                            <button id="toTree" class="convert" title="Copy code to tree editor (Ctrl + >)">
                                <div class="convert-right"></div>
                            </button>
                        </div>
                        <div>
                            <button id="toCode" class="convert" title="Copy tree to code editor (Ctrl + <)">
                                <div class="convert-left"></div>
                            </button>
                        </div>
                    </div>
                    <div id="drag">
                    </div>
                </div>

                <div id="treeEditor">
                    <div class="jsonviewer jsonviewer-mode-code">
                        <div class="jsonviewer-menu">
                            <button class="jsonviewer-format" title="Format JSON data, with proper indentation and line feeds (Ctrl+\)"></button>
                            <button class="jsonviewer-compact" title="Compact JSON data, remove all whitespaces (Ctrl+Shift+\)"></button>

                        </div>
                        <div class="jsonviewer-outer">
                            <div class=" ace_editor ace-jsonviewer" style="height: 100%; width: 100%; font-size: 13px;">
                                <json-formatter json="textareaJson" open="1"></json-formatter>

                            </div>
                        </div>

                    </div>

                </div>


                <div id="ad">

                </div>
            </div>

            <div id="footer">
                <div id="footer-inner">

                </div>
            </div>
        </div>
        {{assetsJs('json-formatter/demo/demo.js')}}
    </body>
</html>

