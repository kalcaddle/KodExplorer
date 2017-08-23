kodReady.push(function(){
    if(!$.supportCss3()){//ie8 ie9
        return;
    }
	if(_.get(window,'Config.pageApp') != 'desktop'){
		return;
	}

	//加载时钟挂件
	$.artDialog.open("{{pluginApi}}",{
		className:'desktop-widget',
		title:"clock",
		top: 45,
		resize:true,
		left:$(window).width() - 200 - 5,
		width:'200px',
		height:'200px',
		simple:true
	});
});