<?php

    $unique_id = 'epiceditor' . rand(0,9999);

?>
<div id="<?=$unique_id?>" style="margin-bottom: 1em"></div>
<textarea name="<?=$vars['name']?>" id="textarea<?=$unique_id?>" class="bodyInput mentionable" style="display: none"><?=htmlspecialchars($vars['value'])?></textarea>
<script>
    var options = {
        container: '<?=$unique_id?>',
        textarea: 'textarea<?=$unique_id?>',
        basePath: '/IdnoPlugins/Markdown/external/epiceditor',
        theme: {
            editor: '/themes/editor/epic-light.css',
            preview: '/themes/preview/known.css'
        },
        file: {
            name: '<?=$unique_id?>',
            defaultContent: document.querySelector('#textarea<?=$unique_id?>').innerHTML
        },
        autogrow: {
            minHeight: 250,
            maxHeight: 1000,
            scroll: true
        },
        clientSideStorage: false,
        parser: KnownMD.parser,
        button: {
          bar: true
        }
    };
    var editor = new EpicEditor(options).load();
    editor.open('<?=$unique_id?>', document.querySelector('#textarea<?=$unique_id?>').innerHTML);
</script>
<input type="hidden" name="markdown_editor" value="true">
