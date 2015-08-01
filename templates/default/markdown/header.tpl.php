<script src="<?=\Idno\Core\site()->config()->getDisplayURL()?>IdnoPlugins/Markdown/external/epiceditor/js/epiceditor.js" language="JavaScript"></script>
<script src="<?=\Idno\Core\site()->config()->getDisplayURL()?>IdnoPlugins/Markdown/external/commonmark.js" language="JavaScript"></script>
<script type='text/javascript'>

var KnownMD = (function(commonmark, undefined){
  var
    reader,
    writer,
    parser = function(text_to_parse) {
      if (commonmark === undefined || text_to_parse === undefined) { return text_to_parse }
      if (reader === undefined) {
        reader = new commonmark.Parser();
      }
      if (writer === undefined) {
        writer = new commonmark.HtmlRenderer();
      }
      return writer.render(reader.parse(text_to_parse));
    };
    
  return {
    parser: parser
  };
})(commonmark);
</script>
