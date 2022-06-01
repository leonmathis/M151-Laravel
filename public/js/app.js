/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

// function for Adidas Shoe
window.changeColor1 = function () {
  //1. get selectbox
  var select1 = document.querySelector("#select-box1");
  var select2 = document.querySelector("#select-box2");
  var select3 = document.querySelector("#select-box3");
  var select4 = document.querySelector("#select-box4"); //2. get selected

  var selectedOption1 = select1.options[select1.selectedIndex].innerHTML;
  var selectedOption2 = select2.options[select2.selectedIndex].innerHTML;
  var selectedOption3 = select3.options[select3.selectedIndex].innerHTML;
  var selectedOption4 = select4.options[select4.selectedIndex].innerHTML; // shoe sections:

  var sole = document.querySelector("#sssole");
  var logo = document.querySelector("#sslogo");
  var lace = document.querySelector("#sslace");
  var middle = document.querySelector("#ssmiddle"); //3. change colour
  // select box 1

  if (selectedOption1 == "black") {
    sole.style.filter = "invert()";
  } else if (selectedOption1 == "white") {
    sole.style.filter = "";
  } else if (selectedOption1 == "yellow") {
    sole.style.filter = "sepia(100%)";
  } else {} // select box 2


  if (selectedOption2 == "green") {
    logo.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption2 == "red") {
    logo.style.filter = "";
  } else if (selectedOption2 == "turquoise") {
    logo.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption2 == "purple") {
    logo.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption2 == "blue") {
    logo.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption2 == "brown") {
    logo.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption2 == "light grey") {
    logo.style.filter = "contrast(0%)";
  } else {} // select box 3


  if (selectedOption3 == "black") {
    lace.style.filter = "invert()";
  } else if (selectedOption3 == "white") {
    lace.style.filter = "";
  } else if (selectedOption3 == "yellow") {
    lace.style.filter = "sepia(100%)";
  } else {} //select box 4


  if (selectedOption4 == "black") {
    middle.style.filter = "invert()";
  } else if (selectedOption4 == "white") {
    middle.style.filter = "";
  } else if (selectedOption4 == "yellow") {
    middle.style.filter = "sepia(100%)";
  } else {}
}; // Function for jordan Shoe


window.changeColor = function () {
  //1. get selectbox
  var select1 = document.querySelector("#select-box1");
  var select2 = document.querySelector("#select-box2");
  var select3 = document.querySelector("#select-box3");
  var select4 = document.querySelector("#select-box4"); //2. get selected

  var selectedOption1 = select1.options[select1.selectedIndex].innerHTML;
  var selectedOption2 = select2.options[select2.selectedIndex].innerHTML;
  var selectedOption3 = select3.options[select3.selectedIndex].innerHTML;
  var selectedOption4 = select4.options[select4.selectedIndex].innerHTML; // shoe sections:

  var sole = document.querySelector("#sole");
  var logo = document.querySelector("#logo");
  var outer = document.querySelector("#outer");
  var exterior = document.querySelector("#exterior"); //3. change colour
  // select box 1

  if (selectedOption1 == "black") {
    sole.style.filter = "invert()";
  } else if (selectedOption1 == "white") {
    sole.style.filter = "";
  } else if (selectedOption1 == "yellow") {
    sole.style.filter = "sepia(100%)";
  } else {} // select box 2


  if (selectedOption2 == "black") {
    logo.style.filter = "invert()";
  } else if (selectedOption2 == "white") {
    logo.style.filter = "";
  } else if (selectedOption2 == "yellow") {
    logo.style.filter = "sepia(100%)";
  } else {} // select box 3


  if (selectedOption3 == "green") {
    outer.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption3 == "red") {
    outer.style.filter = "";
  } else if (selectedOption3 == "turquoise") {
    outer.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption3 == "purple") {
    outer.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption3 == "blue") {
    outer.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption3 == "brown") {
    outer.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption3 == "light grey") {
    outer.style.filter = "contrast(0%)";
  } else {} //select box 4


  if (selectedOption4 == "green") {
    exterior.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption4 == "red") {
    exterior.style.filter = "";
  } else if (selectedOption4 == "turquoise") {
    exterior.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption4 == "purple") {
    exterior.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption4 == "blue") {
    exterior.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption4 == "brown") {
    exterior.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption4 == "light grey") {
    exterior.style.filter = "contrast(0%)";
  } else {}
};

