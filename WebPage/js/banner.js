;(function() {
	//切換滾動時間
	function SlideAlbums(param, context) {
		var param = param || {};
		this.ctn = context;
		this.contentCtn = this.ctn.find(".slide-content");
		this.itemsCtn = this.ctn.find(".slide-items");
		this.slideTime = param.slideTime || 1500;
		this.stayTime = param.stayTime || 4500;
		this.init();
	}
	$.extend(SlideAlbums.prototype, {
		initData: function() {
			this.content = this.contentCtn.children();
			this.items = this.itemsCtn.children();
			this.itemsNumber = this.content.size();
			this.itemWidth = this.content.eq(0).innerWidth();
			this.contentCtn.css("width", this.itemWidth*this.itemsNumber);
			this.index = 0;
		},
		initEvent: function() {
			var self = this;
			this.items.each(function(index, ele) {
				$(ele).click(function() {
					if ( !self.isSliding ) {
						clearTimeout(self.count || null);
						self.switchTo(index, self.slideEnd);
					}
				});
			});
		},
		init: function() {
			this.initData();
			this.countTime();
			this.initEvent();
		},
		countTime: function() {
			var self = this;
			this.count = setTimeout(function() {
				self.go(1);
			}, this.stayTime);
		},
		slideEnd: function(index) {
			this.index = index;
			this.setCurrentItem(this.index);
			this.countTime();
		},
		switchTo: function(index, callback) {
			var self = this;
			this.isSliding = true;
			this.contentCtn.animate({
				left: "-"+this.itemWidth*index
			}, this.slideTime, function() {
				self.isSliding = false;
				callback.call(self, index);
			});
		},
		setCurrentItem: function(index) {
			this.items.removeClass("current-slide-item");
			this.items.eq(index).addClass("current-slide-item");
		},
		go: function(dir) {
			if ( this.isSliding ) return;
			if ( dir > 0 ) {
				if ( this.index == this.itemsNumber-1 ) {
					this.content.eq(0).css({
						position: "relative",
						left: this.itemsNumber*this.itemWidth
					});
					this.switchTo(++this.index, function() {
						this.index = 0;
						this.content.eq(0).removeAttr("style");
						this.contentCtn.css("left", "0");
						this.setCurrentItem(0);
						this.isSliding = false;
						this.countTime();
					});
					return;
				}
				this.switchTo(++this.index, this.slideEnd);
			}
		}
	});
	
	$.fn.extend({
		jSlide: function(param) {
			/*
			 *	slideTime: 1500	滑動執行時間
			 *	stayTime: 4500	停留時間
			 * }
			*/
			$.each($(this), function() {
				new SlideAlbums(param, $(this));
			});
		}
	});
})()