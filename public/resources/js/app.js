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

    if(user_profile_tab_1.length){
        if($('#content').length){
            $("#content").html('');
            $("#content").load('/app/views/user/components/vos_infos.php');
        }
    }

    user_profile_tab_1.on('click',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            user_profile_tab_2.removeClass('active');
            
            $("#content").html('');
            $("#content").load('/app/views/user/components/vos_infos.php');
        }
    })

    user_profile_tab_2.on('click',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            user_profile_tab_1.removeClass('active');
            
            $("#content").html('');
            $("#content").load('/app/views/user/components/coord_proches.php');
        }
    })

        
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

    
});