window.changeShade = function () {
  //1. get selectbox
  var select1 = document.querySelector("#select-box1");
  var select2 = document.querySelector("#select-box2");
  var select3 = document.querySelector("#select-box3");
  var select4 = document.querySelector("#select-box4"); //2. get selected

  var selectedOption1 = select1.options[select1.selectedIndex].innerHTML;
  var selectedOption2 = select2.options[select2.selectedIndex].innerHTML;
  var selectedOption3 = select3.options[select3.selectedIndex].innerHTML;
  var selectedOption4 = select4.options[select4.selectedIndex].innerHTML; // shoe sections:

  var button = document.querySelector("#button");
  var pad = document.querySelector("#pad");
  var middle = document.querySelector("#middle");
  var sides = document.querySelector("#sides"); //3. change colour
  // select box 1

  if (selectedOption1 == "black") {
    button.style.filter = "invert()";
  } else if (selectedOption1 == "white") {
    button.style.filter = "";
  } else if (selectedOption1 == "yellow") {
    button.style.filter = "sepia(100%)";
  } else {} // select box 2


  if (selectedOption2 == "green") {
    pad.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption2 == "red") {
    pad.style.filter = "";
  } else if (selectedOption2 == "turquoise") {
    pad.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption2 == "purple") {
    pad.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption2 == "blue") {
    pad.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption2 == "brown") {
    pad.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption2 == "light grey") {
    pad.style.filter = "contrast(0%)";
  } else {} // select box 3


  if (selectedOption3 == "green") {
    middle.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption3 == "red") {
    middle.style.filter = "";
  } else if (selectedOption3 == "turquoise") {
    middle.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption3 == "purple") {
    middle.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption3 == "blue") {
    middle.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption3 == "brown") {
    middle.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption3 == "light grey") {
    middle.style.filter = "contrast(0%)";
  } else {} //select box 4


  if (selectedOption4 == "green") {
    sides.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption4 == "red") {
    sides.style.filter = "";
  } else if (selectedOption4 == "turquoise") {
    sides.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption4 == "purple") {
    sides.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption4 == "blue") {
    sides.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption4 == "brown") {
    sides.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption4 == "light grey") {
    sides.style.filter = "contrast(0%)";
  } else {}
};

window.changeShade1 = function () {
  //1. get selectbox
  var select1 = document.querySelector("#select-box1");
  var select2 = document.querySelector("#select-box2");
  var select3 = document.querySelector("#select-box3"); //2. get selected

  var selectedOption1 = select1.options[select1.selectedIndex].innerHTML;
  var selectedOption2 = select2.options[select2.selectedIndex].innerHTML;
  var selectedOption3 = select3.options[select3.selectedIndex].innerHTML; // shoe sections:

  var button = document.querySelector("#xblack");
  var pad = document.querySelector("#xwhite");
  var middle = document.querySelector("#xmain"); //3. change colour
  // select box 1

  if (selectedOption1 == "black") {
    button.style.filter = "invert()";
  } else if (selectedOption1 == "white") {
    button.style.filter = "";
  } else if (selectedOption1 == "yellow") {
    button.style.filter = "sepia(100%)";
  } else {} // select box 2


  if (selectedOption2 == "black") {
    pad.style.filter = "invert()";
  } else if (selectedOption2 == "white") {
    pad.style.filter = "";
  } else if (selectedOption2 == "yellow") {
    pad.style.filter = "sepia(100%)";
  } else {} // select box 3


  if (selectedOption3 == "green") {
    middle.style.filter = "hue-rotate(100deg)";
  } else if (selectedOption3 == "red") {
    middle.style.filter = "";
  } else if (selectedOption3 == "turquoise") {
    middle.style.filter = "hue-rotate(180deg)";
  } else if (selectedOption3 == "purple") {
    middle.style.filter = "hue-rotate(260deg)";
  } else if (selectedOption3 == "blue") {
    middle.style.filter = "hue-rotate(200deg)";
  } else if (selectedOption3 == "brown") {
    middle.style.filter = "hue-rotate(50deg)";
  } else if (selectedOption3 == "light grey") {
    middle.style.filter = "contrast(0%)";
  } else {}
};

window.onload = function () {
  popShoe();
  var buttonShoe = document.querySelector("#popshoebtn");
  buttonShoe.focus();
};

window.onload = function () {
  popAdUser();
  var buttonUser = document.querySelector("#popuserbutton");
  buttonUser.focus();
};

window.popShoe = function () {
  var shoe = document.querySelector("#likedshoes");
  var cont = document.querySelector("#likedcont");
  shoe.style.display = "inline-block";
  cont.style.display = "none";
};

window.popController = function () {
  var cont = document.querySelector("#likedcont");
  var shoe = document.querySelector("#likedshoes");
  cont.style.display = "inline-block";
  shoe.style.display = "none";
};

window.popAdShoe = function () {
  var shoe = document.querySelector("#adminshoes");
  var cont = document.querySelector("#admincont");
  var user = document.querySelector("#adminuser");
  shoe.style.display = "inline-block";
  cont.style.display = "none";
  user.style.display = "none";
};

window.popAdController = function () {
  var shoe = document.querySelector("#adminshoes");
  var cont = document.querySelector("#admincont");
  var user = document.querySelector("#adminuser");
  cont.style.display = "inline-block";
  shoe.style.display = "none";
  user.style.display = "none";
};

window.popAdUser = function () {
  var shoe = document.querySelector("#adminshoes");
  var cont = document.querySelector("#admincont");
  var user = document.querySelector("#adminuser");
  cont.style.display = "none";
  shoe.style.display = "none";
  user.style.display = "inline-block";
};

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;