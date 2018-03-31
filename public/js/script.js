/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 43);
/******/ })
/************************************************************************/
/******/ ({

/***/ 43:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(44);


/***/ }),

/***/ 44:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__sliderRanger__ = __webpack_require__(45);



var sliderRanger = new __WEBPACK_IMPORTED_MODULE_0__sliderRanger__["a" /* default */]();

/***/ }),

/***/ 45:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var SliderRanger = function () {
    function SliderRanger() {
        _classCallCheck(this, SliderRanger);

        //this.min = $('#input-with-keypress-0').val();
        //this.max = $('#input-with-keypress-1').val();
        this.min;
        this.mix;
        this.process;
        this.token;
        this.data;
        this.rangeSlider();
        this.sliderTimer;
    }

    //Events


    _createClass(SliderRanger, [{
        key: 'events',
        value: function events() {}
        //this.min.on("click", this.rangeSlider);


        //methods

    }, {
        key: 'getProducts',
        value: function getProducts(process, data) {
            $.post(process, data, function (result) {

                console.log(result);
            });
        }
    }, {
        key: 'success',
        value: function success(result) {
            console.log(this.result);
        }
    }, {
        key: 'helloWorld',
        value: function helloWorld() {
            $.post('/sort-by-pricewithcategory', data, function (result) {
                console.log(result);
            });
        }
    }, {
        key: 'rangeSlider',
        value: function rangeSlider() {
            if ($("#keypress").length) {
                var setSliderHandle = function setSliderHandle(i, value) {
                    var r = [null, null];
                    r[i] = value;
                    keypressSlider.noUiSlider.set(r);
                };

                // Listen to keydown events on the input field.


                var keypressSlider = document.getElementById('keypress');
                var input0 = document.getElementById('input-with-keypress-0');
                var input1 = document.getElementById('input-with-keypress-1');

                var inputs = [input0, input1];
                noUiSlider.create(keypressSlider, {
                    start: [5, 100],
                    connect: true,
                    tooltips: [wNumb({
                        decimals: 1,
                        postfix: ' ($)'
                    }), wNumb({
                        decimals: 1,
                        postfix: ' ($)'
                    })],
                    range: {
                        'min': 0,
                        'max': 100
                    },
                    format: wNumb({
                        decimals: 1

                    })

                });

                keypressSlider.noUiSlider.on('update', function (values, handle) {
                    inputs[handle].value = values[handle];

                    this.min = $('#input-with-keypress-0').val();
                    this.max = $('#input-with-keypress-1').val();

                    // this.process = "{{ route('store.sort') }}";

                    var _token = $('input[name="_token"]').val();
                    var sliderRangeTimer = null;
                    var category_id = true;

                    if (category_id != false) {

                        var information = {
                            _token: _token,
                            min: this.min,
                            max: this.max
                        };

                        if (this.min > 5 && this.max <= 100) {

                            clearTimeout(this.sliderTimer);
                            var that = this;

                            var responseProduct = '';
                            this.sliderTimer = setTimeout(function () {

                                //var data = '';
                                //console.log(data.min +' and '+ data.max);
                                $.ajax({
                                    url: '/sort-by-pricewithcategory',
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    method: 'POST',
                                    dataType: 'json',
                                    data: information,
                                    success: function success(res) {

                                        console.log(res);

                                        $.each(res.products, function (i, product) {

                                            // console.log(product);


                                            responseProduct += '\n                                        <div class="col-md-4 col-sm-6">\n                                            <div class="product-box">\n                                                <div class="img"><img src="http://localhost:8000/assets/images/product-img/' + product.image + '" alt="" /></div>\n                                                <div class="product-detail">\n                                                    <div class="name"><strong>' + product.name + ' </strong></div>\n                                                    <div class="rating">\n                                                        <a href="search-page.html#"><i class="fa fa-star" aria-hidden="true"></i></a>\n                                                        <a href="search-page.html#"><i class="fa fa-star" aria-hidden="true"></i></a>\n                                                        <a href="search-page.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>\n                                                        <a href="search-page.html#"><i class="fa fa-star" aria-hidden="true"></i></a>\n                                                        <a href="search-page.html#"><i class="fa fa-star" aria-hidden="true"></i></a>\n                                                    </div>\n                                                    <div class="price"><span>' + product.price + '</span></div>\n                                                </div>\n                                                <div class="hover-block">\n                                                    <ul class="list-inline">\n                                                        <li><a href="" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>\n                                                        <li><a href="" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>\n                                                        <li><a href="" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>\n                                                    </ul>\n                                                </div>\n                                            </div>\n                                        </div>\n                                        ';
                                        });

                                        if (res.products) {
                                            $('#shop-box-products').html(responseProduct);
                                        }
                                    }
                                });
                            }, 1000);
                        }
                    }
                });

                inputs.forEach(function (input, handle) {

                    input.addEventListener('change', function () {
                        setSliderHandle(handle, this.value);
                    });

                    input.addEventListener('keydown', function (e) {

                        var values = keypressSlider.noUiSlider.get();
                        var value = Number(values[handle]);

                        // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
                        var steps = keypressSlider.noUiSlider.steps();

                        // [down, up]
                        var step = steps[handle];

                        var position;

                        // 13 is enter,
                        // 38 is key up,
                        // 40 is key down.
                        switch (e.which) {

                            case 13:
                                setSliderHandle(handle, this.value);
                                break;

                            case 38:

                                // Get step to go increase slider value (up)
                                position = step[1];

                                // false = no step is set
                                if (position === false) {
                                    position = 1;
                                }

                                // null = edge of slider
                                if (position !== null) {
                                    setSliderHandle(handle, value + position);
                                }

                                break;

                            case 40:

                                position = step[0];

                                if (position === false) {
                                    position = 1;
                                }

                                if (position !== null) {
                                    setSliderHandle(handle, value - position);
                                }

                                break;
                        }
                    });
                });
            }
        }
    }]);

    return SliderRanger;
}();

/* harmony default export */ __webpack_exports__["a"] = (SliderRanger);

/***/ })

/******/ });