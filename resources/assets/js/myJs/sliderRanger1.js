class SliderRanger{
    constructor(){
        this.min = $('#input-with-keypress-0').val();
        this.max = $('#input-with-keypress-1').val();

        this.rangeSlider();
        this.sliderTimer;
    }

    //Events
    events(){
        //this.min.on("click", this.rangeSlider);
    }

    //methods

    rangeSlider(){
        if ($("#keypress").length){
            var keypressSlider = document.getElementById('keypress');
            var input0 = document.getElementById('input-with-keypress-0');
            var input1 = document.getElementById('input-with-keypress-1');

            var inputs = [input0, input1];
            noUiSlider.create(keypressSlider, {
                start: [ 5, 100 ],
                connect: true,
                tooltips: [
                    wNumb({
                        decimals: 1,
                        postfix: ' ($)'
                    }),
                    wNumb({
                        decimals:1,
                        postfix: ' ($)'
                    })
                ],
                range: {
                    'min': 0,
                    'max': 100
                },
                format: wNumb({
                    decimals: 1,

                }),

            });

            keypressSlider.noUiSlider.on('update', function( values, handle ) {
                inputs[handle].value = values[handle];




               
                var sliderRangeTimer = null;
                var category_id = "{{ Session::get('category_id') }}";
                var token = "{{ csrf_token() }}"; 

                /*if( this.min !=false && this.max !=false && category_id==false){

                    //console.log('i am first');
                    var process = "{{ route('shop.price.slider') }}";

                    var data = {
                        "_token":token,
                        "min":min,
                        "max":max,
                    }
                    if((min >5 || max <= 100) || (min >5 && max <= 100)){
                        
                        sliderRangeTimer = setTimeout(function() {
                            //get_products(process,data);
                            alert("I am here...");
                        },2000);
                       
                        
                    }
                } */


                if(category_id !=false){
                    var process = "{{ route('shop.pricewithcategory.slider') }}";

                    var data = {
                       // "_token":token,
                        //"min":this.min,
                       // "max":this.max,
                    }
                    if(this.min >5 && this.max <= 100){

                       // get_products(process,data);
                       //console.log(this.min);
                       clearTimeout(this.sliderTimer);
                       this.sliderTimer = setTimeout(function(){
                        this.min = $('#input-with-keypress-0').val();
                        this.max = $('#input-with-keypress-1').val();
                           console.log('Min Value:'+ this.min +' and Max Value: '+ this.max);
                       },2000);

                    }
                }



                //

            });

            function setSliderHandle(i, value) {
                var r = [null,null];
                r[i] = value;
                keypressSlider.noUiSlider.set(r);
            }

            // Listen to keydown events on the input field.
            inputs.forEach(function(input, handle) {

                input.addEventListener('change', function(){
                    setSliderHandle(handle, this.value);
                });

                input.addEventListener('keydown', function( e ) {

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
                    switch ( e.which ) {

                        case 13:
                            setSliderHandle(handle, this.value);
                            break;

                        case 38:

                            // Get step to go increase slider value (up)
                            position = step[1];

                            // false = no step is set
                            if ( position === false ) {
                                position = 1;
                            }

                            // null = edge of slider
                            if ( position !== null ) {
                                setSliderHandle(handle, value + position);
                            }

                            break;

                        case 40:

                            position = step[0];

                            if ( position === false ) {
                                position = 1;
                            }

                            if ( position !== null ) {
                                setSliderHandle(handle, value - position);
                            }

                            break;
                    }
                });
            });

        } */
    }

}

export default SliderRanger;