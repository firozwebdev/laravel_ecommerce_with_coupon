class SliderRanger{
    constructor(){
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
    events(){
        //this.min.on("click", this.rangeSlider);
    }

    //methods

    getProducts(process,data){
        $.post(process, data, function(result){

            console.log(result);


        });
    }

    success(result){
        console.log(this.result);
    }

    helloWorld(){
        $.post('/sort-by-pricewithcategory', data, function(result){
            console.log(result);
            
        }); 
    }

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

                this.min = $('#input-with-keypress-0').val();
                this.max = $('#input-with-keypress-1').val();

                
               // this.process = "{{ route('store.sort') }}";
                
                var _token = $('input[name="_token"]').val();
                var sliderRangeTimer = null;
                var category_id = true;
               

            
               
                if(category_id !=false){
                    

                    var information = {
                        _token : _token,
                        min    :this.min,
                        max    :this.max,
                    }

                    
                    if(this.min >5 && this.max <= 100){

                      clearTimeout(this.sliderTimer);
                       var that = this;

                       
                        
                       var responseProduct = '';
                       this.sliderTimer = setTimeout(function(){

                       


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
                            success: function(res){
                              
                                console.log(res);
                                  
                                   $.each(res.products, function(i, product) {
                                    
                                   
                                       // console.log(product);
                                    
                                       
                                        responseProduct += `
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box">
                                                <div class="img"><img src="http://localhost:8000/assets/images/product-img/${product.image}" alt="" /></div>
                                                <div class="product-detail">
                                                    <div class="name"><strong>${product.name} </strong></div>
                                                    <div class="rating">
                                                        <a href="search-page.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                        <a href="search-page.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                        <a href="search-page.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                                        <a href="search-page.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                        <a href="search-page.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="price"><span>${product.price}</span></div>
                                                </div>
                                                <div class="hover-block">
                                                    <ul class="list-inline">
                                                        <li><a href="" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        `;


                                    });
                                    
                
                                    if(res.products){
                                        $('#shop-box-products').html(responseProduct);
                                    }
                                   
                               





                            }
                          }); 

                      },1000); 

                    }
                }



               

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

        }
    } 

    


}

export default SliderRanger;




