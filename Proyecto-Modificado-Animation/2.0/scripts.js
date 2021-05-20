
     <script>
        const Conten_Somos = document.getElementById('Conten_Somos');
        const Selector_1 = document.getElementById('Selector_1');

        Selector_1.addEventListener('click',function() {
        if (Conten_Somos.classList.contains('Menu_Header_Somos_no_ver')) {
           Conten_Somos.classList.remove('Menu_Header_Somos_no_ver')
        }else{
           Conten_Somos.classList.add('Menu_Header_Somos_ver');
        }
        });

    </script> 