/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/web/js/app.js":
/*!*********************************!*\
  !*** ./resources/web/js/app.js ***!
  \*********************************/
/***/ (() => {

$('.car-carousel-slick').slick({
  infinite: true,
  dots: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [{
    breakpoint: 800,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3
    }
  }, {
    breakpoint: 450,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false
    }
  }]
});
var datearray = ["19-11-2022"];
$('#InputStartDate').datepicker({
  format: 'dd-mm-yyyy',
  autoclose: true,
  startDate: '+1d'
}).on('changeDate', function (selected) {
  var minDate = new Date(selected.date.valueOf());
  minDate.setDate(minDate.getDate() + 1);
  $('#InputReturnDate').datepicker('setStartDate', minDate);
  var year = minDate.getFullYear();
  var month = minDate.getMonth() + 1;
  var day = minDate.getDate();
  if (month < 10) month = "0" + month;
  if (day < 10) day = "0" + day;
  $('#InputReturnDate').val(day + '-' + month + '-' + year);
});
$('#InputReturnDate').datepicker({
  format: 'dd-mm-yyyy',
  autoclose: true,
  startDate: '+1d'
});
document.addEventListener('DOMContentLoaded', function () {
  //set input date start date to current date
  var now = new Date();
  var month = now.getMonth() + 1;
  var day = now.getDate();
  if (day != 31) var next_day = now.getDate() + 1;else {
    var next_day = 1;
    var month = now.getMonth() + 1;
  }
  if (month < 10) month = "0" + month;
  if (day < 10) day = "0" + day;
  if (next_day < 10) next_day = "0" + next_day;
  var today = day + '-' + month + '-' + now.getFullYear();
  var tommorow = next_day + '-' + month + '-' + now.getFullYear();
  if (!$('#InputStartDate').val()) {
    $('#InputStartDate').val(today);
    $('#InputStartDate').datepicker('setStartDate', today);
  }
  if (!$('#InputReturnDate').val()) {
    $('#InputReturnDate').val(tommorow);
    $('#InputReturnDate').datepicker('setStartDate', tommorow);
  }

  // transition untuk dropdown different location
  document.getElementById('LocationOpt').onclick = function () {
    this.__toggle = !this.__toggle;
    var target = document.getElementById('ReturnLocation');
    if (this.__toggle) {
      target.style.height = target.scrollHeight + "px";
      //this.firstChild.nodeValue = "Hide content";
    } else {
      target.style.height = 0;
      //this.firstChild.nodeValue = "Show content";
    }
  };
});

// transition untuk dropdown different location
document.addEventListener('DOMContentLoaded', function () {
  // transition untuk dropdown top menu with form
  document.getElementById('HeaderForm').onclick = function () {
    this.__toggle = !this.__toggle;
    var target = document.getElementById('HeaderInputArea');
    if (this.__toggle) {
      target.style.height = target.scrollHeight + "px";
      //this.firstChild.nodeValue = "Hide content";
      document.getElementById('HeaderForm').innerHTML = "Hide Options";
    } //"Hide Options &nbsp &nbsp<img class='d-xl-flex align-items-xl-end' src='Icon Arrow Circle Up.svg' />"
    else {
      target.style.height = 0;
      //this.firstChild.nodeValue = "Show content";
      document.getElementById('HeaderForm').innerHTML = "Show Options";
    } //"Show Options &nbsp &nbsp<img class='d-xl-flex align-items-xl-end' src='Icon Arrow Circle Down.svg' />"
  };
});

