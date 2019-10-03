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
    function getPdf(variable)
    {
        if(variable==0) return "PDF - I.pdf";
        if(variable==1) return "PDF - II.pdf";
        if(variable==2) return "PDF - III.pdf";
        if(variable==3) return "PDF- IV.pdf";
        if(variable==4) return "PDF -V.pdf";
    }
    var link = "../pdf/"+getPdf(getQueryVariable("title"));

    PDFObject.embed(link, "#example1");
</script>
