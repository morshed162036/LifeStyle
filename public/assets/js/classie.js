/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */(function(window2){"use strict";function classReg(className){return new RegExp("(^|\\s+)"+className+"(\\s+|$)")}var hasClass,addClass,removeClass;"classList"in document.documentElement?(hasClass=function(elem,c){return elem.classList.contains(c)},addClass=function(elem,c){elem.classList.add(c)},removeClass=function(elem,c){elem.classList.remove(c)}):(hasClass=function(elem,c){return classReg(c).test(elem.className)},addClass=function(elem,c){hasClass(elem,c)||(elem.className=elem.className+" "+c)},removeClass=function(elem,c){elem.className=elem.className.replace(classReg(c)," ")});function toggleClass(elem,c){var fn=hasClass(elem,c)?removeClass:addClass;fn(elem,c)}window2.classie={hasClass:hasClass,addClass:addClass,removeClass:removeClass,toggleClass:toggleClass,has:hasClass,add:addClass,remove:removeClass,toggle:toggleClass}})(window);
//# sourceMappingURL=/cdn/shop/t/22/assets/classie.js.map?v=25538760349974051281663655921
