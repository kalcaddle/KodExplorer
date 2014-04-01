package {

	import flash.display.*;
	import flash.events.*;
	import flash.utils.*;
	import flash.system.*;
	import flash.geom.*;

	public class Flake extends Sprite {
		public var api:Object;
		//父容器
		public var snow:Snow;
		//幅度
		public var tb:Number = 0;
		//
		public var tx:Number = 0;
		public var ty:Number = 0;
		public var ts:Number = 1;
		
		//是否跳过停留
		public var wins:DisplayObject;
		public var skipped:Boolean = false;
		public var stopped:Boolean = false;
		//测试点和停留点
		public var point_test:Point = new Point();
		public var point_stop:Point = new Point();
		
		public var timeid:uint;
		public var thawing:Boolean = false;
		
		public function Flake(_snow:Snow):void {
			snow = _snow;
			api = snow.api;
			draw();
			//初始化属性
			tb = 100 * Math.random();
			tx = x = snow.tw * Math.random();
			ty = y = -50 * Math.random();
			ts = 0.1 + Math.random();
			scaleX = scaleY = ts;
			alpha = ts - 0.1;
			cacheAsBitmap = true;
			addEventListener(Event.ENTER_FRAME, update);
		}
		public function update(e:Event):void {
			//是否正在融化
			if (thawing) {
				//一成概率融化
				if (Math.random() < 0.1) {
					var a:Number = alpha - 0.01;
					if (a > 0) {
						alpha = a;
					} else {
						remove();
						return;
					}
				}
			}
			//停留判断
			if (!skipped) {
				var test:Boolean = isOnCMP();
				if (test) {
					if (stopped) {
						if (!point_test.equals(point_stop)) {
							skipped = true;
						}
						return;
					}
					//三成概率跳过
					if (Math.random() < 0.3) {
						skipped = true;
					} else {
						//停留
						stopped = true;
						snow.num_stopped ++;
						//记录停留的位置，克隆最后的测试点
						point_stop = point_test.clone();
						//10秒后开始融化
						timeid = setTimeout(thaw, 10000);
						return;
					}
				} else if (stopped) {
					//对于已经停止的，但移动后，则跳过
					skipped = true;
				}
			}
			
			tx +=  Math.sin(tb ++ * 0.05) + ts * snow.speed_x;
			if (tx < 0) {
				tx += snow.tw;
			} else if (tx > snow.tw) {
				tx -= snow.tw;
			}
			//
			ty +=  ts * snow.speed_y + ts * Math.abs(snow.speed_x) * 0.5;
			
			//继续飘落
			x = tx;
			y = ty;
			
			//到达地面，移除
			if (ty > snow.th) {
				remove();
			}
		}
		
		public function isOnCMP():Boolean {
			for each (var w:Object in api.win_list) {
				if (w.visible) {
					if (w.hitTestPoint(x, y, true)) {
						//记录测试的位置
						point_test = w.globalToLocal(new Point(x, y));
						return true;
					}
				}
			}
			return false;
		}
		
		//进入融化
		public function thaw():void {
			thawing = true;
		}
		
		public function remove():void {
			clearTimeout(timeid);
			removeEventListener(Event.ENTER_FRAME, update);
			if (snow.contains(this)) {
				snow.removeChild(this);
			}
			if (snow.num_stopped > 0 && stopped) {
				snow.num_stopped --;
			}
			
		}
		//画一个雪花
		public function draw():void {
			this.graphics.beginFill(0xffffff, 0.5);
			this.graphics.drawCircle(0, 0, 3);
			this.graphics.endFill();
			this.graphics.beginFill(0xffffff, 1);
			this.graphics.drawCircle(0, 0, 2);
			this.graphics.endFill();
		}
		

	}

}