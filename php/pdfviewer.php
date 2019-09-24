<?php

?>
<head>
    <script src="../js/pdfobject.js"></script>
</head>
<body>
<div id="example1"></div>
</body>
<script>
    function getQueryVariable(variable)
    {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++) {
            var pair = vars[i].split("=");
            if(pair[0] == variable){return pair[1];}
        }
        return(false);
    }
    var link = "../pdf/book.pdf#page=" + getQueryVariable("page");

    PDFObject.embed(link, "#example1");
</script>
