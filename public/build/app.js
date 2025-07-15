(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _fortawesome_fontawesome_free_css_all_min_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @fortawesome/fontawesome-free/css/all.min.css */ "./node_modules/@fortawesome/fontawesome-free/css/all.min.css");
/* harmony import */ var _fortawesome_fontawesome_free_js_all_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @fortawesome/fontawesome-free/js/all.js */ "./node_modules/@fortawesome/fontawesome-free/js/all.js");
/* harmony import */ var _fortawesome_fontawesome_free_js_all_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_fortawesome_fontawesome_free_js_all_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./styles/app.scss */ "./assets/styles/app.scss");
/* harmony import */ var _scripts_loader_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/loader.js */ "./assets/scripts/loader.js");
/* harmony import */ var _scripts_loader_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_scripts_loader_js__WEBPACK_IMPORTED_MODULE_3__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */




console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');
var modal = document.getElementById('customModal');
var open = document.getElementById('openModal');
var close = modal.querySelector('.close');
open.addEventListener('click', function () {
  modal.style.display = 'block';
  console.log("test");
});
close.addEventListener('click', function () {
  modal.style.display = 'none';
});
window.addEventListener('click', function (e) {
  if (e.target === modal) {
    modal.style.display = 'none';
  }
});

/***/ }),

/***/ "./assets/scripts/loader.js":
/*!**********************************!*\
  !*** ./assets/scripts/loader.js ***!
  \**********************************/
/***/ (() => {

window.addEventListener('load', function () {
  var loader = document.getElementById('loader');
  loader.style.display = 'none';
});

/***/ }),

/***/ "./assets/styles/app.scss":
/*!********************************!*\
  !*** ./assets/styles/app.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_fortawesome_fontawesome-free_js_all_js-node_modules_fortawesome_fontawes-8e93d7"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDdUQ7QUFDTjtBQUN0QjtBQUNFO0FBRTdCQSxPQUFPLENBQUNDLEdBQUcsQ0FBQyxnRUFBZ0UsQ0FBQztBQUc3RSxJQUFNQyxLQUFLLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLGFBQWEsQ0FBQztBQUNwRCxJQUFNQyxJQUFJLEdBQUdGLFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLFdBQVcsQ0FBQztBQUNqRCxJQUFNRSxLQUFLLEdBQUdKLEtBQUssQ0FBQ0ssYUFBYSxDQUFDLFFBQVEsQ0FBQztBQUUzQ0YsSUFBSSxDQUFDRyxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsWUFBTTtFQUNqQ04sS0FBSyxDQUFDTyxLQUFLLENBQUNDLE9BQU8sR0FBRyxPQUFPO0VBQzdCVixPQUFPLENBQUNDLEdBQUcsQ0FBQyxNQUFNLENBQUM7QUFDdkIsQ0FBQyxDQUFDO0FBRUZLLEtBQUssQ0FBQ0UsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFlBQU07RUFDbENOLEtBQUssQ0FBQ08sS0FBSyxDQUFDQyxPQUFPLEdBQUcsTUFBTTtBQUNoQyxDQUFDLENBQUM7QUFFRkMsTUFBTSxDQUFDSCxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsVUFBQ0ksQ0FBQyxFQUFLO0VBQ3BDLElBQUlBLENBQUMsQ0FBQ0MsTUFBTSxLQUFLWCxLQUFLLEVBQUU7SUFDcEJBLEtBQUssQ0FBQ08sS0FBSyxDQUFDQyxPQUFPLEdBQUcsTUFBTTtFQUNoQztBQUNKLENBQUMsQ0FBQyxDOzs7Ozs7Ozs7O0FDaENGQyxNQUFNLENBQUNILGdCQUFnQixDQUFDLE1BQU0sRUFBRSxZQUFNO0VBQ2xDLElBQU1NLE1BQU0sR0FBR1gsUUFBUSxDQUFDQyxjQUFjLENBQUMsUUFBUSxDQUFDO0VBQ2hEVSxNQUFNLENBQUNMLEtBQUssQ0FBQ0MsT0FBTyxHQUFHLE1BQU07QUFDakMsQ0FBQyxDQUFDLEM7Ozs7Ozs7Ozs7OztBQ0hGIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc2NyaXB0cy9sb2FkZXIuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuc2Nzcz84ZjU5Il0sInNvdXJjZXNDb250ZW50IjpbIlxuLypcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcbiAqXG4gKiBUaGlzIGZpbGUgd2lsbCBiZSBpbmNsdWRlZCBvbnRvIHRoZSBwYWdlIHZpYSB0aGUgaW1wb3J0bWFwKCkgVHdpZyBmdW5jdGlvbixcbiAqIHdoaWNoIHNob3VsZCBhbHJlYWR5IGJlIGluIHlvdXIgYmFzZS5odG1sLnR3aWcuXG4gKi9cbmltcG9ydCAnQGZvcnRhd2Vzb21lL2ZvbnRhd2Vzb21lLWZyZWUvY3NzL2FsbC5taW4uY3NzJztcbmltcG9ydCAnQGZvcnRhd2Vzb21lL2ZvbnRhd2Vzb21lLWZyZWUvanMvYWxsLmpzJztcbmltcG9ydCAnLi9zdHlsZXMvYXBwLnNjc3MnO1xuaW1wb3J0ICcuL3NjcmlwdHMvbG9hZGVyLmpzJztcblxuY29uc29sZS5sb2coJ1RoaXMgbG9nIGNvbWVzIGZyb20gYXNzZXRzL2FwcC5qcyAtIHdlbGNvbWUgdG8gQXNzZXRNYXBwZXIhIPCfjoknKTtcblxuXG5jb25zdCBtb2RhbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdXN0b21Nb2RhbCcpO1xuY29uc3Qgb3BlbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdvcGVuTW9kYWwnKTtcbmNvbnN0IGNsb3NlID0gbW9kYWwucXVlcnlTZWxlY3RvcignLmNsb3NlJyk7XG5cbm9wZW4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XG4gICAgbW9kYWwuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7XG4gICAgY29uc29sZS5sb2coXCJ0ZXN0XCIpOyBcbn0pO1xuXG5jbG9zZS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHtcbiAgICBtb2RhbC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xufSk7XG5cbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChlKSA9PiB7XG4gICAgaWYgKGUudGFyZ2V0ID09PSBtb2RhbCkge1xuICAgICAgICBtb2RhbC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xuICAgIH1cbn0pOyIsIndpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdsb2FkJywgKCkgPT4ge1xuICAgIGNvbnN0IGxvYWRlciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsb2FkZXInKTtcbiAgICBsb2FkZXIuc3R5bGUuZGlzcGxheSA9ICdub25lJztcbn0pOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJjb25zb2xlIiwibG9nIiwibW9kYWwiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwib3BlbiIsImNsb3NlIiwicXVlcnlTZWxlY3RvciIsImFkZEV2ZW50TGlzdGVuZXIiLCJzdHlsZSIsImRpc3BsYXkiLCJ3aW5kb3ciLCJlIiwidGFyZ2V0IiwibG9hZGVyIl0sInNvdXJjZVJvb3QiOiIifQ==