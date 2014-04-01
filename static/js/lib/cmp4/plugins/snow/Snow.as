package {

	import flash.display.*;
	import flash.events.*;
	import flash.utils.*;
	import flash.system.*;

	public class Snow extends MovieClip {
		public var api:Object;
		
		public var tw:Number;
		public var th:Number;
		
		//每100px面积雪花的数量
		public var num:Number = 2;
		//当前面积的雪花总数
		public var total:Number = 100;
		
		//停留的数量
		public var num_stopped:Number = 0;
		
		//实时风速
		public var speed_x:Number = 0;
		//目标风速
		public var speed_e:Number = 0;
		//飘落速度
		public var speed_y:Number = 5;
		
		public var timer:Timer;
		
		public var index:int;
		
		public function Snow():void {
			Security.allowDomain("*");
			root.loaderInfo.sharedEvents.addEventListener('api',apiHandler);
			root.loaderInfo.sharedEvents.addEventListener('api_remove',removeHandler);
		}
		
		override public function set width(v:Number):void {
		}
		override public function set height(v:Number):void {
		}
		public function removeHandler(e):void {
			timer.stop();
		}
		
		private function apiHandler(e):void {
			var apikey:Object = e.data;
			if (! apikey) {
				return;
			}
			api = apikey.api;
			api.addEventListener(apikey.key, "resize", resizeHandler);
			//
			if (api.config.snow_num) {
				var snow_num:Number = parseFloat(api.config.snow_num);
				if (!isNaN(snow_num)) {
					if (snow_num > 1 && snow_num < 30) {
						num = snow_num;
					}
				}
			}
			//初始化总数
			resizeHandler();
			//
			timer = new Timer(200);
			timer.start();
			timer.addEventListener(TimerEvent.TIMER, update);
		}
		public function resizeHandler(e:Event = null):void {
			tw = api.config.width;
			th = api.config.height;
			
			total = Math.round(tw * th * num * 0.0001);
			
			//api.tools.output(total);
			
		}
		
		public function update(e:TimerEvent):void {
			if (total <= 0) {
				return;
			}
			
			//api.tools.output(numChildren, total, timer.currentCount);
			if (Math.abs(speed_e - speed_x) > 0.2) {
				if (speed_e > speed_x) {
					speed_x += 0.1;
				} else if (speed_e < speed_x) {
					speed_x -= 0.1;
				}
			} else if (speed_x != speed_e) {
				speed_x = speed_e;
			}
			
			
			//
			if ((numChildren - num_stopped) < total) {
				addChild(new Flake(this));
				
				if (timer.delay > 30) {
					timer.delay -= 1;
				}
				
			} else {
				
				//改变风吹速度和方向
				var rd:Number = Math.random();
				if (rd < 0.2 && timer.currentCount - index > 300) {
					index = timer.currentCount;
					speed_e = 8 * Math.random();
					if (rd < 0.1) {
						speed_e = - speed_e;
					}
				}
				
			}
		}

	}

}