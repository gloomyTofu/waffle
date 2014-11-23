               <a class="exit-off-canvas"></a>

            </div>
        </div>
        
        <script src="bower_components/foundation/js/foundation.min.js"></script>
        <script>
            $(document).foundation();
            
            $(document).ready(function(){
                $('.custom-menu-icon').click(function(){false});
        
                $('.modal-popup').on('click',function(){
                    var modalName = $(this).attr('data-reveal-id');
                    $('.reveal-modal').attr('id', modalName);
                    $(this).foundation( 'reflow' );
                });  
            });
        </script>

    </body>
</html>