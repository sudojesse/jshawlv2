// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
/* Lettering.JS 0.6 by Dave Rupert  - http://daverupert.com */
(function($){var methods={init:function(){return this.each(function(){return injector($(this),'','char','')})},words:function(){return this.each(function(){return injector($(this),' ','word',' ')})},lines:function(){return this.each(function(){var t=$(this),r="eefec303079ad17405c889e092e105b0";t.children("br").replaceWith(r);return injector(t,r,'line','')})}};function injector(t,splitter,klass,after){var a=t.text().split(splitter),inject='';if(a.length>0){$(a).each(function(i,item){inject+='<span class="'+klass+(i+1)+'">'+item+'</span>'+after});t.empty();t.append(inject)}}$.fn.lettering=function(method){if(methods[method]){return methods[method].apply(this,Array.prototype.slice.call(arguments,1))}else if(method=='letters'||!method){return methods.init.apply(this,arguments)}else{$.error('Method '+method+' does not exist on jQuery.lettering')}}})(jQuery);