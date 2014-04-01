define(function(require, exports) {
    var bindEvent = function(){
        $(window).bind("resize",function(){
            preview.resize();
        });
        $("#fontsize li").mouseenter(function () {
            $(this).addClass("lihover");    
            $(this).unbind('click').click(function(){//点击选中
                var val=$(this).text();
                $('a.font span').text(val);
                Editor.config('fontsize',val);
                $('.dropbox').css("display","none");    

                $("#fontsize li.this").removeClass('this');
                $(this).addClass('this');   
                Editor.current() && Editor.current().focus();
            });
        }).mouseleave(function (){
            $(this).toggleClass("lihover");
        });

        $('.tools a[action=wordbreak],.tools a[action=display],.tools a[action=auto_complete]')
        .bind('click',function(){
            $(this).toggleClass('select');
        });
        $('.tools a').bind('click',function(e){
            var action = $(this).attr('action');
            doAction(action);
            Editor.current() && Editor.current().focus();
        });

        //主题修改
        $("#codetheme li").mouseenter(function () {
            $(this).addClass("lihover");    
            $(this).unbind('click').click(function(){//点击选中
                var val=$(this).attr('theme');
                Editor.config('theme',val);
                $('a[action=codetheme] span').text($(this).html());
                $('.dropbox').css("display","none");
                $("#codetheme li.this").removeClass('this');
                $(this).addClass('this');
            });
        }).mouseleave(function (){
            $(this).toggleClass("lihover");
        });

        $('.tools .left a').tooltip({placement:'bottom'});
    };

    var doAction = function(action){
        switch (action) {//普通动作
            case 'max':FrameCall.father('core.editorFull',"''");break;
            default:break;
        }
        //必须有编辑器的动作
        if (!Editor.current()) return;
        switch (action) {
            case 'save':Editor.save();break;
            case 'saveall':Editor.saveall();break;
            case 'pre'  :Editor.current().undo();break;
            case 'next' :Editor.current().redo();break;
            case 'find' :Editor.current().execCommand('find');break;
            case 'gotoline':
                Editor.current().commands.exec('gotoline',Editor.current());
                break;
            case 'font':
                if ($('#fontsize').css('display')=='block') {
                    $('#fontsize').fadeOut(100);
                }else{
                    $('#fontsize').fadeIn(100);
                }
                break;
            case 'codetheme':
                if ($('#codetheme').css('display')=='block') {
                    $('#codetheme').fadeOut(100);
                }else{
                    $('#codetheme').fadeIn(100);
                }
                break;          
            case 'wordbreak':Editor.config('wrap');break;
            case 'display':Editor.config('display');break;
            case 'setting':Editor.config('setting');break;
            case 'auto_complete':Editor.config('auto_complete');break;
            case 'preview':
                var url = urlDecode(urlDecode(Editor.current().kod.filename));
                url = core.path2url(url);
                preview.open(url);
                break;
            case 'close':Editor.remove();break;
            default:break;
        }        
    }

    //文件预览
    var bindPreviewResize= function(){
        $('.frame_right input').keyEnter(preview.refresh);
        var isDraging       = false;
        var mouseFirst      = 0;
        var leftwidthFirst  = 0;
        var min_width       = 0;//最小宽度
        $drag = $('.frame_right .resize');
        $box_left = $('.frame_left');
        $box = $drag.parent();

        $drag.die('mousedown').live('mousedown',function(e){
            if (e.which != 1) return true;
            __dragStart(e);
            //事件 在 window之外操作，继续保持。
            if(this.setCapture) this.setCapture();
            $(document).mousemove(function(e) {__dragMove(e);});
            $(document).one('mouseup',function(e) {             
                __dragEnd(e);
                if(this.releaseCapture) {this.releaseCapture();}
                return false;
            });
        });
        var __dragStart = function(e){
            isDraging = true;
            mouseFirst = e.pageX;
            leftwidthFirst = $box.width();
            $drag.addClass('resize_active');
            $("body").css("cursor","col-resize");
            $box.append('<div class="preview_frame mask_view"></div>');
        };
        var __dragMove = function(e){
            if (!isDraging) return true;
            var mouseOffset = e.pageX - mouseFirst;
            var offset = leftwidthFirst-mouseOffset;
            var w_width = $(window).width();
            if (offset >= w_width-50) offset= w_width-50;//最宽
            if (offset <= 100 ) offset = 100;//最窄

            $box_left.css('width',w_width-offset)
                     .find('.edit_body').css('width',w_width-offset);
            $box.width(offset);
            Tap.resetWidth('resize');
            Editor.config('resize');
        };
        var __dragEnd = function(e){
            if (!isDraging) return false;
            isDraging = false;
            $drag.removeClass('resize_active');
            $("body").css("cursor","default");
            $box.find('.mask_view').remove();
        };
    };
    var preview = (function(){
        var $box = $('.frame_right'),
            $box_left = $('.frame_left'),
            $address = $box.find('input'),
            width    = 400;
        return {
            open:function(url){
                if ($box.css('display') != 'block') {
                    $box.css('display','block').css('width',width);
                    var left_width = $(window).width() - width;
                    $('.frame_left').css('width',left_width)
                    .find('.edit_body').css('width',left_width);
                }
                $address.val(url);
                $box.find('.open_ie').attr('href',url);
                $box.find('iframe').attr('src',url);
                preview.resize();
            },
            resize:function () {//调整frame宽度时  自动调整宽度
                if ($box.css('display') == 'block') {//有预览则更新对应宽度
                    var offset  = $box.width();
                    var w_width = $(window).width();
                    if (offset >= w_width-50) offset= w_width-50;//最宽
                    if (offset <= 100 ) offset = 100;//最窄
                    $box.width(offset);
                    $box_left.css('width',w_width-offset)
                             .find('.edit_body').css('width',w_width-offset);                    
                }
                Tap.resetWidth('resize');
                Editor.config('resize');
            },
            close:function(){
                $box.css('display','none');
                $address.val('');
                $box.find('iframe').attr('src','');
                $('.frame_left').css('width','100%')
                    .find('.edit_body').css('width','100%');
                Tap.resetWidth('resize');
                Editor.config('resize');
            },
            refresh:function(){
                var url = $address.attr('value');
                $box.find('.open_ie').attr('href',url);
                $box.find('iframe').attr('src',url);
            }
        };
    })();
    return{
        preview:preview,
        doAction:doAction,
        init:function(){
            bindEvent();
            bindPreviewResize();
        }
    };
});