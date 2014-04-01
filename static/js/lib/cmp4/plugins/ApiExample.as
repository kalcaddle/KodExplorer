package {

	import flash.display.*;
	import flash.events.*;
	import flash.net.*;
	import flash.text.*;
	import flash.system.*;

	public class ApiExample extends MovieClip {
		//cmp的api接口引用
		private var api:Object;

		private var tw:Number;
		private var th:Number;
		
		private var msg:TextField;
		public function ApiExample() {
			msg = new TextField();
			msg.background = true;
			msg.multiline = true;
			msg.wordWrap = true;
			msg.backgroundColor = 0xffffff;
			msg.alpha = 0.5;
			msg.width = 400;
			msg.height = 300;
			addChild(msg);
			
			Security.allowDomain("*");
			root.loaderInfo.sharedEvents.addEventListener('api', apiHandler);
			root.loaderInfo.sharedEvents.addEventListener('api_remove',removeHandler);
		}
		
		//用于忽略非预期的宽高调整，要调整宽高，请侦听resize或video_resize事件
		override public function set width(v:Number):void {
		}
		override public function set height(v:Number):void {
		}
		private function removeHandler(e):void {
			//用于回收内存
		}

		private function apiHandler(e):void {
			//取得cmp的api对象和侦听key，包含2个属性{api,key}
			var apikey:Object = e.data;
			//如果没有取到则直接返回
			if (! apikey) {
				return;
			}
			api = apikey.api;
			//模块状态改变
			api.addEventListener(apikey.key, "model_state", stateHandler);
			//模块开始播放
			api.addEventListener(apikey.key, "model_start", startHandler);
			//播放器大小改变时
			api.addEventListener(apikey.key, 'resize', resizeHandler);
			
			
			//初始化调用
			stateHandler();
			resizeHandler();
			
			
			//cookie
			//api.cookie("mycookie_name", "123");
			//var str:String = api.cookie("mycookie_name");
			//output(str);
			
			
			
			//5个窗口引用
			/*
			api.win_list["console"]
			api.win_list["media"]
			api.win_list["list"]
			api.win_list["lrc"]
			api.win_list["option"]
			*/
			
			//列表树引用
			//api.win_list["list"].tree
			
			//列表搜索引用
			//api.win_list["list"].search
			
			//视频和频谱对象引用
			//api.win_list["media"].video

			
			output("api example loaded");
		}

		private function resizeHandler(e:Event = null):void {
			//获取cmp的宽高
			tw = api.config.width;
			th = api.config.height;
		}
		private function stateHandler(e:Event = null):void {
			var state:String = api.config.state;
			//output("model state change: " + state);
			switch (api.config.state) {
				case "undefined" :
				
					break;
				case "connecting" :
				
					break;
				case "buffering" :
				
					break;
				case "playing" :
				
					break;
				case "paused" :

				case "stopped" :
					break;

				case "completed" :
				
					break;
				default :

			}




		}

		private function startHandler(e:Event = null):void {
			output("model start:" + api.item.label);
		}



		private function output(... rest):void {
			var str:String = rest.join(", ");
			api.tools.output(str);
			str +=  "\n";
			msg.appendText(str);
			msg.scrollV = msg.maxScrollV;
		}

	}

}