$(document).ready(function () {
    // var code = $("#textInputHeader")[0];
    // var cm = (CodeMirror.fromTextArea(code, {
    //     mode: "javascript",
    //     lineNumbers: true,
    //     lineWrapping: true,
    //     theme: "dracula",
    //     "gutters": ['CodeMirror-lint-markers'],
    // "lint": true
    // }));

    function determineCodeMirrorType(cm)
    {
        if (cm.getMode().name == 'javascript')
        {
            checkAndSwitchToXML(cm, cm.getValue());
        }
        else if (cm.getMode().name == 'xml')
        {
            checkAndSwitchToJSON(cm, cm.getValue());
        }
    }
    function checkAndSwitchToXML(cm, val)
    {
        if (/^\s*</.test(val))
        {
            cm.setOption("mode", "xml");
            $('#modeType').html("XML");
        }
    }
    function checkAndSwitchToJSON(cm, val)
    {
        if (!/^\s*</.test(val) && val.match(/\S/))
        {
            cm.setOption("mode", "javascript");
            $('#modeType').html("JSON");
        }
    }
    function checkAndSwitchToXML(cm, val)
    {
        if (/^\s*</.test(val))
        {
            cm.setOption("mode", "php");
            $('#modeType').html("PHP");
        }
    }

    function buildCMInstance(mode, value)
    {
        var cm = CodeMirror.fromTextArea($('#textInputHeader')[0], {
            mode:mode,
            value:value,
            lineNumbers:true,
            theme: "dracula",
            onChange:function(cmInstance){
                determineCodeMirrorType(cmInstance);
            }
        });
        var dm = CodeMirror.fromTextArea($('#textInputFooter')[0], {
            mode:mode,
            value:value,
            lineNumbers:true,
            theme: "dracula",
            onChange:function(dmInstance){
                determineCodeMirrorType(dmInstance);
            }
        });

        return cm, dm;        
    }
    $(document).ready(function(){
        //mode changing demo:  "http://codemirror.net/demo/changemode.html";
        var cm = buildCMInstance("javascript");
      
    });



});