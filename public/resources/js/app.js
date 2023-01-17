/* wait for the page to load completely to add the js code */
window.addEventListener('load',() => {

    /* import jquery */
    var script = document.createElement('script');
    script.src = 'https://code.jquery.com/jquery-3.4.1.min.js';
    script.type = 'text/javascript';
    document.getElementsByTagName('head')[0].appendChild(script);



    /* code for interactivity in the user profile tab */
    user_profile_tab_1=$('#user_profile_tab_1')
    user_profile_tab_2=$('#user_profile_tab_2')
    user_info=document.getElementById('vosInfos')
    proches_info=document.getElementById('proches')

    if(user_profile_tab_1.length){
    

        user_profile_tab_1.on('click',function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active');
                user_profile_tab_2.removeClass('active');
                user_info.style.display='block';
                proches_info.style.display='none';
            }
        })

        user_profile_tab_2.on('click',function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active');
                user_profile_tab_1.removeClass('active');
                user_info.style.display='none';
                proches_info.style.display='block';
                
            }
        })
    }

        
    /* code for interactivity in the user modification tab */
    user_modification_tab_1=$('#user_modification_tab_1')
    user_modification_tab_2=$('#user_modification_tab_2')

    if(user_modification_tab_1.length){
        if($('#content').length){
            $("#content").html('');
            $("#content").load('/app/views/user/components/modif_proches1.php');
        }
    }

    user_modification_tab_1.on('click',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            user_modification_tab_2.removeClass('active');
            
            $("#content").html('');
            $("#content").load('/app/views/user/components/modif_proches1.php');
        }
    })

    user_modification_tab_2.on('click',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            user_modification_tab_1.removeClass('active');
            
            $("#content").html('');
            $("#content").load('/app/views/user/components/modif_proches2.php');
        }
    })


    var loadFile = function (event) {
        var image = document.getElementById("output");
        image.src = URL.createObjectURL(event.target.files[0]);
    };

    document.addEventListener('click', function(e) {
        var node = e.target;
        var clickedId = node.id;
        var inside = false;
        while (node) {
            if (node.classList.contains('modal')) {
                inside = true;
                break;
            }
            node = node.parentElement;
        }
    if (!inside) {
            if(clickedId=='searchUser' && document.getElementById("searchUser").style.display!='none'){
                document.getElementById("searchUser").style.display='none';
            }
        }
    });

    activateBreakPoints() 
    // events when reaching a breakpoint (mainly toggling classes)
    window.addEventListener("resize", function() {
        activateBreakPoints() ;
    })

    // events when reaching a breakpoint (mainly toggling classes)
    function activateBreakPoints() {
        //define the breakpoints 
        breakpoints = []
        breakpoints['xxs']=['0px']
        breakpoints['xs']=['432px']
        breakpoints['sm']=['600px']
        breakpoints['md']=['768px']
        breakpoints['lg']=['992px']
        breakpoints['xl']=['1200px']

        // get the col-6 + break-md elements (to make breakpoint)
        var breakCol = Array.prototype.slice.call($(".break-col-6-md"));
        breakCol.forEach(e => {
            toggleClassOnBreakpoint('add', e, breakpoints['md'], 'col-12');
            toggleClassOnBreakpoint('remove', e, breakpoints['md'], 'col-6');
        });
        
        // get the col-7 + break-md elements (to make breakpoint)
        var breakCol = Array.prototype.slice.call($(".break-col-7-md"));
        breakCol.forEach(e => {
            toggleClassOnBreakpoint('add', e, breakpoints['md'], 'col-12');
            toggleClassOnBreakpoint('remove', e, breakpoints['md'], 'col-7');
        });

        // get the col-7 + break-md elements (to make breakpoint)
        var breakCol = Array.prototype.slice.call($(".break-col-7-lg"));
        breakCol.forEach(e => {
            toggleClassOnBreakpoint('add', e, breakpoints['lg'], 'col-12');
            toggleClassOnBreakpoint('remove', e, breakpoints['lg'], 'col-7');
        });

        // get the col-4 + break-lg elements (to make breakpoint)
        var breakCol = Array.prototype.slice.call($(".break-col-4-lg"));
        breakCol.forEach(e => {
            toggleClassOnBreakpoint('add', e, breakpoints['lg'], 'col-12');
            toggleClassOnBreakpoint('remove', e, breakpoints['lg'], 'col-4');
        });
        
        // get the col-4 + break-md elements (to make breakpoint)
        var breakCol = Array.prototype.slice.call($(".break-col-4-md"));
        breakCol.forEach(e => {
            toggleClassOnBreakpoint('add', e, breakpoints['md'], 'col-12');
            toggleClassOnBreakpoint('remove', e, breakpoints['md'], 'col-4');
        });

        // get the col-2 + break-lg elements (to make breakpoint)
        var breakCol = Array.prototype.slice.call($(".break-col-2-lg"));
        breakCol.forEach(e => {
            toggleClassOnBreakpoint('add', e, breakpoints['lg'], 'col-12');
            toggleClassOnBreakpoint('remove', e, breakpoints['lg'], 'col-2');
        });
        // get the col-10 + break-lg elements (to make breakpoint)
        var breakCol = Array.prototype.slice.call($(".break-col-10-lg"));
        breakCol.forEach(e => {
            toggleClassOnBreakpoint('add', e, breakpoints['lg'], 'col-12');
            toggleClassOnBreakpoint('remove', e, breakpoints['lg'], 'col-10');
        });

        // get the d-*breakpoint*-*block/none* elements (to make display breakpoints)
        var breakDisp = Array.prototype.slice.call($(".d-xxs-none.d-md-block"));
        breakDisp.forEach(e => {
            toggleClassOnBreakpoint('add', e, breakpoints['md'], 'd-none');
            toggleClassOnBreakpoint('remove', e, breakpoints['md'], 'd-block');
        });

        // get the d-*breakpoint*-*block/none* elements (to make display breakpoints)
        var breakDisp = Array.prototype.slice.call($(".d-xxs-none.d-lg-block"));
        breakDisp.forEach(e => {
            toggleClassOnBreakpoint('add', e, breakpoints['lg'], 'd-none');
            toggleClassOnBreakpoint('remove', e, breakpoints['lg'], 'd-block');
        });

        // responsiveness capteurs images
        var capteurs = Array.prototype.slice.call($(".capteurs"));
        for (let i = 0; i < capteurs.length; ++i) {
            e = capteurs[i];

            toggleClassOnBreakpoint('remove', e, breakpoints['lg'], 'col-20pc');
            if(i==4){
                toggleClassOnBreakpoint('remove', e, [breakpoints['md'],breakpoints['lg']], 'col-6');
                toggleClassOnBreakpoint('add', e, breakpoints['md'], 'col-12');
            } else if (i==3) {
                toggleClassOnBreakpoint('remove', e, [breakpoints['xs'],breakpoints['lg']], 'col-6');
                toggleClassOnBreakpoint('add', e, breakpoints['xs'], 'col-12');
            } else {
                toggleClassOnBreakpoint('remove', e, [breakpoints['md'],breakpoints['lg']], 'col-4');
                toggleClassOnBreakpoint('remove', e, [breakpoints['xs'],breakpoints['md']], 'col-6');
                toggleClassOnBreakpoint('add', e, breakpoints['xs'], 'col-12');
            }
        }

        //toggle the class of montre (two classes toggled: montre-md is added when above medium size window, and montre is for under the medium size window)
        montre = document.getElementById('montre')
        if(montre !=undefined){
            toggleClassOnBreakpoint('remove', montre, breakpoints['md'], 'montre-md');
            toggleClassOnBreakpoint('add', montre, breakpoints['md'], 'montre');
        }

        // responsiveness for the product details
        productDetail = document.getElementById('productDetail')
        if(productDetail !=undefined){
            toggleClassOnBreakpoint('remove', productDetail, breakpoints['lg'], 'w-50');
            toggleClassOnBreakpoint('add', productDetail, breakpoints['lg'], 'w-100');
        }
    }

    // function to toggle a class of a certain element at a certain breakpoint
    function toggleClassOnBreakpoint(action, x, breakpoint, classToToggle) {
        if(breakpoint.length==2){
            delimitations = "(min-width: "+breakpoint[0]+")"+" and (max-width: "+breakpoint[1]+")"
        } else {
            delimitations = "(min-width: "+breakpoint+")"
        }

        
        // if breakpoint matches, add or remove the class, depending on the action set in parameter
        if (!window.matchMedia(delimitations).matches) {

            // if action is remove and if contains the class, then toggle (remove)
            if(action=='remove' && x.classList.contains(classToToggle)) {
                x.classList.toggle(classToToggle);

            //if action is add and if not contains class, then toggle (add)
            } else if(action=='add' && !x.classList.contains(classToToggle)) {
                x.classList.toggle(classToToggle);
            }
        

        // if it's not the correct breakpoint, then check that element has the correct classes
        } else {

            //if action is add and if contains class, then toggle (remove)
            if(action=='add' && x.classList.contains(classToToggle)) {
                x.classList.toggle(classToToggle);

            // if action is remove and if not contains the class, then toggle (add)
            } else if(action=='remove' && !x.classList.contains(classToToggle)) {
                x.classList.toggle(classToToggle);
            }
        }
    }
    
    
});