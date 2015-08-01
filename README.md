# Markdown

Replaces Known's rich text editor with a markdown editor.

Editing existing posts will use the WYSIWYG editor; only new posts, authored in markdown, will use the markdown editor. Markdown posts can also contain HTML, including pasted and embedded content.

## Installation

1. Place the Markdown folder inside your Known installation's IdnoPlugins folder.
2. Click on Site Configuration, and then Plugins.
3. Find Markdown in the list and turn it on.

## Modifications

This is a fork of the original repo which replaces EpicEditor's built-in Markdown interpreter with CommonMark JS,
and replaces Parsedown with CommonMark PHP, providing a unified CommonMark experience.

## Includes

* EpicEditor by Oscar Godson. Source: https://github.com/OscarGodson/EpicEditor
+ CommonMark JS by John MacFarlane. Source: https://github.com/jgm/commonmark.js
+ league/commonmark by Colin O’Dell. Site: http://commonmark.thephpleague.com/

