/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/theme1/js/custom/modals/create-project/bundle/team.js":
/*!********************************************************************************!*\
  !*** ./resources/assets/theme1/js/custom/modals/create-project/bundle/team.js ***!
  \********************************************************************************/
/***/ ((module) => {

eval(" // Class definition\n\nvar KTModalCreateProjectTeam = function () {\n  // Variables\n  var nextButton;\n  var previousButton;\n  var form;\n  var stepper; // Private functions\n\n  var handleForm = function handleForm() {\n    nextButton.addEventListener('click', function (e) {\n      // Prevent default button action\n      e.preventDefault(); // Disable button to avoid multiple click \n\n      nextButton.disabled = true; // Show loading indication\n\n      nextButton.setAttribute('data-kt-indicator', 'on'); // Simulate form submission\n\n      setTimeout(function () {\n        // Enable button\n        nextButton.disabled = false; // Simulate form submission\n\n        nextButton.removeAttribute('data-kt-indicator'); // Go to next step\n\n        stepper.goNext();\n      }, 1500);\n    });\n    previousButton.addEventListener('click', function () {\n      stepper.goPrevious();\n    });\n  };\n\n  return {\n    // Public functions\n    init: function init() {\n      form = KTModalCreateProject.getForm();\n      stepper = KTModalCreateProject.getStepperObj();\n      nextButton = document.querySelector('[data-kt-element=\"team-next\"]');\n      previousButton = document.querySelector('[data-kt-element=\"team-previous\"]');\n      handleForm();\n    }\n  };\n}(); // Webpack support\n\n\nif ( true && typeof module.exports !== 'undefined') {\n  module.exports = KTModalCreateProjectTeam;\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL3RoZW1lMS9qcy9jdXN0b20vbW9kYWxzL2NyZWF0ZS1wcm9qZWN0L2J1bmRsZS90ZWFtLmpzLmpzIiwibWFwcGluZ3MiOiJDQUVBOztBQUNBLElBQUlBLHdCQUF3QixHQUFHLFlBQVk7QUFDMUM7QUFDQSxNQUFJQyxVQUFKO0FBQ0EsTUFBSUMsY0FBSjtBQUNBLE1BQUlDLElBQUo7QUFDQSxNQUFJQyxPQUFKLENBTDBDLENBTzFDOztBQUNBLE1BQUlDLFVBQVUsR0FBRyxTQUFiQSxVQUFhLEdBQVc7QUFDM0JKLElBQUFBLFVBQVUsQ0FBQ0ssZ0JBQVgsQ0FBNEIsT0FBNUIsRUFBcUMsVUFBVUMsQ0FBVixFQUFhO0FBQ2pEO0FBQ0FBLE1BQUFBLENBQUMsQ0FBQ0MsY0FBRixHQUZpRCxDQUlqRDs7QUFDQVAsTUFBQUEsVUFBVSxDQUFDUSxRQUFYLEdBQXNCLElBQXRCLENBTGlELENBT2pEOztBQUNBUixNQUFBQSxVQUFVLENBQUNTLFlBQVgsQ0FBd0IsbUJBQXhCLEVBQTZDLElBQTdDLEVBUmlELENBVWpEOztBQUNBQyxNQUFBQSxVQUFVLENBQUMsWUFBVztBQUNyQjtBQUNBVixRQUFBQSxVQUFVLENBQUNRLFFBQVgsR0FBc0IsS0FBdEIsQ0FGcUIsQ0FJckI7O0FBQ0FSLFFBQUFBLFVBQVUsQ0FBQ1csZUFBWCxDQUEyQixtQkFBM0IsRUFMcUIsQ0FPckI7O0FBQ0FSLFFBQUFBLE9BQU8sQ0FBQ1MsTUFBUjtBQUNBLE9BVFMsRUFTUCxJQVRPLENBQVY7QUFVQSxLQXJCRDtBQXVCQVgsSUFBQUEsY0FBYyxDQUFDSSxnQkFBZixDQUFnQyxPQUFoQyxFQUF5QyxZQUFZO0FBQ3BERixNQUFBQSxPQUFPLENBQUNVLFVBQVI7QUFDQSxLQUZEO0FBR0EsR0EzQkQ7O0FBNkJBLFNBQU87QUFDTjtBQUNBQyxJQUFBQSxJQUFJLEVBQUUsZ0JBQVk7QUFDakJaLE1BQUFBLElBQUksR0FBR2Esb0JBQW9CLENBQUNDLE9BQXJCLEVBQVA7QUFDQWIsTUFBQUEsT0FBTyxHQUFHWSxvQkFBb0IsQ0FBQ0UsYUFBckIsRUFBVjtBQUNBakIsTUFBQUEsVUFBVSxHQUFHa0IsUUFBUSxDQUFDQyxhQUFULENBQXVCLCtCQUF2QixDQUFiO0FBQ0FsQixNQUFBQSxjQUFjLEdBQUdpQixRQUFRLENBQUNDLGFBQVQsQ0FBdUIsbUNBQXZCLENBQWpCO0FBRUFmLE1BQUFBLFVBQVU7QUFDVjtBQVRLLEdBQVA7QUFXQSxDQWhEOEIsRUFBL0IsQyxDQWtEQTs7O0FBQ0EsSUFBSSxTQUFpQyxPQUFPZ0IsTUFBTSxDQUFDQyxPQUFkLEtBQTBCLFdBQS9ELEVBQTRFO0FBQzNFRCxFQUFBQSxNQUFNLENBQUNDLE9BQVAsR0FBaUJ0Qix3QkFBakI7QUFDQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvdGhlbWUxL2pzL2N1c3RvbS9tb2RhbHMvY3JlYXRlLXByb2plY3QvYnVuZGxlL3RlYW0uanM/MTMzMCJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtUTW9kYWxDcmVhdGVQcm9qZWN0VGVhbSA9IGZ1bmN0aW9uICgpIHtcclxuXHQvLyBWYXJpYWJsZXNcclxuXHR2YXIgbmV4dEJ1dHRvbjtcclxuXHR2YXIgcHJldmlvdXNCdXR0b247XHJcblx0dmFyIGZvcm07XHJcblx0dmFyIHN0ZXBwZXI7XHJcblxyXG5cdC8vIFByaXZhdGUgZnVuY3Rpb25zXHJcblx0dmFyIGhhbmRsZUZvcm0gPSBmdW5jdGlvbigpIHtcclxuXHRcdG5leHRCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG5cdFx0XHQvLyBQcmV2ZW50IGRlZmF1bHQgYnV0dG9uIGFjdGlvblxyXG5cdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblxyXG5cdFx0XHQvLyBEaXNhYmxlIGJ1dHRvbiB0byBhdm9pZCBtdWx0aXBsZSBjbGljayBcclxuXHRcdFx0bmV4dEJ1dHRvbi5kaXNhYmxlZCA9IHRydWU7XHJcblxyXG5cdFx0XHQvLyBTaG93IGxvYWRpbmcgaW5kaWNhdGlvblxyXG5cdFx0XHRuZXh0QnV0dG9uLnNldEF0dHJpYnV0ZSgnZGF0YS1rdC1pbmRpY2F0b3InLCAnb24nKTtcclxuXHJcblx0XHRcdC8vIFNpbXVsYXRlIGZvcm0gc3VibWlzc2lvblxyXG5cdFx0XHRzZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xyXG5cdFx0XHRcdC8vIEVuYWJsZSBidXR0b25cclxuXHRcdFx0XHRuZXh0QnV0dG9uLmRpc2FibGVkID0gZmFsc2U7XHJcblx0XHRcdFx0XHJcblx0XHRcdFx0Ly8gU2ltdWxhdGUgZm9ybSBzdWJtaXNzaW9uXHJcblx0XHRcdFx0bmV4dEJ1dHRvbi5yZW1vdmVBdHRyaWJ1dGUoJ2RhdGEta3QtaW5kaWNhdG9yJyk7XHJcblx0XHRcdFx0XHJcblx0XHRcdFx0Ly8gR28gdG8gbmV4dCBzdGVwXHJcblx0XHRcdFx0c3RlcHBlci5nb05leHQoKTtcclxuXHRcdFx0fSwgMTUwMCk7IFx0XHRcclxuXHRcdH0pO1xyXG5cclxuXHRcdHByZXZpb3VzQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xyXG5cdFx0XHRzdGVwcGVyLmdvUHJldmlvdXMoKTtcclxuXHRcdH0pO1xyXG5cdH1cclxuXHJcblx0cmV0dXJuIHtcclxuXHRcdC8vIFB1YmxpYyBmdW5jdGlvbnNcclxuXHRcdGluaXQ6IGZ1bmN0aW9uICgpIHtcclxuXHRcdFx0Zm9ybSA9IEtUTW9kYWxDcmVhdGVQcm9qZWN0LmdldEZvcm0oKTtcclxuXHRcdFx0c3RlcHBlciA9IEtUTW9kYWxDcmVhdGVQcm9qZWN0LmdldFN0ZXBwZXJPYmooKTtcclxuXHRcdFx0bmV4dEJ1dHRvbiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWt0LWVsZW1lbnQ9XCJ0ZWFtLW5leHRcIl0nKTtcclxuXHRcdFx0cHJldmlvdXNCdXR0b24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbZGF0YS1rdC1lbGVtZW50PVwidGVhbS1wcmV2aW91c1wiXScpO1xyXG5cclxuXHRcdFx0aGFuZGxlRm9ybSgpO1xyXG5cdFx0fVxyXG5cdH07XHJcbn0oKTtcclxuXHJcbi8vIFdlYnBhY2sgc3VwcG9ydFxyXG5pZiAodHlwZW9mIG1vZHVsZSAhPT0gJ3VuZGVmaW5lZCcgJiYgdHlwZW9mIG1vZHVsZS5leHBvcnRzICE9PSAndW5kZWZpbmVkJykge1xyXG5cdG1vZHVsZS5leHBvcnRzID0gS1RNb2RhbENyZWF0ZVByb2plY3RUZWFtO1xyXG59Il0sIm5hbWVzIjpbIktUTW9kYWxDcmVhdGVQcm9qZWN0VGVhbSIsIm5leHRCdXR0b24iLCJwcmV2aW91c0J1dHRvbiIsImZvcm0iLCJzdGVwcGVyIiwiaGFuZGxlRm9ybSIsImFkZEV2ZW50TGlzdGVuZXIiLCJlIiwicHJldmVudERlZmF1bHQiLCJkaXNhYmxlZCIsInNldEF0dHJpYnV0ZSIsInNldFRpbWVvdXQiLCJyZW1vdmVBdHRyaWJ1dGUiLCJnb05leHQiLCJnb1ByZXZpb3VzIiwiaW5pdCIsIktUTW9kYWxDcmVhdGVQcm9qZWN0IiwiZ2V0Rm9ybSIsImdldFN0ZXBwZXJPYmoiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJtb2R1bGUiLCJleHBvcnRzIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/theme1/js/custom/modals/create-project/bundle/team.js\n");

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
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/theme1/js/custom/modals/create-project/bundle/team.js");
/******/ 	
/******/ })()
;