//time picker
var select = document.getElementById("selectMonth");
var options = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
for (var i = 0; i < options.length; i++) {
  var opt = options[i];
  var el = document.createElement("option");
  el.textContent = opt;
  el.value = opt;
  select.appendChild(el);
}
var select1 = document.getElementById("selectDay");
var options = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"];
for (var i = 0; i < options.length; i++) {
  var opt = options[i];
  var el = document.createElement("option");
  el.textContent = opt;
  el.value = opt;
  select1.appendChild(el);
}
var select2 = document.getElementById("selectYear");
var options = ["2021", "2020", "2019", "2018", "2017", "2016", "2015", "2014", "2013", "2012", "2011", "2010", "2009", "2008", "2007", "2006", "2005", "2004", "2003", "2002", "2001", "2000", "1999", "1998", "1997", "1996", "1995", "1994", "1993", "1992", "1991", "1990", "1989", "1988", "1987", "1986", "1985", "1984", "1983", "1982", "1981", "1980", "1979", "1978", "1977", "1976", "1975", "1974", "1973", "1972", "1971", "1970", "1969", "1968", "1967", "1966", "1965", "1964", "1963", "1962", "1961", "1960", "1959", "1958", "1957", "1956", "1955", "1954", "1953", "1952", "1951", "1950", "1949", "1948", "1947", "1946", "1945", "1944", "1943", "1942", "1941", "1940", "1939", "1938", "1937", "1936", "1935", "1934", "1933", "1932", "1931", "1930", "1929", "1928", "1927", "1926", "1925", "1924"];
for (var i = 0; i < options.length; i++) {
  var opt = options[i];
  var el = document.createElement("option");
  el.textContent = opt;
  el.value = opt;
  select2.appendChild(el);
}
function showValue() {
  document.getElementById("minPrice").value = document.getElementById("price-slider").valueLow * 15;
  document.getElementById("maxPrice").value = document.getElementById("price-slider").valueHigh * 15;
}
function updateSlider() {
  document.getElementById("price-slider").valueLow = document.getElementById("minPrice").value / 15;
  document.getElementById("price-slider").valueHigh = document.getElementById("maxPrice").value / 15;
  consol;
  e.log(document.getElementById("minPrice").value);
}
function hidepersonalform() {
  document.getElementById("personalform").style.display = "none";
  document.getElementById("process1").style.display = "none";
  document.getElementById("instruction-personal").style.display = "none";
  document.getElementById("addonform").style.display = "block";
  document.getElementById("instruction-addon").style.display = "block";
  document.getElementById("process2").style.display = "block";
  return false;
}
function showpersonalform() {
  document.getElementById("personalform").style.display = "block";
  document.getElementById("process1").style.display = "block";
  document.getElementById("instruction-personal").style.display = "block";
  document.getElementById("addonform").style.display = "none";
  document.getElementById("instruction-addon").style.display = "none";
  document.getElementById("process2").style.display = "none";
  return false;
}
function showaddonform() {
  document.getElementById("addonform").style.display = "block";
  document.getElementById("process2").style.display = "block";
  document.getElementById("instruction-addon").style.display = "block";
  document.getElementById("summaryform").style.display = "none";
  document.getElementById("instruction-payment").style.display = "none";
  document.getElementById("process3").style.display = "none";
  return false;
}
function hideaddonform() {
  var i = 0;
  var sum = 0;
  var subtotal = parseFloat($("#subtotal").text().replace(/,/, ''));
  var total = parseFloat($("#total").text().replace(/,/, ''));
  var days = parseFloat($("#days-total").text());
  var list = '';

  // Selector to select all input whose id starts with Amount
  $("input[id*='addonbox']").each(function () {
    sum += +($(this).val() * document.getElementsByName('price')[i].value) * days; // Parsing as int and adding it to sum

    if ($(this).val() > 0) {
      list = list + '<p class="text-left cost-summary-list-2"><span>(</span><span>' + document.getElementsByName('addon-name')[i].value + '</span><span>&nbsp;:&nbsp;</span><span>RM</span><span>' + document.getElementsByName('price')[i].value + '</span><span>&nbsp;per Day)</span></p>';
    }
    i++;
  });
  var num = parseFloat(sum);
  num = num.toFixed(2).toLocaleString();
  $("#addon-total").text(numberWithCommas(num));
  $("#addon-total-summary").text(numberWithCommas(num));

  //subtotal
  subtotal = parseFloat(subtotal) + parseFloat(num);
  subtotal = subtotal.toFixed(2).toLocaleString();
  $("#subtotal").text(numberWithCommas(subtotal));
  $("#subtotal-summary").text(numberWithCommas(subtotal));
  $("#subtotal-summary-2").text(numberWithCommas(subtotal));

  //total
  total = parseFloat(total) + parseFloat(num);
  total = total.toFixed(2).toLocaleString();
  $("#total").text(numberWithCommas(total));
  $("#total-summary").text(numberWithCommas(total));

  //PUT INFO
  //alert($("#name").text());
  $("#name-summary").text($("#name").val());
  $("#address-summary").text($("#address").val());
  $("#postcode-summary").text($("#postcode").val());
  $("#city-summary").text($("#city").val());
  $("#state-summary").text($("#state").val());
  $("#mobile-summary").text($("#mobile").val());
  $("#email-summary").text($("#email").val());
  document.getElementById("addonform").style.display = "none";
  document.getElementById("process2").style.display = "none";
  document.getElementById("instruction-addon").style.display = "none";
  document.getElementById("summaryform").style.display = "block";
  document.getElementById("instruction-payment").style.display = "block";
  document.getElementById("process3").style.display = "block";
  $("#addon-list").html('<p class="text-left cost-summary-list-1">Add-On<br></p>' + list);
}
function imgic(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#ic-preview').attr('src', e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
function imglicense(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#license-preview').attr('src', e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
function enableForm() {
  $('#driver_name').prop('disabled', false);
  $('#driver_ic').prop('disabled', false);
  $('#driver_mobile').prop('disabled', false);
}
(function (h, o, t, j, a, r) {
  h.hj = h.hj || function () {
    (h.hj.q = h.hj.q || []).push(arguments);
  };
  h._hjSettings = {
    hjid: 758280,
    hjsv: 6
  };
  a = o.getElementsByTagName('head')[0];
  r = o.createElement('script');
  r.async = 1;
  r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
  a.appendChild(r);
})(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

/***/ }),

/***/ "./resources/web/css/date_picker.css":
/*!*******************************************!*\
  !*** ./resources/web/css/date_picker.css ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/web/css/fonts.css":
/*!*************************************!*\
  !*** ./resources/web/css/fonts.css ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/web/css/styles.css":
/*!**************************************!*\
  !*** ./resources/web/css/styles.css ***!
  \**************************************/
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
/******/ 			"/assets/js/app": 0,
/******/ 			"assets/css/styles": 0,
/******/ 			"assets/css/fonts": 0,
/******/ 			"assets/css/date_picker": 0
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
/******/ 		var chunkLoadingGlobal = self["webpackChunkaracarrental1_2"] = self["webpackChunkaracarrental1_2"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["assets/css/styles","assets/css/fonts","assets/css/date_picker"], () => (__webpack_require__("./resources/web/js/app.js")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/styles","assets/css/fonts","assets/css/date_picker"], () => (__webpack_require__("./resources/web/css/date_picker.css")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/styles","assets/css/fonts","assets/css/date_picker"], () => (__webpack_require__("./resources/web/css/fonts.css")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["assets/css/styles","assets/css/fonts","assets/css/date_picker"], () => (__webpack_require__("./resources/web/css/styles.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;